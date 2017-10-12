<?php

namespace AppBundle\Controller;

use AppBundle\Entity\blocco;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use KMS\FroalaEditorBundle\Form\Type\FroalaEditorType;

class DocsController extends Controller
{
    /**
     * @Route("/", name="docs_index")
     */
    public function indexAction()
    {
      return $this->render('docs/index.html.twig');
    }

    /**
     * @Route("/docs/elenco", name="docs_list")
     */
    public function documentiAction(Request $request)
    {
      $repository = $this->getDoctrine()->getRepository('AppBundle:Documento');
      $documenti = $repository->findAll();
      return $this->render('docs/list.html.twig', array('docs'=> $documenti));
    }

    /**
     * @Route("/docs/dati/{id}", name="dati")
     */
    public function datiAction($id, Request $request)
    {
      $repoDati = $this->getDoctrine()->getRepository('AppBundle:Dati');
      $dati = $repoDati->findAll();
      $repoDoc = $this->getDoctrine()->getRepository('AppBundle:Documento');
      $documento = $repoDoc->find($id);
      $datiDoc = $documento->getDati();
      return $this->render('docs/dati.html.twig', array('dati'=> $dati, 'valori' => $datiDoc, 'doc' => $documento ));
    }

    /**
     * @Route("/docs/{id}/dato/{slug}", name="edit_dato")
     */
    public function EditDatoAction($id,$slug,Request $request)
    {
      $repoDati = $this->getDoctrine()->getRepository('AppBundle:Dati');
      $dati = $repoDati->findAll();
      $repoDoc = $this->getDoctrine()->getRepository('AppBundle:Documento');
      $documento = $repoDoc->find($id);
      $datiDoc = $documento->getDati();
      $dato =  $repoDati->findOneBySlug($slug);

      $form = $this->createFormBuilder()
        ->add( "Testo", TextareaType::class, array('label' => false, 'data' => $datiDoc[$slug],
                                                   'attr' => array('class' => 'form-control') ) )
        ->add('save', SubmitType::class, array('label' => 'Salva Dato', 'attr' => array( 'class' => 'btn btn-success', )))
        ->getForm();

      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()) {

        $valore = $form['Nome']->getData();
        $blocco->setTesto($testo);
        $em = $this->getDoctrine()->getManager();
        $em->persist($blocco);
        $em->flush();

      }

      return $this->render('docs/dato_edit.html.twig',
                           array('nome'=> $documento->getNome(), 'nome_dato' => $dato->getNome(),
                           'form' => $form->createView()));
    }

    /**
     * @Route("/docs/nuovo", name="new_doc")
     */
    public function AddDocAction(Request $request)
    {
      return $this->render('docs/doc_new.html.twig');
    }

    /**
     * @Route("/docs/blocchi/elenco", name="block_list")
     */
    public function blocchiAction(Request $request)
    {
      $repository = $this->getDoctrine()->getRepository('AppBundle:blocco');
      $blocchi = $repository->findAll();
      return $this->render('docs/block_list.html.twig', array('blocchi'=> $blocchi));
    }

    /**
     * @Route("/docs/blocco/{id}", name="block_edit")
     */
    public function bloccoAction($id,Request $request)
    {
      $repository = $this->getDoctrine()->getRepository('AppBundle:blocco');
      $blocco = $repository->find($id);
      $form = $this->createFormBuilder()
        ->add( "Testo", FroalaEditorType::class, array('label' => false, 'data' => $blocco->getTesto() ) )
        ->getForm();

      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()) {

        $testo = $form['Testo']->getData();
        $blocco->setTesto($testo);
        $em = $this->getDoctrine()->getManager();
        $em->persist($blocco);
        $em->flush();

      }
      return $this->render('docs/block_edit.html.twig', array('blocco'=> $blocco, 'form' => $form->createView() ) );
    }

}

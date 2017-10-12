<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 *
 * @ORM\Table(name="documento")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DocumentoRepository")
 */
class Documento
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var array
     *
     * @ORM\Column(name="dati", type="json_array")
     */
    private $dati;

    /**
     * @var string
     *
     * @ORM\Column(name="html", type="text")
     */
    private $html;

    /**
     * @var string
     *
     * @ORM\Column(name="stato", type="string", length=32, nullable=true)
     */
    private $stato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aggiornato", type="datetimetz")
     */
    private $aggiornato;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Documento
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set dati
     *
     * @param array $dati
     *
     * @return Documento
     */
    public function setDati($dati)
    {
        $this->dati = $dati;

        return $this;
    }

    /**
     * Get dati
     *
     * @return array
     */
    public function getDati()
    {
        return $this->dati;
    }

    /**
     * Set html
     *
     * @param string $html
     *
     * @return Documento
     */
    public function setHtml($html)
    {
        $this->html = $html;

        return $this;
    }

    /**
     * Get html
     *
     * @return string
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set stato
     *
     * @param string $stato
     *
     * @return Documento
     */
    public function setStato($stato)
    {
        $this->stato = $stato;

        return $this;
    }

    /**
     * Get stato
     *
     * @return string
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * Set aggiornato
     *
     * @param \DateTime $aggiornato
     *
     * @return Documento
     */
    public function setAggiornato($aggiornato)
    {
        $this->aggiornato = $aggiornato;

        return $this;
    }

    /**
     * Get aggiornato
     *
     * @return \DateTime
     */
    public function getAggiornato()
    {
        return $this->aggiornato;
    }
}


<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * blocco
 *
 * @ORM\Table(name="blocco")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\bloccoRepository")
 */
class blocco
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
     * @var string
     *
     * @ORM\Column(name="descrizione", type="string", length=2048, nullable=true)
     */
    private $descrizione;

    /**
     * @var string
     *
     * @ORM\Column(name="testo", type="text")
     */
    private $testo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="aggiornato", type="datetime")
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
     * @return blocco
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
     * Set descrizione
     *
     * @param string $descrizione
     *
     * @return blocco
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set testo
     *
     * @param string $testo
     *
     * @return blocco
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;

        return $this;
    }

    /**
     * Get testo
     *
     * @return string
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * Set aggiornato
     *
     * @param \DateTime $aggiornato
     *
     * @return blocco
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


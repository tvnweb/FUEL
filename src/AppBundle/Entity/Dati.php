<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dati
 *
 * @ORM\Table(name="dati")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DatiRepository")
 */
class Dati
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
     * @ORM\Column(name="slug", type="string", length=64)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="valore", type="text")
     */
    private $valore;

    /**
     * @var bool
     *
     * @ORM\Column(name="obbligatorio", type="boolean")
     */
    private $obbligatorio;


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
     * @return Dati
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Dati
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set valore
     *
     * @param string $valore
     *
     * @return Dati
     */
    public function setValore($valore)
    {
        $this->valore = $valore;

        return $this;
    }

    /**
     * Get valore
     *
     * @return string
     */
    public function getValore()
    {
        return $this->valore;
    }

    /**
     * Set obbligatorio
     *
     * @param boolean $obbligatorio
     *
     * @return Dati
     */
    public function setObbligatorio($obbligatorio)
    {
        $this->obbligatorio = $obbligatorio;

        return $this;
    }

    /**
     * Get obbligatorio
     *
     * @return bool
     */
    public function getObbligatorio()
    {
        return $this->obbligatorio;
    }
}

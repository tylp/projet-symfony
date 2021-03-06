<?php

namespace DocumentsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Entity
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="DocumentsBundle\Repository\DocumentRepository")
 */
class Document
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var bool
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     * @ORM\Column(name="rubrique", type="string", length=255)
     */
    private $rubrique;

    /**
     * @var string
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var int
     * @ORM\Column(name="candidat", type="integer")
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $candidat;

    /**
     * @var string
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var int
     * @ORM\Column(name="last_com", type="integer")
     */
    private $lastCom;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Document
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Document
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Document
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set rubrique
     *
     * @param string $rubrique
     *
     * @return Document
     */
    public function setRubrique($rubrique)
    {
        $this->rubrique = $rubrique;

        return $this;
    }

    /**
     * Get rubrique
     *
     * @return string
     */
    public function getRubrique()
    {
        return $this->rubrique;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return Document
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set candidat
     *
     * @param integer $candidat
     *
     * @return Document
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return int
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return Document
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set lastCom
     *
     * @param integer $lastCom
     *
     * @return Document
     */
    public function setLastCom($lastCom)
    {
        $this->lastCom = $lastCom;

        return $this;
    }

    /**
     * Get lastCom
     *
     * @return int
     */
    public function getLastCom()
    {
        return $this->lastCom;
    }
}


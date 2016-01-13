<?php

namespace Wiki\WikiMaireBundle\Form\Model;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


/**
 * Projet
 */
class ProjetModel
{
    /**
     * @var string
     */
    private $nomprojet;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $daterealisation;

    /**
     * @var float
     */
    private $cout;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var string
     */
    private $tags;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $duree;

    /**
     * @var string
     */
    private $gains;

    /**
     * @var string
     */
    private $financement;

    private $x;
    private $y;
    private $w;
    private $h;

    /**
     * @var UploadedFile
     */
    public $file;


    /**
     * @var integer
     */
    private $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }




    /**
     * Set nomprojet
     *
     * @param string $nomprojet
     *
     * @return Projet
     */
    public function setNomprojet($nomprojet)
    {
        $this->nomprojet = $nomprojet;

        return $this;
    }

    /**
     * Get nomprojet
     *
     * @return string
     */
    public function getNomprojet()
    {
        return $this->nomprojet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
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
     * Set daterealisation
     *
     * @param \DateTime $daterealisation
     *
     * @return Projet
     */
    public function setDaterealisation($daterealisation)
    {
        $this->daterealisation = $daterealisation;

        return $this;
    }

    /**
     * Get daterealisation
     *
     * @return \DateTime
     */
    public function getDaterealisation()
    {
        return $this->daterealisation;
    }



    /**
     * Set cout
     *
     * @param float $cout
     *
     * @return Projet
     */
    public function setCout($cout)
    {
        $this->cout = $cout;

        return $this;
    }

    /**
     * Get cout
     *
     * @return float
     */
    public function getCout()
    {
        return $this->cout;
    }


    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     *
     * @return Projet
     */
    public function setUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Projet
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }


    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Projet
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return ProjetModel
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }


    /**
     * Set gains
     *
     * @param string $gains
     *
     * @return ProjetModel
     */
    public function setGains($gains)
    {
        $this->gains = $gains;

        return $this;
    }

    /**
     * Get gains
     *
     * @return string
     */
    public function getGains()
    {
        return $this->gains;
    }


    /**
     * Set financement
     *
     * @param string $financement
     *
     * @return ProjetModel
     */
    public function setFinancement($financement)
    {
        $this->financement = $financement;

        return $this;
    }

    /**
     * Get financement
     *
     * @return string
     */
    public function getFinancement()
    {
        return $this->financement;
    }


    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setW($w)
    {
        $this->w = $w;

        return $this;
    }

    public function getW()
    {
        return $this->w;
    }

    public function setH($h)
    {
        $this->h = $h;

        return $this;
    }

    public function getH()
    {
        return $this->h;
    }
}

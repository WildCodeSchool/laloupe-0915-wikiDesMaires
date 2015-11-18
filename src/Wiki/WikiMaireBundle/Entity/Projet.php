<?php

namespace Wiki\WikiMaireBundle\Entity;

/**
 * Projet
 */
class Projet
{


    // GENERATED CODE
    
    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $difficulte;

    /**
     * @var float
     */
    private $cout;

    /**
     * @var string
     */
    private $nomprojet;

    /**
     * @var string
     */
    private $commune;

    /**
     * @var string
     */
    private $entrepreneur;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Projet
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
     *
     * @return Projet
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string
     */
    public function getDifficulte()
    {
        return $this->difficulte;
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
     * Set commune
     *
     * @param string $commune
     *
     * @return Projet
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set entrepreneur
     *
     * @param string $entrepreneur
     *
     * @return Projet
     */
    public function setEntrepreneur($entrepreneur)
    {
        $this->entrepreneur = $entrepreneur;

        return $this;
    }

    /**
     * Get entrepreneur
     *
     * @return string
     */
    public function getEntrepreneur()
    {
        return $this->entrepreneur;
    }

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
}

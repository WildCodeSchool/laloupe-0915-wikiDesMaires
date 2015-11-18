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
<<<<<<< HEAD
    private $tailleprojet;

    /**
     * @var string
     */
    private $bassinpopulation;

    /**
     * @var string
     */
    private $commune;
=======
    private $date;
>>>>>>> 1ecc2a2ead11e580e1e4d72d717f915fdf56c30d

    /**
     * @var string
     */
<<<<<<< HEAD
    private $expert;
=======
    private $difficulte;
>>>>>>> 1ecc2a2ead11e580e1e4d72d717f915fdf56c30d

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
<<<<<<< HEAD
     * Set tailleprojet
     *
     * @param string $tailleprojet
     *
     * @return Projet
     */
    public function setTailleprojet($tailleprojet)
    {
        $this->tailleprojet = $tailleprojet;

        return $this;
    }

    /**
     * Get bassinpopulation
     *
     * @return string
     */
    public function getTailleprojet()
    {
        return $this->tailleprojet;
    }

    /**
     * Set bassinpopulation
     *
     * @param string $bassinpopulation
     *
     * @return Projet
     */

    public function setBassinpopulation($bassinpopulation)
    {
        $this->bassinpopulation = $bassinpopulation;

        return $this;
    }

    /**
     * Get bassinpopulation
     *
     * @return string
     */
    public function getBassinpopulation()
    {
        return $this->bassinpopulation;
    }

    /**
     * Set commune
=======
     * Set date
>>>>>>> 1ecc2a2ead11e580e1e4d72d717f915fdf56c30d
     *
     * @param \DateTime $date
     *
     * @return Projet
     */
<<<<<<< HEAD

    public function setCommune($commune)
=======
    public function setDate($date)
>>>>>>> 1ecc2a2ead11e580e1e4d72d717f915fdf56c30d
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
<<<<<<< HEAD

    public function getCommune()
=======
    public function getDate()
>>>>>>> 1ecc2a2ead11e580e1e4d72d717f915fdf56c30d
    {
        return $this->date;
    }

    /**
<<<<<<< HEAD
     * Set expert
     *
     * @param string $expert
     *
     * @return Projet
     */
    public function setExpert($expert)
    {
        $this->expert = $expert;
=======
     * Set difficulte
     *
     * @param string $difficulte
     *
     * @return Projet
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;
>>>>>>> 1ecc2a2ead11e580e1e4d72d717f915fdf56c30d

        return $this;
    }

    /**
<<<<<<< HEAD
     * Get expert
     *
     * @return string
     */
    public function getExpert()
    {
        return $this->expert;
=======
     * Get difficulte
     *
     * @return string
     */
    public function getDifficulte()
    {
        return $this->difficulte;
>>>>>>> 1ecc2a2ead11e580e1e4d72d717f915fdf56c30d
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

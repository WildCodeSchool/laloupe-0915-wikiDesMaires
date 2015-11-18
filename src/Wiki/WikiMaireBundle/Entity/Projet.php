<?php

namespace Wiki\WikiMaireBundle\Entity;

/**
 * Projet
 */
class Projet
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomprojet;

    /**
     * @var string
     */
    private $tailleprojet;

    /**
     * @var string
     */
    private $bassinpopulation;

    /**
     * @var string
     */
    private $commune;

    /**
     * @var string
     */
    private $expert;

    /**
     * @var float
     */
    private $cout;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $difficulte;


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
     * Set expert
     *
     * @param string $expert
     *
     * @return Projet
     */
    public function setExpert($expert)
    {
        $this->expert = $expert;

        return $this;
    }

    /**
     * Get expert
     *
     * @return string
     */
    public function getExpert()
    {
        return $this->expert;
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
}


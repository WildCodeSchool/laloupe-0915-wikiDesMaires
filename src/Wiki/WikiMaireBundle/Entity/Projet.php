<?php

namespace Wiki\WikiMaireBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $description;

    /**
     * @var \DateTime
     */
    private $dateR;

    /**
     * @var string
     */
    private $but;

    /**
     * @var string
     */
    private $subvention;

    /**
     * @var string
     */
    private $difficulte;

    /**
     * @var string
     */
    private $conseils;

    /**
     * @var float
     */
    private $cout;


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
     * Set description
     *
     * @param string $description
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
     * Set dateR
     *
     * @param \DateTime $dateR
     * @return Projet
     */
    public function setDateR($dateR)
    {
        $this->dateR = $dateR;

        return $this;
    }

    /**
     * Get dateR
     *
     * @return \DateTime 
     */
    public function getDateR()
    {
        return $this->dateR;
    }

    /**
     * Set but
     *
     * @param string $but
     * @return Projet
     */
    public function setBut($but)
    {
        $this->but = $but;

        return $this;
    }

    /**
     * Get but
     *
     * @return string 
     */
    public function getBut()
    {
        return $this->but;
    }

    /**
     * Set subvention
     *
     * @param string $subvention
     * @return Projet
     */
    public function setSubvention($subvention)
    {
        $this->subvention = $subvention;

        return $this;
    }

    /**
     * Get subvention
     *
     * @return string 
     */
    public function getSubvention()
    {
        return $this->subvention;
    }

    /**
     * Set difficulte
     *
     * @param string $difficulte
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
     * Set conseils
     *
     * @param string $conseils
     * @return Projet
     */
    public function setConseils($conseils)
    {
        $this->conseils = $conseils;

        return $this;
    }

    /**
     * Get conseils
     *
     * @return string 
     */
    public function getConseils()
    {
        return $this->conseils;
    }

    /**
     * Set cout
     *
     * @param float $cout
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
}

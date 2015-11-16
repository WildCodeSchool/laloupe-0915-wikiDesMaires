<?php

namespace Wiki\AdminBundle\Entity;

/**
 * Commune
 */
class Commune
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $map;

    /**
     * @var string
     */
    private $habitants;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Commune
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set map
     *
     * @param string $map
     *
     * @return Commune
     */
    public function setMap($map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return string
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set habitants
     *
     * @param string $habitants
     *
     * @return Commune
     */
    public function setHabitants($habitants)
    {
        $this->habitants = $habitants;

        return $this;
    }

    /**
     * Get habitants
     *
     * @return string
     */
    public function getHabitants()
    {
        return $this->habitants;
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
}


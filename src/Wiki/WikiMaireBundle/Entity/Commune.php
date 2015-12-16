<?php

namespace Wiki\WikiMaireBundle\Entity;

/**
 * Commune
 */
class Commune
{
    public function __toString()
    {
        return $this->nomcommune;
    }
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomcommune;

    /**
     * @var string
     */
    private $descriptioncommune;

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
     * Set nomcommune
     *
     * @param string $nomcommune
     *
     * @return Commune
     */
    public function setNomcommune($nomcommune)
    {
        $this->nomcommune = $nomcommune;

        return $this;
    }

    /**
     * Get nomcommune
     *
     * @return string
     */
    public function getNomcommune()
    {
        return $this->nomcommune;
    }

    /**
     * Set descriptioncommune
     *
     * @param string $descriptioncommune
     *
     * @return descriptioncommune
     */
    public function setDescriptioncommune($descriptioncommune)
    {
        $this->descriptioncommune = $descriptioncommune;

        return $this;
    }

    /**
     * Get descirption
     *
     * @return string
     */
    public function getDescriptioncommune()
    {
        return $this->descriptioncommune;
    }
}

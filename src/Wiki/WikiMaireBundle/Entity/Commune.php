<?php

namespace Wiki\WikiMaireBundle\Entity;

/**
 * Commune
 */
class Commune
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nomcommune;


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
}

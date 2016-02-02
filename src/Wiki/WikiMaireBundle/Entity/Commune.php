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
    private $codepostal;

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
     * Set codepostal
     *
     * @param string $codepostal
     *
     * @return codepostal
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }
}

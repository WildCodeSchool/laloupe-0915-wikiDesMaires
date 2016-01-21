<?php

namespace Wiki\WikiMaireBundle\Entity;

/**
 * Likes
 */
class Likes
{


    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $aime;


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
     * Set aime
     *
     * @param integer $aime
     *
     * @return Likes
     */
    public function setAime($aime)
    {
        $this->aime = $aime;

        return $this;
    }

    /**
     * Get aime
     *
     * @return integer
     */
    public function getAime()
    {
        return $this->aime;
    }
    /**
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;

    /**
     * @var \WikiWikiMaireBundle\Entity\Projet
     */
    private $projet;


    /**
     * Set user
     *
     * @param \Application\Sonata\UserBundle\Entity\User $user
     *
     * @return Likes
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
     * Set projet
     *
     * @param \Wiki\WikiMaireBundle\Entity\Projet $projet
     *
     * @return Likes
     */
    public function setProjet(Projet $projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \Wiki\WikiMaireBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }
}

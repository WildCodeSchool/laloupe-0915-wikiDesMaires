<?php

namespace Wiki\WikiMaireBundle\Entity;

/**
 * commentaire
 */
class commentaire
{
    /**
     * @var integer
     */
    private $id;


    /**
     * @var \WikiWikiMaireBundle\Entity\Projet
     */
    private $projet;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $message;


    /**
     * Set message
     *
     * @param string $message
     *
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Contact
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * @var \Application\Sonata\UserBundle\Entity\User
     */
    private $user;


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

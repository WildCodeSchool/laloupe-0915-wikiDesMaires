<?php
// src/WikidesMairesBundle/Entity/User.php

namespace WikidesMairesBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
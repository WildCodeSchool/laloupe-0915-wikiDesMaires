<?php


// src/Wiki/WikiMaireBundle/DataFixtures/ORM/LoadUserData.php

namespace Wiki\WikiMaireBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Application\Sonata\UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $factory = $this->getSecurityManager();
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $encoder = $factory->getEncoder($userAdmin);
        $encodedPassword = $encoder->encodePassword('admin', $userAdmin->getSalt());
        $userAdmin->setPassword($encodedPassword);
        $userAdmin->setEmail('email@admin.fr');
        $userAdmin->setEnabled(true);
        $userAdmin->setSuperAdmin(true);
        $manager->persist($userAdmin);
        $manager->flush();
    }
    public function getSecurityManager()
    {
        return $this->container->get('security.encoder_factory');
    }
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}


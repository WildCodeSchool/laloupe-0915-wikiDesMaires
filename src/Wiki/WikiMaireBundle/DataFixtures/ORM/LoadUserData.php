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

        // Get our userManager, you must implement `ContainerAwareInterface`
        $userManager = $this->container->get('fos_user.user_manager');

        // Create our user and set details
        $user1 = $userManager->createUser();
        $user1->setUsername('admin');
        $user1->setPlainPassword('admin');
        $user1->setEnabled(true);
        $user1->setEmail('admin1@email.com');
        $user1->setRoles(array('ROLE_SUPER_ADMIN'));
        $user1->setFirstname('Admin');
        $user1->setLastname('Admin');

        // Create our user and set details
        $user2 = $userManager->createUser();
        $user2->setUsername('tra');
        $user2->setPlainPassword('tra');
        $user2->setEnabled(true);
        $user2->setEmail('admin2@email.com');
        $user2->setRoles(array('ROLE_USER'));
        $user2->setFirstname('traore');
        $user2->setLastname('Mahamadou');

        // Create our user and set details
        $user3 = $userManager->createUser();
        $user3->setUsername('bekele');
        $user3->setPlainPassword('bekele');
        $user3->setEnabled(true);
        $user3->setEmail('admin3@email.com');
        $user3->setRoles(array('ROLE_USER'));
        $user3->setFirstname('bekele');
        $user3->setLastname('Mopara');

        // Update the user
        $userManager->updateUser($user1, true);
        $userManager->updateUser($user2, true);
        $userManager->updateUser($user3, true);


    }
    public function getOrder()
    {
        return 1; // ordre d'appel
    }
}

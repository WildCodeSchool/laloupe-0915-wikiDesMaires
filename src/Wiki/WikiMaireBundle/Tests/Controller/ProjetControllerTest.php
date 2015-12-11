<?php

namespace Wiki\WikiMaireBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjetControllerTest extends WebTestCase
{

    public function testPageIndex()
    {
        // Create a new project to browse the application
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW'   => 'celine',
        ));

        $this->assertEquals(true, true);


        // Test si la page projet affiche les projets
        $crawler = $client->request('GET', '/projet/');
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(200, $client->getResponse()->getStatusCode());


        //Test du bouton "Créer un nouveau Projet"
        $link = $crawler
            ->filter('a:contains("Créer un nouveau Projet")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::createAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "Login"
        $link = $crawler
            ->filter('a:contains("Logout")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\AdminSecurityController::logoutAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }


    public function testPageNew()
    {
        // Create a new project to browse the application
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW'   => 'celine',
        ));

        // Test si la page projet affiche les projets
        $crawler = $client->request('GET', '/projet/create');
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::createAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Retour à la liste de Projet"
        $link = $crawler
            ->filter('a:contains("Retour a la liste de Projet")') // find all links with the text "Greet"
            ->eq(0) // select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }


    public function testPageLoginAdmin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertTrue($crawler->filter('form input[name="_username"]')->count() == 1);
        $this->assertTrue($crawler->filter('form input[name="_password"]')->count() == 1);


        // Sélection basée sur la valeur, l'id ou le nom des boutons
        $form = $crawler->selectButton('Connexion')->form();
        $form['_username'] = 'admin';
        $form['_password'] = 'admin';
        $crawler = $client->submit($form);

        // Il faut suivre la redirection
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertEquals('Sonata\AdminBundle\Controller\CoreController::dashboardAction', $client->getRequest()->attributes->get('_controller'));
    }

    public function testPageLoginAdminCo()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW'   => 'admin1',
        ));
        $crawler = $client->request('GET', '/login');

        // Il faut suivre la redirection
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));
    }


    public function testPageLoginUser()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertTrue($crawler->filter('form input[name="_username"]')->count() == 1);
        $this->assertTrue($crawler->filter('form input[name="_password"]')->count() == 1);


        // Sélection basée sur la valeur, l'id ou le nom des boutons
        $form = $crawler->selectButton('Connexion')->form();
        $form['_username'] = 'celine';
        $form['_password'] = 'celine';
        $crawler = $client->submit($form);

        // Il faut suivre la redirection
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));
    }


    public function testPageProfile()
    {
        // Test de la page Profile en étant pas connecté
        $client = static::createClient();
        $crawler = $client->request('GET', '/profile/');
        $this->assertEquals(500, $client->getResponse()->getStatusCode());

        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));
    }

    public function testPageProfileConnecté()
    {
        //Test du bouton "Créer un nouveau projet" en étant connecté
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW'   => 'celine',
        ));

        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Créer un nouveau Projet")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::createAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "rechercher un projet" en étant connecté
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW'   => 'celine',
        ));
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Rechercher un projet")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Logout" en étant connection
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW'   => 'celine',
        ));

        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Logout")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\AdminSecurityController::logoutAction', $client->getRequest()->attributes->get('_controller'));
    }
    public function testPageProjet()
    {
        // Test de la page Profile en étant pas connecté
        $client = static::createClient();
        $crawler = $client->request('GET', '/projet/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));
    }

}

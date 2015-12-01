<?php

namespace Wiki\WikiMaireBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjetControllerTest extends WebTestCase
{

    public function testPageIndex()
    {
        // Create a new project to browse the application
        $client = static::createClient();

        // Test si la page projet affiche les projets
        $crawler = $client->request('GET', '/projet/');
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "Créer un nouveau Projet"
        $link = $crawler
            ->filter('a:contains("Créer un nouveau Projet")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::newAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "Login"
        $link = $crawler
            ->filter('a:contains("Login")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }


     /*   public function testPageNew()
    {
        // Create a new project to browse the application
        $client = static::createClient();

        // Test si la page projet affiche les projets
        $crawler = $client->request('GET', '/projet/new');
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::newAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Retour à la liste de Projet"
        $link = $crawler
            ->filter('a:contains("Retour a la liste de Projet")') // find all links with the text "Greet"
            ->eq(0) // select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du submit "Créer le projet"
        $form = $crawler->selectButton('submit')->form();

        // set some values
        $form['name'] = 'Lucas';

        // submit the form
        $crawler = $client->submit($form);


    }*/

        public function testLoginAdmin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

          //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertTrue($crawler->filter('form input[name="_username"]')->count() == 1);
        $this->assertTrue($crawler->filter('form input[name="_password"]')->count() == 1);


        // Sélection basée sur la valeur, l'id ou le nom des boutons
        $form = $crawler->selectButton('Connexion')->form();
        $form['_username']= 'admin';
        $form['_password']= 'admin';
        $crawler = $client->submit($form);

        // Il faut suivre la redirection
        $crawler = $client->followRedirect();
        $this->assertEquals('Sonata\AdminBundle\Controller\CoreController::dashboardAction', $client->getRequest()->attributes->get('_controller'));
    }

}

<?php

namespace Wiki\WikiMaireBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProjetControllerTest extends WebTestCase
{
    //Permet de reste connecté
    private function Connexion($username, $password, $client) {

        $crawler = $client->request('GET', '/login');

        $form = $crawler->selectButton('Connexion')->form();
        $form['_username'] = $username;
        $form['_password'] = $password;
        $crawler = $client->submit($form);
        $crawler = $client->followRedirect();



        return $crawler;
    }


    public function testPageIndex()
    {
        // Create a new project to browse the application
        $client = static::createClient();

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

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::newAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "Login"
        $link = $crawler
            ->filter('a:contains("Login")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\ChangePasswordFOSUser1Controller::changePasswordAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
    }


     public function testPageNew()
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

     public function testPageLoginUser()
     {
         $client = static::createClient();
         $crawler = $client->request('GET', '/login');

         //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
         $this->assertTrue($crawler->filter('form input[name="_username"]')->count() == 1);
         $this->assertTrue($crawler->filter('form input[name="_password"]')->count() == 1);


         // Sélection basée sur la valeur, l'id ou le nom des boutons
         $form = $crawler->selectButton('Connexion')->form();
         $form['_username'] = 'tra';
         $form['_password'] = 'tra';
         $crawler = $client->submit($form);

         // Il faut suivre la redirection
         $this->assertEquals(302, $client->getResponse()->getStatusCode());
         $crawler = $client->followRedirect();
         $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::mesprojetsAction', $client->getRequest()->attributes->get('_controller'));
     }



     public function testPageProfile()

     {
         // Test de la page Profile en étant pas connecté
         $client = static::createClient();
         $crawler = $client->request('GET', '/profile/');
         $this->assertEquals(302, $client->getResponse()->getStatusCode());
         $crawler = $client->followRedirect();
         $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));

     }

         public function testPageProfileConnecté()
     {
         //Test du bouton "Informations de connexion" en étant connecté
         $username = 'tra';
         $password = 'tra';

         $client = static::createClient();
         $crawler = $client->request('GET', '/login');
         $crawler = $this->Connexion($username, $password, $client);
         $link = $crawler
             ->filter('a:contains("Informations de connexion")')// find all links with the text "Greet"
             ->eq(0) //select the second link in the list
             ->link();


         $crawler = $client->click($link);

         $this->assertEquals('Sonata\UserBundle\Controller\ProfileFOSUser1Controller::editAuthenticationAction', $client->getRequest()->attributes->get('_controller'));
         $this->assertTrue(200 === $client->getResponse()->getStatusCode());


         //Test du bouton "Créer un nouveau projet" en étant connecté
         $username = 'celine';
         $password = 'celine';

         $client = static::createClient();
         $crawler = $client->request('GET', '/login');
         $crawler = $this->Connexion($username, $password, $client);
         $link = $crawler
             ->filter('a:contains("Créer un nouveau Projet")')// find all links with the text "Greet"
             ->eq(0)// select the second link in the list
             ->link();

         $crawler = $client->click($link);

         $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::newAction', $client->getRequest()->attributes->get('_controller'));
         $this->assertTrue(200 === $client->getResponse()->getStatusCode());

         //Test du bouton "rechercher un projet" en étant connecté
         $username = 'celine';
         $password = 'celine';

         $client = static::createClient();
         $crawler = $client->request('GET', '/login');
         $crawler = $this->Connexion($username, $password, $client);
         $link = $crawler
             ->filter('a:contains("Rechercher un projet")')// find all links with the text "Greet"
             ->eq(0)// select the second link in the list
             ->link();

         $crawler = $client->click($link);

         $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
         $this->assertTrue(200 === $client->getResponse()->getStatusCode());


         //Test du bouton "Logout" en étant connecté
         $username = 'celine';
         $password = 'celine';

         $client = static::createClient();
         $crawler = $client->request('GET', '/login');
         $crawler = $this->Connexion($username, $password, $client);
         $link = $crawler
             ->filter('a:contains("Logout")')// find all links with the text "Greet"
             ->eq(0)// select the second link in the list
             ->link();

         $crawler = $client->click($link);

         $this->assertEquals('Sonata\UserBundle\Controller\AdminSecurityController::logoutAction', $client->getRequest()->attributes->get('_controller'));



     }
}



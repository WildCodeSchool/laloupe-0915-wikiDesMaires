<?php

namespace Wiki\WikiMaireBundle\Tests\Controller;


use Liip\FunctionalTestBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProjetControllerTest extends WebTestCase
{


    public function testPageIndex()
    {
        $fixtures = array(
            'Wiki\WikiMaireBundle\DataFixtures\ORM\LoadCommuneData',
            'Wiki\WikiMaireBundle\DataFixtures\ORM\LoadUserData',
            'Wiki\WikiMaireBundle\DataFixtures\ORM\LoadProjetData'
        );
        $this->fixtures = $this->loadFixtures($fixtures, null, 'doctrine', true)->getReferenceRepository();

        // Create a new project to browse the application
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW' => 'celine',
        ));

        $this->assertEquals(true, true);


        // Test si la page projet n'affiche pas les projets a un anonyme
        $client = static::createClient();
        $crawler = $client->request('GET', '/projet/');
        $this->assertEquals(302,$client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));



        //Test du bouton "Mon Profil"
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW' => 'celine',
        ));
        $crawler = $client->request('GET', '/projet/');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $link = $crawler
            ->filter('a:contains("Mon Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "Se déconnecter"
        $client = static::createClient();
        $crawler = $client->request('GET', '/projet/');
        $link = $crawler
            ->filter('a:contains("Se déconnecter")')// find all links with the text "Greet"
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
            'PHP_AUTH_PW' => 'celine',
        ));

        // Test si la page projet affiche les projets
        $crawler = $client->request('GET', '/projet/create');
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::createAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Profil"
        $link = $crawler
            ->filter('a:contains("Mon Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(200, $client->getResponse()->getStatusCode());


        //Test du bouton "Se déconnecter"
        $crawler = $client->request('GET', '/projet/create');
        $link = $crawler
            ->filter('a:contains("Se déconnecter")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::logoutAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());



        //test Formulaire de création d'un projet
        $crawler = $client->request('GET', '/projet/create');

        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertEquals(1, $crawler->filter('form input#wiki_wikimairebundle_projet_nomprojet')->count());
        $this->assertEquals(1, $crawler->filter('form textarea#wiki_wikimairebundle_projet_description')->count());
        $this->assertEquals(1, $crawler->filter('form input#wiki_wikimairebundle_projet_cout')->count());
        $this->assertEquals(1, $crawler->filter('form input#wiki_wikimairebundle_projet_file')->count());
        $this->assertEquals(1, $crawler->filter('form input.checkbox[value=etat]')->count());
        $this->assertEquals(1, $crawler->filter('form input.checkbox[value=region]')->count());
        $this->assertEquals(1, $crawler->filter('form input.checkbox[value=departement]')->count());
        $this->assertEquals(1, $crawler->filter('form input.checkbox[value=epci]')->count());


        // Sélection basée sur la valeur, l'id ou le nom des boutons
        $photo = new UploadedFile(
            __DIR__.'/../../DataFixtures/Data/projet.jpeg',
            'projet.jpeg',
            'image/jpeg'
        );
        $form = $crawler->selectButton('Créer le projet')->form();
        $form['wiki_wikimairebundle_projet[nomprojet]'] = 'blabla';
        $form['wiki_wikimairebundle_projet[description]'] = 'il était une fois';
        $form['wiki_wikimairebundle_projet[cout]'] = '40000';
        $form['wiki_wikimairebundle_projet[file]'] = $photo;
        $form['wiki_wikimairebundle_projet[financement]'] = 'departement:3;';
        $form['wiki_wikimairebundle_projet[x]'] = 0;
        $form['wiki_wikimairebundle_projet[y]'] = 0;
        $form['wiki_wikimairebundle_projet[w]'] = 400;
        $form['wiki_wikimairebundle_projet[h]'] = 200;
        $crawler = $client->submit($form);

        // Il faut suivre la redirection
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::createAction', $client->getRequest()->attributes->get('_controller'));
        $crawler = $client->followRedirect();
        $this->assertEquals(301, $client->getResponse()->getStatusCode());
        $client->followRedirect();
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));

    }


    public function testPageLoginAdmin()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertTrue($crawler->filter('form input[name="_username"]')->count() == 1);
        $this->assertTrue($crawler->filter('form input[name="_password"]')->count() == 1);


        // Sélection basée sur la valeur, l'id ou le nom des boutons
        $form = $crawler->selectButton('Se Connecter')->form();
        $form['_username'] = 'admin';
        $form['_password'] = 'admin';
        $crawler = $client->submit($form);

        // Il faut suivre la redirection
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ChangePasswordFOSUser1Controller::changePasswordAction', $client->getRequest()->attributes->get('_controller'));
    }

    public function testPageLoginAdminCo()
    {
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'admin',
            'PHP_AUTH_PW' => 'admin1',
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
        $form = $crawler->selectButton('Se Connecter')->form();
        $form['_username'] = 'celine';
        $form['_password'] = 'celine';
        $crawler = $client->submit($form);

        // Il faut suivre la redirection
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ChangePasswordFOSUser1Controller::changePasswordAction', $client->getRequest()->attributes->get('_controller'));
    }


    public function testPageProfile()
    {
        // Test de la page Profile en étant pas connecté
        $client = static::createClient();
        $crawler = $client->request('GET', '/profile/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));
    }

    public function testPageProfil()
    {
        //Test si la page profil s'affiche
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW' => 'celine',
        ));

        $crawler = $client->request('GET', '/profile/');
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Proposer un projet"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Proposer un projet")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::createAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "rechercher un projet"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Rechercher un projet")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);


        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));


        //Test du bouton "Se deconnecter"
        $link = $crawler
            ->filter('a:contains("Se déconnecter ")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::logoutAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::indexAction', $client->getRequest()->attributes->get('_controller'));

    }

}



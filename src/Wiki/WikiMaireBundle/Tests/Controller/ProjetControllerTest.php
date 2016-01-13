<?php

namespace Wiki\WikiMaireBundle\Tests\Controller;


use Liip\FunctionalTestBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ProjetControllerTest extends WebTestCase
{

    public function testPageAcceuil()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //test du bouton Connexion
        $link = $crawler
            ->filter('a:contains("Connexion")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));


        //test du bouton Inscription
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $link = $crawler
            ->filter('a:contains("Inscription")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::contactAction', $client->getRequest()->attributes->get('_controller'));
    }


    public function testPageContact()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/contact');

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::contactAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //test du bouton Accueil
        $link = $crawler
            ->filter('a:contains("Accueil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::indexAction', $client->getRequest()->attributes->get('_controller'));


    }


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
            'PHP_AUTH_PW' => 'celine',
        ));

        // Test si la page projet affiche les projets
        $crawler = $client->request('GET', '/projet/create');
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::createAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Retour à la liste de Projet"
        $link = $crawler
            ->filter('a:contains("Retour a la liste de Projet")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Profil"
        $link = $crawler
            ->filter('a:contains("Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(301, $client->getResponse()->getStatusCode());


        //Test du bouton "Logout"
        $crawler = $client->request('GET', '/projet/create');
        $link = $crawler
            ->filter('a:contains("Logout")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\AdminSecurityController::logoutAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());


        //Test du bouton "mon profil"
        $crawler = $client->request('GET', '/projet/create');
        $link = $crawler
            ->filter('a:contains("Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(301, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));




        //test Formulaire de création d'un projet
        $crawler = $client->request('GET', '/projet/create');

        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertEquals(1, $crawler->filter('form input#wiki_wikimairebundle_projet_nomprojet')->count());
        $this->assertEquals(1, $crawler->filter('form textarea#wiki_wikimairebundle_projet_description')->count());
        $this->assertEquals(1, $crawler->filter('form textarea#wiki_wikimairebundle_projet_difficulte')->count());
        $this->assertEquals(1, $crawler->filter('form input#wiki_wikimairebundle_projet_cout')->count());
        $this->assertEquals(1, $crawler->filter('form input#wiki_wikimairebundle_projet_tailleprojet')->count());
        $this->assertEquals(1, $crawler->filter('form textarea#wiki_wikimairebundle_projet_bassinPopulation')->count());
        $this->assertEquals(1, $crawler->filter('form input#wiki_wikimairebundle_projet_file')->count());



        // Sélection basée sur la valeur, l'id ou le nom des boutons
        $photo = new UploadedFile(
            __DIR__.'/../../DataFixtures/Data/projet.jpeg',
            'projet.jpeg',
            'image/jpeg'
        );
        $form = $crawler->selectButton('Créer le projet')->form();
        $form['wiki_wikimairebundle_projet[nomprojet]'] = 'blabla';
        $form['wiki_wikimairebundle_projet[description]'] = 'il était une fois';
        $form['wiki_wikimairebundle_projet[difficulte]'] = 'dur';
        $form['wiki_wikimairebundle_projet[cout]'] = '40000';
        $form['wiki_wikimairebundle_projet[tailleprojet]'] = 'Grand';
        $form['wiki_wikimairebundle_projet[bassinPopulation]'] = '100000';
        $form['wiki_wikimairebundle_projet[file]'] = $photo;
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
        $form = $crawler->selectButton('Connexion')->form();
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
        $form = $crawler->selectButton('Connexion')->form();
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

    public function testPageProfileConnecte()
    {
        //Test si la page profil s'affiche
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW' => 'celine',
        ));

        $crawler = $client->request('GET', '/profile/');
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Créer un nouveau projet"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Créer un Projet")')// find all links with the text "Greet"
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

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());



        //Test du bouton "Profil"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(301, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));


        //Test du bouton "Logout"
        $link = $crawler
            ->filter('a:contains("Logout")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\AdminSecurityController::logoutAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::indexAction', $client->getRequest()->attributes->get('_controller'));

        //Test du bouton "mon profil"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(301, $client->getResponse()->getStatusCode());
        $crawler = $client->followRedirect();
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::showAction', $client->getRequest()->attributes->get('_controller'));



        //Test du bouton "modifier son profil"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Modifier mon profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::editProfileAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "détail"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
          ->filter('a:contains("Detail")')// find all links with the text "Greet"
          ->eq(0)// select the second link in the list
          ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::detailAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "Editer"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Editer")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::editAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //Test du bouton "Supprimer"
        $crawler = $client->request('GET', '/profile/');
        $link = $crawler
            ->filter('a:contains("Supprimer")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::deleteAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

    }
        //Test page Mon profil
    public function testPageMonProfile()
    {
        //Test si la page profil s'affiche
        $client = static::createClient(array(), array(
            'PHP_AUTH_USER' => 'celine',
            'PHP_AUTH_PW' => 'celine',
        ));

        $crawler = $client->request('GET', '/profil');
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::ProfileAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "modifier son profil"
        $link = $crawler
            ->filter('a:contains("modifier mon profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Application\Sonata\UserBundle\Controller\ProfileFOSUser1Controller::editProfileAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //Test du bouton "Profil"
        $link = $crawler
            ->filter('a:contains("Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(301, $client->getResponse()->getStatusCode());


        //Test du bouton "Logout"
        $crawler = $client->request('GET', '/profil');
        $link = $crawler
            ->filter('a:contains("Logout")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Sonata\UserBundle\Controller\AdminSecurityController::logoutAction', $client->getRequest()->attributes->get('_controller'));

        $this->assertEquals(302, $client->getResponse()->getStatusCode());


        //Test du bouton "Mon Profil"
        $crawler = $client->request('GET', '/profil');
        $link = $crawler
            ->filter('a:contains("Profil")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals('Symfony\Bundle\FrameworkBundle\Controller\RedirectController::urlRedirectAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertEquals(301, $client->getResponse()->getStatusCode());
    }

    public function testPageProjet()
    {
        // Test de la page projet en étant pas connecté
        $client = static::createClient();
        $crawler = $client->request('GET', '/projet/');
        $this->assertEquals(302, $client->getResponse()->getStatusCode());

        /*$this->assertEquals('Wiki\WikiMaireBundle\Controller\ProjetController::indexAction',
            $client->getRequest()->attributes->get('_controller'));*/

        $crawler = $client->followRedirect();
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());
        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));



    }
}



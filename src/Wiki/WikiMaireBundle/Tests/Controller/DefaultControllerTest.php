<?php

namespace Wiki\WikiMaireBundle\Tests\Controller;


use Liip\FunctionalTestBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultControllerTest extends WebTestCase
{


    public function testPageAcceuilPremiereConnexion()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::indexAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());


        //test du bouton Inscription
        $link = $crawler
            ->filter('a:contains("Inscription")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ContactController::mailAction', $client->getRequest()->attributes->get('_controller'));


        //test du bouton Connexion
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $link = $crawler
            ->filter('a:contains("Connexion")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $client->followRedirect();
        $this->assertEquals('Sonata\UserBundle\Controller\SecurityFOSUser1Controller::loginAction', $client->getRequest()->attributes->get('_controller'));


    }

    public function testPageContact()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/contact');

        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ContactController::mailAction', $client->getRequest()->attributes->get('_controller'));
        $this->assertTrue(200 === $client->getResponse()->getStatusCode());

        //test du bouton Retour
        $link = $crawler
            ->filter('a:contains("Retour")')// find all links with the text "Greet"
            ->eq(0)// select the second link in the list
            ->link();

        $crawler = $client->click($link);


        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\DefaultController::indexAction', $client->getRequest()->attributes->get('_controller'));


        //test Formulaire de création d'un projet
        $crawler = $client->request('GET', '/contact');

        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
        $this->assertEquals(1, $crawler->filter('form input#contact_name')->count());
        $this->assertEquals(1, $crawler->filter('form input#contact_telephone')->count());
        $this->assertEquals(1, $crawler->filter('form input#contact_mail')->count());
        $this->assertEquals(1, $crawler->filter('form textarea#contact_message')->count());


        // Sélection basée sur la valeur, l'id ou le nom des boutons

        $form = $crawler->selectButton('Envoyer')->form();
        $form['contact[name]'] = 'Celine';
        $form['contact[telephone]'] = '06 25 42 81 17';
        $form['contact[mail]'] = 'celine@gmail.com';
        $form['contact[message]'] = 'je veux m\'\inscrire dans le super projet du wiki des maires';

        $crawler = $client->submit($form);

        // Il faut suivre la redirection
        $this->assertEquals(302, $client->getResponse()->getStatusCode());
        $this->assertEquals('Wiki\WikiMaireBundle\Controller\ContactController::mailAction', $client->getRequest()->attributes->get('_controller'));


    }
}

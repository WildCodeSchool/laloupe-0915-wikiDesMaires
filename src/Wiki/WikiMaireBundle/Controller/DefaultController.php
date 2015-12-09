<?php

namespace Wiki\WikiMaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        return $this->render('WikiWikiMaireBundle:Default:index.html.twig');
    }

    public function contactAction()
    {
        return $this->render('WikiWikiMaireBundle:Default:contact.html.twig');
    }

}
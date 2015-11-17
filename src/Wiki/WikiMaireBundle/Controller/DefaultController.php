<?php

namespace Wiki\WikiMaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WikiWikiMaireBundle:Default:index.html.twig', array('name' => $name));
    }
}

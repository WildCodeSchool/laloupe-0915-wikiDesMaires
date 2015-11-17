<?php
namespace Wiki\WikiMaireBundle\Controller;
use Wiki\WikiMaireBundle\Entity\Projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File;
use Wiki\WikiMaireBundle\Form\Type\ProjetType;

//use Symfony\Component\Validator\Constraints\Date;
class ProjetController extends Controller
{
    public function indexAction(Request $request)
    {
        $projet = new Projet();
        $form = $this->get('form.factory')->create(new ProjetType(), $projet);
        $form->handleRequest($request);
        if ($form->isValid()) {
            //
            $em = $this->getDoctrine()->getManager();
            $em->persist($projet);
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('WikiWikiMaireBundle:Projet:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
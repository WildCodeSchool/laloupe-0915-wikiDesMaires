<?php

namespace Wiki\AdminBundle\Controller;
use Wiki\AdminBundle\Entity\projet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class projetController extends Controller
{
    public function addAction()
    {
        // On crée un objet projet
        $projet = new projet();

        // On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $projet);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('date', 'date')
            ->add('title', 'text')
            ->add('content', 'textarea')
            ->add('author', 'text')
            ->add('save', 'submit');
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        // On passe la méthode createView() du formulaire à la vue
        // afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('WikiAdminBundle:projet:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
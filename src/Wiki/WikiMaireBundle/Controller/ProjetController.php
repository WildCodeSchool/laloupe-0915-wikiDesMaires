<?php

namespace Wiki\WikiMaireBundle\Controller;

use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Wiki\WikiMaireBundle\Entity\Projet;
use Wiki\WikiMaireBundle\Form\Handler\ProjetHandler;
use Wiki\WikiMaireBundle\Form\Model\ProjetModel;
use Wiki\WikiMaireBundle\Form\Type\ProjetType;

/**
 * Projet controller.
 *
 */
class ProjetController extends Controller
{

    /**
     * Lists all Projet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('WikiWikiMaireBundle:Projet')->getSuggested(4);
        return $this->render('WikiWikiMaireBundle:Projet:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Projet entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ProjetModel();
        $form = $this->createCreateForm($entity);

        $formHandler = new ProjetHandler($form, $request, $this->getDoctrine()->getManager(), $this->getUser(), $this->get('wiki.crop'));
        $process = $formHandler->process($entity);
        if ($process) {
            return $this->redirect($this->generateUrl('sonata_user_profile_show'));
        }

        return $this->render('WikiWikiMaireBundle:Projet:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Projet entity.
     *
     * @param Projet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ProjetModel $entity)
    {
        $form = $this->createForm(new ProjetType(), $entity, array(
            'action' => $this->generateUrl('projet_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer le projet'));

        return $form;
    }

    /**
     * Displays a form to create a new Projet entity.
     *
     */
    public function newAction()
    {
        $entity = new Projet();
        $form = $this->createCreateForm($entity);

        return $this->render('WikiWikiMaireBundle:Projet:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Projet entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WikiWikiMaireBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WikiWikiMaireBundle:Projet:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Projet entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WikiWikiMaireBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WikiWikiMaireBundle:Projet:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Projet entity.
     *
     * @param Projet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Projet $entity)
    {
        $form = $this->createForm(new ProjetType(), $entity, array(
            'action' => $this->generateUrl('projet_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Projet entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WikiWikiMaireBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projet'));
        }

        return $this->render('WikiWikiMaireBundle:Projet:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Projet entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('WikiWikiMaireBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('sonata_user_profile_show'));
    }

    /**
     * Creates a form to delete a Projet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projet_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm();
    }

    public function detailAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('WikiWikiMaireBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('WikiWikiMaireBundle:Projet:detail.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function RechercheAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $serializer = SerializerBuilder::create()->build();

        $projets = $em->getRepository('WikiWikiMaireBundle:Projet')->find($id);
        $jsonContent = $serializer->serialize($projets, 'json');

        $response = new Response($jsonContent);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    public function ProfileAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $projets = $em->getRepository('WikiWikiMaireBundle:Projet')->findByUser($user);

        return $this->render('ApplicationSonataUserBundle:Profile:profile.html.twig', array(
            'projet'   => $projets
        ));
    }

}

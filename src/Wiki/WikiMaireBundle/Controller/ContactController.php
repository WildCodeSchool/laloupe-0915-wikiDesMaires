<?php

namespace Wiki\WikiMaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Wiki\WikiMaireBundle\Entity\Contact;
use Wiki\WikiMaireBundle\Form\Type\ContactType;


class ContactController extends Controller
{

    public function mailAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                // Perform some action, such as sending an email
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact venant du site')
//                    ->setFrom('email@email.fr')
                    ->setTo('wikidesmaires@gmail.com')
                    ->setBody(
                        $this->renderView('emails/contactreceive.html.twig',
                            array(
                                'contact' => $contact
                            )
                        ));
                $this->get('mailer')->send($message);

              $this->get('session')->getFlashBag()->Add('notice', 'Your contact enquiry was successfully sent. Thank you!');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('contact'));

            }
        }
        return $this->render('WikiWikiMaireBundle:Default:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
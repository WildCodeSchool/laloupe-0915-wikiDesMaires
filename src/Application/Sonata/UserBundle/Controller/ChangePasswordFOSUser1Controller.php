<?php
/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Controller;

use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Wiki\WikiMaireBundle\Entity\Projet;

/**
 * Class ChangePasswordFOSUser1Controller
 *
 * This class is inspired from the FOS Change Password Controller
 *
 * @package Sonata\UserBundle\Controller
 *
 * @author  Hugo Briand <briand@ekino.com>
 */
class ChangePasswordFOSUser1Controller extends \Sonata\UserBundle\Controller\ChangePasswordFOSUser1Controller
{
    /**
     * {@inheritdoc}
     */
    protected function getRedirectionUrl(UserInterface $user)
    {
        $rolesTab = $user->getRoles();
        if (in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            return $this->container->get('router')->generate('sonata_admin_dashboard');
        else
            return $this->container->get('router')->generate('sonata_user_profile_show');
    }

    public function renderView($view, array $parameters = array())
    {
        return $this->container->get('templating')->render($view, $parameters);
    }

    public function get($id)
    {
        if ('request' === $id) {
            @trigger_error('The "request" service is deprecated and will be removed in 3.0. Add a typehint for Symfony\\Component\\HttpFoundation\\Request to your controller parameters to retrieve the request instead.', E_USER_DEPRECATED);
        }

        return $this->container->get($id);
    }

    public function changePasswordAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $form = $this->container->get('fos_user.change_password.form');
        $formHandler = $this->container->get('fos_user.change_password.form.handler');
        
        $process = $formHandler->process($user);
        if ($process) {
            $this->setFlash('fos_user_success', 'change_password.flash.success');

            // On récupère le nouveau mot de passe
            $newPassword = $user->getPlainPassword();

            // On récupère l'adresse mail pour le mailing
            $mailDestinataire = $user->getEmail();

            // Envoie du mail
            $sendMessage = \Swift_Message::newInstance()
                ->setSubject('Modification de votre mot de passe')
                ->setFrom('wikidesmaires@gmail.com')
                ->setTo($mailDestinataire)
                ->setBody(
                    $this->renderView(
                        'emails/receivedMessage.html.twig',
                        array(
                            'user' => $user,
                            'password' => $newPassword
                        )
                    ),
                    'text/html'
                );
            $this->get('mailer')->send($sendMessage);

            return new RedirectResponse($this->getRedirectionUrl($user));
        }

        return $this->container->get('templating')->renderResponse(
            'SonataUserBundle:ChangePassword:changePassword.html.'.$this->container->getParameter('fos_user.template.engine'),
            array('form' => $form->createView())
        );
    }
}

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

}

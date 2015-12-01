<?php
namespace Wiki\WikiMaireBundle\Services;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;


class AuthenticationHandler implements  AuthenticationSuccessHandlerInterface {
    private $router;
    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    public function onAuthenticationSuccess( Request $request, TokenInterface $token ) {

        // Get list of roles for current user
        $roles = $token->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function($role){
            return $role->getRole();
        }, $roles);
        // If is a RH, admin or super admin we redirect to the backoffice area
        if (in_array('ROLE_ADMIN', $rolesTab, true) || in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('sonata_admin_dashboard'));

        // otherwise we redirect user to the profile area
        else
            $redirection = new RedirectResponse($this->router->generate('sonata_user_profile_show'));

        return $redirection;

    }
}
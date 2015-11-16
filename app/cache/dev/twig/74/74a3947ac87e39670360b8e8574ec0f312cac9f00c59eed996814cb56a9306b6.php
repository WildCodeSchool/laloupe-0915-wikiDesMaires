<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_8582a4c7a883e6261e13b2714187a5624a280c509acaeb9eda81e74026ede5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f399aa3ab34d64b08401fc822def620da7b0365cf6f8d4ec3bc7cd6d7a72dcd9 = $this->env->getExtension("native_profiler");
        $__internal_f399aa3ab34d64b08401fc822def620da7b0365cf6f8d4ec3bc7cd6d7a72dcd9->enter($__internal_f399aa3ab34d64b08401fc822def620da7b0365cf6f8d4ec3bc7cd6d7a72dcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f399aa3ab34d64b08401fc822def620da7b0365cf6f8d4ec3bc7cd6d7a72dcd9->leave($__internal_f399aa3ab34d64b08401fc822def620da7b0365cf6f8d4ec3bc7cd6d7a72dcd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f53aa66b5b0dbfda63e15954d62fd749dc2c2bd83c82f59b9741b22b070833a = $this->env->getExtension("native_profiler");
        $__internal_1f53aa66b5b0dbfda63e15954d62fd749dc2c2bd83c82f59b9741b22b070833a->enter($__internal_1f53aa66b5b0dbfda63e15954d62fd749dc2c2bd83c82f59b9741b22b070833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_1f53aa66b5b0dbfda63e15954d62fd749dc2c2bd83c82f59b9741b22b070833a->leave($__internal_1f53aa66b5b0dbfda63e15954d62fd749dc2c2bd83c82f59b9741b22b070833a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "SonataUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

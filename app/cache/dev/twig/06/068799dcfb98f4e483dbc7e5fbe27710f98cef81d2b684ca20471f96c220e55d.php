<?php

/* SonataAdminBundle:CRUD:show.html.twig */
class __TwigTemplate_cd4abdd69998b87580a401222cb52ac73713239a72d316487fa8298b4b78122d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9e07139f85603ec2ea9a39cd0132ed532f116704cf9ebdfa5290c70345ea3d9 = $this->env->getExtension("native_profiler");
        $__internal_b9e07139f85603ec2ea9a39cd0132ed532f116704cf9ebdfa5290c70345ea3d9->enter($__internal_b9e07139f85603ec2ea9a39cd0132ed532f116704cf9ebdfa5290c70345ea3d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e07139f85603ec2ea9a39cd0132ed532f116704cf9ebdfa5290c70345ea3d9->leave($__internal_b9e07139f85603ec2ea9a39cd0132ed532f116704cf9ebdfa5290c70345ea3d9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */

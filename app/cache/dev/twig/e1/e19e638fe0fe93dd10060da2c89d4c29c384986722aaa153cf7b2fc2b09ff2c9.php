<?php

/* SonataAdminBundle:CRUD:acl.html.twig */
class __TwigTemplate_432dbb238ba84cb1ef4b85ea29b5a10e69207e30ff312304c47281f77bda234f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "SonataAdminBundle:CRUD:acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e444b39f9ec8631edcfe4f2d08594fa02ae6db0542c7d180d9f8c8ade1fcd416 = $this->env->getExtension("native_profiler");
        $__internal_e444b39f9ec8631edcfe4f2d08594fa02ae6db0542c7d180d9f8c8ade1fcd416->enter($__internal_e444b39f9ec8631edcfe4f2d08594fa02ae6db0542c7d180d9f8c8ade1fcd416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e444b39f9ec8631edcfe4f2d08594fa02ae6db0542c7d180d9f8c8ade1fcd416->leave($__internal_e444b39f9ec8631edcfe4f2d08594fa02ae6db0542c7d180d9f8c8ade1fcd416_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:acl.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}*/
/* */

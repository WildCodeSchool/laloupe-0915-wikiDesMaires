<?php

/* SonataAdminBundle:CRUD:history.html.twig */
class __TwigTemplate_7d877826c0019a8673f601e7c72500168dfe8a7491068e0bee485fe843031b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "SonataAdminBundle:CRUD:history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_642e286cf43c41aa337b10deebdd50d464d52411a9b397e4d0a54fe5211df7d6 = $this->env->getExtension("native_profiler");
        $__internal_642e286cf43c41aa337b10deebdd50d464d52411a9b397e4d0a54fe5211df7d6->enter($__internal_642e286cf43c41aa337b10deebdd50d464d52411a9b397e4d0a54fe5211df7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_642e286cf43c41aa337b10deebdd50d464d52411a9b397e4d0a54fe5211df7d6->leave($__internal_642e286cf43c41aa337b10deebdd50d464d52411a9b397e4d0a54fe5211df7d6_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}*/
/* */

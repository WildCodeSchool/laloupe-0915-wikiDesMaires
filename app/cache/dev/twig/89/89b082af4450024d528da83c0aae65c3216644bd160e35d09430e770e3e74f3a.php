<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_51373593fb882383dcd22040d998bd02b2ec9b347673fb433b463b9e56dec62c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e34a4aaefbb577af440bec0718db481342f100342778ad5d7f13ee8e4d44eb68 = $this->env->getExtension("native_profiler");
        $__internal_e34a4aaefbb577af440bec0718db481342f100342778ad5d7f13ee8e4d44eb68->enter($__internal_e34a4aaefbb577af440bec0718db481342f100342778ad5d7f13ee8e4d44eb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e34a4aaefbb577af440bec0718db481342f100342778ad5d7f13ee8e4d44eb68->leave($__internal_e34a4aaefbb577af440bec0718db481342f100342778ad5d7f13ee8e4d44eb68_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}*/
/* */

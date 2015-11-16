<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_4da8b07a119c1fd57760bdded33bb93f5eec4f6a63daec6232182b66efa47db8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63ea4eff4c51c91a887d5c4c5a31f7fdc7b08aea4bb21c1e5071a0867843f093 = $this->env->getExtension("native_profiler");
        $__internal_63ea4eff4c51c91a887d5c4c5a31f7fdc7b08aea4bb21c1e5071a0867843f093->enter($__internal_63ea4eff4c51c91a887d5c4c5a31f7fdc7b08aea4bb21c1e5071a0867843f093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ea4eff4c51c91a887d5c4c5a31f7fdc7b08aea4bb21c1e5071a0867843f093->leave($__internal_63ea4eff4c51c91a887d5c4c5a31f7fdc7b08aea4bb21c1e5071a0867843f093_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */

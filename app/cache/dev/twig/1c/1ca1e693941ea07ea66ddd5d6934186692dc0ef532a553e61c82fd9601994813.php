<?php

/* SonataAdminBundle:CRUD:show_compare.html.twig */
class __TwigTemplate_210395cf27a21c8be9e1262772a28ab1a6a3cbafd13912e7aa409ca29515aeb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "SonataAdminBundle:CRUD:show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4de1605c05b6112d60500c274395ca25795ec8360587d6e86fe15f89ce0f31ca = $this->env->getExtension("native_profiler");
        $__internal_4de1605c05b6112d60500c274395ca25795ec8360587d6e86fe15f89ce0f31ca->enter($__internal_4de1605c05b6112d60500c274395ca25795ec8360587d6e86fe15f89ce0f31ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de1605c05b6112d60500c274395ca25795ec8360587d6e86fe15f89ce0f31ca->leave($__internal_4de1605c05b6112d60500c274395ca25795ec8360587d6e86fe15f89ce0f31ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_compare.html.twig";
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}*/
/* */

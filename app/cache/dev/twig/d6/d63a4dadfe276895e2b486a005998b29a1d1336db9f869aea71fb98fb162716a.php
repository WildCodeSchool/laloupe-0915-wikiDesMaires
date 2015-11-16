<?php

/* SonataAdminBundle:CRUD:show_date.html.twig */
class __TwigTemplate_e4c458993a08096e9b3836805d854cfd50751e5cdd5449d2973fe3db99775d94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_date.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a456bbf8cc5e7c3b4492d5ab8587be45549a3d5f624fe6b8756cb900f7f7d66f = $this->env->getExtension("native_profiler");
        $__internal_a456bbf8cc5e7c3b4492d5ab8587be45549a3d5f624fe6b8756cb900f7f7d66f->enter($__internal_a456bbf8cc5e7c3b4492d5ab8587be45549a3d5f624fe6b8756cb900f7f7d66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a456bbf8cc5e7c3b4492d5ab8587be45549a3d5f624fe6b8756cb900f7f7d66f->leave($__internal_a456bbf8cc5e7c3b4492d5ab8587be45549a3d5f624fe6b8756cb900f7f7d66f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3e4fd4e1d1bf8f0c3fe8af371a8dadca3b77990c2b5bea33647e5b3b0ee6484f = $this->env->getExtension("native_profiler");
        $__internal_3e4fd4e1d1bf8f0c3fe8af371a8dadca3b77990c2b5bea33647e5b3b0ee6484f->enter($__internal_3e4fd4e1d1bf8f0c3fe8af371a8dadca3b77990c2b5bea33647e5b3b0ee6484f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_3e4fd4e1d1bf8f0c3fe8af371a8dadca3b77990c2b5bea33647e5b3b0ee6484f->leave($__internal_3e4fd4e1d1bf8f0c3fe8af371a8dadca3b77990c2b5bea33647e5b3b0ee6484f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field%}*/
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- elseif field_description.options.format is defined -%}*/
/*         {{ value|date(field_description.options.format) }}*/
/*     {%- else -%}*/
/*         {{ value|date('F j, Y') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */

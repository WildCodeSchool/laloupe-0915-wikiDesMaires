<?php

/* SonataAdminBundle:CRUD:show_url.html.twig */
class __TwigTemplate_569fcee12c24b3f221c975993e2d76560d375a3cab573cb40efcd36137452609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_url.html.twig", 12);
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
        $__internal_5e82a8f8c7962115e74b6361d7c51addc62a55a7f39fe9e6d79140b7c3ff8695 = $this->env->getExtension("native_profiler");
        $__internal_5e82a8f8c7962115e74b6361d7c51addc62a55a7f39fe9e6d79140b7c3ff8695->enter($__internal_5e82a8f8c7962115e74b6361d7c51addc62a55a7f39fe9e6d79140b7c3ff8695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_url.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e82a8f8c7962115e74b6361d7c51addc62a55a7f39fe9e6d79140b7c3ff8695->leave($__internal_5e82a8f8c7962115e74b6361d7c51addc62a55a7f39fe9e6d79140b7c3ff8695_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e11671361f086284b5510359abe05393e44fed63e1863ee1933002a2dcce99e7 = $this->env->getExtension("native_profiler");
        $__internal_e11671361f086284b5510359abe05393e44fed63e1863ee1933002a2dcce99e7->enter($__internal_e11671361f086284b5510359abe05393e44fed63e1863ee1933002a2dcce99e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "url", array(), "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "url", array());
                // line 22
                echo "        ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), array(0 => "edit", 1 => "show")))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array()));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "identifier_parameter_name", array(), "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "identifier_parameter_name", array()) => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "normalizedidentifier", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array()), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol", array()), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = twig_replace_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("http://" => "", "https://" => ""));
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["url_address"]) ? $context["url_address"] : $this->getContext($context, "url_address")), "html", null, true);
            echo "\">";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 47
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            } else {
                // line 49
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            }
            // line 51
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e11671361f086284b5510359abe05393e44fed63e1863ee1933002a2dcce99e7->leave($__internal_e11671361f086284b5510359abe05393e44fed63e1863ee1933002a2dcce99e7_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 51,  127 => 49,  124 => 47,  122 => 46,  119 => 45,  116 => 44,  113 => 43,  110 => 42,  108 => 41,  105 => 40,  102 => 39,  99 => 38,  97 => 37,  94 => 36,  91 => 35,  88 => 34,  85 => 33,  82 => 32,  80 => 31,  77 => 30,  74 => 29,  71 => 28,  68 => 27,  65 => 25,  62 => 24,  60 => 23,  57 => 22,  54 => 21,  52 => 20,  49 => 19,  45 => 17,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/* {% block field %}*/
/* {% spaceless %}*/
/*     {% if value is empty %}*/
/*         &nbsp;*/
/*     {% else %}*/
/*         {% if field_description.options.url is defined %}*/
/*             {# target url is string #}*/
/*             {% set url_address = field_description.options.url %}*/
/*         {% elseif field_description.options.route is defined and field_description.options.route.name not in ['edit', 'show'] %}*/
/*             {# target url is Symfony route #}*/
/*             {% set parameters = field_description.options.route.parameters|default([]) %}*/
/* */
/*             {# route with paramter related to object ID #}*/
/*             {% if field_description.options.route.identifier_parameter_name is defined %}*/
/*                 {% set parameters = parameters|merge({(field_description.options.route.identifier_parameter_name):(admin.normalizedidentifier(object))}) %}*/
/*             {% endif %}*/
/* */
/*             {% if field_description.options.route.absolute|default(false) %}*/
/*                 {% set url_address = url(field_description.options.route.name, parameters) %}*/
/*             {% else %}*/
/*                 {% set url_address = path(field_description.options.route.name, parameters) %}*/
/*             {% endif %}*/
/*         {% else %}*/
/*             {# value is url #}*/
/*             {% set url_address = value %}*/
/*         {% endif %}*/
/* */
/*         {% if field_description.options.hide_protocol|default(false) %}*/
/*             {% set value = value|replace({'http://': '', 'https://': ''}) %}*/
/*         {% endif %}*/
/* */
/*         <a href="{{ url_address }}">*/
/*             {%- if field_description.options.safe -%}*/
/*                 {{- value|raw -}}*/
/*             {%- else -%}*/
/*                 {{- value -}}*/
/*             {%- endif -%}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */

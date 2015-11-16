<?php

/* SonataAdminBundle:CRUD:list_url.html.twig */
class __TwigTemplate_a93237e6aa8671ee6bdf1a867da13ae95c8007c7cf51179dd982f236715b3616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_url.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efe00b0118bb7e67c96a6b92cc00839ed1c67da0b2724fb73ece17340e1f70a1 = $this->env->getExtension("native_profiler");
        $__internal_efe00b0118bb7e67c96a6b92cc00839ed1c67da0b2724fb73ece17340e1f70a1->enter($__internal_efe00b0118bb7e67c96a6b92cc00839ed1c67da0b2724fb73ece17340e1f70a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_url.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efe00b0118bb7e67c96a6b92cc00839ed1c67da0b2724fb73ece17340e1f70a1->leave($__internal_efe00b0118bb7e67c96a6b92cc00839ed1c67da0b2724fb73ece17340e1f70a1_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9b30b5e665b14686e1f1d6f60861ab394380b4d167645f082bc2473adfb8286e = $this->env->getExtension("native_profiler");
        $__internal_9b30b5e665b14686e1f1d6f60861ab394380b4d167645f082bc2473adfb8286e->enter($__internal_9b30b5e665b14686e1f1d6f60861ab394380b4d167645f082bc2473adfb8286e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9b30b5e665b14686e1f1d6f60861ab394380b4d167645f082bc2473adfb8286e->leave($__internal_9b30b5e665b14686e1f1d6f60861ab394380b4d167645f082bc2473adfb8286e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 45,  115 => 44,  112 => 43,  109 => 42,  107 => 41,  104 => 40,  101 => 39,  98 => 38,  96 => 37,  93 => 36,  90 => 35,  87 => 34,  84 => 33,  81 => 32,  79 => 31,  76 => 30,  73 => 29,  70 => 28,  67 => 27,  64 => 25,  61 => 24,  59 => 23,  56 => 22,  53 => 21,  51 => 20,  48 => 19,  44 => 17,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
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
/*         <a href="{{ url_address }}">{{ value }}</a>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */

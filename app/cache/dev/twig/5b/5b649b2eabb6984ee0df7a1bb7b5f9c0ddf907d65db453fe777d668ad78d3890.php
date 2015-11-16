<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_2a7586535a2afe915efb2ce31ecf70a1a1a0a3599f974c09b179dfa13850faae extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6a989db9b1b46fd6076a07c7572c9da8e7991a6ff738ea6678dc532b64c5b37 = $this->env->getExtension("native_profiler");
        $__internal_c6a989db9b1b46fd6076a07c7572c9da8e7991a6ff738ea6678dc532b64c5b37->enter($__internal_c6a989db9b1b46fd6076a07c7572c9da8e7991a6ff738ea6678dc532b64c5b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6a989db9b1b46fd6076a07c7572c9da8e7991a6ff738ea6678dc532b64c5b37->leave($__internal_c6a989db9b1b46fd6076a07c7572c9da8e7991a6ff738ea6678dc532b64c5b37_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c7e00c86ae39929078d5b85f3c62070a1d5e8222ead1cde824ea699f119ec36e = $this->env->getExtension("native_profiler");
        $__internal_c7e00c86ae39929078d5b85f3c62070a1d5e8222ead1cde824ea699f119ec36e->enter($__internal_c7e00c86ae39929078d5b85f3c62070a1d5e8222ead1cde824ea699f119ec36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c7e00c86ae39929078d5b85f3c62070a1d5e8222ead1cde824ea699f119ec36e->leave($__internal_c7e00c86ae39929078d5b85f3c62070a1d5e8222ead1cde824ea699f119ec36e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */

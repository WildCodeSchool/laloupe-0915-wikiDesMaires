<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_d2e7ca950d3b6983ba299a66698d8cf4f75533552b48171071056b6038d33c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_893ce53564d690903e5e092bb1d70f63b8ca97f41383d2c2ff7ef7a3898271b3 = $this->env->getExtension("native_profiler");
        $__internal_893ce53564d690903e5e092bb1d70f63b8ca97f41383d2c2ff7ef7a3898271b3->enter($__internal_893ce53564d690903e5e092bb1d70f63b8ca97f41383d2c2ff7ef7a3898271b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_893ce53564d690903e5e092bb1d70f63b8ca97f41383d2c2ff7ef7a3898271b3->leave($__internal_893ce53564d690903e5e092bb1d70f63b8ca97f41383d2c2ff7ef7a3898271b3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aeb5ad6054283aaedb4c50a9b7e031dd2d48013a97132ba36841eba59d67d6b9 = $this->env->getExtension("native_profiler");
        $__internal_aeb5ad6054283aaedb4c50a9b7e031dd2d48013a97132ba36841eba59d67d6b9->enter($__internal_aeb5ad6054283aaedb4c50a9b7e031dd2d48013a97132ba36841eba59d67d6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_aeb5ad6054283aaedb4c50a9b7e031dd2d48013a97132ba36841eba59d67d6b9->leave($__internal_aeb5ad6054283aaedb4c50a9b7e031dd2d48013a97132ba36841eba59d67d6b9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */

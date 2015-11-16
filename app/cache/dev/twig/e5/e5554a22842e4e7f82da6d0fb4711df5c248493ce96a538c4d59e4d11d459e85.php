<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_5d906c3330398fe33c7a8c70f95f634287f8754b6b9c3aec480488dd629942c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_2690fb822f0d3a0d987c8d9a27328404643cf2f15b9094266cdaba2208c27dd5 = $this->env->getExtension("native_profiler");
        $__internal_2690fb822f0d3a0d987c8d9a27328404643cf2f15b9094266cdaba2208c27dd5->enter($__internal_2690fb822f0d3a0d987c8d9a27328404643cf2f15b9094266cdaba2208c27dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2690fb822f0d3a0d987c8d9a27328404643cf2f15b9094266cdaba2208c27dd5->leave($__internal_2690fb822f0d3a0d987c8d9a27328404643cf2f15b9094266cdaba2208c27dd5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4ceb72ff5a3d8c6fedf4d88a69008964814d2f5dc2716beb06752ee3c3aa1dd8 = $this->env->getExtension("native_profiler");
        $__internal_4ceb72ff5a3d8c6fedf4d88a69008964814d2f5dc2716beb06752ee3c3aa1dd8->enter($__internal_4ceb72ff5a3d8c6fedf4d88a69008964814d2f5dc2716beb06752ee3c3aa1dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_4ceb72ff5a3d8c6fedf4d88a69008964814d2f5dc2716beb06752ee3c3aa1dd8->leave($__internal_4ceb72ff5a3d8c6fedf4d88a69008964814d2f5dc2716beb06752ee3c3aa1dd8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

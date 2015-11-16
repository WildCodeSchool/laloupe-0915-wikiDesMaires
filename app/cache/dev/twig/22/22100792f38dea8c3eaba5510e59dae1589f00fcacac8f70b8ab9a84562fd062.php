<?php

/* SonataAdminBundle:CRUD:list_trans.html.twig */
class __TwigTemplate_134124e269e0cb839307ce5575a806258ed70f6d19c09022559b90a29b05f598 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6aaf0b3b0c080ccd9b9b18e1f92fb4f4fb2259835da183ac8972a10819e05e6 = $this->env->getExtension("native_profiler");
        $__internal_e6aaf0b3b0c080ccd9b9b18e1f92fb4f4fb2259835da183ac8972a10819e05e6->enter($__internal_e6aaf0b3b0c080ccd9b9b18e1f92fb4f4fb2259835da183ac8972a10819e05e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6aaf0b3b0c080ccd9b9b18e1f92fb4f4fb2259835da183ac8972a10819e05e6->leave($__internal_e6aaf0b3b0c080ccd9b9b18e1f92fb4f4fb2259835da183ac8972a10819e05e6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0839cf2bd6ec5e7c6bc5cfca56483809613df8f22f1c551c38fde7cd2e410242 = $this->env->getExtension("native_profiler");
        $__internal_0839cf2bd6ec5e7c6bc5cfca56483809613df8f22f1c551c38fde7cd2e410242->enter($__internal_0839cf2bd6ec5e7c6bc5cfca56483809613df8f22f1c551c38fde7cd2e410242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array())), "html", null, true);
            echo "
    ";
        }
        
        $__internal_0839cf2bd6ec5e7c6bc5cfca56483809613df8f22f1c551c38fde7cd2e410242->leave($__internal_0839cf2bd6ec5e7c6bc5cfca56483809613df8f22f1c551c38fde7cd2e410242_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% block field%}*/
/*     {% if field_description.options.catalogue is not defined %}*/
/*         {{value|trans}}*/
/*     {% else %}*/
/*         {{value|trans({}, field_description.options.catalogue)}}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

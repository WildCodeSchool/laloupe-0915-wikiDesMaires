<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_db44b3a8b8187233df936ff1d5b77720181be3b874a98409f678f4b737e79d12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_a371b6549b7e5f9e471d127bb8c433e1cb0addb97f8209ca44a921140aaed131 = $this->env->getExtension("native_profiler");
        $__internal_a371b6549b7e5f9e471d127bb8c433e1cb0addb97f8209ca44a921140aaed131->enter($__internal_a371b6549b7e5f9e471d127bb8c433e1cb0addb97f8209ca44a921140aaed131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a371b6549b7e5f9e471d127bb8c433e1cb0addb97f8209ca44a921140aaed131->leave($__internal_a371b6549b7e5f9e471d127bb8c433e1cb0addb97f8209ca44a921140aaed131_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6271ff34544944e71a3ff2e5ccb19565151e65ce6302c20f2909ff930d0252da = $this->env->getExtension("native_profiler");
        $__internal_6271ff34544944e71a3ff2e5ccb19565151e65ce6302c20f2909ff930d0252da->enter($__internal_6271ff34544944e71a3ff2e5ccb19565151e65ce6302c20f2909ff930d0252da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_6271ff34544944e71a3ff2e5ccb19565151e65ce6302c20f2909ff930d0252da->leave($__internal_6271ff34544944e71a3ff2e5ccb19565151e65ce6302c20f2909ff930d0252da_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */

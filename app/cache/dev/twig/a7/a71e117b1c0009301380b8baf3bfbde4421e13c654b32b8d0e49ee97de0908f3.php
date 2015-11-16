<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_f8e2523f37e2de68f0cb9d4ee3dece796da4f4a133841f853756387661b3c671 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b07f457a36d670a99f131969602551a50a405d9d9cc0ed768dcd48687fd8b6d1 = $this->env->getExtension("native_profiler");
        $__internal_b07f457a36d670a99f131969602551a50a405d9d9cc0ed768dcd48687fd8b6d1->enter($__internal_b07f457a36d670a99f131969602551a50a405d9d9cc0ed768dcd48687fd8b6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b07f457a36d670a99f131969602551a50a405d9d9cc0ed768dcd48687fd8b6d1->leave($__internal_b07f457a36d670a99f131969602551a50a405d9d9cc0ed768dcd48687fd8b6d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff9970fd8b342c5f00f662b2768e95c23b3f363239bd9091439c796b21cea660 = $this->env->getExtension("native_profiler");
        $__internal_ff9970fd8b342c5f00f662b2768e95c23b3f363239bd9091439c796b21cea660->enter($__internal_ff9970fd8b342c5f00f662b2768e95c23b3f363239bd9091439c796b21cea660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ff9970fd8b342c5f00f662b2768e95c23b3f363239bd9091439c796b21cea660->leave($__internal_ff9970fd8b342c5f00f662b2768e95c23b3f363239bd9091439c796b21cea660_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

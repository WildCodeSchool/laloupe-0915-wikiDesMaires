<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_037e2b88f96a298dfcd1d9db14bcf2eb4170d22c78a533c25914f710587fa648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_9b468f64e8db40533e65b573ec7a8003ee32b30333b0681fe6b3e827332456c7 = $this->env->getExtension("native_profiler");
        $__internal_9b468f64e8db40533e65b573ec7a8003ee32b30333b0681fe6b3e827332456c7->enter($__internal_9b468f64e8db40533e65b573ec7a8003ee32b30333b0681fe6b3e827332456c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b468f64e8db40533e65b573ec7a8003ee32b30333b0681fe6b3e827332456c7->leave($__internal_9b468f64e8db40533e65b573ec7a8003ee32b30333b0681fe6b3e827332456c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdca3875e5686f717818fde25dd7a24fd4e78325f82f54f44d96d9308551edab = $this->env->getExtension("native_profiler");
        $__internal_bdca3875e5686f717818fde25dd7a24fd4e78325f82f54f44d96d9308551edab->enter($__internal_bdca3875e5686f717818fde25dd7a24fd4e78325f82f54f44d96d9308551edab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bdca3875e5686f717818fde25dd7a24fd4e78325f82f54f44d96d9308551edab->leave($__internal_bdca3875e5686f717818fde25dd7a24fd4e78325f82f54f44d96d9308551edab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

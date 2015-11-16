<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5a2e8f8e9ccf3c3dcd16c43d5d7a3476fc6c95cdc3622942ec57c994f44c5222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_ff71c7ad8cdfbc2e206967ed38397b1d88023f65e09cb2cb7c5377c0f281dd5a = $this->env->getExtension("native_profiler");
        $__internal_ff71c7ad8cdfbc2e206967ed38397b1d88023f65e09cb2cb7c5377c0f281dd5a->enter($__internal_ff71c7ad8cdfbc2e206967ed38397b1d88023f65e09cb2cb7c5377c0f281dd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff71c7ad8cdfbc2e206967ed38397b1d88023f65e09cb2cb7c5377c0f281dd5a->leave($__internal_ff71c7ad8cdfbc2e206967ed38397b1d88023f65e09cb2cb7c5377c0f281dd5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d5f5b3b41c42c942b124635afebcc5acf1461feac96d79b833d83af96ebbec40 = $this->env->getExtension("native_profiler");
        $__internal_d5f5b3b41c42c942b124635afebcc5acf1461feac96d79b833d83af96ebbec40->enter($__internal_d5f5b3b41c42c942b124635afebcc5acf1461feac96d79b833d83af96ebbec40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d5f5b3b41c42c942b124635afebcc5acf1461feac96d79b833d83af96ebbec40->leave($__internal_d5f5b3b41c42c942b124635afebcc5acf1461feac96d79b833d83af96ebbec40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

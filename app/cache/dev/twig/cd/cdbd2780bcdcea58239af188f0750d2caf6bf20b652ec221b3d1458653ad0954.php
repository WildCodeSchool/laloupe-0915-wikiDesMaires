<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_556a0fcc865238ae425d6d69be9d7d485d448d0ebf951196e48af97a84a5b20d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_1173f10075f92840deeea1e6629549b9c53bebe653298482d8d28f335413b705 = $this->env->getExtension("native_profiler");
        $__internal_1173f10075f92840deeea1e6629549b9c53bebe653298482d8d28f335413b705->enter($__internal_1173f10075f92840deeea1e6629549b9c53bebe653298482d8d28f335413b705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1173f10075f92840deeea1e6629549b9c53bebe653298482d8d28f335413b705->leave($__internal_1173f10075f92840deeea1e6629549b9c53bebe653298482d8d28f335413b705_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45682a6783fb2c3dc436ca5ac30bd3ec7edab71187cccb48b4fedde731134f60 = $this->env->getExtension("native_profiler");
        $__internal_45682a6783fb2c3dc436ca5ac30bd3ec7edab71187cccb48b4fedde731134f60->enter($__internal_45682a6783fb2c3dc436ca5ac30bd3ec7edab71187cccb48b4fedde731134f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_45682a6783fb2c3dc436ca5ac30bd3ec7edab71187cccb48b4fedde731134f60->leave($__internal_45682a6783fb2c3dc436ca5ac30bd3ec7edab71187cccb48b4fedde731134f60_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

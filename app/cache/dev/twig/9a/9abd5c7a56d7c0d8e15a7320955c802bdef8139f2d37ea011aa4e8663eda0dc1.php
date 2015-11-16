<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_1560e9f3c722bcd727d798224eb77f6f3d802a2f7788e14bc998edb47d713148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_61839a8cf35f42e95e7ea1381194268a75de77a4f86605e08622b41e702b8da6 = $this->env->getExtension("native_profiler");
        $__internal_61839a8cf35f42e95e7ea1381194268a75de77a4f86605e08622b41e702b8da6->enter($__internal_61839a8cf35f42e95e7ea1381194268a75de77a4f86605e08622b41e702b8da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61839a8cf35f42e95e7ea1381194268a75de77a4f86605e08622b41e702b8da6->leave($__internal_61839a8cf35f42e95e7ea1381194268a75de77a4f86605e08622b41e702b8da6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60e0d337e4dcb5fa0a1f56fca328d5aa55dbb358a9a2e6638a6e7d109414be98 = $this->env->getExtension("native_profiler");
        $__internal_60e0d337e4dcb5fa0a1f56fca328d5aa55dbb358a9a2e6638a6e7d109414be98->enter($__internal_60e0d337e4dcb5fa0a1f56fca328d5aa55dbb358a9a2e6638a6e7d109414be98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_60e0d337e4dcb5fa0a1f56fca328d5aa55dbb358a9a2e6638a6e7d109414be98->leave($__internal_60e0d337e4dcb5fa0a1f56fca328d5aa55dbb358a9a2e6638a6e7d109414be98_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

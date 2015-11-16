<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_2c023c3fca5720a8f93b2e0ca0e2f61d7ef52f315b41a640f33711623584bf21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_199ac2eae3200bc5f7162e7126b331a7aea40ebf2067716194b4964a83e100c7 = $this->env->getExtension("native_profiler");
        $__internal_199ac2eae3200bc5f7162e7126b331a7aea40ebf2067716194b4964a83e100c7->enter($__internal_199ac2eae3200bc5f7162e7126b331a7aea40ebf2067716194b4964a83e100c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199ac2eae3200bc5f7162e7126b331a7aea40ebf2067716194b4964a83e100c7->leave($__internal_199ac2eae3200bc5f7162e7126b331a7aea40ebf2067716194b4964a83e100c7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb6b4c14a8722b7dbc807046833d98272f496906b71a5484989b905d5177d3ed = $this->env->getExtension("native_profiler");
        $__internal_eb6b4c14a8722b7dbc807046833d98272f496906b71a5484989b905d5177d3ed->enter($__internal_eb6b4c14a8722b7dbc807046833d98272f496906b71a5484989b905d5177d3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_eb6b4c14a8722b7dbc807046833d98272f496906b71a5484989b905d5177d3ed->leave($__internal_eb6b4c14a8722b7dbc807046833d98272f496906b71a5484989b905d5177d3ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

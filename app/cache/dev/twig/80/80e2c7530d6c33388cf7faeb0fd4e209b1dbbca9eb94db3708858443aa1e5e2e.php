<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_3cee44734b857d7db4e1af4db3b98a5102682864e743aae22b0cee8929f4c32c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c5e1c552dcfc84926f1d55bb13a4da37b7939c38e70c33ca97beb437e46d031 = $this->env->getExtension("native_profiler");
        $__internal_9c5e1c552dcfc84926f1d55bb13a4da37b7939c38e70c33ca97beb437e46d031->enter($__internal_9c5e1c552dcfc84926f1d55bb13a4da37b7939c38e70c33ca97beb437e46d031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5e1c552dcfc84926f1d55bb13a4da37b7939c38e70c33ca97beb437e46d031->leave($__internal_9c5e1c552dcfc84926f1d55bb13a4da37b7939c38e70c33ca97beb437e46d031_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends "SonataUserBundle:Security:base_login.html.twig" %}*/

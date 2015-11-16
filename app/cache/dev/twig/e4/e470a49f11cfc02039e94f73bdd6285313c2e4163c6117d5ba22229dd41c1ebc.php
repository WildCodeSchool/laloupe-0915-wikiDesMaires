<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_198a9d94ce8d43384c39cc6a4eefb57bbf9aaf2318bb896a8cbe8c41e84a11cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3b48246441aba6cc69062fc7b459e4e1dc301c08884149b2f390804224da388 = $this->env->getExtension("native_profiler");
        $__internal_c3b48246441aba6cc69062fc7b459e4e1dc301c08884149b2f390804224da388->enter($__internal_c3b48246441aba6cc69062fc7b459e4e1dc301c08884149b2f390804224da388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c3b48246441aba6cc69062fc7b459e4e1dc301c08884149b2f390804224da388->leave($__internal_c3b48246441aba6cc69062fc7b459e4e1dc301c08884149b2f390804224da388_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

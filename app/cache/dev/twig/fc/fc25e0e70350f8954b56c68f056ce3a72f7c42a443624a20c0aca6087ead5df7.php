<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_68be99239498d420d7858104b61415d3157e9a6b39761315d94544b03de61f8d extends Twig_Template
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
        $__internal_29102b334c2d96616a3d0f7c5fd81c2e0057feb7eb31d1d4405f27dc3c52a59b = $this->env->getExtension("native_profiler");
        $__internal_29102b334c2d96616a3d0f7c5fd81c2e0057feb7eb31d1d4405f27dc3c52a59b->enter($__internal_29102b334c2d96616a3d0f7c5fd81c2e0057feb7eb31d1d4405f27dc3c52a59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_29102b334c2d96616a3d0f7c5fd81c2e0057feb7eb31d1d4405f27dc3c52a59b->leave($__internal_29102b334c2d96616a3d0f7c5fd81c2e0057feb7eb31d1d4405f27dc3c52a59b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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

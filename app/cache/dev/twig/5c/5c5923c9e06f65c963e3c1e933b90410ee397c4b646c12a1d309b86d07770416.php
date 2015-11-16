<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8feba4c0147926f4983a16d5636deeaa32462c7313ea11f6381355c29e87a41d extends Twig_Template
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
        $__internal_cdb92d9a262df2b2c9ef80ba971db4235b59415cde37f2d517e7aed8a7201f12 = $this->env->getExtension("native_profiler");
        $__internal_cdb92d9a262df2b2c9ef80ba971db4235b59415cde37f2d517e7aed8a7201f12->enter($__internal_cdb92d9a262df2b2c9ef80ba971db4235b59415cde37f2d517e7aed8a7201f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cdb92d9a262df2b2c9ef80ba971db4235b59415cde37f2d517e7aed8a7201f12->leave($__internal_cdb92d9a262df2b2c9ef80ba971db4235b59415cde37f2d517e7aed8a7201f12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */

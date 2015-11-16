<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6bfd78c133cf5cc6ee54a189950b968081b8600ce0c6f65080695908d7c9e46b extends Twig_Template
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
        $__internal_062b765917abf83ec2b98615569027a20d6e43572e30436ea3efb839f49a3416 = $this->env->getExtension("native_profiler");
        $__internal_062b765917abf83ec2b98615569027a20d6e43572e30436ea3efb839f49a3416->enter($__internal_062b765917abf83ec2b98615569027a20d6e43572e30436ea3efb839f49a3416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_062b765917abf83ec2b98615569027a20d6e43572e30436ea3efb839f49a3416->leave($__internal_062b765917abf83ec2b98615569027a20d6e43572e30436ea3efb839f49a3416_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

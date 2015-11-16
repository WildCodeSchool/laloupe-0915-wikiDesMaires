<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_66b89498eb36b6d52b2053ef7ad9eb1c21663e40023461e81b65f3515bc62f06 extends Twig_Template
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
        $__internal_6a21d7877f058bc1541853a6fa42b48bb668f36bdabe6d0b5e3fc040677daa32 = $this->env->getExtension("native_profiler");
        $__internal_6a21d7877f058bc1541853a6fa42b48bb668f36bdabe6d0b5e3fc040677daa32->enter($__internal_6a21d7877f058bc1541853a6fa42b48bb668f36bdabe6d0b5e3fc040677daa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6a21d7877f058bc1541853a6fa42b48bb668f36bdabe6d0b5e3fc040677daa32->leave($__internal_6a21d7877f058bc1541853a6fa42b48bb668f36bdabe6d0b5e3fc040677daa32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */

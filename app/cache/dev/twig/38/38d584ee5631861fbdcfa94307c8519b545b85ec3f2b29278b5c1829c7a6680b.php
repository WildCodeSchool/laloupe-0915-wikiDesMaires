<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_73199a081f89cbac35f88197394214569412f9817a5a8c1764b2a362b7834eb8 extends Twig_Template
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
        $__internal_809cd5411681d89da557e8c33b440b08feadddfd71636da2f3fa4b49f573c123 = $this->env->getExtension("native_profiler");
        $__internal_809cd5411681d89da557e8c33b440b08feadddfd71636da2f3fa4b49f573c123->enter($__internal_809cd5411681d89da557e8c33b440b08feadddfd71636da2f3fa4b49f573c123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_809cd5411681d89da557e8c33b440b08feadddfd71636da2f3fa4b49f573c123->leave($__internal_809cd5411681d89da557e8c33b440b08feadddfd71636da2f3fa4b49f573c123_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */

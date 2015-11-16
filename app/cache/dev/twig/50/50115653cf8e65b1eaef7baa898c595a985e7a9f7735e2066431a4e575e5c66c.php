<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_6770c081e27241a24b2a6c275f506b13f100e12ba96dec15bfe0732cb36cceb5 extends Twig_Template
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
        $__internal_fc6be8e043510e0f2144170f01ffbfecc02a389c32a2bf1c9def5daf68c223f1 = $this->env->getExtension("native_profiler");
        $__internal_fc6be8e043510e0f2144170f01ffbfecc02a389c32a2bf1c9def5daf68c223f1->enter($__internal_fc6be8e043510e0f2144170f01ffbfecc02a389c32a2bf1c9def5daf68c223f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fc6be8e043510e0f2144170f01ffbfecc02a389c32a2bf1c9def5daf68c223f1->leave($__internal_fc6be8e043510e0f2144170f01ffbfecc02a389c32a2bf1c9def5daf68c223f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

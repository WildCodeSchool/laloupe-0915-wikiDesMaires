<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_86d1487a88650656b9772fae03ec34d8f1b6ab71d467d6e6e1606d28133a7bad extends Twig_Template
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
        $__internal_6ba4675dc82b71355702389642038bc34ef370bb2252e73c200202be1520fab5 = $this->env->getExtension("native_profiler");
        $__internal_6ba4675dc82b71355702389642038bc34ef370bb2252e73c200202be1520fab5->enter($__internal_6ba4675dc82b71355702389642038bc34ef370bb2252e73c200202be1520fab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6ba4675dc82b71355702389642038bc34ef370bb2252e73c200202be1520fab5->leave($__internal_6ba4675dc82b71355702389642038bc34ef370bb2252e73c200202be1520fab5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

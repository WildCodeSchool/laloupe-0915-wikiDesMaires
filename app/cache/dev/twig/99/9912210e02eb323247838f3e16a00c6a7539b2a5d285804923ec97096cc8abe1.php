<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ee25a2e0034ef36f9e114e1c75b89bf5e49c3b3d9c835e0898bbbf5d9c38b26c extends Twig_Template
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
        $__internal_e72f195be6514f62c4e818ce292dfd364b2fdbed3812be2eac3aa52a2450edf2 = $this->env->getExtension("native_profiler");
        $__internal_e72f195be6514f62c4e818ce292dfd364b2fdbed3812be2eac3aa52a2450edf2->enter($__internal_e72f195be6514f62c4e818ce292dfd364b2fdbed3812be2eac3aa52a2450edf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e72f195be6514f62c4e818ce292dfd364b2fdbed3812be2eac3aa52a2450edf2->leave($__internal_e72f195be6514f62c4e818ce292dfd364b2fdbed3812be2eac3aa52a2450edf2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

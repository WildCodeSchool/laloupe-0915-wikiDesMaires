<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2e9adc15c90c13e1dbe6d64c3b8f68abf3179c758c01e0e6c3aa6efe489803ed extends Twig_Template
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
        $__internal_95584dd2ea3a4f3300115206edb03ae6d10b10a0d8f7c970b10e6a7d72e1f5b9 = $this->env->getExtension("native_profiler");
        $__internal_95584dd2ea3a4f3300115206edb03ae6d10b10a0d8f7c970b10e6a7d72e1f5b9->enter($__internal_95584dd2ea3a4f3300115206edb03ae6d10b10a0d8f7c970b10e6a7d72e1f5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_95584dd2ea3a4f3300115206edb03ae6d10b10a0d8f7c970b10e6a7d72e1f5b9->leave($__internal_95584dd2ea3a4f3300115206edb03ae6d10b10a0d8f7c970b10e6a7d72e1f5b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

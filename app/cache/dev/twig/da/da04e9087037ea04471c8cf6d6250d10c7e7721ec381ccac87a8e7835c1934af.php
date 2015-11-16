<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d2c3f2a2ff4db977188166b958042b53208c529c73c2f7f02dbc5db2d9eeca0a extends Twig_Template
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
        $__internal_3574c8fab7b6f505fc7f5f0697bcc25b51f504e06346273cc860958ff245d96d = $this->env->getExtension("native_profiler");
        $__internal_3574c8fab7b6f505fc7f5f0697bcc25b51f504e06346273cc860958ff245d96d->enter($__internal_3574c8fab7b6f505fc7f5f0697bcc25b51f504e06346273cc860958ff245d96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3574c8fab7b6f505fc7f5f0697bcc25b51f504e06346273cc860958ff245d96d->leave($__internal_3574c8fab7b6f505fc7f5f0697bcc25b51f504e06346273cc860958ff245d96d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

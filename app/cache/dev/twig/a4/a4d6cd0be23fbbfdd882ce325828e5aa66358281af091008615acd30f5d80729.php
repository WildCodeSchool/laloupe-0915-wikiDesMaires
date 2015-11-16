<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_24bcb332307a733ca41d8debd62859dc67812ac67082f4883d3aee144e4bcd2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6277e7e566b635cba3a2f8ca380d4aa3764efb36e294a790d06e06c52c044d3f = $this->env->getExtension("native_profiler");
        $__internal_6277e7e566b635cba3a2f8ca380d4aa3764efb36e294a790d06e06c52c044d3f->enter($__internal_6277e7e566b635cba3a2f8ca380d4aa3764efb36e294a790d06e06c52c044d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6277e7e566b635cba3a2f8ca380d4aa3764efb36e294a790d06e06c52c044d3f->leave($__internal_6277e7e566b635cba3a2f8ca380d4aa3764efb36e294a790d06e06c52c044d3f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60e5bd682170161277a9e27f6416fc9d8c31e8edba1ad766cd6e484d565c971c = $this->env->getExtension("native_profiler");
        $__internal_60e5bd682170161277a9e27f6416fc9d8c31e8edba1ad766cd6e484d565c971c->enter($__internal_60e5bd682170161277a9e27f6416fc9d8c31e8edba1ad766cd6e484d565c971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_60e5bd682170161277a9e27f6416fc9d8c31e8edba1ad766cd6e484d565c971c->leave($__internal_60e5bd682170161277a9e27f6416fc9d8c31e8edba1ad766cd6e484d565c971c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_05ef74ab8268c2c9581dcfbe6699097ce8f41f1e272dc131ff78e48b6ac8928e = $this->env->getExtension("native_profiler");
        $__internal_05ef74ab8268c2c9581dcfbe6699097ce8f41f1e272dc131ff78e48b6ac8928e->enter($__internal_05ef74ab8268c2c9581dcfbe6699097ce8f41f1e272dc131ff78e48b6ac8928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_05ef74ab8268c2c9581dcfbe6699097ce8f41f1e272dc131ff78e48b6ac8928e->leave($__internal_05ef74ab8268c2c9581dcfbe6699097ce8f41f1e272dc131ff78e48b6ac8928e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47aa24a0bd2c25241a0864543bf7f2ccb99febbd7cd976a11a7de13b0d9bc789 = $this->env->getExtension("native_profiler");
        $__internal_47aa24a0bd2c25241a0864543bf7f2ccb99febbd7cd976a11a7de13b0d9bc789->enter($__internal_47aa24a0bd2c25241a0864543bf7f2ccb99febbd7cd976a11a7de13b0d9bc789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_47aa24a0bd2c25241a0864543bf7f2ccb99febbd7cd976a11a7de13b0d9bc789->leave($__internal_47aa24a0bd2c25241a0864543bf7f2ccb99febbd7cd976a11a7de13b0d9bc789_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

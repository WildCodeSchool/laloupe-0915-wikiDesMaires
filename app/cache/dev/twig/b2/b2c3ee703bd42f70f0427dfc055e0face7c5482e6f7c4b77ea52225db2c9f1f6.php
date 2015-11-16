<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_c160b2f63b82a300fbfeac922fc7ebc19cdbe7a1d2045e3e21d0a7dfa1ce2f99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f1979255728dbc3e10a1b146fa3764b29fb401f4a3d70857e125ab712c282da0 = $this->env->getExtension("native_profiler");
        $__internal_f1979255728dbc3e10a1b146fa3764b29fb401f4a3d70857e125ab712c282da0->enter($__internal_f1979255728dbc3e10a1b146fa3764b29fb401f4a3d70857e125ab712c282da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1979255728dbc3e10a1b146fa3764b29fb401f4a3d70857e125ab712c282da0->leave($__internal_f1979255728dbc3e10a1b146fa3764b29fb401f4a3d70857e125ab712c282da0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2938fdb3ac0f45311f09431702b71c682d64ab6978bcf83093ebb784a2a646c9 = $this->env->getExtension("native_profiler");
        $__internal_2938fdb3ac0f45311f09431702b71c682d64ab6978bcf83093ebb784a2a646c9->enter($__internal_2938fdb3ac0f45311f09431702b71c682d64ab6978bcf83093ebb784a2a646c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2938fdb3ac0f45311f09431702b71c682d64ab6978bcf83093ebb784a2a646c9->leave($__internal_2938fdb3ac0f45311f09431702b71c682d64ab6978bcf83093ebb784a2a646c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2728144b023cc30a8d816ca7adfb083924dfb0f71d604fb8d9791971e6d2d2db = $this->env->getExtension("native_profiler");
        $__internal_2728144b023cc30a8d816ca7adfb083924dfb0f71d604fb8d9791971e6d2d2db->enter($__internal_2728144b023cc30a8d816ca7adfb083924dfb0f71d604fb8d9791971e6d2d2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2728144b023cc30a8d816ca7adfb083924dfb0f71d604fb8d9791971e6d2d2db->leave($__internal_2728144b023cc30a8d816ca7adfb083924dfb0f71d604fb8d9791971e6d2d2db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

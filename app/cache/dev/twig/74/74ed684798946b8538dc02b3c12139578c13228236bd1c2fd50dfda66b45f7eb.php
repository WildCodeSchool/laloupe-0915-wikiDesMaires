<?php

/* WikiAdminBundle:Commune:new.html.twig */
class __TwigTemplate_42b00198c8ea87cf82f6c325f76539931522f08393e84a1b222961d9d517008d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WikiAdminBundle:Commune:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1446bb3ea2faec67d39e9ef968e7327862caf7b7f5ebaa0c78996e3e7a3dc4b6 = $this->env->getExtension("native_profiler");
        $__internal_1446bb3ea2faec67d39e9ef968e7327862caf7b7f5ebaa0c78996e3e7a3dc4b6->enter($__internal_1446bb3ea2faec67d39e9ef968e7327862caf7b7f5ebaa0c78996e3e7a3dc4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WikiAdminBundle:Commune:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1446bb3ea2faec67d39e9ef968e7327862caf7b7f5ebaa0c78996e3e7a3dc4b6->leave($__internal_1446bb3ea2faec67d39e9ef968e7327862caf7b7f5ebaa0c78996e3e7a3dc4b6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d5eecda9e43715e5a7d712c4dd52a5d45182656e0facf0f0fce6446d7323f1e = $this->env->getExtension("native_profiler");
        $__internal_7d5eecda9e43715e5a7d712c4dd52a5d45182656e0facf0f0fce6446d7323f1e->enter($__internal_7d5eecda9e43715e5a7d712c4dd52a5d45182656e0facf0f0fce6446d7323f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Commune creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("commune");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_7d5eecda9e43715e5a7d712c4dd52a5d45182656e0facf0f0fce6446d7323f1e->leave($__internal_7d5eecda9e43715e5a7d712c4dd52a5d45182656e0facf0f0fce6446d7323f1e_prof);

    }

    public function getTemplateName()
    {
        return "WikiAdminBundle:Commune:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Commune creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('commune') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */

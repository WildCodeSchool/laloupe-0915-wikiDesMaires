<?php

/* WikiAdminBundle:Users:new.html.twig */
class __TwigTemplate_3d6df68a6b73417d9507e98fbd525950f2685fef5b212756feb29aa88bd057c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WikiAdminBundle:Users:new.html.twig", 1);
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
        $__internal_4258866c57098f8a08a222bbeeac148db3c81c20b61ddedcce389497e3126683 = $this->env->getExtension("native_profiler");
        $__internal_4258866c57098f8a08a222bbeeac148db3c81c20b61ddedcce389497e3126683->enter($__internal_4258866c57098f8a08a222bbeeac148db3c81c20b61ddedcce389497e3126683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WikiAdminBundle:Users:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4258866c57098f8a08a222bbeeac148db3c81c20b61ddedcce389497e3126683->leave($__internal_4258866c57098f8a08a222bbeeac148db3c81c20b61ddedcce389497e3126683_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_668a95a7537e566e66cbf109642c37164473d22b4cff273412b301d2e5833a84 = $this->env->getExtension("native_profiler");
        $__internal_668a95a7537e566e66cbf109642c37164473d22b4cff273412b301d2e5833a84->enter($__internal_668a95a7537e566e66cbf109642c37164473d22b4cff273412b301d2e5833a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Users creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("users");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_668a95a7537e566e66cbf109642c37164473d22b4cff273412b301d2e5833a84->leave($__internal_668a95a7537e566e66cbf109642c37164473d22b4cff273412b301d2e5833a84_prof);

    }

    public function getTemplateName()
    {
        return "WikiAdminBundle:Users:new.html.twig";
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
/*     <h1>Users creation</h1>*/
/* */
/*     {{ form(form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('users') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */

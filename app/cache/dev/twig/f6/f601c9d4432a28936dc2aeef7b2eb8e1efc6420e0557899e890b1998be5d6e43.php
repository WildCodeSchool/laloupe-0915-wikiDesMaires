<?php

/* WikiAdminBundle:Users:edit.html.twig */
class __TwigTemplate_630d7777a7793a30fa835722e616d1cf9fc0adb9ef061ea7b753f67dc2766107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WikiAdminBundle:Users:edit.html.twig", 1);
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
        $__internal_02155458adc82a60315de96b1c723a509ca03482762f035b7591c378cbdbb628 = $this->env->getExtension("native_profiler");
        $__internal_02155458adc82a60315de96b1c723a509ca03482762f035b7591c378cbdbb628->enter($__internal_02155458adc82a60315de96b1c723a509ca03482762f035b7591c378cbdbb628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WikiAdminBundle:Users:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02155458adc82a60315de96b1c723a509ca03482762f035b7591c378cbdbb628->leave($__internal_02155458adc82a60315de96b1c723a509ca03482762f035b7591c378cbdbb628_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_16621d7f686897d4744512f125807b93a31d2d5462c8024b6c4bbfb5a7a83683 = $this->env->getExtension("native_profiler");
        $__internal_16621d7f686897d4744512f125807b93a31d2d5462c8024b6c4bbfb5a7a83683->enter($__internal_16621d7f686897d4744512f125807b93a31d2d5462c8024b6c4bbfb5a7a83683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Users edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_16621d7f686897d4744512f125807b93a31d2d5462c8024b6c4bbfb5a7a83683->leave($__internal_16621d7f686897d4744512f125807b93a31d2d5462c8024b6c4bbfb5a7a83683_prof);

    }

    public function getTemplateName()
    {
        return "WikiAdminBundle:Users:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Users edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('users') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */

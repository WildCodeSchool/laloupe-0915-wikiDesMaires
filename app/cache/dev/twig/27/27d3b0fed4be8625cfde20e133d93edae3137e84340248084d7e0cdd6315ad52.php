<?php

/* WikiAdminBundle:Commune:edit.html.twig */
class __TwigTemplate_abee39870ed0abbea3018e18733a38cfda43ce4da10f539155de09733592decc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WikiAdminBundle:Commune:edit.html.twig", 1);
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
        $__internal_409d238b71cdb5aed7ea79fca9f9c62bd41580d6f32f6ed276179ed30e49c45e = $this->env->getExtension("native_profiler");
        $__internal_409d238b71cdb5aed7ea79fca9f9c62bd41580d6f32f6ed276179ed30e49c45e->enter($__internal_409d238b71cdb5aed7ea79fca9f9c62bd41580d6f32f6ed276179ed30e49c45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WikiAdminBundle:Commune:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_409d238b71cdb5aed7ea79fca9f9c62bd41580d6f32f6ed276179ed30e49c45e->leave($__internal_409d238b71cdb5aed7ea79fca9f9c62bd41580d6f32f6ed276179ed30e49c45e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe6c8453ed6d5fe01a08457e57540283c39440df73aac965f1e3d7da216c3abe = $this->env->getExtension("native_profiler");
        $__internal_fe6c8453ed6d5fe01a08457e57540283c39440df73aac965f1e3d7da216c3abe->enter($__internal_fe6c8453ed6d5fe01a08457e57540283c39440df73aac965f1e3d7da216c3abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Commune edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_fe6c8453ed6d5fe01a08457e57540283c39440df73aac965f1e3d7da216c3abe->leave($__internal_fe6c8453ed6d5fe01a08457e57540283c39440df73aac965f1e3d7da216c3abe_prof);

    }

    public function getTemplateName()
    {
        return "WikiAdminBundle:Commune:edit.html.twig";
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
/*     <h1>Commune edit</h1>*/
/* */
/*     {{ form(edit_form) }}*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('commune') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */

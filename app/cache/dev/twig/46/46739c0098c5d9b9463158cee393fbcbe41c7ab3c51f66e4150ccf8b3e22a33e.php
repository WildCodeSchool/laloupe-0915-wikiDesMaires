<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_38f083ad63dfdeb3a60407e3fe50f0bbf87f63af61a6e91ffd4fbf3a4ebe0400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2917713b5a110d735c256e9d9fc402fb8637fb7e9b464f43286b9ff0cb4ae86e = $this->env->getExtension("native_profiler");
        $__internal_2917713b5a110d735c256e9d9fc402fb8637fb7e9b464f43286b9ff0cb4ae86e->enter($__internal_2917713b5a110d735c256e9d9fc402fb8637fb7e9b464f43286b9ff0cb4ae86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2917713b5a110d735c256e9d9fc402fb8637fb7e9b464f43286b9ff0cb4ae86e->leave($__internal_2917713b5a110d735c256e9d9fc402fb8637fb7e9b464f43286b9ff0cb4ae86e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2738059ffe27208d4187c38fb6f492dd278addc44cabef85f2a1592a042a20fc = $this->env->getExtension("native_profiler");
        $__internal_2738059ffe27208d4187c38fb6f492dd278addc44cabef85f2a1592a042a20fc->enter($__internal_2738059ffe27208d4187c38fb6f492dd278addc44cabef85f2a1592a042a20fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_2738059ffe27208d4187c38fb6f492dd278addc44cabef85f2a1592a042a20fc->leave($__internal_2738059ffe27208d4187c38fb6f492dd278addc44cabef85f2a1592a042a20fc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */

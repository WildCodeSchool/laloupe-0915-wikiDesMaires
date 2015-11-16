<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_dd6bf6c862e4178482aa58ad1ebfcf9818bdf2181bf5e553eade8c2e5a7256e3 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca62e5c5f54d20bf9629fa0869eeddced8e4a8f961b8c25095301eb08a9168f8 = $this->env->getExtension("native_profiler");
        $__internal_ca62e5c5f54d20bf9629fa0869eeddced8e4a8f961b8c25095301eb08a9168f8->enter($__internal_ca62e5c5f54d20bf9629fa0869eeddced8e4a8f961b8c25095301eb08a9168f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca62e5c5f54d20bf9629fa0869eeddced8e4a8f961b8c25095301eb08a9168f8->leave($__internal_ca62e5c5f54d20bf9629fa0869eeddced8e4a8f961b8c25095301eb08a9168f8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_49fcc5efc03517ddea0d7e24a5117eab166c59d08dd99c038359109f8a71e22b = $this->env->getExtension("native_profiler");
        $__internal_49fcc5efc03517ddea0d7e24a5117eab166c59d08dd99c038359109f8a71e22b->enter($__internal_49fcc5efc03517ddea0d7e24a5117eab166c59d08dd99c038359109f8a71e22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_49fcc5efc03517ddea0d7e24a5117eab166c59d08dd99c038359109f8a71e22b->leave($__internal_49fcc5efc03517ddea0d7e24a5117eab166c59d08dd99c038359109f8a71e22b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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

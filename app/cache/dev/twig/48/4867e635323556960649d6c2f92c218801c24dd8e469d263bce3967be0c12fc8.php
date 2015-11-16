<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_caea2021f770385827ae7ec8d2272332abdb5fc627b60cafd2be700e173e92cd extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fd82a2f143cb0006c02fa1247a4380b3a8c8a089a591ca054cf8458c0f6ffb2 = $this->env->getExtension("native_profiler");
        $__internal_3fd82a2f143cb0006c02fa1247a4380b3a8c8a089a591ca054cf8458c0f6ffb2->enter($__internal_3fd82a2f143cb0006c02fa1247a4380b3a8c8a089a591ca054cf8458c0f6ffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd82a2f143cb0006c02fa1247a4380b3a8c8a089a591ca054cf8458c0f6ffb2->leave($__internal_3fd82a2f143cb0006c02fa1247a4380b3a8c8a089a591ca054cf8458c0f6ffb2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_86cba0f608e4297f3275746f8aded71bcfacb119882a7817b2fb304588830359 = $this->env->getExtension("native_profiler");
        $__internal_86cba0f608e4297f3275746f8aded71bcfacb119882a7817b2fb304588830359->enter($__internal_86cba0f608e4297f3275746f8aded71bcfacb119882a7817b2fb304588830359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_86cba0f608e4297f3275746f8aded71bcfacb119882a7817b2fb304588830359->leave($__internal_86cba0f608e4297f3275746f8aded71bcfacb119882a7817b2fb304588830359_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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

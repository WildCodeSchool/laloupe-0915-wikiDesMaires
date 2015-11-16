<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_c2d77b822637265350bb18d24315d0f1fd927bb92b6f5f63024bc1f0c94e4818 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4696bb388147501d7c669f0892281afa993168db48057c53ecc9824beb8146e3 = $this->env->getExtension("native_profiler");
        $__internal_4696bb388147501d7c669f0892281afa993168db48057c53ecc9824beb8146e3->enter($__internal_4696bb388147501d7c669f0892281afa993168db48057c53ecc9824beb8146e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4696bb388147501d7c669f0892281afa993168db48057c53ecc9824beb8146e3->leave($__internal_4696bb388147501d7c669f0892281afa993168db48057c53ecc9824beb8146e3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1a68b33364835090e4a68df4668fa7dc91ce0357a145d9f9045fea400eb1f1ac = $this->env->getExtension("native_profiler");
        $__internal_1a68b33364835090e4a68df4668fa7dc91ce0357a145d9f9045fea400eb1f1ac->enter($__internal_1a68b33364835090e4a68df4668fa7dc91ce0357a145d9f9045fea400eb1f1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1a68b33364835090e4a68df4668fa7dc91ce0357a145d9f9045fea400eb1f1ac->leave($__internal_1a68b33364835090e4a68df4668fa7dc91ce0357a145d9f9045fea400eb1f1ac_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
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

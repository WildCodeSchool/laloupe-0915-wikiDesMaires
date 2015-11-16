<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_af9647acd654ef95fb620dc6408e00719be9583feddaeedf152fb8f816ce60e2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_692490aace32b18abd78259b287e971e9c800a532d8e8e6b87a66a7fc4cacc34 = $this->env->getExtension("native_profiler");
        $__internal_692490aace32b18abd78259b287e971e9c800a532d8e8e6b87a66a7fc4cacc34->enter($__internal_692490aace32b18abd78259b287e971e9c800a532d8e8e6b87a66a7fc4cacc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_692490aace32b18abd78259b287e971e9c800a532d8e8e6b87a66a7fc4cacc34->leave($__internal_692490aace32b18abd78259b287e971e9c800a532d8e8e6b87a66a7fc4cacc34_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3845d44e528591fadea6ec4fb99f9f106f2b599c2054abbf894fea6ebf247562 = $this->env->getExtension("native_profiler");
        $__internal_3845d44e528591fadea6ec4fb99f9f106f2b599c2054abbf894fea6ebf247562->enter($__internal_3845d44e528591fadea6ec4fb99f9f106f2b599c2054abbf894fea6ebf247562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_3845d44e528591fadea6ec4fb99f9f106f2b599c2054abbf894fea6ebf247562->leave($__internal_3845d44e528591fadea6ec4fb99f9f106f2b599c2054abbf894fea6ebf247562_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */

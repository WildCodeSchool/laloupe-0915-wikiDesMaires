<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_95a03c2bee4c6985af6fa833c4cc125b85850835bd8c2255bf99c5c97d034dfd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_711e7a5d95145779a16fc0e7a782f8265677cbedafeaa2d832052c129f07e55f = $this->env->getExtension("native_profiler");
        $__internal_711e7a5d95145779a16fc0e7a782f8265677cbedafeaa2d832052c129f07e55f->enter($__internal_711e7a5d95145779a16fc0e7a782f8265677cbedafeaa2d832052c129f07e55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711e7a5d95145779a16fc0e7a782f8265677cbedafeaa2d832052c129f07e55f->leave($__internal_711e7a5d95145779a16fc0e7a782f8265677cbedafeaa2d832052c129f07e55f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_25da8df9b3865ab17efa0516e7016963dde065d2e31312bbc5869cb6472c8e39 = $this->env->getExtension("native_profiler");
        $__internal_25da8df9b3865ab17efa0516e7016963dde065d2e31312bbc5869cb6472c8e39->enter($__internal_25da8df9b3865ab17efa0516e7016963dde065d2e31312bbc5869cb6472c8e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_25da8df9b3865ab17efa0516e7016963dde065d2e31312bbc5869cb6472c8e39->leave($__internal_25da8df9b3865ab17efa0516e7016963dde065d2e31312bbc5869cb6472c8e39_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% set value = value * 100 %}*/
/*     {{ value }} %*/
/* {% endblock %}*/
/* */

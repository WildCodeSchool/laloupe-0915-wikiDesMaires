<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_a3bd8a660fe65d10d030a68e40300af374e3bfb21bed6fffd9cfc28ddc613411 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d75530392d78a946e2baa09e7d339603a3f496dd9bd89def503f0d0c2e1f6aa0 = $this->env->getExtension("native_profiler");
        $__internal_d75530392d78a946e2baa09e7d339603a3f496dd9bd89def503f0d0c2e1f6aa0->enter($__internal_d75530392d78a946e2baa09e7d339603a3f496dd9bd89def503f0d0c2e1f6aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d75530392d78a946e2baa09e7d339603a3f496dd9bd89def503f0d0c2e1f6aa0->leave($__internal_d75530392d78a946e2baa09e7d339603a3f496dd9bd89def503f0d0c2e1f6aa0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_80a9abb9b6a749870055bcfdb42059e4241b5eb4dba5e6987e83a5ecf8ae6e80 = $this->env->getExtension("native_profiler");
        $__internal_80a9abb9b6a749870055bcfdb42059e4241b5eb4dba5e6987e83a5ecf8ae6e80->enter($__internal_80a9abb9b6a749870055bcfdb42059e4241b5eb4dba5e6987e83a5ecf8ae6e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-default\" href=\"#\">
        <i class=\"glyphicon glyphicon-arrow-right\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_80a9abb9b6a749870055bcfdb42059e4241b5eb4dba5e6987e83a5ecf8ae6e80->leave($__internal_80a9abb9b6a749870055bcfdb42059e4241b5eb4dba5e6987e83a5ecf8ae6e80_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <a class="btn btn-default" href="#">*/
/*         <i class="glyphicon glyphicon-arrow-right"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */

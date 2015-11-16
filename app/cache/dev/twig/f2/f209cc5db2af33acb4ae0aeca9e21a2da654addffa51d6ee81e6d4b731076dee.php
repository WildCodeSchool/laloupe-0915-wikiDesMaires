<?php

/* SonataAdminBundle:CRUD:list_array.html.twig */
class __TwigTemplate_075c745f238e28f5426c79cbe1a8bc1bc80f37c3ca70c9373c362841ff07300a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4fca1ab804a73f25bc4bd13b13c4cec13a81f46d2013c367b1d35aa982115de = $this->env->getExtension("native_profiler");
        $__internal_d4fca1ab804a73f25bc4bd13b13c4cec13a81f46d2013c367b1d35aa982115de->enter($__internal_d4fca1ab804a73f25bc4bd13b13c4cec13a81f46d2013c367b1d35aa982115de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4fca1ab804a73f25bc4bd13b13c4cec13a81f46d2013c367b1d35aa982115de->leave($__internal_d4fca1ab804a73f25bc4bd13b13c4cec13a81f46d2013c367b1d35aa982115de_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_be069f8b252f6d474b4ea41f5744345a701f6e18120776733f76758cc2c50e0d = $this->env->getExtension("native_profiler");
        $__internal_be069f8b252f6d474b4ea41f5744345a701f6e18120776733f76758cc2c50e0d->enter($__internal_be069f8b252f6d474b4ea41f5744345a701f6e18120776733f76758cc2c50e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        [";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " => ";
            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
            echo "]
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_be069f8b252f6d474b4ea41f5744345a701f6e18120776733f76758cc2c50e0d->leave($__internal_be069f8b252f6d474b4ea41f5744345a701f6e18120776733f76758cc2c50e0d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     {% for key, val in value %}*/
/*         [{{ key }} => {{ val }}]*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */

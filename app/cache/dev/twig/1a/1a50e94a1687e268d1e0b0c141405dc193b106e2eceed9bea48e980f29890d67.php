<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_b1c7319f1cfefa479b021f20e311fe03455edee9afa00efad09d8d16adcff5b5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb5c3910ac8e522df8a303fca8a753ce6608467eab656eccb31eb44f6d59a473 = $this->env->getExtension("native_profiler");
        $__internal_fb5c3910ac8e522df8a303fca8a753ce6608467eab656eccb31eb44f6d59a473->enter($__internal_fb5c3910ac8e522df8a303fca8a753ce6608467eab656eccb31eb44f6d59a473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb5c3910ac8e522df8a303fca8a753ce6608467eab656eccb31eb44f6d59a473->leave($__internal_fb5c3910ac8e522df8a303fca8a753ce6608467eab656eccb31eb44f6d59a473_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2649524f17f2986b95a4c1c492f3e64264d7ee965ba7047336b91c4790f70831 = $this->env->getExtension("native_profiler");
        $__internal_2649524f17f2986b95a4c1c492f3e64264d7ee965ba7047336b91c4790f70831->enter($__internal_2649524f17f2986b95a4c1c492f3e64264d7ee965ba7047336b91c4790f70831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_2649524f17f2986b95a4c1c492f3e64264d7ee965ba7047336b91c4790f70831->leave($__internal_2649524f17f2986b95a4c1c492f3e64264d7ee965ba7047336b91c4790f70831_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
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
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

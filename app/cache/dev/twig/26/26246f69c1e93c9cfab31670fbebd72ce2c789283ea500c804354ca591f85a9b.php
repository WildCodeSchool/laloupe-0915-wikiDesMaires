<?php

/* SonataAdminBundle:CRUD:edit_boolean.html.twig */
class __TwigTemplate_8be646d3ebc405b3336fb88069514c7c69ffcdda09b4cd8edc2f55728719f1f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085506f5c9ae93ee2b50b21ca0bcbd171ff2157d243189396de6ae0b1cd89538 = $this->env->getExtension("native_profiler");
        $__internal_085506f5c9ae93ee2b50b21ca0bcbd171ff2157d243189396de6ae0b1cd89538->enter($__internal_085506f5c9ae93ee2b50b21ca0bcbd171ff2157d243189396de6ae0b1cd89538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_085506f5c9ae93ee2b50b21ca0bcbd171ff2157d243189396de6ae0b1cd89538->leave($__internal_085506f5c9ae93ee2b50b21ca0bcbd171ff2157d243189396de6ae0b1cd89538_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_311845811b82c7d84b58d7bf92851b12fd5de3ac09fcd2a4e4dd7135cdf8b6ac = $this->env->getExtension("native_profiler");
        $__internal_311845811b82c7d84b58d7bf92851b12fd5de3ac09fcd2a4e4dd7135cdf8b6ac->enter($__internal_311845811b82c7d84b58d7bf92851b12fd5de3ac09fcd2a4e4dd7135cdf8b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_311845811b82c7d84b58d7bf92851b12fd5de3ac09fcd2a4e4dd7135cdf8b6ac->leave($__internal_311845811b82c7d84b58d7bf92851b12fd5de3ac09fcd2a4e4dd7135cdf8b6ac_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c6c834f886a5cdbf51e232ffa3decea9abab2398eb96399178ff148af1967452 = $this->env->getExtension("native_profiler");
        $__internal_c6c834f886a5cdbf51e232ffa3decea9abab2398eb96399178ff148af1967452->enter($__internal_c6c834f886a5cdbf51e232ffa3decea9abab2398eb96399178ff148af1967452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_c6c834f886a5cdbf51e232ffa3decea9abab2398eb96399178ff148af1967452->leave($__internal_c6c834f886a5cdbf51e232ffa3decea9abab2398eb96399178ff148af1967452_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_1fb687c05d5f2f46d02e76fa5fa11611ef1d770035ab171d7d7b26abbdcd121b = $this->env->getExtension("native_profiler");
        $__internal_1fb687c05d5f2f46d02e76fa5fa11611ef1d770035ab171d7d7b26abbdcd121b->enter($__internal_1fb687c05d5f2f46d02e76fa5fa11611ef1d770035ab171d7d7b26abbdcd121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_1fb687c05d5f2f46d02e76fa5fa11611ef1d770035ab171d7d7b26abbdcd121b->leave($__internal_1fb687c05d5f2f46d02e76fa5fa11611ef1d770035ab171d7d7b26abbdcd121b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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
/* <div>*/
/*     <div class="sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*         {% block field %}{{ form_widget(field_element) }}{% endblock %}*/
/*         {% block label %}*/
/*             {% if field_description.options.name is defined %}*/
/*                 {{ form_label(field_element, field_description.options.name) }}*/
/*             {% else %}*/
/*                 {{ form_label(field_element) }}*/
/*             {% endif %}*/
/*             <br>*/
/*         {% endblock %}*/
/* */
/*         <div class="sonata-ba-field-error-messages">*/
/*             {% block errors %}{{ form_errors(field_element) }}{% endblock %}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* */

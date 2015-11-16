<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_f22d980b2630a3a94c307ba571ac1c469d72f38f59e49717ca1689925713917b extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7254567417039b2aa3eee1b22a6fcd628ad0b6f18da2b67cd55354eb33b322bd = $this->env->getExtension("native_profiler");
        $__internal_7254567417039b2aa3eee1b22a6fcd628ad0b6f18da2b67cd55354eb33b322bd->enter($__internal_7254567417039b2aa3eee1b22a6fcd628ad0b6f18da2b67cd55354eb33b322bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7254567417039b2aa3eee1b22a6fcd628ad0b6f18da2b67cd55354eb33b322bd->leave($__internal_7254567417039b2aa3eee1b22a6fcd628ad0b6f18da2b67cd55354eb33b322bd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c8adae71db22404ff2b91a0a096ba0fe3df1e6c77a48ee3cbd24785ee06bcc7c = $this->env->getExtension("native_profiler");
        $__internal_c8adae71db22404ff2b91a0a096ba0fe3df1e6c77a48ee3cbd24785ee06bcc7c->enter($__internal_c8adae71db22404ff2b91a0a096ba0fe3df1e6c77a48ee3cbd24785ee06bcc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_c8adae71db22404ff2b91a0a096ba0fe3df1e6c77a48ee3cbd24785ee06bcc7c->leave($__internal_c8adae71db22404ff2b91a0a096ba0fe3df1e6c77a48ee3cbd24785ee06bcc7c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */

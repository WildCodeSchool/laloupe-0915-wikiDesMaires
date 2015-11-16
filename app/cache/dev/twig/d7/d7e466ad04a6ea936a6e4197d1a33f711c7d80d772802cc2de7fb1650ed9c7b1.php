<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_0eebfe25ce1a8b3680ae5f18216fee02ec0fa14a70675d51fe690402ddf62b05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c77371d9114be8adbd6d250e12abcb013b8d92e93cfe4464aa6961ae3503e889 = $this->env->getExtension("native_profiler");
        $__internal_c77371d9114be8adbd6d250e12abcb013b8d92e93cfe4464aa6961ae3503e889->enter($__internal_c77371d9114be8adbd6d250e12abcb013b8d92e93cfe4464aa6961ae3503e889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c77371d9114be8adbd6d250e12abcb013b8d92e93cfe4464aa6961ae3503e889->leave($__internal_c77371d9114be8adbd6d250e12abcb013b8d92e93cfe4464aa6961ae3503e889_prof);

    }

    // line 14
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_c45fec76e5ce3f1c6456af4ad8dd5a5a83809e1549c5aab8e9f4600eba4a5b11 = $this->env->getExtension("native_profiler");
        $__internal_c45fec76e5ce3f1c6456af4ad8dd5a5a83809e1549c5aab8e9f4600eba4a5b11->enter($__internal_c45fec76e5ce3f1c6456af4ad8dd5a5a83809e1549c5aab8e9f4600eba4a5b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-title\">
        <th colspan=\"3\">
            ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "method"), "html", null, true);
        echo "
        </th>
    </tr>
";
        
        $__internal_c45fec76e5ce3f1c6456af4ad8dd5a5a83809e1549c5aab8e9f4600eba4a5b11->leave($__internal_c45fec76e5ce3f1c6456af4ad8dd5a5a83809e1549c5aab8e9f4600eba4a5b11_prof);

    }

    // line 22
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_a0c3253aade7c4506de0ff91744432c3d1497fbeab988e5057b0a97c28238c5a = $this->env->getExtension("native_profiler");
        $__internal_a0c3253aade7c4506de0ff91744432c3d1497fbeab988e5057b0a97c28238c5a->enter($__internal_a0c3253aade7c4506de0ff91744432c3d1497fbeab988e5057b0a97c28238c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 23
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 24
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 25
            echo "            ";
            echo $this->env->getExtension('sonata_admin')->renderViewElementCompare($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 27
        echo "    </tr>
";
        
        $__internal_a0c3253aade7c4506de0ff91744432c3d1497fbeab988e5057b0a97c28238c5a->leave($__internal_a0c3253aade7c4506de0ff91744432c3d1497fbeab988e5057b0a97c28238c5a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  65 => 24,  62 => 23,  56 => 22,  45 => 17,  41 => 15,  35 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}*/
/* */
/* {% block show_title %}*/
/*     <tr class="sonata-ba-view-title">*/
/*         <th colspan="3">*/
/*             {{ admin.trans(name) }}*/
/*         </th>*/
/*     </tr>*/
/* {% endblock %}*/
/* */
/* {% block show_field %}*/
/*     <tr class="sonata-ba-view-container history-audit-compare">*/
/*         {% if elements[field_name] is defined %}*/
/*             {{ elements[field_name]|render_view_element_compare(object, object_compare) }}*/
/*         {% endif %}*/
/*     </tr>*/
/* {% endblock %}*/
/* */

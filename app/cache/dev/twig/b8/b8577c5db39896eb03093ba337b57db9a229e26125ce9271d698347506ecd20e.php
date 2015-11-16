<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_b3fd49337b8efac0755760e36a78a2355e9e352dabe4a6d66a0d24b37bdd097e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_986fbe3dd449ef2d5ef5c62a896d6d6063123b3baf844d2337ac2de15ea4e9d8 = $this->env->getExtension("native_profiler");
        $__internal_986fbe3dd449ef2d5ef5c62a896d6d6063123b3baf844d2337ac2de15ea4e9d8->enter($__internal_986fbe3dd449ef2d5ef5c62a896d6d6063123b3baf844d2337ac2de15ea4e9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_986fbe3dd449ef2d5ef5c62a896d6d6063123b3baf844d2337ac2de15ea4e9d8->leave($__internal_986fbe3dd449ef2d5ef5c62a896d6d6063123b3baf844d2337ac2de15ea4e9d8_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_140f4e300594b002680cf393e915cafa139ede1a60bdc719d98392cd7d0831e6 = $this->env->getExtension("native_profiler");
        $__internal_140f4e300594b002680cf393e915cafa139ede1a60bdc719d98392cd7d0831e6->enter($__internal_140f4e300594b002680cf393e915cafa139ede1a60bdc719d98392cd7d0831e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 16)->display($context);
        echo "</li>
";
        
        $__internal_140f4e300594b002680cf393e915cafa139ede1a60bdc719d98392cd7d0831e6->leave($__internal_140f4e300594b002680cf393e915cafa139ede1a60bdc719d98392cd7d0831e6_prof);

    }

    // line 19
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_057e63f79930092be0a417f05d633184dc39509f075549f1e1dadd27edd0924c = $this->env->getExtension("native_profiler");
        $__internal_057e63f79930092be0a417f05d633184dc39509f075549f1e1dadd27edd0924c->enter($__internal_057e63f79930092be0a417f05d633184dc39509f075549f1e1dadd27edd0924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 20
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_057e63f79930092be0a417f05d633184dc39509f075549f1e1dadd27edd0924c->leave($__internal_057e63f79930092be0a417f05d633184dc39509f075549f1e1dadd27edd0924c_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_deb1550607eef1f1d80e31e93ab8adc2a59deb110d2ef5634e1c1af1307e72bf = $this->env->getExtension("native_profiler");
        $__internal_deb1550607eef1f1d80e31e93ab8adc2a59deb110d2ef5634e1c1af1307e72bf->enter($__internal_deb1550607eef1f1d80e31e93ab8adc2a59deb110d2ef5634e1c1af1307e72bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 26
        echo "
    Redefine the content block in your action template

";
        
        $__internal_deb1550607eef1f1d80e31e93ab8adc2a59deb110d2ef5634e1c1af1307e72bf->leave($__internal_deb1550607eef1f1d80e31e93ab8adc2a59deb110d2ef5634e1c1af1307e72bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  75 => 25,  64 => 21,  61 => 20,  55 => 19,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:create_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block tab_menu %}*/
/*     {% if action is defined %}*/
/*         {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': admin_pool.getTemplate('tab_menu_template')}, 'twig') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     Redefine the content block in your action template*/
/* */
/* {% endblock %}*/
/* */

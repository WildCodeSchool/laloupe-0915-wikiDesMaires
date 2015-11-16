<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_29c7f0f9997b302f322c8965f7bb00b2167ba6bc15a4cf23c06512db293584e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c096244db1481d1ba18eea98fb6ff7e094554794948a93e70c7b02b461152668 = $this->env->getExtension("native_profiler");
        $__internal_c096244db1481d1ba18eea98fb6ff7e094554794948a93e70c7b02b461152668->enter($__internal_c096244db1481d1ba18eea98fb6ff7e094554794948a93e70c7b02b461152668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c096244db1481d1ba18eea98fb6ff7e094554794948a93e70c7b02b461152668->leave($__internal_c096244db1481d1ba18eea98fb6ff7e094554794948a93e70c7b02b461152668_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

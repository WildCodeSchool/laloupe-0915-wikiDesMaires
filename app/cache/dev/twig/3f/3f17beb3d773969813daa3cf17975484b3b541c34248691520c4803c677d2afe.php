<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_5b75b2faf39239c5447cd5d5abd2cc7b7f73b7421aa165741aa025be85324aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ac986aa4a26c5e3c3a4caba40b9087830463c12f05c785e8b954bfd642d4d7c = $this->env->getExtension("native_profiler");
        $__internal_7ac986aa4a26c5e3c3a4caba40b9087830463c12f05c785e8b954bfd642d4d7c->enter($__internal_7ac986aa4a26c5e3c3a4caba40b9087830463c12f05c785e8b954bfd642d4d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac986aa4a26c5e3c3a4caba40b9087830463c12f05c785e8b954bfd642d4d7c->leave($__internal_7ac986aa4a26c5e3c3a4caba40b9087830463c12f05c785e8b954bfd642d4d7c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96dbb8a3d48438308b25fedf7d06f3834aa3b2217d2b6ca6db7c9b073ef51e3f = $this->env->getExtension("native_profiler");
        $__internal_96dbb8a3d48438308b25fedf7d06f3834aa3b2217d2b6ca6db7c9b073ef51e3f->enter($__internal_96dbb8a3d48438308b25fedf7d06f3834aa3b2217d2b6ca6db7c9b073ef51e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_96dbb8a3d48438308b25fedf7d06f3834aa3b2217d2b6ca6db7c9b073ef51e3f->leave($__internal_96dbb8a3d48438308b25fedf7d06f3834aa3b2217d2b6ca6db7c9b073ef51e3f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

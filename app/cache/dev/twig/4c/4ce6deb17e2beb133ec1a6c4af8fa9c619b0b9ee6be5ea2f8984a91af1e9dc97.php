<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_70c0858220cb97c5decc740b87585c84e5bf4c3fb05d439c7778b0581867dc63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_802462e7dd30952a4dc18e20ae75e7768605ca143acc1cc759a1184856db53b5 = $this->env->getExtension("native_profiler");
        $__internal_802462e7dd30952a4dc18e20ae75e7768605ca143acc1cc759a1184856db53b5->enter($__internal_802462e7dd30952a4dc18e20ae75e7768605ca143acc1cc759a1184856db53b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_802462e7dd30952a4dc18e20ae75e7768605ca143acc1cc759a1184856db53b5->leave($__internal_802462e7dd30952a4dc18e20ae75e7768605ca143acc1cc759a1184856db53b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_adcc9b2d353b0ad4e2400ad1b5b10064f4ec7941609116fefb222a9f29f19dca = $this->env->getExtension("native_profiler");
        $__internal_adcc9b2d353b0ad4e2400ad1b5b10064f4ec7941609116fefb222a9f29f19dca->enter($__internal_adcc9b2d353b0ad4e2400ad1b5b10064f4ec7941609116fefb222a9f29f19dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_adcc9b2d353b0ad4e2400ad1b5b10064f4ec7941609116fefb222a9f29f19dca->leave($__internal_adcc9b2d353b0ad4e2400ad1b5b10064f4ec7941609116fefb222a9f29f19dca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

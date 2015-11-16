<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_49d21436a797ab293513b2437c85f324b4fbd056db3037cca0b237263d4a82e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2aca5308347268724dafa48c6dc01e20f07a87a3213b08d0a2813c0c817fc3f8 = $this->env->getExtension("native_profiler");
        $__internal_2aca5308347268724dafa48c6dc01e20f07a87a3213b08d0a2813c0c817fc3f8->enter($__internal_2aca5308347268724dafa48c6dc01e20f07a87a3213b08d0a2813c0c817fc3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aca5308347268724dafa48c6dc01e20f07a87a3213b08d0a2813c0c817fc3f8->leave($__internal_2aca5308347268724dafa48c6dc01e20f07a87a3213b08d0a2813c0c817fc3f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_060892397feb4830e717c52f10f837475ecc943c9c413627bd4f0dadc925747a = $this->env->getExtension("native_profiler");
        $__internal_060892397feb4830e717c52f10f837475ecc943c9c413627bd4f0dadc925747a->enter($__internal_060892397feb4830e717c52f10f837475ecc943c9c413627bd4f0dadc925747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_060892397feb4830e717c52f10f837475ecc943c9c413627bd4f0dadc925747a->leave($__internal_060892397feb4830e717c52f10f837475ecc943c9c413627bd4f0dadc925747a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

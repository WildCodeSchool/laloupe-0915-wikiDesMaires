<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_a57dba9ac020d8c806dda89473acd1a9cf65fdfffe28b2904701266718072dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_c91bd26dc8b8b635216ee9a11a08efe134887359581cd97db4c20f74ef2ccecb = $this->env->getExtension("native_profiler");
        $__internal_c91bd26dc8b8b635216ee9a11a08efe134887359581cd97db4c20f74ef2ccecb->enter($__internal_c91bd26dc8b8b635216ee9a11a08efe134887359581cd97db4c20f74ef2ccecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c91bd26dc8b8b635216ee9a11a08efe134887359581cd97db4c20f74ef2ccecb->leave($__internal_c91bd26dc8b8b635216ee9a11a08efe134887359581cd97db4c20f74ef2ccecb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5292de1136c59116b97cdb33c8cd14aea55f35edd4089940ddcdc1519401a7e0 = $this->env->getExtension("native_profiler");
        $__internal_5292de1136c59116b97cdb33c8cd14aea55f35edd4089940ddcdc1519401a7e0->enter($__internal_5292de1136c59116b97cdb33c8cd14aea55f35edd4089940ddcdc1519401a7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5292de1136c59116b97cdb33c8cd14aea55f35edd4089940ddcdc1519401a7e0->leave($__internal_5292de1136c59116b97cdb33c8cd14aea55f35edd4089940ddcdc1519401a7e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */

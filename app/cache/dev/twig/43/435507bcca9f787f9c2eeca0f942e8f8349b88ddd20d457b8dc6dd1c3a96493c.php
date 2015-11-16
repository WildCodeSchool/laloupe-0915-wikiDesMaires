<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4edaff783d2adccc03ba8ec6201d80e1207afbe862e6a321150282b875ed7d21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ea1b997802108ee9b78f940c688083118c068983a62fe81fc8b3c399e219205 = $this->env->getExtension("native_profiler");
        $__internal_0ea1b997802108ee9b78f940c688083118c068983a62fe81fc8b3c399e219205->enter($__internal_0ea1b997802108ee9b78f940c688083118c068983a62fe81fc8b3c399e219205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0ea1b997802108ee9b78f940c688083118c068983a62fe81fc8b3c399e219205->leave($__internal_0ea1b997802108ee9b78f940c688083118c068983a62fe81fc8b3c399e219205_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3540035bea39762c03e6eded203e1bf5dbd56797c3dce483c56c198bc284e668 = $this->env->getExtension("native_profiler");
        $__internal_3540035bea39762c03e6eded203e1bf5dbd56797c3dce483c56c198bc284e668->enter($__internal_3540035bea39762c03e6eded203e1bf5dbd56797c3dce483c56c198bc284e668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3540035bea39762c03e6eded203e1bf5dbd56797c3dce483c56c198bc284e668->leave($__internal_3540035bea39762c03e6eded203e1bf5dbd56797c3dce483c56c198bc284e668_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_abc008da08d85c520cd9d2de8f6b71540f307eda74b6d089abb4bd616ed1c753 = $this->env->getExtension("native_profiler");
        $__internal_abc008da08d85c520cd9d2de8f6b71540f307eda74b6d089abb4bd616ed1c753->enter($__internal_abc008da08d85c520cd9d2de8f6b71540f307eda74b6d089abb4bd616ed1c753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_abc008da08d85c520cd9d2de8f6b71540f307eda74b6d089abb4bd616ed1c753->leave($__internal_abc008da08d85c520cd9d2de8f6b71540f307eda74b6d089abb4bd616ed1c753_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d63c0d26c8838a1fac16c0b77da788187bb8c8113ba26c4c7664d8f074a3364a = $this->env->getExtension("native_profiler");
        $__internal_d63c0d26c8838a1fac16c0b77da788187bb8c8113ba26c4c7664d8f074a3364a->enter($__internal_d63c0d26c8838a1fac16c0b77da788187bb8c8113ba26c4c7664d8f074a3364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d63c0d26c8838a1fac16c0b77da788187bb8c8113ba26c4c7664d8f074a3364a->leave($__internal_d63c0d26c8838a1fac16c0b77da788187bb8c8113ba26c4c7664d8f074a3364a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

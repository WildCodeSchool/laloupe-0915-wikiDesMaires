<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4248c78121bf3fe86b93a63f529351b50a11a5793628fb3cdd0f000b3106ce0f extends Twig_Template
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
        $__internal_e5e85885013836ce451337ee5c9e87aeca3527f01b9767cefca81c60547d8ec9 = $this->env->getExtension("native_profiler");
        $__internal_e5e85885013836ce451337ee5c9e87aeca3527f01b9767cefca81c60547d8ec9->enter($__internal_e5e85885013836ce451337ee5c9e87aeca3527f01b9767cefca81c60547d8ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e5e85885013836ce451337ee5c9e87aeca3527f01b9767cefca81c60547d8ec9->leave($__internal_e5e85885013836ce451337ee5c9e87aeca3527f01b9767cefca81c60547d8ec9_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_aa84c4eec79f7dee7248152c832431e58966327e1e38a9da4dbfbf70a85c5173 = $this->env->getExtension("native_profiler");
        $__internal_aa84c4eec79f7dee7248152c832431e58966327e1e38a9da4dbfbf70a85c5173->enter($__internal_aa84c4eec79f7dee7248152c832431e58966327e1e38a9da4dbfbf70a85c5173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aa84c4eec79f7dee7248152c832431e58966327e1e38a9da4dbfbf70a85c5173->leave($__internal_aa84c4eec79f7dee7248152c832431e58966327e1e38a9da4dbfbf70a85c5173_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0b67476225261b5b45ff31fca30ffbf73706e5e8777b74ba5096e2e8c2da59ba = $this->env->getExtension("native_profiler");
        $__internal_0b67476225261b5b45ff31fca30ffbf73706e5e8777b74ba5096e2e8c2da59ba->enter($__internal_0b67476225261b5b45ff31fca30ffbf73706e5e8777b74ba5096e2e8c2da59ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0b67476225261b5b45ff31fca30ffbf73706e5e8777b74ba5096e2e8c2da59ba->leave($__internal_0b67476225261b5b45ff31fca30ffbf73706e5e8777b74ba5096e2e8c2da59ba_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_09b2f6760b6e8ce8d94ebef78ab9e49b26cbaec246ce8604b28caf8b76c9798c = $this->env->getExtension("native_profiler");
        $__internal_09b2f6760b6e8ce8d94ebef78ab9e49b26cbaec246ce8604b28caf8b76c9798c->enter($__internal_09b2f6760b6e8ce8d94ebef78ab9e49b26cbaec246ce8604b28caf8b76c9798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_09b2f6760b6e8ce8d94ebef78ab9e49b26cbaec246ce8604b28caf8b76c9798c->leave($__internal_09b2f6760b6e8ce8d94ebef78ab9e49b26cbaec246ce8604b28caf8b76c9798c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

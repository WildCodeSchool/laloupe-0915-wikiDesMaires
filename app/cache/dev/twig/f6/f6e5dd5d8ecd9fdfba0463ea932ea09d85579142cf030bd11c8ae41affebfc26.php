<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7d177661ce3cea1ac6f6c43ed3c1fa21a8d0e02dbf6aa49e780f1cc20c157be0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_6092b2b197ad67ceaaac0805f72c66938b8a2ee5faef43babbd692bfbe031257 = $this->env->getExtension("native_profiler");
        $__internal_6092b2b197ad67ceaaac0805f72c66938b8a2ee5faef43babbd692bfbe031257->enter($__internal_6092b2b197ad67ceaaac0805f72c66938b8a2ee5faef43babbd692bfbe031257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6092b2b197ad67ceaaac0805f72c66938b8a2ee5faef43babbd692bfbe031257->leave($__internal_6092b2b197ad67ceaaac0805f72c66938b8a2ee5faef43babbd692bfbe031257_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3d7434dd036979a2cb3b6c7a3d8e33c6f8ef83df4a835d628f712eb7720d794 = $this->env->getExtension("native_profiler");
        $__internal_a3d7434dd036979a2cb3b6c7a3d8e33c6f8ef83df4a835d628f712eb7720d794->enter($__internal_a3d7434dd036979a2cb3b6c7a3d8e33c6f8ef83df4a835d628f712eb7720d794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a3d7434dd036979a2cb3b6c7a3d8e33c6f8ef83df4a835d628f712eb7720d794->leave($__internal_a3d7434dd036979a2cb3b6c7a3d8e33c6f8ef83df4a835d628f712eb7720d794_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

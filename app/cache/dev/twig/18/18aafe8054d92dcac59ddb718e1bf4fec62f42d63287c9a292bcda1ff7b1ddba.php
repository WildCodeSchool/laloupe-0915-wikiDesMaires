<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_5dc46880c750a1f2c78e7d8b5b05b38ca7987c083978ec40cf9fcf7832afef3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddf594627da9dca85f7d9a98aeea26e8535d5a3c091782b806dac1f657fa4fbc = $this->env->getExtension("native_profiler");
        $__internal_ddf594627da9dca85f7d9a98aeea26e8535d5a3c091782b806dac1f657fa4fbc->enter($__internal_ddf594627da9dca85f7d9a98aeea26e8535d5a3c091782b806dac1f657fa4fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<div>
    ";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 4
        echo "</div>";
        
        $__internal_ddf594627da9dca85f7d9a98aeea26e8535d5a3c091782b806dac1f657fa4fbc->leave($__internal_ddf594627da9dca85f7d9a98aeea26e8535d5a3c091782b806dac1f657fa4fbc_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2a08ea74d09e5ff111bf3f4f603780d0bb061764aafeaa920b48954d862051f = $this->env->getExtension("native_profiler");
        $__internal_e2a08ea74d09e5ff111bf3f4f603780d0bb061764aafeaa920b48954d862051f->enter($__internal_e2a08ea74d09e5ff111bf3f4f603780d0bb061764aafeaa920b48954d862051f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    ";
        
        $__internal_e2a08ea74d09e5ff111bf3f4f603780d0bb061764aafeaa920b48954d862051f->leave($__internal_e2a08ea74d09e5ff111bf3f4f603780d0bb061764aafeaa920b48954d862051f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  35 => 2,  28 => 4,  26 => 2,  23 => 1,);
    }
}
/* <div>*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* </div>*/

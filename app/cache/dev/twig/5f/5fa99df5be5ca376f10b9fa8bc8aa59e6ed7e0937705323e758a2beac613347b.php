<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_0be8d67a1520e011c6824210c0755116907f22cc9fd27e13451c5eed9290f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e3c3fdcedfbff28e91d9bc5b64e1e6d78e04f9edda8b1fafc46ae30784cff91 = $this->env->getExtension("native_profiler");
        $__internal_6e3c3fdcedfbff28e91d9bc5b64e1e6d78e04f9edda8b1fafc46ae30784cff91->enter($__internal_6e3c3fdcedfbff28e91d9bc5b64e1e6d78e04f9edda8b1fafc46ae30784cff91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_6e3c3fdcedfbff28e91d9bc5b64e1e6d78e04f9edda8b1fafc46ae30784cff91->leave($__internal_6e3c3fdcedfbff28e91d9bc5b64e1e6d78e04f9edda8b1fafc46ae30784cff91_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_625754a678dfb61167feabb5e980b156b49d4926c5d380c0aff9a86396643acb = $this->env->getExtension("native_profiler");
        $__internal_625754a678dfb61167feabb5e980b156b49d4926c5d380c0aff9a86396643acb->enter($__internal_625754a678dfb61167feabb5e980b156b49d4926c5d380c0aff9a86396643acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_625754a678dfb61167feabb5e980b156b49d4926c5d380c0aff9a86396643acb->leave($__internal_625754a678dfb61167feabb5e980b156b49d4926c5d380c0aff9a86396643acb_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block user_block %}{# Customize this value #}{% endblock %}*/
/* */

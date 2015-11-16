<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_38cd87a1149f0eee8b4db9e957a2a0f2a760274b85724c7537a23129d7c18b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60c9d16564035000bb6f713b2c46f0675dbf0b2e30b81180b0796ddf8344e10c = $this->env->getExtension("native_profiler");
        $__internal_60c9d16564035000bb6f713b2c46f0675dbf0b2e30b81180b0796ddf8344e10c->enter($__internal_60c9d16564035000bb6f713b2c46f0675dbf0b2e30b81180b0796ddf8344e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_60c9d16564035000bb6f713b2c46f0675dbf0b2e30b81180b0796ddf8344e10c->leave($__internal_60c9d16564035000bb6f713b2c46f0675dbf0b2e30b81180b0796ddf8344e10c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_db700691f7a9bb518509bc1d6a676da7fa0c55b2bb07abeec021ce39ae5fb05e = $this->env->getExtension("native_profiler");
        $__internal_db700691f7a9bb518509bc1d6a676da7fa0c55b2bb07abeec021ce39ae5fb05e->enter($__internal_db700691f7a9bb518509bc1d6a676da7fa0c55b2bb07abeec021ce39ae5fb05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_db700691f7a9bb518509bc1d6a676da7fa0c55b2bb07abeec021ce39ae5fb05e->leave($__internal_db700691f7a9bb518509bc1d6a676da7fa0c55b2bb07abeec021ce39ae5fb05e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

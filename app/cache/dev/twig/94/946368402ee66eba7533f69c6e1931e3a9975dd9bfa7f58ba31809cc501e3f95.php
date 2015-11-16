<?php

/* WikiAdminBundle:projet:add.html.twig */
class __TwigTemplate_0b27af2c37fc5ef1a669b6592919197d4b4f61c3492cf23405b9270d374d9b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WikiAdminBundle:projet:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3400a69e6dc9b3a86f115fc7e4e46b7ea1d7462ce9fd0a4649091498330ac68a = $this->env->getExtension("native_profiler");
        $__internal_3400a69e6dc9b3a86f115fc7e4e46b7ea1d7462ce9fd0a4649091498330ac68a->enter($__internal_3400a69e6dc9b3a86f115fc7e4e46b7ea1d7462ce9fd0a4649091498330ac68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WikiAdminBundle:projet:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3400a69e6dc9b3a86f115fc7e4e46b7ea1d7462ce9fd0a4649091498330ac68a->leave($__internal_3400a69e6dc9b3a86f115fc7e4e46b7ea1d7462ce9fd0a4649091498330ac68a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee4e2b01bc299161ae01809b7781611f7e24351db8d8a1989c797ee56c32761c = $this->env->getExtension("native_profiler");
        $__internal_ee4e2b01bc299161ae01809b7781611f7e24351db8d8a1989c797ee56c32761c->enter($__internal_ee4e2b01bc299161ae01809b7781611f7e24351db8d8a1989c797ee56c32761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "WikiAdminBundle:projet:add";
        
        $__internal_ee4e2b01bc299161ae01809b7781611f7e24351db8d8a1989c797ee56c32761c->leave($__internal_ee4e2b01bc299161ae01809b7781611f7e24351db8d8a1989c797ee56c32761c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b0666f0f978e9712b673f4ac112756a01b3b154f046b74a198952d3f208e04a = $this->env->getExtension("native_profiler");
        $__internal_1b0666f0f978e9712b673f4ac112756a01b3b154f046b74a198952d3f208e04a->enter($__internal_1b0666f0f978e9712b673f4ac112756a01b3b154f046b74a198952d3f208e04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3>Formulaire d'annonce</h3>

    <div class=\"well\" id=\"merci\">
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    </div>
";
        
        $__internal_1b0666f0f978e9712b673f4ac112756a01b3b154f046b74a198952d3f208e04a->leave($__internal_1b0666f0f978e9712b673f4ac112756a01b3b154f046b74a198952d3f208e04a_prof);

    }

    public function getTemplateName()
    {
        return "WikiAdminBundle:projet:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}WikiAdminBundle:projet:add{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h3>Formulaire d'annonce</h3>*/
/* */
/*     <div class="well" id="merci">*/
/*         {{ form(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */

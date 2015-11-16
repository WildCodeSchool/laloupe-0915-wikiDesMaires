<?php

/* SensioDistributionBundle:Configurator:layout.html.twig */
class __TwigTemplate_963fe0d6202639ec7a453593eafb11280f96e23cb1e5dbee65994ad7b465b398 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle:Configurator:layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d5a42c3cb7b3c8fe31f4dcfe703cb028d8e5644deb9589b0c7890640c8f80e2 = $this->env->getExtension("native_profiler");
        $__internal_4d5a42c3cb7b3c8fe31f4dcfe703cb028d8e5644deb9589b0c7890640c8f80e2->enter($__internal_4d5a42c3cb7b3c8fe31f4dcfe703cb028d8e5644deb9589b0c7890640c8f80e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d5a42c3cb7b3c8fe31f4dcfe703cb028d8e5644deb9589b0c7890640c8f80e2->leave($__internal_4d5a42c3cb7b3c8fe31f4dcfe703cb028d8e5644deb9589b0c7890640c8f80e2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fc56db65c2a99e471c4c0ccde3cf35493f291761f089a4616a71d429a74a556 = $this->env->getExtension("native_profiler");
        $__internal_6fc56db65c2a99e471c4c0ccde3cf35493f291761f089a4616a71d429a74a556->enter($__internal_6fc56db65c2a99e471c4c0ccde3cf35493f291761f089a4616a71d429a74a556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_6fc56db65c2a99e471c4c0ccde3cf35493f291761f089a4616a71d429a74a556->leave($__internal_6fc56db65c2a99e471c4c0ccde3cf35493f291761f089a4616a71d429a74a556_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_421856a52e71cc8438667009ea3385fc5d516f85f1438a866dbe8bba3bc6c36a = $this->env->getExtension("native_profiler");
        $__internal_421856a52e71cc8438667009ea3385fc5d516f85f1438a866dbe8bba3bc6c36a->enter($__internal_421856a52e71cc8438667009ea3385fc5d516f85f1438a866dbe8bba3bc6c36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_421856a52e71cc8438667009ea3385fc5d516f85f1438a866dbe8bba3bc6c36a->leave($__internal_421856a52e71cc8438667009ea3385fc5d516f85f1438a866dbe8bba3bc6c36a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb5282d6afb0832203ff075550d842297fc5ba7e4648f9bc1b642b3f2d96bcbf = $this->env->getExtension("native_profiler");
        $__internal_fb5282d6afb0832203ff075550d842297fc5ba7e4648f9bc1b642b3f2d96bcbf->enter($__internal_fb5282d6afb0832203ff075550d842297fc5ba7e4648f9bc1b642b3f2d96bcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_fb5282d6afb0832203ff075550d842297fc5ba7e4648f9bc1b642b3f2d96bcbf->leave($__internal_fb5282d6afb0832203ff075550d842297fc5ba7e4648f9bc1b642b3f2d96bcbf_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ba2f0d2c06f69a9bceeac9ca06cb045d8befcd53ad6e78652bc02793ac3254c = $this->env->getExtension("native_profiler");
        $__internal_3ba2f0d2c06f69a9bceeac9ca06cb045d8befcd53ad6e78652bc02793ac3254c->enter($__internal_3ba2f0d2c06f69a9bceeac9ca06cb045d8befcd53ad6e78652bc02793ac3254c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3ba2f0d2c06f69a9bceeac9ca06cb045d8befcd53ad6e78652bc02793ac3254c->leave($__internal_3ba2f0d2c06f69a9bceeac9ca06cb045d8befcd53ad6e78652bc02793ac3254c_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */

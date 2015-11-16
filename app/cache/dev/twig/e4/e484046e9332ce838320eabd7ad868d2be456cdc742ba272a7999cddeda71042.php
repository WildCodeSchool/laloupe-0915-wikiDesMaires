<?php

/* SonataBlockBundle:Block:block_exception_debug.html.twig */
class __TwigTemplate_596abf5f0645704a8d04d1a113fb8f1e37b4c87f2e2ba157d1bab99ecf21d909 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9c7e1d4bda69b75c4968d09de3dd8617be4de220e1a2a387d1950b2a983d1f5 = $this->env->getExtension("native_profiler");
        $__internal_d9c7e1d4bda69b75c4968d09de3dd8617be4de220e1a2a387d1950b2a983d1f5->enter($__internal_d9c7e1d4bda69b75c4968d09de3dd8617be4de220e1a2a387d1950b2a983d1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9c7e1d4bda69b75c4968d09de3dd8617be4de220e1a2a387d1950b2a983d1f5->leave($__internal_d9c7e1d4bda69b75c4968d09de3dd8617be4de220e1a2a387d1950b2a983d1f5_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4ba8aefcd5c0e6cc96a3f6fad3a7bcf8c81554170ffe8ec2047ec0a0f149c971 = $this->env->getExtension("native_profiler");
        $__internal_4ba8aefcd5c0e6cc96a3f6fad3a7bcf8c81554170ffe8ec2047ec0a0f149c971->enter($__internal_4ba8aefcd5c0e6cc96a3f6fad3a7bcf8c81554170ffe8ec2047ec0a0f149c971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "SonataBlockBundle:Block:block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_4ba8aefcd5c0e6cc96a3f6fad3a7bcf8c81554170ffe8ec2047ec0a0f149c971->leave($__internal_4ba8aefcd5c0e6cc96a3f6fad3a7bcf8c81554170ffe8ec2047ec0a0f149c971_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 23,  60 => 22,  55 => 20,  50 => 19,  47 => 18,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div class="cms-block-exception" {% if forceStyle %}style="overflow-y: scroll; min-width: 300px; max-height: 300px;"{% endif %}>*/
/* */
/*         {# this is dirty but the alternative would require a new block-optimized exception css #}*/
/*         {% if forceStyle %}*/
/*             <link href="{{ asset('bundles/framework/css/exception_layout.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*             <link href="{{ asset('bundles/framework/css/exception.css') }}" rel="stylesheet" type="text/css" media="all" />*/
/*         {% endif %}*/
/*         {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/*     </div>*/
/* {% endblock %}*/
/* */

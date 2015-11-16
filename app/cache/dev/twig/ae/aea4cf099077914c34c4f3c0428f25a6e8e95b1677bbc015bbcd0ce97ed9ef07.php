<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_09b631801c212adddb9efb26dc843e9afe18e91d6deabca90336f1647312fe3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf25fc097a7efa13b66b83dcef98437a467b7f8279be9a6ebc90f6aba1ce2a13 = $this->env->getExtension("native_profiler");
        $__internal_cf25fc097a7efa13b66b83dcef98437a467b7f8279be9a6ebc90f6aba1ce2a13->enter($__internal_cf25fc097a7efa13b66b83dcef98437a467b7f8279be9a6ebc90f6aba1ce2a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_cf25fc097a7efa13b66b83dcef98437a467b7f8279be9a6ebc90f6aba1ce2a13->leave($__internal_cf25fc097a7efa13b66b83dcef98437a467b7f8279be9a6ebc90f6aba1ce2a13_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_57b09a0c25782e782721ad1ea3afccf4fd24f8c47afd3c42ac08866d1d4caefd = $this->env->getExtension("native_profiler");
        $__internal_57b09a0c25782e782721ad1ea3afccf4fd24f8c47afd3c42ac08866d1d4caefd->enter($__internal_57b09a0c25782e782721ad1ea3afccf4fd24f8c47afd3c42ac08866d1d4caefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_57b09a0c25782e782721ad1ea3afccf4fd24f8c47afd3c42ac08866d1d4caefd->leave($__internal_57b09a0c25782e782721ad1ea3afccf4fd24f8c47afd3c42ac08866d1d4caefd_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
/* <div id="cms-block-{{ block.id }}" class="cms-block cms-block-element">*/
/*     {% block block %}EMPTY CONTENT{% endblock %}*/
/* </div>*/
/* */

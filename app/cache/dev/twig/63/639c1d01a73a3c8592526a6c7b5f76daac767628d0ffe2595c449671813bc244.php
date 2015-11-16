<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_bea8f55892014055af1c0404cbdea6006738d3caf5f392b93df5115ba6d5fe25 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dfbd935816255f7da47f14ac7290fde3e5aa31d4509c1a0d968346f5cfc5fcf = $this->env->getExtension("native_profiler");
        $__internal_0dfbd935816255f7da47f14ac7290fde3e5aa31d4509c1a0d968346f5cfc5fcf->enter($__internal_0dfbd935816255f7da47f14ac7290fde3e5aa31d4509c1a0d968346f5cfc5fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dfbd935816255f7da47f14ac7290fde3e5aa31d4509c1a0d968346f5cfc5fcf->leave($__internal_0dfbd935816255f7da47f14ac7290fde3e5aa31d4509c1a0d968346f5cfc5fcf_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8a5602934bbe6776ff0119564c255d1557ad7978265bcd2608f71169763779e5 = $this->env->getExtension("native_profiler");
        $__internal_8a5602934bbe6776ff0119564c255d1557ad7978265bcd2608f71169763779e5->enter($__internal_8a5602934bbe6776ff0119564c255d1557ad7978265bcd2608f71169763779e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_8a5602934bbe6776ff0119564c255d1557ad7978265bcd2608f71169763779e5->leave($__internal_8a5602934bbe6776ff0119564c255d1557ad7978265bcd2608f71169763779e5_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/*     {{ content|raw }}*/
/* {% endblock %}*/
/* */

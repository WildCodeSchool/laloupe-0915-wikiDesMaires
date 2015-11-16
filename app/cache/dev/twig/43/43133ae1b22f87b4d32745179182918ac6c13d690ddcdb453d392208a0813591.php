<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_4bfefbda95876ad74ab8a00e650dbdbec4ddc5e44382d955fc5f0a1b0c477ac0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c933d702e74131f62e4a350330983ad059f61d4ec9da14dffb7eabcd17780bae = $this->env->getExtension("native_profiler");
        $__internal_c933d702e74131f62e4a350330983ad059f61d4ec9da14dffb7eabcd17780bae->enter($__internal_c933d702e74131f62e4a350330983ad059f61d4ec9da14dffb7eabcd17780bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c933d702e74131f62e4a350330983ad059f61d4ec9da14dffb7eabcd17780bae->leave($__internal_c933d702e74131f62e4a350330983ad059f61d4ec9da14dffb7eabcd17780bae_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f720ce3038ec953181d397a0ad5ddf38c3a1129f057ebb17b1d4c1ac0669d6f5 = $this->env->getExtension("native_profiler");
        $__internal_f720ce3038ec953181d397a0ad5ddf38c3a1129f057ebb17b1d4c1ac0669d6f5->enter($__internal_f720ce3038ec953181d397a0ad5ddf38c3a1129f057ebb17b1d4c1ac0669d6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_f720ce3038ec953181d397a0ad5ddf38c3a1129f057ebb17b1d4c1ac0669d6f5->leave($__internal_f720ce3038ec953181d397a0ad5ddf38c3a1129f057ebb17b1d4c1ac0669d6f5_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
/*     {{ settings.content|raw }}*/
/* {% endblock %}*/
/* */

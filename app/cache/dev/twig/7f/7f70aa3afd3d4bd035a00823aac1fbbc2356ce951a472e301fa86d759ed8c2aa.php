<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_998d5f66802276ec8a71dcfe2cc3f24cd12bf49c6ebffa9c87d2100120f745ca extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4bd0892f99ebccd37f4d907a51f6c342e686725d3ddc2748f51ddc890fd62fb = $this->env->getExtension("native_profiler");
        $__internal_f4bd0892f99ebccd37f4d907a51f6c342e686725d3ddc2748f51ddc890fd62fb->enter($__internal_f4bd0892f99ebccd37f4d907a51f6c342e686725d3ddc2748f51ddc890fd62fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4bd0892f99ebccd37f4d907a51f6c342e686725d3ddc2748f51ddc890fd62fb->leave($__internal_f4bd0892f99ebccd37f4d907a51f6c342e686725d3ddc2748f51ddc890fd62fb_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_119d88262421a52c1b05d2cc0bd603de4256b98897505d631f5c5886acd6f1b4 = $this->env->getExtension("native_profiler");
        $__internal_119d88262421a52c1b05d2cc0bd603de4256b98897505d631f5c5886acd6f1b4->enter($__internal_119d88262421a52c1b05d2cc0bd603de4256b98897505d631f5c5886acd6f1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), (isset($context["menu_options"]) ? $context["menu_options"] : $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_119d88262421a52c1b05d2cc0bd603de4256b98897505d631f5c5886acd6f1b4->leave($__internal_119d88262421a52c1b05d2cc0bd603de4256b98897505d631f5c5886acd6f1b4_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
/*     {{ knp_menu_render(menu, menu_options) }}*/
/* {% endblock %}*/
/* */

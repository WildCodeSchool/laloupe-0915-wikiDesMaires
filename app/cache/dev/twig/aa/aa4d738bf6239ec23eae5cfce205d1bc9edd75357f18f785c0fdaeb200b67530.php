<?php

/* SonataBlockBundle:Block:block_exception.html.twig */
class __TwigTemplate_afab809912417f6761180797d3288bbb19a3285074c10d5d014eb6414f6486cf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bda02d4c32e6d9bda22bab09cb849dca59d11088237c5058d282e342ba509bd = $this->env->getExtension("native_profiler");
        $__internal_9bda02d4c32e6d9bda22bab09cb849dca59d11088237c5058d282e342ba509bd->enter($__internal_9bda02d4c32e6d9bda22bab09cb849dca59d11088237c5058d282e342ba509bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bda02d4c32e6d9bda22bab09cb849dca59d11088237c5058d282e342ba509bd->leave($__internal_9bda02d4c32e6d9bda22bab09cb849dca59d11088237c5058d282e342ba509bd_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_eb4e9c54649a1573551b2859f67b939195a31b6d8dcb14be7b7cbbad4d4171ca = $this->env->getExtension("native_profiler");
        $__internal_eb4e9c54649a1573551b2859f67b939195a31b6d8dcb14be7b7cbbad4d4171ca->enter($__internal_eb4e9c54649a1573551b2859f67b939195a31b6d8dcb14be7b7cbbad4d4171ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_eb4e9c54649a1573551b2859f67b939195a31b6d8dcb14be7b7cbbad4d4171ca->leave($__internal_eb4e9c54649a1573551b2859f67b939195a31b6d8dcb14be7b7cbbad4d4171ca_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="cms-block-exception">*/
/*         <h2>{{ block.name }}</h2>*/
/*         <h3>{{ exception.message }}</h3>*/
/*     </div>*/
/* {% endblock %}*/
/* */

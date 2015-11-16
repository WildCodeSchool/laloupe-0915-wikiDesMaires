<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_f78a5dd974c7755850cc2b414bbe51098ba5a9ce2124d18c212d1140ef41c1c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d39dd0ba43c226ef99cefc9a6cb9c0b44a418e25377542f3b32c6a85758db14 = $this->env->getExtension("native_profiler");
        $__internal_4d39dd0ba43c226ef99cefc9a6cb9c0b44a418e25377542f3b32c6a85758db14->enter($__internal_4d39dd0ba43c226ef99cefc9a6cb9c0b44a418e25377542f3b32c6a85758db14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_4d39dd0ba43c226ef99cefc9a6cb9c0b44a418e25377542f3b32c6a85758db14->leave($__internal_4d39dd0ba43c226ef99cefc9a6cb9c0b44a418e25377542f3b32c6a85758db14_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */

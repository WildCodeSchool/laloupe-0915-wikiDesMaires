<?php

/* SonataAdminBundle:CRUD:list_string.html.twig */
class __TwigTemplate_52e3fef21424bb2cdad826037786ff35a5bf71fe5c2546471dae79aae04a20e4 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65c1d64489df105c8c84a23b68c311711633d533025c96e06f4fb442b6048f1f = $this->env->getExtension("native_profiler");
        $__internal_65c1d64489df105c8c84a23b68c311711633d533025c96e06f4fb442b6048f1f->enter($__internal_65c1d64489df105c8c84a23b68c311711633d533025c96e06f4fb442b6048f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65c1d64489df105c8c84a23b68c311711633d533025c96e06f4fb442b6048f1f->leave($__internal_65c1d64489df105c8c84a23b68c311711633d533025c96e06f4fb442b6048f1f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */

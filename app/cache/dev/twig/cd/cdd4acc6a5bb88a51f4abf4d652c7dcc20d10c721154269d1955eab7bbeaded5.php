<?php

/* SonataAdminBundle:Pager:results.html.twig */
class __TwigTemplate_53408d29392c4af7fc59b097e6618e9984bb26c605bd06938d0d44bb7e921c27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "SonataAdminBundle:Pager:results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_482d37448ed1fab4856482bca08577bf345686e30337a9ba525eeeaabb035ec8 = $this->env->getExtension("native_profiler");
        $__internal_482d37448ed1fab4856482bca08577bf345686e30337a9ba525eeeaabb035ec8->enter($__internal_482d37448ed1fab4856482bca08577bf345686e30337a9ba525eeeaabb035ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482d37448ed1fab4856482bca08577bf345686e30337a9ba525eeeaabb035ec8->leave($__internal_482d37448ed1fab4856482bca08577bf345686e30337a9ba525eeeaabb035ec8_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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
/* {% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}*/
/* */

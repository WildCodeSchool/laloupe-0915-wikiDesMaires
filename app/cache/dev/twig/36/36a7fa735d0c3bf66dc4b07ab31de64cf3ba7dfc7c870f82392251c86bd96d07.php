<?php

/* SonataAdminBundle:Pager:links.html.twig */
class __TwigTemplate_a6266e5c272c76611be0f2371f01621f444ff024a959bfdade06fefaf9e7757b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "SonataAdminBundle:Pager:links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_798f25429adfe5918dda3a3e8437bc65d729a979fab73df93e757ed31c2f66df = $this->env->getExtension("native_profiler");
        $__internal_798f25429adfe5918dda3a3e8437bc65d729a979fab73df93e757ed31c2f66df->enter($__internal_798f25429adfe5918dda3a3e8437bc65d729a979fab73df93e757ed31c2f66df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_798f25429adfe5918dda3a3e8437bc65d729a979fab73df93e757ed31c2f66df->leave($__internal_798f25429adfe5918dda3a3e8437bc65d729a979fab73df93e757ed31c2f66df_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:links.html.twig";
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
/* {% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}*/
/* */

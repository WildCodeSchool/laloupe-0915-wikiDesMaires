<?php

/* SonataAdminBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_13290109d688211842a5b7818ee386f35a63d0759b2ee263fe2eac0a29070af2 extends Twig_Template
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
        $__internal_801363a3d1e7a004ae9e41cc312a4c8a2c1c8a7a7cefd99c63759a59b5a93c4d = $this->env->getExtension("native_profiler");
        $__internal_801363a3d1e7a004ae9e41cc312a4c8a2c1c8a7a7cefd99c63759a59b5a93c4d->enter($__internal_801363a3d1e7a004ae9e41cc312a4c8a2c1c8a7a7cefd99c63759a59b5a93c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_801363a3d1e7a004ae9e41cc312a4c8a2c1c8a7a7cefd99c63759a59b5a93c4d->leave($__internal_801363a3d1e7a004ae9e41cc312a4c8a2c1c8a7a7cefd99c63759a59b5a93c4d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 12,  22 => 11,);
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
/* {{ revision.timestamp | date }}*/
/* */

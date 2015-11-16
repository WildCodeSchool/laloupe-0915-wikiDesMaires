<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_39c20279e0bfc96da38d38bd503d74a69b6858edc94750033f6af1f91e2ed827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::empty_layout.html.twig", 12);
        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecf731ea008a44a73394bec03cf0848026b82803eb44e01ba7a98631245b6098 = $this->env->getExtension("native_profiler");
        $__internal_ecf731ea008a44a73394bec03cf0848026b82803eb44e01ba7a98631245b6098->enter($__internal_ecf731ea008a44a73394bec03cf0848026b82803eb44e01ba7a98631245b6098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf731ea008a44a73394bec03cf0848026b82803eb44e01ba7a98631245b6098->leave($__internal_ecf731ea008a44a73394bec03cf0848026b82803eb44e01ba7a98631245b6098_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_6b153bba601c9140900b417403d74591798a847d3d0061bff2f0eebdeae217dc = $this->env->getExtension("native_profiler");
        $__internal_6b153bba601c9140900b417403d74591798a847d3d0061bff2f0eebdeae217dc->enter($__internal_6b153bba601c9140900b417403d74591798a847d3d0061bff2f0eebdeae217dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_6b153bba601c9140900b417403d74591798a847d3d0061bff2f0eebdeae217dc->leave($__internal_6b153bba601c9140900b417403d74591798a847d3d0061bff2f0eebdeae217dc_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_7fa244bea8773728d5e993a3446cee7c660218c002d752c425ea91ccd296f73d = $this->env->getExtension("native_profiler");
        $__internal_7fa244bea8773728d5e993a3446cee7c660218c002d752c425ea91ccd296f73d->enter($__internal_7fa244bea8773728d5e993a3446cee7c660218c002d752c425ea91ccd296f73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_7fa244bea8773728d5e993a3446cee7c660218c002d752c425ea91ccd296f73d->leave($__internal_7fa244bea8773728d5e993a3446cee7c660218c002d752c425ea91ccd296f73d_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a01bb09b87710dc53e40d29bd8f16bf4dd303fe0b95d34d5fca57c2d11b16a3e = $this->env->getExtension("native_profiler");
        $__internal_a01bb09b87710dc53e40d29bd8f16bf4dd303fe0b95d34d5fca57c2d11b16a3e->enter($__internal_a01bb09b87710dc53e40d29bd8f16bf4dd303fe0b95d34d5fca57c2d11b16a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a01bb09b87710dc53e40d29bd8f16bf4dd303fe0b95d34d5fca57c2d11b16a3e->leave($__internal_a01bb09b87710dc53e40d29bd8f16bf4dd303fe0b95d34d5fca57c2d11b16a3e_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_484d7559e27cac6c1f96d0d344093b9aed5636b99e6982b11d979f82da8f4a47 = $this->env->getExtension("native_profiler");
        $__internal_484d7559e27cac6c1f96d0d344093b9aed5636b99e6982b11d979f82da8f4a47->enter($__internal_484d7559e27cac6c1f96d0d344093b9aed5636b99e6982b11d979f82da8f4a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_484d7559e27cac6c1f96d0d344093b9aed5636b99e6982b11d979f82da8f4a47->leave($__internal_484d7559e27cac6c1f96d0d344093b9aed5636b99e6982b11d979f82da8f4a47_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4bc73796a0327303dbbcc193dc2dfd0d55dd852f65164e5cfe27009b835bb0b = $this->env->getExtension("native_profiler");
        $__internal_c4bc73796a0327303dbbcc193dc2dfd0d55dd852f65164e5cfe27009b835bb0b->enter($__internal_c4bc73796a0327303dbbcc193dc2dfd0d55dd852f65164e5cfe27009b835bb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_c4bc73796a0327303dbbcc193dc2dfd0d55dd852f65164e5cfe27009b835bb0b->leave($__internal_c4bc73796a0327303dbbcc193dc2dfd0d55dd852f65164e5cfe27009b835bb0b_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_5eb035633f79d102ad8d2fe236b773c7f76841aed17ff5603af97ad6bc3c9fa4 = $this->env->getExtension("native_profiler");
        $__internal_5eb035633f79d102ad8d2fe236b773c7f76841aed17ff5603af97ad6bc3c9fa4->enter($__internal_5eb035633f79d102ad8d2fe236b773c7f76841aed17ff5603af97ad6bc3c9fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_5eb035633f79d102ad8d2fe236b773c7f76841aed17ff5603af97ad6bc3c9fa4->leave($__internal_5eb035633f79d102ad8d2fe236b773c7f76841aed17ff5603af97ad6bc3c9fa4_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_51e68e416d8473a5cf4dae847752659887ec59216a5dfb957956f7be5be79e9e = $this->env->getExtension("native_profiler");
        $__internal_51e68e416d8473a5cf4dae847752659887ec59216a5dfb957956f7be5be79e9e->enter($__internal_51e68e416d8473a5cf4dae847752659887ec59216a5dfb957956f7be5be79e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_51e68e416d8473a5cf4dae847752659887ec59216a5dfb957956f7be5be79e9e->leave($__internal_51e68e416d8473a5cf4dae847752659887ec59216a5dfb957956f7be5be79e9e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  114 => 32,  108 => 31,  90 => 20,  84 => 19,  73 => 17,  62 => 16,  51 => 15,  40 => 14,  11 => 12,);
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
/* {% extends 'SonataAdminBundle::standard_layout.html.twig' %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/

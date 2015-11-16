<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_460c3ac9ca2f2669cd069a60c8a3839bc73e96609845f767c5db924d1c01bcc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7486bd7f9c11283f4f72d72d7f87c7d81be48409f1905fdf6146a733084374bd = $this->env->getExtension("native_profiler");
        $__internal_7486bd7f9c11283f4f72d72d7f87c7d81be48409f1905fdf6146a733084374bd->enter($__internal_7486bd7f9c11283f4f72d72d7f87c7d81be48409f1905fdf6146a733084374bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:action.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
<h2>";
        // line 21
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

<div class=\"sonata-user-show row row-fluid\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig", "SonataUserBundle:Profile:action.html.twig", 32)->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
        
        $__internal_7486bd7f9c11283f4f72d72d7f87c7d81be48409f1905fdf6146a733084374bd->leave($__internal_7486bd7f9c11283f4f72d72d7f87c7d81be48409f1905fdf6146a733084374bd_prof);

    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        $__internal_5a8a76e801850a027bdba017d168f764e11c794a4e1ed8badd2832fa596e09bf = $this->env->getExtension("native_profiler");
        $__internal_5a8a76e801850a027bdba017d168f764e11c794a4e1ed8badd2832fa596e09bf->enter($__internal_5a8a76e801850a027bdba017d168f764e11c794a4e1ed8badd2832fa596e09bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_breadcrumb"));

        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div class=\"row-fluid clearfix\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
    </div>
";
        
        $__internal_5a8a76e801850a027bdba017d168f764e11c794a4e1ed8badd2832fa596e09bf->leave($__internal_5a8a76e801850a027bdba017d168f764e11c794a4e1ed8badd2832fa596e09bf_prof);

    }

    // line 21
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        $__internal_4b5856f235dd7b0125eabd50985b652004aa4684380b7a56ce7dbb43e9e45369 = $this->env->getExtension("native_profiler");
        $__internal_4b5856f235dd7b0125eabd50985b652004aa4684380b7a56ce7dbb43e9e45369->enter($__internal_4b5856f235dd7b0125eabd50985b652004aa4684380b7a56ce7dbb43e9e45369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_title"));

        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
        
        $__internal_4b5856f235dd7b0125eabd50985b652004aa4684380b7a56ce7dbb43e9e45369->leave($__internal_4b5856f235dd7b0125eabd50985b652004aa4684380b7a56ce7dbb43e9e45369_prof);

    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        $__internal_412700984ed14fab563226bd15e5746ff09ed3ab00eb817625612c7662d6f7dd = $this->env->getExtension("native_profiler");
        $__internal_412700984ed14fab563226bd15e5746ff09ed3ab00eb817625612c7662d6f7dd->enter($__internal_412700984ed14fab563226bd15e5746ff09ed3ab00eb817625612c7662d6f7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_menu"));

        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
        
        $__internal_412700984ed14fab563226bd15e5746ff09ed3ab00eb817625612c7662d6f7dd->leave($__internal_412700984ed14fab563226bd15e5746ff09ed3ab00eb817625612c7662d6f7dd_prof);

    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_0dd98749753c526971759dfc3886e17d476ee0762527e3d7bc7b66e65baa4eb2 = $this->env->getExtension("native_profiler");
        $__internal_0dd98749753c526971759dfc3886e17d476ee0762527e3d7bc7b66e65baa4eb2->enter($__internal_0dd98749753c526971759dfc3886e17d476ee0762527e3d7bc7b66e65baa4eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        echo "";
        
        $__internal_0dd98749753c526971759dfc3886e17d476ee0762527e3d7bc7b66e65baa4eb2->leave($__internal_0dd98749753c526971759dfc3886e17d476ee0762527e3d7bc7b66e65baa4eb2_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 34,  112 => 27,  106 => 26,  94 => 21,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  66 => 12,  56 => 35,  54 => 34,  51 => 33,  49 => 32,  44 => 29,  42 => 26,  34 => 21,  31 => 20,  29 => 12,  26 => 11,);
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
/* {% block sonata_page_breadcrumb %}*/
/*     {% if breadcrumb_context is not defined %}*/
/*         {% set breadcrumb_context = 'user_index' %}*/
/*     {% endif %}*/
/*     <div class="row-fluid clearfix">*/
/*         {{ sonata_block_render_event('breadcrumb', { 'context': breadcrumb_context, 'current_uri': app.request.requestUri }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* <h2>{% block sonata_profile_title %}{% trans from 'SonataUserBundle' %}sonata_profile_title{% endtrans %}{% endblock %}</h2>*/
/* */
/* <div class="sonata-user-show row row-fluid">*/
/* */
/*     <div class="span2 col-lg-2" style="padding: 8px 0;">*/
/*         {% block sonata_profile_menu %}*/
/*             {{ sonata_block_render({'type': 'sonata.user.block.menu'}, {'current_uri': app.request.requestUri}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="span10 col-lg-10">*/
/*         {% include 'SonataCoreBundle:FlashMessage:render.html.twig' %}*/
/* */
/*         {% block sonata_profile_content '' %}*/
/*     </div>*/
/* */
/* </div>*/
/* */

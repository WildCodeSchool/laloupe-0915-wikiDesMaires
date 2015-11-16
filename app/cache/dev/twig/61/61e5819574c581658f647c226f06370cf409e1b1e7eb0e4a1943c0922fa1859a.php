<?php

/* SonataUserBundle:Profile:edit_authentication.html.twig */
class __TwigTemplate_5a2c3d2c8d478387641a6393d26eef092b4ad7ad8dd18ac78e4969babc55c460 extends Twig_Template
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
        $__internal_f6a402c77292ef52962ccb9d82e91648019083f183a379afbfb6751b66a058e9 = $this->env->getExtension("native_profiler");
        $__internal_f6a402c77292ef52962ccb9d82e91648019083f183a379afbfb6751b66a058e9->enter($__internal_f6a402c77292ef52962ccb9d82e91648019083f183a379afbfb6751b66a058e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_authentication.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the user authentication edition template. Feel free to override it.</strong>
    <div>sonata_core_template_box_file_found_in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
<div class=\"row\">
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-warning\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
                </form>
            </div>
        </div>
    </div>
    <div class=\"span6 col-lg-6\">
        <div class=\"panel panel-danger\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_change_password_link", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 35
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_user_change_password"), array());
        // line 36
        echo "            </div>
        </div>
    </div>
</div>";
        
        $__internal_f6a402c77292ef52962ccb9d82e91648019083f183a379afbfb6751b66a058e9->leave($__internal_f6a402c77292ef52962ccb9d82e91648019083f183a379afbfb6751b66a058e9_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 36,  68 => 35,  62 => 32,  51 => 24,  46 => 22,  42 => 21,  36 => 18,  29 => 13,  25 => 12,  22 => 11,);
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
/* {% sonata_template_box 'This is the user authentication edition template. Feel free to override it.' %}*/
/* */
/* <div class="row">*/
/*     <div class="span6 col-lg-6">*/
/*         <div class="panel panel-warning">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ 'title_user_edit_authentication'|trans({}, 'SonataUserBundle') }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <form action="{{ path('sonata_user_profile_edit_authentication') }}" method="POST" class="form-horizontal">*/
/*                     {{ form_widget(form) }}*/
/* */
/*                     <button type="submit" name="submit" class="btn btn-primary pull-right">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="span6 col-lg-6">*/
/*         <div class="panel panel-danger">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title">{{ 'sonata_change_password_link'|trans({}, 'SonataUserBundle') }}</h3>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 {% render url("sonata_user_change_password") %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/

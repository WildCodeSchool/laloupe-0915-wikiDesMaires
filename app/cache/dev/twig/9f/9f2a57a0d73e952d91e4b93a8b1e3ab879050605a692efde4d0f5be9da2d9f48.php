<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_e52dd14b7645aaafa70cc29efeb6140fe564229696e61c4f199e2478445406be extends Twig_Template
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
        $__internal_1d42edcd46b5e40c685827a7c44d779c0d8cfe702c35858852dfee06f2cbba74 = $this->env->getExtension("native_profiler");
        $__internal_1d42edcd46b5e40c685827a7c44d779c0d8cfe702c35858852dfee06f2cbba74->enter($__internal_1d42edcd46b5e40c685827a7c44d779c0d8cfe702c35858852dfee06f2cbba74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "MopaBootstrapBundle:Form:fields.html.twig"));
        // line 2
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_change_password form-horizontal\">
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <button type=\"submit\" class=\"btn btn-danger pull-right\"><i class=\"icon-lock icon-white glyphicon glyphicon-lock\"></i>&nbsp;";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_1d42edcd46b5e40c685827a7c44d779c0d8cfe702c35858852dfee06f2cbba74->leave($__internal_1d42edcd46b5e40c685827a7c44d779c0d8cfe702c35858852dfee06f2cbba74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% form_theme form "MopaBootstrapBundle:Form:fields.html.twig" %}*/
/* <form action="{{ path('sonata_user_change_password') }}" {{ form_enctype(form) }} method="POST" class="fos_user_change_password form-horizontal">*/
/*     {{ form_widget(form) }}*/
/*     <button type="submit" class="btn btn-danger pull-right"><i class="icon-lock icon-white glyphicon glyphicon-lock"></i>&nbsp;{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}</button>*/
/* </form>*/
/* */

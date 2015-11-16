<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9fbe8bbf777e6be3cfb9465061cb059a3c550007c8c13cc5a8ab0fcde5feb0e6 extends Twig_Template
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
        $__internal_e87e48fa5fe17bbac5d215519b96f765dcb34c4434d8bbdf356d2ae2c5de44c8 = $this->env->getExtension("native_profiler");
        $__internal_e87e48fa5fe17bbac5d215519b96f765dcb34c4434d8bbdf356d2ae2c5de44c8->enter($__internal_e87e48fa5fe17bbac5d215519b96f765dcb34c4434d8bbdf356d2ae2c5de44c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_user_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e87e48fa5fe17bbac5d215519b96f765dcb34c4434d8bbdf356d2ae2c5de44c8->leave($__internal_e87e48fa5fe17bbac5d215519b96f765dcb34c4434d8bbdf356d2ae2c5de44c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/* </div>*/
/* */

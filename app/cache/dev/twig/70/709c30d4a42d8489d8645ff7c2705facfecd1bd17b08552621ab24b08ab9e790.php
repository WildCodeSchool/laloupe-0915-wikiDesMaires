<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_ffdfeb73e1f2c97dd15d8061ca18cbee77914ba03e52af1cc633829611a445a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88bcaeefeca73320c0aa22615619d5af393ed1889382ec1bf8aace17651ac503 = $this->env->getExtension("native_profiler");
        $__internal_88bcaeefeca73320c0aa22615619d5af393ed1889382ec1bf8aace17651ac503->enter($__internal_88bcaeefeca73320c0aa22615619d5af393ed1889382ec1bf8aace17651ac503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Core:user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_88bcaeefeca73320c0aa22615619d5af393ed1889382ec1bf8aace17651ac503->leave($__internal_88bcaeefeca73320c0aa22615619d5af393ed1889382ec1bf8aace17651ac503_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_7afc99d1058709a8aa39f421e30d76cd4175f9dd8192acbe5be1b33b36c33893 = $this->env->getExtension("native_profiler");
        $__internal_7afc99d1058709a8aa39f421e30d76cd4175f9dd8192acbe5be1b33b36c33893->enter($__internal_7afc99d1058709a8aa39f421e30d76cd4175f9dd8192acbe5be1b33b36c33893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating", array()), "parameters", array()), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
        
        $__internal_7afc99d1058709a8aa39f421e30d76cd4175f9dd8192acbe5be1b33b36c33893->leave($__internal_7afc99d1058709a8aa39f421e30d76cd4175f9dd8192acbe5be1b33b36c33893_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  46 => 6,  44 => 5,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block user_block %}*/
/*     {% if app.user %}*/
/*         {{ app.user }}*/
/* */
/*         {% if is_granted('ROLE_PREVIOUS_ADMIN') and sonata_user.impersonating %}*/
/*             <a href="{{ url(sonata_user.impersonating.route, sonata_user.impersonating.parameters| merge({'_switch_user': '_exit'})) }}">(exit)</a>*/
/*         {% endif %}*/
/* */
/*         - <a href="{{ url('sonata_user_admin_security_logout') }}">{{ 'user_block_logout'|trans({}, 'SonataUserBundle') }}</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

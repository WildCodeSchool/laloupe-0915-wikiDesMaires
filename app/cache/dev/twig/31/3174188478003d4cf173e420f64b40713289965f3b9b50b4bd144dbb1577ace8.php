<?php

/* SonataUserBundle:Block:account.html.twig */
class __TwigTemplate_8b738319a2b68046ccef3dbb48df67e511bd20f8ac9c89608c837c50763754bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataUserBundle:Block:account.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88d5ba1646de3022237d48643b75e555f82c9daeefbd4654c2a90f5df9973f2e = $this->env->getExtension("native_profiler");
        $__internal_88d5ba1646de3022237d48643b75e555f82c9daeefbd4654c2a90f5df9973f2e->enter($__internal_88d5ba1646de3022237d48643b75e555f82c9daeefbd4654c2a90f5df9973f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Block:account.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88d5ba1646de3022237d48643b75e555f82c9daeefbd4654c2a90f5df9973f2e->leave($__internal_88d5ba1646de3022237d48643b75e555f82c9daeefbd4654c2a90f5df9973f2e_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_cf6c0f1ae3af7f72cbdb8e347e1762a3c0a27b73fa38e21ddbbf1b0b1d0d2926 = $this->env->getExtension("native_profiler");
        $__internal_cf6c0f1ae3af7f72cbdb8e347e1762a3c0a27b73fa38e21ddbbf1b0b1d0d2926->enter($__internal_cf6c0f1ae3af7f72cbdb8e347e1762a3c0a27b73fa38e21ddbbf1b0b1d0d2926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div style=\"display:inline;\">
        ";
        // line 16
        if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 20
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 22
        echo "    </div>
";
        
        $__internal_cf6c0f1ae3af7f72cbdb8e347e1762a3c0a27b73fa38e21ddbbf1b0b1d0d2926->leave($__internal_cf6c0f1ae3af7f72cbdb8e347e1762a3c0a27b73fa38e21ddbbf1b0b1d0d2926_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Block:account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  58 => 20,  51 => 18,  44 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends sonata_block.templates.block_base %}*/
/* */
/* {% block block %}*/
/*     <div style="display:inline;">*/
/*         {% if user %}*/
/*             <a href="{{ path('sonata_user_profile_show') }}">{{ user.username }}</a> |*/
/*             <a href="{{ path('fos_user_security_logout') }}">{{ 'link_logout' | trans({}, "SonataUserBundle") }}</a>*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}">{{ 'link_login'|trans({}, 'SonataUserBundle') }} / {{ 'link_register'|trans({}, 'SonataUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */

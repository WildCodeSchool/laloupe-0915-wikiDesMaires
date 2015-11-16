<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_5258ba61cf2f6fa2343c31ca58ba3e9be99e40dc0c0f807f8219743ee7ee0f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator:check.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_957dea2e23b2c77272eab461b81f7e284d15bea473d5c65df00296c73c530679 = $this->env->getExtension("native_profiler");
        $__internal_957dea2e23b2c77272eab461b81f7e284d15bea473d5c65df00296c73c530679->enter($__internal_957dea2e23b2c77272eab461b81f7e284d15bea473d5c65df00296c73c530679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_957dea2e23b2c77272eab461b81f7e284d15bea473d5c65df00296c73c530679->leave($__internal_957dea2e23b2c77272eab461b81f7e284d15bea473d5c65df00296c73c530679_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8a632bf0c07b43481cf532abba05e6b62b0cceebf0f86adea61806c9cda857d = $this->env->getExtension("native_profiler");
        $__internal_c8a632bf0c07b43481cf532abba05e6b62b0cceebf0f86adea61806c9cda857d->enter($__internal_c8a632bf0c07b43481cf532abba05e6b62b0cceebf0f86adea61806c9cda857d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommendations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ( !twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
        
        $__internal_c8a632bf0c07b43481cf532abba05e6b62b0cceebf0f86adea61806c9cda857d->leave($__internal_c8a632bf0c07b43481cf532abba05e6b62b0cceebf0f86adea61806c9cda857d_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 40,  121 => 39,  119 => 38,  116 => 37,  110 => 33,  101 => 31,  97 => 30,  91 => 26,  87 => 24,  83 => 22,  81 => 21,  76 => 18,  74 => 17,  71 => 16,  67 => 14,  58 => 12,  54 => 11,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "SensioDistributionBundle::Configurator/layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {% if majors|length %}*/
/*         <h1>Major Problems that need to be fixed now</h1>*/
/*         <p>*/
/*             We have detected <strong>{{ majors|length }}</strong> major problems.*/
/*             You <em>must</em> fix them before continuing:*/
/*         </p>*/
/*         <ol>*/
/*             {% for message in majors %}*/
/*                 <li>{{ message }}</li>*/
/*             {% endfor %}*/
/*         </ol>*/
/*     {% endif %}*/
/* */
/*     {% if minors|length %}*/
/*         <h1>Some Recommendations</h1>*/
/* */
/*         <p>*/
/*             {% if majors|length %}*/
/*             Additionally, we*/
/*             {% else %}*/
/*             We*/
/*             {% endif %}*/
/*             have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony*/
/*             experience:*/
/* */
/*             <ol>*/
/*                 {% for message in minors %}*/
/*                     <li>{{ message }}</li>*/
/*                 {% endfor %}*/
/*             </ol>*/
/*         </p>*/
/* */
/*     {% endif %}*/
/* */
/*     {% if not majors|length %}*/
/*         <ul class="symfony_list">*/
/*             <li><a href="{{ url }}">Configure your Symfony Application online</a></li>*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

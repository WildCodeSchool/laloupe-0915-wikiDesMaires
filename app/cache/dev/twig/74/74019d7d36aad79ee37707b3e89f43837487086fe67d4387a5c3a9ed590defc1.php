<?php

/* SonataUserBundle:Admin/Security:two_step_form.html.twig */
class __TwigTemplate_ba929408dac71291fc3f4a45579559f1cebbf922de363199447166173908120b extends Twig_Template
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
        $__internal_8189f1ddf81843666c082e0f6bdbf098a0a00095bac294e9f38b79fa91e44878 = $this->env->getExtension("native_profiler");
        $__internal_8189f1ddf81843666c082e0f6bdbf098a0a00095bac294e9f38b79fa91e44878->enter($__internal_8189f1ddf81843666c082e0f6bdbf098a0a00095bac294e9f38b79fa91e44878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin/Security:two_step_form.html.twig"));

        // line 11
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/layout.css\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/colors.css\" type=\"text/css\" media=\"all\">
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"connection\">

                    <form method=\"POST\">
                        ";
        // line 25
        if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) == "error")) {
            // line 26
            echo "                            <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_two_step_code_error", array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 28
        echo "
                        <div class=\"control-group\">
                            <label for=\"code\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_two_step_code", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"controls\">
                                <input type=\"text\" id=\"username\" name=\"_code\" class=\"big sonata-medium\" autocomplete='off'/>
                                <span class=\"help-block sonata-ba-field-help\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_two_step_code_help", array(), "SonataUserBundle"), "html", null, true);
        echo "</span>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_8189f1ddf81843666c082e0f6bdbf098a0a00095bac294e9f38b79fa91e44878->leave($__internal_8189f1ddf81843666c082e0f6bdbf098a0a00095bac294e9f38b79fa91e44878_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:two_step_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  60 => 34,  53 => 30,  49 => 28,  43 => 26,  41 => 25,  27 => 14,  22 => 11,);
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
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <link rel="stylesheet" href="{{ asset('bundles/sonataadmin/bootstrap/css/bootstrap.min.css') }}" type="text/css" media="all" >*/
/*         <link rel="stylesheet" href="/bundles/sonataadmin/css/layout.css" type="text/css" media="all">*/
/*         <link rel="stylesheet" href="/bundles/sonataadmin/css/colors.css" type="text/css" media="all">*/
/*     </head>*/
/* */
/*     <body class="sonata-bc">*/
/*         <div class="container-fluid">*/
/*             <div class="row-fluid">*/
/*                 <div class="connection">*/
/* */
/*                     <form method="POST">*/
/*                         {% if state == 'error' %}*/
/*                             <div class="alert alert-error">{{ 'label_two_step_code_error'|trans({}, 'SonataUserBundle') }}</div>*/
/*                         {% endif %}*/
/* */
/*                         <div class="control-group">*/
/*                             <label for="code">{{ 'label_two_step_code'|trans({}, 'SonataUserBundle') }}</label>*/
/* */
/*                             <div class="controls">*/
/*                                 <input type="text" id="username" name="_code" class="big sonata-medium" autocomplete='off'/>*/
/*                                 <span class="help-block sonata-ba-field-help">{{ 'message_two_step_code_help'|trans({}, 'SonataUserBundle') }}</span>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-actions">*/
/*                             <input type="submit" class="btn primary" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */

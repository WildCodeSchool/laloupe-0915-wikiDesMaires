<?php

/* ::base.html.twig */
class __TwigTemplate_ed5d19c827116c2ed4c1630bdfef8fb93d4c82edf5b6373f62f8c180181fce5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3a9cc3c458aa9131c6247318e205204f9922ef2ffab41ca2613c4948a8bf6f9 = $this->env->getExtension("native_profiler");
        $__internal_f3a9cc3c458aa9131c6247318e205204f9922ef2ffab41ca2613c4948a8bf6f9->enter($__internal_f3a9cc3c458aa9131c6247318e205204f9922ef2ffab41ca2613c4948a8bf6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_f3a9cc3c458aa9131c6247318e205204f9922ef2ffab41ca2613c4948a8bf6f9->leave($__internal_f3a9cc3c458aa9131c6247318e205204f9922ef2ffab41ca2613c4948a8bf6f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a306492b3723c977e21d78ab4ee93731a55fa111c4654cb9e9394982f25e5ff = $this->env->getExtension("native_profiler");
        $__internal_9a306492b3723c977e21d78ab4ee93731a55fa111c4654cb9e9394982f25e5ff->enter($__internal_9a306492b3723c977e21d78ab4ee93731a55fa111c4654cb9e9394982f25e5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a306492b3723c977e21d78ab4ee93731a55fa111c4654cb9e9394982f25e5ff->leave($__internal_9a306492b3723c977e21d78ab4ee93731a55fa111c4654cb9e9394982f25e5ff_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7288c319b7382281be9efb236b67d87352b83927bbbc76f6bc3af1af859f7cb = $this->env->getExtension("native_profiler");
        $__internal_d7288c319b7382281be9efb236b67d87352b83927bbbc76f6bc3af1af859f7cb->enter($__internal_d7288c319b7382281be9efb236b67d87352b83927bbbc76f6bc3af1af859f7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/wikiadmin/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_d7288c319b7382281be9efb236b67d87352b83927bbbc76f6bc3af1af859f7cb->leave($__internal_d7288c319b7382281be9efb236b67d87352b83927bbbc76f6bc3af1af859f7cb_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_26ca3cfb4ee45325b5870c8f5fa1ac659fc567e1a1a6f1bbfa8aea5d08d8081d = $this->env->getExtension("native_profiler");
        $__internal_26ca3cfb4ee45325b5870c8f5fa1ac659fc567e1a1a6f1bbfa8aea5d08d8081d->enter($__internal_26ca3cfb4ee45325b5870c8f5fa1ac659fc567e1a1a6f1bbfa8aea5d08d8081d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_26ca3cfb4ee45325b5870c8f5fa1ac659fc567e1a1a6f1bbfa8aea5d08d8081d->leave($__internal_26ca3cfb4ee45325b5870c8f5fa1ac659fc567e1a1a6f1bbfa8aea5d08d8081d_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_45816a66f6581a33593cfbdfeb20b5a3504b98d10a17d66c20cc27151fd15670 = $this->env->getExtension("native_profiler");
        $__internal_45816a66f6581a33593cfbdfeb20b5a3504b98d10a17d66c20cc27151fd15670->enter($__internal_45816a66f6581a33593cfbdfeb20b5a3504b98d10a17d66c20cc27151fd15670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_45816a66f6581a33593cfbdfeb20b5a3504b98d10a17d66c20cc27151fd15670->leave($__internal_45816a66f6581a33593cfbdfeb20b5a3504b98d10a17d66c20cc27151fd15670_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/wikiadmin/css/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

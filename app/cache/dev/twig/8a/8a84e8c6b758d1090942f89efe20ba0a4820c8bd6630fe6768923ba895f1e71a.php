<?php

/* default/index.html.twig */
class __TwigTemplate_0f15f8c58bc218cddbe2ad1e3127bb26bb88a988da436d0a3b1be7533e69473b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_817b3d144a4e6ec54e7f110e39ace074be5a4e538d6be6db44861a15cf9cd0ba = $this->env->getExtension("native_profiler");
        $__internal_817b3d144a4e6ec54e7f110e39ace074be5a4e538d6be6db44861a15cf9cd0ba->enter($__internal_817b3d144a4e6ec54e7f110e39ace074be5a4e538d6be6db44861a15cf9cd0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_817b3d144a4e6ec54e7f110e39ace074be5a4e538d6be6db44861a15cf9cd0ba->leave($__internal_817b3d144a4e6ec54e7f110e39ace074be5a4e538d6be6db44861a15cf9cd0ba_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cef65479f94aea54df6f61e51156e570c71b990c19e61c764b9b46c701b195ae = $this->env->getExtension("native_profiler");
        $__internal_cef65479f94aea54df6f61e51156e570c71b990c19e61c764b9b46c701b195ae->enter($__internal_cef65479f94aea54df6f61e51156e570c71b990c19e61c764b9b46c701b195ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Welcome</h2>
    <div>
        <p>
            Bienvenue Celine
        </p>
    </div>
    <div class=\"section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h1 class=\"text-center\">Team</h1>

                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png\"
                         class=\"center-block img-circle img-responsive\">
                    <h3 class=\"text-center\">Séverine</h3>
                    <p class=\"text-center\">Developer</p>
                </div>
                <div class=\"col-md-3\">
                    <img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png\"
                         class=\"center-block img-circle img-responsive\">
                    <h3 class=\"text-center\">Mahamadou</h3>
                    <p class=\"text-center\">Developer</p>
                </div>
                <div class=\"col-md-3\">
                    <img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png\"
                         class=\"center-block img-circle img-responsive\">
                    <h3 class=\"text-center\">Lucie</h3>
                    <p class=\"text-center\">Developer</p>
                </div>
                <div class=\"col-md-3\">
                    <img src=\"http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png\"
                         class=\"center-block img-circle img-responsive\">
                    <h3 class=\"text-center\">Florian</h3>
                    <p class=\"text-center\">Developer</p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_cef65479f94aea54df6f61e51156e570c71b990c19e61c764b9b46c701b195ae->leave($__internal_cef65479f94aea54df6f61e51156e570c71b990c19e61c764b9b46c701b195ae_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2>Welcome</h2>*/
/*     <div>*/
/*         <p>*/
/*             Bienvenue Celine*/
/*         </p>*/
/*     </div>*/
/*     <div class="section">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <h1 class="text-center">Team</h1>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-md-3">*/
/*                     <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"*/
/*                          class="center-block img-circle img-responsive">*/
/*                     <h3 class="text-center">Séverine</h3>*/
/*                     <p class="text-center">Developer</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"*/
/*                          class="center-block img-circle img-responsive">*/
/*                     <h3 class="text-center">Mahamadou</h3>*/
/*                     <p class="text-center">Developer</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"*/
/*                          class="center-block img-circle img-responsive">*/
/*                     <h3 class="text-center">Lucie</h3>*/
/*                     <p class="text-center">Developer</p>*/
/*                 </div>*/
/*                 <div class="col-md-3">*/
/*                     <img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"*/
/*                          class="center-block img-circle img-responsive">*/
/*                     <h3 class="text-center">Florian</h3>*/
/*                     <p class="text-center">Developer</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

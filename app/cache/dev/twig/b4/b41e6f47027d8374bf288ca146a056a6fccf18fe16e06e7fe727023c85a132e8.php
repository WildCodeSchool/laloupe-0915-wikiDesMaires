<?php

/* WikiAdminBundle:Default:index.html.twig */
class __TwigTemplate_b4bf6cfc73d30b4ed890cc2fb9ad10c9ad165d7f70a7a79c1f17a91dc2bd3e34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WikiAdminBundle:Default:index.html.twig", 1);
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
        $__internal_478a00755970f1a8e05165333458510dfba95e21e7bf2e9316b6ec5fd18d5af9 = $this->env->getExtension("native_profiler");
        $__internal_478a00755970f1a8e05165333458510dfba95e21e7bf2e9316b6ec5fd18d5af9->enter($__internal_478a00755970f1a8e05165333458510dfba95e21e7bf2e9316b6ec5fd18d5af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WikiAdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478a00755970f1a8e05165333458510dfba95e21e7bf2e9316b6ec5fd18d5af9->leave($__internal_478a00755970f1a8e05165333458510dfba95e21e7bf2e9316b6ec5fd18d5af9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bd1c08a86c486167f0a6cf416cc12fd1aae31e8d7b09b0e6db656eb6ffc1682 = $this->env->getExtension("native_profiler");
        $__internal_3bd1c08a86c486167f0a6cf416cc12fd1aae31e8d7b09b0e6db656eb6ffc1682->enter($__internal_3bd1c08a86c486167f0a6cf416cc12fd1aae31e8d7b09b0e6db656eb6ffc1682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Welcome</h2>
    <div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, lacus nec aliquam condimentum, erat
            lectus ullamcorper orci, et pulvinar ante turpis ut libero. Nam condimentum blandit nibh id condimentum.
            Quisque eu tortor tempus, facilisis urna id, egestas enim. Donec imperdiet faucibus magna, vitae dapibus n
            eque ullamcorper nec. Maecenas porta laoreet lacinia. Donec vulputate magna nibh, vel euismod mauris luctus
            in. Curabitur ut rhoncus libero. Quisque a nibh nulla. Nam ipsum nibh, lobortis eget ultrices vel, commodo
            eu purus.

            Sed luctus efficitur egestas. Vivamus eu porta ligula, et ultrices tortor. Nunc auctor libero vel leo
            ultricies, ut ultrices mauris ultrices. Donec est augue, tristique a ex eget, malesuada pellentesque tortor
            . Nullam consectetur massa et sapien venenatis vulputate vel ac nulla. Aliquam id ante commodo velit varius
            condimentum. Vestibulum non leo porta nunc tincidunt congue eget auctor leo. Vivamus nec nisl vulputate,
            molestie urna quis, consectetur nibh. Suspendisse tristique gravida eros, ac iaculis mauris malesuada a.
            Cras non ornare metus, auctor ultrices risus. Maecenas ligula neque, porttitor id fringilla at, cursus vitae
            lectus. Aliquam et porta mauris. Sed tincidunt purus a volutpat ornare.

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
        
        $__internal_3bd1c08a86c486167f0a6cf416cc12fd1aae31e8d7b09b0e6db656eb6ffc1682->leave($__internal_3bd1c08a86c486167f0a6cf416cc12fd1aae31e8d7b09b0e6db656eb6ffc1682_prof);

    }

    public function getTemplateName()
    {
        return "WikiAdminBundle:Default:index.html.twig";
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
/*             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempor, lacus nec aliquam condimentum, erat*/
/*             lectus ullamcorper orci, et pulvinar ante turpis ut libero. Nam condimentum blandit nibh id condimentum.*/
/*             Quisque eu tortor tempus, facilisis urna id, egestas enim. Donec imperdiet faucibus magna, vitae dapibus n*/
/*             eque ullamcorper nec. Maecenas porta laoreet lacinia. Donec vulputate magna nibh, vel euismod mauris luctus*/
/*             in. Curabitur ut rhoncus libero. Quisque a nibh nulla. Nam ipsum nibh, lobortis eget ultrices vel, commodo*/
/*             eu purus.*/
/* */
/*             Sed luctus efficitur egestas. Vivamus eu porta ligula, et ultrices tortor. Nunc auctor libero vel leo*/
/*             ultricies, ut ultrices mauris ultrices. Donec est augue, tristique a ex eget, malesuada pellentesque tortor*/
/*             . Nullam consectetur massa et sapien venenatis vulputate vel ac nulla. Aliquam id ante commodo velit varius*/
/*             condimentum. Vestibulum non leo porta nunc tincidunt congue eget auctor leo. Vivamus nec nisl vulputate,*/
/*             molestie urna quis, consectetur nibh. Suspendisse tristique gravida eros, ac iaculis mauris malesuada a.*/
/*             Cras non ornare metus, auctor ultrices risus. Maecenas ligula neque, porttitor id fringilla at, cursus vitae*/
/*             lectus. Aliquam et porta mauris. Sed tincidunt purus a volutpat ornare.*/
/* */
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

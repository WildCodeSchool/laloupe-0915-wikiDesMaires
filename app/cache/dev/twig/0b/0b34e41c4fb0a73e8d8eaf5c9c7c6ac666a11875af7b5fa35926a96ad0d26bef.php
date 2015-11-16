<?php

/* SonataAdminBundle::ajax_layout.html.twig */
class __TwigTemplate_e48ca8b1da8bbb610bafb1d51451527f6fdca601cf009bbe081884458b2bb49c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7e7fdd1667209969e1c5e33f68804132646d5863a6aff8c291481f12aafa2bf = $this->env->getExtension("native_profiler");
        $__internal_c7e7fdd1667209969e1c5e33f68804132646d5863a6aff8c291481f12aafa2bf->enter($__internal_c7e7fdd1667209969e1c5e33f68804132646d5863a6aff8c291481f12aafa2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_c7e7fdd1667209969e1c5e33f68804132646d5863a6aff8c291481f12aafa2bf->leave($__internal_c7e7fdd1667209969e1c5e33f68804132646d5863a6aff8c291481f12aafa2bf_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_12a1e70ec90b12ebab8dd7ede1bc45a66e64eb874c0c6b554aa29d5304bfb506 = $this->env->getExtension("native_profiler");
        $__internal_12a1e70ec90b12ebab8dd7ede1bc45a66e64eb874c0c6b554aa29d5304bfb506->enter($__internal_12a1e70ec90b12ebab8dd7ede1bc45a66e64eb874c0c6b554aa29d5304bfb506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim($this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim($this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('preview', $context, $blocks);
        // line 17
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        if (((twig_length_filter($this->env, (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) > 0) || (twig_length_filter($this->env, (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) > 0))) {
            // line 22
            echo "        <div class=\"row\">
            <div class=\"sonata-ba-list ";
            // line 23
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                echo "col-md-10";
            } else {
                echo "col-md-12";
            }
            echo "\">
                ";
            // line 24
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
            </div>
            ";
            // line 26
            if ((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))) {
                // line 27
                echo "                <div class=\"sonata-ba-filter col-md-2\">
                    ";
                // line 28
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                </div>
            ";
            }
            // line 31
            echo "        </div>
    ";
        }
        // line 33
        echo "
";
        
        $__internal_12a1e70ec90b12ebab8dd7ede1bc45a66e64eb874c0c6b554aa29d5304bfb506->leave($__internal_12a1e70ec90b12ebab8dd7ede1bc45a66e64eb874c0c6b554aa29d5304bfb506_prof);

    }

    // line 16
    public function block_preview($context, array $blocks = array())
    {
        $__internal_e786e0dba2368e578b478e5419e077f3423e8997ec7529909784386ea68fa279 = $this->env->getExtension("native_profiler");
        $__internal_e786e0dba2368e578b478e5419e077f3423e8997ec7529909784386ea68fa279->enter($__internal_e786e0dba2368e578b478e5419e077f3423e8997ec7529909784386ea68fa279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_e786e0dba2368e578b478e5419e077f3423e8997ec7529909784386ea68fa279->leave($__internal_e786e0dba2368e578b478e5419e077f3423e8997ec7529909784386ea68fa279_prof);

    }

    // line 17
    public function block_form($context, array $blocks = array())
    {
        $__internal_0098e3a3cc407470ec39b5ef52c5392791577fe9bf64302fe1d5081d07d5a99d = $this->env->getExtension("native_profiler");
        $__internal_0098e3a3cc407470ec39b5ef52c5392791577fe9bf64302fe1d5081d07d5a99d->enter($__internal_0098e3a3cc407470ec39b5ef52c5392791577fe9bf64302fe1d5081d07d5a99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_0098e3a3cc407470ec39b5ef52c5392791577fe9bf64302fe1d5081d07d5a99d->leave($__internal_0098e3a3cc407470ec39b5ef52c5392791577fe9bf64302fe1d5081d07d5a99d_prof);

    }

    // line 18
    public function block_list($context, array $blocks = array())
    {
        $__internal_aa292b38a5eee283b7e37e9f73b02972747b30c6851c18e84f208c8105c9297a = $this->env->getExtension("native_profiler");
        $__internal_aa292b38a5eee283b7e37e9f73b02972747b30c6851c18e84f208c8105c9297a->enter($__internal_aa292b38a5eee283b7e37e9f73b02972747b30c6851c18e84f208c8105c9297a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_aa292b38a5eee283b7e37e9f73b02972747b30c6851c18e84f208c8105c9297a->leave($__internal_aa292b38a5eee283b7e37e9f73b02972747b30c6851c18e84f208c8105c9297a_prof);

    }

    // line 19
    public function block_show($context, array $blocks = array())
    {
        $__internal_371c5aa99be87ea1e5d2716190b87da6db6f50ed3025784d26e572bf96c11be0 = $this->env->getExtension("native_profiler");
        $__internal_371c5aa99be87ea1e5d2716190b87da6db6f50ed3025784d26e572bf96c11be0->enter($__internal_371c5aa99be87ea1e5d2716190b87da6db6f50ed3025784d26e572bf96c11be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_371c5aa99be87ea1e5d2716190b87da6db6f50ed3025784d26e572bf96c11be0->leave($__internal_371c5aa99be87ea1e5d2716190b87da6db6f50ed3025784d26e572bf96c11be0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 19,  128 => 18,  117 => 17,  106 => 16,  98 => 33,  94 => 31,  88 => 28,  85 => 27,  83 => 26,  78 => 24,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  59 => 19,  56 => 18,  53 => 17,  51 => 16,  48 => 15,  45 => 14,  42 => 13,  30 => 12,  27 => 11,);
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
/* {% block content %}*/
/*     {% set _list_table   = block('list_table')|trim %}*/
/*     {% set _list_filters = block('list_filters')|trim %}*/
/* */
/*     {% block preview %}{% endblock %}*/
/*     {% block form %}{% endblock %}*/
/*     {% block list %}{% endblock %}*/
/*     {% block show %}{% endblock %}*/
/* */
/*     {% if _list_table|length > 0 or _list_filters|length > 0 %}*/
/*         <div class="row">*/
/*             <div class="sonata-ba-list {% if _list_filters %}col-md-10{% else %}col-md-12{% endif %}">*/
/*                 {{ _list_table|raw }}*/
/*             </div>*/
/*             {% if _list_filters %}*/
/*                 <div class="sonata-ba-filter col-md-2">*/
/*                     {{ _list_filters|raw }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */

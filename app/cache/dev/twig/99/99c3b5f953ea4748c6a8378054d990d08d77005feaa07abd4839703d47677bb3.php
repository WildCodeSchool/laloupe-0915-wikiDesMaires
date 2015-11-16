<?php

/* WikiAdminBundle:Commune:show.html.twig */
class __TwigTemplate_3af4a38afbd22256259c301eef1aa586322200450378145714b587e999cbdd6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "WikiAdminBundle:Commune:show.html.twig", 1);
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
        $__internal_2f5b462249125d673f81e7ce316720dbd6249187c47c2effa495c73f7af262e2 = $this->env->getExtension("native_profiler");
        $__internal_2f5b462249125d673f81e7ce316720dbd6249187c47c2effa495c73f7af262e2->enter($__internal_2f5b462249125d673f81e7ce316720dbd6249187c47c2effa495c73f7af262e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WikiAdminBundle:Commune:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f5b462249125d673f81e7ce316720dbd6249187c47c2effa495c73f7af262e2->leave($__internal_2f5b462249125d673f81e7ce316720dbd6249187c47c2effa495c73f7af262e2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49cca576a9f0d1c77815eba4ff475a10b5a660657a554973983692e75c540ecb = $this->env->getExtension("native_profiler");
        $__internal_49cca576a9f0d1c77815eba4ff475a10b5a660657a554973983692e75c540ecb->enter($__internal_49cca576a9f0d1c77815eba4ff475a10b5a660657a554973983692e75c540ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Commune</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nom</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Map</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "map", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Habitants</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "habitants", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("commune");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commune_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_49cca576a9f0d1c77815eba4ff475a10b5a660657a554973983692e75c540ecb->leave($__internal_49cca576a9f0d1c77815eba4ff475a10b5a660657a554973983692e75c540ecb_prof);

    }

    public function getTemplateName()
    {
        return "WikiAdminBundle:Commune:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  87 => 34,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Commune</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nom</th>*/
/*                 <td>{{ entity.nom }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Map</th>*/
/*                 <td>{{ entity.map }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Habitants</th>*/
/*                 <td>{{ entity.habitants }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('commune') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('commune_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */

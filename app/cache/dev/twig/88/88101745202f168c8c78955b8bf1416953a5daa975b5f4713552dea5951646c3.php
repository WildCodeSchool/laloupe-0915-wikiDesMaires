<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_7475dcf1a08ad833c706f97ad42b7693ddaa174f5b3f508afaa559ef968c2aa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_198339a724f074579bd26bfa65e7bdd180b8242ffed9b38959787dc2b54fc804 = $this->env->getExtension("native_profiler");
        $__internal_198339a724f074579bd26bfa65e7bdd180b8242ffed9b38959787dc2b54fc804->enter($__internal_198339a724f074579bd26bfa65e7bdd180b8242ffed9b38959787dc2b54fc804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_198339a724f074579bd26bfa65e7bdd180b8242ffed9b38959787dc2b54fc804->leave($__internal_198339a724f074579bd26bfa65e7bdd180b8242ffed9b38959787dc2b54fc804_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_91399aeef42a9503725bd1ce3693ea7f77c076a21c256b2ebbc59f08f93b942c = $this->env->getExtension("native_profiler");
        $__internal_91399aeef42a9503725bd1ce3693ea7f77c076a21c256b2ebbc59f08f93b942c->enter($__internal_91399aeef42a9503725bd1ce3693ea7f77c076a21c256b2ebbc59f08f93b942c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        echo "    <li>";
        $this->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->loadTemplate("SonataAdminBundle:Button:history_button.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 16)->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->loadTemplate("SonataAdminBundle:Button:show_button.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 17)->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->loadTemplate("SonataAdminBundle:Button:list_button.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18)->display($context);
        echo "</li>
";
        
        $__internal_91399aeef42a9503725bd1ce3693ea7f77c076a21c256b2ebbc59f08f93b942c->leave($__internal_91399aeef42a9503725bd1ce3693ea7f77c076a21c256b2ebbc59f08f93b942c_prof);

    }

    // line 21
    public function block_form($context, array $blocks = array())
    {
        $__internal_54ff1408cccabe83c57209cead09e05df48bb0254b3c8189628491f4539175c1 = $this->env->getExtension("native_profiler");
        $__internal_54ff1408cccabe83c57209cead09e05df48bb0254b3c8189628491f4539175c1->enter($__internal_54ff1408cccabe83c57209cead09e05df48bb0254b3c8189628491f4539175c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 22
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 25
        if ( !$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method")) {
            echo "novalidate=\"novalidate\"";
        }
        // line 26
        echo "              >
        ";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 28
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 32
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 38
            echo "                    <th>";
            echo twig_escape_filter($this->env, $context["permission"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "                <tr>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "</td>
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 47
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ($this->getAttribute($context["user"], "id", array()) . $context["permission"]), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>

        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 56
        $this->displayBlock('formactions', $context, $blocks);
        // line 61
        echo "    </form>
";
        
        $__internal_54ff1408cccabe83c57209cead09e05df48bb0254b3c8189628491f4539175c1->leave($__internal_54ff1408cccabe83c57209cead09e05df48bb0254b3c8189628491f4539175c1_prof);

    }

    // line 56
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_f2079b34a118a07e8fb43961251df03ca064e33887f4ef85d656a4a39c5666b9 = $this->env->getExtension("native_profiler");
        $__internal_f2079b34a118a07e8fb43961251df03ca064e33887f4ef85d656a4a39c5666b9->enter($__internal_f2079b34a118a07e8fb43961251df03ca064e33887f4ef85d656a4a39c5666b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 57
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
            </div>
        ";
        
        $__internal_f2079b34a118a07e8fb43961251df03ca064e33887f4ef85d656a4a39c5666b9->leave($__internal_f2079b34a118a07e8fb43961251df03ca064e33887f4ef85d656a4a39c5666b9_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 58,  182 => 57,  176 => 56,  168 => 61,  166 => 56,  161 => 54,  156 => 51,  149 => 49,  140 => 47,  136 => 46,  132 => 45,  129 => 44,  125 => 43,  120 => 40,  111 => 38,  107 => 37,  103 => 36,  97 => 32,  91 => 29,  88 => 28,  86 => 27,  83 => 26,  79 => 25,  72 => 23,  69 => 22,  63 => 21,  54 => 18,  50 => 17,  46 => 16,  41 => 15,  35 => 14,  20 => 12,);
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
/* {% extends base_template %}*/
/* */
/* {% block actions %}*/
/*     <li>{% include 'SonataAdminBundle:Button:edit_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:history_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:show_button.html.twig' %}</li>*/
/*     <li>{% include 'SonataAdminBundle:Button:list_button.html.twig' %}</li>*/
/* {% endblock %}*/
/* */
/* {% block form %}*/
/*     <form class="form-horizontal"*/
/*               action="{{ admin.generateUrl('acl', {'id': admin.id(object), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}" {{ form_enctype(form) }}*/
/*               method="POST"*/
/*               {% if not admin_pool.getOption('html5_validate') %}novalidate="novalidate"{% endif %}*/
/*               >*/
/*         {% if form.vars.errors|length > 0 %}*/
/*             <div class="sonata-ba-form-error">*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <table class="table">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>{{ "td_username"|trans({}, 'SonataAdminBundle') }}</th>*/
/*                     {% for permission in permissions %}*/
/*                     <th>{{ permission }}</th>*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for user in users %}*/
/*                 <tr>*/
/*                     <td>{{ user }}</td>*/
/*                     {% for permission in permissions %}*/
/*                     <td>{{ form_widget(form[user.id ~ permission]) }}</td>*/
/*                     {% endfor %}*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         {{ form_rest(form) }}*/
/* */
/*         {% block formactions %}*/
/*             <div class="well well-small form-actions">*/
/*                 <input class="btn btn-primary" type="submit" name="btn_create_and_edit" value="{{ 'btn_update_acl'|trans({}, 'SonataAdminBundle') }}">*/
/*             </div>*/
/*         {% endblock formactions %}*/
/*     </form>*/
/* {% endblock %}*/
/* */

<?php

/* SonataAdminBundle:Form:silex_form_div_layout.html.twig */
class __TwigTemplate_dac3acc6605f5021c540ee2db598d1d0cab2eef4195a7bc76296cd09343dffd9 extends Twig_Template
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
        $__internal_467436458fd3b3c41ff901f66a3b9e2c47ac94e6bb33160822235a6d1f3f2147 = $this->env->getExtension("native_profiler");
        $__internal_467436458fd3b3c41ff901f66a3b9e2c47ac94e6bb33160822235a6d1f3f2147->enter($__internal_467436458fd3b3c41ff901f66a3b9e2c47ac94e6bb33160822235a6d1f3f2147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:silex_form_div_layout.html.twig"));

        // line 2
        echo "
";
        // line 7
        echo "
";
        
        $__internal_467436458fd3b3c41ff901f66a3b9e2c47ac94e6bb33160822235a6d1f3f2147->leave($__internal_467436458fd3b3c41ff901f66a3b9e2c47ac94e6bb33160822235a6d1f3f2147_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:silex_form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 7,  22 => 2,);
    }
}
/* {# Widgets #}*/
/* */
/* {#*/
/*     This file doesn't seem to be used anymore ; commenting it for now in order not to mess with user's configurations.*/
/*     TODO: Remove it and all of its references*/
/* #}*/
/* */
/* {#*/
/* {% block choice_widget %}*/
/* {% spaceless %}*/
/*     {% if expanded %}*/
/*         <ul {{ block('widget_container_attributes') }} class="inputs-list">*/
/*         {% for child in form %}*/
/*             <li>*/
/*                 {% set form_widget_content %}*/
/*                     {{ form_widget(child) }}*/
/*                 {% endset %}*/
/*                 {{ form_label(child, null, { 'in_list_checkbox' : true, 'widget' : form_widget_content } ) }}*/
/*             </li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {% if empty_value is not none %}*/
/*             <option value="">{{ empty_value|trans({}, translation_domain) }}</option>*/
/*         {% endif %}*/
/*         {% if preferred_choices|length > 0 %}*/
/*             {% set options = preferred_choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*             {% if choices|length > 0 and separator is not none %}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         {% set options = choices %}*/
/*         {{ block('choice_widget_options') }}*/
/*     </select>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/* {% spaceless %}*/
/*     {% set type = type|default('text') %}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} value="{{ value }}">*/
/* {% endspaceless %}*/
/* {% endblock form_widget_simple %}*/
/* */
/* &#123;&#35; Labels &#35;&#125;*/
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if not compound %}*/
/*         {% set attr = attr|merge({'for': id}) %}*/
/*     {% endif %}*/
/*     {% if required %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' required'}) %}*/
/*     {% endif %}*/
/*     {% if in_list_checkbox is defined and in_list_checkbox and widget is defined %}*/
/*         <label{% for attrname,attrvalue in attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*             {{ widget|raw }}*/
/*             <span>*/
/*                 {{ label|trans({}, translation_domain) }}*/
/*             </span>*/
/*         </label>*/
/*     {% else %}*/
/*         <label{% for attrname,attrvalue in attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* &#123;&#35; Rows &#35;&#125;*/
/* */
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group {{ (0 < form_errors(form)|length)? 'has-error':'' }} ">*/
/*         {{ form_label(form, label|default(null)) }}*/
/*         <div class="col-sm-10 col-md-5">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* &#123;&#35; Misc &#35;&#125;*/
/* */
/* {% block form_errors %}*/
/* {% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*         {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}*/
/*             <div class="form-group has-error">*/
/*         {% endif %}*/
/*         <span class="help-block">*/
/*             {% for error in errors %}*/
/*                 {% if loop.first %}*/
/*                     {{ error.messageTemplate|trans(error.messageParameters, 'validators') }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         </span>*/
/*         {% if not form.parent  or 'repeated' in form.vars['block_prefixes'] %}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* #}*/
/* */

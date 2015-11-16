<?php

/* SonataAdminBundle:Helper:short-object-description.html.twig */
class __TwigTemplate_beffb692f7a85219c6d36907188f9e965822565bc5703f825da584a18765a02a extends Twig_Template
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
        $__internal_d8c6427b0f10e8075788fcd81b7cd237fbd9307846a57d8683cd3b757fe50a80 = $this->env->getExtension("native_profiler");
        $__internal_d8c6427b0f10e8075788fcd81b7cd237fbd9307846a57d8683cd3b757fe50a80->enter($__internal_d8c6427b0f10e8075788fcd81b7cd237fbd9307846a57d8683cd3b757fe50a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Helper:short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => (isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_d8c6427b0f10e8075788fcd81b7cd237fbd9307846a57d8683cd3b757fe50a80->leave($__internal_d8c6427b0f10e8075788fcd81b7cd237fbd9307846a57d8683cd3b757fe50a80_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Helper:short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <span class="inner-field-short-description">*/
/*     {% if object and admin.hasRoute('edit') and admin.isGranted('EDIT') %}*/
/*         <a href="{{ admin.generateObjectUrl('edit', object, link_parameters) }}" target="new">{{ description }}</a>*/
/*     {% else %}*/
/*         {{ description }}*/
/*     {% endif %}*/
/* </span>*/
/* */

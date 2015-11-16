<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d94eccdf1662a41eba2de809f59a2196b5f1341ece0acdcdee468288c34b9170 extends Twig_Template
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
        $__internal_c28d05ae3fbe39a91cb28d487b9528e8b2ab7be332b44ef62842a451c4cee77b = $this->env->getExtension("native_profiler");
        $__internal_c28d05ae3fbe39a91cb28d487b9528e8b2ab7be332b44ef62842a451c4cee77b->enter($__internal_c28d05ae3fbe39a91cb28d487b9528e8b2ab7be332b44ef62842a451c4cee77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c28d05ae3fbe39a91cb28d487b9528e8b2ab7be332b44ef62842a451c4cee77b->leave($__internal_c28d05ae3fbe39a91cb28d487b9528e8b2ab7be332b44ef62842a451c4cee77b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

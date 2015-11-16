<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_d24394a1bbd5dcc6c24f162415982e4cf1c5f9ee8301f1efc9eaf9c71761b539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SonataAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'sonata_type_native_collection_widget_row' => array($this, 'block_sonata_type_native_collection_widget_row'),
            'sonata_type_native_collection_widget' => array($this, 'block_sonata_type_native_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
            'sonata_type_model_autocomplete_widget' => array($this, 'block_sonata_type_model_autocomplete_widget'),
            'sonata_type_model_autocomplete_dropdown_item_format' => array($this, 'block_sonata_type_model_autocomplete_dropdown_item_format'),
            'sonata_type_model_autocomplete_selection_format' => array($this, 'block_sonata_type_model_autocomplete_selection_format'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af9073f06b8c122914d09740117c18defa0eb8145acff0abd3dd42b019a87bd6 = $this->env->getExtension("native_profiler");
        $__internal_af9073f06b8c122914d09740117c18defa0eb8145acff0abd3dd42b019a87bd6->enter($__internal_af9073f06b8c122914d09740117c18defa0eb8145acff0abd3dd42b019a87bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af9073f06b8c122914d09740117c18defa0eb8145acff0abd3dd42b019a87bd6->leave($__internal_af9073f06b8c122914d09740117c18defa0eb8145acff0abd3dd42b019a87bd6_prof);

    }

    // line 14
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_7fa1b2164dfeb5579c75cada29146a5f6aec4dd90bfe05121457c3dc68093d7a = $this->env->getExtension("native_profiler");
        $__internal_7fa1b2164dfeb5579c75cada29146a5f6aec4dd90bfe05121457c3dc68093d7a->enter($__internal_7fa1b2164dfeb5579c75cada29146a5f6aec4dd90bfe05121457c3dc68093d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 15
        $this->displayParentBlock("form_widget", $context, $blocks);
        echo "
    ";
        // line 16
        if ((array_key_exists("sonata_help", $context) && (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help")))) {
            // line 17
            echo "        <span class=\"help-block sonata-ba-field-widget-help\">";
            echo (isset($context["sonata_help"]) ? $context["sonata_help"] : $this->getContext($context, "sonata_help"));
            echo "</span>
    ";
        }
        
        $__internal_7fa1b2164dfeb5579c75cada29146a5f6aec4dd90bfe05121457c3dc68093d7a->leave($__internal_7fa1b2164dfeb5579c75cada29146a5f6aec4dd90bfe05121457c3dc68093d7a_prof);

    }

    // line 21
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_1ff02c2957996583c8ad076ff78f8218bdd2956a216a720176e6f7509983cdf5 = $this->env->getExtension("native_profiler");
        $__internal_1ff02c2957996583c8ad076ff78f8218bdd2956a216a720176e6f7509983cdf5->enter($__internal_1ff02c2957996583c8ad076ff78f8218bdd2956a216a720176e6f7509983cdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 22
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 23
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_1ff02c2957996583c8ad076ff78f8218bdd2956a216a720176e6f7509983cdf5->leave($__internal_1ff02c2957996583c8ad076ff78f8218bdd2956a216a720176e6f7509983cdf5_prof);

    }

    // line 26
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d524205a185fa2f742aaf81c5cd56d7ff5764f76fc67c3e8fca627d10a6463e4 = $this->env->getExtension("native_profiler");
        $__internal_d524205a185fa2f742aaf81c5cd56d7ff5764f76fc67c3e8fca627d10a6463e4->enter($__internal_d524205a185fa2f742aaf81c5cd56d7ff5764f76fc67c3e8fca627d10a6463e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 27
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
        // line 28
        echo "    ";
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        echo "
";
        
        $__internal_d524205a185fa2f742aaf81c5cd56d7ff5764f76fc67c3e8fca627d10a6463e4->leave($__internal_d524205a185fa2f742aaf81c5cd56d7ff5764f76fc67c3e8fca627d10a6463e4_prof);

    }

    // line 32
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c51db0434252d816e0c7ef4c52c863668179272a494c2a5abe16dc01ef8522f4 = $this->env->getExtension("native_profiler");
        $__internal_c51db0434252d816e0c7ef4c52c863668179272a494c2a5abe16dc01ef8522f4->enter($__internal_c51db0434252d816e0c7ef4c52c863668179272a494c2a5abe16dc01ef8522f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 33
        ob_start();
        // line 34
        echo "
    ";
        // line 35
        $context["label_class"] = "";
        // line 36
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 37
            echo "        ";
            $context["label_class"] = " control-label col-sm-3";
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        ";
            $context["label_class"] = " control-label";
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    ";
        // line 43
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 44
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))));
            // line 45
            echo "
        ";
            // line 46
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 47
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 48
                echo "        ";
            }
            // line 49
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 50
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 51
                echo "        ";
            }
            // line 52
            echo "
        ";
            // line 53
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 54
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 55
                echo "        ";
            }
            // line 56
            echo "
        ";
            // line 57
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : $this->getContext($context, "in_list_checkbox"))) && array_key_exists("widget", $context))) {
                // line 58
                echo "            <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 59
                echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                echo "
                <span>
                    ";
                // line 61
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 66
                echo "                </span>
            </label>
        ";
            } else {
                // line 69
                echo "            <label";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 70
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 73
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 75
                echo "            </label>
        ";
            }
            // line 77
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c51db0434252d816e0c7ef4c52c863668179272a494c2a5abe16dc01ef8522f4->leave($__internal_c51db0434252d816e0c7ef4c52c863668179272a494c2a5abe16dc01ef8522f4_prof);

    }

    // line 81
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        $__internal_e6048ce895dc4394d85478d60889710c6e6d911733bdb57a584a594b0252ee0b = $this->env->getExtension("native_profiler");
        $__internal_e6048ce895dc4394d85478d60889710c6e6d911733bdb57a584a594b0252ee0b->enter($__internal_e6048ce895dc4394d85478d60889710c6e6d911733bdb57a584a594b0252ee0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes_choice_widget"));

        // line 82
        echo "    ";
        ob_start();
        // line 83
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            if (($context["attrname"] == "class")) {
                echo "list-unstyled ";
            }
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")))) {
            echo "class=\"list-unstyled\"";
        }
        // line 86
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e6048ce895dc4394d85478d60889710c6e6d911733bdb57a584a594b0252ee0b->leave($__internal_e6048ce895dc4394d85478d60889710c6e6d911733bdb57a584a594b0252ee0b_prof);

    }

    // line 89
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e7a31945c8e8dd3d1e18c437fb732253380947e102d439581fec9231b154ce96 = $this->env->getExtension("native_profiler");
        $__internal_e7a31945c8e8dd3d1e18c437fb732253380947e102d439581fec9231b154ce96->enter($__internal_e7a31945c8e8dd3d1e18c437fb732253380947e102d439581fec9231b154ce96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 90
        ob_start();
        // line 91
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 93
            echo "            <li>
                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 95
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e7a31945c8e8dd3d1e18c437fb732253380947e102d439581fec9231b154ce96->leave($__internal_e7a31945c8e8dd3d1e18c437fb732253380947e102d439581fec9231b154ce96_prof);

    }

    // line 102
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_86c1cfe4c928963055c0158cd931838bae08d8d8a61dd00adf3787e823defdd9 = $this->env->getExtension("native_profiler");
        $__internal_86c1cfe4c928963055c0158cd931838bae08d8d8a61dd00adf3787e823defdd9->enter($__internal_86c1cfe4c928963055c0158cd931838bae08d8d8a61dd00adf3787e823defdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 103
        ob_start();
        // line 104
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 105
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 107
                echo "            <li>
                ";
                // line 108
                ob_start();
                // line 109
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
                echo " ";
                // line 110
                echo "                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 111
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : $this->getContext($context, "form_widget_content"))) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "label", array()), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "        </ul>
    ";
        } else {
            // line 116
            echo "    ";
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "use_select2"), "method"))) {
                // line 117
                echo "        ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control")));
                // line 118
                echo "    ";
            }
            // line 119
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 120
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 121
                echo "            <option value=\"\">
                ";
                // line 122
                if ( !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array())) {
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                } else {
                    // line 125
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "html", null, true);
                }
                // line 127
                echo "            </option>
        ";
            }
            // line 129
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 130
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 131
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 132
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0)) {
                    // line 133
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                    echo "</option>
            ";
                }
                // line 135
                echo "        ";
            }
            // line 136
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 137
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_86c1cfe4c928963055c0158cd931838bae08d8d8a61dd00adf3787e823defdd9->leave($__internal_86c1cfe4c928963055c0158cd931838bae08d8d8a61dd00adf3787e823defdd9_prof);

    }

    // line 143
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_911699b01bdfeb7fab5ddce5f75de1d4192ad5fa654326fc15602864f2c8a5cd = $this->env->getExtension("native_profiler");
        $__internal_911699b01bdfeb7fab5ddce5f75de1d4192ad5fa654326fc15602864f2c8a5cd->enter($__internal_911699b01bdfeb7fab5ddce5f75de1d4192ad5fa654326fc15602864f2c8a5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 144
        echo "    ";
        $context["label_class"] = "";
        // line 145
        echo "    ";
        $context["div_class"] = "";
        // line 146
        echo "    ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 147
            echo "        ";
            $context["label_class"] = "control-label col-sm-3";
            // line 148
            echo "        ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 149
            echo "    ";
        } else {
            // line 150
            echo "        ";
            $context["label_class"] = "control-label";
            // line 151
            echo "    ";
        }
        // line 152
        echo "
    ";
        // line 153
        if ((( !array_key_exists("sonata_admin", $context) ||  !(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled"))) ||  !$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 154
            echo "        <div class=\"form-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\">
            ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"";
            // line 156
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 157
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 158
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 159
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 160
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 163
            echo "            </div>
        </div>
    ";
        } else {
            // line 166
            echo "        <div class=\"form-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo " has-error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
            ";
            // line 167
            $this->displayBlock('label', $context, $blocks);
            // line 174
            echo "
            ";
            // line 175
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) ||  !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false));
            // line 176
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
            echo " sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ( !(isset($context["has_label"]) ? $context["has_label"] : $this->getContext($context, "has_label"))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 178
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
            echo " ";
            // line 179
            echo "
                ";
            // line 180
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 181
                echo "                    <div class=\"help-block sonata-ba-field-error-messages\">
                        ";
                // line 182
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                    </div>
                ";
            }
            // line 185
            echo "
                ";
            // line 186
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array())) {
                // line 187
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "help", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "translationDomain", array())), "method");
                echo "</span>
                ";
            }
            // line 189
            echo "            </div>
        </div>
    ";
        }
        
        $__internal_911699b01bdfeb7fab5ddce5f75de1d4192ad5fa654326fc15602864f2c8a5cd->leave($__internal_911699b01bdfeb7fab5ddce5f75de1d4192ad5fa654326fc15602864f2c8a5cd_prof);

    }

    // line 167
    public function block_label($context, array $blocks = array())
    {
        $__internal_aa07a692487cc8e944098a6e083989acfb7f4239b4b661e57c704c6df51be3a7 = $this->env->getExtension("native_profiler");
        $__internal_aa07a692487cc8e944098a6e083989acfb7f4239b4b661e57c704c6df51be3a7->enter($__internal_aa07a692487cc8e944098a6e083989acfb7f4239b4b661e57c704c6df51be3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 168
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 169
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 171
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("attr" => array("class" => (isset($context["label_class"]) ? $context["label_class"] : $this->getContext($context, "label_class")))) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 173
        echo "            ";
        
        $__internal_aa07a692487cc8e944098a6e083989acfb7f4239b4b661e57c704c6df51be3a7->leave($__internal_aa07a692487cc8e944098a6e083989acfb7f4239b4b661e57c704c6df51be3a7_prof);

    }

    // line 194
    public function block_sonata_type_native_collection_widget_row($context, array $blocks = array())
    {
        $__internal_b2adc176f99310e1d0883c35b8903fb34af4aca2f95863b928c2e6046440250a = $this->env->getExtension("native_profiler");
        $__internal_b2adc176f99310e1d0883c35b8903fb34af4aca2f95863b928c2e6046440250a->enter($__internal_b2adc176f99310e1d0883c35b8903fb34af4aca2f95863b928c2e6046440250a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget_row"));

        // line 195
        ob_start();
        // line 196
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 197
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
            // line 198
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"fa fa-minus-circle\"></i></a>
        ";
        }
        // line 200
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b2adc176f99310e1d0883c35b8903fb34af4aca2f95863b928c2e6046440250a->leave($__internal_b2adc176f99310e1d0883c35b8903fb34af4aca2f95863b928c2e6046440250a_prof);

    }

    // line 205
    public function block_sonata_type_native_collection_widget($context, array $blocks = array())
    {
        $__internal_57a0de73c831b2d89ce0de1036085b070325e9e01fc65d68034b9b072985e378 = $this->env->getExtension("native_profiler");
        $__internal_57a0de73c831b2d89ce0de1036085b070325e9e01fc65d68034b9b072985e378->enter($__internal_57a0de73c831b2d89ce0de1036085b070325e9e01fc65d68034b9b072985e378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_native_collection_widget"));

        // line 206
        ob_start();
        // line 207
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 208
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 209
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("sonata_type_native_collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), "vars", array()), "name", array()), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : (""))));
            // line 210
            echo "    ";
        }
        // line 211
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 214
            echo "            ";
            $this->displayBlock("sonata_type_native_collection_widget_row", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        ";
        // line 217
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 218
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"fa fa-plus-circle\"></i></a></div>
        ";
        }
        // line 220
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_57a0de73c831b2d89ce0de1036085b070325e9e01fc65d68034b9b072985e378->leave($__internal_57a0de73c831b2d89ce0de1036085b070325e9e01fc65d68034b9b072985e378_prof);

    }

    // line 224
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        $__internal_804a81365f06dc93e8a39898049502ecf43f5a30d5495a0ab81abb3d425798ac = $this->env->getExtension("native_profiler");
        $__internal_804a81365f06dc93e8a39898049502ecf43f5a30d5495a0ab81abb3d425798ac->enter($__internal_804a81365f06dc93e8a39898049502ecf43f5a30d5495a0ab81abb3d425798ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget"));

        // line 225
        echo "    ";
        ob_start();
        // line 226
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 227
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 230
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "
            ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_804a81365f06dc93e8a39898049502ecf43f5a30d5495a0ab81abb3d425798ac->leave($__internal_804a81365f06dc93e8a39898049502ecf43f5a30d5495a0ab81abb3d425798ac_prof);

    }

    // line 238
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        $__internal_d0c9423219aeb310015941271c2bea3e3c76f3a3cbc1f952214a9bd62275c579 = $this->env->getExtension("native_profiler");
        $__internal_d0c9423219aeb310015941271c2bea3e3c76f3a3cbc1f952214a9bd62275c579->enter($__internal_d0c9423219aeb310015941271c2bea3e3c76f3a3cbc1f952214a9bd62275c579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_immutable_array_widget_row"));

        // line 239
        echo "    ";
        ob_start();
        // line 240
        echo "        <div class=\"form-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
        echo "\">

            ";
        // line 242
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'label');
        echo "

            ";
        // line 244
        $context["div_class"] = "";
        // line 245
        echo "            ";
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getConfigurationPool", array(), "method"), "getOption", array(0 => "form_type"), "method") == "horizontal"))) {
            // line 246
            echo "                ";
            $context["div_class"] = "col-sm-9 col-md-9";
            // line 247
            echo "            ";
        }
        // line 248
        echo "
            <div class=\"";
        // line 249
        echo twig_escape_filter($this->env, (isset($context["div_class"]) ? $context["div_class"] : $this->getContext($context, "div_class")), "html", null, true);
        echo " sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "inline", array()), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget', array("horizontal" => false, "horizontal_input_wrapper_class" => ""));
        echo " ";
        // line 251
        echo "            </div>

            ";
        // line 253
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 254
            echo "                <div class=\"help-block sonata-ba-field-error-messages\">
                    ";
            // line 255
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'errors');
            echo "
                </div>
            ";
        }
        // line 258
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d0c9423219aeb310015941271c2bea3e3c76f3a3cbc1f952214a9bd62275c579->leave($__internal_d0c9423219aeb310015941271c2bea3e3c76f3a3cbc1f952214a9bd62275c579_prof);

    }

    // line 262
    public function block_sonata_type_model_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_64b461f6cc792df008dc6ac54e55ee4685db447903847cc080d26594aee2b66f = $this->env->getExtension("native_profiler");
        $__internal_64b461f6cc792df008dc6ac54e55ee4685db447903847cc080d26594aee2b66f->enter($__internal_64b461f6cc792df008dc6ac54e55ee4685db447903847cc080d26594aee2b66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_widget"));

        // line 263
        ob_start();
        // line 264
        echo "
    ";
        // line 265
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "

    ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 268
            echo "        ";
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 269
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
            }
            // line 271
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "
    <script>
        (function (\$) {
            var autocompleteInput = \$(\"#";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\");
            autocompleteInput.select2({
                placeholder: \"";
        // line 277
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), "html", null, true);
        echo "\",
                allowClear: ";
        // line 278
        echo (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) ? ("false") : ("true"));
        echo ",
                enable: ";
        // line 279
        echo (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) ? ("false") : ("true"));
        echo ",
                readonly: ";
        // line 280
        echo (((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) ? ("true") : ("false"));
        echo ",
                minimumInputLength: ";
        // line 281
        echo twig_escape_filter($this->env, (isset($context["minimum_input_length"]) ? $context["minimum_input_length"] : $this->getContext($context, "minimum_input_length")), "html", null, true);
        echo ",
                multiple: ";
        // line 282
        echo (((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) ? ("true") : ("false"));
        echo ",
                ajax: {
                    url:  \"";
        // line 284
        echo twig_escape_filter($this->env, (((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) ? ((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) : (twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "name", array()), (($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["route"]) ? $context["route"] : null), "parameters", array()), array())) : (array()))), "js"))), "html", null, true);
        echo "\",
                    dataType: 'json',
                    quietMillis: 100,
                    data: function (term, page) { // page is the one-based page number tracked by Select2
                        return {
                                //search term
                                \"";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["req_param_name_search"]) ? $context["req_param_name_search"] : $this->getContext($context, "req_param_name_search")), "html", null, true);
        echo "\": term,

                                // page size
                                \"";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["req_param_name_items_per_page"]) ? $context["req_param_name_items_per_page"] : $this->getContext($context, "req_param_name_items_per_page")), "html", null, true);
        echo "\": ";
        echo twig_escape_filter($this->env, (isset($context["items_per_page"]) ? $context["items_per_page"] : $this->getContext($context, "items_per_page")), "html", null, true);
        echo ",

                                // page number
                                \"";
        // line 296
        echo twig_escape_filter($this->env, (isset($context["req_param_name_page_number"]) ? $context["req_param_name_page_number"] : $this->getContext($context, "req_param_name_page_number")), "html", null, true);
        echo "\": page,

                                // admin
                                'uniqid': \"";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "uniqid", array()), "html", null, true);
        echo "\",
                                'code':   \"";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "code", array()), "html", null, true);
        echo "\",
                                'field':  \"";
        // line 301
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\"

                                // other parameters
                                ";
        // line 304
        if ( !twig_test_empty((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")))) {
            echo ",";
            // line 305
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["req_params"]) ? $context["req_params"] : $this->getContext($context, "req_params")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 306
                echo "\"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["key"], "js"), "html", null, true);
                echo "\": \"";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["value"], "js"), "html", null, true);
                echo "\"";
                // line 307
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 310
        echo "                            };
                    },
                    results: function (data, page) {
                        // notice we return the value of more so Select2 knows if more results can be loaded
                        return {results: data.items, more: data.more};
                    }
                },
                formatResult: function (item) {
                    return ";
        // line 318
        $this->displayBlock('sonata_type_model_autocomplete_dropdown_item_format', $context, $blocks);
        echo ";// format of one dropdown item
                },
                formatSelection: function (item) {
                    return ";
        // line 321
        $this->displayBlock('sonata_type_model_autocomplete_selection_format', $context, $blocks);
        echo ";// format selected item '<b>'+item.label+'</b>';
                },
                dropdownCssClass: \"";
        // line 323
        echo twig_escape_filter($this->env, (isset($context["dropdown_css_class"]) ? $context["dropdown_css_class"] : $this->getContext($context, "dropdown_css_class")), "html", null, true);
        echo "\",
                escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results
            });

            autocompleteInput.on(\"change\", function(e) {

                // console.log(\"change \"+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));

                // add new input
                var el = null;
                if (undefined !== e.added) {

                    var addedItems = e.added;

                    if(!\$.isArray(addedItems)) {
                        addedItems = [addedItems];
                    }

                    var length = addedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = addedItems[i];
                        \$(\"#";
        // line 344
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\").append('<input type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "[]\" value=\"'+el.id+'\" />');
                    }
                }

                // remove input
                if (undefined !== e.removed && null !== e.removed) {
                    var removedItems = e.removed;

                    if(!\$.isArray(removedItems)) {
                        removedItems = [removedItems];
                    }

                    var length = removedItems.length;
                    for (var i = 0; i < length; i++) {
                        el = removedItems[i];
                        \$('#";
        // line 359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identifiers", array()), "vars", array()), "id", array()), "html", null, true);
        echo " input:hidden[value=\"'+el.id+'\"]').remove();
                    }
                }
            });

            // Initialise the autocomplete
            var data = [];
            ";
        // line 366
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 367
            echo "data = [";
            // line 368
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["label_text"]) {
                // line 369
                echo "{id: '";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), $context["key"], array(), "array"), "js"), "html", null, true);
                echo "', label:'";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $context["label_text"], "js"), "html", null, true);
                echo "'}";
                // line 370
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['label_text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "];";
        } elseif ($this->getAttribute($this->getAttribute(        // line 373
(isset($context["value"]) ? $context["value"] : null), "labels", array(), "any", false, true), 0, array(), "array", true, true)) {
            // line 374
            echo "data = {id: '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "identifiers", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "', label:'";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "labels", array()), 0, array(), "array"), "js"), "html", null, true);
            echo "'};";
        }
        // line 376
        echo "            if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set
                autocompleteInput.select2('data', data);
            }
        })(jQuery);
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_64b461f6cc792df008dc6ac54e55ee4685db447903847cc080d26594aee2b66f->leave($__internal_64b461f6cc792df008dc6ac54e55ee4685db447903847cc080d26594aee2b66f_prof);

    }

    // line 318
    public function block_sonata_type_model_autocomplete_dropdown_item_format($context, array $blocks = array())
    {
        $__internal_3e652d722b52ffba8e93d9e6d24704bd0c1980a6f3ac7573b1a88e949f533009 = $this->env->getExtension("native_profiler");
        $__internal_3e652d722b52ffba8e93d9e6d24704bd0c1980a6f3ac7573b1a88e949f533009->enter($__internal_3e652d722b52ffba8e93d9e6d24704bd0c1980a6f3ac7573b1a88e949f533009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_dropdown_item_format"));

        echo "'<div class=\"sonata-autocomplete-dropdown-item\">'+item.label+'</div>'";
        
        $__internal_3e652d722b52ffba8e93d9e6d24704bd0c1980a6f3ac7573b1a88e949f533009->leave($__internal_3e652d722b52ffba8e93d9e6d24704bd0c1980a6f3ac7573b1a88e949f533009_prof);

    }

    // line 321
    public function block_sonata_type_model_autocomplete_selection_format($context, array $blocks = array())
    {
        $__internal_5208e2204419fc330550f48409b9c001273265ce7c05542f8c914bc90b4c5007 = $this->env->getExtension("native_profiler");
        $__internal_5208e2204419fc330550f48409b9c001273265ce7c05542f8c914bc90b4c5007->enter($__internal_5208e2204419fc330550f48409b9c001273265ce7c05542f8c914bc90b4c5007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_autocomplete_selection_format"));

        echo "item.label";
        
        $__internal_5208e2204419fc330550f48409b9c001273265ce7c05542f8c914bc90b4c5007->leave($__internal_5208e2204419fc330550f48409b9c001273265ce7c05542f8c914bc90b4c5007_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1199 => 321,  1187 => 318,  1174 => 376,  1167 => 374,  1165 => 373,  1163 => 372,  1147 => 370,  1141 => 369,  1124 => 368,  1122 => 367,  1120 => 366,  1110 => 359,  1090 => 344,  1066 => 323,  1061 => 321,  1055 => 318,  1045 => 310,  1028 => 307,  1022 => 306,  1005 => 305,  1002 => 304,  996 => 301,  992 => 300,  988 => 299,  982 => 296,  974 => 293,  968 => 290,  959 => 284,  954 => 282,  950 => 281,  946 => 280,  942 => 279,  938 => 278,  934 => 277,  929 => 275,  924 => 272,  918 => 271,  912 => 269,  909 => 268,  905 => 267,  900 => 265,  897 => 264,  895 => 263,  889 => 262,  880 => 258,  874 => 255,  871 => 254,  869 => 253,  865 => 251,  862 => 250,  850 => 249,  847 => 248,  844 => 247,  841 => 246,  838 => 245,  836 => 244,  831 => 242,  819 => 240,  816 => 239,  810 => 238,  799 => 233,  796 => 232,  779 => 230,  762 => 229,  757 => 227,  752 => 226,  749 => 225,  743 => 224,  734 => 220,  730 => 218,  728 => 217,  723 => 216,  706 => 214,  689 => 213,  685 => 212,  680 => 211,  677 => 210,  674 => 209,  671 => 208,  668 => 207,  666 => 206,  660 => 205,  648 => 200,  644 => 198,  642 => 197,  639 => 196,  637 => 195,  631 => 194,  624 => 173,  618 => 171,  612 => 169,  609 => 168,  603 => 167,  593 => 189,  587 => 187,  585 => 186,  582 => 185,  576 => 182,  573 => 181,  571 => 180,  568 => 179,  565 => 178,  547 => 176,  545 => 175,  542 => 174,  540 => 167,  531 => 166,  526 => 163,  520 => 160,  517 => 159,  514 => 158,  511 => 157,  505 => 156,  501 => 155,  494 => 154,  492 => 153,  489 => 152,  486 => 151,  483 => 150,  480 => 149,  477 => 148,  474 => 147,  471 => 146,  468 => 145,  465 => 144,  459 => 143,  446 => 137,  443 => 136,  440 => 135,  434 => 133,  432 => 132,  427 => 131,  424 => 130,  421 => 129,  417 => 127,  414 => 125,  411 => 123,  409 => 122,  406 => 121,  404 => 120,  396 => 119,  393 => 118,  390 => 117,  387 => 116,  383 => 114,  373 => 111,  370 => 110,  366 => 109,  364 => 108,  361 => 107,  357 => 106,  352 => 105,  349 => 104,  347 => 103,  341 => 102,  332 => 98,  322 => 95,  319 => 94,  316 => 93,  312 => 92,  307 => 91,  305 => 90,  299 => 89,  291 => 86,  286 => 85,  271 => 84,  266 => 83,  263 => 82,  257 => 81,  248 => 77,  244 => 75,  238 => 73,  235 => 71,  233 => 70,  217 => 69,  212 => 66,  209 => 64,  206 => 62,  204 => 61,  199 => 59,  183 => 58,  181 => 57,  178 => 56,  175 => 55,  172 => 54,  170 => 53,  167 => 52,  164 => 51,  161 => 50,  158 => 49,  155 => 48,  152 => 47,  150 => 46,  147 => 45,  144 => 44,  141 => 43,  138 => 41,  135 => 40,  132 => 39,  129 => 38,  126 => 37,  123 => 36,  121 => 35,  118 => 34,  116 => 33,  110 => 32,  100 => 28,  97 => 27,  91 => 26,  81 => 23,  78 => 22,  72 => 21,  61 => 17,  59 => 16,  55 => 15,  49 => 14,  11 => 12,);
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
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_widget -%}*/
/*     {{ parent() }}*/
/*     {% if sonata_help is defined and sonata_help %}*/
/*         <span class="help-block sonata-ba-field-widget-help">{{ sonata_help|raw }}</span>*/
/*     {% endif %}*/
/* {%- endblock form_widget %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget %}*/
/*     {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {{ parent() }}*/
/* {% endblock textarea_widget %}*/
/* */
/* {# Labels #}*/
/* {% block form_label %}*/
/* {% spaceless %}*/
/* */
/*     {% set label_class = "" %}*/
/*     {% if sonata_admin.admin and sonata_admin.admin.getConfigurationPool().getOption('form_type') == 'horizontal' %}*/
/*         {% set label_class = " control-label col-sm-3" %}*/
/*     {% else %}*/
/*         {% set label_class = " control-label" %}*/
/*     {% endif%}*/
/* */
/*     {#{{ sonata_admin.admin.getConfigurationPool().getOption('form_type') }}#}*/
/*     {% if label is not same as(false) %}*/
/*         {% set label_attr = label_attr|merge({'class': label_attr.class|default('') ~ label_class }) %}*/
/* */
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/* */
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/* */
/*         {% if in_list_checkbox is defined and in_list_checkbox and widget is defined %}*/
/*             <label{% for attrname,attrvalue in attr %} {{attrname}}="{{attrvalue}}"{% endfor %}>*/
/*                 {{ widget|raw }}*/
/*                 <span>*/
/*                     {% if not sonata_admin.admin %}*/
/*                         {{- label|trans({}, translation_domain) -}}*/
/*                     {% else %}*/
/*                         {{- label|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                     {% endif%}*/
/*                 </span>*/
/*             </label>*/
/*         {% else %}*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*                 {% if not sonata_admin.admin%}*/
/*                     {{- label|trans({}, translation_domain) -}}*/
/*                 {% else %}*/
/*                     {{ sonata_admin.admin.trans(label, {}, sonata_admin.field_description.translationDomain) }}*/
/*                 {% endif %}*/
/*             </label>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block widget_container_attributes_choice_widget %}*/
/*     {% spaceless %}*/
/*         id="{{ id }}"*/
/*         {% for attrname,attrvalue in attr %}{{attrname}}="{% if attrname == 'class' %}list-unstyled {% endif%}{{attrvalue}}" {% endfor %}*/
/*         {% if "class" not in attr %}class="list-unstyled"{%endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block choice_widget_expanded %}*/
/* {% spaceless %}*/
/*     <ul {{ block('widget_container_attributes') }}>*/
/*         {% for child in form %}*/
/*             <li>*/
/*                 {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*                 {{ form_label(child) }}*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block choice_widget %}*/
/* {% spaceless %}*/
/*     {% if compound %}*/
/*         <ul {{ block('widget_container_attributes_choice_widget') }}>*/
/*         {% for child in form %}*/
/*             <li>*/
/*                 {% set form_widget_content %}*/
/*                     {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*                 {% endset %}*/
/*                 {{ form_label(child, child.vars.label|default(null), { 'in_list_checkbox' : true, 'widget' : form_widget_content } ) }}*/
/*             </li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*     {% else %}*/
/*     {% if sonata_admin.admin and not sonata_admin.admin.getConfigurationPool().getOption('use_select2') %}*/
/*         {% set attr = attr|merge({'class': attr.class|default('') ~ ' form-control'}) %}*/
/*     {% endif %}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {% if empty_value is not none %}*/
/*             <option value="">*/
/*                 {% if not sonata_admin.admin %}*/
/*                     {{- empty_value|trans({}, translation_domain) -}}*/
/*                 {% else %}*/
/*                     {{- empty_value|trans({}, sonata_admin.field_description.translationDomain) -}}*/
/*                 {% endif%}*/
/*             </option>*/
/*         {% endif %}*/
/*         {% if preferred_choices|length > 0 %}*/
/*             {% set options = preferred_choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*             {% if choices|length > 0 %}*/
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
/* {% block form_row %}*/
/*     {% set label_class = "" %}*/
/*     {% set div_class = "" %}*/
/*     {% if sonata_admin.admin and sonata_admin.admin.getConfigurationPool().getOption('form_type') == 'horizontal' %}*/
/*         {% set label_class = "control-label col-sm-3" %}*/
/*         {% set div_class = "col-sm-9 col-md-9" %}*/
/*     {% else %}*/
/*         {% set label_class = "control-label" %}*/
/*     {% endif%}*/
/* */
/*     {% if sonata_admin is not defined or not sonata_admin_enabled or not sonata_admin.field_description %}*/
/*         <div class="form-group {% if errors|length > 0%} has-error{% endif %}">*/
/*             {{ form_label(form, label|default(null)) }}*/
/*             <div class="{% if label is same as(false) %}sonata-collection-row-without-label{% endif %}">*/
/*                 {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*                 {% if errors|length > 0 %}*/
/*                     <div class="help-block sonata-ba-field-error-messages">*/
/*                         {{ form_errors(form) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="form-group{% if errors|length > 0%} has-error{%endif%}" id="sonata-ba-field-container-{{ id }}">*/
/*             {% block label %}*/
/*                 {% if sonata_admin.field_description.options.name is defined %}*/
/*                     {{ form_label(form, sonata_admin.field_description.options.name, { 'attr' : {'class' : label_class} }) }}*/
/*                 {% else %}*/
/*                     {{ form_label(form, label|default(null), { 'attr' : {'class' : label_class} }) }}*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/* */
/*             {% set has_label = sonata_admin.field_description.options.name is defined or label is not same as(false) %}*/
/*             <div class="{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if errors|length > 0 %}sonata-ba-field-error{% endif %} {% if not has_label %}sonata-collection-row-without-label{% endif %}">*/
/* */
/*                 {{ form_widget(form, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/* */
/*                 {% if errors|length > 0 %}*/
/*                     <div class="help-block sonata-ba-field-error-messages">*/
/*                         {{ form_errors(form) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if sonata_admin.field_description.help %}*/
/*                     <span class="help-block sonata-ba-field-help">{{ sonata_admin.admin.trans(sonata_admin.field_description.help, {}, sonata_admin.field_description.translationDomain)|raw }}</span>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_row %}*/
/* */
/* {% block sonata_type_native_collection_widget_row %}*/
/* {% spaceless %}*/
/*     <div class="sonata-collection-row">*/
/*         {% if allow_delete %}*/
/*             <a href="#" class="btn sonata-collection-delete"><i class="fa fa-minus-circle"></i></a>*/
/*         {% endif %}*/
/*         {{ form_row(child) }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget_row %}*/
/* */
/* {% block sonata_type_native_collection_widget %}*/
/* {% spaceless %}*/
/*     {% if prototype is defined %}*/
/*         {% set child = prototype %}*/
/*         {% set attr = attr|merge({'data-prototype': block('sonata_type_native_collection_widget_row'), 'data-prototype-name': prototype.vars.name, 'class': attr.class|default('') }) %}*/
/*     {% endif %}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {{ form_errors(form) }}*/
/*         {% for child in form %}*/
/*             {{ block('sonata_type_native_collection_widget_row') }}*/
/*         {% endfor %}*/
/*         {{ form_rest(form) }}*/
/*         {% if allow_add %}*/
/*             <div><a href="#" class="btn sonata-collection-add"><i class="fa fa-plus-circle"></i></a></div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_native_collection_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget %}*/
/*     {% spaceless %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_errors(form) }}*/
/* */
/*             {% for key, child in form %}*/
/*                 {{ block('sonata_type_immutable_array_widget_row') }}*/
/*             {% endfor %}*/
/* */
/*             {{ form_rest(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock sonata_type_immutable_array_widget %}*/
/* */
/* {% block sonata_type_immutable_array_widget_row %}*/
/*     {% spaceless %}*/
/*         <div class="form-group{% if errors|length > 0%} error{%endif%}" id="sonata-ba-field-container-{{ id }}-{{ key }}">*/
/* */
/*             {{ form_label(child) }}*/
/* */
/*             {% set div_class = "" %}*/
/*             {% if sonata_admin.admin and sonata_admin.admin.getConfigurationPool().getOption('form_type') == 'horizontal' %}*/
/*                 {% set div_class = "col-sm-9 col-md-9" %}*/
/*             {% endif%}*/
/* */
/*             <div class="{{ div_class }} sonata-ba-field sonata-ba-field-{{ sonata_admin.edit }}-{{ sonata_admin.inline }} {% if errors|length > 0 %}sonata-ba-field-error{% endif %}">*/
/*                 {{ form_widget(child, {'horizontal': false, 'horizontal_input_wrapper_class': ''}) }} {# {'horizontal': false, 'horizontal_input_wrapper_class': ''} needed to avoid MopaBootstrapBundle messing with the DOM #}*/
/*             </div>*/
/* */
/*             {% if errors|length > 0 %}*/
/*                 <div class="help-block sonata-ba-field-error-messages">*/
/*                     {{ form_errors(child) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block sonata_type_model_autocomplete_widget %}*/
/* {% spaceless %}*/
/* */
/*     {{ form_widget(form.title) }}*/
/* */
/*     {% for child in form %}*/
/*         {% if not child.rendered %}*/
/*             {{ form_widget(child) }}*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* */
/*     <script>*/
/*         (function ($) {*/
/*             var autocompleteInput = $("#{{ form.title.vars.id }}");*/
/*             autocompleteInput.select2({*/
/*                 placeholder: "{{ placeholder }}",*/
/*                 allowClear: {{ required ? 'false' : 'true' }},*/
/*                 enable: {{ disabled ? 'false' : 'true' }},*/
/*                 readonly: {{ read_only ? 'true' : 'false' }},*/
/*                 minimumInputLength: {{ minimum_input_length }},*/
/*                 multiple: {{ multiple ? 'true' : 'false' }},*/
/*                 ajax: {*/
/*                     url:  "{{ url ?: url(route.name, route.parameters|default([]))|e('js') }}",*/
/*                     dataType: 'json',*/
/*                     quietMillis: 100,*/
/*                     data: function (term, page) { // page is the one-based page number tracked by Select2*/
/*                         return {*/
/*                                 //search term*/
/*                                 "{{ req_param_name_search }}": term,*/
/* */
/*                                 // page size*/
/*                                 "{{ req_param_name_items_per_page }}": {{ items_per_page }},*/
/* */
/*                                 // page number*/
/*                                 "{{ req_param_name_page_number }}": page,*/
/* */
/*                                 // admin*/
/*                                 'uniqid': "{{ sonata_admin.admin.uniqid }}",*/
/*                                 'code':   "{{ sonata_admin.admin.code }}",*/
/*                                 'field':  "{{ name }}"*/
/* */
/*                                 // other parameters*/
/*                                 {% if req_params is not empty %},*/
/*                                     {%- for key, value in req_params -%}*/
/*                                         "{{- key|e('js') -}}": "{{- value|e('js') -}}"*/
/*                                         {%- if not loop.last -%}, {% endif -%}*/
/*                                     {%- endfor -%}*/
/*                                 {% endif %}*/
/*                             };*/
/*                     },*/
/*                     results: function (data, page) {*/
/*                         // notice we return the value of more so Select2 knows if more results can be loaded*/
/*                         return {results: data.items, more: data.more};*/
/*                     }*/
/*                 },*/
/*                 formatResult: function (item) {*/
/*                     return {% block sonata_type_model_autocomplete_dropdown_item_format %}'<div class="sonata-autocomplete-dropdown-item">'+item.label+'</div>'{% endblock %};// format of one dropdown item*/
/*                 },*/
/*                 formatSelection: function (item) {*/
/*                     return {% block sonata_type_model_autocomplete_selection_format %}item.label{% endblock %};// format selected item '<b>'+item.label+'</b>';*/
/*                 },*/
/*                 dropdownCssClass: "{{ dropdown_css_class }}",*/
/*                 escapeMarkup: function (m) { return m; } // we do not want to escape markup since we are displaying html in results*/
/*             });*/
/* */
/*             autocompleteInput.on("change", function(e) {*/
/* */
/*                 // console.log("change "+JSON.stringify({val:e.val, added:e.added, removed:e.removed}));*/
/* */
/*                 // add new input*/
/*                 var el = null;*/
/*                 if (undefined !== e.added) {*/
/* */
/*                     var addedItems = e.added;*/
/* */
/*                     if(!$.isArray(addedItems)) {*/
/*                         addedItems = [addedItems];*/
/*                     }*/
/* */
/*                     var length = addedItems.length;*/
/*                     for (var i = 0; i < length; i++) {*/
/*                         el = addedItems[i];*/
/*                         $("#{{ form.identifiers.vars.id }}").append('<input type="hidden" name="{{ form.identifiers.vars.full_name }}[]" value="'+el.id+'" />');*/
/*                     }*/
/*                 }*/
/* */
/*                 // remove input*/
/*                 if (undefined !== e.removed && null !== e.removed) {*/
/*                     var removedItems = e.removed;*/
/* */
/*                     if(!$.isArray(removedItems)) {*/
/*                         removedItems = [removedItems];*/
/*                     }*/
/* */
/*                     var length = removedItems.length;*/
/*                     for (var i = 0; i < length; i++) {*/
/*                         el = removedItems[i];*/
/*                         $('#{{ form.identifiers.vars.id }} input:hidden[value="'+el.id+'"]').remove();*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             // Initialise the autocomplete*/
/*             var data = [];*/
/*             {% if multiple -%}*/
/*                 data = [*/
/*                 {%- for key, label_text in value.labels -%}*/
/*                     {id: '{{ value.identifiers[key]|e('js') }}', label:'{{ label_text|e('js') }}'}*/
/*                     {%- if not loop.last -%}, {% endif -%}*/
/*                 {%- endfor -%}*/
/*                 ];*/
/*             {%- elseif value.labels[0] is defined -%}*/
/*                 data = {id: '{{ value.identifiers[0]|e('js') }}', label:'{{ value.labels[0]|e('js') }}'};*/
/*             {%- endif  %}*/
/*             if (undefined==data.length || 0<data.length) { // Leave placeholder if no data set*/
/*                 autocompleteInput.select2('data', data);*/
/*             }*/
/*         })(jQuery);*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock sonata_type_model_autocomplete_widget %}*/
/* */

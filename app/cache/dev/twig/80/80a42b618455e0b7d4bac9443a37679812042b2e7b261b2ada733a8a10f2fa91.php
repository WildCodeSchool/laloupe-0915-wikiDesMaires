<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_f421f1fe7d8bc9fa95141da44846284a4871ceea2bff52cdb21c4dc41725e9f2 extends Twig_Template
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
        $__internal_bf6c4e06113e080e5da80a8f749c0baea43b069b6a3e94bbcab99fac93910abc = $this->env->getExtension("native_profiler");
        $__internal_bf6c4e06113e080e5da80a8f749c0baea43b069b6a3e94bbcab99fac93910abc->enter($__internal_bf6c4e06113e080e5da80a8f749c0baea43b069b6a3e94bbcab99fac93910abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig"));

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array());
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "
    var field_dialog_form_list_link_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 34
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        var target = jQuery(this);

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 41
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 43
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            Admin.log('[";
        // line 47
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 54
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 59
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                }
            });

            return;
        }

        Admin.log('[";
        // line 66
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] the user select one element, update input and hide the modal');

        jQuery('#";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('change');

        field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal('hide');
    };

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "  =  function() {
        Admin.log('[";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 80
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
        jQuery('form', field_dialog_";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 86
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 95
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 97
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 98
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

                    Admin.shared_setup(field_dialog_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                }
            });
        });
    };

    // handle the list link
    var field_dialog_form_list_";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        initialize_popup_";
        // line 109
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 114
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 118
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 129
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                field_dialog_title_";
        // line 131
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label", array()), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 133
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                field_dialog_form_list_handle_action_";
        // line 135
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 138
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 146
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 147
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 154
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        Admin.log('[";
        // line 156
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 164
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 167
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                field_dialog_title_";
        // line 168
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label", array()), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain", array()));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 170
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                jQuery('form', field_dialog_";
        // line 175
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 178
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 180
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 186
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            Admin.log('[";
        // line 192
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] element is an anchor, skipping action', this);
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 199
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 201
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 215
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 225
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 233
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 238
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".modal('hide');

                    ";
        // line 240
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()) == "list")) {
            // line 241
            echo "                        ";
            // line 245
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val(data.objectId);
                        jQuery('#";
            // line 246
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').change();

                    ";
        } else {
            // line 249
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 251
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 252
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" =>             // line 253
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "subclass" => $this->getAttribute($this->getAttribute(            // line 254
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 255
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 256
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "uniqid", array()), "code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 257
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "code", array())));
            // line 258
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 263
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 264
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 271
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 276
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 281
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 283
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 286
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });

        return false;
    };

    var field_dialog_";
        // line 293
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "         = false;
    var field_dialog_content_";
        // line 294
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;
    var field_dialog_title_";
        // line 295
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "   = false;

    function initialize_popup_";
        // line 297
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 299
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
            field_dialog_";
        // line 300
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");
            field_dialog_content_";
        // line 301
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");
            field_dialog_title_";
        // line 302
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 305
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

            Admin.log('[";
        // line 307
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 314
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 316
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 321
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 325
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 332
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 333
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
    }

    ";
        // line 336
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit", array()) == "list")) {
            // line 337
            echo "        ";
            // line 340
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 342
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 346
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 350
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 357
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 362
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 369
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 372
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " option').get(0)) {
                jQuery('#";
            // line 373
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 376
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val('');
            jQuery('#";
            // line 377
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('change');

            return false;
        }
        ";
            // line 384
            echo "
        // update the label
        jQuery('#";
            // line 386
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 388
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "|on:change] update the label');

            jQuery('#field_widget_";
            // line 390
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('asset')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 393
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute(            // line 395
(isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "uniqid", array()), "code" => $this->getAttribute(            // line 396
(isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "code", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 397
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "link_parameters", array())));
            // line 398
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 401
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 407
        echo "

</script>
<!-- / edit many association -->

";
        
        $__internal_bf6c4e06113e080e5da80a8f749c0baea43b069b6a3e94bbcab99fac93910abc->leave($__internal_bf6c4e06113e080e5da80a8f749c0baea43b069b6a3e94bbcab99fac93910abc_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  724 => 407,  715 => 401,  710 => 398,  708 => 397,  707 => 396,  706 => 395,  705 => 393,  695 => 390,  690 => 388,  685 => 386,  681 => 384,  674 => 377,  670 => 376,  664 => 373,  660 => 372,  654 => 369,  644 => 362,  636 => 357,  626 => 350,  619 => 346,  612 => 342,  608 => 340,  606 => 337,  604 => 336,  598 => 333,  594 => 332,  584 => 325,  577 => 321,  569 => 316,  565 => 314,  558 => 307,  553 => 305,  545 => 302,  539 => 301,  533 => 300,  529 => 299,  524 => 297,  519 => 295,  515 => 294,  511 => 293,  499 => 286,  493 => 283,  488 => 281,  481 => 276,  473 => 271,  463 => 264,  459 => 263,  452 => 258,  450 => 257,  449 => 256,  448 => 255,  447 => 254,  446 => 253,  445 => 252,  441 => 251,  437 => 249,  431 => 246,  426 => 245,  424 => 241,  422 => 240,  417 => 238,  409 => 233,  398 => 225,  385 => 215,  368 => 201,  363 => 199,  353 => 192,  344 => 186,  335 => 180,  330 => 178,  322 => 175,  316 => 174,  309 => 170,  302 => 168,  298 => 167,  290 => 164,  279 => 156,  274 => 154,  264 => 147,  260 => 146,  251 => 140,  246 => 138,  240 => 135,  235 => 133,  228 => 131,  223 => 129,  217 => 126,  206 => 118,  199 => 114,  191 => 109,  186 => 107,  176 => 100,  171 => 98,  167 => 97,  162 => 95,  150 => 86,  142 => 81,  136 => 80,  129 => 76,  125 => 75,  118 => 71,  113 => 69,  109 => 68,  104 => 66,  94 => 59,  89 => 57,  85 => 56,  80 => 54,  70 => 47,  63 => 43,  58 => 41,  48 => 34,  44 => 33,  41 => 32,  34 => 22,  32 => 21,  29 => 20,  26 => 18,  22 => 11,);
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
/* */
/* {#*/
/* */
/* This code manage the many-to-[one|many] association field popup*/
/* */
/* #}*/
/* */
/* {% autoescape false %}*/
/* */
/* {% set associationadmin = sonata_admin.field_description.associationadmin %}*/
/* */
/* <!-- edit many association -->*/
/* */
/* <script type="text/javascript">*/
/* */
/*     {#*/
/*       handle link click in a list :*/
/*         - if the parent has an objectId defined then the related input get updated*/
/*         - if the parent has NO object then an ajax request is made to refresh the popup*/
/*     #}*/
/* */
/*     var field_dialog_form_list_link_{{ id }} = function(event) {*/
/*         initialize_popup_{{ id }}();*/
/* */
/*         var target = jQuery(this);*/
/* */
/*         event.preventDefault();*/
/*         event.stopPropagation();*/
/* */
/*         Admin.log('[{{ id }}|field_dialog_form_list_link] handle link click in a list');*/
/* */
/*         var element = jQuery(this).parents('#field_dialog_{{ id }} .sonata-ba-list-field');*/
/* */
/*         // the user does not click on a row column*/
/*         if (element.length == 0) {*/
/*             Admin.log('[{{ id }}|field_dialog_form_list_link] the user does not click on a row column, make ajax call to retrieve inner html');*/
/*             // make a recursive call (ie: reset the filter)*/
/*             jQuery.ajax({*/
/*                 type: 'GET',*/
/*                 url: jQuery(this).attr('href'),*/
/*                 dataType: 'html',*/
/*                 success: function(html) {*/
/*                     Admin.log('[{{ id }}|field_dialog_form_list_link] callback success, attach valid js event');*/
/* */
/*                     field_dialog_content_{{ id }}.html(html);*/
/*                     field_dialog_form_list_handle_action_{{ id }}();*/
/* */
/*                     Admin.shared_setup(field_dialog_{{ id }});*/
/*                 }*/
/*             });*/
/* */
/*             return;*/
/*         }*/
/* */
/*         Admin.log('[{{ id }}|field_dialog_form_list_link] the user select one element, update input and hide the modal');*/
/* */
/*         jQuery('#{{ id }}').val(element.attr('objectId'));*/
/*         jQuery('#{{ id }}').trigger('change');*/
/* */
/*         field_dialog_{{ id }}.modal('hide');*/
/*     };*/
/* */
/*     // this function handle action on the modal list when inside a selected list*/
/*     var field_dialog_form_list_handle_action_{{ id }}  =  function() {*/
/*         Admin.log('[{{ id }}|field_dialog_form_list_handle_action] attaching valid js event');*/
/* */
/*         // capture the submit event to make an ajax call, ie : POST data to the*/
/*         // related create admin*/
/*         jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_list_link_{{ id }});*/
/*         jQuery('form', field_dialog_{{ id }}).on('submit', function(event) {*/
/*             event.preventDefault();*/
/* */
/*             var form = jQuery(this);*/
/* */
/*             Admin.log('[{{ id }}|field_dialog_form_list_handle_action] catching submit event, sending ajax request');*/
/* */
/*             jQuery(form).ajaxSubmit({*/
/*                 type: form.attr('method'),*/
/*                 url: form.attr('action'),*/
/*                 dataType: 'html',*/
/*                 data: {_xml_http_request: true},*/
/*                 success: function(html) {*/
/* */
/*                     Admin.log('[{{ id }}|field_dialog_form_list_handle_action] form submit success, restoring event');*/
/* */
/*                     field_dialog_content_{{ id }}.html(html);*/
/*                     field_dialog_form_list_handle_action_{{ id }}();*/
/* */
/*                     Admin.shared_setup(field_dialog_{{ id }});*/
/*                 }*/
/*             });*/
/*         });*/
/*     };*/
/* */
/*     // handle the list link*/
/*     var field_dialog_form_list_{{ id }} = function(event) {*/
/* */
/*         initialize_popup_{{ id }}();*/
/* */
/*         event.preventDefault();*/
/*         event.stopPropagation();*/
/* */
/*         Admin.log('[{{ id }}|field_dialog_form_list] open the list modal');*/
/* */
/*         var a = jQuery(this);*/
/* */
/*         field_dialog_content_{{ id }}.html('');*/
/* */
/*         // retrieve the form element from the related admin generator*/
/*         jQuery.ajax({*/
/*             url: a.attr('href'),*/
/*             dataType: 'html',*/
/*             success: function(html) {*/
/* */
/*                 Admin.log('[{{ id }}|field_dialog_form_list] retrieving the list content');*/
/* */
/*                 // populate the popup container*/
/*                 field_dialog_content_{{ id }}.html(html);*/
/* */
/*                 field_dialog_title_{{ id }}.html("{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}");*/
/* */
/*                 Admin.shared_setup(field_dialog_{{ id }});*/
/* */
/*                 field_dialog_form_list_handle_action_{{ id }}();*/
/* */
/*                 // open the dialog in modal mode*/
/*                 field_dialog_{{ id }}.modal();*/
/* */
/*                 Admin.setup_list_modal(field_dialog_{{ id }});*/
/*             }*/
/*         });*/
/*     };*/
/* */
/*     // handle the add link*/
/*     var field_dialog_form_add_{{ id }} = function(event) {*/
/*         initialize_popup_{{ id }}();*/
/* */
/*         event.preventDefault();*/
/*         event.stopPropagation();*/
/* */
/*         var a = jQuery(this);*/
/* */
/*         field_dialog_content_{{ id }}.html('');*/
/* */
/*         Admin.log('[{{ id }}|field_dialog_form_add] add link action');*/
/* */
/*         // retrieve the form element from the related admin generator*/
/*         jQuery.ajax({*/
/*             url: a.attr('href'),*/
/*             dataType: 'html',*/
/*             success: function(html) {*/
/* */
/*                 Admin.log('[{{ id }}|field_dialog_form_add] ajax success', field_dialog_{{ id }});*/
/* */
/*                 // populate the popup container*/
/*                 field_dialog_content_{{ id }}.html(html);*/
/*                 field_dialog_title_{{ id }}.html("{{ associationadmin.label|trans({}, associationadmin.translationdomain) }}");*/
/* */
/*                 Admin.shared_setup(field_dialog_{{ id }});*/
/* */
/*                 // capture the submit event to make an ajax call, ie : POST data to the*/
/*                 // related create admin*/
/*                 jQuery('a', field_dialog_{{ id }}).on('click', field_dialog_form_action_{{ id }});*/
/*                 jQuery('form', field_dialog_{{ id }}).on('submit', field_dialog_form_action_{{ id }});*/
/* */
/*                 // open the dialog in modal mode*/
/*                 field_dialog_{{ id }}.modal();*/
/* */
/*                 Admin.setup_list_modal(field_dialog_{{ id }});*/
/*             }*/
/*         });*/
/*     };*/
/* */
/*     // handle the post data*/
/*     var field_dialog_form_action_{{ id }} = function(event) {*/
/* */
/*         var element = jQuery(this);*/
/* */
/*         // return if the link is an anchor inside the same page*/
/*         if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {*/
/*             Admin.log('[{{ id }}|field_dialog_form_action] element is an anchor, skipping action', this);*/
/*             return;*/
/*         }*/
/* */
/*         event.preventDefault();*/
/*         event.stopPropagation();*/
/* */
/*         Admin.log('[{{ id }}|field_dialog_form_action] action catch', this);*/
/* */
/*         initialize_popup_{{ id }}();*/
/* */
/*         if (this.nodeName == 'FORM') {*/
/*             var url  = element.attr('action');*/
/*             var type = element.attr('method');*/
/*         } else if (this.nodeName == 'A') {*/
/*             var url  = element.attr('href');*/
/*             var type = 'GET';*/
/*         } else {*/
/*             alert('unexpected element : @' + this.nodeName + '@');*/
/*             return;*/
/*         }*/
/* */
/*         if (element.hasClass('sonata-ba-action')) {*/
/*             Admin.log('[{{ id }}|field_dialog_form_action] reserved action stop catch all events');*/
/*             return;*/
/*         }*/
/* */
/*         var data = {*/
/*             _xml_http_request: true*/
/*         }*/
/* */
/*         var form = jQuery(this);*/
/* */
/*         Admin.log('[{{ id }}|field_dialog_form_action] execute ajax call');*/
/* */
/*         // the ajax post*/
/*         jQuery(form).ajaxSubmit({*/
/*             url: url,*/
/*             type: type,*/
/*             data: data,*/
/*             success: function(data) {*/
/*                 Admin.log('[{{ id }}|field_dialog_form_action] ajax success');*/
/* */
/*                 // if the crud action return ok, then the element has been added*/
/*                 // so the widget container must be refresh with the last option available*/
/*                 if (typeof data != 'string' && data.result == 'ok') {*/
/*                     field_dialog_{{ id }}.modal('hide');*/
/* */
/*                     {% if sonata_admin.edit == 'list' %}*/
/*                         {#*/
/*                            in this case we update the hidden input, and call the change event to*/
/*                            retrieve the post information*/
/*                         #}*/
/*                         jQuery('#{{ id }}').val(data.objectId);*/
/*                         jQuery('#{{ id }}').change();*/
/* */
/*                     {% else %}*/
/* */
/*                         // reload the form element*/
/*                         jQuery('#field_widget_{{ id }}').closest('form').ajaxSubmit({*/
/*                             url: '{{ url('sonata_admin_retrieve_form_element', {*/
/*                                 'elementId': id,*/
/*                                 'subclass':  sonata_admin.admin.getActiveSubclassCode(),*/
/*                                 'objectId':  sonata_admin.admin.root.id(sonata_admin.admin.root.subject),*/
/*                                 'uniqid':    sonata_admin.admin.root.uniqid,*/
/*                                 'code':      sonata_admin.admin.root.code*/
/*                             }) }}',*/
/*                             data: {_xml_http_request: true },*/
/*                             dataType: 'html',*/
/*                             type: 'POST',*/
/*                             success: function(html) {*/
/*                                 jQuery('#field_container_{{ id }}').replaceWith(html);*/
/*                                 var newElement = jQuery('#{{ id }} [value="' + data.objectId + '"]');*/
/*                                 if (newElement.is("input")) {*/
/*                                     newElement.attr('checked', 'checked');*/
/*                                 } else {*/
/*                                     newElement.attr('selected', 'selected');*/
/*                                 }*/
/* */
/*                                 jQuery('#field_container_{{ id }}').trigger('sonata-admin-append-form-element');*/
/*                             }*/
/*                         });*/
/* */
/*                     {% endif %}*/
/* */
/*                     return;*/
/*                 }*/
/* */
/*                 // otherwise, display form error*/
/*                 field_dialog_content_{{ id }}.html(data);*/
/* */
/*                 Admin.shared_setup(field_dialog_{{ id }});*/
/* */
/*                 // reattach the event*/
/*                 jQuery('form', field_dialog_{{ id }}).submit(field_dialog_form_action_{{ id }});*/
/*             }*/
/*         });*/
/* */
/*         return false;*/
/*     };*/
/* */
/*     var field_dialog_{{ id }}         = false;*/
/*     var field_dialog_content_{{ id }} = false;*/
/*     var field_dialog_title_{{ id }}   = false;*/
/* */
/*     function initialize_popup_{{ id }}() {*/
/*         // initialize component*/
/*         if (!field_dialog_{{ id }}) {*/
/*             field_dialog_{{ id }}         = jQuery("#field_dialog_{{ id }}");*/
/*             field_dialog_content_{{ id }} = jQuery(".modal-body", "#field_dialog_{{ id }}");*/
/*             field_dialog_title_{{ id }}   = jQuery(".modal-title", "#field_dialog_{{ id }}");*/
/* */
/*             // move the dialog as a child of the root element, nested form breaks html ...*/
/*             jQuery(document.body).append(field_dialog_{{ id }});*/
/* */
/*             Admin.log('[{{ id }}|field_dialog] move dialog container as a document child');*/
/*         }*/
/*     }*/
/* */
/*     {#*/
/*         This code is used to defined the "add" popup*/
/*     #}*/
/*     // this function initialize the popup*/
/*     // this can be only done this way has popup can be cascaded*/
/*     function start_field_dialog_form_add_{{ id }}(link) {*/
/* */
/*         // remove the html event*/
/*         link.onclick = null;*/
/* */
/*         initialize_popup_{{ id }}();*/
/* */
/*         // add the jQuery event to the a element*/
/*         jQuery(link)*/
/*             .click(field_dialog_form_add_{{ id }})*/
/*             .trigger('click')*/
/*         ;*/
/* */
/*         return false;*/
/*     }*/
/* */
/*     if (field_dialog_{{ id }}) {*/
/*         Admin.shared_setup(field_dialog_{{ id }});*/
/*     }*/
/* */
/*     {% if sonata_admin.edit == 'list' %}*/
/*         {#*/
/*             This code is used to defined the "list" popup*/
/*         #}*/
/*         // this function initialize the popup*/
/*         // this can be only done this way has popup can be cascaded*/
/*         function start_field_dialog_form_list_{{ id }}(link) {*/
/* */
/*             link.onclick = null;*/
/* */
/*             initialize_popup_{{ id }}();*/
/* */
/*             // add the jQuery event to the a element*/
/*             jQuery(link)*/
/*                 .click(field_dialog_form_list_{{ id }})*/
/*                 .trigger('click')*/
/*             ;*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function remove_selected_element_{{ id }}(link) {*/
/* */
/*             link.onclick = null;*/
/* */
/*             jQuery(link)*/
/*                 .click(field_remove_element_{{ id}})*/
/*                 .trigger('click')*/
/*             ;*/
/* */
/*             return false;*/
/*         }*/
/* */
/*         function field_remove_element_{{ id }}(event) {*/
/*             event.preventDefault();*/
/* */
/*             if (jQuery('#{{ id }} option').get(0)) {*/
/*                 jQuery('#{{ id }}').attr('selectedIndex', '-1').children("option:selected").attr("selected", false);*/
/*             }*/
/* */
/*             jQuery('#{{ id }}').val('');*/
/*             jQuery('#{{ id }}').trigger('change');*/
/* */
/*             return false;*/
/*         }*/
/*         {#*/
/*           attach onchange event on the input*/
/*         #}*/
/* */
/*         // update the label*/
/*         jQuery('#{{ id }}').on('change', function(event) {*/
/* */
/*             Admin.log('[{{ id }}|on:change] update the label');*/
/* */
/*             jQuery('#field_widget_{{ id }}').html("<span><img src=\"{{ asset('bundles/sonataadmin/ajax-loader.gif') }}\" style=\"vertical-align: middle; margin-right: 10px\"/>{{ 'loading_information'|trans([], 'SonataAdminBundle') }}</span>");*/
/*             jQuery.ajax({*/
/*                 type: 'GET',*/
/*                 url: '{{ url('sonata_admin_short_object_information', {*/
/*                     'objectId': 'OBJECT_ID',*/
/*                     'uniqid': associationadmin.uniqid,*/
/*                     'code': associationadmin.code,*/
/*                     'linkParameters': sonata_admin.field_description.options.link_parameters*/
/*                 })}}'.replace('OBJECT_ID', jQuery(this).val()),*/
/*                 dataType: 'html',*/
/*                 success: function(html) {*/
/*                     jQuery('#field_widget_{{ id }}').html(html);*/
/*                 }*/
/*             });*/
/*         });*/
/* */
/*     {% endif %}*/
/* */
/* */
/* </script>*/
/* <!-- / edit many association -->*/
/* */
/* {% endautoescape %}*/
/* */

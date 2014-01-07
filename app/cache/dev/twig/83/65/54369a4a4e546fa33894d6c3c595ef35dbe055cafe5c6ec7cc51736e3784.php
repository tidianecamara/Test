<?php

/* AdmingeneratorGeneratorBundle:Form:widgets.html.twig */
class __TwigTemplate_836554369a4a4e546fa33894d6c3c595ef35dbe055cafe5c6ec7cc51736e3784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'double_list_widget' => array($this, 'block_double_list_widget'),
            'datepicker_widget' => array($this, 'block_datepicker_widget'),
            'datepicker_range_widget' => array($this, 'block_datepicker_range_widget'),
            'entitypicker_widget' => array($this, 'block_entitypicker_widget'),
            'upload_widget' => array($this, 'block_upload_widget'),
            'single_upload_widget' => array($this, 'block_single_upload_widget'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'default_collection_widget' => array($this, 'block_default_collection_widget'),
            'fieldset_collection_widget' => array($this, 'block_fieldset_collection_widget'),
            'fieldset_collection_item_widget' => array($this, 'block_fieldset_collection_item_widget'),
            'table_collection_widget' => array($this, 'block_table_collection_widget'),
            'table_collection_item_widget' => array($this, 'block_table_collection_item_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('double_list_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('datepicker_widget', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('datepicker_range_widget', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('entitypicker_widget', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('upload_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('single_upload_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('default_collection_widget', $context, $blocks);
        // line 118
        echo "
";
        // line 119
        $this->displayBlock('fieldset_collection_widget', $context, $blocks);
        // line 146
        echo "
";
        // line 147
        $this->displayBlock('fieldset_collection_item_widget', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('table_collection_widget', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('table_collection_item_widget', $context, $blocks);
    }

    // line 1
    public function block_double_list_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/javascripts/double_list.js"), "html", null, true);
        echo "\"></script>
    <div class=\"double_list\">
        <div style=\"float: left\">
            ";
        // line 6
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/DoubleList:unselected_list.html.twig")->display($context);
        // line 7
        echo "        </div>
        <div style=\"float: left; margin-top: 2em\">
            ";
        // line 9
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/DoubleList:controls.html.twig")->display($context);
        // line 10
        echo "        </div>
        <div style=\"float: left\">
            ";
        // line 12
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/DoubleList:selected_list.html.twig")->display($context);
        // line 13
        echo "        </div>
        <br style=\"clear: both\" />
        ";
        // line 15
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/DoubleList:javascript.html.twig")->display($context);
        // line 16
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_datepicker_widget($context, array $blocks = array())
    {
        // line 21
        ob_start();
        // line 22
        echo "    <div class=\"datepicker-widget ";
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            echo "input-prepend ";
        }
        echo "input-append\">
        ";
        // line 23
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            echo "<span class=\"add-on\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend")), array(), "Admingenerator"), "html", null, true);
            echo "</span>";
        }
        // line 24
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
        <span class=\"add-on\"><i class=\"icon-calendar\"></i></span>
    </div>
    ";
        // line 27
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/DatePicker:javascript.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_datepicker_range_widget($context, array $blocks = array())
    {
        // line 32
        ob_start();
        // line 33
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 35
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_entitypicker_widget($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    <input type=\"text\" id=\"";
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_typeahead"), "html", null, true);
        echo "\"
           data-source='";
        // line 44
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/EntityPicker:data_source.html.twig")->display($context);
        echo "'
           placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("entity_picker.placeholder", array(), "Admingenerator"), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <input type=\"hidden\" ";
        // line 46
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if (array_key_exists("value", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        echo " />

    ";
        // line 48
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/EntityPicker:javascript.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 52
    public function block_upload_widget($context, array $blocks = array())
    {
        // line 53
        ob_start();
        // line 54
        echo "    ";
        $context["full_name"] = ((isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")) . "[uploads][]");
        // line 55
        echo "
    <div id=\"";
        // line 56
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_widget_container"), "html", null, true);
        echo "\">
        <div class=\"btn-toolbar form-actions form-actions-condensed fileupload-buttonbar\">
            <span class=\"btn btn-success fileinput\">
                <i class=\"icon-plus icon-white\"></i>
                <span>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("upload.file.add", array(), "Admingenerator"), "html", null, true);
        echo "</span>
                <input type=\"file\" ";
        // line 61
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " multiple />
            </span>
            <button type=\"reset\" class=\"btn btn-warning cancel\">
                <i class=\"icon-ban-circle icon-white\"></i>
                <span> ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("upload.cancel", array(), "Admingenerator"), "html", null, true);
        echo "</span>
            </button>
            <button type=\"button\" class=\"btn btn-danger delete\">
                <i class=\"icon-trash icon-white\"></i>
                <span> ";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("upload.delete", array(), "Admingenerator"), "html", null, true);
        echo "</span>
            </button>
            <label class=\"btn btn-toggle disabled input-append\">
                <input type=\"checkbox\" class=\"toggle\">
            </label>
        </div>
        ";
        // line 75
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Upload:presentation_table.html.twig")->display($context);
        // line 76
        echo "        ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Upload:template_download.html.twig")->display($context);
        // line 77
        echo "        ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Upload:template_upload.html.twig")->display($context);
        // line 78
        echo "        ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Upload:javascript.html.twig")->display($context);
        // line 79
        echo "        ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Upload:sortable-js.html.twig")->display($context);
        // line 80
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 84
    public function block_single_upload_widget($context, array $blocks = array())
    {
        // line 85
        ob_start();
        // line 86
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admingeneratorgenerator/js/admingenerator/form/single-upload.js"), "html", null, true);
        echo "\"></script>
    <div id=\"";
        // line 87
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_widget_container"), "html", null, true);
        echo "\" class=\"single-upload\">
        <div class=\"btn-toolbar form-actions form-actions-condensed singleupload-buttonbar\">
            <span class=\"btn btn-success fileinput\">
                <i class=\"icon-plus icon-white\"></i>
                <span>";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("upload.file.add", array(), "Admingenerator"), "html", null, true);
        echo "</span>
                <input type=\"file\" ";
        // line 92
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " />
            </span>
            ";
        // line 94
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/SingleUpload:controls.html.twig")->display($context);
        // line 95
        echo "            ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/SingleUpload:deleteable.html.twig")->display($context);
        // line 96
        echo "        </div>
        <div id=\"";
        // line 97
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_preview"), "html", null, true);
        echo "\" class=\"single-upload-preview\">
            ";
        // line 98
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/SingleUpload:nameable.html.twig")->display($context);
        // line 99
        echo "            ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/SingleUpload:preview.html.twig")->display($context);
        // line 100
        echo "        </div>
        ";
        // line 101
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/SingleUpload:javascript.html.twig")->display($context);
        // line 102
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 106
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 107
        echo "    ";
        $this->displayBlock(((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) . "_collection_widget"), $context, $blocks);
        echo "
";
    }

    // line 110
    public function block_default_collection_widget($context, array $blocks = array())
    {
        // line 111
        ob_start();
        // line 112
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 113
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
            // line 114
            echo "    ";
        }
        // line 115
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 119
    public function block_fieldset_collection_widget($context, array $blocks = array())
    {
        // line 120
        ob_start();
        // line 121
        echo "    ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:sortable-css.html.twig")->display($context);
        // line 122
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 123
            echo "        ";
            $context["item"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 124
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("fieldset_collection_item_widget", $context, $blocks)));
            // line 125
            echo "    ";
        }
        // line 126
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "control-group"));
        // line 127
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 128
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) {
            // line 129
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
        ";
        }
        // line 131
        echo "        <div id=\"";
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_toolbar"), "html", null, true);
        echo "\" class=\"btn-toolbar form-actions form-actions-condensed\">
            ";
        // line 132
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:collection_add.html.twig")->display($context);
        // line 133
        echo "            ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:collection_batch_delete.html.twig")->display($context);
        // line 134
        echo "        </div>
        <div class=\"collection\">
            ";
        // line 136
        $context['_parent'] = (array) $context;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 137
            echo "                ";
            $this->displayBlock("fieldset_collection_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "        </div>
        ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </div>
    ";
        // line 142
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:javascript.html.twig")->display($context);
        // line 143
        echo "    ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:sortable-js.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 147
    public function block_fieldset_collection_item_widget($context, array $blocks = array())
    {
        // line 148
        ob_start();
        // line 149
        echo "    <fieldset class=\"collection-item ";
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_actions"), "html", null, true);
        echo "\">
        <legend>";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 'label');
        echo "</legend>
        ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 'widget');
        echo "
        ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 'errors');
        echo "
        ";
        // line 153
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:collection_delete.html.twig")->display($context);
        // line 154
        echo "    </fieldset>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 158
    public function block_table_collection_widget($context, array $blocks = array())
    {
        // line 159
        ob_start();
        // line 160
        echo "    ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:sortable-css.html.twig")->display($context);
        // line 161
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 162
            echo "        ";
            $context["item"] = (isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype"));
            // line 163
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->renderBlock("table_collection_item_widget", $context, $blocks)));
            // line 164
            echo "    ";
        }
        // line 165
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "table table-striped"));
        // line 166
        echo "    <table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 167
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent"))) {
            // line 168
            echo "            <caption>
                ";
            // line 169
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </caption>
        ";
        }
        // line 172
        echo "        <thead>
          <tr>
            <td id=\"";
        // line 174
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_toolbar"), "html", null, true);
        echo "\" class=\"btn-toolbar form-actions form-actions-condensed\" colspan=\"4\">
                ";
        // line 175
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:collection_add.html.twig")->display($context);
        // line 176
        echo "                ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:collection_batch_delete.html.twig")->display($context);
        // line 177
        echo "            </td>
          </tr>
        </thead>
        <tbody class=\"collection\">
            ";
        // line 181
        $context['_parent'] = (array) $context;
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 182
            echo "                ";
            $this->displayBlock("table_collection_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "        </tbody>
    </table>
    ";
        // line 186
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:javascript.html.twig")->display($context);
        // line 187
        echo "    ";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:sortable-js.html.twig")->display($context);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 191
    public function block_table_collection_item_widget($context, array $blocks = array())
    {
        // line 192
        ob_start();
        // line 193
        echo "    <tr class=\"collection-item\">
        <th class=\"new-label\">";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 'label');
        echo "</th>
        <td>";
        // line 195
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 'widget');
        echo "</td>
        <td>";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 'errors');
        echo "</td>
        <td class=\"";
        // line 197
        echo twig_escape_filter($this->env, ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_actions"), "html", null, true);
        echo "\">";
        $this->env->loadTemplate("AdmingeneratorGeneratorBundle:Form/Collection:collection_delete.html.twig")->display($context);
        echo "</td>
    </tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AdmingeneratorGeneratorBundle:Form:widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  632 => 197,  628 => 196,  624 => 195,  620 => 194,  617 => 193,  615 => 192,  612 => 191,  606 => 187,  600 => 184,  566 => 181,  560 => 177,  557 => 176,  555 => 175,  551 => 174,  547 => 172,  541 => 169,  536 => 167,  531 => 166,  522 => 163,  519 => 162,  513 => 160,  508 => 158,  502 => 154,  500 => 153,  496 => 152,  492 => 151,  483 => 149,  478 => 147,  472 => 143,  470 => 142,  465 => 140,  462 => 139,  445 => 137,  428 => 136,  424 => 134,  419 => 132,  414 => 131,  408 => 129,  406 => 128,  401 => 127,  398 => 126,  392 => 124,  386 => 122,  381 => 120,  378 => 119,  370 => 115,  367 => 114,  364 => 113,  361 => 112,  359 => 111,  356 => 110,  349 => 107,  340 => 102,  338 => 101,  332 => 99,  330 => 98,  326 => 97,  318 => 94,  313 => 92,  309 => 91,  295 => 85,  286 => 80,  283 => 79,  280 => 78,  263 => 69,  245 => 60,  238 => 56,  235 => 55,  232 => 54,  230 => 53,  227 => 52,  211 => 46,  203 => 44,  198 => 43,  196 => 42,  193 => 41,  178 => 35,  146 => 24,  140 => 23,  133 => 22,  131 => 21,  128 => 20,  120 => 15,  116 => 13,  110 => 10,  108 => 9,  95 => 3,  93 => 2,  90 => 1,  86 => 191,  83 => 190,  81 => 158,  78 => 157,  76 => 147,  73 => 146,  71 => 119,  68 => 118,  66 => 110,  63 => 109,  61 => 106,  58 => 105,  56 => 84,  53 => 83,  51 => 52,  48 => 51,  46 => 41,  43 => 40,  41 => 31,  38 => 30,  36 => 20,  33 => 19,  1819 => 553,  1813 => 552,  1807 => 551,  1801 => 550,  1795 => 549,  1789 => 548,  1783 => 547,  1777 => 546,  1771 => 545,  1755 => 539,  1748 => 538,  1746 => 537,  1743 => 536,  1720 => 532,  1695 => 531,  1693 => 530,  1690 => 529,  1678 => 524,  1674 => 523,  1671 => 522,  1668 => 521,  1665 => 520,  1662 => 519,  1659 => 518,  1657 => 517,  1654 => 516,  1645 => 509,  1642 => 508,  1640 => 507,  1637 => 506,  1628 => 501,  1625 => 500,  1623 => 499,  1620 => 498,  1603 => 494,  1597 => 492,  1594 => 491,  1576 => 490,  1574 => 489,  1571 => 488,  1563 => 482,  1556 => 480,  1553 => 476,  1549 => 475,  1545 => 473,  1540 => 470,  1538 => 466,  1535 => 465,  1532 => 464,  1530 => 463,  1527 => 462,  1520 => 457,  1513 => 455,  1510 => 451,  1506 => 450,  1503 => 449,  1499 => 447,  1496 => 443,  1493 => 442,  1491 => 441,  1488 => 440,  1480 => 436,  1478 => 435,  1475 => 434,  1468 => 429,  1465 => 428,  1458 => 424,  1453 => 423,  1451 => 422,  1448 => 421,  1439 => 415,  1435 => 414,  1431 => 412,  1429 => 411,  1426 => 410,  1418 => 405,  1413 => 404,  1407 => 402,  1404 => 401,  1402 => 397,  1400 => 396,  1397 => 395,  1388 => 389,  1384 => 388,  1379 => 386,  1368 => 385,  1366 => 384,  1363 => 383,  1356 => 380,  1353 => 379,  1345 => 374,  1341 => 373,  1336 => 372,  1330 => 370,  1324 => 368,  1321 => 367,  1319 => 366,  1316 => 365,  1308 => 361,  1306 => 357,  1304 => 356,  1301 => 355,  1292 => 348,  1276 => 347,  1272 => 345,  1269 => 344,  1266 => 343,  1263 => 342,  1260 => 341,  1257 => 340,  1254 => 339,  1251 => 338,  1248 => 337,  1245 => 336,  1242 => 335,  1239 => 334,  1236 => 333,  1234 => 332,  1231 => 331,  1222 => 327,  1206 => 326,  1202 => 324,  1199 => 323,  1196 => 322,  1193 => 321,  1190 => 320,  1187 => 319,  1184 => 318,  1181 => 317,  1178 => 316,  1175 => 315,  1172 => 314,  1169 => 313,  1166 => 312,  1164 => 311,  1161 => 310,  1140 => 306,  1137 => 305,  1134 => 304,  1131 => 303,  1128 => 302,  1125 => 301,  1122 => 300,  1119 => 299,  1116 => 298,  1113 => 297,  1110 => 296,  1107 => 295,  1104 => 294,  1102 => 293,  1099 => 292,  1091 => 286,  1088 => 285,  1086 => 284,  1083 => 283,  1075 => 279,  1072 => 278,  1070 => 277,  1067 => 276,  1059 => 272,  1056 => 271,  1054 => 270,  1051 => 269,  1043 => 265,  1040 => 264,  1038 => 263,  1035 => 262,  1027 => 258,  1024 => 257,  1021 => 256,  1019 => 255,  1016 => 254,  1008 => 250,  1005 => 249,  1003 => 248,  1000 => 247,  992 => 243,  990 => 242,  987 => 241,  979 => 237,  976 => 236,  974 => 235,  971 => 234,  963 => 230,  960 => 229,  958 => 228,  956 => 227,  953 => 226,  946 => 221,  938 => 220,  933 => 219,  927 => 217,  924 => 216,  922 => 215,  919 => 214,  911 => 208,  909 => 207,  908 => 206,  907 => 205,  906 => 204,  901 => 203,  895 => 201,  892 => 200,  890 => 199,  887 => 198,  878 => 192,  874 => 191,  870 => 190,  866 => 189,  861 => 188,  855 => 186,  852 => 185,  850 => 184,  847 => 183,  831 => 179,  829 => 178,  826 => 177,  810 => 173,  808 => 172,  805 => 171,  788 => 167,  776 => 165,  769 => 162,  767 => 161,  762 => 160,  759 => 159,  741 => 158,  739 => 157,  736 => 156,  727 => 151,  724 => 150,  721 => 149,  715 => 147,  713 => 146,  708 => 145,  705 => 144,  702 => 143,  696 => 141,  694 => 140,  686 => 139,  684 => 138,  681 => 137,  669 => 132,  664 => 131,  661 => 130,  659 => 129,  656 => 128,  647 => 123,  641 => 121,  638 => 120,  636 => 119,  633 => 118,  623 => 114,  621 => 113,  618 => 112,  610 => 108,  607 => 107,  604 => 186,  601 => 105,  599 => 104,  596 => 103,  588 => 98,  583 => 182,  577 => 95,  575 => 94,  570 => 93,  568 => 92,  565 => 91,  558 => 86,  552 => 84,  546 => 82,  544 => 81,  538 => 168,  535 => 78,  533 => 77,  530 => 76,  528 => 165,  525 => 164,  516 => 161,  514 => 68,  511 => 159,  505 => 65,  499 => 63,  497 => 62,  493 => 60,  491 => 59,  488 => 150,  481 => 148,  475 => 51,  469 => 49,  467 => 48,  461 => 46,  458 => 45,  456 => 44,  453 => 43,  447 => 41,  441 => 39,  439 => 38,  435 => 36,  433 => 35,  430 => 34,  421 => 133,  418 => 28,  412 => 26,  409 => 25,  395 => 125,  389 => 123,  383 => 121,  377 => 17,  374 => 16,  371 => 15,  369 => 14,  366 => 13,  357 => 8,  351 => 6,  348 => 5,  346 => 106,  343 => 3,  339 => 553,  337 => 552,  335 => 100,  333 => 550,  331 => 549,  329 => 548,  327 => 547,  325 => 546,  323 => 96,  320 => 95,  317 => 542,  315 => 536,  312 => 535,  310 => 529,  307 => 528,  305 => 516,  302 => 87,  299 => 513,  297 => 86,  294 => 505,  292 => 84,  289 => 497,  287 => 488,  284 => 487,  282 => 462,  279 => 461,  277 => 77,  274 => 76,  272 => 75,  269 => 433,  266 => 431,  264 => 428,  261 => 427,  259 => 421,  256 => 65,  254 => 410,  251 => 409,  249 => 61,  246 => 394,  244 => 383,  241 => 382,  239 => 379,  236 => 378,  234 => 365,  231 => 364,  229 => 355,  226 => 354,  222 => 48,  220 => 331,  217 => 330,  215 => 310,  212 => 309,  210 => 292,  207 => 45,  204 => 289,  202 => 283,  199 => 282,  197 => 276,  194 => 275,  192 => 269,  189 => 268,  187 => 37,  184 => 261,  182 => 254,  179 => 253,  177 => 247,  174 => 34,  172 => 241,  169 => 33,  167 => 32,  164 => 31,  162 => 226,  159 => 27,  157 => 214,  154 => 213,  152 => 198,  149 => 197,  147 => 183,  144 => 182,  142 => 177,  139 => 176,  137 => 171,  134 => 170,  132 => 156,  129 => 155,  127 => 137,  124 => 136,  122 => 16,  119 => 127,  117 => 118,  114 => 12,  112 => 112,  109 => 111,  107 => 103,  104 => 7,  102 => 6,  99 => 90,  97 => 74,  94 => 73,  92 => 58,  89 => 57,  87 => 34,  84 => 33,  82 => 13,  79 => 12,  77 => 3,  74 => 2,  59 => 24,  52 => 20,  44 => 15,  31 => 1,  28 => 3,);
    }
}

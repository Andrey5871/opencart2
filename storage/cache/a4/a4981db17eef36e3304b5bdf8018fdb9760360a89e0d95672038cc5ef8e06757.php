<?php

/* bootstrap4_basic/template/account/register.twig */
class __TwigTemplate_f96227013e0faa10494056a20f21afb1d82cfd0ffb78cb1ee8f58b85ff04d1fb extends Twig_Template
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
        // line 11
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"account-register\" class=\"container\">
<div class=\"wrap\">
  <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 17
            echo "      <li class=\"breadcrumb-item\"";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " aria-current=\"page\"";
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ol>
  </nav>
  ";
        // line 21
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 22
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 24
        echo "  <div class=\"container\">
  <div class=\"row\">";
        // line 25
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 26
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 28
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 30
            echo "    ";
        } else {
            // line 31
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 34
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 35
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
      <form action=\"";
        // line 36
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <fieldset id=\"account\">
          <legend>";
        // line 38
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
          <div class=\"form-group row required\" style=\"display: ";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 40
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
            <div class=\"col-sm-10\">";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 42
            echo "              ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 43
                echo "              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 44
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked>
                <label class=\"form-check-label\">
                  ";
                // line 46
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                </label>
              </div>
              ";
            } else {
                // line 50
                echo "              <div class=\"form-check\">
                <input class=\"form-check-input\" type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 51
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
                <label class=\"form-check-label\">
                  ";
                // line 53
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
                </label>
              </div>
              ";
            }
            // line 57
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-firstname\">";
        // line 60
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 62
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 63
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 64
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
              ";
        }
        // line 65
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-lastname\">";
        // line 68
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 70
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 71
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 72
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
              ";
        }
        // line 73
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 76
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 78
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 79
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 80
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 81
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-telephone\">";
        // line 84
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 86
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 87
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 88
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
              ";
        }
        // line 89
        echo " </div>
          </div>
          ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 92
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 93
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 94
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field[";
                // line 96
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                <option value=\"\">";
                // line 97
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>





                ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 104
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "location", array()), array(), "array"), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 105
                        echo "



                <option value=\"";
                        // line 109
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>





                ";
                    } else {
                        // line 116
                        echo "




                <option value=\"";
                        // line 121
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>





                ";
                    }
                    // line 128
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "




              </select>
              ";
                // line 135
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 136
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 137
                echo "</div>
          </div>
          ";
            }
            // line 140
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 141
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\">";
                // line 142
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 145
                    echo "                <div class=\"form-check\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 146
                        echo "                  <input class=\"form-check-input\" type=\"radio\" name=\"custom_field[";
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked>
                  <label class=\"form-check-label\">
                    ";
                        // line 148
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                  </label>
                  ";
                    } else {
                        // line 151
                        echo "                  <input class=\"form-check-input\" type=\"radio\" name=\"custom_field[";
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">
                  <label class=\"form-check-label\">
                    ";
                        // line 153
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "
                  </label>
                  ";
                    }
                    // line 155
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "</div>
              ";
                // line 157
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 158
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 159
                echo "</div>
          </div>
          ";
            }
            // line 162
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 163
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\">";
                // line 164
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <div> ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 167
                    echo "                <div class=\"form-check\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 168
                        echo "                  <input class=\"form-check-input\" type=\"checkbox\" name=\"custom_field[";
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked>
                  <label class=\"form-check-label\">";
                        // line 169
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  ";
                    } else {
                        // line 171
                        echo "                  <input class=\"form-check-input\" type=\"checkbox\" name=\"custom_field[";
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">
                  <label class=\"form-check-label\">";
                        // line 172
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  ";
                    }
                    // line 173
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 174
                echo " </div>
              ";
                // line 175
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 176
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 177
                echo " </div>
          </div>
          ";
            }
            // line 180
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 181
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 182
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field[";
                // line 184
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
              ";
                // line 185
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 186
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 187
                echo " </div>
          </div>
          ";
            }
            // line 190
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 191
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-custom-field";
                // line 192
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field[";
                // line 194
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
              ";
                // line 195
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 196
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 197
                echo " </div>
          </div>
          ";
            }
            // line 200
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 201
                echo "          <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group row custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\">";
                // line 202
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 204
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-light border\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
              <input type=\"hidden\" name=\"custom_field[";
                // line 205
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\" />
              ";
                // line 206
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 207
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 208
                echo "</div>
          </div>
          ";
            }
            // line 211
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 212
                echo "          <div class=\"form-group row";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo "\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\" for=\"custom_field_cal_";
                // line 213
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
                <div class=\"input-group date\" id=\"custom_field_cal_";
                // line 215
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-target-input=\"nearest\">
                <input type=\"text\" name=\"custom_field[";
                // line 216
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"form-control datetimepicker-input\" data-target=\"#custom_field_cal_";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" />
                <span class=\"input-group-append\" data-target=\"#custom_field_cal_";
                // line 217
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-toggle=\"datetimepicker\">
                <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                </span></div>
                <script type=\"text/javascript\"><!--
                \$(\"#custom_field_cal_";
                // line 221
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\").datetimepicker({
                    locale: '";
                // line 222
                echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                echo "',
                    format: 'YYYY-MM-DD'
                });
                --></script>
              </div>
              ";
                // line 227
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 228
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 229
                echo " </div>
          ";
            }
            // line 231
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 232
                echo "          <div class=\"form-group row";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo "\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\" for=\"custom_field_cal_";
                // line 233
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
                <div class=\"input-group date\" id=\"custom_field_cal_";
                // line 235
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-target-input=\"nearest\">
                <input type=\"text\" name=\"custom_field[";
                // line 236
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"form-control datetimepicker-input\" data-target=\"#custom_field_cal_";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" />
                <span class=\"input-group-append\" data-target=\"#custom_field_cal_";
                // line 237
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-toggle=\"datetimepicker\">
                <div class=\"input-group-text\"><i class=\"fa fa-clock-o\"></i></div>
                </span></div>
                <script type=\"text/javascript\"><!--
                \$(\"#custom_field_cal_";
                // line 241
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\").datetimepicker({
                    locale: '";
                // line 242
                echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                echo "',
                    format: 'HH:mm'
                });
                --></script>
              </div>
              ";
                // line 247
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 248
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 249
                echo " </div>
          ";
            }
            // line 251
            echo "          ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                // line 252
                echo "          <div class=\"form-group row";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo "\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
            <label class=\"col-sm-2 col-form-label\" for=\"custom_field_cal_";
                // line 253
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
            <div class=\"col-sm-10\">
                <div class=\"input-group date\" id=\"custom_field_cal_";
                // line 255
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-target-input=\"nearest\">
                <input type=\"text\" name=\"custom_field[";
                // line 256
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" class=\"form-control datetimepicker-input\" data-target=\"#custom_field_cal_";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" />
                <span class=\"input-group-append\" data-target=\"#custom_field_cal_";
                // line 257
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-toggle=\"datetimepicker\">
                <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                </span></div>
                <script type=\"text/javascript\"><!--
                \$(\"#custom_field_cal_";
                // line 261
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\").datetimepicker({
                    locale: '";
                // line 262
                echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                echo "',
                    format: 'YYYY-MM-DD HH:mm'
                });
                <!--</script>
              </div>
              ";
                // line 267
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 268
                    echo "              <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
              ";
                }
                // line 269
                echo " </div>
          ";
            }
            // line 271
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "        </fieldset>
        <fieldset>
          <legend>";
        // line 274
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-password\">";
        // line 276
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 278
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 279
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 280
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
              ";
        }
        // line 281
        echo " </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-confirm\">";
        // line 284
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 286
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 287
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 288
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
              ";
        }
        // line 289
        echo " </div>
          </div>
        </fieldset>

        <div class=\"form-group selectCustomUsersGroup row\">
          <label class=\"col-sm-2 col-form-label\" for=\"input-customUser\">";
        // line 294
        echo (isset($context["selectCustomUserGroup"]) ? $context["selectCustomUserGroup"] : null);
        echo "</label>
          <div class=\"col-sm-10\">
            <div class=\"custom-control custom-radio\">
              <input type=\"radio\" class=\"custom-control-input\" value=\"2\" id=\"checkedsUserFiz\" checked name=\"selectGroup\">
              <label class=\"custom-control-label\" for=\"checkedsUserFiz\">";
        // line 298
        echo (isset($context["fizUsers"]) ? $context["fizUsers"] : null);
        echo "</label>
            </div>
            <div class=\"custom-control custom-radio\">
              <input type=\"radio\" class=\"custom-control-input\" id=\"checkedsUserYur\" name=\"selectGroup\" value='3'>
              <label class=\"custom-control-label\" for=\"checkedsUserYur\">";
        // line 302
        echo (isset($context["YurUsers"]) ? $context["YurUsers"] : null);
        echo "</label>
            </div>
            </div>
        </div>


        <fieldset class=\"forYurUsers\" style=\"display:none\">
          <legend>";
        // line 309
        echo (isset($context["text_select_users_group"]) ? $context["text_select_users_group"] : null);
        echo "</legend>
\t\t       <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-organiztion\">";
        // line 311
        echo (isset($context["nameOrgText"]) ? $context["nameOrgText"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"organiztion\"  placeholder=\"";
        // line 313
        echo (isset($context["organization_entry"]) ? $context["organization_entry"] : null);
        echo "\" id=\"input-organiztion\" class=\"form-control\" />
            </div>
          </div>
\t\t     <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-inn\">";
        // line 317
        echo (isset($context["inn_entry"]) ? $context["inn_entry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"inn\"  placeholder=\"";
        // line 319
        echo (isset($context["inn_entry"]) ? $context["inn_entry"] : null);
        echo "\" id=\"input-inn\" class=\"form-control\" />
              <div class=\"text-danger\" style=\"display:none\">Ошибка, Вы не ввели ИНН</div>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-kpp\">";
        // line 324
        echo (isset($context["entry_kpp"]) ? $context["entry_kpp"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"kpp\" placeholder=\"";
        // line 326
        echo (isset($context["entry_kpp"]) ? $context["entry_kpp"] : null);
        echo "\" id=\"input-kpp\" class=\"form-control\" />
           </div>
          </div>
       

     

          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-ugrn\">";
        // line 334
        echo (isset($context["ugrn_text"]) ? $context["ugrn_text"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"ugrn\"  placeholder=\"";
        // line 336
        echo (isset($context["ugrn_text"]) ? $context["ugrn_text"] : null);
        echo "\" id=\"input-ugrn\" class=\"form-control\" />
              <div class=\"text-danger\" style=\"display:none\">Ошибка, Вы не ввели ОГРНИП</div>
            </div>
          </div>
        </fieldset>


        ";
        // line 343
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        ";
        // line 344
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 345
            echo "        <div class=\"buttons\">
          <div class=\"pull-right\">";
            // line 346
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
            ";
            // line 347
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 348
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 350
                echo "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 352
            echo "            &nbsp;
            <input type=\"submit\" value=\"";
            // line 353
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary sendRegister\" />
          </div>
        </div>
        ";
        } else {
            // line 357
            echo "        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
            // line 359
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary sendRegister\" />
          </div>
        </div>
        ";
        }
        // line 363
        echo "      </form>
      ";
        // line 364
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 365
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
</div>
</div>
<script type=\"text/javascript\">
\$(\".sendRegister\").click(function(e){
    if(\$(\".selectCustomUsersGroup input[name=selectGroup]:checked\").val() == 3){
          var req = \$(\".forYurUsers .required input\");
          req.each(function(index){
            if(\$(this).val() == \"\"){
              e.preventDefault();
              \$(this).next().show();
            }else{
              \$(this).next().hide();

            }
          });
    }else{

    }
});

    \$(\".selectCustomUsersGroup input[name=selectGroup]\").change(function(){
      console.log();
      if(\$(this).val() == 3){
          \$(\".forYurUsers\").show();
      }else{
        \$(\".forYurUsers\").hide();
      }
    });

<!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}


\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
";
        // line 496
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1228 => 496,  1094 => 365,  1090 => 364,  1087 => 363,  1080 => 359,  1076 => 357,  1069 => 353,  1066 => 352,  1062 => 350,  1058 => 348,  1056 => 347,  1052 => 346,  1049 => 345,  1047 => 344,  1043 => 343,  1033 => 336,  1028 => 334,  1017 => 326,  1012 => 324,  1004 => 319,  999 => 317,  992 => 313,  987 => 311,  982 => 309,  972 => 302,  965 => 298,  958 => 294,  951 => 289,  945 => 288,  943 => 287,  937 => 286,  932 => 284,  927 => 281,  921 => 280,  919 => 279,  913 => 278,  908 => 276,  903 => 274,  899 => 272,  893 => 271,  889 => 269,  883 => 268,  881 => 267,  873 => 262,  869 => 261,  862 => 257,  846 => 256,  842 => 255,  835 => 253,  826 => 252,  823 => 251,  819 => 249,  813 => 248,  811 => 247,  803 => 242,  799 => 241,  792 => 237,  776 => 236,  772 => 235,  765 => 233,  756 => 232,  753 => 231,  749 => 229,  743 => 228,  741 => 227,  733 => 222,  729 => 221,  722 => 217,  706 => 216,  702 => 215,  695 => 213,  686 => 212,  683 => 211,  678 => 208,  672 => 207,  670 => 206,  658 => 205,  650 => 204,  645 => 202,  638 => 201,  635 => 200,  630 => 197,  624 => 196,  622 => 195,  606 => 194,  599 => 192,  592 => 191,  589 => 190,  584 => 187,  578 => 186,  576 => 185,  560 => 184,  553 => 182,  546 => 181,  543 => 180,  538 => 177,  532 => 176,  530 => 175,  527 => 174,  520 => 173,  515 => 172,  506 => 171,  501 => 169,  492 => 168,  489 => 167,  485 => 166,  480 => 164,  473 => 163,  470 => 162,  465 => 159,  459 => 158,  457 => 157,  454 => 156,  447 => 155,  441 => 153,  431 => 151,  425 => 148,  415 => 146,  412 => 145,  408 => 144,  403 => 142,  396 => 141,  393 => 140,  388 => 137,  382 => 136,  380 => 135,  372 => 129,  366 => 128,  354 => 121,  347 => 116,  335 => 109,  329 => 105,  326 => 104,  322 => 103,  313 => 97,  305 => 96,  298 => 94,  291 => 93,  288 => 92,  284 => 91,  280 => 89,  274 => 88,  272 => 87,  266 => 86,  261 => 84,  256 => 81,  250 => 80,  248 => 79,  242 => 78,  237 => 76,  232 => 73,  226 => 72,  224 => 71,  218 => 70,  213 => 68,  208 => 65,  202 => 64,  200 => 63,  194 => 62,  189 => 60,  179 => 57,  172 => 53,  167 => 51,  164 => 50,  157 => 46,  152 => 44,  149 => 43,  146 => 42,  142 => 41,  138 => 40,  130 => 39,  126 => 38,  121 => 36,  117 => 35,  113 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  86 => 26,  82 => 25,  79 => 24,  73 => 22,  71 => 21,  67 => 19,  44 => 17,  27 => 16,  19 => 11,);
    }
}
/* {##*/
/* /***/
/*  * @category   MonolithForge/OpenCart/Bootstrap4ThemeBasic*/
/*  * @package    opencart-bootstrap4-theme-basic*/
/*  * @author     dev@monolithforge.com*/
/*  * @copyright  2018 Monolith Forge, LLC*/
/*  * @license    https://www.monolithforge.com/license/opencart-bootstrap4-theme-basic.txt*/
/*  * @version    3.0.2.0-bootstrap4-theme-basic-a6*/
/*  *//* */
/* #}*/
/* {{ header }}*/
/* <div id="account-register" class="container">*/
/* <div class="wrap">*/
/*   <nav aria-label="breadcrumb">*/
/*     <ol class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li class="breadcrumb-item"{% if loop.last %} aria-current="page"{% endif %}><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ol>*/
/*   </nav>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="container">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <p>{{ text_account_already }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <fieldset id="account">*/
/*           <legend>{{ text_your_details }}</legend>*/
/*           <div class="form-group row required" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*             <label class="col-sm-2 col-form-label">{{ entry_customer_group }}</label>*/
/*             <div class="col-sm-10">{% for customer_group in customer_groups %}*/
/*               {% if customer_group.customer_group_id == customer_group_id %}*/
/*               <div class="form-check">*/
/*                 <input class="form-check-input" type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked>*/
/*                 <label class="form-check-label">*/
/*                   {{ customer_group.name }}*/
/*                 </label>*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="form-check">*/
/*                 <input class="form-check-input" type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}">*/
/*                 <label class="form-check-label">*/
/*                   {{ customer_group.name }}*/
/*                 </label>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% endfor %}</div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control" />*/
/*               {% if error_firstname %}*/
/*               <div class="text-danger">{{ error_firstname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control" />*/
/*               {% if error_lastname %}*/
/*               <div class="text-danger">{{ error_lastname }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="email" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control" />*/
/*               {% if error_telephone %}*/
/*               <div class="text-danger">{{ error_telephone }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% for custom_field in custom_fields %}*/
/*           {% if custom_field.type == 'select' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group row custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/* */
/* */
/* */
/* */
/* */
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 {% if register_custom_field[custom_field.location][custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* */
/* */
/* */
/* */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* */
/* */
/* */
/*                 {% else %}*/
/* */
/* */
/* */
/* */
/* */
/*                 <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* */
/* */
/* */
/*                 {% endif %}*/
/*                 {% endfor %}*/
/* */
/* */
/* */
/* */
/* */
/*               </select>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'radio' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group row custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="form-check">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/*                   <input class="form-check-input" type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked>*/
/*                   <label class="form-check-label">*/
/*                     {{ custom_field_value.name }}*/
/*                   </label>*/
/*                   {% else %}*/
/*                   <input class="form-check-input" type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}">*/
/*                   <label class="form-check-label">*/
/*                     {{ custom_field_value.name }}*/
/*                   </label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %}</div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'checkbox' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group row custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                 <div class="form-check">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
/*                   <input class="form-check-input" type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked>*/
/*                   <label class="form-check-label">{{ custom_field_value.name }}</label>*/
/*                   {% else %}*/
/*                   <input class="form-check-input" type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}">*/
/*                   <label class="form-check-label">{{ custom_field_value.name }}</label>*/
/*                   {% endif %} </div>*/
/*                 {% endfor %} </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'text' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group row custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'textarea' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group row custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'file' %}*/
/*           <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group row custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light border"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}" />*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %}</div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'date' %}*/
/*           <div class="form-group row{% if custom_field.required %} required {% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label" for="custom_field_cal_{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <div class="input-group date" id="custom_field_cal_{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#custom_field_cal_{{ custom_field.custom_field_id }}" />*/
/*                 <span class="input-group-append" data-target="#custom_field_cal_{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>*/
/*                 </span></div>*/
/*                 <script type="text/javascript"><!--*/
/*                 $("#custom_field_cal_{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                     locale: '{{ datepicker }}',*/
/*                     format: 'YYYY-MM-DD'*/
/*                 });*/
/*                 --></script>*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'time' %}*/
/*           <div class="form-group row{% if custom_field.required %} required {% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label" for="custom_field_cal_{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <div class="input-group date" id="custom_field_cal_{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#custom_field_cal_{{ custom_field.custom_field_id }}" />*/
/*                 <span class="input-group-append" data-target="#custom_field_cal_{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*                 <div class="input-group-text"><i class="fa fa-clock-o"></i></div>*/
/*                 </span></div>*/
/*                 <script type="text/javascript"><!--*/
/*                 $("#custom_field_cal_{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                     locale: '{{ datepicker }}',*/
/*                     format: 'HH:mm'*/
/*                 });*/
/*                 --></script>*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           {% endif %}*/
/*           {% if custom_field.type == 'datetime' %}*/
/*           <div class="form-group row{% if custom_field.required %} required {% endif %}" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 col-form-label" for="custom_field_cal_{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*                 <div class="input-group date" id="custom_field_cal_{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*                 <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#custom_field_cal_{{ custom_field.custom_field_id }}" />*/
/*                 <span class="input-group-append" data-target="#custom_field_cal_{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>*/
/*                 </span></div>*/
/*                 <script type="text/javascript"><!--*/
/*                 $("#custom_field_cal_{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                     locale: '{{ datepicker }}',*/
/*                     format: 'YYYY-MM-DD HH:mm'*/
/*                 });*/
/*                 <!--</script>*/
/*               </div>*/
/*               {% if error_custom_field[custom_field.custom_field_id] %}*/
/*               <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*               {% endif %} </div>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </fieldset>*/
/*         <fieldset>*/
/*           <legend>{{ text_your_password }}</legend>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-password">{{ entry_password }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*               {% if error_password %}*/
/*               <div class="text-danger">{{ error_password }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control" />*/
/*               {% if error_confirm %}*/
/*               <div class="text-danger">{{ error_confirm }}</div>*/
/*               {% endif %} </div>*/
/*           </div>*/
/*         </fieldset>*/
/* */
/*         <div class="form-group selectCustomUsersGroup row">*/
/*           <label class="col-sm-2 col-form-label" for="input-customUser">{{selectCustomUserGroup}}</label>*/
/*           <div class="col-sm-10">*/
/*             <div class="custom-control custom-radio">*/
/*               <input type="radio" class="custom-control-input" value="2" id="checkedsUserFiz" checked name="selectGroup">*/
/*               <label class="custom-control-label" for="checkedsUserFiz">{{fizUsers}}</label>*/
/*             </div>*/
/*             <div class="custom-control custom-radio">*/
/*               <input type="radio" class="custom-control-input" id="checkedsUserYur" name="selectGroup" value='3'>*/
/*               <label class="custom-control-label" for="checkedsUserYur">{{YurUsers}}</label>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <fieldset class="forYurUsers" style="display:none">*/
/*           <legend>{{ text_select_users_group }}</legend>*/
/* 		       <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-organiztion">{{ nameOrgText }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="organiztion"  placeholder="{{ organization_entry }}" id="input-organiztion" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/* 		     <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-inn">{{ inn_entry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="inn"  placeholder="{{ inn_entry }}" id="input-inn" class="form-control" />*/
/*               <div class="text-danger" style="display:none">Ошибка, Вы не ввели ИНН</div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row">*/
/*             <label class="col-sm-2 col-form-label" for="input-kpp">{{ entry_kpp }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="kpp" placeholder="{{ entry_kpp }}" id="input-kpp" class="form-control" />*/
/*            </div>*/
/*           </div>*/
/*        */
/* */
/*      */
/* */
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-ugrn">{{ ugrn_text }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="ugrn"  placeholder="{{ ugrn_text }}" id="input-ugrn" class="form-control" />*/
/*               <div class="text-danger" style="display:none">Ошибка, Вы не ввели ОГРНИП</div>*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/* */
/* */
/*         {{ captcha }}*/
/*         {% if text_agree %}*/
/*         <div class="buttons">*/
/*           <div class="pull-right">{{ text_agree }}*/
/*             {% if agree %}*/
/*             <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*             {% else %}*/
/*             <input type="checkbox" name="agree" value="1" />*/
/*             {% endif %}*/
/*             &nbsp;*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary sendRegister" />*/
/*           </div>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary sendRegister" />*/
/*           </div>*/
/*         </div>*/
/*         {% endif %}*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $(".sendRegister").click(function(e){*/
/*     if($(".selectCustomUsersGroup input[name=selectGroup]:checked").val() == 3){*/
/*           var req = $(".forYurUsers .required input");*/
/*           req.each(function(index){*/
/*             if($(this).val() == ""){*/
/*               e.preventDefault();*/
/*               $(this).next().show();*/
/*             }else{*/
/*               $(this).next().hide();*/
/* */
/*             }*/
/*           });*/
/*     }else{*/
/* */
/*     }*/
/* });*/
/* */
/*     $(".selectCustomUsersGroup input[name=selectGroup]").change(function(){*/
/*       console.log();*/
/*       if($(this).val() == 3){*/
/*           $(".forYurUsers").show();*/
/*       }else{*/
/*         $(".forYurUsers").hide();*/
/*       }*/
/*     });*/
/* */
/* <!--*/
/* // Sort the custom fields*/
/* $('#account .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/* 		$('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* */
/* 	if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/* 		$('#account .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('input[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('.custom-field').hide();*/
/* 			$('.custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('#custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('button[id^=\'button-custom-field\']').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(element).parent().find('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(element).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/
/* */

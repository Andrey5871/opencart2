<?php

/* bootstrap4_basic/template/checkout/register.twig */
class __TwigTemplate_625468381ad204e4d121c6da04575eb450dfd0af01d8f6c7661666516291bc8a extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <fieldset id=\"account\">
      <legend>";
        // line 14
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
      <div class=\"form-group\" style=\"display: ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <label class=\"col-form-label\">";
        // line 16
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 18
            echo "        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 19
                echo "        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 20
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked>
          <label class=\"form-check-label\">";
                // line 21
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
        </div>
        ";
            } else {
                // line 24
                echo "        <div class=\"form-check\">
          <input class=\"form-check-input\" type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 25
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">
          <label class=\"form-check-label\">";
                // line 26
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
        </div>
        ";
            }
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-firstname\">";
        // line 31
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 32
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-lastname\">";
        // line 35
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 36
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-email\">";
        // line 39
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 40
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-telephone\">";
        // line 43
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
        <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 44
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\" />
      </div>
      ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 47
            echo "      
      ";
            // line 48
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 49
                echo "      
      ";
                // line 50
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 51
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 52
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <select name=\"custom_field[";
                    // line 53
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 54
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
          
          
          
          ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 59
                        echo "          
          
          
          <option value=\"";
                        // line 62
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 67
                    echo "        
        
        
        </select>
      </div>
      ";
                }
                // line 73
                echo "      
      ";
                // line 74
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 75
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\">";
                    // line 76
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 77
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 78
                        echo "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"custom_field[";
                        // line 79
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">
            <label class=\"form-check-label\">";
                        // line 80
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 82
                    echo " </div>
      </div>
      ";
                }
                // line 85
                echo "      
      ";
                // line 86
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 87
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\">";
                    // line 88
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 89
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 90
                        echo "          <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"custom_field[";
                        // line 91
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">
              <label class=\"form-check-label\">";
                        // line 92
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo " </div>
      </div>
      ";
                }
                // line 97
                echo "      
      ";
                // line 98
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 99
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 100
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 101
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 104
                echo "      
      ";
                // line 105
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 106
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 107
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 108
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
      </div>
      ";
                }
                // line 111
                echo "      
      ";
                // line 112
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 113
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\">";
                    // line 114
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 116
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-light border\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 117
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 120
                echo "      
      ";
                // line 121
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 122
                    echo "      <div class=\"form-group\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"payment-custom-field";
                    // line 123
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"input-group date\" id=\"payment-custom-field";
                    // line 124
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-target-input=\"nearest\">
            <input type=\"text\" name=\"custom_field[";
                    // line 125
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"form-control datetimepicker-input\" data-target=\"#payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
            <span class=\"input-group-append\" data-target=\"#payment-custom-field";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-toggle=\"datetimepicker\">
            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
            </span></div>
            <script type=\"text/javascript\"><!--
            \$(\"#payment-custom-field";
                    // line 130
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\").datetimepicker({
                locale: '";
                    // line 131
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "',
                format: 'YYYY-MM-DD'
            });
            --></script>
          </div>
      ";
                }
                // line 137
                echo "      
      ";
                // line 138
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 139
                    echo "      <div class=\"form-group\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 140
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"input-group date\" id=\"input-payment-custom-field";
                    // line 141
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-target-input=\"nearest\">
            <input type=\"text\" name=\"custom_field[";
                    // line 142
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"form-control datetimepicker-input\" data-target=\"#input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
            <span class=\"input-group-append\" data-target=\"#input-payment-custom-field";
                    // line 143
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-toggle=\"datetimepicker\">
            <div class=\"input-group-text\"><i class=\"fa fa-clock-o\"></i></div>
            </span></div>
            <script type=\"text/javascript\"><!--
            \$(\"#input-payment-custom-field";
                    // line 147
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\").datetimepicker({
                locale: '";
                    // line 148
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "',
                format: 'HH:mm'
            });
            --></script>
          </div>
      ";
                }
                // line 154
                echo "      
      ";
                // line 155
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 156
                    echo "      <div class=\"form-group\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"payment-custom-field";
                    // line 157
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"input-group date\" id=\"payment-custom-field";
                    // line 158
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-target-input=\"nearest\">
            <input type=\"text\" name=\"custom_field[";
                    // line 159
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"form-control datetimepicker-input\" data-target=\"#payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
            <span class=\"input-group-append\" data-target=\"#payment-custom-field";
                    // line 160
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-toggle=\"datetimepicker\">
            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
            </span></div>
            <script type=\"text/javascript\"><!--
            \$(\"#payment-custom-field";
                    // line 164
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\").datetimepicker({
                locale: '";
                    // line 165
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "',
                format: 'YYYY-MM-DD HH:mm'
            });
            <!--</script>
          </div>
      ";
                }
                // line 171
                echo "      
      ";
            }
            // line 173
            echo "      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "    </fieldset>
    <fieldset>
      <legend>";
        // line 177
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-password\">";
        // line 179
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 180
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-payment-password\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-confirm\">";
        // line 183
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
        <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 184
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-payment-confirm\" class=\"form-control\" />
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 190
        echo (isset($context["text_your_address"]) ? $context["text_your_address"] : null);
        echo "</legend>
      <div class=\"form-group\">
        <label class=\"col-form-label\" for=\"input-payment-company\">";
        // line 192
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 193
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-address-1\">";
        // line 196
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 197
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"col-form-label\" for=\"input-payment-address-2\">";
        // line 200
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 201
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-city\">";
        // line 204
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 205
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-postcode\">";
        // line 208
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 209
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-country\">";
        // line 212
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 214
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          
          
          
         ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 219
            echo "          ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 220
                echo "          
          
          
          <option value=\"";
                // line 223
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          
          
          
          ";
            } else {
                // line 228
                echo "          
          
          
          <option value=\"";
                // line 231
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          
          
          
          ";
            }
            // line 236
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "        
        
        
        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"col-form-label\" for=\"input-payment-zone\">";
        // line 243
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 248
            echo "      
      ";
            // line 249
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 250
                echo "      
      ";
                // line 251
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 252
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 253
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <select name=\"custom_field[";
                    // line 254
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 255
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
          
          
          
          ";
                    // line 259
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 260
                        echo "          
          
          
          <option value=\"";
                        // line 263
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 268
                    echo "        
        
        
        </select>
      </div>
      ";
                }
                // line 274
                echo "      
      ";
                // line 275
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 276
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\">";
                    // line 277
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 278
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 279
                        echo "          <div class=\"form-check\">
            <input class=\"form-check-input\" type=\"radio\" name=\"custom_field[";
                        // line 280
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">
            <label class=\"form-check-label\">";
                        // line 281
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 283
                    echo " </div>
      </div>
      ";
                }
                // line 286
                echo "      
      ";
                // line 287
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 288
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\">";
                    // line 289
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 290
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 291
                        echo "          <div class=\"form-check\">
              <input class=\"form-check-input\" type=\"checkbox\" name=\"custom_field[";
                        // line 292
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">
              <label class=\"form-check-label\">";
                        // line 293
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 295
                    echo " </div>
      </div>
      ";
                }
                // line 298
                echo "      
      ";
                // line 299
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 300
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 301
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 302
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 305
                echo "      
      ";
                // line 306
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 307
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 308
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 309
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
      </div>
      ";
                }
                // line 312
                echo "      
      ";
                // line 313
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 314
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\">";
                    // line 315
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 317
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-light border\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 318
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 321
                echo "      
      ";
                // line 322
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 323
                    echo "      <div class=\"form-group\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"payment-custom-field";
                    // line 324
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"input-group date\" id=\"payment-custom-field";
                    // line 325
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-target-input=\"nearest\">
            <input type=\"text\" name=\"custom_field[";
                    // line 326
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"form-control datetimepicker-input\" data-target=\"#payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
            <span class=\"input-group-append\" data-target=\"#payment-custom-field";
                    // line 327
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-toggle=\"datetimepicker\">
            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
            </span></div>
            <script type=\"text/javascript\"><!--
            \$(\"#payment-custom-field";
                    // line 331
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\").datetimepicker({
                locale: '";
                    // line 332
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "',
                format: 'YYYY-MM-DD'
            });
            --></script>
          </div>
      ";
                }
                // line 338
                echo "      
      ";
                // line 339
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 340
                    echo "      <div class=\"form-group\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"input-payment-custom-field";
                    // line 341
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"input-group date\" id=\"input-payment-custom-field";
                    // line 342
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-target-input=\"nearest\">
            <input type=\"text\" name=\"custom_field[";
                    // line 343
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"form-control datetimepicker-input\" data-target=\"#input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
            <span class=\"input-group-append\" data-target=\"#input-payment-custom-field";
                    // line 344
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-toggle=\"datetimepicker\">
            <div class=\"input-group-text\"><i class=\"fa fa-clock-o\"></i></div>
            </span></div>
            <script type=\"text/javascript\"><!--
            \$(\"#input-payment-custom-field";
                    // line 348
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\").datetimepicker({
                locale: '";
                    // line 349
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "',
                format: 'HH:mm'
            });
            --></script>
          </div>
      ";
                }
                // line 355
                echo "      
      ";
                // line 356
                if (($this->getAttribute($context["custom_field"], "type", array()) == "datetime")) {
                    // line 357
                    echo "      <div class=\"form-group\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"col-form-label\" for=\"payment-custom-field";
                    // line 358
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"input-group date\" id=\"payment-custom-field";
                    // line 359
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-target-input=\"nearest\">
            <input type=\"text\" name=\"custom_field[";
                    // line 360
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" class=\"form-control datetimepicker-input\" data-target=\"#payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
            <span class=\"input-group-append\" data-target=\"#payment-custom-field";
                    // line 361
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-toggle=\"datetimepicker\">
            <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
            </span></div>
            <script type=\"text/javascript\"><!--
            \$(\"#payment-custom-field";
                    // line 365
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\").datetimepicker({
                locale: '";
                    // line 366
                    echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
                    echo "',
                format: 'YYYY-MM-DD HH:mm'
            });
            <!--</script>
          </div>
      ";
                }
                // line 372
                echo "      
      ";
            }
            // line 374
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "    </fieldset>

    ";
        // line 377
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "</div>
</div>
<div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\">
    <label class=\"form-check-label\" for=\"newsletter\">";
        // line 381
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
</div>
";
        // line 383
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 384
            echo "<div class=\"form-check\">
    <input class=\"form-check-input\" type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\">
    <label class=\"form-check-label\">";
            // line 386
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "</label>
</div>
";
        }
        // line 389
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 390
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">";
            // line 391
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo " 
    &nbsp;
    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    <input type=\"button\" value=\"";
            // line 394
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        } else {
            // line 398
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
            // line 400
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        }
        // line 403
        echo " 
<script type=\"text/javascript\"><!--
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

\$('#address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\$('#address .form-group:first').before(this);
\t}
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#collapse-payment-address .custom-field').hide();
\t\t\t\$('#collapse-payment-address .custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar node = this;

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
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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

<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 540
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 546
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 553
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script>";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1362 => 553,  1352 => 546,  1343 => 540,  1204 => 403,  1195 => 400,  1191 => 398,  1182 => 394,  1176 => 391,  1173 => 390,  1171 => 389,  1165 => 386,  1161 => 384,  1159 => 383,  1154 => 381,  1147 => 377,  1143 => 375,  1137 => 374,  1133 => 372,  1124 => 366,  1120 => 365,  1113 => 361,  1101 => 360,  1097 => 359,  1091 => 358,  1086 => 357,  1084 => 356,  1081 => 355,  1072 => 349,  1068 => 348,  1061 => 344,  1049 => 343,  1045 => 342,  1039 => 341,  1034 => 340,  1032 => 339,  1029 => 338,  1020 => 332,  1016 => 331,  1009 => 327,  997 => 326,  993 => 325,  987 => 324,  982 => 323,  980 => 322,  977 => 321,  967 => 318,  959 => 317,  954 => 315,  947 => 314,  945 => 313,  942 => 312,  928 => 309,  922 => 308,  915 => 307,  913 => 306,  910 => 305,  896 => 302,  890 => 301,  883 => 300,  881 => 299,  878 => 298,  873 => 295,  864 => 293,  856 => 292,  853 => 291,  847 => 290,  843 => 289,  836 => 288,  834 => 287,  831 => 286,  826 => 283,  817 => 281,  809 => 280,  806 => 279,  800 => 278,  796 => 277,  789 => 276,  787 => 275,  784 => 274,  776 => 268,  763 => 263,  758 => 260,  754 => 259,  747 => 255,  739 => 254,  733 => 253,  726 => 252,  724 => 251,  721 => 250,  719 => 249,  716 => 248,  712 => 247,  705 => 243,  697 => 237,  691 => 236,  681 => 231,  676 => 228,  666 => 223,  661 => 220,  658 => 219,  654 => 218,  647 => 214,  642 => 212,  634 => 209,  630 => 208,  624 => 205,  620 => 204,  614 => 201,  610 => 200,  604 => 197,  600 => 196,  594 => 193,  590 => 192,  585 => 190,  576 => 184,  572 => 183,  566 => 180,  562 => 179,  557 => 177,  553 => 175,  546 => 173,  542 => 171,  533 => 165,  529 => 164,  522 => 160,  510 => 159,  506 => 158,  500 => 157,  495 => 156,  493 => 155,  490 => 154,  481 => 148,  477 => 147,  470 => 143,  458 => 142,  454 => 141,  448 => 140,  443 => 139,  441 => 138,  438 => 137,  429 => 131,  425 => 130,  418 => 126,  406 => 125,  402 => 124,  396 => 123,  391 => 122,  389 => 121,  386 => 120,  376 => 117,  368 => 116,  363 => 114,  356 => 113,  354 => 112,  351 => 111,  337 => 108,  331 => 107,  324 => 106,  322 => 105,  319 => 104,  305 => 101,  299 => 100,  292 => 99,  290 => 98,  287 => 97,  282 => 94,  273 => 92,  265 => 91,  262 => 90,  256 => 89,  252 => 88,  245 => 87,  243 => 86,  240 => 85,  235 => 82,  226 => 80,  218 => 79,  215 => 78,  209 => 77,  205 => 76,  198 => 75,  196 => 74,  193 => 73,  185 => 67,  172 => 62,  167 => 59,  163 => 58,  156 => 54,  148 => 53,  142 => 52,  135 => 51,  133 => 50,  130 => 49,  128 => 48,  125 => 47,  121 => 46,  116 => 44,  112 => 43,  106 => 40,  102 => 39,  96 => 36,  92 => 35,  86 => 32,  82 => 31,  73 => 29,  67 => 26,  63 => 25,  60 => 24,  54 => 21,  50 => 20,  47 => 19,  44 => 18,  40 => 17,  36 => 16,  28 => 15,  24 => 14,  19 => 11,);
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
/* <div class="row">*/
/*   <div class="col-sm-6">*/
/*     <fieldset id="account">*/
/*       <legend>{{ text_your_details }}</legend>*/
/*       <div class="form-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*         <label class="col-form-label">{{ entry_customer_group }}</label>*/
/*         {% for customer_group in customer_groups %}*/
/*         {% if customer_group.customer_group_id == customer_group_id %}*/
/*         <div class="form-check">*/
/*           <input class="form-check-input" type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked>*/
/*           <label class="form-check-label">{{ customer_group.name }}</label>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="form-check">*/
/*           <input class="form-check-input" type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}">*/
/*           <label class="form-check-label">{{ customer_group.name }}</label>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% endfor %}</div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/*         <input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-payment-firstname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*         <input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-email">{{ entry_email }}</label>*/
/*         <input type="text" name="email" value="" placeholder="{{ entry_email }}" id="input-payment-email" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-telephone">{{ entry_telephone }}</label>*/
/*         <input type="text" name="telephone" value="" placeholder="{{ entry_telephone }}" id="input-payment-telephone" class="form-control" />*/
/*       </div>*/
/*       {% for custom_field in custom_fields %}*/
/*       */
/*       {% if custom_field.location == 'account' %}*/
/*       */
/*       {% if custom_field.type == 'select' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           */
/*           */
/*           */
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           */
/*           */
/*           */
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           */
/*           */
/*           */
/*           {% endfor %}*/
/*         */
/*         */
/*         */
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="form-check">*/
/*             <input class="form-check-input" type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}">*/
/*             <label class="form-check-label">{{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="form-check">*/
/*               <input class="form-check-input" type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}">*/
/*               <label class="form-check-label">{{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light border"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'date' %}*/
/*       <div class="form-group" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="input-group date" id="payment-custom-field{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*             <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*             <span class="input-group-append" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*             <div class="input-group-text"><i class="fa fa-calendar"></i></div>*/
/*             </span></div>*/
/*             <script type="text/javascript"><!--*/
/*             $("#payment-custom-field{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                 locale: '{{ datepicker }}',*/
/*                 format: 'YYYY-MM-DD'*/
/*             });*/
/*             --></script>*/
/*           </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'time' %}*/
/*       <div class="form-group" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="input-group date" id="input-payment-custom-field{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*             <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*             <span class="input-group-append" data-target="#input-payment-custom-field{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*             <div class="input-group-text"><i class="fa fa-clock-o"></i></div>*/
/*             </span></div>*/
/*             <script type="text/javascript"><!--*/
/*             $("#input-payment-custom-field{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                 locale: '{{ datepicker }}',*/
/*                 format: 'HH:mm'*/
/*             });*/
/*             --></script>*/
/*           </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'datetime' %}*/
/*       <div class="form-group" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="input-group date" id="payment-custom-field{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*             <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*             <span class="input-group-append" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*             <div class="input-group-text"><i class="fa fa-calendar"></i></div>*/
/*             </span></div>*/
/*             <script type="text/javascript"><!--*/
/*             $("#payment-custom-field{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                 locale: '{{ datepicker }}',*/
/*                 format: 'YYYY-MM-DD HH:mm'*/
/*             });*/
/*             <!--</script>*/
/*           </div>*/
/*       {% endif %}*/
/*       */
/*       {% endif %}*/
/*       */
/*       {% endfor %}*/
/*     </fieldset>*/
/*     <fieldset>*/
/*       <legend>{{ text_your_password }}</legend>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-password">{{ entry_password }}</label>*/
/*         <input type="password" name="password" value="" placeholder="{{ entry_password }}" id="input-payment-password" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-confirm">{{ entry_confirm }}</label>*/
/*         <input type="password" name="confirm" value="" placeholder="{{ entry_confirm }}" id="input-payment-confirm" class="form-control" />*/
/*       </div>*/
/*     </fieldset>*/
/*   </div>*/
/*   <div class="col-sm-6">*/
/*     <fieldset id="address">*/
/*       <legend>{{ text_your_address }}</legend>*/
/*       <div class="form-group">*/
/*         <label class="col-form-label" for="input-payment-company">{{ entry_company }}</label>*/
/*         <input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-payment-company" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/*         <input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-payment-address-1" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="col-form-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/*         <input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-payment-address-2" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-city">{{ entry_city }}</label>*/
/*         <input type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-payment-city" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/*         <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-payment-postcode" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-country">{{ entry_country }}</label>*/
/*         <select name="country_id" id="input-payment-country" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           */
/*           */
/*           */
/*          {% for country in countries %}*/
/*           {% if country.country_id == country_id %}*/
/*           */
/*           */
/*           */
/*           <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*           */
/*           */
/*           */
/*           {% else %}*/
/*           */
/*           */
/*           */
/*           <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*           */
/*           */
/*           */
/*           {% endif %}*/
/*           {% endfor %}*/
/*         */
/*         */
/*         */
/*         </select>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-form-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/*         <select name="zone_id" id="input-payment-zone" class="form-control">*/
/*         </select>*/
/*       </div>*/
/*       {% for custom_field in custom_fields %}*/
/*       */
/*       {% if custom_field.location == 'address' %}*/
/*       */
/*       {% if custom_field.type == 'select' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           */
/*           */
/*           */
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           */
/*           */
/*           */
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           */
/*           */
/*           */
/*           {% endfor %}*/
/*         */
/*         */
/*         */
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="form-check">*/
/*             <input class="form-check-input" type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}">*/
/*             <label class="form-check-label">{{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="form-check">*/
/*               <input class="form-check-input" type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}">*/
/*               <label class="form-check-label">{{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-light border"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'date' %}*/
/*       <div class="form-group" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="input-group date" id="payment-custom-field{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*             <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*             <span class="input-group-append" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*             <div class="input-group-text"><i class="fa fa-calendar"></i></div>*/
/*             </span></div>*/
/*             <script type="text/javascript"><!--*/
/*             $("#payment-custom-field{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                 locale: '{{ datepicker }}',*/
/*                 format: 'YYYY-MM-DD'*/
/*             });*/
/*             --></script>*/
/*           </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'time' %}*/
/*       <div class="form-group" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="input-group date" id="input-payment-custom-field{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*             <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*             <span class="input-group-append" data-target="#input-payment-custom-field{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*             <div class="input-group-text"><i class="fa fa-clock-o"></i></div>*/
/*             </span></div>*/
/*             <script type="text/javascript"><!--*/
/*             $("#input-payment-custom-field{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                 locale: '{{ datepicker }}',*/
/*                 format: 'HH:mm'*/
/*             });*/
/*             --></script>*/
/*           </div>*/
/*       {% endif %}*/
/*       */
/*       {% if custom_field.type == 'datetime' %}*/
/*       <div class="form-group" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="col-form-label" for="payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="input-group date" id="payment-custom-field{{ custom_field.custom_field_id }}" data-target-input="nearest">*/
/*             <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" class="form-control datetimepicker-input" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*             <span class="input-group-append" data-target="#payment-custom-field{{ custom_field.custom_field_id }}" data-toggle="datetimepicker">*/
/*             <div class="input-group-text"><i class="fa fa-calendar"></i></div>*/
/*             </span></div>*/
/*             <script type="text/javascript"><!--*/
/*             $("#payment-custom-field{{ custom_field.custom_field_id }}").datetimepicker({*/
/*                 locale: '{{ datepicker }}',*/
/*                 format: 'YYYY-MM-DD HH:mm'*/
/*             });*/
/*             <!--</script>*/
/*           </div>*/
/*       {% endif %}*/
/*       */
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </fieldset>*/
/* */
/*     {{ captcha }}</div>*/
/* </div>*/
/* <div class="form-check">*/
/*     <input class="form-check-input" type="checkbox" name="newsletter" value="1" id="newsletter">*/
/*     <label class="form-check-label" for="newsletter">{{ entry_newsletter }}</label>*/
/* </div>*/
/* {% if shipping_required %}*/
/* <div class="form-check">*/
/*     <input class="form-check-input" type="checkbox" name="shipping_address" value="1" checked="checked">*/
/*     <label class="form-check-label">{{ entry_shipping }}</label>*/
/* </div>*/
/* {% endif %}*/
/* {% if text_agree %}*/
/* <div class="buttons clearfix">*/
/*   <div class="pull-right">{{ text_agree }} */
/*     &nbsp;*/
/*     <input type="checkbox" name="agree" value="1" />*/
/*     <input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="buttons clearfix">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% endif %} */
/* <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('#account .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/* 		$('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
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
/* $('#address .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {*/
/* 		$('#address .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#address .form-group').length) {*/
/* 		$('#address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#address .form-group').length) {*/
/* 		$('#address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#address .form-group').length) {*/
/* 		$('#address .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('#collapse-payment-address input[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('#collapse-payment-address .custom-field').hide();*/
/* 			$('#collapse-payment-address .custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('#payment-custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-address input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function() {*/
/* 	var node = this;*/
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
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* */
/* <script type="text/javascript"><!--*/
/* $('#collapse-payment-address select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#collapse-payment-address select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#collapse-payment-address select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#collapse-payment-address select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-address select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/

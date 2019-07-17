<?php

/* bootstrap4_basic/template/information/contact.twig */
class __TwigTemplate_7e4e61bfdf045555d642fb7ee7615b84b10fb4024b49202649820281241bbe45 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"information-contact\" class=\"container\">
  <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 5
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
            // line 6
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
        // line 8
        echo "    </ol>
  </nav>

\t\t";
        // line 11
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 12
            echo "\t\t<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
\t\t";
        }
        // line 14
        echo "\t\t
  <div class=\"row\">";
        // line 15
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 16
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 18
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 22
            echo "    ";
        }
        // line 23
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 24
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <h3>";
        // line 25
        echo (isset($context["text_location"]) ? $context["text_location"] : null);
        echo "</h3>
      <div class=\"card card-default\">
        <div class=\"card-body\">
          <div class=\"row\">
            ";
        // line 29
        if ((isset($context["image"]) ? $context["image"] : null)) {
            // line 30
            echo "            <div class=\"col-sm-3\"><img src=\"";
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" title=\"";
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 32
        echo "            <div class=\"col-sm-3\"><strong>";
        echo (isset($context["store"]) ? $context["store"] : null);
        echo "</strong><br />
              <address>
              ";
        // line 34
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "
              </address>
              ";
        // line 36
        if ((isset($context["geocode"]) ? $context["geocode"] : null)) {
            // line 37
            echo "              <a href=\"https://maps.google.com/maps?q=";
            echo twig_urlencode_filter((isset($context["geocode"]) ? $context["geocode"] : null));
            echo "&hl=";
            echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
            echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            echo (isset($context["button_map"]) ? $context["button_map"] : null);
            echo "</a>
              ";
        }
        // line 39
        echo "            </div>
            <div class=\"col-sm-3\"><strong>";
        // line 40
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo "</strong><br>
              ";
        // line 41
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
              <br />
              ";
        // line 43
        if ((isset($context["fax"]) ? $context["fax"] : null)) {
            // line 44
            echo "              <strong>";
            echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
            echo "</strong><br>
              ";
            // line 45
            echo (isset($context["fax"]) ? $context["fax"] : null);
            echo "
              ";
        }
        // line 47
        echo "            </div>
            <div class=\"col-sm-3\">
              ";
        // line 49
        if ((isset($context["open"]) ? $context["open"] : null)) {
            // line 50
            echo "              <strong>";
            echo (isset($context["text_open"]) ? $context["text_open"] : null);
            echo "</strong><br />
              ";
            // line 51
            echo (isset($context["open"]) ? $context["open"] : null);
            echo "<br />
              <br />
              ";
        }
        // line 54
        echo "              ";
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 55
            echo "              <strong>";
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</strong><br />
              ";
            // line 56
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "
              ";
        }
        // line 58
        echo "            </div>
          </div>
        </div>
      </div>
      ";
        // line 62
        if ((isset($context["locations"]) ? $context["locations"] : null)) {
            // line 63
            echo "      <h3>";
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</h3>
      <div class=\"card-group\" id=\"accordion\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locations"]) ? $context["locations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 66
                echo "        <div class=\"card card-default\">
          <div class=\"card-header\">
            <h4 class=\"card-title\"><a href=\"#collapse-location";
                // line 68
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                echo $this->getAttribute($context["location"], "name", array());
                echo " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"card-collapse collapse\" id=\"collapse-location";
                // line 70
                echo $this->getAttribute($context["location"], "location_id", array());
                echo "\">
            <div class=\"card-body\">
              <div class=\"row\">
                ";
                // line 73
                if ($this->getAttribute($context["location"], "image", array())) {
                    // line 74
                    echo "                <div class=\"col-sm-3\"><img src=\"";
                    echo $this->getAttribute($context["location"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["location"], "name", array());
                    echo "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 76
                echo "                <div class=\"col-sm-3\"><strong>";
                echo $this->getAttribute($context["location"], "name", array());
                echo "</strong><br />
                  <address>
                  ";
                // line 78
                echo $this->getAttribute($context["location"], "address", array());
                echo "
                  </address>
                  ";
                // line 80
                if ($this->getAttribute($context["location"], "geocode", array())) {
                    // line 81
                    echo "                  <a href=\"https://maps.google.com/maps?q=";
                    echo twig_urlencode_filter($this->getAttribute($context["location"], "geocode", array()));
                    echo "&hl=";
                    echo (isset($context["geocode_hl"]) ? $context["geocode_hl"] : null);
                    echo "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    echo (isset($context["button_map"]) ? $context["button_map"] : null);
                    echo "</a>
                  ";
                }
                // line 83
                echo "                </div>
                <div class=\"col-sm-3\"> <strong>";
                // line 84
                echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
                echo "</strong><br>
                  ";
                // line 85
                echo $this->getAttribute($context["location"], "telephone", array());
                echo "<br />
                  <br />
                  ";
                // line 87
                if ($this->getAttribute($context["location"], "fax", array())) {
                    // line 88
                    echo "                  <strong>";
                    echo (isset($context["text_fax"]) ? $context["text_fax"] : null);
                    echo "</strong><br>
                  ";
                    // line 89
                    echo $this->getAttribute($context["location"], "fax", array());
                    echo "
                  ";
                }
                // line 91
                echo "                </div>
                <div class=\"col-sm-3\">
                  ";
                // line 93
                if ($this->getAttribute($context["location"], "open", array())) {
                    // line 94
                    echo "                  <strong>";
                    echo (isset($context["text_open"]) ? $context["text_open"] : null);
                    echo "</strong><br />
                  ";
                    // line 95
                    echo $this->getAttribute($context["location"], "open", array());
                    echo "<br />
                  <br />
                  ";
                }
                // line 98
                echo "                  ";
                if ($this->getAttribute($context["location"], "comment", array())) {
                    // line 99
                    echo "                  <strong>";
                    echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
                    echo "</strong><br />
                  ";
                    // line 100
                    echo $this->getAttribute($context["location"], "comment", array());
                    echo "
                  ";
                }
                // line 102
                echo "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "      </div>
      ";
        }
        // line 110
        echo "      <form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <fieldset>
          <legend>";
        // line 112
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</legend>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-name\">";
        // line 114
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 116
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 117
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 118
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
              ";
        }
        // line 120
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 123
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 125
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 126
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 127
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
              ";
        }
        // line 129
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-enquiry\">";
        // line 132
        echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
        // line 134
        echo (isset($context["enquiry"]) ? $context["enquiry"] : null);
        echo "</textarea>
              ";
        // line 135
        if ((isset($context["error_enquiry"]) ? $context["error_enquiry"] : null)) {
            // line 136
            echo "              <div class=\"text-danger\">";
            echo (isset($context["error_enquiry"]) ? $context["error_enquiry"] : null);
            echo "</div>
              ";
        }
        // line 138
        echo "            </div>
          </div>
          ";
        // line 140
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
        </fieldset>

\t\t";
        // line 143
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 144
            echo "\t\t<div class=\"buttons\">
\t\t  <div class=\"pull-right\">";
            // line 145
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
\t\t\t";
            // line 146
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 147
                echo "\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t";
            } else {
                // line 149
                echo "\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t";
            }
            // line 151
            echo "\t\t\t&nbsp;
\t\t\t<input type=\"submit\" value=\"";
            // line 152
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" class=\"btn btn-primary\" />
\t\t  </div>
\t\t</div>
\t\t";
        } else {
            // line 156
            echo "\t\t
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            // line 159
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "\" />
          </div>
        </div>

\t\t";
        }
        // line 164
        echo "\t\t
      </form>
      ";
        // line 166
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 167
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 169
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/information/contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 169,  484 => 167,  480 => 166,  476 => 164,  468 => 159,  463 => 156,  456 => 152,  453 => 151,  449 => 149,  445 => 147,  443 => 146,  439 => 145,  436 => 144,  434 => 143,  428 => 140,  424 => 138,  418 => 136,  416 => 135,  412 => 134,  407 => 132,  402 => 129,  396 => 127,  394 => 126,  390 => 125,  385 => 123,  380 => 120,  374 => 118,  372 => 117,  368 => 116,  363 => 114,  358 => 112,  352 => 110,  348 => 108,  337 => 102,  332 => 100,  327 => 99,  324 => 98,  318 => 95,  313 => 94,  311 => 93,  307 => 91,  302 => 89,  297 => 88,  295 => 87,  290 => 85,  286 => 84,  283 => 83,  273 => 81,  271 => 80,  266 => 78,  260 => 76,  250 => 74,  248 => 73,  242 => 70,  235 => 68,  231 => 66,  227 => 65,  221 => 63,  219 => 62,  213 => 58,  208 => 56,  203 => 55,  200 => 54,  194 => 51,  189 => 50,  187 => 49,  183 => 47,  178 => 45,  173 => 44,  171 => 43,  166 => 41,  162 => 40,  159 => 39,  149 => 37,  147 => 36,  142 => 34,  136 => 32,  126 => 30,  124 => 29,  117 => 25,  113 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  86 => 16,  82 => 15,  79 => 14,  73 => 12,  71 => 11,  66 => 8,  43 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="information-contact" class="container">*/
/*   <nav aria-label="breadcrumb">*/
/*     <ol class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li class="breadcrumb-item"{% if loop.last %} aria-current="page"{% endif %}><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ol>*/
/*   </nav>*/
/* */
/* 		{% if error_warning %}*/
/* 		<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* 		{% endif %}*/
/* 		*/
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
/*       <h3>{{ text_location }}</h3>*/
/*       <div class="card card-default">*/
/*         <div class="card-body">*/
/*           <div class="row">*/
/*             {% if image %}*/
/*             <div class="col-sm-3"><img src="{{ image }}" alt="{{ store }}" title="{{ store }}" class="img-thumbnail" /></div>*/
/*             {% endif %}*/
/*             <div class="col-sm-3"><strong>{{ store }}</strong><br />*/
/*               <address>*/
/*               {{ address }}*/
/*               </address>*/
/*               {% if geocode %}*/
/*               <a href="https://maps.google.com/maps?q={{ geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3"><strong>{{ text_telephone }}</strong><br>*/
/*               {{ telephone }}<br />*/
/*               <br />*/
/*               {% if fax %}*/
/*               <strong>{{ text_fax }}</strong><br>*/
/*               {{ fax }}*/
/*               {% endif %}*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*               {% if open %}*/
/*               <strong>{{ text_open }}</strong><br />*/
/*               {{ open }}<br />*/
/*               <br />*/
/*               {% endif %}*/
/*               {% if comment %}*/
/*               <strong>{{ text_comment }}</strong><br />*/
/*               {{ comment }}*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if locations %}*/
/*       <h3>{{ text_store }}</h3>*/
/*       <div class="card-group" id="accordion">*/
/*         {% for location in locations %}*/
/*         <div class="card card-default">*/
/*           <div class="card-header">*/
/*             <h4 class="card-title"><a href="#collapse-location{{ location.location_id }}" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ location.name }} <i class="fa fa-caret-down"></i></a></h4>*/
/*           </div>*/
/*           <div class="card-collapse collapse" id="collapse-location{{ location.location_id }}">*/
/*             <div class="card-body">*/
/*               <div class="row">*/
/*                 {% if location.image %}*/
/*                 <div class="col-sm-3"><img src="{{ location.image }}" alt="{{ location.name }}" title="{{ location.name }}" class="img-thumbnail" /></div>*/
/*                 {% endif %}*/
/*                 <div class="col-sm-3"><strong>{{ location.name }}</strong><br />*/
/*                   <address>*/
/*                   {{ location.address }}*/
/*                   </address>*/
/*                   {% if location.geocode %}*/
/*                   <a href="https://maps.google.com/maps?q={{ location.geocode|url_encode }}&hl={{ geocode_hl }}&t=m&z=15" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> {{ button_map }}</a>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3"> <strong>{{ text_telephone }}</strong><br>*/
/*                   {{ location.telephone }}<br />*/
/*                   <br />*/
/*                   {% if location.fax %}*/
/*                   <strong>{{ text_fax }}</strong><br>*/
/*                   {{ location.fax }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                   {% if location.open %}*/
/*                   <strong>{{ text_open }}</strong><br />*/
/*                   {{ location.open }}<br />*/
/*                   <br />*/
/*                   {% endif %}*/
/*                   {% if location.comment %}*/
/*                   <strong>{{ text_comment }}</strong><br />*/
/*                   {{ location.comment }}*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*       {% endif %}*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <fieldset>*/
/*           <legend>{{ text_contact }}</legend>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-name">{{ entry_name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="name" value="{{ name }}" id="input-name" class="form-control" />*/
/*               {% if error_name %}*/
/*               <div class="text-danger">{{ error_name }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" id="input-email" class="form-control" />*/
/*               {% if error_email %}*/
/*               <div class="text-danger">{{ error_email }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group row required">*/
/*             <label class="col-sm-2 col-form-label" for="input-enquiry">{{ entry_enquiry }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control">{{ enquiry }}</textarea>*/
/*               {% if error_enquiry %}*/
/*               <div class="text-danger">{{ error_enquiry }}</div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*           {{ captcha }}*/
/*         </fieldset>*/
/* */
/* 		{% if text_agree %}*/
/* 		<div class="buttons">*/
/* 		  <div class="pull-right">{{ text_agree }}*/
/* 			{% if agree %}*/
/* 			<input type="checkbox" name="agree" value="1" checked="checked" />*/
/* 			{% else %}*/
/* 			<input type="checkbox" name="agree" value="1" />*/
/* 			{% endif %}*/
/* 			&nbsp;*/
/* 			<input type="submit" value="{{ button_submit }}" class="btn btn-primary" />*/
/* 		  </div>*/
/* 		</div>*/
/* 		{% else %}*/
/* 		*/
/*         <div class="buttons">*/
/*           <div class="pull-right">*/
/*             <input class="btn btn-primary" type="submit" value="{{ button_submit }}" />*/
/*           </div>*/
/*         </div>*/
/* */
/* 		{% endif %}*/
/* 		*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
/* */

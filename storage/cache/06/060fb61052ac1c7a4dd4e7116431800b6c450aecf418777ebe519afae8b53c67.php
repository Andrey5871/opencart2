<?php

/* bootstrap4_basic/template/account/order_info.twig */
class __TwigTemplate_a2c2300611e0d69eb5a48b1fe9d9f047a1dc06f9413fdbdf6ee72aa14c0a8cf4 extends Twig_Template
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
<div id=\"account-order\" class=\"container\">
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
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 22
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 26
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 27
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 31
        echo "  <div class=\"container\">
  <div class=\"row\">";
        // line 32
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 33
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 34
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 35
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 36
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 39
            echo "    ";
        }
        // line 40
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 41
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 45
        echo (isset($context["text_order_detail"]) ? $context["text_order_detail"] : null);
        echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 50
        if ((isset($context["invoice_no"]) ? $context["invoice_no"] : null)) {
            echo " <b>";
            echo (isset($context["text_invoice_no"]) ? $context["text_invoice_no"] : null);
            echo "</b> ";
            echo (isset($context["invoice_no"]) ? $context["invoice_no"] : null);
            echo "<br />
              ";
        }
        // line 51
        echo " <b>";
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "</b> #";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br />
              <b>";
        // line 52
        echo (isset($context["text_date_added"]) ? $context["text_date_added"] : null);
        echo "</b> ";
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 53
        if ((isset($context["payment_method"]) ? $context["payment_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_payment_method"]) ? $context["text_payment_method"] : null);
            echo "</b> ";
            echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
            echo "<br />
              ";
        }
        // line 55
        echo "              ";
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</b> ";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo " ";
        }
        echo "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 62
        echo (isset($context["text_payment_address"]) ? $context["text_payment_address"] : null);
        echo "</td>
            ";
        // line 63
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 64
            echo "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
            ";
        }
        // line 65
        echo " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 69
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
            ";
        // line 70
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 71
            echo "            <td class=\"text-left\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
            ";
        }
        // line 72
        echo " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 79
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
              <td class=\"text-left\">";
        // line 80
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 81
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 82
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right\">";
        // line 83
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
              ";
        // line 84
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 85
            echo "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 86
        echo " </tr>
          </thead>
          <tbody>
          
          ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 91
            echo "          <tr>
            <td class=\"text-left\">";
            // line 92
            echo $this->getAttribute($context["product"], "name", array());
            echo "
              ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                echo " <br />
              &nbsp;<small> - ";
                // line 94
                echo $this->getAttribute($context["option"], "name", array());
                echo ": ";
                echo $this->getAttribute($context["option"], "value", array());
                echo "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
            <td class=\"text-left\">";
            // line 95
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 96
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 97
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 98
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 99
            if ($this->getAttribute($context["product"], "reorder", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "reorder", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_reorder"]) ? $context["button_reorder"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            echo " <a href=\"";
            echo $this->getAttribute($context["product"], "return", array());
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_return"]) ? $context["button_return"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 103
            echo "          <tr>
            <td class=\"text-left\">";
            // line 104
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 107
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            <td class=\"text-right\">";
            // line 108
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            ";
            // line 109
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 110
                echo "            <td></td>
            ";
            }
            // line 111
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "            </tbody>
          
          <tfoot>
          
          ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 118
            echo "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 120
            echo $this->getAttribute($context["total"], "title", array());
            echo "</b></td>
            <td class=\"text-right\">";
            // line 121
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
            ";
            // line 122
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 123
                echo "            <td></td>
            ";
            }
            // line 124
            echo " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "            </tfoot>
          
        </table>
      </div>
      ";
        // line 130
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 131
            echo "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 134
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 139
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 144
        echo "      ";
        if ((isset($context["histories"]) ? $context["histories"] : null)) {
            // line 145
            echo "      <h3>";
            echo (isset($context["text_history"]) ? $context["text_history"] : null);
            echo "</h3>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 149
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 150
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</td>
            <td class=\"text-left\">";
            // line 151
            echo (isset($context["column_comment"]) ? $context["column_comment"] : null);
            echo "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 156
            if ((isset($context["histories"]) ? $context["histories"] : null)) {
                // line 157
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 158
                    echo "        <tr>
          <td class=\"text-left\">";
                    // line 159
                    echo $this->getAttribute($context["history"], "date_added", array());
                    echo "</td>
          <td class=\"text-left\">";
                    // line 160
                    echo $this->getAttribute($context["history"], "status", array());
                    echo "</td>
          <td class=\"text-left\">";
                    // line 161
                    echo $this->getAttribute($context["history"], "comment", array());
                    echo "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "        ";
            } else {
                // line 165
                echo "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 166
                echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
                echo "</td>
        </tr>
        ";
            }
            // line 169
            echo "          </tbody>
        
      </table>
      ";
        }
        // line 173
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 174
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 176
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 177
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
</div>
</div>
";
        // line 181
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/account/order_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 181,  508 => 177,  504 => 176,  497 => 174,  494 => 173,  488 => 169,  482 => 166,  479 => 165,  476 => 164,  467 => 161,  463 => 160,  459 => 159,  456 => 158,  451 => 157,  449 => 156,  441 => 151,  437 => 150,  433 => 149,  425 => 145,  422 => 144,  414 => 139,  406 => 134,  401 => 131,  399 => 130,  393 => 126,  386 => 124,  382 => 123,  380 => 122,  376 => 121,  372 => 120,  368 => 118,  364 => 117,  358 => 113,  351 => 111,  347 => 110,  345 => 109,  341 => 108,  337 => 107,  331 => 104,  328 => 103,  323 => 102,  304 => 99,  300 => 98,  296 => 97,  292 => 96,  288 => 95,  277 => 94,  271 => 93,  267 => 92,  264 => 91,  260 => 90,  254 => 86,  250 => 85,  248 => 84,  244 => 83,  240 => 82,  236 => 81,  232 => 80,  228 => 79,  219 => 72,  213 => 71,  211 => 70,  207 => 69,  201 => 65,  195 => 64,  193 => 63,  189 => 62,  172 => 55,  163 => 53,  157 => 52,  150 => 51,  141 => 50,  133 => 45,  126 => 41,  119 => 40,  116 => 39,  113 => 38,  110 => 37,  107 => 36,  104 => 35,  101 => 34,  99 => 33,  95 => 32,  92 => 31,  84 => 27,  81 => 26,  73 => 22,  71 => 21,  67 => 19,  44 => 17,  27 => 16,  19 => 11,);
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
/* <div id="account-order" class="container">*/
/* <div class="wrap">*/
/*   <nav aria-label="breadcrumb">*/
/*     <ol class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li class="breadcrumb-item"{% if loop.last %} aria-current="page"{% endif %}><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ol>*/
/*   </nav>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
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
/*       <h2>{{ heading_title }}</h2>*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left" colspan="2">{{ text_order_detail }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left" style="width: 50%;">{% if invoice_no %} <b>{{ text_invoice_no }}</b> {{ invoice_no }}<br />*/
/*               {% endif %} <b>{{ text_order_id }}</b> #{{ order_id }}<br />*/
/*               <b>{{ text_date_added }}</b> {{ date_added }}</td>*/
/*             <td class="text-left" style="width: 50%;">{% if payment_method %} <b>{{ text_payment_method }}</b> {{ payment_method }}<br />*/
/*               {% endif %}*/
/*               {% if shipping_method %} <b>{{ text_shipping_method }}</b> {{ shipping_method }} {% endif %}</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_payment_address }}</td>*/
/*             {% if shipping_address %}*/
/*             <td class="text-left" style="width: 50%; vertical-align: top;">{{ text_shipping_address }}</td>*/
/*             {% endif %} </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left">{{ payment_address }}</td>*/
/*             {% if shipping_address %}*/
/*             <td class="text-left">{{ shipping_address }}</td>*/
/*             {% endif %} </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-left">{{ column_name }}</td>*/
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_quantity }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_total }}</td>*/
/*               {% if products %}*/
/*               <td style="width: 20px;"></td>*/
/*               {% endif %} </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-left">{{ product.name }}*/
/*               {% for option in product.option %} <br />*/
/*               &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% endfor %}</td>*/
/*             <td class="text-left">{{ product.model }}</td>*/
/*             <td class="text-right">{{ product.quantity }}</td>*/
/*             <td class="text-right">{{ product.price }}</td>*/
/*             <td class="text-right">{{ product.total }}</td>*/
/*             <td class="text-right" style="white-space: nowrap;">{% if product.reorder %} <a href="{{ product.reorder }}" data-toggle="tooltip" title="{{ button_reorder }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a> {% endif %} <a href="{{ product.return }}" data-toggle="tooltip" title="{{ button_return }}" class="btn btn-danger"><i class="fa fa-reply"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*           {% for voucher in vouchers %}*/
/*           <tr>*/
/*             <td class="text-left">{{ voucher.description }}</td>*/
/*             <td class="text-left"></td>*/
/*             <td class="text-right">1</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             <td class="text-right">{{ voucher.amount }}</td>*/
/*             {% if products %}*/
/*             <td></td>*/
/*             {% endif %} </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*           <tfoot>*/
/*           */
/*           {% for total in totals %}*/
/*           <tr>*/
/*             <td colspan="3"></td>*/
/*             <td class="text-right"><b>{{ total.title }}</b></td>*/
/*             <td class="text-right">{{ total.text }}</td>*/
/*             {% if products %}*/
/*             <td></td>*/
/*             {% endif %} </tr>*/
/*           {% endfor %}*/
/*             </tfoot>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       {% if comment %}*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ text_comment }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td class="text-left">{{ comment }}</td>*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*       {% endif %}*/
/*       {% if histories %}*/
/*       <h3>{{ text_history }}</h3>*/
/*       <table class="table table-bordered table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <td class="text-left">{{ column_date_added }}</td>*/
/*             <td class="text-left">{{ column_status }}</td>*/
/*             <td class="text-left">{{ column_comment }}</td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         */
/*         {% if histories %}*/
/*         {% for history in histories %}*/
/*         <tr>*/
/*           <td class="text-left">{{ history.date_added }}</td>*/
/*           <td class="text-left">{{ history.status }}</td>*/
/*           <td class="text-left">{{ history.comment }}</td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*         <tr>*/
/*           <td colspan="3" class="text-center">{{ text_no_results }}</td>*/
/*         </tr>*/
/*         {% endif %}*/
/*           </tbody>*/
/*         */
/*       </table>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/

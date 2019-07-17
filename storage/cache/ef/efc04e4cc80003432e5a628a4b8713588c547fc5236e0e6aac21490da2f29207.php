<?php

/* bootstrap4_basic/template/checkout/confirm.twig */
class __TwigTemplate_7f8353d824d46c036e188b5776ace5527326f15aeb149238de5ca7aa63b6138d extends Twig_Template
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
        if ( !(isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 12
            echo "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
            // line 16
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
        <td class=\"text-left\">";
            // line 17
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 18
            echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 19
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
        <td class=\"text-right\">";
            // line 20
            echo (isset($context["column_total"]) ? $context["column_total"] : null);
            echo "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 26
                echo "    <tr>
      <td class=\"text-left\"><a href=\"";
                // line 27
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
        &nbsp;<small> - ";
                    // line 28
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "        ";
                if ($this->getAttribute($context["product"], "recurring", array())) {
                    echo " <br />
        <span class=\"label label-info\">";
                    // line 30
                    echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                    echo "</span> <small>";
                    echo $this->getAttribute($context["product"], "recurring", array());
                    echo "</small> ";
                }
                echo "</td>
      <td class=\"text-left\">";
                // line 31
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 32
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 33
                echo $this->getAttribute($context["product"], "price", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 34
                echo $this->getAttribute($context["product"], "total", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 38
                echo "    <tr>
      <td class=\"text-left\">";
                // line 39
                echo $this->getAttribute($context["voucher"], "description", array());
                echo "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 42
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
      <td class=\"text-right\">";
                // line 43
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      </tbody>
    
    <tfoot>
    
    ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 51
                echo "    <tr>
      <td colspan=\"4\" class=\"text-right\"><strong>";
                // line 52
                echo $this->getAttribute($context["total"], "title", array());
                echo ":</strong></td>
      <td class=\"text-right\">";
                // line 53
                echo $this->getAttribute($context["total"], "text", array());
                echo "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "      </tfoot>
    
  </table>
</div>
";
            // line 60
            echo (isset($context["payment"]) ? $context["payment"] : null);
            echo "
";
        } else {
            // line 61
            echo " 
<script type=\"text/javascript\"><!--
location = '";
            // line 63
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "';
//--></script> 
";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/checkout/confirm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 63,  175 => 61,  170 => 60,  164 => 56,  155 => 53,  151 => 52,  148 => 51,  144 => 50,  138 => 46,  129 => 43,  125 => 42,  119 => 39,  116 => 38,  111 => 37,  102 => 34,  98 => 33,  94 => 32,  90 => 31,  82 => 30,  77 => 29,  68 => 28,  58 => 27,  55 => 26,  51 => 25,  43 => 20,  39 => 19,  35 => 18,  31 => 17,  27 => 16,  21 => 12,  19 => 11,);
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
/* {% if not redirect %}*/
/* <div class="table-responsive">*/
/*   <table class="table table-bordered table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <td class="text-left">{{ column_name }}</td>*/
/*         <td class="text-left">{{ column_model }}</td>*/
/*         <td class="text-right">{{ column_quantity }}</td>*/
/*         <td class="text-right">{{ column_price }}</td>*/
/*         <td class="text-right">{{ column_total }}</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     */
/*     {% for product in products %}*/
/*     <tr>*/
/*       <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% for option in product.option %} <br />*/
/*         &nbsp;<small> - {{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*         {% if product.recurring %} <br />*/
/*         <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*       <td class="text-left">{{ product.model }}</td>*/
/*       <td class="text-right">{{ product.quantity }}</td>*/
/*       <td class="text-right">{{ product.price }}</td>*/
/*       <td class="text-right">{{ product.total }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*     {% for voucher in vouchers %}*/
/*     <tr>*/
/*       <td class="text-left">{{ voucher.description }}</td>*/
/*       <td class="text-left"></td>*/
/*       <td class="text-right">1</td>*/
/*       <td class="text-right">{{ voucher.amount }}</td>*/
/*       <td class="text-right">{{ voucher.amount }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tbody>*/
/*     */
/*     <tfoot>*/
/*     */
/*     {% for total in totals %}*/
/*     <tr>*/
/*       <td colspan="4" class="text-right"><strong>{{ total.title }}:</strong></td>*/
/*       <td class="text-right">{{ total.text }}</td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*       </tfoot>*/
/*     */
/*   </table>*/
/* </div>*/
/* {{ payment }}*/
/* {% else %} */
/* <script type="text/javascript"><!--*/
/* location = '{{ redirect }}';*/
/* //--></script> */
/* {% endif %}*/

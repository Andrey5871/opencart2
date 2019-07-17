<?php

/* bootstrap4_basic/template/mail/order_alert.twig */
class __TwigTemplate_17291db73bccee1141d102be898d1d77982ddb82c0fde66393b9c03210d55331 extends Twig_Template
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
        echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 6
        echo (isset($context["text_received"]) ? $context["text_received"] : null);
        echo "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 18px; color: #000000;\">
<div style=\"width: 680px;\">


\t\t<table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">Информация о заказе</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 20
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "</b> ";
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "<br />
          <b>Дата добавления</b> ";
        // line 21
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "<br />
          <b>Способ оплаты</b> ";
        // line 22
        echo (isset($context["payment_method"]) ? $context["payment_method"] : null);
        echo "<br />
          ";
        // line 23
        if ((isset($context["shipping_method"]) ? $context["shipping_method"] : null)) {
            echo " <b>";
            echo (isset($context["text_shipping_method"]) ? $context["text_shipping_method"] : null);
            echo "</b> ";
            echo (isset($context["shipping_method"]) ? $context["shipping_method"] : null);
            echo "
          ";
        }
        // line 24
        echo "</td>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 25
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "</b> ";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "<br />
          <b>Номер телефона</b> ";
        // line 26
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "<br />
          <b>Состояние заказа</b> ";
        // line 27
        echo (isset($context["order_status"]) ? $context["order_status"] : null);
        echo "<br /></td>
      </tr>
    </tbody>
  </table>


\t\t\t<table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Информация о клиенте</td>
        ";
        // line 37
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 38
            echo "        <td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            echo (isset($context["text_shipping_address"]) ? $context["text_shipping_address"] : null);
            echo "</td>
        ";
        }
        // line 39
        echo " </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 43
        echo (isset($context["payment_address"]) ? $context["payment_address"] : null);
        echo "</td>
        ";
        // line 44
        if ((isset($context["shipping_address"]) ? $context["shipping_address"] : null)) {
            // line 45
            echo "        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            echo (isset($context["shipping_address"]) ? $context["shipping_address"] : null);
            echo "</td>
        ";
        }
        // line 46
        echo " </tr>
    </tbody>
  </table>

  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">Детальная информация заказа</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 58
        echo (isset($context["text_order_id"]) ? $context["text_order_id"] : null);
        echo "
          </td>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;\">
\t\t\t\t\t";
        // line 61
        echo (isset($context["order_id"]) ? $context["order_id"] : null);
        echo "
\t\t\t\t</td>
\t\t\t\t</tr>

\t\t\t\t<tr>
\t\t\t\t<td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">Дата добавления
          </td>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;\">
\t\t\t\t\t";
        // line 69
        echo (isset($context["date_added"]) ? $context["date_added"] : null);
        echo "
\t\t\t\t</td>
\t\t\t</tr>

\t\t\t<tr>
\t\t\t<td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 74
        echo (isset($context["text_order_status"]) ? $context["text_order_status"] : null);
        echo "
\t\t\t\t</td>
\t\t\t<td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;\">
\t\t\t\t";
        // line 77
        echo (isset($context["order_status"]) ? $context["order_status"] : null);
        echo "
\t\t\t</td>
\t\t</tr>
    </tbody>
  </table>




\t<table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <tbody>

\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"4\">Товары</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Количество товара</td>
\t\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Название товара</td>
\t\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Модель товара</td>
\t\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Цена товара</td>
\t\t\t\t\t";
        // line 98
        if ((isset($context["option"]) ? $context["option"] : null)) {
            // line 99
            echo "\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">Опции товара</td>
\t\t\t\t";
        }
        // line 101
        echo "
\t\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t</thead>


\t\t\t";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 108
            echo "\t\t\t<tr>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 109
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "
          </td>
        <td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;\">
\t\t\t\t ";
            // line 112
            echo $this->getAttribute($context["product"], "name", array());
            echo "
\t\t\t\t</td>
\t\t\t\t<td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;\">
\t\t\t\t (";
            // line 115
            echo $this->getAttribute($context["product"], "model", array());
            echo ")
\t\t\t\t</td>
\t\t\t\t<td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;\">
\t\t\t\t ";
            // line 118
            echo $this->getAttribute($context["product"], "total", array());
            echo "
\t\t\t\t</td>
\t\t\t\t";
            // line 120
            if ((isset($context["option"]) ? $context["option"] : null)) {
                // line 121
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 122
                    echo "\t\t\t\t\t<td style=\"font-size: 18px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;\">
\t\t\t\t\t ";
                    // line 123
                    echo $this->getAttribute($context["option"], "name", array());
                    echo " ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "
\t\t\t\t\t</td>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "\t\t\t\t</tr>
    </tbody>
  </table>



\t<table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <tbody>
\t\t\t";
        // line 136
        if ((isset($context["vouchers"]) ? $context["vouchers"] : null)) {
            // line 137
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 138
                echo "\t\t\t<tr>
\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">1x   ";
                // line 139
                echo $this->getAttribute($context["voucher"], "description", array());
                echo " ";
                echo $this->getAttribute($context["voucher"], "amount", array());
                echo " </td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "\t\t\t";
        }
        // line 143
        echo "    </tbody>
  </table>











\t<table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 159
        echo (isset($context["text_total"]) ? $context["text_total"] : null);
        echo "</td>
\t\t\t</tr>
\t\t\t";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 162
            echo "\t\t\t<tr>
\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 163
            echo $this->getAttribute($context["total"], "title", array());
            echo ": ";
            echo $this->getAttribute($context["total"], "value", array());
            echo "</td>
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "
\t\t\t";
        // line 167
        if ((isset($context["comment"]) ? $context["comment"] : null)) {
            // line 168
            echo "
\t\t\t<tr>
\t\t\t\t<td style=\"font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 170
            echo (isset($context["text_comment"]) ? $context["text_comment"] : null);
            echo ": ";
            echo (isset($context["comment"]) ? $context["comment"] : null);
            echo "</td>
\t\t\t</tr>

\t\t\t";
        }
        // line 174
        echo "
\t\t</tbody>
\t</table>


</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/mail/order_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 174,  345 => 170,  341 => 168,  339 => 167,  336 => 166,  325 => 163,  322 => 162,  318 => 161,  313 => 159,  295 => 143,  292 => 142,  281 => 139,  278 => 138,  273 => 137,  271 => 136,  261 => 128,  255 => 127,  252 => 126,  241 => 123,  238 => 122,  233 => 121,  231 => 120,  226 => 118,  220 => 115,  214 => 112,  208 => 109,  205 => 108,  201 => 107,  193 => 101,  189 => 99,  187 => 98,  163 => 77,  157 => 74,  149 => 69,  138 => 61,  132 => 58,  118 => 46,  112 => 45,  110 => 44,  106 => 43,  100 => 39,  94 => 38,  92 => 37,  79 => 27,  75 => 26,  69 => 25,  66 => 24,  57 => 23,  53 => 22,  49 => 21,  43 => 20,  26 => 6,  19 => 1,);
    }
}
/* */
/* <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd">*/
/* <html>*/
/* <head>*/
/* <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* <title>{{ text_received }}</title>*/
/* </head>*/
/* <body style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; color: #000000;">*/
/* <div style="width: 680px;">*/
/* */
/* */
/* 		<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2">Информация о заказе</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>{{ text_order_id }}</b> {{ order_id }}<br />*/
/*           <b>Дата добавления</b> {{ date_added }}<br />*/
/*           <b>Способ оплаты</b> {{ payment_method }}<br />*/
/*           {% if shipping_method %} <b>{{ text_shipping_method }}</b> {{ shipping_method }}*/
/*           {% endif %}</td>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;"><b>{{ text_email }}</b> {{ email }}<br />*/
/*           <b>Номер телефона</b> {{ telephone }}<br />*/
/*           <b>Состояние заказа</b> {{ order_status }}<br /></td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* 			<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Информация о клиенте</td>*/
/*         {% if shipping_address %}*/
/*         <td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_shipping_address }}</td>*/
/*         {% endif %} </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ payment_address }}</td>*/
/*         {% if shipping_address %}*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ shipping_address }}</td>*/
/*         {% endif %} </tr>*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   <table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <thead>*/
/*       <tr>*/
/*         <td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="2">Детальная информация заказа</td>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ text_order_id }}*/
/*           </td>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">*/
/* 					{{ order_id }}*/
/* 				</td>*/
/* 				</tr>*/
/* */
/* 				<tr>*/
/* 				<td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">Дата добавления*/
/*           </td>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">*/
/* 					{{ date_added }}*/
/* 				</td>*/
/* 			</tr>*/
/* */
/* 			<tr>*/
/* 			<td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ text_order_status }}*/
/* 				</td>*/
/* 			<td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">*/
/* 				{{ order_status }}*/
/* 			</td>*/
/* 		</tr>*/
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/* */
/* 	<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <tbody>*/
/* */
/* 			<thead>*/
/* 				<tr>*/
/* 					<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;" colspan="4">Товары</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Количество товара</td>*/
/* 					<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Название товара</td>*/
/* 					<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Модель товара</td>*/
/* 					<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Цена товара</td>*/
/* 					{% if option %}*/
/* 				<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">Опции товара</td>*/
/* 				{% endif %}*/
/* */
/* 						*/
/* 				</tr>*/
/* 			</thead>*/
/* */
/* */
/* 			{% for product in products %}*/
/* 			<tr>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;">{{ product.quantity }}*/
/*           </td>*/
/*         <td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">*/
/* 				 {{ product.name }}*/
/* 				</td>*/
/* 				<td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">*/
/* 				 ({{ product.model }})*/
/* 				</td>*/
/* 				<td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">*/
/* 				 {{ product.total }}*/
/* 				</td>*/
/* 				{% if option %}*/
/* 				{% for option in product.option %}*/
/* 					<td style="font-size: 18px;	border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: center; padding: 7px;">*/
/* 					 {{ option.name }} {{ option.value }}*/
/* 					</td>*/
/* 				{% endfor %}*/
/* 				{% endif %}*/
/* 				{% endfor %}*/
/* 				</tr>*/
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/* 	<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/*     <tbody>*/
/* 			{% if vouchers %}*/
/* 			{% for voucher in vouchers %}*/
/* 			<tr>*/
/* 			<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">1x   {{ voucher.description }} {{ voucher.amount }} </td>*/
/* 			</tr>*/
/* 			{% endfor %}*/
/* 			{% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* 	<table style="border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;">*/
/* 		<tbody>*/
/* 			<tr>*/
/* 				<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_total }}</td>*/
/* 			</tr>*/
/* 			{% for total in totals %}*/
/* 			<tr>*/
/* 				<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ total.title }}: {{ total.value }}</td>*/
/* 			</tr>*/
/* 			{% endfor %}*/
/* */
/* 			{% if comment %}*/
/* */
/* 			<tr>*/
/* 				<td style="font-size: 18px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;">{{ text_comment }}: {{ comment }}</td>*/
/* 			</tr>*/
/* */
/* 			{% endif %}*/
/* */
/* 		</tbody>*/
/* 	</table>*/
/* */
/* */
/* </body>*/
/* </html>*/
/* */

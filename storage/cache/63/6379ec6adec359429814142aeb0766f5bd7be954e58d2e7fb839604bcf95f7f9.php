<?php

/* bootstrap4_basic/template/extension/payment/cheque.twig */
class __TwigTemplate_e24c49c84e1521da270d254ffed1b29110b43b9af3251bff561824da6d4e3ca1 extends Twig_Template
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
        echo "<h2>";
        echo (isset($context["text_instruction"]) ? $context["text_instruction"] : null);
        echo "</h2>
<div class=\"well well-sm\">
  <p><b>";
        // line 13
        echo (isset($context["text_payable"]) ? $context["text_payable"] : null);
        echo "</b></p>
  <p>";
        // line 14
        echo (isset($context["payable"]) ? $context["payable"] : null);
        echo "</p>
  <b>";
        // line 15
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</b><br />
  <p>";
        // line 16
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</p>
  <p>";
        // line 17
        echo (isset($context["text_payment"]) ? $context["text_payment"] : null);
        echo "</p>
</div>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 21
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-confirm').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/payment/cheque/confirm',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-confirm').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-confirm').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];\t
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\tconsole.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});

});
//--></script>";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/extension/payment/cheque.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 21,  41 => 17,  37 => 16,  33 => 15,  29 => 14,  25 => 13,  19 => 11,);
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
/* <h2>{{ text_instruction }}</h2>*/
/* <div class="well well-sm">*/
/*   <p><b>{{ text_payable }}</b></p>*/
/*   <p>{{ payable }}</p>*/
/*   <b>{{ text_address }}</b><br />*/
/*   <p>{{ address }}</p>*/
/*   <p>{{ text_payment }}</p>*/
/* </div>*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_confirm }}" id="button-confirm" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-confirm').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/payment/cheque/confirm',*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-confirm').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-confirm').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];	*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* */
/* });*/
/* //--></script>*/

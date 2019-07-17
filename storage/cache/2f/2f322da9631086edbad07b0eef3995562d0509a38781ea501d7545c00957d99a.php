<?php

/* bootstrap4_basic/template/extension/total/coupon.twig */
class __TwigTemplate_8bbd738a86528163f27b50849a730b5e3796c38654a44e6d5c0faaa0e12aacb1 extends Twig_Template
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
        echo "<div class=\"card card-default\">
  <div class=\"card-header\">
    <h4 class=\"card-title\"><a href=\"#collapse-coupon\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
        // line 13
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-coupon\" class=\"collapse\">
    <div class=\"card-body\">
      <label class=\"col-sm-2 col-form-label\" for=\"input-coupon\">";
        // line 17
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</label>
      <div class=\"input-group\">
        <input type=\"text\" name=\"coupon\" value=\"";
        // line 19
        echo (isset($context["coupon"]) ? $context["coupon"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "\" id=\"input-coupon\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <input type=\"button\" value=\"";
        // line 21
        echo (isset($context["button_coupon"]) ? $context["button_coupon"] : null);
        echo "\" id=\"button-coupon\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\"  class=\"btn btn-primary\" />
        </span></div>
      <script type=\"text/javascript\"><!--
\$('#button-coupon').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\ttype: 'post',
\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-coupon').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-coupon').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/extension/total/coupon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 21,  35 => 19,  30 => 17,  23 => 13,  19 => 11,);
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
/* <div class="card card-default">*/
/*   <div class="card-header">*/
/*     <h4 class="card-title"><a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">{{ heading_title }} <i class="fa fa-caret-down"></i></a></h4>*/
/*   </div>*/
/*   <div id="collapse-coupon" class="collapse">*/
/*     <div class="card-body">*/
/*       <label class="col-sm-2 col-form-label" for="input-coupon">{{ entry_coupon }}</label>*/
/*       <div class="input-group">*/
/*         <input type="text" name="coupon" value="{{ coupon }}" placeholder="{{ entry_coupon }}" id="input-coupon" class="form-control" />*/
/*         <span class="input-group-btn">*/
/*         <input type="button" value="{{ button_coupon }}" id="button-coupon" data-loading-text="{{ text_loading }}"  class="btn btn-primary" />*/
/*         </span></div>*/
/*       <script type="text/javascript"><!--*/
/* $('#button-coupon').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=extension/total/coupon/coupon',*/
/* 		type: 'post',*/
/* 		data: 'coupon=' + encodeURIComponent($('input[name=\'coupon\']').val()),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-coupon').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-coupon').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 			}*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/*     </div>*/
/*   </div>*/
/* </div>*/

<?php

/* bootstrap4_basic/template/checkout/payment_method.twig */
class __TwigTemplate_6111c1db567902a12eb851ef17a4f0242fe4753f173d2a01b62463223abdfd61 extends Twig_Template
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
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 12
            echo "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
";
        }
        // line 14
        if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
            // line 15
            echo "
";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 17
                echo "<div class=\"form-check\">
  ";
                // line 18
                if ((($this->getAttribute($context["payment_method"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)) ||  !(isset($context["code"]) ? $context["code"] : null))) {
                    // line 19
                    echo "  ";
                    $context["code"] = $this->getAttribute($context["payment_method"], "code", array());
                    // line 20
                    echo "  <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\" checked>
  ";
                } else {
                    // line 22
                    echo "  <input class=\"form-check-input\" type=\"radio\" name=\"payment_method\" value=\"";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "\">
  ";
                }
                // line 24
                echo "  <label class=\"form-check-label\">
  ";
                // line 25
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "
  ";
                // line 26
                if ($this->getAttribute($context["payment_method"], "terms", array())) {
                    // line 27
                    echo "  (";
                    echo $this->getAttribute($context["payment_method"], "terms", array());
                    echo ")
  ";
                }
                // line 28
                echo " </label>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 32
        echo "<p><strong>";
        echo (isset($context["text_comments"]) ? $context["text_comments"] : null);
        echo "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 34
        echo (isset($context["comment"]) ? $context["comment"] : null);
        echo "</textarea>
</p>
";
        // line 36
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 37
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">";
            // line 38
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
    ";
            // line 39
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 40
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
    ";
            } else {
                // line 42
                echo "    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    ";
            }
            // line 44
            echo "    &nbsp;
    <input type=\"button\" value=\"";
            // line 45
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        } else {
            // line 49
            echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
            // line 51
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-payment-method\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/checkout/payment_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 51,  122 => 49,  113 => 45,  110 => 44,  106 => 42,  102 => 40,  100 => 39,  96 => 38,  93 => 37,  91 => 36,  86 => 34,  80 => 32,  71 => 28,  65 => 27,  63 => 26,  59 => 25,  56 => 24,  50 => 22,  44 => 20,  41 => 19,  39 => 18,  36 => 17,  32 => 16,  29 => 15,  27 => 14,  21 => 12,  19 => 11,);
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
/* {% if error_warning %}*/
/* <div class="alert alert-warning alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/* {% endif %}*/
/* {% if payment_methods %}*/
/* */
/* {% for payment_method in payment_methods %}*/
/* <div class="form-check">*/
/*   {% if payment_method.code == code or not code %}*/
/*   {% set code = payment_method.code %}*/
/*   <input class="form-check-input" type="radio" name="payment_method" value="{{ payment_method.code }}" checked>*/
/*   {% else %}*/
/*   <input class="form-check-input" type="radio" name="payment_method" value="{{ payment_method.code }}">*/
/*   {% endif %}*/
/*   <label class="form-check-label">*/
/*   {{ payment_method.title }}*/
/*   {% if payment_method.terms %}*/
/*   ({{ payment_method.terms }})*/
/*   {% endif %} </label>*/
/* </div>*/
/* {% endfor %}*/
/* {% endif %}*/
/* <p><strong>{{ text_comments }}</strong></p>*/
/* <p>*/
/*   <textarea name="comment" rows="8" class="form-control">{{ comment }}</textarea>*/
/* </p>*/
/* {% if text_agree %}*/
/* <div class="buttons">*/
/*   <div class="pull-right">{{ text_agree }}*/
/*     {% if agree %}*/
/*     <input type="checkbox" name="agree" value="1" checked="checked" />*/
/*     {% else %}*/
/*     <input type="checkbox" name="agree" value="1" />*/
/*     {% endif %}*/
/*     &nbsp;*/
/*     <input type="button" value="{{ button_continue }}" id="button-payment-method" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_continue }}" id="button-payment-method" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/

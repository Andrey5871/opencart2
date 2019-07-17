<?php

/* bootstrap4_basic/template/checkout/login.twig */
class __TwigTemplate_4305916d69de00e1da664d4031063f1556780878f3d5e2d1c34c3ff29899de99 extends Twig_Template
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
    <h2>";
        // line 13
        echo (isset($context["text_new_customer"]) ? $context["text_new_customer"] : null);
        echo "</h2>
    <p>";
        // line 14
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</p>
    <div class=\"form-check\">
      ";
        // line 16
        if (((isset($context["account"]) ? $context["account"] : null) == "register")) {
            // line 17
            echo "      <input class=\"form-check-input\" type=\"radio\" name=\"account\" value=\"register\" checked>
      ";
        } else {
            // line 19
            echo "      <input class=\"form-check-input\" type=\"radio\" name=\"account\" value=\"register\">
      ";
        }
        // line 21
        echo "      <label class=\"form-check-label\">";
        echo (isset($context["text_register"]) ? $context["text_register"] : null);
        echo "</label>
    </div>
    ";
        // line 23
        if ((isset($context["checkout_guest"]) ? $context["checkout_guest"] : null)) {
            // line 24
            echo "    <div class=\"form-check\">
      ";
            // line 25
            if (((isset($context["account"]) ? $context["account"] : null) == "guest")) {
                // line 26
                echo "      <input class=\"form-check-input\" type=\"radio\" name=\"account\" value=\"guest\" checked>
      ";
            } else {
                // line 28
                echo "      <input class=\"form-check-input\" type=\"radio\" name=\"account\" value=\"guest\">
      ";
            }
            // line 30
            echo "      <label class=\"form-check-label\">";
            echo (isset($context["text_guest"]) ? $context["text_guest"] : null);
            echo "</label>
    </div>
    ";
        }
        // line 33
        echo "    <p>";
        echo (isset($context["text_register_account"]) ? $context["text_register_account"] : null);
        echo "</p>
    <input type=\"button\" value=\"";
        // line 34
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-account\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
  <div class=\"col-sm-6\">
    <h2>";
        // line 37
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
    <p>";
        // line 38
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</p>
    <div class=\"form-group\">
      <label class=\"col-form-label\" for=\"input-email\">";
        // line 40
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 41
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"col-form-label\" for=\"input-password\">";
        // line 44
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 45
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\" />
      <a href=\"";
        // line 46
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
    <input type=\"button\" value=\"";
        // line 47
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" id=\"button-login\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/checkout/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 47,  110 => 46,  106 => 45,  102 => 44,  96 => 41,  92 => 40,  87 => 38,  83 => 37,  75 => 34,  70 => 33,  63 => 30,  59 => 28,  55 => 26,  53 => 25,  50 => 24,  48 => 23,  42 => 21,  38 => 19,  34 => 17,  32 => 16,  27 => 14,  23 => 13,  19 => 11,);
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
/*     <h2>{{ text_new_customer }}</h2>*/
/*     <p>{{ text_checkout }}</p>*/
/*     <div class="form-check">*/
/*       {% if account == 'register' %}*/
/*       <input class="form-check-input" type="radio" name="account" value="register" checked>*/
/*       {% else %}*/
/*       <input class="form-check-input" type="radio" name="account" value="register">*/
/*       {% endif %}*/
/*       <label class="form-check-label">{{ text_register }}</label>*/
/*     </div>*/
/*     {% if checkout_guest %}*/
/*     <div class="form-check">*/
/*       {% if account == 'guest' %}*/
/*       <input class="form-check-input" type="radio" name="account" value="guest" checked>*/
/*       {% else %}*/
/*       <input class="form-check-input" type="radio" name="account" value="guest">*/
/*       {% endif %}*/
/*       <label class="form-check-label">{{ text_guest }}</label>*/
/*     </div>*/
/*     {% endif %}*/
/*     <p>{{ text_register_account }}</p>*/
/*     <input type="button" value="{{ button_continue }}" id="button-account" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/*   <div class="col-sm-6">*/
/*     <h2>{{ text_returning_customer }}</h2>*/
/*     <p>{{ text_i_am_returning_customer }}</p>*/
/*     <div class="form-group">*/
/*       <label class="col-form-label" for="input-email">{{ entry_email }}</label>*/
/*       <input type="text" name="email" value="" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-form-label" for="input-password">{{ entry_password }}</label>*/
/*       <input type="password" name="password" value="" placeholder="{{ entry_password }}" id="input-password" class="form-control" />*/
/*       <a href="{{ forgotten }}">{{ text_forgotten }}</a></div>*/
/*     <input type="button" value="{{ button_login }}" id="button-login" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/

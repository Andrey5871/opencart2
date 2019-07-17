<?php

/* bootstrap4_basic/template/account/account.twig */
class __TwigTemplate_680acb8bf0b5a7f7fbe8125a8e4ccb79eb5dbf7e0d6023a8de1c4513b35a62ca extends Twig_Template
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
<div id=\"account-account\" class=\"container\">
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
      <h2>";
        // line 34
        echo (isset($context["text_my_account"]) ? $context["text_my_account"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 36
        echo (isset($context["edit"]) ? $context["edit"] : null);
        echo "\">";
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 37
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\">";
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 38
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "\">";
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</a></li>
      </ul>
      ";
        // line 40
        if ((isset($context["credit_cards"]) ? $context["credit_cards"] : null)) {
            // line 41
            echo "      <h2>";
            echo (isset($context["text_credit_card"]) ? $context["text_credit_card"] : null);
            echo "</h2>
      <ul class=\"list-unstyled\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credit_cards"]) ? $context["credit_cards"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 44
                echo "        <li><a href=\"";
                echo $this->getAttribute($context["credit_card"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["credit_card"], "name", array());
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit_card'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "      </ul>
      ";
        }
        // line 48
        echo "      <h2>";
        echo (isset($context["text_my_orders"]) ? $context["text_my_orders"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 50
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 51
        echo (isset($context["download"]) ? $context["download"] : null);
        echo "\">";
        echo (isset($context["text_download"]) ? $context["text_download"] : null);
        echo "</a></li>
        ";
        // line 52
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 53
            echo "        <li><a href=\"";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo "</a></li>
        ";
        }
        // line 55
        echo "        <li><a href=\"";
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 56
        echo (isset($context["transaction"]) ? $context["transaction"] : null);
        echo "\">";
        echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
        echo "</a></li>
        <li><a href=\"";
        // line 57
        echo (isset($context["recurring"]) ? $context["recurring"] : null);
        echo "\">";
        echo (isset($context["text_recurring"]) ? $context["text_recurring"] : null);
        echo "</a></li>
      </ul>
      <h2>";
        // line 59
        echo (isset($context["text_my_affiliate"]) ? $context["text_my_affiliate"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        ";
        // line 61
        if ( !(isset($context["tracking"]) ? $context["tracking"] : null)) {
            // line 62
            echo "        <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_add"]) ? $context["text_affiliate_add"] : null);
            echo "</a></li>
        ";
        } else {
            // line 64
            echo "        <li><a href=\"";
            echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
            echo "\">";
            echo (isset($context["text_affiliate_edit"]) ? $context["text_affiliate_edit"] : null);
            echo "</a></li>
        <li><a href=\"";
            // line 65
            echo (isset($context["tracking"]) ? $context["tracking"] : null);
            echo "\">";
            echo (isset($context["text_tracking"]) ? $context["text_tracking"] : null);
            echo "</a></li>
        ";
        }
        // line 67
        echo "      </ul>
      <h2>";
        // line 68
        echo (isset($context["text_my_newsletter"]) ? $context["text_my_newsletter"] : null);
        echo "</h2>
      <ul class=\"list-unstyled\">
        <li><a href=\"";
        // line 70
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
      </ul>
      ";
        // line 72
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 73
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
</div>
</div>
";
        // line 77
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/account/account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 77,  260 => 73,  256 => 72,  249 => 70,  244 => 68,  241 => 67,  234 => 65,  227 => 64,  219 => 62,  217 => 61,  212 => 59,  205 => 57,  199 => 56,  192 => 55,  184 => 53,  182 => 52,  176 => 51,  170 => 50,  164 => 48,  160 => 46,  149 => 44,  145 => 43,  139 => 41,  137 => 40,  130 => 38,  124 => 37,  118 => 36,  113 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  86 => 26,  82 => 25,  79 => 24,  73 => 22,  71 => 21,  67 => 19,  44 => 17,  27 => 16,  19 => 11,);
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
/* <div id="account-account" class="container">*/
/* <div class="wrap">*/
/*   <nav aria-label="breadcrumb">*/
/*     <ol class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li class="breadcrumb-item"{% if loop.last %} aria-current="page"{% endif %}><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ol>*/
/*   </nav>*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
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
/*       <h2>{{ text_my_account }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ edit }}">{{ text_edit }}</a></li>*/
/*         <li><a href="{{ password }}">{{ text_password }}</a></li>*/
/*         <li><a href="{{ address }}">{{ text_address }}</a></li>*/
/*       </ul>*/
/*       {% if credit_cards %}*/
/*       <h2>{{ text_credit_card }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         {% for credit_card in credit_cards %}*/
/*         <li><a href="{{ credit_card.href }}">{{ credit_card.name }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       {% endif %}*/
/*       <h2>{{ text_my_orders }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*         <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*         {% if reward %}*/
/*         <li><a href="{{ reward }}">{{ text_reward }}</a></li>*/
/*         {% endif %}*/
/*         <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*         <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*         <li><a href="{{ recurring }}">{{ text_recurring }}</a></li>*/
/*       </ul>*/
/*       <h2>{{ text_my_affiliate }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         {% if not tracking %}*/
/*         <li><a href="{{ affiliate }}">{{ text_affiliate_add }}</a></li>*/
/*         {% else %}*/
/*         <li><a href="{{ affiliate }}">{{ text_affiliate_edit }}</a></li>*/
/*         <li><a href="{{ tracking }}">{{ text_tracking }}</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       <h2>{{ text_my_newsletter }}</h2>*/
/*       <ul class="list-unstyled">*/
/*         <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*       </ul>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/
/* */

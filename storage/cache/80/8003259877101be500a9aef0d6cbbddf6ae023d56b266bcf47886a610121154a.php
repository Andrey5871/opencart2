<?php

/* bootstrap4_basic/template/account/wishlist.twig */
class __TwigTemplate_6e48dfeedcbdece527cc5fee2673bbca347aac4f1122ca58ae908a4e2748cb3a extends Twig_Template
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
<div id=\"account-wishlist\" class=\"container\">
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
        echo "  <div class=\"container\">
  <div class=\"row\">";
        // line 27
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 28
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 30
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 31
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 32
            echo "    ";
        } else {
            // line 33
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 34
            echo "    ";
        }
        // line 35
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 36
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 37
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 38
            echo "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 42
            echo (isset($context["column_image"]) ? $context["column_image"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 43
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
              <td class=\"text-left\">";
            // line 44
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 45
            echo (isset($context["column_stock"]) ? $context["column_stock"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 46
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
              <td class=\"text-right\">";
            // line 47
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 53
                echo "          <tr>
            <td class=\"text-center\">";
                // line 54
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" /></a>";
                }
                echo "</td>
            <td class=\"text-left\"><a href=\"";
                // line 55
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></td>
            <td class=\"text-left\">";
                // line 56
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 57
                echo $this->getAttribute($context["product"], "stock", array());
                echo "</td>
            <td class=\"text-right\">";
                // line 58
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 59
                    echo "              <div class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 60
                        echo "                ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                ";
                    } else {
                        // line 61
                        echo " <b>";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</b> <s>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</s> ";
                    }
                    echo " </div>
              ";
                }
                // line 62
                echo "</td>
            <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 63
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
              <a href=\"";
                // line 64
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </tbody>
          
        </table>
      </div>
      ";
        } else {
            // line 72
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 74
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 75
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 77
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 78
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
</div>
</div>
";
        // line 82
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 82,  258 => 78,  254 => 77,  247 => 75,  244 => 74,  238 => 72,  231 => 67,  220 => 64,  214 => 63,  211 => 62,  201 => 61,  195 => 60,  192 => 59,  190 => 58,  186 => 57,  182 => 56,  176 => 55,  162 => 54,  159 => 53,  155 => 52,  147 => 47,  143 => 46,  139 => 45,  135 => 44,  131 => 43,  127 => 42,  121 => 38,  119 => 37,  115 => 36,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  88 => 28,  84 => 27,  81 => 26,  73 => 22,  71 => 21,  67 => 19,  44 => 17,  27 => 16,  19 => 11,);
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
/* <div id="account-wishlist" class="container">*/
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
/*       {% if products %}*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover">*/
/*           <thead>*/
/*             <tr>*/
/*               <td class="text-center">{{ column_image }}</td>*/
/*               <td class="text-left">{{ column_name }}</td>*/
/*               <td class="text-left">{{ column_model }}</td>*/
/*               <td class="text-right">{{ column_stock }}</td>*/
/*               <td class="text-right">{{ column_price }}</td>*/
/*               <td class="text-right">{{ column_action }}</td>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           */
/*           {% for product in products %}*/
/*           <tr>*/
/*             <td class="text-center">{% if product.thumb %}<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" /></a>{% endif %}</td>*/
/*             <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a></td>*/
/*             <td class="text-left">{{ product.model }}</td>*/
/*             <td class="text-right">{{ product.stock }}</td>*/
/*             <td class="text-right">{% if product.price %}*/
/*               <div class="price"> {% if not product.special %}*/
/*                 {{ product.price }}*/
/*                 {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>*/
/*               {% endif %}</td>*/
/*             <td class="text-right"><button type="button" onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" title="{{ button_cart }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>*/
/*               <a href="{{ product.remove }}" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-times"></i></a></td>*/
/*           </tr>*/
/*           {% endfor %}*/
/*             </tbody>*/
/*           */
/*         </table>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
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

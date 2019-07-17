<?php

/* bootstrap4_basic/template/product/compare.twig */
class __TwigTemplate_593d9e4a75b84efdcb4b3472081d944251c1578850904fe25cd16de07d735b48 extends Twig_Template
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
<div id=\"product-compare\" class=\"container\">
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
      <h1>";
        // line 36
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 37
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 38
            echo "      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 41
            echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
            echo "\"><strong>";
            echo (isset($context["text_product"]) ? $context["text_product"] : null);
            echo "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>";
            // line 46
            echo (isset($context["text_name"]) ? $context["text_name"] : null);
            echo "</td>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 48
                echo "            <td><a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo " </tr>
          <tr>
            <td>";
            // line 51
            echo (isset($context["text_image"]) ? $context["text_image"] : null);
            echo "</td>
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 53
                echo "            <td class=\"text-center\">";
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo " <img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\" /> ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo " </tr>
          <tr>
            <td>";
            // line 56
            echo (isset($context["text_price"]) ? $context["text_price"] : null);
            echo "</td>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 58
                echo "            <td>";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 59
                    echo "              ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 60
                        echo "              ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
              ";
                    } else {
                        // line 61
                        echo " <strike>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</strike> ";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "
              ";
                    }
                    // line 63
                    echo "              ";
                }
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo " </tr>
          <tr>
            <td>";
            // line 66
            echo (isset($context["text_model"]) ? $context["text_model"] : null);
            echo "</td>
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 68
                echo "            <td>";
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo " </tr>
          <tr>
            <td>";
            // line 71
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo "</td>
            ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 73
                echo "            <td>";
                echo $this->getAttribute($context["product"], "manufacturer", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo " </tr>
          <tr>
            <td>";
            // line 76
            echo (isset($context["text_availability"]) ? $context["text_availability"] : null);
            echo "</td>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "            <td>";
                echo $this->getAttribute($context["product"], "availability", array());
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo " </tr>
        ";
            // line 80
            if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
                // line 81
                echo "        <tr>
          <td>";
                // line 82
                echo (isset($context["text_rating"]) ? $context["text_rating"] : null);
                echo "</td>
          ";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 84
                    echo "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 85
                        echo "            ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 86
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " <br />
            ";
                    // line 87
                    echo $this->getAttribute($context["product"], "reviews", array());
                    echo "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo " </tr>
        ";
            }
            // line 90
            echo "        <tr>
          <td>";
            // line 91
            echo (isset($context["text_summary"]) ? $context["text_summary"] : null);
            echo "</td>
          ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 93
                echo "          <td class=\"description\">";
                echo $this->getAttribute($context["product"], "description", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo " </tr>
        <tr>
          <td>";
            // line 96
            echo (isset($context["text_weight"]) ? $context["text_weight"] : null);
            echo "</td>
          ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 98
                echo "          <td>";
                echo $this->getAttribute($context["product"], "weight", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo " </tr>
        <tr>
          <td>";
            // line 101
            echo (isset($context["text_dimension"]) ? $context["text_dimension"] : null);
            echo "</td>
          ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 103
                echo "          <td>";
                echo $this->getAttribute($context["product"], "length", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "width", array());
                echo " x ";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo " </tr>
          </tbody>
        
        ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 108
                echo "        <thead>
          <tr>
            <td colspan=\"";
                // line 110
                echo (twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : null)) + 1);
                echo "\"><strong>";
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
          </tr>
        </thead>
        ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 114
                    echo "        <tbody>
          <tr>
            <td>";
                    // line 116
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
            ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 118
                        echo "            ";
                        if ($this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array")) {
                            // line 119
                            echo "            <td> ";
                            echo $this->getAttribute($this->getAttribute($context["product"], "attribute", array()), $context["key"], array(), "array");
                            echo "</td>
            ";
                        } else {
                            // line 121
                            echo "            <td></td>
            ";
                        }
                        // line 123
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    echo "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "        <tr>
          <td></td>
          ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 131
                echo "          <td><input type=\"button\" value=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" class=\"btn btn-primary btn-block\" onclick=\"cart.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\" />
            <a href=\"";
                // line 132
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" class=\"btn btn-danger btn-block\">";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "</a></td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo " </tr>
      </table>
      ";
        } else {
            // line 136
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 138
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-light border\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 141
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 142
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
</div>
</div>
";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 146,  523 => 142,  518 => 141,  510 => 138,  504 => 136,  499 => 133,  489 => 132,  480 => 131,  476 => 130,  472 => 128,  466 => 127,  458 => 124,  452 => 123,  448 => 121,  442 => 119,  439 => 118,  435 => 117,  431 => 116,  427 => 114,  423 => 113,  415 => 110,  411 => 108,  407 => 107,  402 => 104,  389 => 103,  385 => 102,  381 => 101,  377 => 99,  368 => 98,  364 => 97,  360 => 96,  356 => 94,  347 => 93,  343 => 92,  339 => 91,  336 => 90,  332 => 88,  324 => 87,  316 => 86,  309 => 85,  304 => 84,  300 => 83,  296 => 82,  293 => 81,  291 => 80,  288 => 79,  279 => 78,  275 => 77,  271 => 76,  267 => 74,  258 => 73,  254 => 72,  250 => 71,  246 => 69,  237 => 68,  233 => 67,  229 => 66,  225 => 64,  216 => 63,  208 => 61,  202 => 60,  199 => 59,  196 => 58,  192 => 57,  188 => 56,  184 => 54,  167 => 53,  163 => 52,  159 => 51,  155 => 49,  144 => 48,  140 => 47,  136 => 46,  126 => 41,  121 => 38,  119 => 37,  115 => 36,  108 => 35,  105 => 34,  102 => 33,  99 => 32,  96 => 31,  93 => 30,  90 => 29,  88 => 28,  84 => 27,  81 => 26,  73 => 22,  71 => 21,  67 => 19,  44 => 17,  27 => 16,  19 => 11,);
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
/* <div id="product-compare" class="container">*/
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
/*       <h1>{{ heading_title }}</h1>*/
/*       {% if products %}*/
/*       <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <td colspan="{{ products|length + 1 }}"><strong>{{ text_product }}</strong></td>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <td>{{ text_name }}</td>*/
/*             {% for product in products %}*/
/*             <td><a href="{{ product.href }}"><strong>{{ product.name }}</strong></a></td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_image }}</td>*/
/*             {% for product in products %}*/
/*             <td class="text-center">{% if product.thumb %} <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail" /> {% endif %}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_price }}</td>*/
/*             {% for product in products %}*/
/*             <td>{% if product.price %}*/
/*               {% if not product.special %}*/
/*               {{ product.price }}*/
/*               {% else %} <strike>{{ product.price }}</strike> {{ product.special }}*/
/*               {% endif %}*/
/*               {% endif %}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_model }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.model }}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_manufacturer }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.manufacturer }}</td>*/
/*             {% endfor %} </tr>*/
/*           <tr>*/
/*             <td>{{ text_availability }}</td>*/
/*             {% for product in products %}*/
/*             <td>{{ product.availability }}</td>*/
/*             {% endfor %} </tr>*/
/*         {% if review_status %}*/
/*         <tr>*/
/*           <td>{{ text_rating }}</td>*/
/*           {% for product in products %}*/
/*           <td class="rating"> {% for i in 1..5 %}*/
/*             {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> {% endif %}*/
/*             {% endfor %} <br />*/
/*             {{ product.reviews }}</td>*/
/*           {% endfor %} </tr>*/
/*         {% endif %}*/
/*         <tr>*/
/*           <td>{{ text_summary }}</td>*/
/*           {% for product in products %}*/
/*           <td class="description">{{ product.description }}</td>*/
/*           {% endfor %} </tr>*/
/*         <tr>*/
/*           <td>{{ text_weight }}</td>*/
/*           {% for product in products %}*/
/*           <td>{{ product.weight }}</td>*/
/*           {% endfor %} </tr>*/
/*         <tr>*/
/*           <td>{{ text_dimension }}</td>*/
/*           {% for product in products %}*/
/*           <td>{{ product.length }} x {{ product.width }} x {{ product.height }}</td>*/
/*           {% endfor %} </tr>*/
/*           </tbody>*/
/*         */
/*         {% for attribute_group in attribute_groups %}*/
/*         <thead>*/
/*           <tr>*/
/*             <td colspan="{{ products|length + 1 }}"><strong>{{ attribute_group.name }}</strong></td>*/
/*           </tr>*/
/*         </thead>*/
/*         {% for key, attribute in attribute_group.attribute %}*/
/*         <tbody>*/
/*           <tr>*/
/*             <td>{{ attribute.name }}</td>*/
/*             {% for product in products %}*/
/*             {% if product.attribute[key] %}*/
/*             <td> {{ product.attribute[key] }}</td>*/
/*             {% else %}*/
/*             <td></td>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </tr>*/
/*         </tbody>*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*         <tr>*/
/*           <td></td>*/
/*           {% for product in products %}*/
/*           <td><input type="button" value="{{ button_cart }}" class="btn btn-primary btn-block" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');" />*/
/*             <a href="{{ product.remove }}" class="btn btn-danger btn-block">{{ button_remove }}</a></td>*/
/*           {% endfor %} </tr>*/
/*       </table>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-light border">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {{ footer }}*/

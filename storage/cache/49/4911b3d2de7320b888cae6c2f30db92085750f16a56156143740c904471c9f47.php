<?php

/* bootstrap4_basic/template/extension/module/bestseller.twig */
class __TwigTemplate_28c1d65369d52047f6d62449d12f6fb64e87fa97f23b0a34604be72fc301c984 extends Twig_Template
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
        echo "
    <div class=\"row\">
\t<div class=\"col-md-12\">
\t<h1>Категории</h1></div>
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 16
            echo "      <div class=\"col-sm-3 col-xs-6 text-center\" style=\"margin-bottom: 20px;\">
      <div><a href=\"";
            // line 17
            echo $this->getAttribute($context["category"], "href", array());
            echo "\"><img style=\"width:100%\" src=\"";
            echo $this->getAttribute($context["category"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["category"], "name", array());
            echo "\" /></a></div>
      <a href=\"";
            // line 18
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "name", array());
            echo "</a>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
<!-- <h3>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3> -->
<!-- <div class=\"row\"> -->
 <!-- ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            echo " -->
  <!-- <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\"> -->
    <!-- <div class=\"product-thumb transition\"> -->
      <!-- <div class=\"image\"><a href=\"";
            // line 27
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" class=\"img-fluid\" /></a></div> -->
      <!-- <div class=\"caption\"> -->
        <!-- <h4><a href=\"";
            // line 29
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4> -->
        <!-- <p>";
            // line 30
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p> -->
        <!-- ";
            // line 31
            if ($this->getAttribute($context["product"], "rating", array())) {
                echo " -->
        <!-- <div class=\"rating\"> -->
          <!-- ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo " -->
          <!-- ";
                    // line 34
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        echo " -->
          <!-- <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> -->
          <!-- ";
                    } else {
                        // line 36
                        echo " -->
          <!-- <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> -->
          <!-- ";
                    }
                    // line 38
                    echo " -->
          <!-- ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo " -->
        <!-- </div> -->
        <!-- ";
            }
            // line 41
            echo " -->
        <!-- ";
            // line 42
            if ($this->getAttribute($context["product"], "price", array())) {
                echo " -->
        <!-- <p class=\"price\"> -->
          <!-- ";
                // line 44
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    echo " -->
          <!-- ";
                    // line 45
                    echo $this->getAttribute($context["product"], "price", array());
                    echo " -->
          <!-- ";
                } else {
                    // line 46
                    echo " -->
          <!-- <span class=\"price-new\">";
                    // line 47
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> -->
          <!-- ";
                }
                // line 48
                echo " -->
          <!-- ";
                // line 49
                if ($this->getAttribute($context["product"], "tax", array())) {
                    echo " -->
          <!-- <span class=\"price-tax\">";
                    // line 50
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span> -->
          <!-- ";
                }
                // line 51
                echo " -->
        <!-- </p> -->
        <!-- ";
            }
            // line 53
            echo " -->
      <!-- </div> -->
      <!-- <div class=\"button-group\"> -->
        <!-- <button type=\"button\" onclick=\"cart.add('";
            // line 56
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button> -->
        <!-- <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 57
            echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
            echo "\" onclick=\"wishlist.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-heart\"></i></button> -->
        <!-- <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 58
            echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
            echo "\" onclick=\"compare.add('";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "');\"><i class=\"fa fa-exchange\"></i></button> -->
      <!-- </div> -->
    <!-- </div> -->
  <!-- </div> -->
  <!-- ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " -->
<!-- </div> -->";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/extension/module/bestseller.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 62,  185 => 58,  179 => 57,  173 => 56,  168 => 53,  163 => 51,  156 => 50,  152 => 49,  149 => 48,  142 => 47,  139 => 46,  134 => 45,  130 => 44,  125 => 42,  122 => 41,  117 => 39,  110 => 38,  105 => 36,  99 => 34,  93 => 33,  88 => 31,  84 => 30,  78 => 29,  67 => 27,  59 => 24,  54 => 22,  51 => 21,  40 => 18,  32 => 17,  29 => 16,  25 => 15,  19 => 11,);
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
/* */
/*     <div class="row">*/
/* 	<div class="col-md-12">*/
/* 	<h1>Категории</h1></div>*/
/*       {% for category in categories %}*/
/*       <div class="col-sm-3 col-xs-6 text-center" style="margin-bottom: 20px;">*/
/*       <div><a href="{{ category.href }}"><img style="width:100%" src="{{ category.thumb }}" alt="{{ category.name }}" /></a></div>*/
/*       <a href="{{ category.href }}">{{ category.name }}</a>*/
/*       </div>*/
/*       {% endfor %}*/
/*     </div>*/
/* <!-- <h3>{{ heading_title }}</h3> -->*/
/* <!-- <div class="row"> -->*/
/*  <!-- {% for product in products %} -->*/
/*   <!-- <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12"> -->*/
/*     <!-- <div class="product-thumb transition"> -->*/
/*       <!-- <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-fluid" /></a></div> -->*/
/*       <!-- <div class="caption"> -->*/
/*         <!-- <h4><a href="{{ product.href }}">{{ product.name }}</a></h4> -->*/
/*         <!-- <p>{{ product.description }}</p> -->*/
/*         <!-- {% if product.rating %} -->*/
/*         <!-- <div class="rating"> -->*/
/*           <!-- {% for i in 1..5 %} -->*/
/*           <!-- {% if product.rating < i %} -->*/
/*           <!-- <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> -->*/
/*           <!-- {% else %} -->*/
/*           <!-- <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> -->*/
/*           <!-- {% endif %} -->*/
/*           <!-- {% endfor %} -->*/
/*         <!-- </div> -->*/
/*         <!-- {% endif %} -->*/
/*         <!-- {% if product.price %} -->*/
/*         <!-- <p class="price"> -->*/
/*           <!-- {% if not product.special %} -->*/
/*           <!-- {{ product.price }} -->*/
/*           <!-- {% else %} -->*/
/*           <!-- <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> -->*/
/*           <!-- {% endif %} -->*/
/*           <!-- {% if product.tax %} -->*/
/*           <!-- <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> -->*/
/*           <!-- {% endif %} -->*/
/*         <!-- </p> -->*/
/*         <!-- {% endif %} -->*/
/*       <!-- </div> -->*/
/*       <!-- <div class="button-group"> -->*/
/*         <!-- <button type="button" onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button> -->*/
/*         <!-- <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button> -->*/
/*         <!-- <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button> -->*/
/*       <!-- </div> -->*/
/*     <!-- </div> -->*/
/*   <!-- </div> -->*/
/*   <!-- {% endfor %} -->*/
/* <!-- </div> -->*/

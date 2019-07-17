<?php

/* bootstrap4_basic/template/extension/module/featured.twig */
class __TwigTemplate_637cd1d3553721c66813f226f45e0b358f229d11d61625c3e27b50e346b1749b extends Twig_Template
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
        echo "<style media=\"screen\">
    .collapseNewProduct{
      display: none;
    }
    .collapse{
      display: none;
    }
    .newProduct{
      display: block;
    }
    @media screen and (max-width: 576px) {
      .collapseNewProduct{
        display: inline-block;
      }
      .collapse{
        display: block;
      }
      .newProduct{
        display: none;
      }
    }
</style>
<div class=\"row\">
  <div class=\"col-12 text-center\">

      <h3 class=\"pt-3\">Новинки</h3>
      <button class=\"btn btn-light mt-2 mb-2 collapseNewProduct\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
    Показать новинки
      </button>
  </div>

<div class=\"col-md-12\">
  <div class=\"collapse\" id=\"collapseExample\">
          <div class=\"card\">
            <div class=\"slider slick-vertical\">
             ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 47
            echo "                <div class=\"product-thumb transition\">
                  <div class=\"image\"><a href=\"";
            // line 48
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"  style=\"width:120px; /></a></div>
                  <div class=\"caption\">
                    <h4><a href=\"";
            // line 50
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
                    <p>";
            // line 51
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
                    ";
            // line 52
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 53
                echo "                    <div class=\"rating\">
                      ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 55
                    echo "                      ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 56
                        echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                      ";
                    } else {
                        // line 58
                        echo "                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                      ";
                    }
                    // line 60
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                    </div>
                    ";
            }
            // line 63
            echo "                    ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 64
                echo "                    <p class=\"price\">
                      ";
                // line 65
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 66
                    echo "                      ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
                      ";
                } else {
                    // line 68
                    echo "                      <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                      ";
                }
                // line 70
                echo "                      ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 71
                    echo "                      <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
                      ";
                }
                // line 73
                echo "                    </p>
                    ";
            }
            // line 75
            echo "                  </div>

                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "            </div>
          </div>
</div>

<div class=\"newProduct\">
  <div class=\"slider slick-vertical\">
   ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 86
            echo "      <div class=\"product-thumb transition\">
        <div class=\"image\"><a href=\"";
            // line 87
            echo $this->getAttribute($context["product"], "href", array());
            echo "\"><img src=\"";
            echo $this->getAttribute($context["product"], "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["product"], "name", array());
            echo "\"  style=\"width:120px; /></a></div>
        <div class=\"caption\">
          <h4><a href=\"";
            // line 89
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a></h4>
          <p>";
            // line 90
            echo $this->getAttribute($context["product"], "description", array());
            echo "</p>
          ";
            // line 91
            if ($this->getAttribute($context["product"], "rating", array())) {
                // line 92
                echo "          <div class=\"rating\">
            ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(5);
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 94
                    echo "            ";
                    if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                        // line 95
                        echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    } else {
                        // line 97
                        echo "            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
            ";
                    }
                    // line 99
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "          </div>
          ";
            }
            // line 102
            echo "          ";
            if ($this->getAttribute($context["product"], "price", array())) {
                // line 103
                echo "          <p class=\"price\">
            ";
                // line 104
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 105
                    echo "            ";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "
            ";
                } else {
                    // line 107
                    echo "            <span class=\"price-new\">";
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> <span class=\"price-old\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
            ";
                }
                // line 109
                echo "            ";
                if ($this->getAttribute($context["product"], "tax", array())) {
                    // line 110
                    echo "            <span class=\"price-tax\">";
                    echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                    echo " ";
                    echo $this->getAttribute($context["product"], "tax", array());
                    echo "</span>
            ";
                }
                // line 112
                echo "          </p>
          ";
            }
            // line 114
            echo "        </div>

      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "  </div>
</div>


</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/extension/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 118,  263 => 114,  259 => 112,  251 => 110,  248 => 109,  240 => 107,  234 => 105,  232 => 104,  229 => 103,  226 => 102,  222 => 100,  216 => 99,  212 => 97,  208 => 95,  205 => 94,  201 => 93,  198 => 92,  196 => 91,  192 => 90,  186 => 89,  175 => 87,  172 => 86,  168 => 85,  160 => 79,  151 => 75,  147 => 73,  139 => 71,  136 => 70,  128 => 68,  122 => 66,  120 => 65,  117 => 64,  114 => 63,  110 => 61,  104 => 60,  100 => 58,  96 => 56,  93 => 55,  89 => 54,  86 => 53,  84 => 52,  80 => 51,  74 => 50,  63 => 48,  60 => 47,  56 => 46,  19 => 11,);
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
/* <style media="screen">*/
/*     .collapseNewProduct{*/
/*       display: none;*/
/*     }*/
/*     .collapse{*/
/*       display: none;*/
/*     }*/
/*     .newProduct{*/
/*       display: block;*/
/*     }*/
/*     @media screen and (max-width: 576px) {*/
/*       .collapseNewProduct{*/
/*         display: inline-block;*/
/*       }*/
/*       .collapse{*/
/*         display: block;*/
/*       }*/
/*       .newProduct{*/
/*         display: none;*/
/*       }*/
/*     }*/
/* </style>*/
/* <div class="row">*/
/*   <div class="col-12 text-center">*/
/* */
/*       <h3 class="pt-3">Новинки</h3>*/
/*       <button class="btn btn-light mt-2 mb-2 collapseNewProduct" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">*/
/*     Показать новинки*/
/*       </button>*/
/*   </div>*/
/* */
/* <div class="col-md-12">*/
/*   <div class="collapse" id="collapseExample">*/
/*           <div class="card">*/
/*             <div class="slider slick-vertical">*/
/*              {% for product in products %}*/
/*                 <div class="product-thumb transition">*/
/*                   <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"  style="width:120px; /></a></div>*/
/*                   <div class="caption">*/
/*                     <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                     <p>{{ product.description }}</p>*/
/*                     {% if product.rating %}*/
/*                     <div class="rating">*/
/*                       {% for i in 5 %}*/
/*                       {% if product.rating < i %}*/
/*                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                       {% else %}*/
/*                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                     {% if product.price %}*/
/*                     <p class="price">*/
/*                       {% if not product.special %}*/
/*                       {{ product.price }}*/
/*                       {% else %}*/
/*                       <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                       {% endif %}*/
/*                       {% if product.tax %}*/
/*                       <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                       {% endif %}*/
/*                     </p>*/
/*                     {% endif %}*/
/*                   </div>*/
/* */
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*           </div>*/
/* </div>*/
/* */
/* <div class="newProduct">*/
/*   <div class="slider slick-vertical">*/
/*    {% for product in products %}*/
/*       <div class="product-thumb transition">*/
/*         <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"  style="width:120px; /></a></div>*/
/*         <div class="caption">*/
/*           <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*           <p>{{ product.description }}</p>*/
/*           {% if product.rating %}*/
/*           <div class="rating">*/
/*             {% for i in 5 %}*/
/*             {% if product.rating < i %}*/
/*             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*             {% else %}*/
/*             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% endif %}*/
/*           {% if product.price %}*/
/*           <p class="price">*/
/*             {% if not product.special %}*/
/*             {{ product.price }}*/
/*             {% else %}*/
/*             <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*             {% endif %}*/
/*             {% if product.tax %}*/
/*             <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*             {% endif %}*/
/*           </p>*/
/*           {% endif %}*/
/*         </div>*/
/* */
/*       </div>*/
/*       {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* </div>*/
/* </div>*/
/* */

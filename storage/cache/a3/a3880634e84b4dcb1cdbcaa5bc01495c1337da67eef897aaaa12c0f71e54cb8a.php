<?php

/* bootstrap4_basic/template/product/category.twig */
class __TwigTemplate_500fdbfc0357ce06bc7818b8532d090b8e0f03a18d05cdd9421ec63c0cc4cc8c extends Twig_Template
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

<div id=\"product-category\" class=\"container\">
<div class=\"wrap\">

  <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 18
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
            // line 19
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
        // line 21
        echo "    </ol>
  </nav>
<div class=\"container\">
  <div class=\"row\">";
        // line 24
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 25
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 26
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 27
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 28
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 29
            echo "    ";
        } else {
            // line 30
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 31
            echo "    ";
        }
        // line 32
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2>";
        // line 33
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      ";
        // line 34
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 35
            echo "


<div class=\"container\">
      <div class=\"row\"> ";
            // line 39
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 40
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 42
            echo "        ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 43
                echo "        <div class=\"col-sm-10\">";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "</div>
        ";
            }
            // line 44
            echo "</div>
      <hr>
      ";
        }
        // line 47
        echo "

      ";
        // line 49
        if (((isset($context["categoryId"]) ? $context["categoryId"] : null) || (isset($context["parentId"]) ? $context["parentId"] : null))) {
            // line 50
            echo "      ";
            if ((((isset($context["categoryId"]) ? $context["categoryId"] : null) == 1) || ((isset($context["parentId"]) ? $context["parentId"] : null) == 1))) {
                // line 51
                echo "      <button class=\"btn btn-dark mb-4\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseExample\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
          Подбор АКБ по параметрам
        </button>

        <div class=\"collapse\" id=\"collapseExample\">
  <div class=\"card card-body\">

    <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
      <li class=\"nav-item\">
        <a class=\"nav-link active\" id=\"marka-tab\" data-toggle=\"tab\" href=\"#markaSearch\" role=\"tab\" aria-controls=\"markaSearch\" aria-selected=\"false\">Поиск АКБ по марке авто</a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Поиск АКБ по параметрам</a>
      </li>
</ul>


<div class=\"tab-content\" id=\"myTabContent\">
<div class=\"tab-pane fade show active\" id=\"markaSearch\" role=\"tabpanel\" aria-labelledby=\"markaSearch-tab\">

  <div class=\"row\">
    ";
                // line 72
                if ((isset($context["getModifyElem"]) ? $context["getModifyElem"] : null)) {
                    // line 73
                    echo "
      ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["getModifyElem"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["getModifyElem"]) {
                        // line 75
                        echo "      <div class=\"col-12\" style=\"padding:10px\">
        <h5 class=\"text-center\">Модификация - ";
                        // line 76
                        echo $this->getAttribute($context["getModifyElem"], "name", array());
                        echo "</h5>
      </div>

      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getModifyElem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "  ";
                } else {
                    // line 81
                    echo "  ";
                    if ((isset($context["getModify"]) ? $context["getModify"] : null)) {
                        // line 82
                        echo "  <div class=\"col-12 p-4\">
    <h5 class=\"text-center\">Выберите модификаццию</h5>
  </div>
  ";
                        // line 85
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["getModify"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["getModify"]) {
                            // line 86
                            echo "            <div class=\"col-2\" style=\"padding:10px\">
              <a href=\"";
                            // line 87
                            echo $this->getAttribute($context["getModify"], "href", array());
                            echo "\">";
                            echo $this->getAttribute($context["getModify"], "name", array());
                            echo "</a>
            </div>
  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getModify'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 90
                        echo "  ";
                    } else {
                        // line 91
                        echo "  ";
                        if ((isset($context["getModelAuto"]) ? $context["getModelAuto"] : null)) {
                            // line 92
                            echo "  <div class=\"col-12 p-4\">
    <h5 class=\"text-center\">Выберите модель автомобиля</h5>
  </div>

        ";
                            // line 96
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["getModelAuto"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["getModelAuto"]) {
                                // line 97
                                echo "        <div class=\"col-2\" style=\"padding:10px\">
          <a href=\"";
                                // line 98
                                echo $this->getAttribute($context["getModelAuto"], "href", array());
                                echo "\">";
                                echo $this->getAttribute($context["getModelAuto"], "name", array());
                                echo "</a>
        </div>
        ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getModelAuto'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 101
                            echo "  ";
                        } else {
                            // line 102
                            echo "  <div class=\"col-12 p-4\">
    <h5 class=\"text-center\">Выберите марку автомобиля</h5>
  </div>
      ";
                            // line 105
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["getMarkaAuto"]);
                            foreach ($context['_seq'] as $context["_key"] => $context["getMarkaAuto"]) {
                                // line 106
                                echo "              <div class=\"col-2 text-center\" style=\"padding:10px\">
                <a href=\"";
                                // line 107
                                echo $this->getAttribute($context["getMarkaAuto"], "href", array());
                                echo "\"> <img src=\"/image/2/";
                                echo $this->getAttribute($context["getMarkaAuto"], "img", array());
                                echo "\" title=\"";
                                echo $this->getAttribute($context["getMarkaAuto"], "name", array());
                                echo "\"><br>";
                                echo $this->getAttribute($context["getMarkaAuto"], "name", array());
                                echo "</a>
              </div>
      ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getMarkaAuto'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                        }
                    }
                    // line 112
                    echo "  ";
                }
                // line 113
                echo "




  </div>

</div>

<div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">

  <!-- BEGIN SEARCH -->
  <div class=\"container\" id=\"content\">
      <div class=\"row\">
        <div class=\"col-3\" style=\"margin-top:20px\">
          <h5>Длина</h5>
          <label class=\"form-option-label\">от</label>
                <input type=\"text\" class=\"form-control\" name=\"lengthFrom\" value=\"\">
          <label class=\"form-option-label\">до</label>
                <input type=\"text\" class=\"form-control\" name=\"lengthTo\" value=\"\">
        </div>
        <div class=\"col-3\" style=\"margin-top:20px\">
          <h5>Ширина</h5>
          <label class=\"form-option-label\">от</label>
            <input type=\"text\" class=\"form-control\" name=\"widthFrom\" value=\"\">
          <label class=\"form-option-label\">до</label>
          <input type=\"text\" class=\"form-control\" name=\"widthTo\" value=\"\">
        </div>
        <div class=\"col-3\" style=\"margin-top:20px\">
          <h5>Высота</h5>
          <label class=\"form-option-label\">от</label>
          <input type=\"text\" class=\"form-control\" name=\"heightFrom\" value=\"\">
          <label class=\"form-option-label\">до</label>
          <input type=\"text\" class=\"form-control\" name=\"heightTo\" value=\"\">
        </div>


      </div>
      <div class=\"row\">
        <div class=\"col-3\" style=\"margin-top:20px\">
          <h5>Ёмкость</h5>
          <label class=\"form-option-label\">от</label>
            <input type=\"text\" class=\"form-control\" name=\"emkostFrom\" value=\"\">
          <label class=\"form-option-label\">до</label>
          <input type=\"text\" class=\"form-control\" name=\"emkostTo\" value=\"\">
        </div>
          <div class=\"col-3\" style=\"margin-top:20px\">
            <h5>Полярность</h5>
            <label class=\"form-option-label\">Выберите полярность</label>
              <select name=\"polyarnost\" class=\"form-control\">
                <option value=\"all\">Любая</option>
                <option value=\"Прямая полярность\">Прямая</option>
                <option value=\"Обратная полярность\">Обратная</option>
              </select>
          </div>

      </div>

      <input type=\"button\" value=\"";
                // line 171
                echo (isset($context["button_search"]) ? $context["button_search"] : null);
                echo "\" style=\"margin-top:20px; margin-bottom: 20px\" id=\"button-search2\" class=\"btn btn-primary\" />

      </div>

  <!-- END SEARCH -->

</div>

</div>



  </div>
</div>



      ";
            } else {
                // line 189
                echo "        ";
            }
            // line 190
            echo "        ";
        }
        // line 191
        echo "





     ";
        // line 197
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 198
            echo "      <div class=\"col-sm-12\">
        <div>
        <h3>";
            // line 200
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h3>
        </div>
        <div style=\"text-align: center;\">
        <div class=\"row\">
        ";
            // line 204
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 205
                echo "          <div class=\"col-sm-3 col-xs-6\" style=\"margin-bottom: 20px;\">
          <div><a href=\"";
                // line 206
                echo $this->getAttribute($context["category"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\" /></a></div>
          <a href=\"";
                // line 207
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
            // line 210
            echo "        </div>
        </div>
      </div>
    ";
        }
        // line 214
        echo "
      ";
        // line 215
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 216
            echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"";
            // line 219
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"";
            // line 220
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"table-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"Таблица\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\"><a href=\"";
            // line 225
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-prepend\" for=\"input-sort\"><span class=\"input-group-text\">";
            // line 229
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</span></label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 232
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 233
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 235
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              ";
                }
                // line 237
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 238
            echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-prepend\" for=\"input-limit\"><span class=\"input-group-text\">";
            // line 243
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</span></label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 246
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 247
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 249
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                }
                // line 251
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 252
            echo "            </select>
          </div>
        </div>
      </div>
      <div class=\"row\">
        <table class=\"table table-hover table-responsive\">
  <thead>
    <tr>
      <th scope=\"col\">Наименование</th>
      ";
            // line 261
            if (((isset($context["categoryId"]) ? $context["categoryId"] : null) || (isset($context["parentId"]) ? $context["parentId"] : null))) {
                // line 262
                echo "      ";
                if ((((isset($context["categoryId"]) ? $context["categoryId"] : null) == 1) || ((isset($context["parentId"]) ? $context["parentId"] : null) == 1))) {
                    // line 263
                    echo "      <th scope=\"col\">Размеры (д*ш*в, мм)</th>
      <th scope=\"col\">Полярность</th>
      <th scope=\"col\">Емкость</th>
        ";
                }
                // line 267
                echo "        ";
            }
            // line 268
            echo "        <th scope=\"col\">Цена</th>
        <th scope=\"col\">В корзину</th>
    </tr>
  </thead>
  <tbody>
    ";
            // line 273
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 274
                echo "    <tr>
      <td><a href=\"";
                // line 275
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></td>
      ";
                // line 276
                if (((isset($context["categoryId"]) ? $context["categoryId"] : null) || (isset($context["parentId"]) ? $context["parentId"] : null))) {
                    // line 277
                    echo "      ";
                    if ((((isset($context["categoryId"]) ? $context["categoryId"] : null) == 1) || ((isset($context["parentId"]) ? $context["parentId"] : null) == 1))) {
                        // line 278
                        echo "      <td>";
                        echo $this->getAttribute($context["product"], "length", array());
                        echo "*";
                        echo $this->getAttribute($context["product"], "width", array());
                        echo "*";
                        echo $this->getAttribute($context["product"], "height", array());
                        echo "</td>
      <td>";
                        // line 279
                        echo $this->getAttribute($context["product"], "polyaryti", array());
                        echo "</td>
      <td>";
                        // line 280
                        echo $this->getAttribute($context["product"], "emkostNomin", array());
                        echo "</td>
      ";
                    }
                    // line 282
                    echo "      ";
                }
                // line 283
                echo "      <td>
      ";
                // line 284
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 285
                    echo "      <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 286
                        echo "         ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
        ";
                    } else {
                        // line 287
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 288
                    echo "        ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
      ";
                }
                // line 290
                echo "      ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 291
                    echo "      <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 292
                        echo "        ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 293
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
      ";
                }
                // line 294
                echo "</div>
    </td>
    <td>
      <div class=\"button-group border-top bg-light text-center\">
        <button class=\"btn btn-outline-danger\" type=\"button\" onclick=\"cart.add('";
                // line 298
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
      </div>
    </td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "  </tbody>
</table>



      ";
            // line 308
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 309
                echo "        <div class=\"product-layout product-list mb-3 col-12 \">
          <div class=\"product-thumb\">
            <div class=\"image\"><a href=\"";
                // line 311
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-fluid\" /></a></div>
            <div>
              <div class=\"caption m-3\">
                <h4><a href=\"";
                // line 314
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                <p>";
                // line 315
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                ";
                // line 316
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 317
                    echo "                <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 318
                        echo "                  ";
                        echo (isset($context["priceInf"]) ? $context["priceInf"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                  ";
                    } else {
                        // line 319
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 320
                    echo "                  ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                ";
                }
                // line 322
                echo "                ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 323
                    echo "                <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 324
                        echo "                  ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 325
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                ";
                }
                // line 326
                echo " </div>
             
            </div>
          </div> <div class=\"button-group text-center\">
                <button class=\"btn btn btn-outline-danger\" type=\"button\" onclick=\"cart.add('";
                // line 330
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
                <button class=\"btn btn btn-outline-danger\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 331
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button class=\"btn btn btn-outline-danger\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 332
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
\t\t\t  
\t\t\t  <hr>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 337
            echo " </div>
</div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 340
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 341
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 344
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 345
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 347
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 350
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 351
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
</div>
</div>


<script type=\"text/javascript\"><!--
  \$(\"#button-search2\").click(function(){
    url = 'index.php?route=product/search';



    var category_id = \$('#content select[name=\\'category_id\\']').prop('value');

    if (category_id > 0) {
      url += '&category_id=' + encodeURIComponent(category_id);
    }


    var emkostFrom = \$('#content input[name=\\'emkostFrom\\']').prop('value');

    if (emkostFrom > 0) {
      url += '&emkostFrom=' + encodeURIComponent(emkostFrom);
    }

    var emkostTo = \$('#content input[name=\\'emkostTo\\']').prop('value');

    if (emkostTo > 0) {
      url += '&emkostTo=' + encodeURIComponent(emkostTo);
    }

    var polyarnost = \$('#content select[name=\\'polyarnost\\']').prop('value');

    if (polyarnost) {
      url += '&polyarnost=' + encodeURIComponent(polyarnost);
    }


    var lengthFrom = \$('#content input[name=\\'lengthFrom\\']').prop('value');

    if (lengthFrom > 0) {
      url += '&lengthFrom=' + encodeURIComponent(lengthFrom);
    }

    var lengthTo = \$('#content input[name=\\'lengthTo\\']').prop('value');

    if (lengthTo > 0) {
      url += '&lengthTo=' + encodeURIComponent(lengthTo);
    }

    var heightFrom = \$('#content input[name=\\'heightFrom\\']').prop('value');

    if (heightFrom > 0) {
      url += '&heightFrom=' + encodeURIComponent(heightFrom);
    }

    var heightTo = \$('#content input[name=\\'heightTo\\']').prop('value');

    if (heightTo > 0) {
      url += '&heightTo=' + encodeURIComponent(heightTo);
    }

    var widthFrom = \$('#content input[name=\\'widthFrom\\']').prop('value');

    if (widthFrom > 0) {
      url += '&widthFrom=' + encodeURIComponent(widthFrom);
    }

    var widthTo = \$('#content input[name=\\'widthTo\\']').prop('value');

    if (widthTo > 0) {
      url += '&widthTo=' + encodeURIComponent(widthTo);
    }

    var sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

    if (sub_category) {
      url += '&sub_category=true';
    }

    var filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

    if (filter_description) {
      url += '&description=true';
    }

    location = url;
  });


\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

  var emkostFrom = \$('#content input[name=\\'emkostFrom\\']').prop('value');

  if (emkostFrom > 0) {
    url += '&emkostFrom=' + encodeURIComponent(emkostFrom);
  }

  var emkostTo = \$('#content input[name=\\'emkostTo\\']').prop('value');

  if (emkostTo > 0) {
    url += '&emkostTo=' + encodeURIComponent(emkostTo);
  }

  var polyarnost = \$('#content input[name=\\'polyarnost\\']').prop('value');

  if (polyarnost) {
    url += '&polyarnost=' + encodeURIComponent(polyarnost);
  }


  var lengthFrom = \$('#content input[name=\\'lengthFrom\\']').prop('value');

\tif (lengthFrom > 0) {
\t\turl += '&lengthFrom=' + encodeURIComponent(lengthFrom);
\t}

  var lengthTo = \$('#content input[name=\\'lengthTo\\']').prop('value');

  if (lengthTo > 0) {
    url += '&lengthTo=' + encodeURIComponent(lengthTo);
  }

  var heightFrom = \$('#content input[name=\\'heightFrom\\']').prop('value');

  if (heightFrom > 0) {
    url += '&heightFrom=' + encodeURIComponent(heightFrom);
  }

  var heightTo = \$('#content input[name=\\'heightTo\\']').prop('value');

  if (heightTo > 0) {
    url += '&heightTo=' + encodeURIComponent(heightTo);
  }

  var widthFrom = \$('#content input[name=\\'widthFrom\\']').prop('value');

  if (widthFrom > 0) {
    url += '&widthFrom=' + encodeURIComponent(widthFrom);
  }

  var widthTo = \$('#content input[name=\\'widthTo\\']').prop('value');

  if (widthTo > 0) {
    url += '&widthTo=' + encodeURIComponent(widthTo);
  }

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>


";
        // line 526
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1028 => 526,  850 => 351,  845 => 350,  837 => 347,  831 => 345,  828 => 344,  822 => 341,  818 => 340,  813 => 337,  799 => 332,  793 => 331,  785 => 330,  779 => 326,  770 => 325,  763 => 324,  758 => 323,  755 => 322,  743 => 320,  736 => 319,  728 => 318,  725 => 317,  723 => 316,  719 => 315,  713 => 314,  701 => 311,  697 => 309,  693 => 308,  686 => 303,  671 => 298,  665 => 294,  656 => 293,  649 => 292,  644 => 291,  641 => 290,  629 => 288,  622 => 287,  616 => 286,  613 => 285,  611 => 284,  608 => 283,  605 => 282,  600 => 280,  596 => 279,  587 => 278,  584 => 277,  582 => 276,  576 => 275,  573 => 274,  569 => 273,  562 => 268,  559 => 267,  553 => 263,  550 => 262,  548 => 261,  537 => 252,  531 => 251,  523 => 249,  515 => 247,  512 => 246,  508 => 245,  503 => 243,  496 => 238,  490 => 237,  482 => 235,  474 => 233,  471 => 232,  467 => 231,  462 => 229,  453 => 225,  445 => 220,  441 => 219,  436 => 216,  434 => 215,  431 => 214,  425 => 210,  414 => 207,  406 => 206,  403 => 205,  399 => 204,  392 => 200,  388 => 198,  386 => 197,  378 => 191,  375 => 190,  372 => 189,  351 => 171,  291 => 113,  288 => 112,  271 => 107,  268 => 106,  264 => 105,  259 => 102,  256 => 101,  245 => 98,  242 => 97,  238 => 96,  232 => 92,  229 => 91,  226 => 90,  215 => 87,  212 => 86,  208 => 85,  203 => 82,  200 => 81,  197 => 80,  187 => 76,  184 => 75,  180 => 74,  177 => 73,  175 => 72,  152 => 51,  149 => 50,  147 => 49,  143 => 47,  138 => 44,  132 => 43,  129 => 42,  119 => 40,  117 => 39,  111 => 35,  109 => 34,  105 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  80 => 26,  78 => 25,  74 => 24,  69 => 21,  46 => 19,  29 => 18,  19 => 11,);
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
/* */
/* <div id="product-category" class="container">*/
/* <div class="wrap">*/
/* */
/*   <nav aria-label="breadcrumb">*/
/*     <ol class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li class="breadcrumb-item"{% if loop.last %} aria-current="page"{% endif %}><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ol>*/
/*   </nav>*/
/* <div class="container">*/
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
/*       {% if thumb or description %}*/
/* */
/* */
/* */
/* <div class="container">*/
/*       <div class="row"> {% if thumb %}*/
/*         <div class="col-sm-2"><img src="{{ thumb }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-thumbnail" /></div>*/
/*         {% endif %}*/
/*         {% if description %}*/
/*         <div class="col-sm-10">{{ description }}</div>*/
/*         {% endif %}</div>*/
/*       <hr>*/
/*       {% endif %}*/
/* */
/* */
/*       {% if categoryId or parentId %}*/
/*       {% if categoryId == 1 or parentId == 1 %}*/
/*       <button class="btn btn-dark mb-4" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">*/
/*           Подбор АКБ по параметрам*/
/*         </button>*/
/* */
/*         <div class="collapse" id="collapseExample">*/
/*   <div class="card card-body">*/
/* */
/*     <ul class="nav nav-tabs" id="myTab" role="tablist">*/
/*       <li class="nav-item">*/
/*         <a class="nav-link active" id="marka-tab" data-toggle="tab" href="#markaSearch" role="tab" aria-controls="markaSearch" aria-selected="false">Поиск АКБ по марке авто</a>*/
/*       </li>*/
/*       <li class="nav-item">*/
/*         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Поиск АКБ по параметрам</a>*/
/*       </li>*/
/* </ul>*/
/* */
/* */
/* <div class="tab-content" id="myTabContent">*/
/* <div class="tab-pane fade show active" id="markaSearch" role="tabpanel" aria-labelledby="markaSearch-tab">*/
/* */
/*   <div class="row">*/
/*     {% if getModifyElem %}*/
/* */
/*       {% for getModifyElem in getModifyElem %}*/
/*       <div class="col-12" style="padding:10px">*/
/*         <h5 class="text-center">Модификация - {{getModifyElem.name}}</h5>*/
/*       </div>*/
/* */
/*       {% endfor %}*/
/*   {% else %}*/
/*   {% if getModify %}*/
/*   <div class="col-12 p-4">*/
/*     <h5 class="text-center">Выберите модификаццию</h5>*/
/*   </div>*/
/*   {% for getModify in getModify %}*/
/*             <div class="col-2" style="padding:10px">*/
/*               <a href="{{getModify.href}}">{{getModify.name}}</a>*/
/*             </div>*/
/*   {% endfor %}*/
/*   {% else %}*/
/*   {% if getModelAuto %}*/
/*   <div class="col-12 p-4">*/
/*     <h5 class="text-center">Выберите модель автомобиля</h5>*/
/*   </div>*/
/* */
/*         {% for getModelAuto in getModelAuto %}*/
/*         <div class="col-2" style="padding:10px">*/
/*           <a href="{{getModelAuto.href}}">{{getModelAuto.name}}</a>*/
/*         </div>*/
/*         {% endfor %}*/
/*   {% else %}*/
/*   <div class="col-12 p-4">*/
/*     <h5 class="text-center">Выберите марку автомобиля</h5>*/
/*   </div>*/
/*       {% for getMarkaAuto in getMarkaAuto %}*/
/*               <div class="col-2 text-center" style="padding:10px">*/
/*                 <a href="{{getMarkaAuto.href}}"> <img src="/image/2/{{getMarkaAuto.img}}" title="{{getMarkaAuto.name}}"><br>{{getMarkaAuto.name}}</a>*/
/*               </div>*/
/*       {% endfor %}*/
/* {% endif %}*/
/* {% endif %}*/
/*   {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/*   </div>*/
/* */
/* </div>*/
/* */
/* <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">*/
/* */
/*   <!-- BEGIN SEARCH -->*/
/*   <div class="container" id="content">*/
/*       <div class="row">*/
/*         <div class="col-3" style="margin-top:20px">*/
/*           <h5>Длина</h5>*/
/*           <label class="form-option-label">от</label>*/
/*                 <input type="text" class="form-control" name="lengthFrom" value="">*/
/*           <label class="form-option-label">до</label>*/
/*                 <input type="text" class="form-control" name="lengthTo" value="">*/
/*         </div>*/
/*         <div class="col-3" style="margin-top:20px">*/
/*           <h5>Ширина</h5>*/
/*           <label class="form-option-label">от</label>*/
/*             <input type="text" class="form-control" name="widthFrom" value="">*/
/*           <label class="form-option-label">до</label>*/
/*           <input type="text" class="form-control" name="widthTo" value="">*/
/*         </div>*/
/*         <div class="col-3" style="margin-top:20px">*/
/*           <h5>Высота</h5>*/
/*           <label class="form-option-label">от</label>*/
/*           <input type="text" class="form-control" name="heightFrom" value="">*/
/*           <label class="form-option-label">до</label>*/
/*           <input type="text" class="form-control" name="heightTo" value="">*/
/*         </div>*/
/* */
/* */
/*       </div>*/
/*       <div class="row">*/
/*         <div class="col-3" style="margin-top:20px">*/
/*           <h5>Ёмкость</h5>*/
/*           <label class="form-option-label">от</label>*/
/*             <input type="text" class="form-control" name="emkostFrom" value="">*/
/*           <label class="form-option-label">до</label>*/
/*           <input type="text" class="form-control" name="emkostTo" value="">*/
/*         </div>*/
/*           <div class="col-3" style="margin-top:20px">*/
/*             <h5>Полярность</h5>*/
/*             <label class="form-option-label">Выберите полярность</label>*/
/*               <select name="polyarnost" class="form-control">*/
/*                 <option value="all">Любая</option>*/
/*                 <option value="Прямая полярность">Прямая</option>*/
/*                 <option value="Обратная полярность">Обратная</option>*/
/*               </select>*/
/*           </div>*/
/* */
/*       </div>*/
/* */
/*       <input type="button" value="{{ button_search }}" style="margin-top:20px; margin-bottom: 20px" id="button-search2" class="btn btn-primary" />*/
/* */
/*       </div>*/
/* */
/*   <!-- END SEARCH -->*/
/* */
/* </div>*/
/* */
/* </div>*/
/* */
/* */
/* */
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/*       {% else %}*/
/*         {% endif %}*/
/*         {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*      {% if categories %}*/
/*       <div class="col-sm-12">*/
/*         <div>*/
/*         <h3>{{ text_refine }}</h3>*/
/*         </div>*/
/*         <div style="text-align: center;">*/
/*         <div class="row">*/
/*         {% for category in categories %}*/
/*           <div class="col-sm-3 col-xs-6" style="margin-bottom: 20px;">*/
/*           <div><a href="{{ category.href }}"><img src="{{ category.thumb }}" alt="{{ category.name }}" /></a></div>*/
/*           <a href="{{ category.href }}">{{ category.name }}</a>*/
/*           </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*       {% if products %}*/
/*       <div class="row">*/
/*         <div class="col-md-2 col-sm-6 hidden-xs">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="list-view" class="btn btn-light border" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-light border" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*             <button type="button" id="table-view" class="btn btn-light border" data-toggle="tooltip" title="Таблица"><i class="fa fa-table" aria-hidden="true"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*           <div class="form-group"><a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a></div>*/
/*         </div>*/
/*         <div class="col-md-4 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-prepend" for="input-sort"><span class="input-group-text">{{ text_sort }}</span></label>*/
/*             <select id="input-sort" class="form-control" onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-prepend" for="input-limit"><span class="input-group-text">{{ text_limit }}</span></label>*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row">*/
/*         <table class="table table-hover table-responsive">*/
/*   <thead>*/
/*     <tr>*/
/*       <th scope="col">Наименование</th>*/
/*       {% if categoryId or parentId %}*/
/*       {% if categoryId == 1 or parentId == 1 %}*/
/*       <th scope="col">Размеры (д*ш*в, мм)</th>*/
/*       <th scope="col">Полярность</th>*/
/*       <th scope="col">Емкость</th>*/
/*         {% endif %}*/
/*         {% endif %}*/
/*         <th scope="col">Цена</th>*/
/*         <th scope="col">В корзину</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for product in products %}*/
/*     <tr>*/
/*       <td><a href="{{ product.href }}">{{ product.name }}</a></td>*/
/*       {% if categoryId or parentId %}*/
/*       {% if categoryId == 1 or parentId == 1 %}*/
/*       <td>{{product.length}}*{{product.width}}*{{product.height}}</td>*/
/*       <td>{{product.polyaryti}}</td>*/
/*       <td>{{product.emkostNomin}}</td>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       <td>*/
/*       {% if product.price %}*/
/*       <p class="price"> {% if not product.special %}*/
/*          {{ product.price }}*/
/*         {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*         {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*       {% endif %}*/
/*       {% if product.rating %}*/
/*       <div class="rating"> {% for i in 1..5 %}*/
/*         {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*         {% endfor %} </div>*/
/*       {% endif %}</div>*/
/*     </td>*/
/*     <td>*/
/*       <div class="button-group border-top bg-light text-center">*/
/*         <button class="btn btn-outline-danger" type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*       </div>*/
/*     </td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* */
/* */
/* */
/*       {% for product in products %}*/
/*         <div class="product-layout product-list mb-3 col-12 ">*/
/*           <div class="product-thumb">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-fluid" /></a></div>*/
/*             <div>*/
/*               <div class="caption m-3">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p>{{ product.description }}</p>*/
/*                 {% if product.price %}*/
/*                 <p class="price"> {% if not product.special %}*/
/*                   {{ priceInf }} {{ product.price }}*/
/*                   {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                   {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                 <div class="rating"> {% for i in 1..5 %}*/
/*                   {% if product.rating < i %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>{% endif %}*/
/*                   {% endfor %} </div>*/
/*                 {% endif %} </div>*/
/*              */
/*             </div>*/
/*           </div> <div class="button-group text-center">*/
/*                 <button class="btn btn btn-outline-danger" type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 <button class="btn btn btn-outline-danger" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button class="btn btn btn-outline-danger" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/* 			  */
/* 			  <hr>*/
/*         </div>*/
/*         {% endfor %} </div>*/
/* </div>*/
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript"><!--*/
/*   $("#button-search2").click(function(){*/
/*     url = 'index.php?route=product/search';*/
/* */
/* */
/* */
/*     var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/*     if (category_id > 0) {*/
/*       url += '&category_id=' + encodeURIComponent(category_id);*/
/*     }*/
/* */
/* */
/*     var emkostFrom = $('#content input[name=\'emkostFrom\']').prop('value');*/
/* */
/*     if (emkostFrom > 0) {*/
/*       url += '&emkostFrom=' + encodeURIComponent(emkostFrom);*/
/*     }*/
/* */
/*     var emkostTo = $('#content input[name=\'emkostTo\']').prop('value');*/
/* */
/*     if (emkostTo > 0) {*/
/*       url += '&emkostTo=' + encodeURIComponent(emkostTo);*/
/*     }*/
/* */
/*     var polyarnost = $('#content select[name=\'polyarnost\']').prop('value');*/
/* */
/*     if (polyarnost) {*/
/*       url += '&polyarnost=' + encodeURIComponent(polyarnost);*/
/*     }*/
/* */
/* */
/*     var lengthFrom = $('#content input[name=\'lengthFrom\']').prop('value');*/
/* */
/*     if (lengthFrom > 0) {*/
/*       url += '&lengthFrom=' + encodeURIComponent(lengthFrom);*/
/*     }*/
/* */
/*     var lengthTo = $('#content input[name=\'lengthTo\']').prop('value');*/
/* */
/*     if (lengthTo > 0) {*/
/*       url += '&lengthTo=' + encodeURIComponent(lengthTo);*/
/*     }*/
/* */
/*     var heightFrom = $('#content input[name=\'heightFrom\']').prop('value');*/
/* */
/*     if (heightFrom > 0) {*/
/*       url += '&heightFrom=' + encodeURIComponent(heightFrom);*/
/*     }*/
/* */
/*     var heightTo = $('#content input[name=\'heightTo\']').prop('value');*/
/* */
/*     if (heightTo > 0) {*/
/*       url += '&heightTo=' + encodeURIComponent(heightTo);*/
/*     }*/
/* */
/*     var widthFrom = $('#content input[name=\'widthFrom\']').prop('value');*/
/* */
/*     if (widthFrom > 0) {*/
/*       url += '&widthFrom=' + encodeURIComponent(widthFrom);*/
/*     }*/
/* */
/*     var widthTo = $('#content input[name=\'widthTo\']').prop('value');*/
/* */
/*     if (widthTo > 0) {*/
/*       url += '&widthTo=' + encodeURIComponent(widthTo);*/
/*     }*/
/* */
/*     var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/*     if (sub_category) {*/
/*       url += '&sub_category=true';*/
/*     }*/
/* */
/*     var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/*     if (filter_description) {*/
/*       url += '&description=true';*/
/*     }*/
/* */
/*     location = url;*/
/*   });*/
/* */
/* */
/* $('#button-search').bind('click', function() {*/
/* 	url = 'index.php?route=product/search';*/
/* */
/* 	var search = $('#content input[name=\'search\']').prop('value');*/
/* */
/* 	if (search) {*/
/* 		url += '&search=' + encodeURIComponent(search);*/
/* 	}*/
/* */
/*   var emkostFrom = $('#content input[name=\'emkostFrom\']').prop('value');*/
/* */
/*   if (emkostFrom > 0) {*/
/*     url += '&emkostFrom=' + encodeURIComponent(emkostFrom);*/
/*   }*/
/* */
/*   var emkostTo = $('#content input[name=\'emkostTo\']').prop('value');*/
/* */
/*   if (emkostTo > 0) {*/
/*     url += '&emkostTo=' + encodeURIComponent(emkostTo);*/
/*   }*/
/* */
/*   var polyarnost = $('#content input[name=\'polyarnost\']').prop('value');*/
/* */
/*   if (polyarnost) {*/
/*     url += '&polyarnost=' + encodeURIComponent(polyarnost);*/
/*   }*/
/* */
/* */
/*   var lengthFrom = $('#content input[name=\'lengthFrom\']').prop('value');*/
/* */
/* 	if (lengthFrom > 0) {*/
/* 		url += '&lengthFrom=' + encodeURIComponent(lengthFrom);*/
/* 	}*/
/* */
/*   var lengthTo = $('#content input[name=\'lengthTo\']').prop('value');*/
/* */
/*   if (lengthTo > 0) {*/
/*     url += '&lengthTo=' + encodeURIComponent(lengthTo);*/
/*   }*/
/* */
/*   var heightFrom = $('#content input[name=\'heightFrom\']').prop('value');*/
/* */
/*   if (heightFrom > 0) {*/
/*     url += '&heightFrom=' + encodeURIComponent(heightFrom);*/
/*   }*/
/* */
/*   var heightTo = $('#content input[name=\'heightTo\']').prop('value');*/
/* */
/*   if (heightTo > 0) {*/
/*     url += '&heightTo=' + encodeURIComponent(heightTo);*/
/*   }*/
/* */
/*   var widthFrom = $('#content input[name=\'widthFrom\']').prop('value');*/
/* */
/*   if (widthFrom > 0) {*/
/*     url += '&widthFrom=' + encodeURIComponent(widthFrom);*/
/*   }*/
/* */
/*   var widthTo = $('#content input[name=\'widthTo\']').prop('value');*/
/* */
/*   if (widthTo > 0) {*/
/*     url += '&widthTo=' + encodeURIComponent(widthTo);*/
/*   }*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('#content input[name=\'search\']').bind('keydown', function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		$('#button-search').trigger('click');*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').on('change', function() {*/
/* 	if (this.value == '0') {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', true);*/
/* 	} else {*/
/* 		$('input[name=\'sub_category\']').prop('disabled', false);*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'category_id\']').trigger('change');*/
/* --></script>*/
/* */
/* */
/* {{ footer }}*/
/* */

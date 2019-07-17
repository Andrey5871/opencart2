<?php

/* bootstrap4_basic/template/product/search.twig */
class __TwigTemplate_4b8e74832675948314fc1edaaa884589201020b7f92a4d94c06025bcb57a6432 extends Twig_Template
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



<div id=\"product-search\" class=\"container\">
<div class=\"wrap\">
  <nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb\">
      ";
        // line 19
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
            // line 20
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
        // line 22
        echo "    </ol>
  </nav>
  <div class=\"container\">
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
      <h1>";
        // line 34
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>



      <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
        ";
        // line 39
        if ((isset($context["activeSerachParam"]) ? $context["activeSerachParam"] : null)) {
            // line 40
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"marka-tab\" data-toggle=\"tab\" href=\"#markaSearch\" role=\"tab\" aria-controls=\"markaSearch\" aria-selected=\"false\">Поиск АКБ по марке авто</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active show\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"true\">Поиск АКБ по параметрам</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"false\">Поиск по сайту</a>
        </li>
        ";
        } elseif (        // line 49
(isset($context["searchMarkaAuto"]) ? $context["searchMarkaAuto"] : null)) {
            // line 50
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link active\" id=\"marka-tab\" data-toggle=\"tab\" href=\"#markaSearch\" role=\"tab\" aria-controls=\"markaSearch\" aria-selected=\"true\">Поиск АКБ по марке авто</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Поиск АКБ по параметрам</a>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"false\">Поиск по сайту</a>
          </li>
        </li>
        ";
        } else {
            // line 60
            echo "        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"marka-tab\" data-toggle=\"tab\" href=\"#markaSearch\" role=\"tab\" aria-controls=\"markaSearch\" aria-selected=\"false\">Поиск АКБ по марке авто</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Поиск АКБ по параметрам</a>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Поиск по сайту</a>
          </li>
        </li>
      ";
        }
        // line 70
        echo "
</ul>
<div class=\"tab-content\" id=\"myTabContent\">
";
        // line 73
        if ((isset($context["activeSerachParam"]) ? $context["activeSerachParam"] : null)) {
            // line 74
            echo "    <div class=\"tab-pane fade\" id=\"markaSearch\" role=\"tabpanel\" aria-labelledby=\"markaSearch-tab\">
";
        } elseif (        // line 75
(isset($context["searchMarkaAuto"]) ? $context["searchMarkaAuto"] : null)) {
            // line 76
            echo "  <div class=\"tab-pane fade show active\" id=\"markaSearch\" role=\"tabpanel\" aria-labelledby=\"markaSearch-tab\">
    ";
        } else {
            // line 78
            echo "    <div class=\"tab-pane fade\" id=\"markaSearch\" role=\"tabpanel\" aria-labelledby=\"markaSearch-tab\">
";
        }
        // line 80
        echo "
      ";
        // line 81
        if ((isset($context["urlModyfi"]) ? $context["urlModyfi"] : null)) {
            // line 82
            echo "      <nav aria-label=\"breadcrumb\">
              <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
            // line 84
            echo (isset($context["urlDefaultMarka"]) ? $context["urlDefaultMarka"] : null);
            echo "\">Марки</a></li>
              ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["urlModyfi"]);
            foreach ($context['_seq'] as $context["_key"] => $context["urlModyfi"]) {
                // line 86
                echo "                    <li class=\"breadcrumb-item\"><a href=\"";
                echo $this->getAttribute($context["urlModyfi"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["urlModyfi"], "name", array());
                echo "</a></li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['urlModyfi'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "              </ol>
      </nav>
    ";
        }
        // line 91
        echo "

        <div class=\"row\">
          ";
        // line 94
        if ((isset($context["getModifyElem"]) ? $context["getModifyElem"] : null)) {
            // line 95
            echo "        ";
        } else {
            // line 96
            echo "        ";
            if ((isset($context["getModify"]) ? $context["getModify"] : null)) {
                // line 97
                echo "        <div class=\"col-12 p-4\">
          <h5 class=\"text-center\">Выберите модификаццию</h5>
        </div>
        ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["getModify"]);
                foreach ($context['_seq'] as $context["_key"] => $context["getModify"]) {
                    // line 101
                    echo "                  <div class=\"col-2\" style=\"
    display: table;
    width: 100px;
    height: 100px;
    position: relative;
    text-align: center;
    border: 1px solid #e3e3e3;
    
\t\">
                    <a href=\"";
                    // line 110
                    echo $this->getAttribute($context["getModify"], "href", array());
                    echo "\" style=\"display: table-cell;
    vertical-align: middle;\">";
                    // line 111
                    echo $this->getAttribute($context["getModify"], "name", array());
                    echo " <br>";
                    echo $this->getAttribute($context["getModify"], "year", array());
                    echo "</a>
                  </div>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getModify'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "        ";
            } else {
                // line 116
                echo "        ";
                if ((isset($context["getModelAuto"]) ? $context["getModelAuto"] : null)) {
                    // line 117
                    echo "        <div class=\"col-12 p-4\">
          <h5 class=\"text-center\">Выберите модель автомобиля</h5>
        </div>

              ";
                    // line 121
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["getModelAuto"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["getModelAuto"]) {
                        // line 122
                        echo "              <div class=\"col-2\" style=\"
    display: table;
    width: 100px;
    height: 100px;
    position: relative;
    text-align: center;
    border: 1px solid #e3e3e3;
    
\t\">
                <a href=\"";
                        // line 131
                        echo $this->getAttribute($context["getModelAuto"], "href", array());
                        echo "\" style=\"display: table-cell;
    vertical-align: middle;\">";
                        // line 132
                        echo $this->getAttribute($context["getModelAuto"], "name", array());
                        echo "</a>
              </div>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['getModelAuto'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "        ";
                } else {
                    // line 136
                    echo "        <div class=\"col-12 p-4\">
          <h5 class=\"text-center\">Выберите марку автомобиля</h5>
        </div>
            ";
                    // line 139
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["getMarkaAuto"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["getMarkaAuto"]) {
                        // line 140
                        echo "            <div class=\"col-2 text-center\" style=\"padding:10px\">
              <a href=\"";
                        // line 141
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
                    // line 144
                    echo "      ";
                }
                // line 145
                echo "      ";
            }
            // line 146
            echo "        ";
        }
        // line 147
        echo "




        </div>


  </div>

  ";
        // line 157
        if ((isset($context["activeSerachParam"]) ? $context["activeSerachParam"] : null)) {
            // line 158
            echo "  <div class=\"tab-pane fade\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
    ";
        } elseif (        // line 159
(isset($context["searchMarkaAuto"]) ? $context["searchMarkaAuto"] : null)) {
            // line 160
            echo "  <div class=\"tab-pane fade\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
";
        } else {
            // line 162
            echo "  <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
";
        }
        // line 164
        echo "    <label class=\"col-form-label\" for=\"input-search\">";
        echo (isset($context["entry_search"]) ? $context["entry_search"] : null);
        echo "</label>
    <div class=\"row\">
      <div class=\"col-sm-4\">
        <input type=\"text\" name=\"search\" value=\"";
        // line 167
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "\" id=\"input-search\" class=\"form-control\" />
      </div>
      <div class=\"col-sm-3\">
        <select name=\"category_id\" class=\"form-control\">
          <option value=\"0\">";
        // line 171
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "</option>
          ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 173
            echo "          ";
            if (($this->getAttribute($context["category_1"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 174
                echo "          <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
          ";
            } else {
                // line 176
                echo "          <option value=\"";
                echo $this->getAttribute($context["category_1"], "category_id", array());
                echo "\">";
                echo $this->getAttribute($context["category_1"], "name", array());
                echo "</option>
          ";
            }
            // line 178
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 179
                echo "          ";
                if (($this->getAttribute($context["category_2"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                    // line 180
                    echo "          <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
          ";
                } else {
                    // line 182
                    echo "          <option value=\"";
                    echo $this->getAttribute($context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo $this->getAttribute($context["category_2"], "name", array());
                    echo "</option>
          ";
                }
                // line 184
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 185
                    echo "          ";
                    if (($this->getAttribute($context["category_3"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                        // line 186
                        echo "          <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
          ";
                    } else {
                        // line 188
                        echo "          <option value=\"";
                        echo $this->getAttribute($context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo $this->getAttribute($context["category_3"], "name", array());
                        echo "</option>
          ";
                    }
                    // line 190
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 192
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "        </select>
      </div>
      <div class=\"col-sm-3\">
        <div class=\"form-check form-check-inline\">
          ";
        // line 197
        if ((isset($context["sub_category"]) ? $context["sub_category"] : null)) {
            // line 198
            echo "          <input class=\"form-check-input\" type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
          ";
        } else {
            // line 200
            echo "          <input class=\"form-check-input\" type=\"checkbox\" name=\"sub_category\" value=\"1\" />
          ";
        }
        // line 202
        echo "          <label class=\"form-check-label\">";
        echo (isset($context["text_sub_category"]) ? $context["text_sub_category"] : null);
        echo "</label>
        </div>
      </div>
    </div>

    <p>
      <div class=\"form-check form-check-inline\">
        ";
        // line 209
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 210
            echo "        <input class=\"form-check-input\" type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked>
        ";
        } else {
            // line 212
            echo "        <input class=\"form-check-input\" type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
        ";
        }
        // line 214
        echo "        <label class=\"form-check-label\">";
        echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
        echo "</label>
      </div>
    </p>
    <input type=\"button\" value=\"";
        // line 217
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" id=\"button-search\" class=\"btn btn-primary\" />

  </div>
  ";
        // line 220
        if ((isset($context["activeSerachParam"]) ? $context["activeSerachParam"] : null)) {
            // line 221
            echo "  <div class=\"tab-pane fade show active\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
    ";
        } elseif (        // line 222
(isset($context["searchMarkaAuto"]) ? $context["searchMarkaAuto"] : null)) {
            // line 223
            echo "      <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
";
        } else {
            // line 225
            echo "  <div class=\"tab-pane fade\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
";
        }
        // line 227
        echo "

    <div class=\"row\">
      <div class=\"col-3\" style=\"margin-top:20px\">
        <h5>Длина</h5>
        <label class=\"form-option-label\">от</label>
          <input type=\"text\" class=\"form-control\" name=\"lengthFrom\" value=\"";
        // line 233
        echo (isset($context["lengthSelect"]) ? $context["lengthSelect"] : null);
        echo "\">
        <label class=\"form-option-label\">до</label>
          <input type=\"text\" class=\"form-control\" name=\"lengthTo\" value=\"";
        // line 235
        echo (isset($context["lengthToSelect"]) ? $context["lengthToSelect"] : null);
        echo "\">
      </div>
      <div class=\"col-3\" style=\"margin-top:20px\">
        <h5>Ширина</h5>
        <label class=\"form-option-label\">от</label>
          <input type=\"text\" class=\"form-control\" name=\"widthFrom\" value=\"";
        // line 240
        echo (isset($context["widthSelect"]) ? $context["widthSelect"] : null);
        echo "\">
        <label class=\"form-option-label\">до</label>
          <input type=\"text\" class=\"form-control\" name=\"widthTo\" value=\"";
        // line 242
        echo (isset($context["widthToSelect"]) ? $context["widthToSelect"] : null);
        echo "\">
      </div>

      <div class=\"col-3\" style=\"margin-top:20px\">
        <h5>Высота</h5>
        <label class=\"form-option-label\">от</label>
          <input type=\"text\" class=\"form-control\" name=\"heightFrom\" value=\"";
        // line 248
        echo (isset($context["heightSelect"]) ? $context["heightSelect"] : null);
        echo "\">
        <label class=\"form-option-label\">до</label>
          <input type=\"text\" class=\"form-control\" name=\"heightTo\" value=\"";
        // line 250
        echo (isset($context["heightToSelect"]) ? $context["heightToSelect"] : null);
        echo "\">
      </div>


    </div>
    <div class=\"row\">
      <div class=\"col-3\" style=\"margin-top:20px\">
        <h5>Ёмкость</h5>
        <label class=\"form-option-label\">от</label>
          <input type=\"text\" class=\"form-control\" name=\"emkostFrom\" value=\"";
        // line 259
        echo (isset($context["emkostFromSelect"]) ? $context["emkostFromSelect"] : null);
        echo "\">
        <label class=\"form-option-label\">до</label>
          <input type=\"text\" class=\"form-control\" name=\"emkostTo\" value=\"";
        // line 261
        echo (isset($context["emkostToSelect"]) ? $context["emkostToSelect"] : null);
        echo "\">
      </div>
        <div class=\"col-3\" style=\"margin-top:20px\">
          <h5>Полярность</h5>
          <label class=\"form-option-label\">Выберите полярность</label>
            <select name=\"polyarnost\" class=\"form-control\">
              <option value=\"all\">Любая</option>
              ";
        // line 268
        if ((isset($context["polyarnost"]) ? $context["polyarnost"] : null)) {
            // line 269
            echo "              ";
            if (((isset($context["polyarnost"]) ? $context["polyarnost"] : null) == "all")) {
                // line 270
                echo "              <option value=\"Прямая полярность\">Прямая</option>
              <option value=\"Обратная полярность\">Обратная</option>
              ";
            } else {
                // line 273
                echo "              ";
                if (((isset($context["polyarnost"]) ? $context["polyarnost"] : null) == "Прямая полярность")) {
                    // line 274
                    echo "              <option value=\"Прямая полярность\" selected>Прямая</option>
              <option value=\"Обратная полярность\">Обратная</option>
            ";
                }
                // line 277
                echo "            ";
                if (((isset($context["polyarnost"]) ? $context["polyarnost"] : null) == "Обратная полярность")) {
                    // line 278
                    echo "              <option value=\"Обратная полярность\" selected>Обратная</option>
              <option value=\"Прямая полярность\">Прямая</option>
              ";
                }
                // line 281
                echo "              ";
            }
            // line 282
            echo "              ";
        } else {
            // line 283
            echo "              <option value=\"Прямая полярность\">Прямая</option>
              <option value=\"Обратная полярность\">Обратная</option>
            ";
        }
        // line 286
        echo "
            </select>
        </div>

    </div>

    <input type=\"button\" value=\"";
        // line 292
        echo (isset($context["button_search"]) ? $context["button_search"] : null);
        echo "\" style=\"margin-top:20px\" id=\"button-search2\" class=\"btn btn-primary\" />

  </div>
</div>








    ";
        // line 304
        if ((isset($context["getModelAuto"]) ? $context["getModelAuto"] : null)) {
            // line 305
            echo "      ";
        } else {
            // line 306
            echo "      <h2>";
            echo (isset($context["text_search"]) ? $context["text_search"] : null);
            echo "</h2>
      ";
            // line 307
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 308
                echo "      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"";
                // line 311
                echo (isset($context["button_list"]) ? $context["button_list"] : null);
                echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"";
                // line 312
                echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
                echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"table-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"Таблица\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\">
            <a href=\"";
                // line 318
                echo (isset($context["compare"]) ? $context["compare"] : null);
                echo "\" id=\"compare-total\" class=\"btn btn-link\">";
                echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
                echo "</a>
          </div>
        </div>
        <div class=\"col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-prepend\" for=\"input-sort\"><span class=\"input-group-text\">";
                // line 323
                echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
                echo "</span></label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                // line 325
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 326
                    echo "              ";
                    if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                        // line 327
                        echo "              <option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
              ";
                    } else {
                        // line 329
                        echo "              <option value=\"";
                        echo $this->getAttribute($context["sorts"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["sorts"], "text", array());
                        echo "</option>
              ";
                    }
                    // line 331
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 332
                echo "            </select>
          </div>
        </div>
        <div class=\"col-md-3 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-prepend\" for=\"input-limit\"><span class=\"input-group-text\">";
                // line 337
                echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
                echo "</span></label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                // line 339
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 340
                    echo "              ";
                    if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                        // line 341
                        echo "              <option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
              ";
                    } else {
                        // line 343
                        echo "              <option value=\"";
                        echo $this->getAttribute($context["limits"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["limits"], "text", array());
                        echo "</option>
              ";
                    }
                    // line 345
                    echo "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 346
                echo "            </select>
          </div>
        </div>
      </div>

      <div class=\"row\">
        ";
                // line 352
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 353
                    echo "        <div class=\"product-layout product-list mb-3 col-12 \">
          <div class=\"product-thumb\" style=\"padding-bottom: 25px;\">
            <div class=\"image\"><a href=\"";
                    // line 355
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
                    // line 358
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></h4>
                <p>";
                    // line 359
                    echo $this->getAttribute($context["product"], "description", array());
                    echo "</p>
                ";
                    // line 360
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 361
                        echo "                <p class=\"price\">
                  ";
                        // line 362
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 363
                            echo "                  ";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
                  ";
                        } else {
                            // line 365
                            echo "                  <span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span>
                  ";
                        }
                        // line 367
                        echo "                  ";
                        if ($this->getAttribute($context["product"], "tax", array())) {
                            // line 368
                            echo "                  <span class=\"price-tax\">";
                            echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                            echo " ";
                            echo $this->getAttribute($context["product"], "tax", array());
                            echo "</span>
                  ";
                        }
                        // line 370
                        echo "                </p>
                ";
                    }
                    // line 372
                    echo "                ";
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 373
                        echo "                <div class=\"rating\">
                  ";
                        // line 374
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 375
                            echo "                  ";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                // line 376
                                echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                            } else {
                                // line 378
                                echo "                  <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                  ";
                            }
                            // line 380
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 381
                        echo "                </div>
                ";
                    }
                    // line 383
                    echo "              </div>
              <div class=\"button-group pull-right w-100 border-top bg-light text-center\">
                <button class=\"btn btn-outline-danger\" type=\"button\" onclick=\"cart.add('";
                    // line 385
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "', '";
                    echo $this->getAttribute($context["product"], "minimum", array());
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></button>
                <button class=\"btn btn-outline-danger\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 386
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button class=\"btn btn-outline-danger\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 387
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
            </div>
          </div>
        </div>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 394
                echo "


    <table class=\"table table-bordered\" style=\"display:none\">
  <thead>
    <tr>
      <th scope=\"col\">Наименование</th>
        <th scope=\"col\">Цена</th>
        <th scope=\"col\">В корзину</th>
    </tr>
  </thead>
  <tbody>
    ";
                // line 406
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 407
                    echo "    <tr>
      <td><a href=\"";
                    // line 408
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></td>
      <td>
      ";
                    // line 410
                    if ($this->getAttribute($context["product"], "price", array())) {
                        // line 411
                        echo "      <p class=\"price\"> ";
                        if ( !$this->getAttribute($context["product"], "special", array())) {
                            // line 412
                            echo "         ";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "
        ";
                        } else {
                            // line 413
                            echo " <span class=\"price-new\">";
                            echo $this->getAttribute($context["product"], "special", array());
                            echo "</span> <span class=\"price-old\">";
                            echo $this->getAttribute($context["product"], "price", array());
                            echo "</span> ";
                        }
                        // line 414
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
                    // line 416
                    echo "      ";
                    if ($this->getAttribute($context["product"], "rating", array())) {
                        // line 417
                        echo "      <div class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 418
                            echo "        ";
                            if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            }
                            // line 419
                            echo "        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " </div>
      ";
                    }
                    // line 420
                    echo "</div>
    </td>
    <td>
      <div class=\"button-group pull-right w-100 border-top bg-light text-center\">
        <button class=\"btn btn-outline-danger\" type=\"button\" onclick=\"cart.add('";
                    // line 424
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
                // line 429
                echo "  </tbody>
  </table>



      </div>






      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
                // line 442
                echo (isset($context["pagination"]) ? $context["pagination"] : null);
                echo "</div>
        <div class=\"col-sm-6 text-right\">";
                // line 443
                echo (isset($context["results"]) ? $context["results"] : null);
                echo "</div>
      </div>
      ";
            } else {
                // line 446
                echo "      <p>";
                echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
                echo "</p>
      ";
            }
            // line 448
            echo "
  ";
        }
        // line 450
        echo "

      ";
        // line 452
        if ((isset($context["productsAuto"]) ? $context["productsAuto"] : null)) {
            // line 453
            echo "
      <div class=\"row\">
        <div class=\"col-md-2 col-sm-6 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"list-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"";
            // line 457
            echo (isset($context["button_list"]) ? $context["button_list"] : null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"grid-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"";
            // line 458
            echo (isset($context["button_grid"]) ? $context["button_grid"] : null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            <button type=\"button\" id=\"table-view\" class=\"btn btn-light border\" data-toggle=\"tooltip\" title=\"Таблица\"><i class=\"fa fa-table\" aria-hidden=\"true\"></i></button>
          </div>
        </div>
        <div class=\"col-md-3 col-sm-6\">
          <div class=\"form-group\">
            <a href=\"";
            // line 464
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\" class=\"btn btn-link\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <table class=\"table table-bordered\" style=\"display:none\">
  <thead>
    <tr>
      <th scope=\"col\">Наименование</th>
      <th scope=\"col\">Размеры (д*ш*в, мм)</th>
      <th scope=\"col\">Полярность</th>
      <th scope=\"col\">Емкость</th>
        <th scope=\"col\">Цена</th>
        <th scope=\"col\">В корзину</th>
    </tr>
  </thead>
  <tbody>
    ";
            // line 482
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productsAuto"]) ? $context["productsAuto"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 483
                echo "    <tr>
      <td><a href=\"";
                // line 484
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></td>
      <td>";
                // line 485
                echo $this->getAttribute($context["product"], "length", array());
                echo "*";
                echo $this->getAttribute($context["product"], "width", array());
                echo "*";
                echo $this->getAttribute($context["product"], "height", array());
                echo "</td>
      <td>";
                // line 486
                echo $this->getAttribute($context["product"], "polyaryti", array());
                echo "</td>
      <td>";
                // line 487
                echo $this->getAttribute($context["product"], "emkostNomin", array());
                echo "</td>
      <td>
      ";
                // line 489
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 490
                    echo "      <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 491
                        echo "         ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
        ";
                    } else {
                        // line 492
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 493
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
                // line 495
                echo "      ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 496
                    echo "      <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 497
                        echo "        ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 498
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
      ";
                }
                // line 499
                echo "</div>
    </td>
    <td>
      <div class=\"button-group pull-right w-100 border-top bg-light text-center\">
        <button class=\"btn btn-outline-danger\" type=\"button\" onclick=\"cart.add('";
                // line 503
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
            // line 508
            echo "  </tbody>
  </table>




      <div class=\"row\">
        ";
            // line 515
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["productsAuto"]);
            foreach ($context['_seq'] as $context["_key"] => $context["productsAuto"]) {
                // line 516
                echo "        <div class=\"product-layout product-list mb-3 col-12 \">
          <div class=\"product-thumb\" style=\"padding-bottom: 25px;\">
            <div class=\"image\"><a href=\"";
                // line 518
                echo $this->getAttribute($context["productsAuto"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["productsAuto"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["productsAuto"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["productsAuto"], "name", array());
                echo "\" class=\"img-fluid\" /></a></div>
            <div>
              <div class=\"caption p-3\">
                <h4><a href=\"";
                // line 521
                echo $this->getAttribute($context["productsAuto"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["productsAuto"], "name", array());
                echo "</a></h4>
                <p>";
                // line 522
                echo $this->getAttribute($context["productsAuto"], "description", array());
                echo "</p>
                ";
                // line 523
                if ($this->getAttribute($context["productsAuto"], "price", array())) {
                    // line 524
                    echo "                <p class=\"price\">
                  ";
                    // line 525
                    echo $this->getAttribute($context["productsAuto"], "price", array());
                    echo "
                </p>
                ";
                }
                // line 528
                echo "              </div>
              
            </div>
          </div><div class=\"button-group text-center\">
                <button class=\"btn btn btn-outline-danger\" type=\"button\" onclick=\"cart.add('";
                // line 532
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                echo "', '";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></button>
                <button class=\"btn btn btn-outline-danger\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 533
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                <button class=\"btn btn btn-outline-danger\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 534
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
              </div>
        </div><hr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productsAuto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 538
            echo "      </div>
      <nav aria-label=\"Page navigation example\">
  <ul class=\"pagination\">
    ";
            // line 541
            if ((isset($context["preButton"]) ? $context["preButton"] : null)) {
                // line 542
                echo "        <li class=\"page-item\">";
                echo (isset($context["preButton"]) ? $context["preButton"] : null);
                echo "</li>
    ";
            }
            // line 544
            echo "

";
            // line 546
            if ((isset($context["onButton"]) ? $context["onButton"] : null)) {
                // line 547
                echo "  <li class=\"page-item\">";
                echo (isset($context["onButton"]) ? $context["onButton"] : null);
                echo "</li>
";
            }
            // line 549
            echo "<li class=\"page-item disabled\"></li>
      ";
            // line 550
            if ((isset($context["hrefPre"]) ? $context["hrefPre"] : null)) {
                // line 551
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["hrefPre"]);
                foreach ($context['_seq'] as $context["_key"] => $context["hrefPre"]) {
                    // line 552
                    echo "          <li class=\"page-item\">  ";
                    echo $context["hrefPre"];
                    echo "  </li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hrefPre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 554
                echo "      ";
            }
            // line 555
            echo "      <li class=\"page-item disabled\"></li>
    <li class=\"page-item disabled\">
    ";
            // line 557
            if ((isset($context["active"]) ? $context["active"] : null)) {
                // line 558
                echo "      <a class='page-link'>";
                echo (isset($context["active"]) ? $context["active"] : null);
                echo "</a>
    ";
            }
            // line 560
            echo "  </li>
    <li class=\"page-item disabled\"></li>
      ";
            // line 562
            if ((isset($context["hrefNext"]) ? $context["hrefNext"] : null)) {
                // line 563
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["hrefNext"]);
                foreach ($context['_seq'] as $context["_key"] => $context["hrefNext"]) {
                    // line 564
                    echo "          <li class=\"page-item\">    ";
                    echo $context["hrefNext"];
                    echo "  </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hrefNext'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 566
                echo "      ";
            }
            // line 567
            echo "      <li class=\"page-item disabled\"></li>
";
            // line 568
            if ((isset($context["lastButton"]) ? $context["lastButton"] : null)) {
                // line 569
                echo "    <li class=\"page-item\">";
                echo (isset($context["lastButton"]) ? $context["lastButton"] : null);
                echo "</li>
";
            }
            // line 571
            echo "      ";
            if ((isset($context["nextButton"]) ? $context["nextButton"] : null)) {
                // line 572
                echo "          <li class=\"page-item\">";
                echo (isset($context["nextButton"]) ? $context["nextButton"] : null);
                echo "</li>
      ";
            }
            // line 574
            echo "  </ul>
</nav>

    ";
        }
        // line 578
        echo "








      ";
        // line 587
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 588
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

    if (polyarnost == \"all\") {

    }else{
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

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}


  var emkostFrom = \$('#content input[name=\\'emkostFrom\\']').prop('value');

  if (emkostFrom > 0) {
    url += '&emkostFrom=' + encodeURIComponent(emkostFrom);
  }

  var emkostTo = \$('#content input[name=\\'emkostTo\\']').prop('value');

  if (emkostTo > 0) {
    url += '&emkostTo=' + encodeURIComponent(emkostTo);
  }

  var polyarnost = \$('#content select[name=\\'polyarnost\\']').prop('value');


  if (polyarnost == \"all\") {

  }else{
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

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

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
        // line 783
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1609 => 783,  1411 => 588,  1407 => 587,  1396 => 578,  1390 => 574,  1384 => 572,  1381 => 571,  1375 => 569,  1373 => 568,  1370 => 567,  1367 => 566,  1358 => 564,  1353 => 563,  1351 => 562,  1347 => 560,  1341 => 558,  1339 => 557,  1335 => 555,  1332 => 554,  1323 => 552,  1318 => 551,  1316 => 550,  1313 => 549,  1307 => 547,  1305 => 546,  1301 => 544,  1295 => 542,  1293 => 541,  1288 => 538,  1276 => 534,  1270 => 533,  1262 => 532,  1256 => 528,  1250 => 525,  1247 => 524,  1245 => 523,  1241 => 522,  1235 => 521,  1223 => 518,  1219 => 516,  1215 => 515,  1206 => 508,  1191 => 503,  1185 => 499,  1176 => 498,  1169 => 497,  1164 => 496,  1161 => 495,  1149 => 493,  1142 => 492,  1136 => 491,  1133 => 490,  1131 => 489,  1126 => 487,  1122 => 486,  1114 => 485,  1108 => 484,  1105 => 483,  1101 => 482,  1078 => 464,  1069 => 458,  1065 => 457,  1059 => 453,  1057 => 452,  1053 => 450,  1049 => 448,  1043 => 446,  1037 => 443,  1033 => 442,  1018 => 429,  1003 => 424,  997 => 420,  988 => 419,  981 => 418,  976 => 417,  973 => 416,  961 => 414,  954 => 413,  948 => 412,  945 => 411,  943 => 410,  936 => 408,  933 => 407,  929 => 406,  915 => 394,  900 => 387,  894 => 386,  886 => 385,  882 => 383,  878 => 381,  872 => 380,  868 => 378,  864 => 376,  861 => 375,  857 => 374,  854 => 373,  851 => 372,  847 => 370,  839 => 368,  836 => 367,  828 => 365,  822 => 363,  820 => 362,  817 => 361,  815 => 360,  811 => 359,  805 => 358,  793 => 355,  789 => 353,  785 => 352,  777 => 346,  771 => 345,  763 => 343,  755 => 341,  752 => 340,  748 => 339,  743 => 337,  736 => 332,  730 => 331,  722 => 329,  714 => 327,  711 => 326,  707 => 325,  702 => 323,  692 => 318,  683 => 312,  679 => 311,  674 => 308,  672 => 307,  667 => 306,  664 => 305,  662 => 304,  647 => 292,  639 => 286,  634 => 283,  631 => 282,  628 => 281,  623 => 278,  620 => 277,  615 => 274,  612 => 273,  607 => 270,  604 => 269,  602 => 268,  592 => 261,  587 => 259,  575 => 250,  570 => 248,  561 => 242,  556 => 240,  548 => 235,  543 => 233,  535 => 227,  531 => 225,  527 => 223,  525 => 222,  522 => 221,  520 => 220,  514 => 217,  507 => 214,  503 => 212,  499 => 210,  497 => 209,  486 => 202,  482 => 200,  478 => 198,  476 => 197,  470 => 193,  464 => 192,  458 => 191,  452 => 190,  444 => 188,  436 => 186,  433 => 185,  428 => 184,  420 => 182,  412 => 180,  409 => 179,  404 => 178,  396 => 176,  388 => 174,  385 => 173,  381 => 172,  377 => 171,  368 => 167,  361 => 164,  357 => 162,  353 => 160,  351 => 159,  348 => 158,  346 => 157,  334 => 147,  331 => 146,  328 => 145,  325 => 144,  310 => 141,  307 => 140,  303 => 139,  298 => 136,  295 => 135,  286 => 132,  282 => 131,  271 => 122,  267 => 121,  261 => 117,  258 => 116,  255 => 115,  243 => 111,  239 => 110,  228 => 101,  224 => 100,  219 => 97,  216 => 96,  213 => 95,  211 => 94,  206 => 91,  201 => 88,  190 => 86,  186 => 85,  182 => 84,  178 => 82,  176 => 81,  173 => 80,  169 => 78,  165 => 76,  163 => 75,  160 => 74,  158 => 73,  153 => 70,  141 => 60,  129 => 50,  127 => 49,  116 => 40,  114 => 39,  106 => 34,  99 => 33,  96 => 32,  93 => 31,  90 => 30,  87 => 29,  84 => 28,  81 => 27,  79 => 26,  75 => 25,  70 => 22,  47 => 20,  30 => 19,  19 => 11,);
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
/* */
/* */
/* <div id="product-search" class="container">*/
/* <div class="wrap">*/
/*   <nav aria-label="breadcrumb">*/
/*     <ol class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li class="breadcrumb-item"{% if loop.last %} aria-current="page"{% endif %}><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ol>*/
/*   </nav>*/
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
/* */
/* */
/* */
/*       <ul class="nav nav-tabs" id="myTab" role="tablist">*/
/*         {% if activeSerachParam %}*/
/*         <li class="nav-item">*/
/*           <a class="nav-link" id="marka-tab" data-toggle="tab" href="#markaSearch" role="tab" aria-controls="markaSearch" aria-selected="false">Поиск АКБ по марке авто</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*           <a class="nav-link active show" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Поиск АКБ по параметрам</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*           <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Поиск по сайту</a>*/
/*         </li>*/
/*         {% elseif searchMarkaAuto %}*/
/*         <li class="nav-item">*/
/*           <a class="nav-link active" id="marka-tab" data-toggle="tab" href="#markaSearch" role="tab" aria-controls="markaSearch" aria-selected="true">Поиск АКБ по марке авто</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Поиск АКБ по параметрам</a>*/
/*           <li class="nav-item">*/
/*             <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Поиск по сайту</a>*/
/*           </li>*/
/*         </li>*/
/*         {% else %}*/
/*         <li class="nav-item">*/
/*           <a class="nav-link" id="marka-tab" data-toggle="tab" href="#markaSearch" role="tab" aria-controls="markaSearch" aria-selected="false">Поиск АКБ по марке авто</a>*/
/*         </li>*/
/*         <li class="nav-item">*/
/*           <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Поиск АКБ по параметрам</a>*/
/*           <li class="nav-item">*/
/*             <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Поиск по сайту</a>*/
/*           </li>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/* </ul>*/
/* <div class="tab-content" id="myTabContent">*/
/* {% if activeSerachParam %}*/
/*     <div class="tab-pane fade" id="markaSearch" role="tabpanel" aria-labelledby="markaSearch-tab">*/
/* {% elseif searchMarkaAuto %}*/
/*   <div class="tab-pane fade show active" id="markaSearch" role="tabpanel" aria-labelledby="markaSearch-tab">*/
/*     {% else %}*/
/*     <div class="tab-pane fade" id="markaSearch" role="tabpanel" aria-labelledby="markaSearch-tab">*/
/* {% endif %}*/
/* */
/*       {% if urlModyfi %}*/
/*       <nav aria-label="breadcrumb">*/
/*               <ol class="breadcrumb">*/
/*                 <li class="breadcrumb-item"><a href="{{urlDefaultMarka}}">Марки</a></li>*/
/*               {% for urlModyfi in urlModyfi %}*/
/*                     <li class="breadcrumb-item"><a href="{{urlModyfi.href}}">{{urlModyfi.name}}</a></li>*/
/*               {% endfor %}*/
/*               </ol>*/
/*       </nav>*/
/*     {% endif %}*/
/* */
/* */
/*         <div class="row">*/
/*           {% if getModifyElem %}*/
/*         {% else %}*/
/*         {% if getModify %}*/
/*         <div class="col-12 p-4">*/
/*           <h5 class="text-center">Выберите модификаццию</h5>*/
/*         </div>*/
/*         {% for getModify in getModify %}*/
/*                   <div class="col-2" style="*/
/*     display: table;*/
/*     width: 100px;*/
/*     height: 100px;*/
/*     position: relative;*/
/*     text-align: center;*/
/*     border: 1px solid #e3e3e3;*/
/*     */
/* 	">*/
/*                     <a href="{{getModify.href}}" style="display: table-cell;*/
/*     vertical-align: middle;">{{getModify.name}} <br>{{getModify.year}}</a>*/
/*                   </div>*/
/* */
/*         {% endfor %}*/
/*         {% else %}*/
/*         {% if getModelAuto %}*/
/*         <div class="col-12 p-4">*/
/*           <h5 class="text-center">Выберите модель автомобиля</h5>*/
/*         </div>*/
/* */
/*               {% for getModelAuto in getModelAuto %}*/
/*               <div class="col-2" style="*/
/*     display: table;*/
/*     width: 100px;*/
/*     height: 100px;*/
/*     position: relative;*/
/*     text-align: center;*/
/*     border: 1px solid #e3e3e3;*/
/*     */
/* 	">*/
/*                 <a href="{{getModelAuto.href}}" style="display: table-cell;*/
/*     vertical-align: middle;">{{getModelAuto.name}}</a>*/
/*               </div>*/
/*               {% endfor %}*/
/*         {% else %}*/
/*         <div class="col-12 p-4">*/
/*           <h5 class="text-center">Выберите марку автомобиля</h5>*/
/*         </div>*/
/*             {% for getMarkaAuto in getMarkaAuto %}*/
/*             <div class="col-2 text-center" style="padding:10px">*/
/*               <a href="{{getMarkaAuto.href}}"> <img src="/image/2/{{getMarkaAuto.img}}" title="{{getMarkaAuto.name}}"><br>{{getMarkaAuto.name}}</a>*/
/*             </div>*/
/*             {% endfor %}*/
/*       {% endif %}*/
/*       {% endif %}*/
/*         {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/*         </div>*/
/* */
/* */
/*   </div>*/
/* */
/*   {% if activeSerachParam %}*/
/*   <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">*/
/*     {% elseif searchMarkaAuto %}*/
/*   <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">*/
/* {% else %}*/
/*   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">*/
/* {% endif %}*/
/*     <label class="col-form-label" for="input-search">{{ entry_search }}</label>*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/*         <input type="text" name="search" value="{{ search }}" placeholder="{{ text_keyword }}" id="input-search" class="form-control" />*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <select name="category_id" class="form-control">*/
/*           <option value="0">{{ text_category }}</option>*/
/*           {% for category_1 in categories %}*/
/*           {% if category_1.category_id == category_id %}*/
/*           <option value="{{ category_1.category_id }}" selected="selected">{{ category_1.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ category_1.category_id }}">{{ category_1.name }}</option>*/
/*           {% endif %}*/
/*           {% for category_2 in category_1.children %}*/
/*           {% if category_2.category_id == category_id %}*/
/*           <option value="{{ category_2.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ category_2.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_2.name }}</option>*/
/*           {% endif %}*/
/*           {% for category_3 in category_2.children %}*/
/*           {% if category_3.category_id == category_id %}*/
/*           <option value="{{ category_3.category_id }}" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ category_3.category_id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ category_3.name }}</option>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*           {% endfor %}*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <div class="form-check form-check-inline">*/
/*           {% if sub_category %}*/
/*           <input class="form-check-input" type="checkbox" name="sub_category" value="1" checked="checked" />*/
/*           {% else %}*/
/*           <input class="form-check-input" type="checkbox" name="sub_category" value="1" />*/
/*           {% endif %}*/
/*           <label class="form-check-label">{{ text_sub_category }}</label>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <p>*/
/*       <div class="form-check form-check-inline">*/
/*         {% if description %}*/
/*         <input class="form-check-input" type="checkbox" name="description" value="1" id="description" checked>*/
/*         {% else %}*/
/*         <input class="form-check-input" type="checkbox" name="description" value="1" id="description" />*/
/*         {% endif %}*/
/*         <label class="form-check-label">{{ entry_description }}</label>*/
/*       </div>*/
/*     </p>*/
/*     <input type="button" value="{{ button_search }}" id="button-search" class="btn btn-primary" />*/
/* */
/*   </div>*/
/*   {% if activeSerachParam %}*/
/*   <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">*/
/*     {% elseif searchMarkaAuto %}*/
/*       <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">*/
/* {% else %}*/
/*   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">*/
/* {% endif %}*/
/* */
/* */
/*     <div class="row">*/
/*       <div class="col-3" style="margin-top:20px">*/
/*         <h5>Длина</h5>*/
/*         <label class="form-option-label">от</label>*/
/*           <input type="text" class="form-control" name="lengthFrom" value="{{lengthSelect}}">*/
/*         <label class="form-option-label">до</label>*/
/*           <input type="text" class="form-control" name="lengthTo" value="{{lengthToSelect}}">*/
/*       </div>*/
/*       <div class="col-3" style="margin-top:20px">*/
/*         <h5>Ширина</h5>*/
/*         <label class="form-option-label">от</label>*/
/*           <input type="text" class="form-control" name="widthFrom" value="{{widthSelect}}">*/
/*         <label class="form-option-label">до</label>*/
/*           <input type="text" class="form-control" name="widthTo" value="{{widthToSelect}}">*/
/*       </div>*/
/* */
/*       <div class="col-3" style="margin-top:20px">*/
/*         <h5>Высота</h5>*/
/*         <label class="form-option-label">от</label>*/
/*           <input type="text" class="form-control" name="heightFrom" value="{{heightSelect}}">*/
/*         <label class="form-option-label">до</label>*/
/*           <input type="text" class="form-control" name="heightTo" value="{{heightToSelect}}">*/
/*       </div>*/
/* */
/* */
/*     </div>*/
/*     <div class="row">*/
/*       <div class="col-3" style="margin-top:20px">*/
/*         <h5>Ёмкость</h5>*/
/*         <label class="form-option-label">от</label>*/
/*           <input type="text" class="form-control" name="emkostFrom" value="{{emkostFromSelect}}">*/
/*         <label class="form-option-label">до</label>*/
/*           <input type="text" class="form-control" name="emkostTo" value="{{emkostToSelect}}">*/
/*       </div>*/
/*         <div class="col-3" style="margin-top:20px">*/
/*           <h5>Полярность</h5>*/
/*           <label class="form-option-label">Выберите полярность</label>*/
/*             <select name="polyarnost" class="form-control">*/
/*               <option value="all">Любая</option>*/
/*               {% if polyarnost %}*/
/*               {% if polyarnost ==  "all" %}*/
/*               <option value="Прямая полярность">Прямая</option>*/
/*               <option value="Обратная полярность">Обратная</option>*/
/*               {% else %}*/
/*               {% if polyarnost ==  "Прямая полярность" %}*/
/*               <option value="Прямая полярность" selected>Прямая</option>*/
/*               <option value="Обратная полярность">Обратная</option>*/
/*             {% endif %}*/
/*             {% if polyarnost ==  "Обратная полярность" %}*/
/*               <option value="Обратная полярность" selected>Обратная</option>*/
/*               <option value="Прямая полярность">Прямая</option>*/
/*               {% endif %}*/
/*               {% endif %}*/
/*               {% else %}*/
/*               <option value="Прямая полярность">Прямая</option>*/
/*               <option value="Обратная полярность">Обратная</option>*/
/*             {% endif %}*/
/* */
/*             </select>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     <input type="button" value="{{ button_search }}" style="margin-top:20px" id="button-search2" class="btn btn-primary" />*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*     {% if getModelAuto %}*/
/*       {% else %}*/
/*       <h2>{{ text_search }}</h2>*/
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
/*           <div class="form-group">*/
/*             <a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a>*/
/*           </div>*/
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
/* */
/*       <div class="row">*/
/*         {% for product in products %}*/
/*         <div class="product-layout product-list mb-3 col-12 ">*/
/*           <div class="product-thumb" style="padding-bottom: 25px;">*/
/*             <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-fluid" /></a></div>*/
/*             <div>*/
/*               <div class="caption m-3">*/
/*                 <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                 <p>{{ product.description }}</p>*/
/*                 {% if product.price %}*/
/*                 <p class="price">*/
/*                   {% if  not product.special %}*/
/*                   {{ product.price }}*/
/*                   {% else %}*/
/*                   <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span>*/
/*                   {% endif %}*/
/*                   {% if product.tax %}*/
/*                   <span class="price-tax">{{ text_tax }} {{ product.tax }}</span>*/
/*                   {% endif %}*/
/*                 </p>*/
/*                 {% endif %}*/
/*                 {% if product.rating %}*/
/*                 <div class="rating">*/
/*                   {% for i in 1..5 %}*/
/*                   {% if product.rating < i %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% else %}*/
/*                   <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               <div class="button-group pull-right w-100 border-top bg-light text-center">*/
/*                 <button class="btn btn-outline-danger" type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 <button class="btn btn-outline-danger" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button class="btn btn-outline-danger" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         {% endfor %}*/
/* */
/* */
/* */
/*     <table class="table table-bordered" style="display:none">*/
/*   <thead>*/
/*     <tr>*/
/*       <th scope="col">Наименование</th>*/
/*         <th scope="col">Цена</th>*/
/*         <th scope="col">В корзину</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for product in products %}*/
/*     <tr>*/
/*       <td><a href="{{ product.href }}">{{ product.name }}</a></td>*/
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
/*       <div class="button-group pull-right w-100 border-top bg-light text-center">*/
/*         <button class="btn btn-outline-danger" type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*       </div>*/
/*     </td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/*       </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/*       <div class="row">*/
/*         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*       </div>*/
/*       {% else %}*/
/*       <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/* */
/*   {% endif %}*/
/* */
/* */
/*       {% if productsAuto %}*/
/* */
/*       <div class="row">*/
/*         <div class="col-md-2 col-sm-6 hidden-xs">*/
/*           <div class="btn-group btn-group-sm">*/
/*             <button type="button" id="list-view" class="btn btn-light border" data-toggle="tooltip" title="{{ button_list }}"><i class="fa fa-th-list"></i></button>*/
/*             <button type="button" id="grid-view" class="btn btn-light border" data-toggle="tooltip" title="{{ button_grid }}"><i class="fa fa-th"></i></button>*/
/*             <button type="button" id="table-view" class="btn btn-light border" data-toggle="tooltip" title="Таблица"><i class="fa fa-table" aria-hidden="true"></i></button>*/
/*           </div>*/
/*         </div>*/
/*         <div class="col-md-3 col-sm-6">*/
/*           <div class="form-group">*/
/*             <a href="{{ compare }}" id="compare-total" class="btn btn-link">{{ text_compare }}</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row">*/
/*         <table class="table table-bordered" style="display:none">*/
/*   <thead>*/
/*     <tr>*/
/*       <th scope="col">Наименование</th>*/
/*       <th scope="col">Размеры (д*ш*в, мм)</th>*/
/*       <th scope="col">Полярность</th>*/
/*       <th scope="col">Емкость</th>*/
/*         <th scope="col">Цена</th>*/
/*         <th scope="col">В корзину</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for product in productsAuto %}*/
/*     <tr>*/
/*       <td><a href="{{ product.href }}">{{ product.name }}</a></td>*/
/*       <td>{{product.length}}*{{product.width}}*{{product.height}}</td>*/
/*       <td>{{product.polyaryti}}</td>*/
/*       <td>{{product.emkostNomin}}</td>*/
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
/*       <div class="button-group pull-right w-100 border-top bg-light text-center">*/
/*         <button class="btn btn-outline-danger" type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*       </div>*/
/*     </td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/* */
/*       <div class="row">*/
/*         {% for productsAuto in productsAuto %}*/
/*         <div class="product-layout product-list mb-3 col-12 ">*/
/*           <div class="product-thumb" style="padding-bottom: 25px;">*/
/*             <div class="image"><a href="{{ productsAuto.href }}"><img src="{{ productsAuto.thumb }}" alt="{{ productsAuto.name }}" title="{{ productsAuto.name }}" class="img-fluid" /></a></div>*/
/*             <div>*/
/*               <div class="caption p-3">*/
/*                 <h4><a href="{{ productsAuto.href }}">{{ productsAuto.name }}</a></h4>*/
/*                 <p>{{ productsAuto.description }}</p>*/
/*                 {% if productsAuto.price %}*/
/*                 <p class="price">*/
/*                   {{ productsAuto.price }}*/
/*                 </p>*/
/*                 {% endif %}*/
/*               </div>*/
/*               */
/*             </div>*/
/*           </div><div class="button-group text-center">*/
/*                 <button class="btn btn btn-outline-danger" type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></button>*/
/*                 <button class="btn btn btn-outline-danger" type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                 <button class="btn btn btn-outline-danger" type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*               </div>*/
/*         </div><hr>*/
/*         {% endfor %}*/
/*       </div>*/
/*       <nav aria-label="Page navigation example">*/
/*   <ul class="pagination">*/
/*     {% if preButton %}*/
/*         <li class="page-item">{{ preButton }}</li>*/
/*     {% endif %}*/
/* */
/* */
/* {% if onButton %}*/
/*   <li class="page-item">{{ onButton }}</li>*/
/* {% endif %}*/
/* <li class="page-item disabled"></li>*/
/*       {% if hrefPre %}*/
/*       {% for hrefPre in hrefPre %}*/
/*           <li class="page-item">  {{hrefPre}}  </li>*/
/*               {% endfor %}*/
/*       {% endif %}*/
/*       <li class="page-item disabled"></li>*/
/*     <li class="page-item disabled">*/
/*     {% if active %}*/
/*       <a class='page-link'>{{ active }}</a>*/
/*     {% endif %}*/
/*   </li>*/
/*     <li class="page-item disabled"></li>*/
/*       {% if hrefNext %}*/
/*           {% for hrefNext in hrefNext %}*/
/*           <li class="page-item">    {{hrefNext}}  </li>*/
/*           {% endfor %}*/
/*       {% endif %}*/
/*       <li class="page-item disabled"></li>*/
/* {% if lastButton %}*/
/*     <li class="page-item">{{ lastButton }}</li>*/
/* {% endif %}*/
/*       {% if nextButton %}*/
/*           <li class="page-item">{{ nextButton }}</li>*/
/*       {% endif %}*/
/*   </ul>*/
/* </nav>*/
/* */
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
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
/*     if (polyarnost == "all") {*/
/* */
/*     }else{*/
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
/* 	var category_id = $('#content select[name=\'category_id\']').prop('value');*/
/* */
/* 	if (category_id > 0) {*/
/* 		url += '&category_id=' + encodeURIComponent(category_id);*/
/* 	}*/
/* */
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
/*   var polyarnost = $('#content select[name=\'polyarnost\']').prop('value');*/
/* */
/* */
/*   if (polyarnost == "all") {*/
/* */
/*   }else{*/
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
/* 	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');*/
/* */
/* 	if (sub_category) {*/
/* 		url += '&sub_category=true';*/
/* 	}*/
/* */
/* 	var filter_description = $('#content input[name=\'description\']:checked').prop('value');*/
/* */
/* 	if (filter_description) {*/
/* 		url += '&description=true';*/
/* 	}*/
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
/* {{ footer }}*/
/* */

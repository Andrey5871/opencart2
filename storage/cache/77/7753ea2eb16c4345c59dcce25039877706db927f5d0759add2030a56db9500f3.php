<?php

/* bootstrap4_basic/template/common/home.twig */
class __TwigTemplate_d46931653c25e91757f3e074331e0d4a0b9ec0c036737d662437caf13edba711 extends Twig_Template
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
<div id=\"common-home\" class=\"container\">

  <div class=\"wrap\">
  <div class=\"container py-1\">
  <div class=\"row\">";
        // line 16
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 20
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 21
            echo "    ";
        } else {
            // line 22
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 23
            echo "    ";
        }
        // line 24
        echo "


    <div id=\"content\" class=\"";
        // line 27
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">




    ";
        // line 32
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "



    
    ";
        // line 37
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "




     

    </div>


    ";
        // line 47
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
</div>
</div>


";
        // line 53
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 53,  85 => 47,  72 => 37,  64 => 32,  56 => 27,  51 => 24,  48 => 23,  45 => 22,  42 => 21,  39 => 20,  36 => 19,  33 => 18,  31 => 17,  27 => 16,  19 => 11,);
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
/* <div id="common-home" class="container">*/
/* */
/*   <div class="wrap">*/
/*   <div class="container py-1">*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* */
/* */
/* */
/*     <div id="content" class="{{ class }}">*/
/* */
/* */
/* */
/* */
/*     {{ content_top }}*/
/* */
/* */
/* */
/*     */
/*     {{ content_bottom }}*/
/* */
/* */
/* */
/* */
/*      */
/* */
/*     </div>*/
/* */
/* */
/*     {{ column_right }}</div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
/* */
/* {{ footer }}*/
/* */

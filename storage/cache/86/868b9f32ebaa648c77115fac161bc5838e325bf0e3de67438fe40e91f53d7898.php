<?php

/* bootstrap4_basic/template/extension/module/category.twig */
class __TwigTemplate_56d442edccdbfe4431184d997733a74e277b3a00f00c0ffe832a0fe40ab5e87e extends Twig_Template
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
        echo "<div class=\"list-group\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "  ";
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 14
                echo "  <button class=\"btn list-group-item active\" data-toggle=\"collapse\" href=\"#collapseExample2\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseExample2\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</button>
  <div class=\"collapse\" id=\"collapseExample2\">
  <div class=\"card\">
    ";
                // line 17
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 18
                    echo "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 19
                        echo "    ";
                        if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                            // line 20
                            echo "    <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item active\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
    ";
                        } else {
                            // line 22
                            echo "    <a href=\"";
                            echo $this->getAttribute($context["child"], "href", array());
                            echo "\" class=\"list-group-item\">&nbsp;&nbsp;&nbsp;- ";
                            echo $this->getAttribute($context["child"], "name", array());
                            echo "</a>
    ";
                        }
                        // line 24
                        echo "    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "    ";
                }
                // line 26
                echo "  </div>
</div>

  ";
            } else {
                // line 29
                echo " <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"list-group-item\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a>
  ";
            }
            // line 31
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 32,  85 => 31,  77 => 29,  71 => 26,  68 => 25,  62 => 24,  54 => 22,  46 => 20,  43 => 19,  38 => 18,  36 => 17,  29 => 14,  26 => 13,  22 => 12,  19 => 11,);
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
/* <div class="list-group">*/
/*   {% for category in categories %}*/
/*   {% if category.category_id == category_id %}*/
/*   <button class="btn list-group-item active" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">{{ category.name }}</button>*/
/*   <div class="collapse" id="collapseExample2">*/
/*   <div class="card">*/
/*     {% if category.children %}*/
/*     {% for child in category.children %}*/
/*     {% if child.category_id == child_id %}*/
/*     <a href="{{ child.href }}" class="list-group-item active">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*     {% else %}*/
/*     <a href="{{ child.href }}" class="list-group-item">&nbsp;&nbsp;&nbsp;- {{ child.name }}</a>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/*   {% else %} <a href="{{ category.href }}" class="list-group-item">{{ category.name }}</a>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* */

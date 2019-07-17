<?php

/* bootstrap4_basic/template/common/search.twig */
class __TwigTemplate_c942029bd2419f56a7e96785f47c998fc76f20154e30d9497df34afb4b8f9867 extends Twig_Template
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
        echo "<div id=\"search\" class=\"input-group input-group-lg\">
  <input type=\"text\" name=\"search\" value=\"";
        // line 12
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" />
  <span class=\"input-group-append\">
    <button type=\"button\" class=\"btn btn-light border\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
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
/* <div id="search" class="input-group input-group-lg">*/
/*   <input type="text" name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control" />*/
/*   <span class="input-group-append">*/
/*     <button type="button" class="btn btn-light border"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/

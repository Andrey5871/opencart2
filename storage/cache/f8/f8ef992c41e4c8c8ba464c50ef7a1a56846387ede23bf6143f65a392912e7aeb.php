<?php

/* bootstrap4_basic/template/common/menu.twig */
class __TwigTemplate_fbedd4adf36ffe069444ee71ebee9e9731eb83943dd863cc4c1375f3ee0692b5 extends Twig_Template
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
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "

<div class=\"container\">

  <nav id=\"menu\" class=\"navbar navbar-dark bg-dark text-dark navbar-expand-sm \">
    <div class=\"row\">
      <div class=\"col mr-3\">
        <div id=\"logo\">";
        // line 18
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            echo "<a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-fluid\" /></a>";
        } else {
            // line 19
            echo "          <a href=\"/index.php?route=common/home\"><img src=\"/image/logo.png\" alt=\"\"></a>
          ";
        }
        // line 20
        echo "</div>
      </div>
    </div>
    <a class=\"navbar-brand d-xs-block d-sm-none\" href=\"#\"><span id=\"category\"></span></a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\" aria-controls=\"navbar-ex1-collapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"navbar-nav\" style=\"margin-right: auto\">
        <li class=\"nav-item\"><a href=\"/\" class=\"nav-link\">Главная</a></li>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 31
            echo "          <li class=\"nav-item\"><a href=\"";
            echo $this->getAttribute($context["information"], "href", array());
            echo "\" class=\"nav-link\">";
            echo $this->getAttribute($context["information"], "title", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </ul>
      <div class=\"inst\">
        <a href=\"https://www.instagram.com/akb_avtomega/\" target=\"_blank\" style=\"color:#fff\"><i class=\"fa fa-instagram fa-3x\" aria-hidden=\"true\"></i></a>
      </div>

    </div>
  </nav>
</div>
<div class=\"pt-1\">

</div>
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 33,  61 => 31,  57 => 30,  45 => 20,  41 => 19,  29 => 18,  19 => 11,);
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
/* {{menu}}*/
/* */
/* <div class="container">*/
/* */
/*   <nav id="menu" class="navbar navbar-dark bg-dark text-dark navbar-expand-sm ">*/
/*     <div class="row">*/
/*       <div class="col mr-3">*/
/*         <div id="logo">{% if logo %}<a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-fluid" /></a>{% else %}*/
/*           <a href="/index.php?route=common/home"><img src="/image/logo.png" alt=""></a>*/
/*           {% endif %}</div>*/
/*       </div>*/
/*     </div>*/
/*     <a class="navbar-brand d-xs-block d-sm-none" href="#"><span id="category"></span></a>*/
/*     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-controls="navbar-ex1-collapse" aria-expanded="false" aria-label="Toggle navigation">*/
/*       <span class="navbar-toggler-icon"></span>*/
/*     </button>*/
/*     <div class="collapse navbar-collapse navbar-ex1-collapse">*/
/*       <ul class="navbar-nav" style="margin-right: auto">*/
/*         <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>*/
/*         {% for information in informations %}*/
/*           <li class="nav-item"><a href="{{ information.href }}" class="nav-link">{{ information.title }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*       <div class="inst">*/
/*         <a href="https://www.instagram.com/akb_avtomega/" target="_blank" style="color:#fff"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>*/
/*       </div>*/
/* */
/*     </div>*/
/*   </nav>*/
/* </div>*/
/* <div class="pt-1">*/
/* */
/* </div>*/
/* */

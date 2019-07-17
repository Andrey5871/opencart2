<?php

/* bootstrap4_basic/template/common/header.twig */
class __TwigTemplate_a4c549dac10c487501f34d0456d20cf54946fbabe716d1c0556c53861fc5e97e extends Twig_Template
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
        echo "<!doctype html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 13
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 14
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 16
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 22
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 23
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 24
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 25
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 27
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 28
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 30
        echo "
<!--<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\" integrity=\"sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4\" crossorigin=\"anonymous\">-->
<link href=\"catalog/view/theme/bootstrap4_basic/stylesheet/bootstrap-opencart-v4.1.1.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\" integrity=\"sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\" integrity=\"sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm\" crossorigin=\"anonymous\"></script>
<link href=\"https://fonts.googleapis.com/css?family=Roboto\" rel=\"stylesheet\">

<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />

<link href=\"catalog/view/theme/bootstrap4_basic/stylesheet/stylesheet.css?v=125\" rel=\"stylesheet\">

<link href=\"catalog/view/theme/bootstrap4_basic/stylesheet/slick.css\" rel=\"stylesheet\">


";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 46
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 49
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "<script src=\"catalog/view/theme/bootstrap4_basic/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 53
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 56
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</head>
<body>
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\" id=\"top\">
    <div class=\"container\">";
        // line 61
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    ";
        // line 62
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
    <ul id=\"top-links\" class=\"nav float-right\">
        <li class=\"nav-item\"><a href=\"";
        // line 64
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\" class=\"nav-link\"><i class=\"fa fa-phone\"></i> <span class=\"d-none d-md-none d-lg-inline-block\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 65
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\" class=\"nav-link\"><i class=\"fa fa-heart\"></i> <span class=\"d-none d-md-none d-lg-inline-block\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
        <li class=\"nav-item\"><a href=\"";
        // line 66
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\" class=\"nav-link\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"d-none d-md-none d-lg-inline-block\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
      </ul>
      <ul id=\"top-links\" class=\"nav float-right\">
        <li class=\"nav-item dropdown\"><a href=\"";
        // line 69
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-user\"></i> <span class=\"d-none d-md-none d-lg-inline-block\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span></a>
          <div class=\"dropdown-menu\">
            ";
        // line 71
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 72
            echo "            <a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\" class=\"dropdown-item\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a>
            <a href=\"";
            // line 73
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\" class=\"dropdown-item\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a>
            <a href=\"";
            // line 74
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\" class=\"dropdown-item\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a>
            <a href=\"";
            // line 75
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\" class=\"dropdown-item\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a>
            <a href=\"";
            // line 76
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\" class=\"dropdown-item\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a>
            ";
        } else {
            // line 78
            echo "            <a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\" class=\"dropdown-item\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a>
            <a href=\"";
            // line 79
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\" class=\"dropdown-item\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a>
            ";
        }
        // line 81
        echo "          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
";
        // line 87
        echo (isset($context["products2"]) ? $context["products2"] : null);
        echo "
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-7\">";
        // line 91
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-md-3\"></div>
      <div class=\"col-sm-2\">";
        // line 93
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
    </div>
  </div>
</header>

";
        // line 98
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 98,  263 => 93,  258 => 91,  251 => 87,  243 => 81,  236 => 79,  229 => 78,  222 => 76,  216 => 75,  210 => 74,  204 => 73,  197 => 72,  195 => 71,  186 => 69,  176 => 66,  168 => 65,  162 => 64,  157 => 62,  153 => 61,  148 => 58,  140 => 56,  136 => 55,  125 => 53,  121 => 52,  118 => 51,  109 => 49,  105 => 48,  92 => 46,  88 => 45,  71 => 30,  65 => 28,  63 => 27,  57 => 25,  55 => 24,  51 => 23,  47 => 22,  36 => 16,  29 => 14,  23 => 13,  19 => 11,);
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
/* <!doctype html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* */
/* <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->*/
/* <link href="catalog/view/theme/bootstrap4_basic/stylesheet/bootstrap-opencart-v4.1.1.min.css" rel="stylesheet" type="text/css" />*/
/* <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>*/
/* <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>*/
/* <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">*/
/* */
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* */
/* <link href="catalog/view/theme/bootstrap4_basic/stylesheet/stylesheet.css?v=125" rel="stylesheet">*/
/* */
/* <link href="catalog/view/theme/bootstrap4_basic/stylesheet/slick.css" rel="stylesheet">*/
/* */
/* */
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/theme/bootstrap4_basic/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <nav class="navbar navbar-expand-lg navbar-light bg-light" id="top">*/
/*     <div class="container">{{ currency }}*/
/*     {{ language }}*/
/*     <ul id="top-links" class="nav float-right">*/
/*         <li class="nav-item"><a href="{{ contact }}" class="nav-link"><i class="fa fa-phone"></i> <span class="d-none d-md-none d-lg-inline-block">{{ telephone }}</span></a></li>*/
/*         <li class="nav-item"><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}" class="nav-link"><i class="fa fa-heart"></i> <span class="d-none d-md-none d-lg-inline-block">{{ text_wishlist }}</span></a></li>*/
/*         <li class="nav-item"><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}" class="nav-link"><i class="fa fa-shopping-cart"></i> <span class="d-none d-md-none d-lg-inline-block">{{ text_shopping_cart }}</span></a></li>*/
/*       </ul>*/
/*       <ul id="top-links" class="nav float-right">*/
/*         <li class="nav-item dropdown"><a href="{{ account }}" title="{{ text_account }}" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <span class="d-none d-md-none d-lg-inline-block">{{ text_account }}</span></a>*/
/*           <div class="dropdown-menu">*/
/*             {% if logged %}*/
/*             <a href="{{ account }}" class="dropdown-item">{{ text_account }}</a>*/
/*             <a href="{{ order }}" class="dropdown-item">{{ text_order }}</a>*/
/*             <a href="{{ transaction }}" class="dropdown-item">{{ text_transaction }}</a>*/
/*             <a href="{{ download }}" class="dropdown-item">{{ text_download }}</a>*/
/*             <a href="{{ logout }}" class="dropdown-item">{{ text_logout }}</a>*/
/*             {% else %}*/
/*             <a href="{{ register }}" class="dropdown-item">{{ text_register }}</a>*/
/*             <a href="{{ login }}" class="dropdown-item">{{ text_login }}</a>*/
/*             {% endif %}*/
/*           </div>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* {{products2}}*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-7">{{ search }}</div>*/
/*       <div class="col-md-3"></div>*/
/*       <div class="col-sm-2">{{ cart }}</div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
/* {{ menu }}*/
/* */

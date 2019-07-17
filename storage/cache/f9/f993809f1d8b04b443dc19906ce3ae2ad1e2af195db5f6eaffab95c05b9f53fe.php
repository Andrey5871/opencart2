<?php

/* bootstrap4_basic/template/mail/register.twig */
class __TwigTemplate_d2836a4ada29c86c51a10c672efca8cf40b4c123115a3eb0dcf2398d1ef4cd1a extends Twig_Template
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
        echo (isset($context["text_welcome"]) ? $context["text_welcome"] : null);
        echo "

";
        // line 13
        if ( !(isset($context["approval"]) ? $context["approval"] : null)) {
            // line 14
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "

";
            // line 16
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "

";
            // line 18
            echo (isset($context["text_service"]) ? $context["text_service"] : null);
            echo "

";
            // line 20
            echo (isset($context["text_thanks"]) ? $context["text_thanks"] : null);
            echo "
";
            // line 21
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "
";
        } else {
            // line 23
            echo (isset($context["text_approval"]) ? $context["text_approval"] : null);
            echo "

";
            // line 25
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "

";
            // line 27
            echo (isset($context["text_thanks"]) ? $context["text_thanks"] : null);
            echo "
";
            // line 28
            echo (isset($context["store"]) ? $context["store"] : null);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/mail/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 28,  60 => 27,  55 => 25,  50 => 23,  45 => 21,  41 => 20,  36 => 18,  31 => 16,  26 => 14,  24 => 13,  19 => 11,);
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
/* {{ text_welcome }}*/
/* */
/* {% if not approval %}*/
/* {{ text_login }}*/
/* */
/* {{ login }}*/
/* */
/* {{ text_service }}*/
/* */
/* {{ text_thanks }}*/
/* {{ store }}*/
/* {% else %}*/
/* {{ text_approval }}*/
/* */
/* {{ login }}*/
/* */
/* {{ text_thanks }}*/
/* {{ store }}*/
/* {% endif %}*/

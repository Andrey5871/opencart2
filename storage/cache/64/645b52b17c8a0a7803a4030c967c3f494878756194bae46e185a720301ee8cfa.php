<?php

/* bootstrap4_basic/template/mail/register_alert.twig */
class __TwigTemplate_72e91a3502bc3e19acd009716bcc2bee6a19c2605a7e0a3647a3f7b165d59c91 extends Twig_Template
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
        echo (isset($context["text_signup"]) ? $context["text_signup"] : null);
        echo "

";
        // line 13
        echo (isset($context["text_firstname"]) ? $context["text_firstname"] : null);
        echo " ";
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "
";
        // line 14
        echo (isset($context["text_lastname"]) ? $context["text_lastname"] : null);
        echo " ";
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "
";
        // line 15
        if ((isset($context["customer_group"]) ? $context["customer_group"] : null)) {
            // line 16
            echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
            echo " ";
            echo (isset($context["customer_group"]) ? $context["customer_group"] : null);
            echo "
";
        }
        // line 18
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo " ";
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "
";
        // line 19
        echo (isset($context["text_telephone"]) ? $context["text_telephone"] : null);
        echo " ";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/mail/register_alert.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  45 => 18,  38 => 16,  36 => 15,  30 => 14,  24 => 13,  19 => 11,);
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
/* {{ text_signup }}*/
/* */
/* {{ text_firstname }} {{ firstname }}*/
/* {{ text_lastname }} {{ lastname }}*/
/* {% if customer_group %}*/
/* {{ text_customer_group }} {{ customer_group }}*/
/* {% endif %}*/
/* {{ text_email }} {{ email }}*/
/* {{ text_telephone }} {{ telephone }}*/

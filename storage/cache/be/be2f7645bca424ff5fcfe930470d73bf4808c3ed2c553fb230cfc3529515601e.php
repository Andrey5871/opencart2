<?php

/* bootstrap4_basic/template/common/footer.twig */
class __TwigTemplate_463963ec4ffdd5a76f87c9123ee162f4d064e0dfc4f2b60aa3a7044a4b5a8fce extends Twig_Template
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
        echo "<footer class=\"bg-dark mt-4 p-4 text-light\">
  <div class=\"container\">

    <div class=\"row text-center\">
      ";
        // line 15
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 16
            echo "
         ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 18
                echo "         <div class=\"col-md-4\">
          <a href=\"";
                // line 19
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a>
          </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "          <div class=\"col-md-4\">
          <a href=\"";
            // line 23
            echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
            echo "\">Карта сайта</a>
        </div>

      ";
        }
        // line 27
        echo "
    </div>
    <div class=\"row\">
        <div class=\"col-12\"><hr> </div>
        <div class=\"col-md-9\"><div class=\"text-left\"><a href=\"https://www.instagram.com/akb_avtomega/\"><i class=\"fa fa-instagram fa-3x\" aria-hidden=\"true\"></i></a></div></div>
            <div class=\"col-md-3 pb-5\">
              <div style=\"display:block\">
                <a href=\"http://stgconsult.ru\" target=\"_blank\">
                <div class=\"row\" style=\"width:125px\">
                  <div class=\"col-6\" style=\"border-right:solid 2px #fff; padding-right:45px\">
                      <img src=\"catalog/view/theme/bootstrap4_basic/img/stgWhite.svg\" style=\"width:40px;\" alt=\"Создание и продвижение\">
                  </div>
                  <div class=\"col-6\" style=\"padding:0px; padding-left:5px\">
                    <div style=\"display:block; font-weight:lighter; font-size:15px\">
                        <span id=\"stgType\"></span>
                    </div>
                  </div>
                </div>
             </a>
              </div>

         </div>
        </div>
    </div>
\t<!-- <div class=\"call_back\">  -->
  <!-- <a class=\"wjcallback-link\" href=\"#\">Отправить сообщение</a> -->
  <!-- </div> -->
</footer>
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 56
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "<script src=\"catalog/view/theme/bootstrap4_basic/javascript/slick.min.js\" type=\"text/javascript\"></script>
<script>
  \$(function(){
            \$('.slick-vertical').slick({
                vertical: true,
                verticalSwiping: true,
                slidesToShow: 2,
                autoplay: true,
prevArrow: '<img src=\"catalog/view/theme/bootstrap4_basic/img/up.svg\">',
nextArrow: '<img src=\"catalog/view/theme/bootstrap4_basic/img/down.svg\">'
            });
        });
</script>
<script type=\"text/javascript\" src=\"catalog/view/theme/bootstrap4_basic/javascript/typed.js\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
  \$(\"#stgType\").typed({
  strings: [\"Разработка\", \"Продвижение\"],
  typeSpeed: 70,
  backDelay: 1500,
  startDelay: 2500,
  loop: true,
  loopCount: 100,
  contentType: 'html',
  });
});

</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'FKhm4QWDNF';var d=document;var w=window;function l(){
  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
  s.src = '//code.jivosite.com/script/widget/'+widget_id
    ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
  else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

</body></html>
";
    }

    public function getTemplateName()
    {
        return "bootstrap4_basic/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 58,  92 => 56,  88 => 55,  58 => 27,  51 => 23,  48 => 22,  37 => 19,  34 => 18,  30 => 17,  27 => 16,  25 => 15,  19 => 11,);
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
/* <footer class="bg-dark mt-4 p-4 text-light">*/
/*   <div class="container">*/
/* */
/*     <div class="row text-center">*/
/*       {% if informations %}*/
/* */
/*          {% for information in informations %}*/
/*          <div class="col-md-4">*/
/*           <a href="{{ information.href }}">{{ information.title }}</a>*/
/*           </div>*/
/*           {% endfor %}*/
/*           <div class="col-md-4">*/
/*           <a href="{{sitemap}}">Карта сайта</a>*/
/*         </div>*/
/* */
/*       {% endif %}*/
/* */
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-12"><hr> </div>*/
/*         <div class="col-md-9"><div class="text-left"><a href="https://www.instagram.com/akb_avtomega/"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></div></div>*/
/*             <div class="col-md-3 pb-5">*/
/*               <div style="display:block">*/
/*                 <a href="http://stgconsult.ru" target="_blank">*/
/*                 <div class="row" style="width:125px">*/
/*                   <div class="col-6" style="border-right:solid 2px #fff; padding-right:45px">*/
/*                       <img src="catalog/view/theme/bootstrap4_basic/img/stgWhite.svg" style="width:40px;" alt="Создание и продвижение">*/
/*                   </div>*/
/*                   <div class="col-6" style="padding:0px; padding-left:5px">*/
/*                     <div style="display:block; font-weight:lighter; font-size:15px">*/
/*                         <span id="stgType"></span>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*              </a>*/
/*               </div>*/
/* */
/*          </div>*/
/*         </div>*/
/*     </div>*/
/* 	<!-- <div class="call_back">  -->*/
/*   <!-- <a class="wjcallback-link" href="#">Отправить сообщение</a> -->*/
/*   <!-- </div> -->*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/theme/bootstrap4_basic/javascript/slick.min.js" type="text/javascript"></script>*/
/* <script>*/
/*   $(function(){*/
/*             $('.slick-vertical').slick({*/
/*                 vertical: true,*/
/*                 verticalSwiping: true,*/
/*                 slidesToShow: 2,*/
/*                 autoplay: true,*/
/* prevArrow: '<img src="catalog/view/theme/bootstrap4_basic/img/up.svg">',*/
/* nextArrow: '<img src="catalog/view/theme/bootstrap4_basic/img/down.svg">'*/
/*             });*/
/*         });*/
/* </script>*/
/* <script type="text/javascript" src="catalog/view/theme/bootstrap4_basic/javascript/typed.js"></script>*/
/* <script type="text/javascript">*/
/* $(document).ready(function(){*/
/*   $("#stgType").typed({*/
/*   strings: ["Разработка", "Продвижение"],*/
/*   typeSpeed: 70,*/
/*   backDelay: 1500,*/
/*   startDelay: 2500,*/
/*   loop: true,*/
/*   loopCount: 100,*/
/*   contentType: 'html',*/
/*   });*/
/* });*/
/* */
/* </script>*/
/* <!-- BEGIN JIVOSITE CODE {literal} -->*/
/* <script type='text/javascript'>*/
/* (function(){ var widget_id = 'FKhm4QWDNF';var d=document;var w=window;function l(){*/
/*   var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;*/
/*   s.src = '//code.jivosite.com/script/widget/'+widget_id*/
/*     ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}*/
/*   if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}*/
/*   else{w.addEventListener('load',l,false);}}})();*/
/* </script>*/
/* <!-- {/literal} END JIVOSITE CODE -->*/
/* */
/* </body></html>*/
/* */

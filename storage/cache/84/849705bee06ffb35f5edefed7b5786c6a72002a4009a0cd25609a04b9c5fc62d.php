<?php

/* catalog/import.twig */
class __TwigTemplate_0374804c9cc0e12fd32830bc889752fd712d8d76d35abf389fb27e317b2086e5 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
    <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
      <div class=\"row\">
";
        // line 15
        echo (isset($context["result"]) ? $context["result"] : null);
        echo "
        <!-- RESULTVIEWUPLOADBEGIN -->
        <div class=\"resultViewXML\">
          ";
        // line 18
        if ((isset($context["successUpdate"]) ? $context["successUpdate"] : null)) {
            // line 19
            echo "          <div class=\"alert alert-success\" role=\"alert\">
              ";
            // line 20
            echo (isset($context["successUpdate"]) ? $context["successUpdate"] : null);
            echo "
            </div>
          ";
        }
        // line 23
        if ((isset($context["actionXML"]) ? $context["actionXML"] : null)) {
            // line 24
            echo "<div class=\"alert alert-danger\" role=\"alert\">
    ";
            // line 25
            echo (isset($context["actionXML"]) ? $context["actionXML"] : null);
            echo "
  </div>
";
        }
        // line 28
        echo "

          ";
        // line 30
        if ((isset($context["successFile"]) ? $context["successFile"] : null)) {
            // line 31
            echo "          <div class=\"alert alert-success\" role=\"alert\">
              ";
            // line 32
            echo (isset($context["successFile"]) ? $context["successFile"] : null);
            echo "
            </div>
          ";
        }
        // line 35
        echo "
        ";
        // line 36
        if ((isset($context["actionType"]) ? $context["actionType"] : null)) {
            // line 37
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 38
            echo (isset($context["actionType"]) ? $context["actionType"] : null);
            echo "
          </div>
        ";
        }
        // line 41
        echo "
        ";
        // line 42
        if ((isset($context["actionDownload"]) ? $context["actionDownload"] : null)) {
            // line 43
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 44
            echo (isset($context["actionDownload"]) ? $context["actionDownload"] : null);
            echo "
          </div>
        ";
        }
        // line 47
        echo "        </div>
        <!-- RESULTVIEWUPLOADEND -->
        <div class=\"resultBefore\" style=\"display:none; width: 100%; position: absolute; height: 100%; z-index: 99; background: #fff; opacity: 0.6; text-align: center;\">

        </div>
        <div class=\"resultAction\">

        </div>
        <div class=\"col-md-6\">
                <form action=\"";
        // line 56
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" id=\"formUpload\" method=\"post\" enctype=\"multipart/form-data\">
                  <div class=\"form-group\">
                      <h4 style=\"padding-bottom:15px\">";
        // line 58
        echo (isset($context["title_form"]) ? $context["title_form"] : null);
        echo "</h4>
                    <input type=\"file\" name=\"fileProduct\" id=\"exampleInputFile\" required>
                    <p class=\"help-block\">";
        // line 60
        echo (isset($context["type_file"]) ? $context["type_file"] : null);
        echo "</p>
                  </div>
                  <input type=\"submit\" class=\"btn btn-default\" value=\"Загрузить\">
                </form>
                      <button type=\"button\" class=\"btn btn-default updateFilter\" style=\"margin-top:10px\" name=\"button\">Обновить фильтр</button>

        </div>


      </div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        \$(\".updateFilter\").click(function(){
          \$.ajax({
            url: \"/admin/index.php?route=catalog/import/viewImport&user_token=";
        // line 75
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "\",
            type: \"POST\",
            data: {updateFilter: \"updateFilter\"},
            beforeSend: function(){
              \$(\".resultBefore\").html(\"<h3>Обновляются фильтры</h3><img src='/image/before.gif' />\").show();
            },
            success: function(data){
              \$(\".resultBefore\").hide();
                  var beginStr = data.indexOf(\"<!-- RESULTVIEWUPLOADBEGIN -->\");
                  var endStr = data.indexOf(\"<!-- RESULTVIEWUPLOADEND -->\");
                  var result = data.substring(beginStr, endStr);
                \$(\".resultAction\").html(result);
            }
          });
        });

            \$('#formUpload').on('submit', function(e){
              e.preventDefault();
              \$.ajax({
                url: \"/admin/index.php?route=catalog/import/viewImport&user_token=";
        // line 94
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "\",
                type: \"POST\",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function(){
                  \$(\".resultBefore\").html(\"<h3>Загрузка и обработка файла, подождите...</h3><img src='/image/before.gif' />\").show();
                },
                success: function(data){
                console.log(data);
                  \$(\".resultBefore\").hide();
                      var beginStr = data.indexOf(\"<!-- RESULTVIEWUPLOADBEGIN -->\");
                      var endStr = data.indexOf(\"<!-- RESULTVIEWUPLOADEND -->\");
                      var result = data.substring(beginStr, endStr);
                    \$(\".resultAction\").html(result);
                }
              });
            });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "catalog/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 94,  164 => 75,  146 => 60,  141 => 58,  136 => 56,  125 => 47,  119 => 44,  116 => 43,  114 => 42,  111 => 41,  105 => 38,  102 => 37,  100 => 36,  97 => 35,  91 => 32,  88 => 31,  86 => 30,  82 => 28,  76 => 25,  73 => 24,  71 => 23,  65 => 20,  62 => 19,  60 => 18,  54 => 15,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">*/
/*       <div class="row">*/
/* {{result}}*/
/*         <!-- RESULTVIEWUPLOADBEGIN -->*/
/*         <div class="resultViewXML">*/
/*           {% if successUpdate %}*/
/*           <div class="alert alert-success" role="alert">*/
/*               {{successUpdate}}*/
/*             </div>*/
/*           {% endif %}*/
/* {% if actionXML %}*/
/* <div class="alert alert-danger" role="alert">*/
/*     {{actionXML}}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* */
/*           {% if successFile %}*/
/*           <div class="alert alert-success" role="alert">*/
/*               {{successFile}}*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*         {% if actionType %}*/
/*         <div class="alert alert-danger" role="alert">*/
/*             {{actionType}}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if actionDownload %}*/
/*         <div class="alert alert-danger" role="alert">*/
/*             {{actionDownload}}*/
/*           </div>*/
/*         {% endif %}*/
/*         </div>*/
/*         <!-- RESULTVIEWUPLOADEND -->*/
/*         <div class="resultBefore" style="display:none; width: 100%; position: absolute; height: 100%; z-index: 99; background: #fff; opacity: 0.6; text-align: center;">*/
/* */
/*         </div>*/
/*         <div class="resultAction">*/
/* */
/*         </div>*/
/*         <div class="col-md-6">*/
/*                 <form action="{{action}}" id="formUpload" method="post" enctype="multipart/form-data">*/
/*                   <div class="form-group">*/
/*                       <h4 style="padding-bottom:15px">{{title_form}}</h4>*/
/*                     <input type="file" name="fileProduct" id="exampleInputFile" required>*/
/*                     <p class="help-block">{{type_file}}</p>*/
/*                   </div>*/
/*                   <input type="submit" class="btn btn-default" value="Загрузить">*/
/*                 </form>*/
/*                       <button type="button" class="btn btn-default updateFilter" style="margin-top:10px" name="button">Обновить фильтр</button>*/
/* */
/*         </div>*/
/* */
/* */
/*       </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function(){*/
/*         $(".updateFilter").click(function(){*/
/*           $.ajax({*/
/*             url: "/admin/index.php?route=catalog/import/viewImport&user_token={{token}}",*/
/*             type: "POST",*/
/*             data: {updateFilter: "updateFilter"},*/
/*             beforeSend: function(){*/
/*               $(".resultBefore").html("<h3>Обновляются фильтры</h3><img src='/image/before.gif' />").show();*/
/*             },*/
/*             success: function(data){*/
/*               $(".resultBefore").hide();*/
/*                   var beginStr = data.indexOf("<!-- RESULTVIEWUPLOADBEGIN -->");*/
/*                   var endStr = data.indexOf("<!-- RESULTVIEWUPLOADEND -->");*/
/*                   var result = data.substring(beginStr, endStr);*/
/*                 $(".resultAction").html(result);*/
/*             }*/
/*           });*/
/*         });*/
/* */
/*             $('#formUpload').on('submit', function(e){*/
/*               e.preventDefault();*/
/*               $.ajax({*/
/*                 url: "/admin/index.php?route=catalog/import/viewImport&user_token={{token}}",*/
/*                 type: "POST",*/
/*                 data: new FormData(this),*/
/*                 contentType: false,*/
/*                 cache: false,*/
/*                 processData: false,*/
/*                 beforeSend: function(){*/
/*                   $(".resultBefore").html("<h3>Загрузка и обработка файла, подождите...</h3><img src='/image/before.gif' />").show();*/
/*                 },*/
/*                 success: function(data){*/
/*                 console.log(data);*/
/*                   $(".resultBefore").hide();*/
/*                       var beginStr = data.indexOf("<!-- RESULTVIEWUPLOADBEGIN -->");*/
/*                       var endStr = data.indexOf("<!-- RESULTVIEWUPLOADEND -->");*/
/*                       var result = data.substring(beginStr, endStr);*/
/*                     $(".resultAction").html(result);*/
/*                 }*/
/*               });*/
/*             });*/
/*     });*/
/* </script>*/
/* */

<?php

/* BigPandaDevMainBundle:Default:standard.html.twig */
class __TwigTemplate_8aade201f77851ad7deb3e2f572c8d4adb07ff8408244a90fd0dc712508381e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:base.html.twig", "BigPandaDevMainBundle:Default:standard.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b56c6153e4c330c51fe3d51058a959e1d795d3e856008082dbba27b3aa4c8371 = $this->env->getExtension("native_profiler");
        $__internal_b56c6153e4c330c51fe3d51058a959e1d795d3e856008082dbba27b3aa4c8371->enter($__internal_b56c6153e4c330c51fe3d51058a959e1d795d3e856008082dbba27b3aa4c8371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Default:standard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56c6153e4c330c51fe3d51058a959e1d795d3e856008082dbba27b3aa4c8371->leave($__internal_b56c6153e4c330c51fe3d51058a959e1d795d3e856008082dbba27b3aa4c8371_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_037d3bbb6ff7881b36c8bf6606cbf74ecc55de7dc9280858914e82421453e17f = $this->env->getExtension("native_profiler");
        $__internal_037d3bbb6ff7881b36c8bf6606cbf74ecc55de7dc9280858914e82421453e17f->enter($__internal_037d3bbb6ff7881b36c8bf6606cbf74ecc55de7dc9280858914e82421453e17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mainstyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_037d3bbb6ff7881b36c8bf6606cbf74ecc55de7dc9280858914e82421453e17f->leave($__internal_037d3bbb6ff7881b36c8bf6606cbf74ecc55de7dc9280858914e82421453e17f_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_496f7d3d43aefb910bec7c7af0a1416e26da08c87013461b367e6cbee906b56a = $this->env->getExtension("native_profiler");
        $__internal_496f7d3d43aefb910bec7c7af0a1416e26da08c87013461b367e6cbee906b56a->enter($__internal_496f7d3d43aefb910bec7c7af0a1416e26da08c87013461b367e6cbee906b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script>global={locale:'";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "'};</script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/base.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
    <script>
    \$(document).ready(function(){
        \$('[data-toggle=\"tooltip\"]').tooltip({
            placement : 'top'
        });
        bigPandaDP.initLocale();
        bigPandaDP.initDatePicker();
    });
    </script>
";
        
        $__internal_496f7d3d43aefb910bec7c7af0a1416e26da08c87013461b367e6cbee906b56a->leave($__internal_496f7d3d43aefb910bec7c7af0a1416e26da08c87013461b367e6cbee906b56a_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7aff7fe2ac5d62b3ec318edeb2db05b1c6825effd7843d2bc249863cd2d3ab1 = $this->env->getExtension("native_profiler");
        $__internal_c7aff7fe2ac5d62b3ec318edeb2db05b1c6825effd7843d2bc249863cd2d3ab1->enter($__internal_c7aff7fe2ac5d62b3ec318edeb2db05b1c6825effd7843d2bc249863cd2d3ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    ";
        $this->loadTemplate("BigPandaDevMainBundle:Common:main_nav.html.twig", "BigPandaDevMainBundle:Default:standard.html.twig", 25)->display($context);
        // line 26
        echo "    
    <div class=\"container\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(((array_key_exists("panel_title", $context)) ? (_twig_default_filter((isset($context["panel_title"]) ? $context["panel_title"] : $this->getContext($context, "panel_title")), "")) : (""))), "html", null, true);
        echo "</span>
                <a role=\"button\"
                   class=\"pull-right visible-xs-inline-block\" 
                   data-toggle=\"collapse\" 
                   data-target=\"#nav2\"><i class=\"fa fa-bars\"></i></a>
            </div>
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-sm-3\">
                        <div class=\"navbar-collapse collapse\" id=\"nav2\">
                            <ul class=\"nav nav-stacked\">
                                <li><a href=\"#\"><i class=\"fa fa-home fa-fw\"></i> Home</a></li>
                                <li class=\"active\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("_orders");
        echo "\"><i class=\"fa fa-home fa-fw\"></i> My orders</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-home fa-fw\"></i> In progress</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-home fa-fw\"></i> Finished</a></li>
                            </ul>
                            <hr class=\"visible-xs-block\"/>
                        </div>
                    </div>
                    <div class=\"col-sm-9\">
                        ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "                    </div>
                    <div class=\"clearfix visible-lg\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c7aff7fe2ac5d62b3ec318edeb2db05b1c6825effd7843d2bc249863cd2d3ab1->leave($__internal_c7aff7fe2ac5d62b3ec318edeb2db05b1c6825effd7843d2bc249863cd2d3ab1_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_642bccebb0a22a086d82828883b8b40590f70f0f48a28b17da6b88848e69bd86 = $this->env->getExtension("native_profiler");
        $__internal_642bccebb0a22a086d82828883b8b40590f70f0f48a28b17da6b88848e69bd86->enter($__internal_642bccebb0a22a086d82828883b8b40590f70f0f48a28b17da6b88848e69bd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_642bccebb0a22a086d82828883b8b40590f70f0f48a28b17da6b88848e69bd86->leave($__internal_642bccebb0a22a086d82828883b8b40590f70f0f48a28b17da6b88848e69bd86_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Default:standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 50,  133 => 51,  131 => 50,  120 => 42,  105 => 30,  99 => 26,  96 => 25,  90 => 24,  72 => 12,  68 => 11,  64 => 10,  59 => 9,  53 => 8,  43 => 5,  37 => 4,  11 => 2,);
    }
}
/* {# BigPandaDevMainBundle:Default:standard.html.twig #}*/
/* {% extends 'BigPandaDevMainBundle:Default:base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/mainstyle.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script>global={locale:'{{ app.request.locale }}'};</script>*/
/*     <script src="{{ asset('js/base.js') }}"></script>*/
/*     <script src="{{ asset('js/datepicker.js') }}"></script>*/
/*     <script src="{{ asset('js/custom.js') }}"></script>*/
/*     <script>*/
/*     $(document).ready(function(){*/
/*         $('[data-toggle="tooltip"]').tooltip({*/
/*             placement : 'top'*/
/*         });*/
/*         bigPandaDP.initLocale();*/
/*         bigPandaDP.initDatePicker();*/
/*     });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'BigPandaDevMainBundle:Common:main_nav.html.twig' %}*/
/*     */
/*     <div class="container">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <span>{{ panel_title|default('')|trans }}</span>*/
/*                 <a role="button"*/
/*                    class="pull-right visible-xs-inline-block" */
/*                    data-toggle="collapse" */
/*                    data-target="#nav2"><i class="fa fa-bars"></i></a>*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3">*/
/*                         <div class="navbar-collapse collapse" id="nav2">*/
/*                             <ul class="nav nav-stacked">*/
/*                                 <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>*/
/*                                 <li class="active"><a href="{{ path('_orders') }}"><i class="fa fa-home fa-fw"></i> My orders</a></li>*/
/*                                 <li><a href="#"><i class="fa fa-home fa-fw"></i> In progress</a></li>*/
/*                                 <li><a href="#"><i class="fa fa-home fa-fw"></i> Finished</a></li>*/
/*                             </ul>*/
/*                             <hr class="visible-xs-block"/>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-sm-9">*/
/*                         {% block content %}{% endblock %}*/
/*                     </div>*/
/*                     <div class="clearfix visible-lg"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {#*/
/*     {{ parent() }}*/
/*     <script>*/
/*         //Stack menu when collapsed*/
/*         $('#bs-example-navbar-collapse-1').on('show.bs.collapse', function() {*/
/*             $('.nav-pills').addClass('nav-stacked');*/
/*         });*/
/* */
/*         //Unstack menu when not collapsed*/
/*         $('#bs-example-navbar-collapse-1').on('hide.bs.collapse', function() {*/
/*             $('.nav-pills').removeClass('nav-stacked');*/
/*         });*/
/*     </script>*/
/* #}*/
/* */

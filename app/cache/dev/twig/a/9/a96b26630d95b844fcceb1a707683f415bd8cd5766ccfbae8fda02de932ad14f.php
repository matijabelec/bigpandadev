<?php

/* BigPandaDevMainBundle:Default:layout_form.html.twig */
class __TwigTemplate_e1b39bb523f2b78a961858656cb83606775424df24c194fc47cc34271d33e233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:base_bs.html.twig", "BigPandaDevMainBundle:Default:layout_form.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'layout' => array($this, 'block_layout'),
            'head' => array($this, 'block_head'),
            'panel_title' => array($this, 'block_panel_title'),
            'content' => array($this, 'block_content'),
            'dialogs' => array($this, 'block_dialogs'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Default:base_bs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f3cb020b83adbe4a8cba3dbbeb9ad67f54ce33b5f8451b01b0d3307669f2c0f = $this->env->getExtension("native_profiler");
        $__internal_0f3cb020b83adbe4a8cba3dbbeb9ad67f54ce33b5f8451b01b0d3307669f2c0f->enter($__internal_0f3cb020b83adbe4a8cba3dbbeb9ad67f54ce33b5f8451b01b0d3307669f2c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Default:layout_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3cb020b83adbe4a8cba3dbbeb9ad67f54ce33b5f8451b01b0d3307669f2c0f->leave($__internal_0f3cb020b83adbe4a8cba3dbbeb9ad67f54ce33b5f8451b01b0d3307669f2c0f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bd78e6ef6c0d39eab990598890b2b5e83857ddc034c13f46d0355fada5f51363 = $this->env->getExtension("native_profiler");
        $__internal_bd78e6ef6c0d39eab990598890b2b5e83857ddc034c13f46d0355fada5f51363->enter($__internal_bd78e6ef6c0d39eab990598890b2b5e83857ddc034c13f46d0355fada5f51363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mainstyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_bd78e6ef6c0d39eab990598890b2b5e83857ddc034c13f46d0355fada5f51363->leave($__internal_bd78e6ef6c0d39eab990598890b2b5e83857ddc034c13f46d0355fada5f51363_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52f8c0624f43af603758f9a8ff779b6c9c13f7a784f37d62a93cbf49e9d50b47 = $this->env->getExtension("native_profiler");
        $__internal_52f8c0624f43af603758f9a8ff779b6c9c13f7a784f37d62a93cbf49e9d50b47->enter($__internal_52f8c0624f43af603758f9a8ff779b6c9c13f7a784f37d62a93cbf49e9d50b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_52f8c0624f43af603758f9a8ff779b6c9c13f7a784f37d62a93cbf49e9d50b47->leave($__internal_52f8c0624f43af603758f9a8ff779b6c9c13f7a784f37d62a93cbf49e9d50b47_prof);

    }

    // line 24
    public function block_layout($context, array $blocks = array())
    {
        $__internal_6faf699407668c82a5a0371b23fe0aef31aa88dd37b961da104eb9b36ca43af6 = $this->env->getExtension("native_profiler");
        $__internal_6faf699407668c82a5a0371b23fe0aef31aa88dd37b961da104eb9b36ca43af6->enter($__internal_6faf699407668c82a5a0371b23fe0aef31aa88dd37b961da104eb9b36ca43af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 25
        echo "    ";
        $this->loadTemplate("BigPandaDevMainBundle:Navs:main.html.twig", "BigPandaDevMainBundle:Default:layout_form.html.twig", 25)->display($context);
        // line 26
        echo "    
    <div class=\"container\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                ";
        // line 30
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "            </div>
            <div class=\"panel-body\">
                <div class=\"row\">
                    ";
        // line 51
        echo "                    <div class=\"col-sm-12\">
                        ";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "                    </div>
                    <div class=\"clearfix visible-lg\"></div>
                </div>
            </div>
        </div>
    </div>
    
    ";
        // line 60
        $this->displayBlock('dialogs', $context, $blocks);
        
        $__internal_6faf699407668c82a5a0371b23fe0aef31aa88dd37b961da104eb9b36ca43af6->leave($__internal_6faf699407668c82a5a0371b23fe0aef31aa88dd37b961da104eb9b36ca43af6_prof);

    }

    // line 30
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8bb6bf07d600ba9393c09d40502b141da8411855a18b887e4f66b4533827f01 = $this->env->getExtension("native_profiler");
        $__internal_f8bb6bf07d600ba9393c09d40502b141da8411855a18b887e4f66b4533827f01->enter($__internal_f8bb6bf07d600ba9393c09d40502b141da8411855a18b887e4f66b4533827f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 31
        echo "                    <span>";
        $this->displayBlock('panel_title', $context, $blocks);
        echo "</span>
                    <a role=\"button\"
                       class=\"pull-right visible-xs-inline-block\" 
                       data-toggle=\"collapse\" 
                       data-target=\"#nav2\"><i class=\"fa fa-bars\"></i></a>
                ";
        
        $__internal_f8bb6bf07d600ba9393c09d40502b141da8411855a18b887e4f66b4533827f01->leave($__internal_f8bb6bf07d600ba9393c09d40502b141da8411855a18b887e4f66b4533827f01_prof);

    }

    public function block_panel_title($context, array $blocks = array())
    {
        $__internal_cd7b37a02a57ab919fbab0120ee21df0221128342e975fce9f39faee9f0c5854 = $this->env->getExtension("native_profiler");
        $__internal_cd7b37a02a57ab919fbab0120ee21df0221128342e975fce9f39faee9f0c5854->enter($__internal_cd7b37a02a57ab919fbab0120ee21df0221128342e975fce9f39faee9f0c5854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_title"));

        
        $__internal_cd7b37a02a57ab919fbab0120ee21df0221128342e975fce9f39faee9f0c5854->leave($__internal_cd7b37a02a57ab919fbab0120ee21df0221128342e975fce9f39faee9f0c5854_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_7bfeee3da83aecf0f236d12186529444b7570a8472104280bf1049f17e772161 = $this->env->getExtension("native_profiler");
        $__internal_7bfeee3da83aecf0f236d12186529444b7570a8472104280bf1049f17e772161->enter($__internal_7bfeee3da83aecf0f236d12186529444b7570a8472104280bf1049f17e772161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7bfeee3da83aecf0f236d12186529444b7570a8472104280bf1049f17e772161->leave($__internal_7bfeee3da83aecf0f236d12186529444b7570a8472104280bf1049f17e772161_prof);

    }

    // line 60
    public function block_dialogs($context, array $blocks = array())
    {
        $__internal_73b3b2a9bce1cf9bfb8e88a9937d314089a93c139c5db4f041f3dcfe15bceb37 = $this->env->getExtension("native_profiler");
        $__internal_73b3b2a9bce1cf9bfb8e88a9937d314089a93c139c5db4f041f3dcfe15bceb37->enter($__internal_73b3b2a9bce1cf9bfb8e88a9937d314089a93c139c5db4f041f3dcfe15bceb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dialogs"));

        
        $__internal_73b3b2a9bce1cf9bfb8e88a9937d314089a93c139c5db4f041f3dcfe15bceb37->leave($__internal_73b3b2a9bce1cf9bfb8e88a9937d314089a93c139c5db4f041f3dcfe15bceb37_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Default:layout_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 60,  166 => 52,  142 => 31,  136 => 30,  129 => 60,  120 => 53,  118 => 52,  115 => 51,  110 => 37,  108 => 30,  102 => 26,  99 => 25,  93 => 24,  75 => 12,  71 => 11,  67 => 10,  62 => 9,  56 => 8,  46 => 5,  40 => 4,  11 => 2,);
    }
}
/* {# BigPandaDevMainBundle:Default:standard.html.twig #}*/
/* {% extends 'BigPandaDevMainBundle:Default:base_bs.html.twig' %}*/
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
/* {% block layout %}*/
/*     {% include 'BigPandaDevMainBundle:Navs:main.html.twig' %}*/
/*     */
/*     <div class="container">*/
/*         <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 {% block head %}*/
/*                     <span>{% block panel_title %}{% endblock %}</span>*/
/*                     <a role="button"*/
/*                        class="pull-right visible-xs-inline-block" */
/*                        data-toggle="collapse" */
/*                        data-target="#nav2"><i class="fa fa-bars"></i></a>*/
/*                 {% endblock %}*/
/*             </div>*/
/*             <div class="panel-body">*/
/*                 <div class="row">*/
/*                     {#<div class="col-sm-3">*/
/*                         <div class="navbar-collapse collapse" id="nav2">*/
/*                             <ul class="nav nav-stacked">*/
/*                                 <li><a href="#"><i class="fa fa-home fa-fw"></i> Home</a></li>*/
/*                                 <li class="active"><a href="{{ path('_orders') }}"><i class="fa fa-home fa-fw"></i> My orders</a></li>*/
/*                                 <li><a href="#"><i class="fa fa-home fa-fw"></i> In progress</a></li>*/
/*                                 <li><a href="#"><i class="fa fa-home fa-fw"></i> Finished</a></li>*/
/*                             </ul>*/
/*                             <hr class="visible-xs-block"/>*/
/*                         </div>*/
/*                     </div>#}*/
/*                     <div class="col-sm-12">*/
/*                         {% block content %}{% endblock %}*/
/*                     </div>*/
/*                     <div class="clearfix visible-lg"></div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     {% block dialogs %}{% endblock %}*/
/* {% endblock %}*/
/* */

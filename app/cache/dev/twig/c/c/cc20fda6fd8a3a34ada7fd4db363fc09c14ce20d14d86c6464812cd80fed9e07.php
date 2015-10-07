<?php

/* BigPandaDevMainBundle:Default:layout_table.html.twig */
class __TwigTemplate_3718fbf5591d116cd2b8388169d7343ab41e28407837973997e5830661e5d316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:base_bs.html.twig", "BigPandaDevMainBundle:Default:layout_table.html.twig", 2);
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
        $__internal_adb594671728ae484812670d3935f16e0021bbaef729a3df6dae2072deb9c59f = $this->env->getExtension("native_profiler");
        $__internal_adb594671728ae484812670d3935f16e0021bbaef729a3df6dae2072deb9c59f->enter($__internal_adb594671728ae484812670d3935f16e0021bbaef729a3df6dae2072deb9c59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Default:layout_table.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adb594671728ae484812670d3935f16e0021bbaef729a3df6dae2072deb9c59f->leave($__internal_adb594671728ae484812670d3935f16e0021bbaef729a3df6dae2072deb9c59f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4df3c716830cd319ab58ce4021cf0458dad8cf139b95033567007e5d64b49aab = $this->env->getExtension("native_profiler");
        $__internal_4df3c716830cd319ab58ce4021cf0458dad8cf139b95033567007e5d64b49aab->enter($__internal_4df3c716830cd319ab58ce4021cf0458dad8cf139b95033567007e5d64b49aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mainstyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_4df3c716830cd319ab58ce4021cf0458dad8cf139b95033567007e5d64b49aab->leave($__internal_4df3c716830cd319ab58ce4021cf0458dad8cf139b95033567007e5d64b49aab_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17249952e611645fb2077207382f7c0f6b55847882555a5993d740ab479c7de6 = $this->env->getExtension("native_profiler");
        $__internal_17249952e611645fb2077207382f7c0f6b55847882555a5993d740ab479c7de6->enter($__internal_17249952e611645fb2077207382f7c0f6b55847882555a5993d740ab479c7de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_17249952e611645fb2077207382f7c0f6b55847882555a5993d740ab479c7de6->leave($__internal_17249952e611645fb2077207382f7c0f6b55847882555a5993d740ab479c7de6_prof);

    }

    // line 24
    public function block_layout($context, array $blocks = array())
    {
        $__internal_8c1b047a2de17d591f650ea18ac205d02242b34bbd75a493beb5d66f384ce25b = $this->env->getExtension("native_profiler");
        $__internal_8c1b047a2de17d591f650ea18ac205d02242b34bbd75a493beb5d66f384ce25b->enter($__internal_8c1b047a2de17d591f650ea18ac205d02242b34bbd75a493beb5d66f384ce25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 25
        echo "    ";
        $this->loadTemplate("BigPandaDevMainBundle:Navs:main.html.twig", "BigPandaDevMainBundle:Default:layout_table.html.twig", 25)->display($context);
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
        
        $__internal_8c1b047a2de17d591f650ea18ac205d02242b34bbd75a493beb5d66f384ce25b->leave($__internal_8c1b047a2de17d591f650ea18ac205d02242b34bbd75a493beb5d66f384ce25b_prof);

    }

    // line 30
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb9053266db61db1ebaa524ab416c4edb7b5813fad166cfd0b033df78c554fcd = $this->env->getExtension("native_profiler");
        $__internal_bb9053266db61db1ebaa524ab416c4edb7b5813fad166cfd0b033df78c554fcd->enter($__internal_bb9053266db61db1ebaa524ab416c4edb7b5813fad166cfd0b033df78c554fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 31
        echo "                    <span>";
        $this->displayBlock('panel_title', $context, $blocks);
        echo "</span>
                    <a role=\"button\"
                       class=\"pull-right visible-xs-inline-block\" 
                       data-toggle=\"collapse\" 
                       data-target=\"#nav2\"><i class=\"fa fa-bars\"></i></a>
                ";
        
        $__internal_bb9053266db61db1ebaa524ab416c4edb7b5813fad166cfd0b033df78c554fcd->leave($__internal_bb9053266db61db1ebaa524ab416c4edb7b5813fad166cfd0b033df78c554fcd_prof);

    }

    public function block_panel_title($context, array $blocks = array())
    {
        $__internal_6ae2a1d07dbbb19fa78b02903ccc7a0c3f52348f3fc6f64aa70efa15c7cc51ae = $this->env->getExtension("native_profiler");
        $__internal_6ae2a1d07dbbb19fa78b02903ccc7a0c3f52348f3fc6f64aa70efa15c7cc51ae->enter($__internal_6ae2a1d07dbbb19fa78b02903ccc7a0c3f52348f3fc6f64aa70efa15c7cc51ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel_title"));

        
        $__internal_6ae2a1d07dbbb19fa78b02903ccc7a0c3f52348f3fc6f64aa70efa15c7cc51ae->leave($__internal_6ae2a1d07dbbb19fa78b02903ccc7a0c3f52348f3fc6f64aa70efa15c7cc51ae_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ff6855595aee820ef859b3e56e4d432ba4270a3d69dc613dd8e63612b39511f = $this->env->getExtension("native_profiler");
        $__internal_6ff6855595aee820ef859b3e56e4d432ba4270a3d69dc613dd8e63612b39511f->enter($__internal_6ff6855595aee820ef859b3e56e4d432ba4270a3d69dc613dd8e63612b39511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6ff6855595aee820ef859b3e56e4d432ba4270a3d69dc613dd8e63612b39511f->leave($__internal_6ff6855595aee820ef859b3e56e4d432ba4270a3d69dc613dd8e63612b39511f_prof);

    }

    // line 60
    public function block_dialogs($context, array $blocks = array())
    {
        $__internal_2e1cca7136c7d8150f84c3e485afbf25d0e5f3f0f6c1bcdc4ca5d777a3f9b82b = $this->env->getExtension("native_profiler");
        $__internal_2e1cca7136c7d8150f84c3e485afbf25d0e5f3f0f6c1bcdc4ca5d777a3f9b82b->enter($__internal_2e1cca7136c7d8150f84c3e485afbf25d0e5f3f0f6c1bcdc4ca5d777a3f9b82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dialogs"));

        
        $__internal_2e1cca7136c7d8150f84c3e485afbf25d0e5f3f0f6c1bcdc4ca5d777a3f9b82b->leave($__internal_2e1cca7136c7d8150f84c3e485afbf25d0e5f3f0f6c1bcdc4ca5d777a3f9b82b_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Default:layout_table.html.twig";
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

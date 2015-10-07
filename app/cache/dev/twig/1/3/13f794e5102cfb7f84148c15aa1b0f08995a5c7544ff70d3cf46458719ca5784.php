<?php

/* BigPandaDevMainBundle:Default:homepage.html.twig */
class __TwigTemplate_3dfa12cb4e8ce21b336936cd28b5ac5ed0205614106e99e1454d3e224a6ad1d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:base_bs.html.twig", "BigPandaDevMainBundle:Default:homepage.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Default:base_bs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f79a23719f242783a38d547fcf198a173a581fed22b984fcbef7594ad183cfb = $this->env->getExtension("native_profiler");
        $__internal_7f79a23719f242783a38d547fcf198a173a581fed22b984fcbef7594ad183cfb->enter($__internal_7f79a23719f242783a38d547fcf198a173a581fed22b984fcbef7594ad183cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Default:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f79a23719f242783a38d547fcf198a173a581fed22b984fcbef7594ad183cfb->leave($__internal_7f79a23719f242783a38d547fcf198a173a581fed22b984fcbef7594ad183cfb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86ba76d22712b7ba5f711ac62e1b5e4ce24548abdac161c74d1f522b8ca9e7f1 = $this->env->getExtension("native_profiler");
        $__internal_86ba76d22712b7ba5f711ac62e1b5e4ce24548abdac161c74d1f522b8ca9e7f1->enter($__internal_86ba76d22712b7ba5f711ac62e1b5e4ce24548abdac161c74d1f522b8ca9e7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/mainstyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_86ba76d22712b7ba5f711ac62e1b5e4ce24548abdac161c74d1f522b8ca9e7f1->leave($__internal_86ba76d22712b7ba5f711ac62e1b5e4ce24548abdac161c74d1f522b8ca9e7f1_prof);

    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0835f3e0bd091829e3b6a87e5891d5527703dfe5c32048f9c1ec32a26032e254 = $this->env->getExtension("native_profiler");
        $__internal_0835f3e0bd091829e3b6a87e5891d5527703dfe5c32048f9c1ec32a26032e254->enter($__internal_0835f3e0bd091829e3b6a87e5891d5527703dfe5c32048f9c1ec32a26032e254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        echo "    <script>global={locale:'";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "'};</script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/base.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
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
        
        $__internal_0835f3e0bd091829e3b6a87e5891d5527703dfe5c32048f9c1ec32a26032e254->leave($__internal_0835f3e0bd091829e3b6a87e5891d5527703dfe5c32048f9c1ec32a26032e254_prof);

    }

    // line 23
    public function block_layout($context, array $blocks = array())
    {
        $__internal_04dfedcdf00cf36f7800240ab1ab605c580815158d44d2ffaca37fa2542bd9d2 = $this->env->getExtension("native_profiler");
        $__internal_04dfedcdf00cf36f7800240ab1ab605c580815158d44d2ffaca37fa2542bd9d2->enter($__internal_04dfedcdf00cf36f7800240ab1ab605c580815158d44d2ffaca37fa2542bd9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 24
        echo "    ";
        $this->loadTemplate("BigPandaDevMainBundle:Navs:main.html.twig", "BigPandaDevMainBundle:Default:homepage.html.twig", 24)->display($context);
        // line 25
        echo "
    <div class=\"container\" id=\"header\">
        <header class=\"jumbotron text-center\">
            <h1><span class=\"\">Big panda</span> ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("is here"), "html", null, true);
        echo "!</h1>
            <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order a solution to your problem today"), "html", null, true);
        echo "!</p>
            <a href=\"#how-to-order\" class=\"btn btn-info btn-lg\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Check more"), "html", null, true);
        echo " <i class=\"fa fa-home fa-arrow-down\"></i></a>
        </header>
    </div>

    <div class=\"container\" id=\"simple-description\">
        <div class=\"row text-center\">
            <div class=\"col-md-4\">
                <i class=\"fa fa-magic point-icon\"></i>
                <h2>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Easy"), "html", null, true);
        echo "</h2>
                <p>
                   ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("We can do all work for you"), "html", null, true);
        echo ".
                   ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("You set conditions, we accept it if they are acceptable"), "html", null, true);
        echo ".
                   ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("We can find compromise in between yours and ours wishes"), "html", null, true);
        echo ".
                </p>
            </div>
            <div class=\"col-md-4\">
                <i class=\"fa fa-user-secret point-icon\"></i>
                <h2>";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Discretely"), "html", null, true);
        echo "</h2>
                <p>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("All your orders are numbered and anonimous until you decide otherwise"), "html", null, true);
        echo ".</p>
            </div>
            <div class=\"col-md-4\">
                <i class=\"fa fa-lightbulb-o point-icon\"></i>

                <h2>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Innovative"), "html", null, true);
        echo "</h2>
                <p>
                    ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("A new way to solve your problem"), "html", null, true);
        echo "!
                </p>
            </div>
            <div class=\"clearfix visible-lg\"></div>
        </div>
    </div>



    <div class=\"container\" id=\"how-to-order\">
        <div class=\"row text-center\">
            <div class=\"col-md-3 col-md-offset-3\">
                <i class=\"fa fa-magic point-icon\"></i>
                <h2>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order"), "html", null, true);
        echo "</h2>
                <p>";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tell us what you need"), "html", null, true);
        echo ".</p>
            </div>
            <div class=\"col-md-3\">
                <i class=\"fa fa-lightbulb-o point-icon\"></i>

                <h2>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Problem solved"), "html", null, true);
        echo "</h2>
                <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Collect your solution"), "html", null, true);
        echo "!</p>
            </div>
            <div class=\"clearfix visible-lg\"></div>
        </div>
    </div>

    <footer id=\"contact\" class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-10 col-lg-offset-1 text-center\">
                <hr class=\"small\">
                <p class=\"text-muted\">Copyright &copy; BigPanda 2015. Webdesign by <a href=\"#\">Matija Belec</a></p>
            </div>
        </div>
    </footer>
";
        
        $__internal_04dfedcdf00cf36f7800240ab1ab605c580815158d44d2ffaca37fa2542bd9d2->leave($__internal_04dfedcdf00cf36f7800240ab1ab605c580815158d44d2ffaca37fa2542bd9d2_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  188 => 74,  180 => 69,  176 => 68,  160 => 55,  155 => 53,  147 => 48,  143 => 47,  135 => 42,  131 => 41,  127 => 40,  122 => 38,  111 => 30,  107 => 29,  103 => 28,  98 => 25,  95 => 24,  89 => 23,  71 => 11,  67 => 10,  63 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
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
/* */
/*     <div class="container" id="header">*/
/*         <header class="jumbotron text-center">*/
/*             <h1><span class="">Big panda</span> {{ 'is here'|trans }}!</h1>*/
/*             <p>{{ 'Order a solution to your problem today'|trans }}!</p>*/
/*             <a href="#how-to-order" class="btn btn-info btn-lg">{{ 'Check more'|trans }} <i class="fa fa-home fa-arrow-down"></i></a>*/
/*         </header>*/
/*     </div>*/
/* */
/*     <div class="container" id="simple-description">*/
/*         <div class="row text-center">*/
/*             <div class="col-md-4">*/
/*                 <i class="fa fa-magic point-icon"></i>*/
/*                 <h2>{{ 'Easy'|trans }}</h2>*/
/*                 <p>*/
/*                    {{ 'We can do all work for you'|trans }}.*/
/*                    {{ 'You set conditions, we accept it if they are acceptable'|trans }}.*/
/*                    {{ 'We can find compromise in between yours and ours wishes'|trans }}.*/
/*                 </p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <i class="fa fa-user-secret point-icon"></i>*/
/*                 <h2>{{ 'Discretely'|trans }}</h2>*/
/*                 <p>{{ 'All your orders are numbered and anonimous until you decide otherwise'|trans }}.</p>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <i class="fa fa-lightbulb-o point-icon"></i>*/
/* */
/*                 <h2>{{ 'Innovative'|trans }}</h2>*/
/*                 <p>*/
/*                     {{ 'A new way to solve your problem'|trans }}!*/
/*                 </p>*/
/*             </div>*/
/*             <div class="clearfix visible-lg"></div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="container" id="how-to-order">*/
/*         <div class="row text-center">*/
/*             <div class="col-md-3 col-md-offset-3">*/
/*                 <i class="fa fa-magic point-icon"></i>*/
/*                 <h2>{{ 'Order'|trans }}</h2>*/
/*                 <p>{{ 'Tell us what you need'|trans }}.</p>*/
/*             </div>*/
/*             <div class="col-md-3">*/
/*                 <i class="fa fa-lightbulb-o point-icon"></i>*/
/* */
/*                 <h2>{{ 'Problem solved'|trans }}</h2>*/
/*                 <p>{{ 'Collect your solution'|trans }}!</p>*/
/*             </div>*/
/*             <div class="clearfix visible-lg"></div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <footer id="contact" class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-10 col-lg-offset-1 text-center">*/
/*                 <hr class="small">*/
/*                 <p class="text-muted">Copyright &copy; BigPanda 2015. Webdesign by <a href="#">Matija Belec</a></p>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* {% endblock %}*/
/* */

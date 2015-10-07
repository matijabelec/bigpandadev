<?php

/* BigPandaDevMainBundle:Navs:main.html.twig */
class __TwigTemplate_748e52c358cef8ca702dee1fdeb8e560a2d5344937af5c5f36c764274d285315 extends Twig_Template
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
        $__internal_987abf7ecb12e4e3d34e75fb16b99405460b17a2c2c86df1d281a0a0513ac972 = $this->env->getExtension("native_profiler");
        $__internal_987abf7ecb12e4e3d34e75fb16b99405460b17a2c2c86df1d281a0a0513ac972->enter($__internal_987abf7ecb12e4e3d34e75fb16b99405460b17a2c2c86df1d281a0a0513ac972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Navs:main.html.twig"));

        // line 1
        echo "<nav id=\"main-nav\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">BigPanda</a>
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#topnav\">
                <i class=\"fa fa-bars navicon\"></i>
            </button>    
        </div>
        <div class=\"navbar-collapse collapse\" id=\"topnav\">
            <ul class=\"nav navbar-nav navbar-left\">
";
        // line 12
        echo "                
                ";
        // line 13
        if ((twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 14
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_orders");
            echo "\"><i class=\"fa fa-lock navicon\"></i> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Orders"), "html", null, true);
            echo "</span></a></li>
                    <li><a href=\"#paynaments\"><i class=\"fa fa-cart-plus navicon\"></i> <span>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Payments"), "html", null, true);
            echo "</span></a></li>
                    <li><a href=\"#feedbacks\"><i class=\"fa fa-envelope navicon\"></i> <span>";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Feedbacks"), "html", null, true);
            echo "</span></a></li>
                ";
        }
        // line 18
        echo "                
                ";
        // line 19
        if ((twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_EMPLOYEE"))) {
            // line 20
            echo "                    <li><a href=\"#tasks\"><i class=\"fa fa-cog navicon\"></i> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tasks"), "html", null, true);
            echo "</span></a></li>
                ";
        }
        // line 22
        echo "                
                ";
        // line 23
        if ((twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_USER"))) {
            // line 24
            echo "                    <li><a href=\"#stats\"><i class=\"fa fa-line-chart navicon\"></i> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Statistics"), "html", null, true);
            echo "</span></a></li>
                ";
        }
        // line 26
        echo "                
                ";
        // line 27
        if ((twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 28
            echo "                    <li><a href=\"#admin\"><i class=\"fa fa-lock navicon\"></i> <span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin panel"), "html", null, true);
            echo "</span></a></li>
                ";
        }
        // line 30
        echo "                
";
        // line 32
        echo "                    <li><a href=\"#\"><i class=\"fa fa-question-circle navicon\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("About"), "html", null, true);
        echo "</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-envelope-o navicon\"></i> <span>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Contact"), "html", null, true);
        echo "</span></a></li>
";
        // line 35
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 37
        if (twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 38
            echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-male navicon\"></i> <span>(";
            // line 39
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ")</span> <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li class=\"dropdown-header\">";
            // line 41
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</li>
                            <li><a href=\"#\"><i class=\"fa fa-male\"></i> ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Profile"), "html", null, true);
            echo "</a></li>
                            <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
            echo "</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\"><i class=\"fa fa-cogs\"></i> ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Settings"), "html", null, true);
            echo "</a></li>
                        </ul>
                    </li>
                ";
        } else {
            // line 49
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_login");
            echo "\"><i class=\"fa fa-sign-in navicon\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a></li>
                ";
        }
        // line 51
        echo "                
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"fa fa-globe navicon\"></i> <span>";
        // line 53
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "html", null, true);
        echo "</span> <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        ";
        // line 55
        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) != "en")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_language_change", array("lang" => "en"));
            echo "\">EN</a></li>";
        }
        // line 56
        echo "                        ";
        if ((twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) != "hr")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_language_change", array("lang" => "hr"));
            echo "\">HR</a></li>";
        }
        // line 57
        echo "                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_987abf7ecb12e4e3d34e75fb16b99405460b17a2c2c86df1d281a0a0513ac972->leave($__internal_987abf7ecb12e4e3d34e75fb16b99405460b17a2c2c86df1d281a0a0513ac972_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Navs:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 57,  162 => 56,  156 => 55,  151 => 53,  147 => 51,  139 => 49,  132 => 45,  125 => 43,  121 => 42,  117 => 41,  112 => 39,  109 => 38,  107 => 37,  103 => 35,  99 => 33,  94 => 32,  91 => 30,  85 => 28,  83 => 27,  80 => 26,  74 => 24,  72 => 23,  69 => 22,  63 => 20,  61 => 19,  58 => 18,  53 => 16,  49 => 15,  42 => 14,  40 => 13,  37 => 12,  27 => 4,  22 => 1,);
    }
}
/* <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="navigation">*/
/*     <div class="container-fluid">*/
/*         <div class="navbar-header">*/
/*             <a class="navbar-brand" href="{{ path('_homepage') }}">BigPanda</a>*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topnav">*/
/*                 <i class="fa fa-bars navicon"></i>*/
/*             </button>    */
/*         </div>*/
/*         <div class="navbar-collapse collapse" id="topnav">*/
/*             <ul class="nav navbar-nav navbar-left">*/
/* {#                <li><a href="#home"><i class="fa fa-home navicon"></i> {{ 'Home'|trans }}</a></li>#}*/
/*                 */
/*                 {% if app.user and is_granted('ROLE_USER') %}*/
/*                     <li><a href="{{ path('_orders') }}"><i class="fa fa-lock navicon"></i> <span>{{ 'Orders'|trans }}</span></a></li>*/
/*                     <li><a href="#paynaments"><i class="fa fa-cart-plus navicon"></i> <span>{{ 'Payments'|trans }}</span></a></li>*/
/*                     <li><a href="#feedbacks"><i class="fa fa-envelope navicon"></i> <span>{{ 'Feedbacks'|trans }}</span></a></li>*/
/*                 {% endif %}*/
/*                 */
/*                 {% if app.user and is_granted('ROLE_EMPLOYEE') %}*/
/*                     <li><a href="#tasks"><i class="fa fa-cog navicon"></i> <span>{{ 'Tasks'|trans }}</span></a></li>*/
/*                 {% endif %}*/
/*                 */
/*                 {% if app.user and is_granted('ROLE_USER') %}*/
/*                     <li><a href="#stats"><i class="fa fa-line-chart navicon"></i> <span>{{ 'Statistics'|trans }}</span></a></li>*/
/*                 {% endif %}*/
/*                 */
/*                 {% if app.user and is_granted('ROLE_ADMIN') %}*/
/*                     <li><a href="#admin"><i class="fa fa-lock navicon"></i> <span>{{ 'Admin panel'|trans }}</span></a></li>*/
/*                 {% endif %}*/
/*                 */
/* {#                {% if not app.user %}#}*/
/*                     <li><a href="#"><i class="fa fa-question-circle navicon"></i> <span>{{ 'About'|trans }}</span></a></li>*/
/*                     <li><a href="#"><i class="fa fa-envelope-o navicon"></i> <span>{{ 'Contact'|trans }}</span></a></li>*/
/* {#                {% endif %}#}*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {% if app.user %}*/
/*                     <li class="dropdown">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-male navicon"></i> <span>({{ app.user.username }})</span> <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li class="dropdown-header">{{ app.user.username }}</li>*/
/*                             <li><a href="#"><i class="fa fa-male"></i> {{ 'Profile'|trans }}</a></li>*/
/*                             <li><a href="{{ path('_logout') }}"><i class="fa fa-sign-out"></i> {{ 'Logout'|trans }}</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#"><i class="fa fa-cogs"></i> {{ 'Settings'|trans }}</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% else %}*/
/*                     <li><a href="{{ path('_login') }}"><i class="fa fa-sign-in navicon"></i> {{ 'Login'|trans }}</a></li>*/
/*                 {% endif %}*/
/*                 */
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe navicon"></i> <span>{{ app.request.locale|upper }}</span> <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         {% if app.request.locale != 'en' %}<li><a href="{{ path('_language_change', {'lang':'en'}) }}">EN</a></li>{% endif %}*/
/*                         {% if app.request.locale != 'hr' %}<li><a href="{{ path('_language_change', {'lang':'hr'}) }}">HR</a></li>{% endif %}*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </nav>*/
/* */

<?php

/* BigPandaDevMainBundle:Auth:login.html.twig */
class __TwigTemplate_227218edb540098f86553d8b56b3a863b927b4d434303da291e71bbfb237a148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:auth.html.twig", "BigPandaDevMainBundle:Auth:login.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Default:auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c65f5497cab329f255d40a176013703f43855005a03fc998ea4507d2a2235a4 = $this->env->getExtension("native_profiler");
        $__internal_7c65f5497cab329f255d40a176013703f43855005a03fc998ea4507d2a2235a4->enter($__internal_7c65f5497cab329f255d40a176013703f43855005a03fc998ea4507d2a2235a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Auth:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c65f5497cab329f255d40a176013703f43855005a03fc998ea4507d2a2235a4->leave($__internal_7c65f5497cab329f255d40a176013703f43855005a03fc998ea4507d2a2235a4_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32d9f3cd122c51587c4a74efdafb12dfa3ee319f1c48f61bd0ad111efbbaab8d = $this->env->getExtension("native_profiler");
        $__internal_32d9f3cd122c51587c4a74efdafb12dfa3ee319f1c48f61bd0ad111efbbaab8d->enter($__internal_32d9f3cd122c51587c4a74efdafb12dfa3ee319f1c48f61bd0ad111efbbaab8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
";
        
        $__internal_32d9f3cd122c51587c4a74efdafb12dfa3ee319f1c48f61bd0ad111efbbaab8d->leave($__internal_32d9f3cd122c51587c4a74efdafb12dfa3ee319f1c48f61bd0ad111efbbaab8d_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_4046365a409e90fb147af057da859c38eef0a698594b1c47b1534c2595ec5d41 = $this->env->getExtension("native_profiler");
        $__internal_4046365a409e90fb147af057da859c38eef0a698594b1c47b1534c2595ec5d41->enter($__internal_4046365a409e90fb147af057da859c38eef0a698594b1c47b1534c2595ec5d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div class=\"container container-table\">
        <div class=\"row vertical-center-row\">
            <div class=\"text-center col-md-4 col-md-offset-4\">
                ";
        // line 12
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 13
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_template_get_attributes($this, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), twig_template_get_attributes($this, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 15
        echo "
                <form class=\"form-login\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("_login_check");
        echo "\" method=\"post\">
                    <h2 class=\"form-login-heading\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</h2>

                    <div class=\"form-group\">
                        <label for=\"username\" class=\"sr-only\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo ": </label>
                        <input type=\"text\" id=\"username\"  class=\"form-control\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo "\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required autofocus/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\" class=\"sr-only\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo ": </label>
                        <input type=\"password\" id=\"password\"  class=\"form-control\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\"name=\"_password\" required/>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-6\">
                            <a class=\"btn btn-lg btn-default btn-block\" href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\" role=\"button\">Back</a>
                        </div>

                        <div class=\"col-xs-6\">
                            <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login button"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_4046365a409e90fb147af057da859c38eef0a698594b1c47b1534c2595ec5d41->leave($__internal_4046365a409e90fb147af057da859c38eef0a698594b1c47b1534c2595ec5d41_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  108 => 31,  100 => 26,  96 => 25,  87 => 21,  83 => 20,  77 => 17,  73 => 16,  70 => 15,  64 => 13,  62 => 12,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# Login #}*/
/* {% extends 'BigPandaDevMainBundle:Default:auth.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('css/login.css') }}">*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="container container-table">*/
/*         <div class="row vertical-center-row">*/
/*             <div class="text-center col-md-4 col-md-offset-4">*/
/*                 {% if error %}*/
/*                 <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*                 {% endif %}*/
/* */
/*                 <form class="form-login" action="{{ path('_login_check') }}" method="post">*/
/*                     <h2 class="form-login-heading">{{ 'Login'|trans }}</h2>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="username" class="sr-only">{{ 'Username'|trans }}: </label>*/
/*                         <input type="text" id="username"  class="form-control" placeholder="{{ 'Username'|trans }}" name="_username" value="{{ last_username }}" required autofocus/>*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="password" class="sr-only">{{ 'Password'|trans }}: </label>*/
/*                         <input type="password" id="password"  class="form-control" placeholder="{{ 'Password'|trans }}"name="_password" required/>*/
/*                     </div>*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-xs-6">*/
/*                             <a class="btn btn-lg btn-default btn-block" href="{{ path('_homepage') }}" role="button">Back</a>*/
/*                         </div>*/
/* */
/*                         <div class="col-xs-6">*/
/*                             <button class="btn btn-lg btn-primary btn-block" type="submit">{{ 'Login button'|trans }}</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

<?php

/* BigPandaDevMainBundle:Default:base_bs.html.twig */
class __TwigTemplate_017203196cfab2f43f40e70a4555bbcdef6b8cfc7a353b543463ddc98743365e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d581a9ccc79c5814885b6febc29c9a2c0917c60498356d48dc83286ead6d5c0 = $this->env->getExtension("native_profiler");
        $__internal_8d581a9ccc79c5814885b6febc29c9a2c0917c60498356d48dc83286ead6d5c0->enter($__internal_8d581a9ccc79c5814885b6febc29c9a2c0917c60498356d48dc83286ead6d5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Default:base_bs.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        
        ";
        // line 8
        $this->displayBlock('metas', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('meta', $context, $blocks);
        // line 10
        echo "        
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <link rel=\"stylesheet\" href=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css\">
";
        // line 15
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("jquery-ui-1.11.4.custom/jquery-ui.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        
        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 21
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 25
        $this->displayBlock('layout', $context, $blocks);
        // line 26
        echo "        
        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
        
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_8d581a9ccc79c5814885b6febc29c9a2c0917c60498356d48dc83286ead6d5c0->leave($__internal_8d581a9ccc79c5814885b6febc29c9a2c0917c60498356d48dc83286ead6d5c0_prof);

    }

    // line 8
    public function block_metas($context, array $blocks = array())
    {
        $__internal_5b69a8e760aaabeb737a0bc8207513f2e0194d1f119aae10e54fd57783b2215c = $this->env->getExtension("native_profiler");
        $__internal_5b69a8e760aaabeb737a0bc8207513f2e0194d1f119aae10e54fd57783b2215c->enter($__internal_5b69a8e760aaabeb737a0bc8207513f2e0194d1f119aae10e54fd57783b2215c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_5b69a8e760aaabeb737a0bc8207513f2e0194d1f119aae10e54fd57783b2215c->leave($__internal_5b69a8e760aaabeb737a0bc8207513f2e0194d1f119aae10e54fd57783b2215c_prof);

    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
        $__internal_c8293888f3524a648a7dc512a834fb5f9c0053055d821e619b8f76d82ad0efe5 = $this->env->getExtension("native_profiler");
        $__internal_c8293888f3524a648a7dc512a834fb5f9c0053055d821e619b8f76d82ad0efe5->enter($__internal_c8293888f3524a648a7dc512a834fb5f9c0053055d821e619b8f76d82ad0efe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_c8293888f3524a648a7dc512a834fb5f9c0053055d821e619b8f76d82ad0efe5->leave($__internal_c8293888f3524a648a7dc512a834fb5f9c0053055d821e619b8f76d82ad0efe5_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c58ad083c25df99d870a4e4043393054f71f18128116b69ceabfe3f33cbe9a4 = $this->env->getExtension("native_profiler");
        $__internal_3c58ad083c25df99d870a4e4043393054f71f18128116b69ceabfe3f33cbe9a4->enter($__internal_3c58ad083c25df99d870a4e4043393054f71f18128116b69ceabfe3f33cbe9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BigPanda";
        
        $__internal_3c58ad083c25df99d870a4e4043393054f71f18128116b69ceabfe3f33cbe9a4->leave($__internal_3c58ad083c25df99d870a4e4043393054f71f18128116b69ceabfe3f33cbe9a4_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3967aa2b49a88d9854cecc0f5666c29b2401e253aa91f97fa992b85d356e56d5 = $this->env->getExtension("native_profiler");
        $__internal_3967aa2b49a88d9854cecc0f5666c29b2401e253aa91f97fa992b85d356e56d5->enter($__internal_3967aa2b49a88d9854cecc0f5666c29b2401e253aa91f97fa992b85d356e56d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3967aa2b49a88d9854cecc0f5666c29b2401e253aa91f97fa992b85d356e56d5->leave($__internal_3967aa2b49a88d9854cecc0f5666c29b2401e253aa91f97fa992b85d356e56d5_prof);

    }

    // line 20
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2e5eee6d916fe894f38e9166fba90c1df4748d17ee05eb863f9add93e6ca6aaf = $this->env->getExtension("native_profiler");
        $__internal_2e5eee6d916fe894f38e9166fba90c1df4748d17ee05eb863f9add93e6ca6aaf->enter($__internal_2e5eee6d916fe894f38e9166fba90c1df4748d17ee05eb863f9add93e6ca6aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_2e5eee6d916fe894f38e9166fba90c1df4748d17ee05eb863f9add93e6ca6aaf->leave($__internal_2e5eee6d916fe894f38e9166fba90c1df4748d17ee05eb863f9add93e6ca6aaf_prof);

    }

    // line 25
    public function block_layout($context, array $blocks = array())
    {
        $__internal_77327ac83ff2b25e680695add6d6a3683f08446841144f07a2c260baa4c9fe5c = $this->env->getExtension("native_profiler");
        $__internal_77327ac83ff2b25e680695add6d6a3683f08446841144f07a2c260baa4c9fe5c->enter($__internal_77327ac83ff2b25e680695add6d6a3683f08446841144f07a2c260baa4c9fe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_77327ac83ff2b25e680695add6d6a3683f08446841144f07a2c260baa4c9fe5c->leave($__internal_77327ac83ff2b25e680695add6d6a3683f08446841144f07a2c260baa4c9fe5c_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ae136c79cf89878e2a3c60878884d6d3ab03c026f094afb6e6131de1b67cb1c = $this->env->getExtension("native_profiler");
        $__internal_0ae136c79cf89878e2a3c60878884d6d3ab03c026f094afb6e6131de1b67cb1c->enter($__internal_0ae136c79cf89878e2a3c60878884d6d3ab03c026f094afb6e6131de1b67cb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ae136c79cf89878e2a3c60878884d6d3ab03c026f094afb6e6131de1b67cb1c->leave($__internal_0ae136c79cf89878e2a3c60878884d6d3ab03c026f094afb6e6131de1b67cb1c_prof);

    }

    // line 32
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_527a688c82d2d6bef4a8bffeaa53e7962b1677757a05ae79668b4ca483fae656 = $this->env->getExtension("native_profiler");
        $__internal_527a688c82d2d6bef4a8bffeaa53e7962b1677757a05ae79668b4ca483fae656->enter($__internal_527a688c82d2d6bef4a8bffeaa53e7962b1677757a05ae79668b4ca483fae656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_527a688c82d2d6bef4a8bffeaa53e7962b1677757a05ae79668b4ca483fae656->leave($__internal_527a688c82d2d6bef4a8bffeaa53e7962b1677757a05ae79668b4ca483fae656_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Default:base_bs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 32,  171 => 31,  160 => 25,  149 => 20,  138 => 19,  126 => 11,  115 => 9,  104 => 8,  95 => 33,  92 => 32,  90 => 31,  83 => 26,  81 => 25,  75 => 22,  72 => 21,  69 => 20,  67 => 19,  62 => 17,  58 => 16,  53 => 15,  47 => 11,  44 => 10,  41 => 9,  39 => 8,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         */
/*         {% block metas %}{% endblock %}*/
/*         {% block meta %}{% endblock %}*/
/*         */
/*         <title>{% block title %}BigPanda{% endblock %}</title>*/
/*         */
/*         <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">*/
/* {#        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">#}*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('jquery-ui-1.11.4.custom/jquery-ui.min.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">*/
/*         */
/*         {% block stylesheets %}{% endblock %}*/
/*         {% block stylesheet %}{% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block layout %}{% endblock %}*/
/*         */
/*         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>*/
/*         <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*         {% block javascript %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

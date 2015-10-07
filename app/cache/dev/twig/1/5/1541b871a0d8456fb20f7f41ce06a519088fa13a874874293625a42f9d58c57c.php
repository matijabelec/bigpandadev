<?php

/* BigPandaDevMainBundle:Default:base.html.twig */
class __TwigTemplate_502872e6db49997ae9dfda585725f41af1deea15590b2a93d31f9cfb9991837a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'layout' => array($this, 'block_layout'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80e61b514aa62e09f6cc9e78fa67225cd1e03ab8766577336577518425f0be15 = $this->env->getExtension("native_profiler");
        $__internal_80e61b514aa62e09f6cc9e78fa67225cd1e03ab8766577336577518425f0be15->enter($__internal_80e61b514aa62e09f6cc9e78fa67225cd1e03ab8766577336577518425f0be15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Default:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        
        ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 9
        echo "        
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('layout', $context, $blocks);
        // line 18
        echo "        
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_80e61b514aa62e09f6cc9e78fa67225cd1e03ab8766577336577518425f0be15->leave($__internal_80e61b514aa62e09f6cc9e78fa67225cd1e03ab8766577336577518425f0be15_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_e585ecea8af93ba85a0f1a3945565b2ec4206075b521b6f688a77e5e78586d0a = $this->env->getExtension("native_profiler");
        $__internal_e585ecea8af93ba85a0f1a3945565b2ec4206075b521b6f688a77e5e78586d0a->enter($__internal_e585ecea8af93ba85a0f1a3945565b2ec4206075b521b6f688a77e5e78586d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        
        $__internal_e585ecea8af93ba85a0f1a3945565b2ec4206075b521b6f688a77e5e78586d0a->leave($__internal_e585ecea8af93ba85a0f1a3945565b2ec4206075b521b6f688a77e5e78586d0a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e6f44e9a1582aeb28765c11e75731b3b362ec502245f7b001b89af1cb394d83 = $this->env->getExtension("native_profiler");
        $__internal_3e6f44e9a1582aeb28765c11e75731b3b362ec502245f7b001b89af1cb394d83->enter($__internal_3e6f44e9a1582aeb28765c11e75731b3b362ec502245f7b001b89af1cb394d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "BigPanda";
        
        $__internal_3e6f44e9a1582aeb28765c11e75731b3b362ec502245f7b001b89af1cb394d83->leave($__internal_3e6f44e9a1582aeb28765c11e75731b3b362ec502245f7b001b89af1cb394d83_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91cce12165f2f42b8d39758ddd1e818eeae39beef0c152f91e0e75a74c82d875 = $this->env->getExtension("native_profiler");
        $__internal_91cce12165f2f42b8d39758ddd1e818eeae39beef0c152f91e0e75a74c82d875->enter($__internal_91cce12165f2f42b8d39758ddd1e818eeae39beef0c152f91e0e75a74c82d875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_91cce12165f2f42b8d39758ddd1e818eeae39beef0c152f91e0e75a74c82d875->leave($__internal_91cce12165f2f42b8d39758ddd1e818eeae39beef0c152f91e0e75a74c82d875_prof);

    }

    // line 17
    public function block_layout($context, array $blocks = array())
    {
        $__internal_4a1237b995f21d71ed22d025c5aee4596177f2d517e06c2a5b353c174a86ced7 = $this->env->getExtension("native_profiler");
        $__internal_4a1237b995f21d71ed22d025c5aee4596177f2d517e06c2a5b353c174a86ced7->enter($__internal_4a1237b995f21d71ed22d025c5aee4596177f2d517e06c2a5b353c174a86ced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        
        $__internal_4a1237b995f21d71ed22d025c5aee4596177f2d517e06c2a5b353c174a86ced7->leave($__internal_4a1237b995f21d71ed22d025c5aee4596177f2d517e06c2a5b353c174a86ced7_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_753ae7fc86b599696a191b98f86c5a756ec313d994d1a2f6ffb299a07b2f9e83 = $this->env->getExtension("native_profiler");
        $__internal_753ae7fc86b599696a191b98f86c5a756ec313d994d1a2f6ffb299a07b2f9e83->enter($__internal_753ae7fc86b599696a191b98f86c5a756ec313d994d1a2f6ffb299a07b2f9e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_753ae7fc86b599696a191b98f86c5a756ec313d994d1a2f6ffb299a07b2f9e83->leave($__internal_753ae7fc86b599696a191b98f86c5a756ec313d994d1a2f6ffb299a07b2f9e83_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  107 => 17,  96 => 12,  84 => 10,  73 => 8,  64 => 20,  62 => 19,  59 => 18,  57 => 17,  51 => 14,  48 => 13,  46 => 12,  41 => 10,  38 => 9,  36 => 8,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         */
/*         {% block meta %}{% endblock %}*/
/*         */
/*         <title>{% block title %}BigPanda{% endblock %}</title>*/
/*         */
/*         {% block stylesheets %}{% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block layout %}{% endblock %}*/
/*         */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

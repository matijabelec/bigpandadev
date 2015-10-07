<?php

/* BigPandaDevMainBundle:Default:auth.html.twig */
class __TwigTemplate_6cd8dd1834a5ffe18c209dd5e999d2403fc4e4ba68feb8a27661b9c06bcb87ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:base_bs.html.twig", "BigPandaDevMainBundle:Default:auth.html.twig", 2);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'layout' => array($this, 'block_layout'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Default:base_bs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4eb4d2dffd2e57951e5eceed8eaaf1ad49dbfe866a4919fa4a305763af3c71ba = $this->env->getExtension("native_profiler");
        $__internal_4eb4d2dffd2e57951e5eceed8eaaf1ad49dbfe866a4919fa4a305763af3c71ba->enter($__internal_4eb4d2dffd2e57951e5eceed8eaaf1ad49dbfe866a4919fa4a305763af3c71ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Default:auth.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eb4d2dffd2e57951e5eceed8eaaf1ad49dbfe866a4919fa4a305763af3c71ba->leave($__internal_4eb4d2dffd2e57951e5eceed8eaaf1ad49dbfe866a4919fa4a305763af3c71ba_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b930b04b6d59d196fc897a7e9f19eae844726619c5d618d175c3d7b21a5edb9e = $this->env->getExtension("native_profiler");
        $__internal_b930b04b6d59d196fc897a7e9f19eae844726619c5d618d175c3d7b21a5edb9e->enter($__internal_b930b04b6d59d196fc897a7e9f19eae844726619c5d618d175c3d7b21a5edb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    <script>global={locale:'";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "'};</script>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/base.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
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
        
        $__internal_b930b04b6d59d196fc897a7e9f19eae844726619c5d618d175c3d7b21a5edb9e->leave($__internal_b930b04b6d59d196fc897a7e9f19eae844726619c5d618d175c3d7b21a5edb9e_prof);

    }

    // line 20
    public function block_layout($context, array $blocks = array())
    {
        $__internal_d78c2aa46d5e1440915a90fcb09bcc97208518d43f7449af912370bd70972b42 = $this->env->getExtension("native_profiler");
        $__internal_d78c2aa46d5e1440915a90fcb09bcc97208518d43f7449af912370bd70972b42->enter($__internal_d78c2aa46d5e1440915a90fcb09bcc97208518d43f7449af912370bd70972b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout"));

        // line 21
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d78c2aa46d5e1440915a90fcb09bcc97208518d43f7449af912370bd70972b42->leave($__internal_d78c2aa46d5e1440915a90fcb09bcc97208518d43f7449af912370bd70972b42_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_e480039b0c01080fe2f7f4fe2b71ae419f424b8bc6ecfc9a3656d9bb607688c1 = $this->env->getExtension("native_profiler");
        $__internal_e480039b0c01080fe2f7f4fe2b71ae419f424b8bc6ecfc9a3656d9bb607688c1->enter($__internal_e480039b0c01080fe2f7f4fe2b71ae419f424b8bc6ecfc9a3656d9bb607688c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e480039b0c01080fe2f7f4fe2b71ae419f424b8bc6ecfc9a3656d9bb607688c1->leave($__internal_e480039b0c01080fe2f7f4fe2b71ae419f424b8bc6ecfc9a3656d9bb607688c1_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Default:auth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  73 => 20,  55 => 8,  51 => 7,  47 => 6,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'BigPandaDevMainBundle:Default:base_bs.html.twig' %}*/
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
/*     {% block content %}{% endblock %}*/
/* {% endblock %}*/
/* */

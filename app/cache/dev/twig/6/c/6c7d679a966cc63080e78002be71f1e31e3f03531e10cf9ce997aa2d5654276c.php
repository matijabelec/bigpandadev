<?php

/* BigPandaDevMainBundle:Form:fields_bs.html.twig */
class __TwigTemplate_dfbded259ed1f0df995e54447b69150d8455633117121c8037f7bc47f931b863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'datePicker_widget' => array($this, 'block_datePicker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48a1770196c737f1227ac0dae4e83665c5d853b32a33180c19dff170a1ba0986 = $this->env->getExtension("native_profiler");
        $__internal_48a1770196c737f1227ac0dae4e83665c5d853b32a33180c19dff170a1ba0986->enter($__internal_48a1770196c737f1227ac0dae4e83665c5d853b32a33180c19dff170a1ba0986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Form:fields_bs.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('datePicker_widget', $context, $blocks);
        
        $__internal_48a1770196c737f1227ac0dae4e83665c5d853b32a33180c19dff170a1ba0986->leave($__internal_48a1770196c737f1227ac0dae4e83665c5d853b32a33180c19dff170a1ba0986_prof);

    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_a8ed40a990353f63fc53eb84151691d3aec6004c614ce951499096a4f42a3195 = $this->env->getExtension("native_profiler");
        $__internal_a8ed40a990353f63fc53eb84151691d3aec6004c614ce951499096a4f42a3195->enter($__internal_a8ed40a990353f63fc53eb84151691d3aec6004c614ce951499096a4f42a3195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"form-group\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a8ed40a990353f63fc53eb84151691d3aec6004c614ce951499096a4f42a3195->leave($__internal_a8ed40a990353f63fc53eb84151691d3aec6004c614ce951499096a4f42a3195_prof);

    }

    // line 11
    public function block_datePicker_widget($context, array $blocks = array())
    {
        $__internal_a1d597ea53a6eebddaa3e3a7d36e3ab552fb2e3eedaa0bb5fe9a05049868b8d9 = $this->env->getExtension("native_profiler");
        $__internal_a1d597ea53a6eebddaa3e3a7d36e3ab552fb2e3eedaa0bb5fe9a05049868b8d9->enter($__internal_a1d597ea53a6eebddaa3e3a7d36e3ab552fb2e3eedaa0bb5fe9a05049868b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datePicker_widget"));

        // line 12
        ob_start();
        // line 13
        echo "    <div class=\"form_row\">
        ";
        // line 15
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
        ";
        // line 16
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim((((twig_template_get_attributes($this, (isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_template_get_attributes($this, (isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " bigPandaDatePicker"))));
        // line 17
        echo "        ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_datepicker");
        // line 18
        echo "        ";
        $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 20
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
        ";
        // line 22
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a1d597ea53a6eebddaa3e3a7d36e3ab552fb2e3eedaa0bb5fe9a05049868b8d9->leave($__internal_a1d597ea53a6eebddaa3e3a7d36e3ab552fb2e3eedaa0bb5fe9a05049868b8d9_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Form:fields_bs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  101 => 22,  96 => 20,  93 => 18,  90 => 17,  88 => 16,  77 => 15,  74 => 13,  72 => 12,  66 => 11,  55 => 6,  51 => 5,  47 => 4,  44 => 3,  42 => 2,  36 => 1,  29 => 11,  26 => 10,  24 => 1,);
    }
}
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         {{ form_label(form) }}*/
/*         {{ form_errors(form) }}*/
/*         {{ form_widget(form) }}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block datePicker_widget %}*/
/* {% spaceless %}*/
/*     <div class="form_row">*/
/*         {#{ form_errors(form) }#}*/
/*         <input type="text" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         {% set attr = attr|merge({'class': ((attr.class|default('') ~ ' bigPandaDatePicker')|trim)}) %}*/
/*         {% set  id = id ~ "_datepicker" %}*/
/*         {% set  full_name = "datepicker_" ~ full_name  %}*/
/* {#        <input type="text" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>#}*/
/*         <input type="text" {{ block('widget_attributes') }}/>*/
/*         {#{ form_widget(form.date, {'id' : id ~ '_date'}) }#}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock datePicker_widget %}*/

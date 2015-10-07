<?php

/* BigPandaDevMainBundle:Crud:form.html.twig */
class __TwigTemplate_fa684a17e89cfeb1aa693ef13af41994781a17df4d86ee2f9bdab319e3df2a27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_title' => array($this, 'block_form_title'),
            'form_data' => array($this, 'block_form_data'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26de2cbef6b2724d130fd70ba87919ba619ce53336e15eb1e8a507cfb6a4540e = $this->env->getExtension("native_profiler");
        $__internal_26de2cbef6b2724d130fd70ba87919ba619ce53336e15eb1e8a507cfb6a4540e->enter($__internal_26de2cbef6b2724d130fd70ba87919ba619ce53336e15eb1e8a507cfb6a4540e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Crud:form.html.twig"));

        // line 1
        echo "<div class=\"panel\">
    <div class=\"panel-heading\">
        <h2>";
        // line 3
        $this->displayBlock('form_title', $context, $blocks);
        echo "</h2>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"panel-body\">
        <div class=\"container-fluid\">
            <div class=\" ";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("form_class", $context)) ? (_twig_default_filter((isset($context["form_class"]) ? $context["form_class"] : $this->getContext($context, "form_class")), "")) : ("")), "html", null, true);
        echo "\">
                ";
        // line 9
        $this->displayBlock('form_data', $context, $blocks);
        // line 28
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_26de2cbef6b2724d130fd70ba87919ba619ce53336e15eb1e8a507cfb6a4540e->leave($__internal_26de2cbef6b2724d130fd70ba87919ba619ce53336e15eb1e8a507cfb6a4540e_prof);

    }

    // line 3
    public function block_form_title($context, array $blocks = array())
    {
        $__internal_202dbb103a49d32daa48133840302255db94a5c64c252b034aff60b7cdd24416 = $this->env->getExtension("native_profiler");
        $__internal_202dbb103a49d32daa48133840302255db94a5c64c252b034aff60b7cdd24416->enter($__internal_202dbb103a49d32daa48133840302255db94a5c64c252b034aff60b7cdd24416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Form"), "html", null, true);
        
        $__internal_202dbb103a49d32daa48133840302255db94a5c64c252b034aff60b7cdd24416->leave($__internal_202dbb103a49d32daa48133840302255db94a5c64c252b034aff60b7cdd24416_prof);

    }

    // line 9
    public function block_form_data($context, array $blocks = array())
    {
        $__internal_dbe6a708496c83cb9f24f5c3c3d2313cb04be4e1d8a655e2916af75e9c672f35 = $this->env->getExtension("native_profiler");
        $__internal_dbe6a708496c83cb9f24f5c3c3d2313cb04be4e1d8a655e2916af75e9c672f35->enter($__internal_dbe6a708496c83cb9f24f5c3c3d2313cb04be4e1d8a655e2916af75e9c672f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_data"));

        // line 10
        echo "                    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                    ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                    <hr />

                    <div class=\"row\">
                        <div class=\"col-sm-10 col-sm-offset-1\">
                            ";
        // line 18
        if (array_key_exists("back_link", $context)) {
            // line 19
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["back_link"]) ? $context["back_link"] : $this->getContext($context, "back_link")), "html", null, true);
            echo "\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back"), "html", null, true);
            echo "</a>
                            ";
        }
        // line 21
        echo "
                            <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "\" class=\"btn btn-success pull-right\" />
                        </div>
                    </div>

                    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                ";
        
        $__internal_dbe6a708496c83cb9f24f5c3c3d2313cb04be4e1d8a655e2916af75e9c672f35->leave($__internal_dbe6a708496c83cb9f24f5c3c3d2313cb04be4e1d8a655e2916af75e9c672f35_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Crud:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 26,  99 => 22,  96 => 21,  88 => 19,  86 => 18,  77 => 12,  71 => 10,  65 => 9,  53 => 3,  42 => 28,  40 => 9,  36 => 8,  28 => 3,  24 => 1,);
    }
}
/* <div class="panel">*/
/*     <div class="panel-heading">*/
/*         <h2>{% block form_title %}{{ 'Form'|trans }}{% endblock %}</h2>*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/*     <div class="panel-body">*/
/*         <div class="container-fluid">*/
/*             <div class=" {{ form_class|default('') }}">*/
/*                 {% block form_data %}*/
/*                     {{ form_start(form) }}*/
/* */
/*                     {{ form_widget(form) }}*/
/* */
/*                     <hr />*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-sm-10 col-sm-offset-1">*/
/*                             {% if back_link is defined %}*/
/*                                 <a href="{{ back_link }}" class="btn btn-warning">{{ 'Back'|trans }}</a>*/
/*                             {% endif %}*/
/* */
/*                             <input type="submit" value="{{ 'Save'|trans }}" class="btn btn-success pull-right" />*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     {{ form_end(form) }}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */

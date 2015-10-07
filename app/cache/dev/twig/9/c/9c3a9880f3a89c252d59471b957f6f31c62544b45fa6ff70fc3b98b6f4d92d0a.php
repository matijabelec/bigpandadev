<?php

/* BigPandaDevMainBundle:Common:modals.html.twig */
class __TwigTemplate_fe7d99c5331a60c4e0de2d08b3d8a436557afe66e2573b9412806b59e989421a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1a2160d5927074821abb8378a510a3c5ffb37b825df023479aa47f6a740b31c = $this->env->getExtension("native_profiler");
        $__internal_c1a2160d5927074821abb8378a510a3c5ffb37b825df023479aa47f6a740b31c->enter($__internal_c1a2160d5927074821abb8378a510a3c5ffb37b825df023479aa47f6a740b31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Common:modals.html.twig"));

        // line 2
        echo "<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\"";
        echo ">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        echo "</div>
            <div class=\"modal-body\">";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
            <div class=\"modal-footer\">";
        // line 8
        $this->displayBlock('footer', $context, $blocks);
        // line 12
        echo "</div>
        </div>
    </div>
</div>
";
        
        $__internal_c1a2160d5927074821abb8378a510a3c5ffb37b825df023479aa47f6a740b31c->leave($__internal_c1a2160d5927074821abb8378a510a3c5ffb37b825df023479aa47f6a740b31c_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb6fa096a759f4c1296982c8ba9116b2b9d0ba565e801993362d0951f77ffcd9 = $this->env->getExtension("native_profiler");
        $__internal_fb6fa096a759f4c1296982c8ba9116b2b9d0ba565e801993362d0951f77ffcd9->enter($__internal_fb6fa096a759f4c1296982c8ba9116b2b9d0ba565e801993362d0951f77ffcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fb6fa096a759f4c1296982c8ba9116b2b9d0ba565e801993362d0951f77ffcd9->leave($__internal_fb6fa096a759f4c1296982c8ba9116b2b9d0ba565e801993362d0951f77ffcd9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_50a1899f2cec61f1ea1f381e673e1753b78e92dc1352e4d7b1c4e91913c106e9 = $this->env->getExtension("native_profiler");
        $__internal_50a1899f2cec61f1ea1f381e673e1753b78e92dc1352e4d7b1c4e91913c106e9->enter($__internal_50a1899f2cec61f1ea1f381e673e1753b78e92dc1352e4d7b1c4e91913c106e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50a1899f2cec61f1ea1f381e673e1753b78e92dc1352e4d7b1c4e91913c106e9->leave($__internal_50a1899f2cec61f1ea1f381e673e1753b78e92dc1352e4d7b1c4e91913c106e9_prof);

    }

    // line 8
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a5996700919abee97fc23f8754e0fe76338081ee3b918aed8ee01af3be0dfb4a = $this->env->getExtension("native_profiler");
        $__internal_a5996700919abee97fc23f8754e0fe76338081ee3b918aed8ee01af3be0dfb4a->enter($__internal_a5996700919abee97fc23f8754e0fe76338081ee3b918aed8ee01af3be0dfb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 9
        echo "                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</button>
                    <a class=\"btn btn-danger btn-ok\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
        echo "</a>
                ";
        
        $__internal_a5996700919abee97fc23f8754e0fe76338081ee3b918aed8ee01af3be0dfb4a->leave($__internal_a5996700919abee97fc23f8754e0fe76338081ee3b918aed8ee01af3be0dfb4a_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Common:modals.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 10,  80 => 9,  74 => 8,  63 => 6,  52 => 5,  41 => 12,  39 => 8,  35 => 6,  31 => 5,  25 => 2,);
    }
}
/* {# Modals #}*/
/* <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog"{# aria-labelledby="myModalLabel" aria-hidden="true"#}>*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">{% block head %}{% endblock %}</div>*/
/*             <div class="modal-body">{% block body %}{% endblock %}</div>*/
/*             <div class="modal-footer">*/
/*                 {%- block footer %}*/
/*                     <button type="button" class="btn btn-default" data-dismiss="modal">{{ 'Cancel'|trans }}</button>*/
/*                     <a class="btn btn-danger btn-ok">{{ 'Delete'|trans }}</a>*/
/*                 {% endblock -%}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {#<div id="confirm-delete" class="modal fade" role="dialog">*/
/* <div class="modal-dialog">*/
/* */
/* <!-- Modal content-->*/
/* <div class="modal-content">*/
/*     <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal">&times;</button>*/
/*         <h4 class="modal-title">{{ 'Delete confirmation'|trans }}</h4>*/
/*     </div>*/
/*     <div class="modal-body">*/
/*         <p>{{ 'Are you sure that you want to delete item?'|trans }}</p>*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>*/
/*         <a data-toggle="tooltip" */
/*            data-original-title="{{ 'Ok'|trans }}"><i class="fa fa-times"></i></a>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* </div>#}*/

<?php

/* BigPandaDevMainBundle:Crud:table.html.twig */
class __TwigTemplate_60a23ef77c223dd71e3206c5e9210b1d3d2fed11d8d59969e409f87cfdd7e844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'header_actions' => array($this, 'block_header_actions'),
            'data' => array($this, 'block_data'),
            'record' => array($this, 'block_record'),
            'record_actions' => array($this, 'block_record_actions'),
            'record_show_data' => array($this, 'block_record_show_data'),
            'record_delete_data' => array($this, 'block_record_delete_data'),
            'no_records_found' => array($this, 'block_no_records_found'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9873cf25811894fca891876e3c741855e5e6536c8a933691cab09ce40be95aa = $this->env->getExtension("native_profiler");
        $__internal_c9873cf25811894fca891876e3c741855e5e6536c8a933691cab09ce40be95aa->enter($__internal_c9873cf25811894fca891876e3c741855e5e6536c8a933691cab09ce40be95aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Crud:table.html.twig"));

        // line 2
        echo "<div class=\"panel\">
    <div class=\"panel-heading\">
        ";
        // line 4
        if (array_key_exists("table_title", $context)) {
            // line 5
            echo "            <h2 class=\"pull-left\">";
            echo twig_escape_filter($this->env, (isset($context["table_title"]) ? $context["table_title"] : $this->getContext($context, "table_title")), "html", null, true);
            echo "</h2>
        ";
        }
        // line 7
        echo "        <a href=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), array("action" => "create"));
        echo "\" class=\"btn btn-primary pull-right\"
           role=\"button\" 
           data-toggle=\"tooltip\" 
           data-original-title=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create"), "html", null, true);
        echo "\"><i class=\"fa fa-plus\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create"), "html", null, true);
        echo "</a>

        ";
        // line 35
        echo "    </div>
    <div class=\"clearfix\"></div>
    <div class=\"panel-body\">
        <div class=\"table-responsive\"> 
            <table class=\"table table-hover table-striped table-bordered\">
                <thead>
                    <tr>
                        ";
        // line 42
        if ( !array_key_exists("no_numeration", $context)) {
            // line 43
            echo "                            <th class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No."), "html", null, true);
            echo "</th>
                        ";
        }
        // line 45
        echo "
                        ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 47
        echo "
                        ";
        // line 48
        $this->displayBlock('header_actions', $context, $blocks);
        // line 56
        echo "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 59
        $this->displayBlock('data', $context, $blocks);
        // line 103
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 113
        echo "    </div>
</div>
";
        
        $__internal_c9873cf25811894fca891876e3c741855e5e6536c8a933691cab09ce40be95aa->leave($__internal_c9873cf25811894fca891876e3c741855e5e6536c8a933691cab09ce40be95aa_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_e208b273e573dcfb9742cb3463fa2cf111894adf9054ec77a3097e97fc194871 = $this->env->getExtension("native_profiler");
        $__internal_e208b273e573dcfb9742cb3463fa2cf111894adf9054ec77a3097e97fc194871->enter($__internal_e208b273e573dcfb9742cb3463fa2cf111894adf9054ec77a3097e97fc194871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_e208b273e573dcfb9742cb3463fa2cf111894adf9054ec77a3097e97fc194871->leave($__internal_e208b273e573dcfb9742cb3463fa2cf111894adf9054ec77a3097e97fc194871_prof);

    }

    // line 48
    public function block_header_actions($context, array $blocks = array())
    {
        $__internal_11a1a87d51e6a33095b9c129a340ae09efa2c2b217c8c906a4733463ac3615ed = $this->env->getExtension("native_profiler");
        $__internal_11a1a87d51e6a33095b9c129a340ae09efa2c2b217c8c906a4733463ac3615ed->enter($__internal_11a1a87d51e6a33095b9c129a340ae09efa2c2b217c8c906a4733463ac3615ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_actions"));

        // line 49
        echo "                            <th>&nbsp;</th>
                            ";
        // line 55
        echo "                        ";
        
        $__internal_11a1a87d51e6a33095b9c129a340ae09efa2c2b217c8c906a4733463ac3615ed->leave($__internal_11a1a87d51e6a33095b9c129a340ae09efa2c2b217c8c906a4733463ac3615ed_prof);

    }

    // line 59
    public function block_data($context, array $blocks = array())
    {
        $__internal_50e0760dc71e7b6288a2b30f3f9cef8abd65798e65f8790770770f425fa98f88 = $this->env->getExtension("native_profiler");
        $__internal_50e0760dc71e7b6288a2b30f3f9cef8abd65798e65f8790770770f425fa98f88->enter($__internal_50e0760dc71e7b6288a2b30f3f9cef8abd65798e65f8790770770f425fa98f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "data"));

        // line 60
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["records"]) ? $context["records"] : $this->getContext($context, "records")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 61
            echo "                            <tr>
                                ";
            // line 62
            if ( !array_key_exists("no_numeration", $context)) {
                // line 63
                echo "                                    <td class=\"text-right\" style=\"vertical-align: middle;\">";
                echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["loop"], "index", array()), "html", null, true);
                echo "</td>
                                ";
            }
            // line 65
            echo "
                                ";
            // line 66
            $this->displayBlock('record', $context, $blocks);
            // line 67
            echo "
                                ";
            // line 68
            $this->displayBlock('record_actions', $context, $blocks);
            // line 96
            echo "                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 98
            echo "                            <tr>
                                ";
            // line 99
            $this->displayBlock('no_records_found', $context, $blocks);
            // line 100
            echo "                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    ";
        
        $__internal_50e0760dc71e7b6288a2b30f3f9cef8abd65798e65f8790770770f425fa98f88->leave($__internal_50e0760dc71e7b6288a2b30f3f9cef8abd65798e65f8790770770f425fa98f88_prof);

    }

    // line 66
    public function block_record($context, array $blocks = array())
    {
        $__internal_007a9803d2e3d785f5848e1f6351d1bd99c370960f45963ad1a0d54d0d33a4ce = $this->env->getExtension("native_profiler");
        $__internal_007a9803d2e3d785f5848e1f6351d1bd99c370960f45963ad1a0d54d0d33a4ce->enter($__internal_007a9803d2e3d785f5848e1f6351d1bd99c370960f45963ad1a0d54d0d33a4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record"));

        
        $__internal_007a9803d2e3d785f5848e1f6351d1bd99c370960f45963ad1a0d54d0d33a4ce->leave($__internal_007a9803d2e3d785f5848e1f6351d1bd99c370960f45963ad1a0d54d0d33a4ce_prof);

    }

    // line 68
    public function block_record_actions($context, array $blocks = array())
    {
        $__internal_57c9a73f07e0aaa35471fbc95499d56ad58353dd1ad0addb7880476045a5ff3b = $this->env->getExtension("native_profiler");
        $__internal_57c9a73f07e0aaa35471fbc95499d56ad58353dd1ad0addb7880476045a5ff3b->enter($__internal_57c9a73f07e0aaa35471fbc95499d56ad58353dd1ad0addb7880476045a5ff3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record_actions"));

        // line 69
        echo "                                    <td class=\"text-center\" style=\"font-size: 20px\">
";
        // line 74
        echo "                                        <a role=\"button\" ";
        // line 75
        echo "                                           data-toggle=\"modal\"
";
        // line 77
        echo "                                           ";
        $this->displayBlock('record_show_data', $context, $blocks);
        // line 78
        echo "                                           data-toggle=\"tooltip\"><i class=\"fa fa-sticky-note-o\"
                                                                    data-original-title=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View"), "html", null, true);
        echo "\"
                                                                    data-toggle=\"tooltip\"></i></a>
                                        <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), array("action" => "edit", "id" => twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "id", array()))), "html", null, true);
        echo "\"
                                           data-toggle=\"tooltip\" 
                                           data-original-title=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Edit"), "html", null, true);
        echo "\"><i class=\"fa fa-pencil-square-o\"></i></a>
                                        <a role=\"button\" ";
        // line 85
        echo "                                           data-toggle=\"modal\"
                                           data-href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), array("action" => "delete", "id" => twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "id", array()))), "html", null, true);
        echo "\"
                                           ";
        // line 87
        $this->displayBlock('record_delete_data', $context, $blocks);
        // line 88
        echo "                                           data-toggle=\"tooltip\"><i class=\"fa fa-times\"
                                                                    data-original-title=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
        echo "\"
                                                                    data-toggle=\"tooltip\"></i></a>
                                           ";
        // line 94
        echo "                                    </td>
                                ";
        
        $__internal_57c9a73f07e0aaa35471fbc95499d56ad58353dd1ad0addb7880476045a5ff3b->leave($__internal_57c9a73f07e0aaa35471fbc95499d56ad58353dd1ad0addb7880476045a5ff3b_prof);

    }

    // line 77
    public function block_record_show_data($context, array $blocks = array())
    {
        $__internal_c7ab52af844dbde52b5011849f6bc936bbb1aaabe81e19ec55556154e34b1a3d = $this->env->getExtension("native_profiler");
        $__internal_c7ab52af844dbde52b5011849f6bc936bbb1aaabe81e19ec55556154e34b1a3d->enter($__internal_c7ab52af844dbde52b5011849f6bc936bbb1aaabe81e19ec55556154e34b1a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record_show_data"));

        
        $__internal_c7ab52af844dbde52b5011849f6bc936bbb1aaabe81e19ec55556154e34b1a3d->leave($__internal_c7ab52af844dbde52b5011849f6bc936bbb1aaabe81e19ec55556154e34b1a3d_prof);

    }

    // line 87
    public function block_record_delete_data($context, array $blocks = array())
    {
        $__internal_a07d41daa91b73cc0efd6a19ba5d8003fc1471cad05fbd2d193c04a1ce3e4a7f = $this->env->getExtension("native_profiler");
        $__internal_a07d41daa91b73cc0efd6a19ba5d8003fc1471cad05fbd2d193c04a1ce3e4a7f->enter($__internal_a07d41daa91b73cc0efd6a19ba5d8003fc1471cad05fbd2d193c04a1ce3e4a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record_delete_data"));

        
        $__internal_a07d41daa91b73cc0efd6a19ba5d8003fc1471cad05fbd2d193c04a1ce3e4a7f->leave($__internal_a07d41daa91b73cc0efd6a19ba5d8003fc1471cad05fbd2d193c04a1ce3e4a7f_prof);

    }

    // line 99
    public function block_no_records_found($context, array $blocks = array())
    {
        $__internal_195a6aa76aaf1f31771fb622b16da0a9bffa4ee8ebd8a9563bc92a9f45d66951 = $this->env->getExtension("native_profiler");
        $__internal_195a6aa76aaf1f31771fb622b16da0a9bffa4ee8ebd8a9563bc92a9f45d66951->enter($__internal_195a6aa76aaf1f31771fb622b16da0a9bffa4ee8ebd8a9563bc92a9f45d66951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_records_found"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("No records found!"), "html", null, true);
        
        $__internal_195a6aa76aaf1f31771fb622b16da0a9bffa4ee8ebd8a9563bc92a9f45d66951->leave($__internal_195a6aa76aaf1f31771fb622b16da0a9bffa4ee8ebd8a9563bc92a9f45d66951_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Crud:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 99,  291 => 87,  280 => 77,  272 => 94,  267 => 89,  264 => 88,  262 => 87,  258 => 86,  255 => 85,  251 => 83,  246 => 81,  241 => 79,  238 => 78,  235 => 77,  232 => 75,  230 => 74,  227 => 69,  221 => 68,  210 => 66,  203 => 102,  196 => 100,  194 => 99,  191 => 98,  177 => 96,  175 => 68,  172 => 67,  170 => 66,  167 => 65,  161 => 63,  159 => 62,  156 => 61,  137 => 60,  131 => 59,  124 => 55,  121 => 49,  115 => 48,  104 => 46,  95 => 113,  90 => 103,  88 => 59,  83 => 56,  81 => 48,  78 => 47,  76 => 46,  73 => 45,  67 => 43,  65 => 42,  56 => 35,  49 => 10,  42 => 7,  36 => 5,  34 => 4,  30 => 2,);
    }
}
/* {# BigPandaDevMainBundle:Crud:table.html.twig #}*/
/* <div class="panel">*/
/*     <div class="panel-heading">*/
/*         {% if table_title is defined %}*/
/*             <h2 class="pull-left">{{ table_title }}</h2>*/
/*         {% endif %}*/
/*         <a href="{{ path(route_name, {'action':'create'}) }}" class="btn btn-primary pull-right"*/
/*            role="button" */
/*            data-toggle="tooltip" */
/*            data-original-title="{{ 'Create'|trans }}"><i class="fa fa-plus"></i> {{ 'Create'|trans}}</a>*/
/* */
/*         {#<div class="col-xs-6 text-left">*/
/*             <form class="form-inline" role="form">*/
/*                 <div class="form-group">*/
/*                     <label class="filter-col" style="margin-right:0;" for="pref-perpage">Rows: </label>*/
/*                     <select id="pref-perpage" class="form-control">*/
/*                         <option selected="selected" value="10">10</option>*/
/*                         <option value="15">15</option>*/
/*                         <option value="20">20</option>*/
/*                         <option value="50">50</option>*/
/*                         <option value="100">100</option>*/
/*                     </select>                                */
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <div class="col-xs-6 text-right">*/
/*             <form class="form-inline" role="form">*/
/*                 <div class="form-group">*/
/*                     <label class="filter-col" style="margin-right:0;" for="pref-search">Search:</label>*/
/*                     <input type="text" class="form-control input-sm" id="pref-search">*/
/*                 </div>*/
/*             </form>*/
/*         </div>#}*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/*     <div class="panel-body">*/
/*         <div class="table-responsive"> */
/*             <table class="table table-hover table-striped table-bordered">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         {% if no_numeration is not defined %}*/
/*                             <th class="text-center">{{ 'No.'|trans }}</th>*/
/*                         {% endif %}*/
/* */
/*                         {% block header %}{% endblock %}*/
/* */
/*                         {% block header_actions %}*/
/*                             <th>&nbsp;</th>*/
/*                             {#    <a href="{{ path(route_name, {'action':'create'}) }}" class="btn btn-primary pull-right"*/
/*                                    role="button" */
/*                                    data-toggle="tooltip" */
/*                                    data-original-title="{{ 'Create'|trans }}"><i class="fa fa-plus"></i></a>*/
/*                             </th>#}*/
/*                         {% endblock %}*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     {% block data %}*/
/*                         {% for record in records %}*/
/*                             <tr>*/
/*                                 {% if no_numeration is not defined %}*/
/*                                     <td class="text-right" style="vertical-align: middle;">{{ loop.index }}</td>*/
/*                                 {% endif %}*/
/* */
/*                                 {% block record %}{% endblock %}*/
/* */
/*                                 {% block record_actions %}*/
/*                                     <td class="text-center" style="font-size: 20px">*/
/* {#                                        <a href="{{ path(route_name, {'action':record.id}) }}"*/
/*                                            data-toggle="tooltip" */
/*                                            data-original-title="{{ 'View'|trans }}">*/
/*                                             <i class="fa fa-sticky-note-o"></i></a>#}*/
/*                                         <a role="button" {#class="btn btn-info btn-lg" #}*/
/*                                            data-toggle="modal"*/
/* {#                                           data-href="{{ path(route_name, {'action':record.id}) }}"#}*/
/*                                            {% block record_show_data %}{% endblock%}*/
/*                                            data-toggle="tooltip"><i class="fa fa-sticky-note-o"*/
/*                                                                     data-original-title="{{ 'View'|trans }}"*/
/*                                                                     data-toggle="tooltip"></i></a>*/
/*                                         <a href="{{ path(route_name, {'action':'edit', 'id':record.id}) }}"*/
/*                                            data-toggle="tooltip" */
/*                                            data-original-title="{{ 'Edit'|trans }}"><i class="fa fa-pencil-square-o"></i></a>*/
/*                                         <a role="button" {#class="btn btn-info btn-lg" #}*/
/*                                            data-toggle="modal"*/
/*                                            data-href="{{ path(route_name, {'action':'delete', 'id':record.id}) }}"*/
/*                                            {% block record_delete_data %}{% endblock%}*/
/*                                            data-toggle="tooltip"><i class="fa fa-times"*/
/*                                                                     data-original-title="{{ 'Delete'|trans }}"*/
/*                                                                     data-toggle="tooltip"></i></a>*/
/*                                            {#<a href="{{ path(route_name, {'action':'delete', 'id':record.id}) }}"*/
/*                                            data-toggle="tooltip" */
/*                                            data-original-title="{{ 'Delete'|trans }}"><i class="fa fa-times"></i></a>#}*/
/*                                     </td>*/
/*                                 {% endblock %}*/
/*                             </tr>*/
/*                         {% else %}*/
/*                             <tr>*/
/*                                 {% block no_records_found %}{{ 'No records found!'|trans }}{% endblock %}*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     {% endblock %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {#*/
/*         <div>*/
/*             <a href="{{ path(route_name, {'action':'create'}) }}" class="btn btn-primary pull-right"*/
/*                role="button" */
/*                data-toggle="tooltip" */
/*                data-original-title="{{ 'Create'|trans }}"><i class="fa fa-plus"></i> {{ 'Create'|trans}}</a>*/
/*         </div>#}*/
/*     </div>*/
/* </div>*/
/* */

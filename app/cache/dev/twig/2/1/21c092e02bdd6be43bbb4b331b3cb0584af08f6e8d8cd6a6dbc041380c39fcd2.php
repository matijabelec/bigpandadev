<?php

/* BigPandaDevMainBundle:Orders:orders.html.twig */
class __TwigTemplate_55c276cc73c06cd2dbbf1972a4cd9af8ab75ea586658bb445c86c7c1fc5de45b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:layout_table.html.twig", "BigPandaDevMainBundle:Orders:orders.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
            'dialogs' => array($this, 'block_dialogs'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Default:layout_table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8033c380971f2fdc9cd3c5585d723a91f2a1f886870001facdd66732add2c3ff = $this->env->getExtension("native_profiler");
        $__internal_8033c380971f2fdc9cd3c5585d723a91f2a1f886870001facdd66732add2c3ff->enter($__internal_8033c380971f2fdc9cd3c5585d723a91f2a1f886870001facdd66732add2c3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Orders:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8033c380971f2fdc9cd3c5585d723a91f2a1f886870001facdd66732add2c3ff->leave($__internal_8033c380971f2fdc9cd3c5585d723a91f2a1f886870001facdd66732add2c3ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a890eb951364216b2ce28f8f6d308a5326b15a9f4fd9f3a3c7f979c33836ae07 = $this->env->getExtension("native_profiler");
        $__internal_a890eb951364216b2ce28f8f6d308a5326b15a9f4fd9f3a3c7f979c33836ae07->enter($__internal_a890eb951364216b2ce28f8f6d308a5326b15a9f4fd9f3a3c7f979c33836ae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Orders"), "html", null, true);
        echo "</h2>
";
        
        $__internal_a890eb951364216b2ce28f8f6d308a5326b15a9f4fd9f3a3c7f979c33836ae07->leave($__internal_a890eb951364216b2ce28f8f6d308a5326b15a9f4fd9f3a3c7f979c33836ae07_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_6061637723185cf7cdca73dea5eb777e7113ad821868e1fb3205676da01164cc = $this->env->getExtension("native_profiler");
        $__internal_6061637723185cf7cdca73dea5eb777e7113ad821868e1fb3205676da01164cc->enter($__internal_6061637723185cf7cdca73dea5eb777e7113ad821868e1fb3205676da01164cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div>
        <p><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "</a> / <a href=\"#\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Orders"), "html", null, true);
        echo "</a></p>
    </div>
    
    ";
        // line 12
        $this->loadTemplate("BigPandaDevMainBundle:Orders:orders.html.twig", "BigPandaDevMainBundle:Orders:orders.html.twig", 12, "405144131")->display($context);
        
        $__internal_6061637723185cf7cdca73dea5eb777e7113ad821868e1fb3205676da01164cc->leave($__internal_6061637723185cf7cdca73dea5eb777e7113ad821868e1fb3205676da01164cc_prof);

    }

    // line 59
    public function block_dialogs($context, array $blocks = array())
    {
        $__internal_60ebea6a4abc334df1950d6f695c097ce4223dfdddced1ffbb2fd7a9aa116a41 = $this->env->getExtension("native_profiler");
        $__internal_60ebea6a4abc334df1950d6f695c097ce4223dfdddced1ffbb2fd7a9aa116a41->enter($__internal_60ebea6a4abc334df1950d6f695c097ce4223dfdddced1ffbb2fd7a9aa116a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dialogs"));

        // line 60
        echo "    ";
        $this->loadTemplate("BigPandaDevMainBundle:Orders:orders.html.twig", "BigPandaDevMainBundle:Orders:orders.html.twig", 60, "2030554109")->display($context);
        // line 69
        echo "    ";
        $this->loadTemplate("BigPandaDevMainBundle:Orders:orders.html.twig", "BigPandaDevMainBundle:Orders:orders.html.twig", 69, "680615216")->display($context);
        
        $__internal_60ebea6a4abc334df1950d6f695c097ce4223dfdddced1ffbb2fd7a9aa116a41->leave($__internal_60ebea6a4abc334df1950d6f695c097ce4223dfdddced1ffbb2fd7a9aa116a41_prof);

    }

    // line 81
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_41a0d730a0181f5afbea1bcf60e3a7c4c9b51dc4fdf6cbb414896d8a7ec0f299 = $this->env->getExtension("native_profiler");
        $__internal_41a0d730a0181f5afbea1bcf60e3a7c4c9b51dc4fdf6cbb414896d8a7ec0f299->enter($__internal_41a0d730a0181f5afbea1bcf60e3a7c4c9b51dc4fdf6cbb414896d8a7ec0f299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 82
        echo "<script>
\$('#modal-confirm-delete').on('show.bs.modal', function(e) {
    var order_id = \$(e.relatedTarget).data('order-id');
    var order_name = \$(e.relatedTarget).data('order-name');
    \$(e.currentTarget).find('.order-id').text(order_id);
    \$(e.currentTarget).find('.order-name').text(order_name);
});
\$('#modal-show-order').on('show.bs.modal', function(e) {
    var order_id = \$(e.relatedTarget).data('order-id');
    var order_name = \$(e.relatedTarget).data('order-name');
    var order_date_created = \$(e.relatedTarget).data('order-date-created');
    var order_deadline = \$(e.relatedTarget).data('order-deadline');
    \$(e.currentTarget).find('.order-id').text(order_id);
    \$(e.currentTarget).find('.order-name').text(order_name);
    \$(e.currentTarget).find('.order-date-created').text(order_date_created);
    \$(e.currentTarget).find('.order-deadline').text(order_deadline);
});
\$(\"#modal-confirm-delete, #modal-show-order\").draggable();
</script>
";
        
        $__internal_41a0d730a0181f5afbea1bcf60e3a7c4c9b51dc4fdf6cbb414896d8a7ec0f299->leave($__internal_41a0d730a0181f5afbea1bcf60e3a7c4c9b51dc4fdf6cbb414896d8a7ec0f299_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Orders:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 82,  96 => 81,  88 => 69,  85 => 60,  79 => 59,  72 => 12,  62 => 9,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}


/* BigPandaDevMainBundle:Orders:orders.html.twig */
class __TwigTemplate_55c276cc73c06cd2dbbf1972a4cd9af8ab75ea586658bb445c86c7c1fc5de45b_405144131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Crud:table.html.twig", "BigPandaDevMainBundle:Orders:orders.html.twig", 12);
        $this->blocks = array(
            'no_records_found' => array($this, 'block_no_records_found'),
            'header' => array($this, 'block_header'),
            'record' => array($this, 'block_record'),
            'record_delete_data' => array($this, 'block_record_delete_data'),
            'record_show_data' => array($this, 'block_record_show_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Crud:table.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fad633f8c79f49b2ccbca187632485e324ba1d6461c1562dcd779c8aacb0a311 = $this->env->getExtension("native_profiler");
        $__internal_fad633f8c79f49b2ccbca187632485e324ba1d6461c1562dcd779c8aacb0a311->enter($__internal_fad633f8c79f49b2ccbca187632485e324ba1d6461c1562dcd779c8aacb0a311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Orders:orders.html.twig"));

        // line 13
        $context["route_name"] = "_order";
        // line 14
        $context["panel_title"] = "Orders";
        // line 17
        $context["table_title"] = $this->env->getExtension('translator')->trans("Orders");
        // line 12
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fad633f8c79f49b2ccbca187632485e324ba1d6461c1562dcd779c8aacb0a311->leave($__internal_fad633f8c79f49b2ccbca187632485e324ba1d6461c1562dcd779c8aacb0a311_prof);

    }

    // line 18
    public function block_no_records_found($context, array $blocks = array())
    {
        $__internal_b6bbc467f1ad34875f0a9f3d46bdc37591fa673071be852f895085dc8cb52458 = $this->env->getExtension("native_profiler");
        $__internal_b6bbc467f1ad34875f0a9f3d46bdc37591fa673071be852f895085dc8cb52458->enter($__internal_b6bbc467f1ad34875f0a9f3d46bdc37591fa673071be852f895085dc8cb52458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_records_found"));

        echo "<td colspan=5>";
        $this->displayParentBlock("no_records_found", $context, $blocks);
        echo "</td>";
        
        $__internal_b6bbc467f1ad34875f0a9f3d46bdc37591fa673071be852f895085dc8cb52458->leave($__internal_b6bbc467f1ad34875f0a9f3d46bdc37591fa673071be852f895085dc8cb52458_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_7bf4a429e51a63d7357d31e16916701fde21847c274d7ab6f1bdca2d4674f28c = $this->env->getExtension("native_profiler");
        $__internal_7bf4a429e51a63d7357d31e16916701fde21847c274d7ab6f1bdca2d4674f28c->enter($__internal_7bf4a429e51a63d7357d31e16916701fde21847c274d7ab6f1bdca2d4674f28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "            ";
        if ((twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 22
            echo "                <th class=\"text-center\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id"), "html", null, true);
            echo "</th>
            ";
        }
        // line 24
        echo "            <th class=\"text-center\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date created"), "html", null, true);
        echo "</th>
            <th class=\"text-center\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deadline"), "html", null, true);
        echo "</th>
        ";
        
        $__internal_7bf4a429e51a63d7357d31e16916701fde21847c274d7ab6f1bdca2d4674f28c->leave($__internal_7bf4a429e51a63d7357d31e16916701fde21847c274d7ab6f1bdca2d4674f28c_prof);

    }

    // line 29
    public function block_record($context, array $blocks = array())
    {
        $__internal_2e497219ad1bd3e9083fcd3e6b43c778dc3628dac9575922f097050244e341fe = $this->env->getExtension("native_profiler");
        $__internal_2e497219ad1bd3e9083fcd3e6b43c778dc3628dac9575922f097050244e341fe->enter($__internal_2e497219ad1bd3e9083fcd3e6b43c778dc3628dac9575922f097050244e341fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record"));

        // line 30
        echo "            ";
        if ((twig_template_get_attributes($this, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            // line 31
            echo "                <td class=\"text-right col-xs-1\" style=\"vertical-align: middle;\">";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "id", array()));
            echo "</td>
            ";
        }
        // line 33
        echo "            <td class=\"text-left col-xs-5\" style=\"vertical-align: middle;\">
                ";
        // line 34
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "name", array()));
        echo "
                ";
        // line 35
        if ((twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "deleted", array()) == 1)) {
            // line 36
            echo "                    <span data-toggle=\"tooltip\"
                          data-original-title=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("deleted"), "html", null, true);
            echo "\"><i class=\"fa fa-dot-circle-o delete-info\"></i></span>
                ";
        }
        // line 39
        echo "            </td>
            <td class=\"text-right col-xs-2\" style=\"vertical-align: middle;\">";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "datecreated", array()), "d.m.Y."), "html", null, true);
        echo "</td>
            <td class=\"text-right  col-xs-2\" style=\"vertical-align: middle;\">";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "deadline", array()), "d.m.Y."), "html", null, true);
        echo "</td>
        ";
        
        $__internal_2e497219ad1bd3e9083fcd3e6b43c778dc3628dac9575922f097050244e341fe->leave($__internal_2e497219ad1bd3e9083fcd3e6b43c778dc3628dac9575922f097050244e341fe_prof);

    }

    // line 44
    public function block_record_delete_data($context, array $blocks = array())
    {
        $__internal_92da5fa0068e9d7670054d0f28d00c655ccfe615afe97be21bc5a1dd0d7d04e2 = $this->env->getExtension("native_profiler");
        $__internal_92da5fa0068e9d7670054d0f28d00c655ccfe615afe97be21bc5a1dd0d7d04e2->enter($__internal_92da5fa0068e9d7670054d0f28d00c655ccfe615afe97be21bc5a1dd0d7d04e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record_delete_data"));

        // line 45
        echo "            data-target=\"#modal-confirm-delete\"
            data-order-id=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "id", array()), "html", null, true);
        echo "\"
            data-order-name=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "name", array()));
        echo "\"
        ";
        
        $__internal_92da5fa0068e9d7670054d0f28d00c655ccfe615afe97be21bc5a1dd0d7d04e2->leave($__internal_92da5fa0068e9d7670054d0f28d00c655ccfe615afe97be21bc5a1dd0d7d04e2_prof);

    }

    // line 49
    public function block_record_show_data($context, array $blocks = array())
    {
        $__internal_323ce8d7d946c5582a3e680c4b2e70b34088c31bd4fa534cb7895d2a8a161962 = $this->env->getExtension("native_profiler");
        $__internal_323ce8d7d946c5582a3e680c4b2e70b34088c31bd4fa534cb7895d2a8a161962->enter($__internal_323ce8d7d946c5582a3e680c4b2e70b34088c31bd4fa534cb7895d2a8a161962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record_show_data"));

        // line 50
        echo "            data-target=\"#modal-show-order\"
            data-order-id=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "id", array()), "html", null, true);
        echo "\"
            data-order-name=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "name", array()));
        echo "\"
            data-order-date-created=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "datecreated", array()), "d.m.Y."), "html", null, true);
        echo "\"
            data-order-deadline=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "deadline", array()), "d.m.Y."), "html", null, true);
        echo "\"
        ";
        
        $__internal_323ce8d7d946c5582a3e680c4b2e70b34088c31bd4fa534cb7895d2a8a161962->leave($__internal_323ce8d7d946c5582a3e680c4b2e70b34088c31bd4fa534cb7895d2a8a161962_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Orders:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 54,  320 => 53,  316 => 52,  312 => 51,  309 => 50,  303 => 49,  294 => 47,  290 => 46,  287 => 45,  281 => 44,  272 => 41,  268 => 40,  265 => 39,  260 => 37,  257 => 36,  255 => 35,  251 => 34,  248 => 33,  242 => 31,  239 => 30,  233 => 29,  224 => 26,  220 => 25,  215 => 24,  209 => 22,  206 => 21,  200 => 20,  186 => 18,  179 => 12,  177 => 17,  175 => 14,  173 => 13,  152 => 12,  102 => 82,  96 => 81,  88 => 69,  85 => 60,  79 => 59,  72 => 12,  62 => 9,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}


/* BigPandaDevMainBundle:Orders:orders.html.twig */
class __TwigTemplate_55c276cc73c06cd2dbbf1972a4cd9af8ab75ea586658bb445c86c7c1fc5de45b_2030554109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 60
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Dialogs:modal_delete_confirm.html.twig", "BigPandaDevMainBundle:Orders:orders.html.twig", 60);
        $this->blocks = array(
            'modal_id' => array($this, 'block_modal_id'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Dialogs:modal_delete_confirm.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e74210170e45d1da9631019f557a33a8f0c49fca406eda6a38c325bf6cded20 = $this->env->getExtension("native_profiler");
        $__internal_7e74210170e45d1da9631019f557a33a8f0c49fca406eda6a38c325bf6cded20->enter($__internal_7e74210170e45d1da9631019f557a33a8f0c49fca406eda6a38c325bf6cded20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Orders:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e74210170e45d1da9631019f557a33a8f0c49fca406eda6a38c325bf6cded20->leave($__internal_7e74210170e45d1da9631019f557a33a8f0c49fca406eda6a38c325bf6cded20_prof);

    }

    // line 61
    public function block_modal_id($context, array $blocks = array())
    {
        $__internal_a77fc7de5cdc6503cd290347d6968844a23a31cef8d10f48d31c5656d1f8eb94 = $this->env->getExtension("native_profiler");
        $__internal_a77fc7de5cdc6503cd290347d6968844a23a31cef8d10f48d31c5656d1f8eb94->enter($__internal_a77fc7de5cdc6503cd290347d6968844a23a31cef8d10f48d31c5656d1f8eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_id"));

        echo "modal-confirm-delete";
        
        $__internal_a77fc7de5cdc6503cd290347d6968844a23a31cef8d10f48d31c5656d1f8eb94->leave($__internal_a77fc7de5cdc6503cd290347d6968844a23a31cef8d10f48d31c5656d1f8eb94_prof);

    }

    // line 62
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fe5171bdc0458e9262e2583512b5ca288b01078a71928df15fee3c77526e905 = $this->env->getExtension("native_profiler");
        $__internal_1fe5171bdc0458e9262e2583512b5ca288b01078a71928df15fee3c77526e905->enter($__internal_1fe5171bdc0458e9262e2583512b5ca288b01078a71928df15fee3c77526e905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Confirm delete"), "html", null, true);
        
        $__internal_1fe5171bdc0458e9262e2583512b5ca288b01078a71928df15fee3c77526e905->leave($__internal_1fe5171bdc0458e9262e2583512b5ca288b01078a71928df15fee3c77526e905_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aecec2004db8aff34207e5667e8ed7f69ebea07d375502802d31619e0276d4d = $this->env->getExtension("native_profiler");
        $__internal_0aecec2004db8aff34207e5667e8ed7f69ebea07d375502802d31619e0276d4d->enter($__internal_0aecec2004db8aff34207e5667e8ed7f69ebea07d375502802d31619e0276d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 64
        echo "            <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Are you sure you want to delete order"), "html", null, true);
        echo " 
                \"<span class=\"order-name\" style=\"font-weight: bold;\"></span>\" 
                (<span class=\"order-id\"></span>)?</p>
        ";
        
        $__internal_0aecec2004db8aff34207e5667e8ed7f69ebea07d375502802d31619e0276d4d->leave($__internal_0aecec2004db8aff34207e5667e8ed7f69ebea07d375502802d31619e0276d4d_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Orders:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 64,  406 => 63,  394 => 62,  382 => 61,  357 => 60,  324 => 54,  320 => 53,  316 => 52,  312 => 51,  309 => 50,  303 => 49,  294 => 47,  290 => 46,  287 => 45,  281 => 44,  272 => 41,  268 => 40,  265 => 39,  260 => 37,  257 => 36,  255 => 35,  251 => 34,  248 => 33,  242 => 31,  239 => 30,  233 => 29,  224 => 26,  220 => 25,  215 => 24,  209 => 22,  206 => 21,  200 => 20,  186 => 18,  179 => 12,  177 => 17,  175 => 14,  173 => 13,  152 => 12,  102 => 82,  96 => 81,  88 => 69,  85 => 60,  79 => 59,  72 => 12,  62 => 9,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}


/* BigPandaDevMainBundle:Orders:orders.html.twig */
class __TwigTemplate_55c276cc73c06cd2dbbf1972a4cd9af8ab75ea586658bb445c86c7c1fc5de45b_680615216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 69
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Dialogs:modal_preview.html.twig", "BigPandaDevMainBundle:Orders:orders.html.twig", 69);
        $this->blocks = array(
            'modal_id' => array($this, 'block_modal_id'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Dialogs:modal_preview.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4e438ed70acad84ba7abfd6971de532a2f8f50f3953e987638c7b1e6903a44f = $this->env->getExtension("native_profiler");
        $__internal_e4e438ed70acad84ba7abfd6971de532a2f8f50f3953e987638c7b1e6903a44f->enter($__internal_e4e438ed70acad84ba7abfd6971de532a2f8f50f3953e987638c7b1e6903a44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Orders:orders.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e438ed70acad84ba7abfd6971de532a2f8f50f3953e987638c7b1e6903a44f->leave($__internal_e4e438ed70acad84ba7abfd6971de532a2f8f50f3953e987638c7b1e6903a44f_prof);

    }

    // line 70
    public function block_modal_id($context, array $blocks = array())
    {
        $__internal_0cc078fd82f2766559e3cb056a217db1ee1ce47df87a79030e51ba108ce7776d = $this->env->getExtension("native_profiler");
        $__internal_0cc078fd82f2766559e3cb056a217db1ee1ce47df87a79030e51ba108ce7776d->enter($__internal_0cc078fd82f2766559e3cb056a217db1ee1ce47df87a79030e51ba108ce7776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_id"));

        echo "modal-show-order";
        
        $__internal_0cc078fd82f2766559e3cb056a217db1ee1ce47df87a79030e51ba108ce7776d->leave($__internal_0cc078fd82f2766559e3cb056a217db1ee1ce47df87a79030e51ba108ce7776d_prof);

    }

    // line 71
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6647a7af0edcebf17811b416c4e752e74afe6c952b60df65224dc079fa87cb1 = $this->env->getExtension("native_profiler");
        $__internal_c6647a7af0edcebf17811b416c4e752e74afe6c952b60df65224dc079fa87cb1->enter($__internal_c6647a7af0edcebf17811b416c4e752e74afe6c952b60df65224dc079fa87cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order details"), "html", null, true);
        
        $__internal_c6647a7af0edcebf17811b416c4e752e74afe6c952b60df65224dc079fa87cb1->leave($__internal_c6647a7af0edcebf17811b416c4e752e74afe6c952b60df65224dc079fa87cb1_prof);

    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        $__internal_d68fe655aa43c1b9f01a7203d5608f96e423186d7d2643e5ca434910fb11ca69 = $this->env->getExtension("native_profiler");
        $__internal_d68fe655aa43c1b9f01a7203d5608f96e423186d7d2643e5ca434910fb11ca69->enter($__internal_d68fe655aa43c1b9f01a7203d5608f96e423186d7d2643e5ca434910fb11ca69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 73
        echo "            <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Id"), "html", null, true);
        echo ": <span class=\"order-id\"></span></p>
            <p>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name"), "html", null, true);
        echo ": <span class=\"order-name\"></span></p>
            <p>";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date created"), "html", null, true);
        echo ": <span class=\"order-date-created\"></span></p>
            <p>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deadline"), "html", null, true);
        echo ": <span class=\"order-deadline\"></span></p>
        ";
        
        $__internal_d68fe655aa43c1b9f01a7203d5608f96e423186d7d2643e5ca434910fb11ca69->leave($__internal_d68fe655aa43c1b9f01a7203d5608f96e423186d7d2643e5ca434910fb11ca69_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Orders:orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  516 => 76,  512 => 75,  508 => 74,  503 => 73,  497 => 72,  485 => 71,  473 => 70,  448 => 69,  412 => 64,  406 => 63,  394 => 62,  382 => 61,  357 => 60,  324 => 54,  320 => 53,  316 => 52,  312 => 51,  309 => 50,  303 => 49,  294 => 47,  290 => 46,  287 => 45,  281 => 44,  272 => 41,  268 => 40,  265 => 39,  260 => 37,  257 => 36,  255 => 35,  251 => 34,  248 => 33,  242 => 31,  239 => 30,  233 => 29,  224 => 26,  220 => 25,  215 => 24,  209 => 22,  206 => 21,  200 => 20,  186 => 18,  179 => 12,  177 => 17,  175 => 14,  173 => 13,  152 => 12,  102 => 82,  96 => 81,  88 => 69,  85 => 60,  79 => 59,  72 => 12,  62 => 9,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'BigPandaDevMainBundle:Default:layout_table.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <h2>{{ 'Orders'|trans }}</h2>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div>*/
/*         <p><a href="{{ path('_homepage') }}">{{ 'Home'|trans }}</a> / <a href="#">{{ 'Orders'|trans }}</a></p>*/
/*     </div>*/
/*     */
/*     {% embed 'BigPandaDevMainBundle:Crud:table.html.twig' %}*/
/*         {% set route_name = '_order' %}*/
/*         {% set panel_title = 'Orders' %}*/
/*         {#{% set records = null %}#}*/
/* */
/*         {% set table_title = 'Orders'|trans %}*/
/*         {% block no_records_found %}<td colspan=5>{{ parent() }}</td>{% endblock %}*/
/* */
/*         {% block header %}*/
/*             {% if app.user and is_granted('ROLE_ADMIN') %}*/
/*                 <th class="text-center">{{ 'Id'|trans }}</th>*/
/*             {% endif %}*/
/*             <th class="text-center">{{ 'Name'|trans }}</th>*/
/*             <th class="text-center">{{ 'Date created'|trans }}</th>*/
/*             <th class="text-center">{{ 'Deadline'|trans }}</th>*/
/*         {% endblock %}*/
/* */
/*         {% block record %}*/
/*             {% if app.user and is_granted('ROLE_ADMIN') %}*/
/*                 <td class="text-right col-xs-1" style="vertical-align: middle;">{{ record.id|e }}</td>*/
/*             {% endif %}*/
/*             <td class="text-left col-xs-5" style="vertical-align: middle;">*/
/*                 {{ record.name|e }}*/
/*                 {% if record.deleted == 1 %}*/
/*                     <span data-toggle="tooltip"*/
/*                           data-original-title="{{ 'deleted'|trans }}"><i class="fa fa-dot-circle-o delete-info"></i></span>*/
/*                 {% endif %}*/
/*             </td>*/
/*             <td class="text-right col-xs-2" style="vertical-align: middle;">{{ record.datecreated|date('d.m.Y.') }}</td>*/
/*             <td class="text-right  col-xs-2" style="vertical-align: middle;">{{ record.deadline|date('d.m.Y.') }}</td>*/
/*         {% endblock %}*/
/*         */
/*         {% block record_delete_data %}*/
/*             data-target="#modal-confirm-delete"*/
/*             data-order-id="{{ record.id }}"*/
/*             data-order-name="{{ record.name|e }}"*/
/*         {% endblock %}*/
/*         {% block record_show_data %}*/
/*             data-target="#modal-show-order"*/
/*             data-order-id="{{ record.id }}"*/
/*             data-order-name="{{ record.name|e }}"*/
/*             data-order-date-created="{{ record.datecreated|date('d.m.Y.') }}"*/
/*             data-order-deadline="{{ record.deadline|date('d.m.Y.') }}"*/
/*         {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* */
/* {% block dialogs %}*/
/*     {% embed 'BigPandaDevMainBundle:Dialogs:modal_delete_confirm.html.twig' %}*/
/*         {% block modal_id 'modal-confirm-delete' %}*/
/*         {% block title 'Confirm delete'|trans %}*/
/*         {% block body %}*/
/*             <p>{{ 'Are you sure you want to delete order'|trans }} */
/*                 "<span class="order-name" style="font-weight: bold;"></span>" */
/*                 (<span class="order-id"></span>)?</p>*/
/*         {% endblock %}*/
/*     {% endembed %}*/
/*     {% embed 'BigPandaDevMainBundle:Dialogs:modal_preview.html.twig' %}*/
/*         {% block modal_id 'modal-show-order' %}*/
/*         {% block title 'Order details'|trans %}*/
/*         {% block body %}*/
/*             <p>{{ 'Id'|trans }}: <span class="order-id"></span></p>*/
/*             <p>{{ 'Name'|trans }}: <span class="order-name"></span></p>*/
/*             <p>{{ 'Date created'|trans }}: <span class="order-date-created"></span></p>*/
/*             <p>{{ 'Deadline'|trans }}: <span class="order-deadline"></span></p>*/
/*         {% endblock %}*/
/*     {% endembed %}*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/* <script>*/
/* $('#modal-confirm-delete').on('show.bs.modal', function(e) {*/
/*     var order_id = $(e.relatedTarget).data('order-id');*/
/*     var order_name = $(e.relatedTarget).data('order-name');*/
/*     $(e.currentTarget).find('.order-id').text(order_id);*/
/*     $(e.currentTarget).find('.order-name').text(order_name);*/
/* });*/
/* $('#modal-show-order').on('show.bs.modal', function(e) {*/
/*     var order_id = $(e.relatedTarget).data('order-id');*/
/*     var order_name = $(e.relatedTarget).data('order-name');*/
/*     var order_date_created = $(e.relatedTarget).data('order-date-created');*/
/*     var order_deadline = $(e.relatedTarget).data('order-deadline');*/
/*     $(e.currentTarget).find('.order-id').text(order_id);*/
/*     $(e.currentTarget).find('.order-name').text(order_name);*/
/*     $(e.currentTarget).find('.order-date-created').text(order_date_created);*/
/*     $(e.currentTarget).find('.order-deadline').text(order_deadline);*/
/* });*/
/* $("#modal-confirm-delete, #modal-show-order").draggable();*/
/* </script>*/
/* {% endblock %}*/
/* */

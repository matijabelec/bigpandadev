<?php

/* BigPandaDevMainBundle:Dialogs:modal_delete_confirm.html.twig */
class __TwigTemplate_ec8c5aa0723b57d08576386ca55ceed0a3c471f247ac8f86eaf202918e201da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Dialogs:modal.html.twig", "BigPandaDevMainBundle:Dialogs:modal_delete_confirm.html.twig", 1);
        $this->blocks = array(
            'modal_id' => array($this, 'block_modal_id'),
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Dialogs:modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b7d4defca433b42fb38c0ae05d09a1126806305c7d1dcb23c891a178198cb05 = $this->env->getExtension("native_profiler");
        $__internal_7b7d4defca433b42fb38c0ae05d09a1126806305c7d1dcb23c891a178198cb05->enter($__internal_7b7d4defca433b42fb38c0ae05d09a1126806305c7d1dcb23c891a178198cb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Dialogs:modal_delete_confirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b7d4defca433b42fb38c0ae05d09a1126806305c7d1dcb23c891a178198cb05->leave($__internal_7b7d4defca433b42fb38c0ae05d09a1126806305c7d1dcb23c891a178198cb05_prof);

    }

    // line 3
    public function block_modal_id($context, array $blocks = array())
    {
        $__internal_9dfc033f2048130e72db725fa2e7bc7479704991faeb61a5c56dc128176f2e8c = $this->env->getExtension("native_profiler");
        $__internal_9dfc033f2048130e72db725fa2e7bc7479704991faeb61a5c56dc128176f2e8c->enter($__internal_9dfc033f2048130e72db725fa2e7bc7479704991faeb61a5c56dc128176f2e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_id"));

        echo "modal-delete-confirm";
        
        $__internal_9dfc033f2048130e72db725fa2e7bc7479704991faeb61a5c56dc128176f2e8c->leave($__internal_9dfc033f2048130e72db725fa2e7bc7479704991faeb61a5c56dc128176f2e8c_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c9bfb25fc05643dd8a2bfa969e99d11614c59e140a4db1523127644d2611eec = $this->env->getExtension("native_profiler");
        $__internal_5c9bfb25fc05643dd8a2bfa969e99d11614c59e140a4db1523127644d2611eec->enter($__internal_5c9bfb25fc05643dd8a2bfa969e99d11614c59e140a4db1523127644d2611eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <a role=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-close\"></i></a>
    <h4>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
";
        
        $__internal_5c9bfb25fc05643dd8a2bfa969e99d11614c59e140a4db1523127644d2611eec->leave($__internal_5c9bfb25fc05643dd8a2bfa969e99d11614c59e140a4db1523127644d2611eec_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_5493d0c2f7ab1540cb4d20201afa6b6779f944d7444f29201e602f585e9907d2 = $this->env->getExtension("native_profiler");
        $__internal_5493d0c2f7ab1540cb4d20201afa6b6779f944d7444f29201e602f585e9907d2->enter($__internal_5493d0c2f7ab1540cb4d20201afa6b6779f944d7444f29201e602f585e9907d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5493d0c2f7ab1540cb4d20201afa6b6779f944d7444f29201e602f585e9907d2->leave($__internal_5493d0c2f7ab1540cb4d20201afa6b6779f944d7444f29201e602f585e9907d2_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_aede4106c78c9ea91a8aadf86c6ea41bd2c1dc3f1916fd5150c26b75b68d269b = $this->env->getExtension("native_profiler");
        $__internal_aede4106c78c9ea91a8aadf86c6ea41bd2c1dc3f1916fd5150c26b75b68d269b->enter($__internal_aede4106c78c9ea91a8aadf86c6ea41bd2c1dc3f1916fd5150c26b75b68d269b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 11
        echo "    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</button>
    <a class=\"btn btn-danger btn-ok\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Delete"), "html", null, true);
        echo "</a>
";
        
        $__internal_aede4106c78c9ea91a8aadf86c6ea41bd2c1dc3f1916fd5150c26b75b68d269b->leave($__internal_aede4106c78c9ea91a8aadf86c6ea41bd2c1dc3f1916fd5150c26b75b68d269b_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Dialogs:modal_delete_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 12,  83 => 11,  77 => 10,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'BigPandaDevMainBundle:Dialogs:modal.html.twig' %}*/
/* */
/* {% block modal_id %}modal-delete-confirm{% endblock %}*/
/* */
/* {% block head %}*/
/*     <a role="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>*/
/*     <h4>{% block title %}{% endblock %}</h4>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button type="button" class="btn btn-default" data-dismiss="modal">{{ 'Cancel'|trans }}</button>*/
/*     <a class="btn btn-danger btn-ok">{{ 'Delete'|trans }}</a>*/
/* {% endblock %}*/
/* */
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

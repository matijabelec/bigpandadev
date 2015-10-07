<?php

/* BigPandaDevMainBundle:Dialogs:modal.html.twig */
class __TwigTemplate_b4d81aa908c5d7e307249be844e622e9c50c2b64f63aeb27f7ae3b3d0a6dbb6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'modal_id' => array($this, 'block_modal_id'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'footer_container' => array($this, 'block_footer_container'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83a7682dacdf033a6f502d34bc07e708e24de406f50b5cd5f263c850cca48b6b = $this->env->getExtension("native_profiler");
        $__internal_83a7682dacdf033a6f502d34bc07e708e24de406f50b5cd5f263c850cca48b6b->enter($__internal_83a7682dacdf033a6f502d34bc07e708e24de406f50b5cd5f263c850cca48b6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Dialogs:modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"";
        $this->displayBlock('modal_id', $context, $blocks);
        echo "\" tabindex=\"-1\" role=\"dialog\"";
        echo ">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        echo "</div>
            <div class=\"modal-body\">";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
            ";
        // line 6
        $this->displayBlock('footer_container', $context, $blocks);
        // line 11
        echo "        </div>
    </div>
</div>";
        
        $__internal_83a7682dacdf033a6f502d34bc07e708e24de406f50b5cd5f263c850cca48b6b->leave($__internal_83a7682dacdf033a6f502d34bc07e708e24de406f50b5cd5f263c850cca48b6b_prof);

    }

    // line 1
    public function block_modal_id($context, array $blocks = array())
    {
        $__internal_6b26d94bc4dcacb7a019cfbb6a150d423b9732a656c0031b9dd0008d7db5570e = $this->env->getExtension("native_profiler");
        $__internal_6b26d94bc4dcacb7a019cfbb6a150d423b9732a656c0031b9dd0008d7db5570e->enter($__internal_6b26d94bc4dcacb7a019cfbb6a150d423b9732a656c0031b9dd0008d7db5570e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_id"));

        
        $__internal_6b26d94bc4dcacb7a019cfbb6a150d423b9732a656c0031b9dd0008d7db5570e->leave($__internal_6b26d94bc4dcacb7a019cfbb6a150d423b9732a656c0031b9dd0008d7db5570e_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbb40d164ca6c736322ebbf237c2fb124861984a0ad82753b82c67d5da12efc0 = $this->env->getExtension("native_profiler");
        $__internal_fbb40d164ca6c736322ebbf237c2fb124861984a0ad82753b82c67d5da12efc0->enter($__internal_fbb40d164ca6c736322ebbf237c2fb124861984a0ad82753b82c67d5da12efc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fbb40d164ca6c736322ebbf237c2fb124861984a0ad82753b82c67d5da12efc0->leave($__internal_fbb40d164ca6c736322ebbf237c2fb124861984a0ad82753b82c67d5da12efc0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_77f58e81dad3e79bfea8deda57c5042ea22359622668a0fb1b674b0c36313d5a = $this->env->getExtension("native_profiler");
        $__internal_77f58e81dad3e79bfea8deda57c5042ea22359622668a0fb1b674b0c36313d5a->enter($__internal_77f58e81dad3e79bfea8deda57c5042ea22359622668a0fb1b674b0c36313d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_77f58e81dad3e79bfea8deda57c5042ea22359622668a0fb1b674b0c36313d5a->leave($__internal_77f58e81dad3e79bfea8deda57c5042ea22359622668a0fb1b674b0c36313d5a_prof);

    }

    // line 6
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_401ff92cbdd030c363845202ccf27b5c0d8877da2ab1d981633245775cab5b57 = $this->env->getExtension("native_profiler");
        $__internal_401ff92cbdd030c363845202ccf27b5c0d8877da2ab1d981633245775cab5b57->enter($__internal_401ff92cbdd030c363845202ccf27b5c0d8877da2ab1d981633245775cab5b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        // line 7
        echo "                <div class=\"modal-footer\">
                    ";
        // line 8
        $this->displayBlock('footer', $context, $blocks);
        // line 9
        echo "                </div>
            ";
        
        $__internal_401ff92cbdd030c363845202ccf27b5c0d8877da2ab1d981633245775cab5b57->leave($__internal_401ff92cbdd030c363845202ccf27b5c0d8877da2ab1d981633245775cab5b57_prof);

    }

    // line 8
    public function block_footer($context, array $blocks = array())
    {
        $__internal_19a55dc3567434a569c96742956530f33ec7e715152567b89ecafd854820e5fb = $this->env->getExtension("native_profiler");
        $__internal_19a55dc3567434a569c96742956530f33ec7e715152567b89ecafd854820e5fb->enter($__internal_19a55dc3567434a569c96742956530f33ec7e715152567b89ecafd854820e5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_19a55dc3567434a569c96742956530f33ec7e715152567b89ecafd854820e5fb->leave($__internal_19a55dc3567434a569c96742956530f33ec7e715152567b89ecafd854820e5fb_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Dialogs:modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 8,  98 => 9,  96 => 8,  93 => 7,  87 => 6,  76 => 5,  65 => 4,  54 => 1,  45 => 11,  43 => 6,  39 => 5,  35 => 4,  27 => 1,);
    }
}
/* <div class="modal fade" id="{% block modal_id %}{% endblock %}" tabindex="-1" role="dialog"{# aria-labelledby="myModalLabel" aria-hidden="true"#}>*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">{% block head %}{% endblock %}</div>*/
/*             <div class="modal-body">{% block body %}{% endblock %}</div>*/
/*             {% block footer_container %}*/
/*                 <div class="modal-footer">*/
/*                     {% block footer %}{% endblock %}*/
/*                 </div>*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/

<?php

/* BigPandaDevMainBundle:Dialogs:modal_preview.html.twig */
class __TwigTemplate_1aee396d4ca16b6eeefb1c4ea1b20d26e9a5f9c42e756b5851509d1753e709f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Dialogs:modal.html.twig", "BigPandaDevMainBundle:Dialogs:modal_preview.html.twig", 1);
        $this->blocks = array(
            'modal_id' => array($this, 'block_modal_id'),
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'footer_container' => array($this, 'block_footer_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Dialogs:modal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3bbfb65cb7d609c31e57cfc6e6702bee9dbb2d5e96ae111dc8ee3cd41d1549f = $this->env->getExtension("native_profiler");
        $__internal_f3bbfb65cb7d609c31e57cfc6e6702bee9dbb2d5e96ae111dc8ee3cd41d1549f->enter($__internal_f3bbfb65cb7d609c31e57cfc6e6702bee9dbb2d5e96ae111dc8ee3cd41d1549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Dialogs:modal_preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3bbfb65cb7d609c31e57cfc6e6702bee9dbb2d5e96ae111dc8ee3cd41d1549f->leave($__internal_f3bbfb65cb7d609c31e57cfc6e6702bee9dbb2d5e96ae111dc8ee3cd41d1549f_prof);

    }

    // line 3
    public function block_modal_id($context, array $blocks = array())
    {
        $__internal_5108c40a65cc0057c6f0bc3532e25c85d95544041e24ee627b0f676735fead0d = $this->env->getExtension("native_profiler");
        $__internal_5108c40a65cc0057c6f0bc3532e25c85d95544041e24ee627b0f676735fead0d->enter($__internal_5108c40a65cc0057c6f0bc3532e25c85d95544041e24ee627b0f676735fead0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal_id"));

        echo "modal-preview";
        
        $__internal_5108c40a65cc0057c6f0bc3532e25c85d95544041e24ee627b0f676735fead0d->leave($__internal_5108c40a65cc0057c6f0bc3532e25c85d95544041e24ee627b0f676735fead0d_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_22fee4873f4d5bd7fb20125ae96eeefe69a9210049d80402bd6b5745e4df8a6e = $this->env->getExtension("native_profiler");
        $__internal_22fee4873f4d5bd7fb20125ae96eeefe69a9210049d80402bd6b5745e4df8a6e->enter($__internal_22fee4873f4d5bd7fb20125ae96eeefe69a9210049d80402bd6b5745e4df8a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "    <a role=\"button\" class=\"close\" data-dismiss=\"modal\"><i class=\"fa fa-close\"></i></a>
    <h4>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
";
        
        $__internal_22fee4873f4d5bd7fb20125ae96eeefe69a9210049d80402bd6b5745e4df8a6e->leave($__internal_22fee4873f4d5bd7fb20125ae96eeefe69a9210049d80402bd6b5745e4df8a6e_prof);

    }

    public function block_title($context, array $blocks = array())
    {
        $__internal_c0a9d57590d17ac7077ce43e63ffdc717d8674f672edf92df92de96175e8130e = $this->env->getExtension("native_profiler");
        $__internal_c0a9d57590d17ac7077ce43e63ffdc717d8674f672edf92df92de96175e8130e->enter($__internal_c0a9d57590d17ac7077ce43e63ffdc717d8674f672edf92df92de96175e8130e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c0a9d57590d17ac7077ce43e63ffdc717d8674f672edf92df92de96175e8130e->leave($__internal_c0a9d57590d17ac7077ce43e63ffdc717d8674f672edf92df92de96175e8130e_prof);

    }

    // line 10
    public function block_footer_container($context, array $blocks = array())
    {
        $__internal_0b2f5ccbd58e294b2940cbff9e76b9a963f96c9fdcf19c3b9aee12b760b48422 = $this->env->getExtension("native_profiler");
        $__internal_0b2f5ccbd58e294b2940cbff9e76b9a963f96c9fdcf19c3b9aee12b760b48422->enter($__internal_0b2f5ccbd58e294b2940cbff9e76b9a963f96c9fdcf19c3b9aee12b760b48422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_container"));

        
        $__internal_0b2f5ccbd58e294b2940cbff9e76b9a963f96c9fdcf19c3b9aee12b760b48422->leave($__internal_0b2f5ccbd58e294b2940cbff9e76b9a963f96c9fdcf19c3b9aee12b760b48422_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Dialogs:modal_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'BigPandaDevMainBundle:Dialogs:modal.html.twig' %}*/
/* */
/* {% block modal_id %}modal-preview{% endblock %}*/
/* */
/* {% block head %}*/
/*     <a role="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></a>*/
/*     <h4>{% block title %}{% endblock %}</h4>*/
/* {% endblock %}*/
/* */
/* {% block footer_container %}{% endblock %}*/

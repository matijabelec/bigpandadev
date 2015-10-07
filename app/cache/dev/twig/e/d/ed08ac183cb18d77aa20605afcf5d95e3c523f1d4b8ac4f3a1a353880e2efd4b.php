<?php

/* BigPandaDevMainBundle:Orders:order_form.html.twig */
class __TwigTemplate_0cca8d892905e7381ba07c694b88e4f9bbb90c139f6ea94be0274f120c2dda89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Crud:form.html.twig", "BigPandaDevMainBundle:Orders:order_form.html.twig", 1);
        $this->blocks = array(
            'form_title' => array($this, 'block_form_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Crud:form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_956a1ce2296514abd34c8e72ab469b6891dc39bf8087ac2fd2ca8eac05dddfd5 = $this->env->getExtension("native_profiler");
        $__internal_956a1ce2296514abd34c8e72ab469b6891dc39bf8087ac2fd2ca8eac05dddfd5->enter($__internal_956a1ce2296514abd34c8e72ab469b6891dc39bf8087ac2fd2ca8eac05dddfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Orders:order_form.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "BigPandaDevMainBundle:Form:fields_bs.html.twig"));
        // line 3
        $context["back_link"] = $this->env->getExtension('routing')->getPath("_orders");
        // line 5
        $context["form_class"] = "well";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_956a1ce2296514abd34c8e72ab469b6891dc39bf8087ac2fd2ca8eac05dddfd5->leave($__internal_956a1ce2296514abd34c8e72ab469b6891dc39bf8087ac2fd2ca8eac05dddfd5_prof);

    }

    // line 4
    public function block_form_title($context, array $blocks = array())
    {
        $__internal_1255724521f9d0344e2121e13442c909e31ac14115b2ba71a5a40744e9f4f707 = $this->env->getExtension("native_profiler");
        $__internal_1255724521f9d0344e2121e13442c909e31ac14115b2ba71a5a40744e9f4f707->enter($__internal_1255724521f9d0344e2121e13442c909e31ac14115b2ba71a5a40744e9f4f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order details"), "html", null, true);
        
        $__internal_1255724521f9d0344e2121e13442c909e31ac14115b2ba71a5a40744e9f4f707->leave($__internal_1255724521f9d0344e2121e13442c909e31ac14115b2ba71a5a40744e9f4f707_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Orders:order_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  34 => 1,  32 => 5,  30 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'BigPandaDevMainBundle:Crud:form.html.twig' %}*/
/* {% form_theme form 'BigPandaDevMainBundle:Form:fields_bs.html.twig' %}*/
/* {% set back_link = path('_orders') %}*/
/* {% block form_title %}{{ 'Order details'|trans }}{% endblock %}*/
/* {% set form_class = 'well' %}*/
/* */

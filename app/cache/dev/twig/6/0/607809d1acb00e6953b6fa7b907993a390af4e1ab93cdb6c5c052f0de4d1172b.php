<?php

/* BigPandaDevMainBundle:Orders:order.html.twig */
class __TwigTemplate_dcbd2bd7a4eb1428e0f27f9c4e1a0eb723abb0aa78451fa269297f9cc0c6293d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Default:layout_form.html.twig", "BigPandaDevMainBundle:Orders:order.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Default:layout_form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d32fc434cbe7cc990d52aa9c8603421538e66e5bfde9a379261c6bafa5b521c = $this->env->getExtension("native_profiler");
        $__internal_6d32fc434cbe7cc990d52aa9c8603421538e66e5bfde9a379261c6bafa5b521c->enter($__internal_6d32fc434cbe7cc990d52aa9c8603421538e66e5bfde9a379261c6bafa5b521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Orders:order.html.twig"));

        // line 2
        $context["back_link"] = $this->env->getExtension('routing')->getPath("_orders");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d32fc434cbe7cc990d52aa9c8603421538e66e5bfde9a379261c6bafa5b521c->leave($__internal_6d32fc434cbe7cc990d52aa9c8603421538e66e5bfde9a379261c6bafa5b521c_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_196f9f12fc2cf28ece7374742aea1ffafd2ce720bbfa9449148a82582ee292c7 = $this->env->getExtension("native_profiler");
        $__internal_196f9f12fc2cf28ece7374742aea1ffafd2ce720bbfa9449148a82582ee292c7->enter($__internal_196f9f12fc2cf28ece7374742aea1ffafd2ce720bbfa9449148a82582ee292c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order details"), "html", null, true);
        echo "</h2>
";
        
        $__internal_196f9f12fc2cf28ece7374742aea1ffafd2ce720bbfa9449148a82582ee292c7->leave($__internal_196f9f12fc2cf28ece7374742aea1ffafd2ce720bbfa9449148a82582ee292c7_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_a563c59b0c0339afd80868c86406e40eda9a377f91274278beb974dd1906d773 = $this->env->getExtension("native_profiler");
        $__internal_a563c59b0c0339afd80868c86406e40eda9a377f91274278beb974dd1906d773->enter($__internal_a563c59b0c0339afd80868c86406e40eda9a377f91274278beb974dd1906d773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div>
        <p><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "</a> / <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["back_link"]) ? $context["back_link"] : $this->getContext($context, "back_link")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Orders"), "html", null, true);
        echo "</a> / <a href=\"#\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order details"), "html", null, true);
        echo "</a></p>
    </div>
    
    ";
        // line 13
        if (array_key_exists("form", $context)) {
            // line 14
            echo "        ";
            $this->loadTemplate("BigPandaDevMainBundle:Orders:order_form.html.twig", "BigPandaDevMainBundle:Orders:order.html.twig", 14)->display($context);
            // line 15
            echo "    ";
        } else {
            // line 16
            echo "        ";
            $this->loadTemplate("BigPandaDevMainBundle:Orders:order.html.twig", "BigPandaDevMainBundle:Orders:order.html.twig", 16, "1569714340")->display($context);
            // line 28
            echo "    ";
        }
        
        $__internal_a563c59b0c0339afd80868c86406e40eda9a377f91274278beb974dd1906d773->leave($__internal_a563c59b0c0339afd80868c86406e40eda9a377f91274278beb974dd1906d773_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Orders:order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  63 => 10,  60 => 9,  54 => 8,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
    }
}


/* BigPandaDevMainBundle:Orders:order.html.twig */
class __TwigTemplate_dcbd2bd7a4eb1428e0f27f9c4e1a0eb723abb0aa78451fa269297f9cc0c6293d_1569714340 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("BigPandaDevMainBundle:Crud:read.html.twig", "BigPandaDevMainBundle:Orders:order.html.twig", 16);
        $this->blocks = array(
            'read_title' => array($this, 'block_read_title'),
            'record' => array($this, 'block_record'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BigPandaDevMainBundle:Crud:read.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87a06f2cf5380328efd8d3239c4d8c367b036c11b714419bc4435a12a44d9808 = $this->env->getExtension("native_profiler");
        $__internal_87a06f2cf5380328efd8d3239c4d8c367b036c11b714419bc4435a12a44d9808->enter($__internal_87a06f2cf5380328efd8d3239c4d8c367b036c11b714419bc4435a12a44d9808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Orders:order.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87a06f2cf5380328efd8d3239c4d8c367b036c11b714419bc4435a12a44d9808->leave($__internal_87a06f2cf5380328efd8d3239c4d8c367b036c11b714419bc4435a12a44d9808_prof);

    }

    // line 17
    public function block_read_title($context, array $blocks = array())
    {
        $__internal_712ed9f5b0cac74680271271bc2c07d45fe4d6aae43fae3138012c55e548fc81 = $this->env->getExtension("native_profiler");
        $__internal_712ed9f5b0cac74680271271bc2c07d45fe4d6aae43fae3138012c55e548fc81->enter($__internal_712ed9f5b0cac74680271271bc2c07d45fe4d6aae43fae3138012c55e548fc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "read_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Order details"), "html", null, true);
        
        $__internal_712ed9f5b0cac74680271271bc2c07d45fe4d6aae43fae3138012c55e548fc81->leave($__internal_712ed9f5b0cac74680271271bc2c07d45fe4d6aae43fae3138012c55e548fc81_prof);

    }

    // line 18
    public function block_record($context, array $blocks = array())
    {
        $__internal_2da2d9ef67de422001fafe8d332eb17ebf1ad39830a59b2772bbe8eaf95a4723 = $this->env->getExtension("native_profiler");
        $__internal_2da2d9ef67de422001fafe8d332eb17ebf1ad39830a59b2772bbe8eaf95a4723->enter($__internal_2da2d9ef67de422001fafe8d332eb17ebf1ad39830a59b2772bbe8eaf95a4723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record"));

        // line 19
        echo "                ";
        if ((array_key_exists("order", $context) &&  !(null === (isset($context["order"]) ? $context["order"] : $this->getContext($context, "order"))))) {
            // line 20
            echo "                    <h2>#";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "id", array()), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "name", array()));
            echo "</h2>
                    <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Date created"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "datecreated", array()), "d.m.Y."), "html", null, true);
            echo "</p>
                    <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Deadline"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_template_get_attributes($this, (isset($context["order"]) ? $context["order"] : $this->getContext($context, "order")), "deadline", array()), "d.m.Y."), "html", null, true);
            echo "</p>
                ";
        } else {
            // line 24
            echo "                    <p>No order with that id found!</p>
                ";
        }
        // line 26
        echo "            ";
        
        $__internal_2da2d9ef67de422001fafe8d332eb17ebf1ad39830a59b2772bbe8eaf95a4723->leave($__internal_2da2d9ef67de422001fafe8d332eb17ebf1ad39830a59b2772bbe8eaf95a4723_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Orders:order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 26,  185 => 24,  178 => 22,  172 => 21,  165 => 20,  162 => 19,  156 => 18,  144 => 17,  120 => 16,  88 => 28,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  63 => 10,  60 => 9,  54 => 8,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'BigPandaDevMainBundle:Default:layout_form.html.twig' %}*/
/* {% set back_link = path('_orders') %}*/
/* */
/* {% block head %}*/
/*     <h2>{{ 'Order details'|trans }}</h2>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div>*/
/*         <p><a href="{{ path('_homepage') }}">{{ 'Home'|trans }}</a> / <a href="{{ back_link }}">{{ 'Orders'|trans }}</a> / <a href="#">{{ 'Order details'|trans }}</a></p>*/
/*     </div>*/
/*     */
/*     {% if form is defined %}*/
/*         {% include 'BigPandaDevMainBundle:Orders:order_form.html.twig' %}*/
/*     {% else %}*/
/*         {% embed "BigPandaDevMainBundle:Crud:read.html.twig" %}*/
/*             {% block read_title %}{{ 'Order details'|trans }}{% endblock %}*/
/*             {% block record %}*/
/*                 {% if order is defined and order is not null %}*/
/*                     <h2>#{{ order.id }}: {{ order.name|e }}</h2>*/
/*                     <p>{{ 'Date created'|trans }}: {{ order.datecreated|date('d.m.Y.') }}</p>*/
/*                     <p>{{ 'Deadline'|trans }}: {{ order.deadline|date('d.m.Y.') }}</p>*/
/*                 {% else %}*/
/*                     <p>No order with that id found!</p>*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*         {% endembed %}*/
/*     {% endif %}*/
/* {% endblock %}*/

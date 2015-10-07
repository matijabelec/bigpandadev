<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_cd985ea43151c7bf1aee7f6d16e0cbf2f82fa07b6ebfbd3673a2ba28a7fd9178 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b0b13778208f2f0c4c07c09d2abdbfdabbda588cc4de26cff8c9c50e5cb6cc8 = $this->env->getExtension("native_profiler");
        $__internal_6b0b13778208f2f0c4c07c09d2abdbfdabbda588cc4de26cff8c9c50e5cb6cc8->enter($__internal_6b0b13778208f2f0c4c07c09d2abdbfdabbda588cc4de26cff8c9c50e5cb6cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6b0b13778208f2f0c4c07c09d2abdbfdabbda588cc4de26cff8c9c50e5cb6cc8->leave($__internal_6b0b13778208f2f0c4c07c09d2abdbfdabbda588cc4de26cff8c9c50e5cb6cc8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include 'TwigBundle:Exception:trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */

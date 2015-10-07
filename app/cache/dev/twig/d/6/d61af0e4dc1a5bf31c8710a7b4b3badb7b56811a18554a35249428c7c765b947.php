<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_87deb22eb0936572aaca197995a40be372b66b3ea3233ea8e6b2b6907f4f1c7d extends Twig_Template
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
        $__internal_c25d4c41aeae1f4b11298071adf3313de85e3ddc599b23bdf8b5d6eae0eea267 = $this->env->getExtension("native_profiler");
        $__internal_c25d4c41aeae1f4b11298071adf3313de85e3ddc599b23bdf8b5d6eae0eea267->enter($__internal_c25d4c41aeae1f4b11298071adf3313de85e3ddc599b23bdf8b5d6eae0eea267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:logs.html.twig"));

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if ((twig_template_get_attributes($this, $context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif ((twig_template_get_attributes($this, $context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_template_get_attributes($this, $context["log"], "message", array()), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
        $__internal_c25d4c41aeae1f4b11298071adf3313de85e3ddc599b23bdf8b5d6eae0eea267->leave($__internal_c25d4c41aeae1f4b11298071adf3313de85e3ddc599b23bdf8b5d6eae0eea267_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  38 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ol class="traces logs">*/
/*     {% for log in logs %}*/
/*         <li{% if log.priority >= 400 %} class="error"{% elseif log.priority >= 300 %} class="warning"{% endif %}>*/
/*             {{ log.priorityName }} - {{ log.message }}*/
/*         </li>*/
/*     {% endfor %}*/
/* </ol>*/
/* */

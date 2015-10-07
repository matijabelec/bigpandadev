<?php

/* BigPandaDevMainBundle:Crud:read.html.twig */
class __TwigTemplate_89e2831d4d4dc4fc961f7fdf04685875c278419dac006111057ceba6e21d17ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'crud_read' => array($this, 'block_crud_read'),
            'read_title' => array($this, 'block_read_title'),
            'record' => array($this, 'block_record'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74fc0561fc63250e09f52f797f7f4ab04e948f744cd0d6b6bc5ef30f0d87e432 = $this->env->getExtension("native_profiler");
        $__internal_74fc0561fc63250e09f52f797f7f4ab04e948f744cd0d6b6bc5ef30f0d87e432->enter($__internal_74fc0561fc63250e09f52f797f7f4ab04e948f744cd0d6b6bc5ef30f0d87e432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BigPandaDevMainBundle:Crud:read.html.twig"));

        // line 2
        $this->displayBlock('crud_read', $context, $blocks);
        
        $__internal_74fc0561fc63250e09f52f797f7f4ab04e948f744cd0d6b6bc5ef30f0d87e432->leave($__internal_74fc0561fc63250e09f52f797f7f4ab04e948f744cd0d6b6bc5ef30f0d87e432_prof);

    }

    public function block_crud_read($context, array $blocks = array())
    {
        $__internal_0a03bfc1ac4fdcfdcbdae506e4b1995a941a9e94e3928bfc004bc1679f8e1892 = $this->env->getExtension("native_profiler");
        $__internal_0a03bfc1ac4fdcfdcbdae506e4b1995a941a9e94e3928bfc004bc1679f8e1892->enter($__internal_0a03bfc1ac4fdcfdcbdae506e4b1995a941a9e94e3928bfc004bc1679f8e1892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "crud_read"));

        // line 3
        echo "    <h2>";
        $this->displayBlock('read_title', $context, $blocks);
        echo "</h2>    

    <hr />

    <div class=\"row\">
        <div class=\"panel-body ";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("read_class", $context)) ? (_twig_default_filter((isset($context["read_class"]) ? $context["read_class"] : $this->getContext($context, "read_class")), "")) : ("")), "html", null, true);
        echo "\">
            ";
        // line 9
        $this->displayBlock('record', $context, $blocks);
        // line 10
        echo "
            <hr />

            <div class=\"row\">
                <div class=\"col-sm-10 col-sm-offset-1\">
                    ";
        // line 15
        if (array_key_exists("back_link", $context)) {
            // line 16
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["back_link"]) ? $context["back_link"] : $this->getContext($context, "back_link")), "html", null, true);
            echo "\" class=\"btn btn-warning\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Back"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 18
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_0a03bfc1ac4fdcfdcbdae506e4b1995a941a9e94e3928bfc004bc1679f8e1892->leave($__internal_0a03bfc1ac4fdcfdcbdae506e4b1995a941a9e94e3928bfc004bc1679f8e1892_prof);

    }

    // line 3
    public function block_read_title($context, array $blocks = array())
    {
        $__internal_fa0263902314f6b5920dd056d3ead2ae1523054d72594063246ebd5d821b7706 = $this->env->getExtension("native_profiler");
        $__internal_fa0263902314f6b5920dd056d3ead2ae1523054d72594063246ebd5d821b7706->enter($__internal_fa0263902314f6b5920dd056d3ead2ae1523054d72594063246ebd5d821b7706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "read_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Details"), "html", null, true);
        
        $__internal_fa0263902314f6b5920dd056d3ead2ae1523054d72594063246ebd5d821b7706->leave($__internal_fa0263902314f6b5920dd056d3ead2ae1523054d72594063246ebd5d821b7706_prof);

    }

    // line 9
    public function block_record($context, array $blocks = array())
    {
        $__internal_9b1e489064cc07f016b53968c6e50692ff5f659721d0d8ae4aa9493a0586d414 = $this->env->getExtension("native_profiler");
        $__internal_9b1e489064cc07f016b53968c6e50692ff5f659721d0d8ae4aa9493a0586d414->enter($__internal_9b1e489064cc07f016b53968c6e50692ff5f659721d0d8ae4aa9493a0586d414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "record"));

        
        $__internal_9b1e489064cc07f016b53968c6e50692ff5f659721d0d8ae4aa9493a0586d414->leave($__internal_9b1e489064cc07f016b53968c6e50692ff5f659721d0d8ae4aa9493a0586d414_prof);

    }

    public function getTemplateName()
    {
        return "BigPandaDevMainBundle:Crud:read.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 9,  80 => 3,  69 => 18,  61 => 16,  59 => 15,  52 => 10,  50 => 9,  46 => 8,  37 => 3,  25 => 2,);
    }
}
/* {# BigPandaDevMainBundle:Crud:read.html.twig #}*/
/* {% block crud_read %}*/
/*     <h2>{% block read_title %}{{ 'Details'|trans }}{% endblock %}</h2>    */
/* */
/*     <hr />*/
/* */
/*     <div class="row">*/
/*         <div class="panel-body {{ read_class|default('') }}">*/
/*             {% block record %}{% endblock %}*/
/* */
/*             <hr />*/
/* */
/*             <div class="row">*/
/*                 <div class="col-sm-10 col-sm-offset-1">*/
/*                     {% if back_link is defined %}*/
/*                         <a href="{{ back_link }}" class="btn btn-warning">{{ 'Back'|trans }}</a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

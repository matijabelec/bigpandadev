<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2d3da2cd1a497284a54bbb2f701138e75d47b6d3d246dcb5e09c63b64fb95e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c623db32c7e0452db96a06d9fd42d70e34afe9e59a8511afe835380a114ea6f = $this->env->getExtension("native_profiler");
        $__internal_3c623db32c7e0452db96a06d9fd42d70e34afe9e59a8511afe835380a114ea6f->enter($__internal_3c623db32c7e0452db96a06d9fd42d70e34afe9e59a8511afe835380a114ea6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c623db32c7e0452db96a06d9fd42d70e34afe9e59a8511afe835380a114ea6f->leave($__internal_3c623db32c7e0452db96a06d9fd42d70e34afe9e59a8511afe835380a114ea6f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f40ea0733603c4b4960aace4430ffc609361c4aabeb386cf4bc398530cc50242 = $this->env->getExtension("native_profiler");
        $__internal_f40ea0733603c4b4960aace4430ffc609361c4aabeb386cf4bc398530cc50242->enter($__internal_f40ea0733603c4b4960aace4430ffc609361c4aabeb386cf4bc398530cc50242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f40ea0733603c4b4960aace4430ffc609361c4aabeb386cf4bc398530cc50242->leave($__internal_f40ea0733603c4b4960aace4430ffc609361c4aabeb386cf4bc398530cc50242_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0af0236058dbfb60a7b3a1ea3491ad2cc6519146099b2c436d9e908e7d2511eb = $this->env->getExtension("native_profiler");
        $__internal_0af0236058dbfb60a7b3a1ea3491ad2cc6519146099b2c436d9e908e7d2511eb->enter($__internal_0af0236058dbfb60a7b3a1ea3491ad2cc6519146099b2c436d9e908e7d2511eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_template_get_attributes($this, (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0af0236058dbfb60a7b3a1ea3491ad2cc6519146099b2c436d9e908e7d2511eb->leave($__internal_0af0236058dbfb60a7b3a1ea3491ad2cc6519146099b2c436d9e908e7d2511eb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_16739bad0630726213a45fbc52c29d1998d96ff2e3deb0a3f8d8a70708dbe1d9 = $this->env->getExtension("native_profiler");
        $__internal_16739bad0630726213a45fbc52c29d1998d96ff2e3deb0a3f8d8a70708dbe1d9->enter($__internal_16739bad0630726213a45fbc52c29d1998d96ff2e3deb0a3f8d8a70708dbe1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_16739bad0630726213a45fbc52c29d1998d96ff2e3deb0a3f8d8a70708dbe1d9->leave($__internal_16739bad0630726213a45fbc52c29d1998d96ff2e3deb0a3f8d8a70708dbe1d9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

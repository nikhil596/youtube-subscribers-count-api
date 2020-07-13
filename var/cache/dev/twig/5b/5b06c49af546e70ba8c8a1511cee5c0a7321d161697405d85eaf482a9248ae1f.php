<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_70d7860a9e9fd94ebf4ae6454bd710098bcea16ac1411644053614500e7e11ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de9340f5ccee96941f0a8afbe67e821956e4cf87688349a7c65a77a82d98d161 = $this->env->getExtension("native_profiler");
        $__internal_de9340f5ccee96941f0a8afbe67e821956e4cf87688349a7c65a77a82d98d161->enter($__internal_de9340f5ccee96941f0a8afbe67e821956e4cf87688349a7c65a77a82d98d161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de9340f5ccee96941f0a8afbe67e821956e4cf87688349a7c65a77a82d98d161->leave($__internal_de9340f5ccee96941f0a8afbe67e821956e4cf87688349a7c65a77a82d98d161_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d7493d1c8c9caa468a205eb2a49cc24b1b2d00a2badede97379a6dfbe35ba10 = $this->env->getExtension("native_profiler");
        $__internal_4d7493d1c8c9caa468a205eb2a49cc24b1b2d00a2badede97379a6dfbe35ba10->enter($__internal_4d7493d1c8c9caa468a205eb2a49cc24b1b2d00a2badede97379a6dfbe35ba10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4d7493d1c8c9caa468a205eb2a49cc24b1b2d00a2badede97379a6dfbe35ba10->leave($__internal_4d7493d1c8c9caa468a205eb2a49cc24b1b2d00a2badede97379a6dfbe35ba10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3da60c64771c673b7b29309e1cf72d8ee540203d372771ee696a75dffec20b26 = $this->env->getExtension("native_profiler");
        $__internal_3da60c64771c673b7b29309e1cf72d8ee540203d372771ee696a75dffec20b26->enter($__internal_3da60c64771c673b7b29309e1cf72d8ee540203d372771ee696a75dffec20b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3da60c64771c673b7b29309e1cf72d8ee540203d372771ee696a75dffec20b26->leave($__internal_3da60c64771c673b7b29309e1cf72d8ee540203d372771ee696a75dffec20b26_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f87b247f7725fab668a12b8622461b1e33ee54bb8c0ec582d25c84273f19425 = $this->env->getExtension("native_profiler");
        $__internal_9f87b247f7725fab668a12b8622461b1e33ee54bb8c0ec582d25c84273f19425->enter($__internal_9f87b247f7725fab668a12b8622461b1e33ee54bb8c0ec582d25c84273f19425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9f87b247f7725fab668a12b8622461b1e33ee54bb8c0ec582d25c84273f19425->leave($__internal_9f87b247f7725fab668a12b8622461b1e33ee54bb8c0ec582d25c84273f19425_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

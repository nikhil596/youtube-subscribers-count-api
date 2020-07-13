<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6462a37a38e03c4c90f2c252e44963bfd24c40b7dbcb3a0bfe615cf654a65bff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_290d43806315e1a0ee359154c3ea19d06b41539a690dbb18f8326d5de83ca541 = $this->env->getExtension("native_profiler");
        $__internal_290d43806315e1a0ee359154c3ea19d06b41539a690dbb18f8326d5de83ca541->enter($__internal_290d43806315e1a0ee359154c3ea19d06b41539a690dbb18f8326d5de83ca541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_290d43806315e1a0ee359154c3ea19d06b41539a690dbb18f8326d5de83ca541->leave($__internal_290d43806315e1a0ee359154c3ea19d06b41539a690dbb18f8326d5de83ca541_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bed17d28312ff120e1cf01ce71909b875e7aedde06c7bb53db6fa1d5c768fb33 = $this->env->getExtension("native_profiler");
        $__internal_bed17d28312ff120e1cf01ce71909b875e7aedde06c7bb53db6fa1d5c768fb33->enter($__internal_bed17d28312ff120e1cf01ce71909b875e7aedde06c7bb53db6fa1d5c768fb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bed17d28312ff120e1cf01ce71909b875e7aedde06c7bb53db6fa1d5c768fb33->leave($__internal_bed17d28312ff120e1cf01ce71909b875e7aedde06c7bb53db6fa1d5c768fb33_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_37636ef068a7531c1ef9ea94ec2ee5967f70762c312adb861a48aee2f6c759be = $this->env->getExtension("native_profiler");
        $__internal_37636ef068a7531c1ef9ea94ec2ee5967f70762c312adb861a48aee2f6c759be->enter($__internal_37636ef068a7531c1ef9ea94ec2ee5967f70762c312adb861a48aee2f6c759be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37636ef068a7531c1ef9ea94ec2ee5967f70762c312adb861a48aee2f6c759be->leave($__internal_37636ef068a7531c1ef9ea94ec2ee5967f70762c312adb861a48aee2f6c759be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d912fb469188f8a228228c0f6c4b98fff71de27b0582b31fb277bac45fad613c = $this->env->getExtension("native_profiler");
        $__internal_d912fb469188f8a228228c0f6c4b98fff71de27b0582b31fb277bac45fad613c->enter($__internal_d912fb469188f8a228228c0f6c4b98fff71de27b0582b31fb277bac45fad613c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d912fb469188f8a228228c0f6c4b98fff71de27b0582b31fb277bac45fad613c->leave($__internal_d912fb469188f8a228228c0f6c4b98fff71de27b0582b31fb277bac45fad613c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

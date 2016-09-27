<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_03a06fc576163237010778ab520fa67f6345eea35dbdcfe1925f2bdd9694eb09 extends Twig_Template
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
        $__internal_5d3115a5dd16d65c682dab6b45ca031420b0f7173965566cb16998fa99f06319 = $this->env->getExtension("native_profiler");
        $__internal_5d3115a5dd16d65c682dab6b45ca031420b0f7173965566cb16998fa99f06319->enter($__internal_5d3115a5dd16d65c682dab6b45ca031420b0f7173965566cb16998fa99f06319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d3115a5dd16d65c682dab6b45ca031420b0f7173965566cb16998fa99f06319->leave($__internal_5d3115a5dd16d65c682dab6b45ca031420b0f7173965566cb16998fa99f06319_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ca6ac73165be506de141795614c3bdebd418192051b8931fec5d57ec90b0779 = $this->env->getExtension("native_profiler");
        $__internal_8ca6ac73165be506de141795614c3bdebd418192051b8931fec5d57ec90b0779->enter($__internal_8ca6ac73165be506de141795614c3bdebd418192051b8931fec5d57ec90b0779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8ca6ac73165be506de141795614c3bdebd418192051b8931fec5d57ec90b0779->leave($__internal_8ca6ac73165be506de141795614c3bdebd418192051b8931fec5d57ec90b0779_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fb37f458fcebd0a478d2899f922fcb357470a13608227344e52d06a0a8c52c2e = $this->env->getExtension("native_profiler");
        $__internal_fb37f458fcebd0a478d2899f922fcb357470a13608227344e52d06a0a8c52c2e->enter($__internal_fb37f458fcebd0a478d2899f922fcb357470a13608227344e52d06a0a8c52c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb37f458fcebd0a478d2899f922fcb357470a13608227344e52d06a0a8c52c2e->leave($__internal_fb37f458fcebd0a478d2899f922fcb357470a13608227344e52d06a0a8c52c2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4123902c935ee98dd43ec05979a2280fd43bfee51e996e54745f868ead534c26 = $this->env->getExtension("native_profiler");
        $__internal_4123902c935ee98dd43ec05979a2280fd43bfee51e996e54745f868ead534c26->enter($__internal_4123902c935ee98dd43ec05979a2280fd43bfee51e996e54745f868ead534c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4123902c935ee98dd43ec05979a2280fd43bfee51e996e54745f868ead534c26->leave($__internal_4123902c935ee98dd43ec05979a2280fd43bfee51e996e54745f868ead534c26_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}

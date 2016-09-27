<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9d21d66af9dab8ccdd5729d178616860cd5f51f9ffbc83ffb664ed9ed8358589 extends Twig_Template
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
        $__internal_cb988dd655f6fdb0fede3d544ce11123d1b86c05619a86add0790f35e8cbcb79 = $this->env->getExtension("native_profiler");
        $__internal_cb988dd655f6fdb0fede3d544ce11123d1b86c05619a86add0790f35e8cbcb79->enter($__internal_cb988dd655f6fdb0fede3d544ce11123d1b86c05619a86add0790f35e8cbcb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb988dd655f6fdb0fede3d544ce11123d1b86c05619a86add0790f35e8cbcb79->leave($__internal_cb988dd655f6fdb0fede3d544ce11123d1b86c05619a86add0790f35e8cbcb79_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b60af154096365f4cedb568a6656b6e4b071812e71b2236e204fa5f59c56628 = $this->env->getExtension("native_profiler");
        $__internal_3b60af154096365f4cedb568a6656b6e4b071812e71b2236e204fa5f59c56628->enter($__internal_3b60af154096365f4cedb568a6656b6e4b071812e71b2236e204fa5f59c56628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3b60af154096365f4cedb568a6656b6e4b071812e71b2236e204fa5f59c56628->leave($__internal_3b60af154096365f4cedb568a6656b6e4b071812e71b2236e204fa5f59c56628_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f576fe5c3d0ce12cc0f2ad3d2d4580ce5c7c243792f62c15887c18126cc39256 = $this->env->getExtension("native_profiler");
        $__internal_f576fe5c3d0ce12cc0f2ad3d2d4580ce5c7c243792f62c15887c18126cc39256->enter($__internal_f576fe5c3d0ce12cc0f2ad3d2d4580ce5c7c243792f62c15887c18126cc39256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f576fe5c3d0ce12cc0f2ad3d2d4580ce5c7c243792f62c15887c18126cc39256->leave($__internal_f576fe5c3d0ce12cc0f2ad3d2d4580ce5c7c243792f62c15887c18126cc39256_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17feaf5bac51e1c112a7672e12c54c7698b60d9a28f064ec02f2950cd49308a0 = $this->env->getExtension("native_profiler");
        $__internal_17feaf5bac51e1c112a7672e12c54c7698b60d9a28f064ec02f2950cd49308a0->enter($__internal_17feaf5bac51e1c112a7672e12c54c7698b60d9a28f064ec02f2950cd49308a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17feaf5bac51e1c112a7672e12c54c7698b60d9a28f064ec02f2950cd49308a0->leave($__internal_17feaf5bac51e1c112a7672e12c54c7698b60d9a28f064ec02f2950cd49308a0_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}

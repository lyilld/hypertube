<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_cdbbae9aa009ac43c8b4f2317fcf5a26d6561fb21a6da35324735539b619557f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CoreBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c6f5b47e4fa8124cee42d3b0e80fc83eca5c3debafaa8523dd8ba90cee1953d = $this->env->getExtension("native_profiler");
        $__internal_2c6f5b47e4fa8124cee42d3b0e80fc83eca5c3debafaa8523dd8ba90cee1953d->enter($__internal_2c6f5b47e4fa8124cee42d3b0e80fc83eca5c3debafaa8523dd8ba90cee1953d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c6f5b47e4fa8124cee42d3b0e80fc83eca5c3debafaa8523dd8ba90cee1953d->leave($__internal_2c6f5b47e4fa8124cee42d3b0e80fc83eca5c3debafaa8523dd8ba90cee1953d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cc5652f3543fd0008131eb86c682b82df8dc36adff70657c9d196fca2d8ae95 = $this->env->getExtension("native_profiler");
        $__internal_2cc5652f3543fd0008131eb86c682b82df8dc36adff70657c9d196fca2d8ae95->enter($__internal_2cc5652f3543fd0008131eb86c682b82df8dc36adff70657c9d196fca2d8ae95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_2cc5652f3543fd0008131eb86c682b82df8dc36adff70657c9d196fca2d8ae95->leave($__internal_2cc5652f3543fd0008131eb86c682b82df8dc36adff70657c9d196fca2d8ae95_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_0a93d0dc7dc8effe1239cf8c3d7c14ce09319f23935ac8ba186417b706cf2baa = $this->env->getExtension("native_profiler");
        $__internal_0a93d0dc7dc8effe1239cf8c3d7c14ce09319f23935ac8ba186417b706cf2baa->enter($__internal_0a93d0dc7dc8effe1239cf8c3d7c14ce09319f23935ac8ba186417b706cf2baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0a93d0dc7dc8effe1239cf8c3d7c14ce09319f23935ac8ba186417b706cf2baa->leave($__internal_0a93d0dc7dc8effe1239cf8c3d7c14ce09319f23935ac8ba186417b706cf2baa_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* {{ render(controller("FOSUserBundle:Security:LoginBis")) }}*/
/* {% block content %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */

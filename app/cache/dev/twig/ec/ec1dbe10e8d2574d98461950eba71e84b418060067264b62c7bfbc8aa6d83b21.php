<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_8ae412da9fee23cd1f2b411ff08654673e328fec4600f6152053fdc4bf0d7aa5 extends Twig_Template
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
        $__internal_38a9c83dd634b589f61b1294a7327e3a392226db8f90075f864fbbde3ddf85a5 = $this->env->getExtension("native_profiler");
        $__internal_38a9c83dd634b589f61b1294a7327e3a392226db8f90075f864fbbde3ddf85a5->enter($__internal_38a9c83dd634b589f61b1294a7327e3a392226db8f90075f864fbbde3ddf85a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38a9c83dd634b589f61b1294a7327e3a392226db8f90075f864fbbde3ddf85a5->leave($__internal_38a9c83dd634b589f61b1294a7327e3a392226db8f90075f864fbbde3ddf85a5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8a33768c003eb6e404b1d7e1849c6c1bbf4faef698a826b56093c37e98b8aa4 = $this->env->getExtension("native_profiler");
        $__internal_e8a33768c003eb6e404b1d7e1849c6c1bbf4faef698a826b56093c37e98b8aa4->enter($__internal_e8a33768c003eb6e404b1d7e1849c6c1bbf4faef698a826b56093c37e98b8aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_e8a33768c003eb6e404b1d7e1849c6c1bbf4faef698a826b56093c37e98b8aa4->leave($__internal_e8a33768c003eb6e404b1d7e1849c6c1bbf4faef698a826b56093c37e98b8aa4_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_965e9e5172a33c38264b18ec3c3d21613d3ee370ae99f6248439e1a6eb9ea8bd = $this->env->getExtension("native_profiler");
        $__internal_965e9e5172a33c38264b18ec3c3d21613d3ee370ae99f6248439e1a6eb9ea8bd->enter($__internal_965e9e5172a33c38264b18ec3c3d21613d3ee370ae99f6248439e1a6eb9ea8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_965e9e5172a33c38264b18ec3c3d21613d3ee370ae99f6248439e1a6eb9ea8bd->leave($__internal_965e9e5172a33c38264b18ec3c3d21613d3ee370ae99f6248439e1a6eb9ea8bd_prof);

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

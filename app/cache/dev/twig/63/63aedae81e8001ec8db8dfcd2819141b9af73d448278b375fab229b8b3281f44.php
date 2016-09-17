<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_2a1cbd5cdae4b8168581db249451a7911b7d6672e540f4222843ac384a70cbc7 extends Twig_Template
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
        $__internal_3b7c5c6a27b2dd0351ceec0c98f864e9c9b190d0c0e319dcd502cd8c736a4f1c = $this->env->getExtension("native_profiler");
        $__internal_3b7c5c6a27b2dd0351ceec0c98f864e9c9b190d0c0e319dcd502cd8c736a4f1c->enter($__internal_3b7c5c6a27b2dd0351ceec0c98f864e9c9b190d0c0e319dcd502cd8c736a4f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7c5c6a27b2dd0351ceec0c98f864e9c9b190d0c0e319dcd502cd8c736a4f1c->leave($__internal_3b7c5c6a27b2dd0351ceec0c98f864e9c9b190d0c0e319dcd502cd8c736a4f1c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d47b72458174b845ce91fa240f0dd43a669d67f8913c039ed94816c1b5d51e = $this->env->getExtension("native_profiler");
        $__internal_b1d47b72458174b845ce91fa240f0dd43a669d67f8913c039ed94816c1b5d51e->enter($__internal_b1d47b72458174b845ce91fa240f0dd43a669d67f8913c039ed94816c1b5d51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_b1d47b72458174b845ce91fa240f0dd43a669d67f8913c039ed94816c1b5d51e->leave($__internal_b1d47b72458174b845ce91fa240f0dd43a669d67f8913c039ed94816c1b5d51e_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_855ba123f431f7f99904b8d1b7c71c8b1f264133fae2153b7bd7259f8b8328c2 = $this->env->getExtension("native_profiler");
        $__internal_855ba123f431f7f99904b8d1b7c71c8b1f264133fae2153b7bd7259f8b8328c2->enter($__internal_855ba123f431f7f99904b8d1b7c71c8b1f264133fae2153b7bd7259f8b8328c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_855ba123f431f7f99904b8d1b7c71c8b1f264133fae2153b7bd7259f8b8328c2->leave($__internal_855ba123f431f7f99904b8d1b7c71c8b1f264133fae2153b7bd7259f8b8328c2_prof);

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

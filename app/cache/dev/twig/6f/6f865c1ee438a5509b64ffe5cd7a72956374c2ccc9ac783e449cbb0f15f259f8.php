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
        $__internal_652e5fb20643904c9313c9ca9f794f81a8f75e788a00897fd1be6b7e6363584d = $this->env->getExtension("native_profiler");
        $__internal_652e5fb20643904c9313c9ca9f794f81a8f75e788a00897fd1be6b7e6363584d->enter($__internal_652e5fb20643904c9313c9ca9f794f81a8f75e788a00897fd1be6b7e6363584d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_652e5fb20643904c9313c9ca9f794f81a8f75e788a00897fd1be6b7e6363584d->leave($__internal_652e5fb20643904c9313c9ca9f794f81a8f75e788a00897fd1be6b7e6363584d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1428423b9169b694caee275a7529b7bf17fc6691800928c66243332e4044805 = $this->env->getExtension("native_profiler");
        $__internal_d1428423b9169b694caee275a7529b7bf17fc6691800928c66243332e4044805->enter($__internal_d1428423b9169b694caee275a7529b7bf17fc6691800928c66243332e4044805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_d1428423b9169b694caee275a7529b7bf17fc6691800928c66243332e4044805->leave($__internal_d1428423b9169b694caee275a7529b7bf17fc6691800928c66243332e4044805_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_92dda4bfb702d04e23ba4716d7102f9386322b3e575b1902314243bc65170cb1 = $this->env->getExtension("native_profiler");
        $__internal_92dda4bfb702d04e23ba4716d7102f9386322b3e575b1902314243bc65170cb1->enter($__internal_92dda4bfb702d04e23ba4716d7102f9386322b3e575b1902314243bc65170cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_92dda4bfb702d04e23ba4716d7102f9386322b3e575b1902314243bc65170cb1->leave($__internal_92dda4bfb702d04e23ba4716d7102f9386322b3e575b1902314243bc65170cb1_prof);

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

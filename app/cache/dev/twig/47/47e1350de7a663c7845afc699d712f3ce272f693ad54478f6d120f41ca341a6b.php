<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_9913d20d51b7753ca49684438f8e2d8c5a783e8f3f713a0877eaada0bf18a65a extends Twig_Template
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
        $__internal_d79d7df78f3a480b3dfd00d2faa3c55040914b34003cd57a781e3ed5cd90e5f9 = $this->env->getExtension("native_profiler");
        $__internal_d79d7df78f3a480b3dfd00d2faa3c55040914b34003cd57a781e3ed5cd90e5f9->enter($__internal_d79d7df78f3a480b3dfd00d2faa3c55040914b34003cd57a781e3ed5cd90e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d79d7df78f3a480b3dfd00d2faa3c55040914b34003cd57a781e3ed5cd90e5f9->leave($__internal_d79d7df78f3a480b3dfd00d2faa3c55040914b34003cd57a781e3ed5cd90e5f9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_61ed6ffae3485e849b1a050426e7fffaf1c9509b5dfc7a4029c0934f03ca3b64 = $this->env->getExtension("native_profiler");
        $__internal_61ed6ffae3485e849b1a050426e7fffaf1c9509b5dfc7a4029c0934f03ca3b64->enter($__internal_61ed6ffae3485e849b1a050426e7fffaf1c9509b5dfc7a4029c0934f03ca3b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_61ed6ffae3485e849b1a050426e7fffaf1c9509b5dfc7a4029c0934f03ca3b64->leave($__internal_61ed6ffae3485e849b1a050426e7fffaf1c9509b5dfc7a4029c0934f03ca3b64_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_0b11083eb42f30154747a271b8875a39a5f81f1f29a6e54224c6338c100536cd = $this->env->getExtension("native_profiler");
        $__internal_0b11083eb42f30154747a271b8875a39a5f81f1f29a6e54224c6338c100536cd->enter($__internal_0b11083eb42f30154747a271b8875a39a5f81f1f29a6e54224c6338c100536cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0b11083eb42f30154747a271b8875a39a5f81f1f29a6e54224c6338c100536cd->leave($__internal_0b11083eb42f30154747a271b8875a39a5f81f1f29a6e54224c6338c100536cd_prof);

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

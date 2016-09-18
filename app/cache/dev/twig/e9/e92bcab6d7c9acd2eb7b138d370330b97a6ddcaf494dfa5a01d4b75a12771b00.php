<?php

/* CoreBundle:HP:serie.html.twig */
class __TwigTemplate_9b1f8eb1636bbb31e34559bda790c1db2f48b4dfd384a42f2b6f1f74e292c45e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CoreBundle:HP:serie.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6cc435b4b1b546e82f4dab77a9427ea5fea90f60bc917d1c9bcfdd82b6b0ff9 = $this->env->getExtension("native_profiler");
        $__internal_d6cc435b4b1b546e82f4dab77a9427ea5fea90f60bc917d1c9bcfdd82b6b0ff9->enter($__internal_d6cc435b4b1b546e82f4dab77a9427ea5fea90f60bc917d1c9bcfdd82b6b0ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:serie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6cc435b4b1b546e82f4dab77a9427ea5fea90f60bc917d1c9bcfdd82b6b0ff9->leave($__internal_d6cc435b4b1b546e82f4dab77a9427ea5fea90f60bc917d1c9bcfdd82b6b0ff9_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:serie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/

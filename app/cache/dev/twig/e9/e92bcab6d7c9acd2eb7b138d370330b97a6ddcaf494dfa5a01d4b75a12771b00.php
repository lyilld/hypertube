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
        $__internal_d75119e5672dc8e3c108bff22bed4c227640ff3112c2ceb10e0a4fb1e9d6878e = $this->env->getExtension("native_profiler");
        $__internal_d75119e5672dc8e3c108bff22bed4c227640ff3112c2ceb10e0a4fb1e9d6878e->enter($__internal_d75119e5672dc8e3c108bff22bed4c227640ff3112c2ceb10e0a4fb1e9d6878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:serie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d75119e5672dc8e3c108bff22bed4c227640ff3112c2ceb10e0a4fb1e9d6878e->leave($__internal_d75119e5672dc8e3c108bff22bed4c227640ff3112c2ceb10e0a4fb1e9d6878e_prof);

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

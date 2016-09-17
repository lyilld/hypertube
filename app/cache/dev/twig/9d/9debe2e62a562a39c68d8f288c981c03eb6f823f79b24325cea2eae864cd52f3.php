<?php

/* CoreBundle:HP:video.html.twig */
class __TwigTemplate_1c675024baa4c702d67ec9957147dec3f55c37666092d1dec7ba2f8c6f055c5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:HP:video.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e6d365c56d0894849da42bfe1cf43b69fa2355ce70f74a4c73c6078170566a5 = $this->env->getExtension("native_profiler");
        $__internal_8e6d365c56d0894849da42bfe1cf43b69fa2355ce70f74a4c73c6078170566a5->enter($__internal_8e6d365c56d0894849da42bfe1cf43b69fa2355ce70f74a4c73c6078170566a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:video.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e6d365c56d0894849da42bfe1cf43b69fa2355ce70f74a4c73c6078170566a5->leave($__internal_8e6d365c56d0894849da42bfe1cf43b69fa2355ce70f74a4c73c6078170566a5_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:video.html.twig";
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
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* */

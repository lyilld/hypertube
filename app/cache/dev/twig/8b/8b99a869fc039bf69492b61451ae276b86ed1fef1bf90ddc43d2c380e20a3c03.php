<?php

/* CoreBundle:HP:index.html.twig */
class __TwigTemplate_bc855ecea4b02358782d7326656151209c48f63ca84c21c36bd40a2765092843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:HP:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_587abf7dbd2b0b4ef90ef170f6b73a8eab139f1a07dbc6119831af9acc71a85a = $this->env->getExtension("native_profiler");
        $__internal_587abf7dbd2b0b4ef90ef170f6b73a8eab139f1a07dbc6119831af9acc71a85a->enter($__internal_587abf7dbd2b0b4ef90ef170f6b73a8eab139f1a07dbc6119831af9acc71a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_587abf7dbd2b0b4ef90ef170f6b73a8eab139f1a07dbc6119831af9acc71a85a->leave($__internal_587abf7dbd2b0b4ef90ef170f6b73a8eab139f1a07dbc6119831af9acc71a85a_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:index.html.twig";
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

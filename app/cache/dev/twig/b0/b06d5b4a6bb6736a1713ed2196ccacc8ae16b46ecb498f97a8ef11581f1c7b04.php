<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_eb4062a95111316aa06f4bf23bf00e791f48cda654b9cb77c8a0798b17aeaae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_057ca69d2f8de58b65bc4eafe1a84b56b3e7d0e731cd8af4335829a21936a2e0 = $this->env->getExtension("native_profiler");
        $__internal_057ca69d2f8de58b65bc4eafe1a84b56b3e7d0e731cd8af4335829a21936a2e0->enter($__internal_057ca69d2f8de58b65bc4eafe1a84b56b3e7d0e731cd8af4335829a21936a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057ca69d2f8de58b65bc4eafe1a84b56b3e7d0e731cd8af4335829a21936a2e0->leave($__internal_057ca69d2f8de58b65bc4eafe1a84b56b3e7d0e731cd8af4335829a21936a2e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b2f06046751bc8e1cd93b419650ac7923164260b78313c550cbdc6b3c6751018 = $this->env->getExtension("native_profiler");
        $__internal_b2f06046751bc8e1cd93b419650ac7923164260b78313c550cbdc6b3c6751018->enter($__internal_b2f06046751bc8e1cd93b419650ac7923164260b78313c550cbdc6b3c6751018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b2f06046751bc8e1cd93b419650ac7923164260b78313c550cbdc6b3c6751018->leave($__internal_b2f06046751bc8e1cd93b419650ac7923164260b78313c550cbdc6b3c6751018_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

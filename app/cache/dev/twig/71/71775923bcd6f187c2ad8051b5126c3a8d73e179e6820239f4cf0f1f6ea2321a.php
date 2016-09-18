<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1ca72d82778b93d7dfdef809df546a04c62ef293e074796a1237c886c6572419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_a8bffa8f6b2ca60b739802d2469eb4ddee5b43a9a79cadd57cfb153c8b30b062 = $this->env->getExtension("native_profiler");
        $__internal_a8bffa8f6b2ca60b739802d2469eb4ddee5b43a9a79cadd57cfb153c8b30b062->enter($__internal_a8bffa8f6b2ca60b739802d2469eb4ddee5b43a9a79cadd57cfb153c8b30b062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8bffa8f6b2ca60b739802d2469eb4ddee5b43a9a79cadd57cfb153c8b30b062->leave($__internal_a8bffa8f6b2ca60b739802d2469eb4ddee5b43a9a79cadd57cfb153c8b30b062_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c56b06a9ed5927a3f05c64cbe78eb793c89ac15bae206d5645901a257fd128c1 = $this->env->getExtension("native_profiler");
        $__internal_c56b06a9ed5927a3f05c64cbe78eb793c89ac15bae206d5645901a257fd128c1->enter($__internal_c56b06a9ed5927a3f05c64cbe78eb793c89ac15bae206d5645901a257fd128c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_c56b06a9ed5927a3f05c64cbe78eb793c89ac15bae206d5645901a257fd128c1->leave($__internal_c56b06a9ed5927a3f05c64cbe78eb793c89ac15bae206d5645901a257fd128c1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

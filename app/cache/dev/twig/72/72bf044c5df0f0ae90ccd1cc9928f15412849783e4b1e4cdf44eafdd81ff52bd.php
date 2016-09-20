<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b0ad154990d4d4a81e1b638c509c74ceb8732c9ee1c67a171d80bfed3b8663c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3807375eb7c65c33deae38feaf387450f1bc17d4396d22192da83b36441dcb69 = $this->env->getExtension("native_profiler");
        $__internal_3807375eb7c65c33deae38feaf387450f1bc17d4396d22192da83b36441dcb69->enter($__internal_3807375eb7c65c33deae38feaf387450f1bc17d4396d22192da83b36441dcb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3807375eb7c65c33deae38feaf387450f1bc17d4396d22192da83b36441dcb69->leave($__internal_3807375eb7c65c33deae38feaf387450f1bc17d4396d22192da83b36441dcb69_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec7d0e0c9cb74cb55b88db993c02d04f13c8d0e9aafe6d86ba600016d2a71e9f = $this->env->getExtension("native_profiler");
        $__internal_ec7d0e0c9cb74cb55b88db993c02d04f13c8d0e9aafe6d86ba600016d2a71e9f->enter($__internal_ec7d0e0c9cb74cb55b88db993c02d04f13c8d0e9aafe6d86ba600016d2a71e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ec7d0e0c9cb74cb55b88db993c02d04f13c8d0e9aafe6d86ba600016d2a71e9f->leave($__internal_ec7d0e0c9cb74cb55b88db993c02d04f13c8d0e9aafe6d86ba600016d2a71e9f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

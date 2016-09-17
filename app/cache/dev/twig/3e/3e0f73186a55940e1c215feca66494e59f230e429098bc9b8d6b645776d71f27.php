<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_9f170e8d23834fa6cce060c4f8aa3868bb8cd1f1a69dcf70cc31b9acca9418e9 extends Twig_Template
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
        $__internal_9786a0763dcaf5fe1d6cb540a362f1098f00336f8a0be22019d0208d27f958b5 = $this->env->getExtension("native_profiler");
        $__internal_9786a0763dcaf5fe1d6cb540a362f1098f00336f8a0be22019d0208d27f958b5->enter($__internal_9786a0763dcaf5fe1d6cb540a362f1098f00336f8a0be22019d0208d27f958b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9786a0763dcaf5fe1d6cb540a362f1098f00336f8a0be22019d0208d27f958b5->leave($__internal_9786a0763dcaf5fe1d6cb540a362f1098f00336f8a0be22019d0208d27f958b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a698083fd4fb962b2e4b44dfe4b2956af72a3bb3e47533a2e6895abf7a5cc9e6 = $this->env->getExtension("native_profiler");
        $__internal_a698083fd4fb962b2e4b44dfe4b2956af72a3bb3e47533a2e6895abf7a5cc9e6->enter($__internal_a698083fd4fb962b2e4b44dfe4b2956af72a3bb3e47533a2e6895abf7a5cc9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_a698083fd4fb962b2e4b44dfe4b2956af72a3bb3e47533a2e6895abf7a5cc9e6->leave($__internal_a698083fd4fb962b2e4b44dfe4b2956af72a3bb3e47533a2e6895abf7a5cc9e6_prof);

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

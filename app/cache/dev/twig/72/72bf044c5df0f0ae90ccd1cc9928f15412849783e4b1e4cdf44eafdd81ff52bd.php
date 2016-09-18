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
        $__internal_abb6b48f221a8f15df65419abac417b7e7163747a334641be0c3ce5600f3f976 = $this->env->getExtension("native_profiler");
        $__internal_abb6b48f221a8f15df65419abac417b7e7163747a334641be0c3ce5600f3f976->enter($__internal_abb6b48f221a8f15df65419abac417b7e7163747a334641be0c3ce5600f3f976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb6b48f221a8f15df65419abac417b7e7163747a334641be0c3ce5600f3f976->leave($__internal_abb6b48f221a8f15df65419abac417b7e7163747a334641be0c3ce5600f3f976_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52ebe7991ec145ff14f544742a311ef96491415723a34fc85308dbeb2ef1dc4c = $this->env->getExtension("native_profiler");
        $__internal_52ebe7991ec145ff14f544742a311ef96491415723a34fc85308dbeb2ef1dc4c->enter($__internal_52ebe7991ec145ff14f544742a311ef96491415723a34fc85308dbeb2ef1dc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_52ebe7991ec145ff14f544742a311ef96491415723a34fc85308dbeb2ef1dc4c->leave($__internal_52ebe7991ec145ff14f544742a311ef96491415723a34fc85308dbeb2ef1dc4c_prof);

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

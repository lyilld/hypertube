<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a0bb397a708a7e97582664baaaf75f3fd8cf8b76b839d58e847c6837babfa3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_b85d78b36aad57acf7841567e29a18b77f9acbe6de7f862723de3cb433eaa6ef = $this->env->getExtension("native_profiler");
        $__internal_b85d78b36aad57acf7841567e29a18b77f9acbe6de7f862723de3cb433eaa6ef->enter($__internal_b85d78b36aad57acf7841567e29a18b77f9acbe6de7f862723de3cb433eaa6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b85d78b36aad57acf7841567e29a18b77f9acbe6de7f862723de3cb433eaa6ef->leave($__internal_b85d78b36aad57acf7841567e29a18b77f9acbe6de7f862723de3cb433eaa6ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_97a282a1774bcfd96a07126c0deccd7b36c5661726f91bd393b9104a91dce538 = $this->env->getExtension("native_profiler");
        $__internal_97a282a1774bcfd96a07126c0deccd7b36c5661726f91bd393b9104a91dce538->enter($__internal_97a282a1774bcfd96a07126c0deccd7b36c5661726f91bd393b9104a91dce538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_97a282a1774bcfd96a07126c0deccd7b36c5661726f91bd393b9104a91dce538->leave($__internal_97a282a1774bcfd96a07126c0deccd7b36c5661726f91bd393b9104a91dce538_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_94df05d8205817f5ca93192fa5ae33e4fd2d21888c22d0ce110219f31a4af3be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_7b6e43cbf1ec29d80e3d071c83dde7e076c854ef8f735889f23116a93feaa84d = $this->env->getExtension("native_profiler");
        $__internal_7b6e43cbf1ec29d80e3d071c83dde7e076c854ef8f735889f23116a93feaa84d->enter($__internal_7b6e43cbf1ec29d80e3d071c83dde7e076c854ef8f735889f23116a93feaa84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b6e43cbf1ec29d80e3d071c83dde7e076c854ef8f735889f23116a93feaa84d->leave($__internal_7b6e43cbf1ec29d80e3d071c83dde7e076c854ef8f735889f23116a93feaa84d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a204b56246ae218585ca79d19eb14a03aed6419de8c2400d32a88552dce59f5 = $this->env->getExtension("native_profiler");
        $__internal_6a204b56246ae218585ca79d19eb14a03aed6419de8c2400d32a88552dce59f5->enter($__internal_6a204b56246ae218585ca79d19eb14a03aed6419de8c2400d32a88552dce59f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_6a204b56246ae218585ca79d19eb14a03aed6419de8c2400d32a88552dce59f5->leave($__internal_6a204b56246ae218585ca79d19eb14a03aed6419de8c2400d32a88552dce59f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

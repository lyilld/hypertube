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
        $__internal_913821444f8675462f78053c7c97420e43156ca1c870b5efdff553f97c036646 = $this->env->getExtension("native_profiler");
        $__internal_913821444f8675462f78053c7c97420e43156ca1c870b5efdff553f97c036646->enter($__internal_913821444f8675462f78053c7c97420e43156ca1c870b5efdff553f97c036646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_913821444f8675462f78053c7c97420e43156ca1c870b5efdff553f97c036646->leave($__internal_913821444f8675462f78053c7c97420e43156ca1c870b5efdff553f97c036646_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bff4f07f0ddef4c7129f2de8a93337da7a419287a6522213a7b0831c085093ac = $this->env->getExtension("native_profiler");
        $__internal_bff4f07f0ddef4c7129f2de8a93337da7a419287a6522213a7b0831c085093ac->enter($__internal_bff4f07f0ddef4c7129f2de8a93337da7a419287a6522213a7b0831c085093ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_bff4f07f0ddef4c7129f2de8a93337da7a419287a6522213a7b0831c085093ac->leave($__internal_bff4f07f0ddef4c7129f2de8a93337da7a419287a6522213a7b0831c085093ac_prof);

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

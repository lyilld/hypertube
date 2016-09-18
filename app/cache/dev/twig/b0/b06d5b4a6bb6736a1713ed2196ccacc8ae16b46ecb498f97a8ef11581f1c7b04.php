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
        $__internal_8e75ac83b4ab4b7109b6b6d03b12868c0cac29d39920670b5e201f52e9931fdb = $this->env->getExtension("native_profiler");
        $__internal_8e75ac83b4ab4b7109b6b6d03b12868c0cac29d39920670b5e201f52e9931fdb->enter($__internal_8e75ac83b4ab4b7109b6b6d03b12868c0cac29d39920670b5e201f52e9931fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e75ac83b4ab4b7109b6b6d03b12868c0cac29d39920670b5e201f52e9931fdb->leave($__internal_8e75ac83b4ab4b7109b6b6d03b12868c0cac29d39920670b5e201f52e9931fdb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a6afebbf977dd1fc5159039f1cb728a4a79e24d19550ca781f08f8c04bfdd42 = $this->env->getExtension("native_profiler");
        $__internal_5a6afebbf977dd1fc5159039f1cb728a4a79e24d19550ca781f08f8c04bfdd42->enter($__internal_5a6afebbf977dd1fc5159039f1cb728a4a79e24d19550ca781f08f8c04bfdd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5a6afebbf977dd1fc5159039f1cb728a4a79e24d19550ca781f08f8c04bfdd42->leave($__internal_5a6afebbf977dd1fc5159039f1cb728a4a79e24d19550ca781f08f8c04bfdd42_prof);

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

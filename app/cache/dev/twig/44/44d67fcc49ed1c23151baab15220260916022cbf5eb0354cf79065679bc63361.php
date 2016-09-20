<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ae17924c679ad441f0a03ddb21c4faa0d50657a6f78281752c200a8ae973e6b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10e3d84df21fb0134e819e1803024fd5e2f13797d65b17a4b8b6b08403ebbdf7 = $this->env->getExtension("native_profiler");
        $__internal_10e3d84df21fb0134e819e1803024fd5e2f13797d65b17a4b8b6b08403ebbdf7->enter($__internal_10e3d84df21fb0134e819e1803024fd5e2f13797d65b17a4b8b6b08403ebbdf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_10e3d84df21fb0134e819e1803024fd5e2f13797d65b17a4b8b6b08403ebbdf7->leave($__internal_10e3d84df21fb0134e819e1803024fd5e2f13797d65b17a4b8b6b08403ebbdf7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_64cb80b703d3e60b8c6e411822da93d3c169620d205b6f3d36dc07ac01ba2338 = $this->env->getExtension("native_profiler");
        $__internal_64cb80b703d3e60b8c6e411822da93d3c169620d205b6f3d36dc07ac01ba2338->enter($__internal_64cb80b703d3e60b8c6e411822da93d3c169620d205b6f3d36dc07ac01ba2338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 2)->display($context);
        
        $__internal_64cb80b703d3e60b8c6e411822da93d3c169620d205b6f3d36dc07ac01ba2338->leave($__internal_64cb80b703d3e60b8c6e411822da93d3c169620d205b6f3d36dc07ac01ba2338_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

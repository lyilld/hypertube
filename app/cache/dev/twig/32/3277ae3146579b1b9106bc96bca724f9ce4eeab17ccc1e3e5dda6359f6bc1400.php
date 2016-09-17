<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_7e58c43bb917b059e042eeea76c528552794344172faacbb33de03a7911006eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_69e066f179732e7e61a6156086cda46b34552abb15b4c1044fa9bbc9064198fc = $this->env->getExtension("native_profiler");
        $__internal_69e066f179732e7e61a6156086cda46b34552abb15b4c1044fa9bbc9064198fc->enter($__internal_69e066f179732e7e61a6156086cda46b34552abb15b4c1044fa9bbc9064198fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69e066f179732e7e61a6156086cda46b34552abb15b4c1044fa9bbc9064198fc->leave($__internal_69e066f179732e7e61a6156086cda46b34552abb15b4c1044fa9bbc9064198fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_803904f2a07124c1fae7ce629eba51236d07b564fff1a3121084474d195b3212 = $this->env->getExtension("native_profiler");
        $__internal_803904f2a07124c1fae7ce629eba51236d07b564fff1a3121084474d195b3212->enter($__internal_803904f2a07124c1fae7ce629eba51236d07b564fff1a3121084474d195b3212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_803904f2a07124c1fae7ce629eba51236d07b564fff1a3121084474d195b3212->leave($__internal_803904f2a07124c1fae7ce629eba51236d07b564fff1a3121084474d195b3212_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

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
        $__internal_af07a6c360349b2bed3e3014de5bcc8725890f7dc5bacd1a271fc1eb49615844 = $this->env->getExtension("native_profiler");
        $__internal_af07a6c360349b2bed3e3014de5bcc8725890f7dc5bacd1a271fc1eb49615844->enter($__internal_af07a6c360349b2bed3e3014de5bcc8725890f7dc5bacd1a271fc1eb49615844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af07a6c360349b2bed3e3014de5bcc8725890f7dc5bacd1a271fc1eb49615844->leave($__internal_af07a6c360349b2bed3e3014de5bcc8725890f7dc5bacd1a271fc1eb49615844_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ca2e8602f4555bc4c0a96553b4cf5be2f9a98c860db9a219f71242ae5f9d17b = $this->env->getExtension("native_profiler");
        $__internal_9ca2e8602f4555bc4c0a96553b4cf5be2f9a98c860db9a219f71242ae5f9d17b->enter($__internal_9ca2e8602f4555bc4c0a96553b4cf5be2f9a98c860db9a219f71242ae5f9d17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9ca2e8602f4555bc4c0a96553b4cf5be2f9a98c860db9a219f71242ae5f9d17b->leave($__internal_9ca2e8602f4555bc4c0a96553b4cf5be2f9a98c860db9a219f71242ae5f9d17b_prof);

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

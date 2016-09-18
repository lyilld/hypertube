<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1ca72d82778b93d7dfdef809df546a04c62ef293e074796a1237c886c6572419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_643db4501ec6993c758a5a473a624e1490cbe6e1561a09d089c7fb67610d0fcf = $this->env->getExtension("native_profiler");
        $__internal_643db4501ec6993c758a5a473a624e1490cbe6e1561a09d089c7fb67610d0fcf->enter($__internal_643db4501ec6993c758a5a473a624e1490cbe6e1561a09d089c7fb67610d0fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_643db4501ec6993c758a5a473a624e1490cbe6e1561a09d089c7fb67610d0fcf->leave($__internal_643db4501ec6993c758a5a473a624e1490cbe6e1561a09d089c7fb67610d0fcf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_094ef953357ac9456c4ca3b435f25c2482df8867e3e78be30d8eeb218598cbdb = $this->env->getExtension("native_profiler");
        $__internal_094ef953357ac9456c4ca3b435f25c2482df8867e3e78be30d8eeb218598cbdb->enter($__internal_094ef953357ac9456c4ca3b435f25c2482df8867e3e78be30d8eeb218598cbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_094ef953357ac9456c4ca3b435f25c2482df8867e3e78be30d8eeb218598cbdb->leave($__internal_094ef953357ac9456c4ca3b435f25c2482df8867e3e78be30d8eeb218598cbdb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

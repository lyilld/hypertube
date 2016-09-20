<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_39e07500366e2f8d15486c818dd987c6012b05cd7beddebb7b978c289627e56f extends Twig_Template
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
        $__internal_da692f40d613a4dedbb4a3ec1a8939090ce2668f7c81ad7c10c89cad20cf53f0 = $this->env->getExtension("native_profiler");
        $__internal_da692f40d613a4dedbb4a3ec1a8939090ce2668f7c81ad7c10c89cad20cf53f0->enter($__internal_da692f40d613a4dedbb4a3ec1a8939090ce2668f7c81ad7c10c89cad20cf53f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_da692f40d613a4dedbb4a3ec1a8939090ce2668f7c81ad7c10c89cad20cf53f0->leave($__internal_da692f40d613a4dedbb4a3ec1a8939090ce2668f7c81ad7c10c89cad20cf53f0_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7232cbba0a3ff4e976bd5fb70ed1d6ee25a999e0b7fc9b2bd88ea4b419039b81 = $this->env->getExtension("native_profiler");
        $__internal_7232cbba0a3ff4e976bd5fb70ed1d6ee25a999e0b7fc9b2bd88ea4b419039b81->enter($__internal_7232cbba0a3ff4e976bd5fb70ed1d6ee25a999e0b7fc9b2bd88ea4b419039b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 2)->display($context);
        
        $__internal_7232cbba0a3ff4e976bd5fb70ed1d6ee25a999e0b7fc9b2bd88ea4b419039b81->leave($__internal_7232cbba0a3ff4e976bd5fb70ed1d6ee25a999e0b7fc9b2bd88ea4b419039b81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

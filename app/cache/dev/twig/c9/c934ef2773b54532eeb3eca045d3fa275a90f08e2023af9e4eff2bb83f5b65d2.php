<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4c36865f0c0f1077852cd0cbbfd1fb5c5975be4af348bcdfa8051be2829a0ca1 extends Twig_Template
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
        $__internal_57468b7d89c52c4b1be8089517fa45facc27056f97e3e772dbcba1c64a991218 = $this->env->getExtension("native_profiler");
        $__internal_57468b7d89c52c4b1be8089517fa45facc27056f97e3e772dbcba1c64a991218->enter($__internal_57468b7d89c52c4b1be8089517fa45facc27056f97e3e772dbcba1c64a991218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57468b7d89c52c4b1be8089517fa45facc27056f97e3e772dbcba1c64a991218->leave($__internal_57468b7d89c52c4b1be8089517fa45facc27056f97e3e772dbcba1c64a991218_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0485fdb001a2077826aac3dc40f058ba1b4e7475d95b7e092bb49f98d9b4748 = $this->env->getExtension("native_profiler");
        $__internal_a0485fdb001a2077826aac3dc40f058ba1b4e7475d95b7e092bb49f98d9b4748->enter($__internal_a0485fdb001a2077826aac3dc40f058ba1b4e7475d95b7e092bb49f98d9b4748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a0485fdb001a2077826aac3dc40f058ba1b4e7475d95b7e092bb49f98d9b4748->leave($__internal_a0485fdb001a2077826aac3dc40f058ba1b4e7475d95b7e092bb49f98d9b4748_prof);

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

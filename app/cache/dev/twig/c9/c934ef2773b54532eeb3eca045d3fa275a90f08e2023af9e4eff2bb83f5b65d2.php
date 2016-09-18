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
        $__internal_4c919f1f44f35ddecd46096d0fd46ba3e660b247e9dbb7288568cecf46bde536 = $this->env->getExtension("native_profiler");
        $__internal_4c919f1f44f35ddecd46096d0fd46ba3e660b247e9dbb7288568cecf46bde536->enter($__internal_4c919f1f44f35ddecd46096d0fd46ba3e660b247e9dbb7288568cecf46bde536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c919f1f44f35ddecd46096d0fd46ba3e660b247e9dbb7288568cecf46bde536->leave($__internal_4c919f1f44f35ddecd46096d0fd46ba3e660b247e9dbb7288568cecf46bde536_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b81456f3b29d66e6fa543e3c16b1ba71ca111b66d570df75d8dfdb341033005a = $this->env->getExtension("native_profiler");
        $__internal_b81456f3b29d66e6fa543e3c16b1ba71ca111b66d570df75d8dfdb341033005a->enter($__internal_b81456f3b29d66e6fa543e3c16b1ba71ca111b66d570df75d8dfdb341033005a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b81456f3b29d66e6fa543e3c16b1ba71ca111b66d570df75d8dfdb341033005a->leave($__internal_b81456f3b29d66e6fa543e3c16b1ba71ca111b66d570df75d8dfdb341033005a_prof);

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

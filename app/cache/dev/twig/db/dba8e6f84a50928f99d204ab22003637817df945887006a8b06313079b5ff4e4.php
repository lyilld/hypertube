<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_546e10392076f57e2b8db46abdc89dd97f8182ee38a3a592473ace8806e6f049 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c2ae11ee4d9afbff0283c7362fa29bc31847011efb41a8c45511eef7fbac6d31 = $this->env->getExtension("native_profiler");
        $__internal_c2ae11ee4d9afbff0283c7362fa29bc31847011efb41a8c45511eef7fbac6d31->enter($__internal_c2ae11ee4d9afbff0283c7362fa29bc31847011efb41a8c45511eef7fbac6d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ae11ee4d9afbff0283c7362fa29bc31847011efb41a8c45511eef7fbac6d31->leave($__internal_c2ae11ee4d9afbff0283c7362fa29bc31847011efb41a8c45511eef7fbac6d31_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc502918ee57d04e250ca000eafba72475ad92fe6f0bda3e80544991c4927b00 = $this->env->getExtension("native_profiler");
        $__internal_fc502918ee57d04e250ca000eafba72475ad92fe6f0bda3e80544991c4927b00->enter($__internal_fc502918ee57d04e250ca000eafba72475ad92fe6f0bda3e80544991c4927b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_fc502918ee57d04e250ca000eafba72475ad92fe6f0bda3e80544991c4927b00->leave($__internal_fc502918ee57d04e250ca000eafba72475ad92fe6f0bda3e80544991c4927b00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

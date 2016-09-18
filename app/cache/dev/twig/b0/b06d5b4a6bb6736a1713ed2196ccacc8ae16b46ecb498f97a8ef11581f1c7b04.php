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
        $__internal_ebc787f8df25e8de9720b53f67f637f3f126e351f06abc1c4404ac200ce6d312 = $this->env->getExtension("native_profiler");
        $__internal_ebc787f8df25e8de9720b53f67f637f3f126e351f06abc1c4404ac200ce6d312->enter($__internal_ebc787f8df25e8de9720b53f67f637f3f126e351f06abc1c4404ac200ce6d312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebc787f8df25e8de9720b53f67f637f3f126e351f06abc1c4404ac200ce6d312->leave($__internal_ebc787f8df25e8de9720b53f67f637f3f126e351f06abc1c4404ac200ce6d312_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8893b87230cb06d67c406ef3073fb6b06ad567570acf01f7911284436e72053b = $this->env->getExtension("native_profiler");
        $__internal_8893b87230cb06d67c406ef3073fb6b06ad567570acf01f7911284436e72053b->enter($__internal_8893b87230cb06d67c406ef3073fb6b06ad567570acf01f7911284436e72053b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8893b87230cb06d67c406ef3073fb6b06ad567570acf01f7911284436e72053b->leave($__internal_8893b87230cb06d67c406ef3073fb6b06ad567570acf01f7911284436e72053b_prof);

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

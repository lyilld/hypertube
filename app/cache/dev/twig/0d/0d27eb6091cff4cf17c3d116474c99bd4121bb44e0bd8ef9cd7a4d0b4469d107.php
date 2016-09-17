<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9437b2e7bafa22941bc2601461802b4ca594b1137a05a45ccb29805a04b8983e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_8b13e114109839787013431c2c30b1b57dc85a01290bb0c4812ad6d849665753 = $this->env->getExtension("native_profiler");
        $__internal_8b13e114109839787013431c2c30b1b57dc85a01290bb0c4812ad6d849665753->enter($__internal_8b13e114109839787013431c2c30b1b57dc85a01290bb0c4812ad6d849665753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b13e114109839787013431c2c30b1b57dc85a01290bb0c4812ad6d849665753->leave($__internal_8b13e114109839787013431c2c30b1b57dc85a01290bb0c4812ad6d849665753_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26ef779fcf3337fcf59b506f21d80565ce746d5a8bb349b48b8fbeeec00531d4 = $this->env->getExtension("native_profiler");
        $__internal_26ef779fcf3337fcf59b506f21d80565ce746d5a8bb349b48b8fbeeec00531d4->enter($__internal_26ef779fcf3337fcf59b506f21d80565ce746d5a8bb349b48b8fbeeec00531d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_26ef779fcf3337fcf59b506f21d80565ce746d5a8bb349b48b8fbeeec00531d4->leave($__internal_26ef779fcf3337fcf59b506f21d80565ce746d5a8bb349b48b8fbeeec00531d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

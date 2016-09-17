<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3ebe6f10842c5bcca4e5d022f438b97a9c77851eb2b732550cbd2281fca2fb68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_24236ad3fc8db135d110f26650479f6e96f267b506f519706c071fb36b08ab21 = $this->env->getExtension("native_profiler");
        $__internal_24236ad3fc8db135d110f26650479f6e96f267b506f519706c071fb36b08ab21->enter($__internal_24236ad3fc8db135d110f26650479f6e96f267b506f519706c071fb36b08ab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24236ad3fc8db135d110f26650479f6e96f267b506f519706c071fb36b08ab21->leave($__internal_24236ad3fc8db135d110f26650479f6e96f267b506f519706c071fb36b08ab21_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ddc31320c23624c267b29c22591540aadfb2415e903de9b03f07a104b01f7ba = $this->env->getExtension("native_profiler");
        $__internal_1ddc31320c23624c267b29c22591540aadfb2415e903de9b03f07a104b01f7ba->enter($__internal_1ddc31320c23624c267b29c22591540aadfb2415e903de9b03f07a104b01f7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_1ddc31320c23624c267b29c22591540aadfb2415e903de9b03f07a104b01f7ba->leave($__internal_1ddc31320c23624c267b29c22591540aadfb2415e903de9b03f07a104b01f7ba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

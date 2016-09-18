<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e5388068fd5ba7f51abda00a5f890116c659199f440e09cc2dd24295519ab92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_b51a9c083e83936b6d46821f094f05ac0d5d4ec4a0bdab2fc75cc272f6aa19e0 = $this->env->getExtension("native_profiler");
        $__internal_b51a9c083e83936b6d46821f094f05ac0d5d4ec4a0bdab2fc75cc272f6aa19e0->enter($__internal_b51a9c083e83936b6d46821f094f05ac0d5d4ec4a0bdab2fc75cc272f6aa19e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b51a9c083e83936b6d46821f094f05ac0d5d4ec4a0bdab2fc75cc272f6aa19e0->leave($__internal_b51a9c083e83936b6d46821f094f05ac0d5d4ec4a0bdab2fc75cc272f6aa19e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_50320fd57944cef2c802a77401d60e1220cc63ead6f76c3dbc6e633bc794a8d2 = $this->env->getExtension("native_profiler");
        $__internal_50320fd57944cef2c802a77401d60e1220cc63ead6f76c3dbc6e633bc794a8d2->enter($__internal_50320fd57944cef2c802a77401d60e1220cc63ead6f76c3dbc6e633bc794a8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_50320fd57944cef2c802a77401d60e1220cc63ead6f76c3dbc6e633bc794a8d2->leave($__internal_50320fd57944cef2c802a77401d60e1220cc63ead6f76c3dbc6e633bc794a8d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

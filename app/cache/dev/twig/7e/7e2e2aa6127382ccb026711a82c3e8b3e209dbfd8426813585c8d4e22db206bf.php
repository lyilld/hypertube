<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_4936837a034d01ffb292bf914b056bfc29179416de7a8c1aa28e3c4e6d160c14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_3189d126c07826a60b5fcdf880370c3aca6bcda2b1e6914fcd0d4f0ab9a42e44 = $this->env->getExtension("native_profiler");
        $__internal_3189d126c07826a60b5fcdf880370c3aca6bcda2b1e6914fcd0d4f0ab9a42e44->enter($__internal_3189d126c07826a60b5fcdf880370c3aca6bcda2b1e6914fcd0d4f0ab9a42e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3189d126c07826a60b5fcdf880370c3aca6bcda2b1e6914fcd0d4f0ab9a42e44->leave($__internal_3189d126c07826a60b5fcdf880370c3aca6bcda2b1e6914fcd0d4f0ab9a42e44_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72cfee7caa50c6c4d1825f69229ddc1ea989a989778a64dd74ef2f16c25202d2 = $this->env->getExtension("native_profiler");
        $__internal_72cfee7caa50c6c4d1825f69229ddc1ea989a989778a64dd74ef2f16c25202d2->enter($__internal_72cfee7caa50c6c4d1825f69229ddc1ea989a989778a64dd74ef2f16c25202d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_72cfee7caa50c6c4d1825f69229ddc1ea989a989778a64dd74ef2f16c25202d2->leave($__internal_72cfee7caa50c6c4d1825f69229ddc1ea989a989778a64dd74ef2f16c25202d2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

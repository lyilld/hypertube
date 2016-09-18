<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_94df05d8205817f5ca93192fa5ae33e4fd2d21888c22d0ce110219f31a4af3be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_aac016b12fe026919ee8c2af25491dd76e6fcfadd4ba2f60ac929670bb3dfd0b = $this->env->getExtension("native_profiler");
        $__internal_aac016b12fe026919ee8c2af25491dd76e6fcfadd4ba2f60ac929670bb3dfd0b->enter($__internal_aac016b12fe026919ee8c2af25491dd76e6fcfadd4ba2f60ac929670bb3dfd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac016b12fe026919ee8c2af25491dd76e6fcfadd4ba2f60ac929670bb3dfd0b->leave($__internal_aac016b12fe026919ee8c2af25491dd76e6fcfadd4ba2f60ac929670bb3dfd0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6432808a99fe6754e425524d77ffd1ca2823c1a34fb088e5db6973cb83cf69e1 = $this->env->getExtension("native_profiler");
        $__internal_6432808a99fe6754e425524d77ffd1ca2823c1a34fb088e5db6973cb83cf69e1->enter($__internal_6432808a99fe6754e425524d77ffd1ca2823c1a34fb088e5db6973cb83cf69e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_6432808a99fe6754e425524d77ffd1ca2823c1a34fb088e5db6973cb83cf69e1->leave($__internal_6432808a99fe6754e425524d77ffd1ca2823c1a34fb088e5db6973cb83cf69e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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

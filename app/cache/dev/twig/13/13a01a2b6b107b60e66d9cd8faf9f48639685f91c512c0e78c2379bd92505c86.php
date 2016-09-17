<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_baa76112450145be37f2f1481dc489b86ee9d75f47965e5721da775a9c1e8109 extends Twig_Template
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
        $__internal_e6f2596973e8781e90941b322b11e2c053e6e2439baf3f305d11b31bde82f108 = $this->env->getExtension("native_profiler");
        $__internal_e6f2596973e8781e90941b322b11e2c053e6e2439baf3f305d11b31bde82f108->enter($__internal_e6f2596973e8781e90941b322b11e2c053e6e2439baf3f305d11b31bde82f108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6f2596973e8781e90941b322b11e2c053e6e2439baf3f305d11b31bde82f108->leave($__internal_e6f2596973e8781e90941b322b11e2c053e6e2439baf3f305d11b31bde82f108_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b142052685af6ee8d95b75c00499a3509c17a6c28d4ca71019500546fd192de = $this->env->getExtension("native_profiler");
        $__internal_0b142052685af6ee8d95b75c00499a3509c17a6c28d4ca71019500546fd192de->enter($__internal_0b142052685af6ee8d95b75c00499a3509c17a6c28d4ca71019500546fd192de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0b142052685af6ee8d95b75c00499a3509c17a6c28d4ca71019500546fd192de->leave($__internal_0b142052685af6ee8d95b75c00499a3509c17a6c28d4ca71019500546fd192de_prof);

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

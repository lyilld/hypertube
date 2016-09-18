<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_39e07500366e2f8d15486c818dd987c6012b05cd7beddebb7b978c289627e56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1456aa5ab2d014d1e714843562823378fb32e4bc6f49bddc61e28287a62912d = $this->env->getExtension("native_profiler");
        $__internal_d1456aa5ab2d014d1e714843562823378fb32e4bc6f49bddc61e28287a62912d->enter($__internal_d1456aa5ab2d014d1e714843562823378fb32e4bc6f49bddc61e28287a62912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d1456aa5ab2d014d1e714843562823378fb32e4bc6f49bddc61e28287a62912d->leave($__internal_d1456aa5ab2d014d1e714843562823378fb32e4bc6f49bddc61e28287a62912d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57ba01cae71f6738d337229a7c3e4f3d28bbe5b9220c98208e6c91f623127fab = $this->env->getExtension("native_profiler");
        $__internal_57ba01cae71f6738d337229a7c3e4f3d28bbe5b9220c98208e6c91f623127fab->enter($__internal_57ba01cae71f6738d337229a7c3e4f3d28bbe5b9220c98208e6c91f623127fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 2)->display($context);
        
        $__internal_57ba01cae71f6738d337229a7c3e4f3d28bbe5b9220c98208e6c91f623127fab->leave($__internal_57ba01cae71f6738d337229a7c3e4f3d28bbe5b9220c98208e6c91f623127fab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

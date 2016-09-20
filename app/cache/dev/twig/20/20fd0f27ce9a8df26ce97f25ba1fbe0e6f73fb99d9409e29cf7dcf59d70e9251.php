<?php

/* DiviAjaxLoginBundle:Javascript:successaction.js.twig */
class __TwigTemplate_d96f7fb6cdf30b8edb454373a3f93f4b3bb19579f5a44bd07bdf92bbb9fecf8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0b0f8dfdb1cbb0280bf9d7cb92a869cdb3e641f7ace45c7e5d0dab1b28c20cf = $this->env->getExtension("native_profiler");
        $__internal_d0b0f8dfdb1cbb0280bf9d7cb92a869cdb3e641f7ace45c7e5d0dab1b28c20cf->enter($__internal_d0b0f8dfdb1cbb0280bf9d7cb92a869cdb3e641f7ace45c7e5d0dab1b28c20cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Javascript:successaction.js.twig"));

        // line 1
        echo "alert('Welcome ' + data.username + ' !');
window.location = data.target_path;
";
        
        $__internal_d0b0f8dfdb1cbb0280bf9d7cb92a869cdb3e641f7ace45c7e5d0dab1b28c20cf->leave($__internal_d0b0f8dfdb1cbb0280bf9d7cb92a869cdb3e641f7ace45c7e5d0dab1b28c20cf_prof);

    }

    public function getTemplateName()
    {
        return "DiviAjaxLoginBundle:Javascript:successaction.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* alert('Welcome ' + data.username + ' !');*/
/* window.location = data.target_path;*/
/* */

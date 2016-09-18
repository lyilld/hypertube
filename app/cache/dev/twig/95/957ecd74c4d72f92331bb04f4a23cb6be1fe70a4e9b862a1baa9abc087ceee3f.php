<?php

/* UserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_cc1bae31d35dfa961c98929f529d2c17c25c2e8fdb14bf9fc33fd3e4ce483745 extends Twig_Template
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
        $__internal_c93db24d64c5c0ad1519defadb7fcf1d9dd1aa81c02edb1d168679b4a52003cf = $this->env->getExtension("native_profiler");
        $__internal_c93db24d64c5c0ad1519defadb7fcf1d9dd1aa81c02edb1d168679b4a52003cf->enter($__internal_c93db24d64c5c0ad1519defadb7fcf1d9dd1aa81c02edb1d168679b4a52003cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c93db24d64c5c0ad1519defadb7fcf1d9dd1aa81c02edb1d168679b4a52003cf->leave($__internal_c93db24d64c5c0ad1519defadb7fcf1d9dd1aa81c02edb1d168679b4a52003cf_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c1666f474af121665284d0bd5fef143d9db63f70c7a43564452052c7aef5c3e = $this->env->getExtension("native_profiler");
        $__internal_0c1666f474af121665284d0bd5fef143d9db63f70c7a43564452052c7aef5c3e->enter($__internal_0c1666f474af121665284d0bd5fef143d9db63f70c7a43564452052c7aef5c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 2)->display($context);
        
        $__internal_0c1666f474af121665284d0bd5fef143d9db63f70c7a43564452052c7aef5c3e->leave($__internal_0c1666f474af121665284d0bd5fef143d9db63f70c7a43564452052c7aef5c3e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:change_password.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:change_password_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

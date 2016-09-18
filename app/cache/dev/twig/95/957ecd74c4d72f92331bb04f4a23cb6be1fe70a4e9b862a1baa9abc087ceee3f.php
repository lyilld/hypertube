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
        $__internal_13fc8e5ea1492f03d9d8f5af40cbccc7d323f719ed155a74709cb2c2f8cc6a59 = $this->env->getExtension("native_profiler");
        $__internal_13fc8e5ea1492f03d9d8f5af40cbccc7d323f719ed155a74709cb2c2f8cc6a59->enter($__internal_13fc8e5ea1492f03d9d8f5af40cbccc7d323f719ed155a74709cb2c2f8cc6a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_13fc8e5ea1492f03d9d8f5af40cbccc7d323f719ed155a74709cb2c2f8cc6a59->leave($__internal_13fc8e5ea1492f03d9d8f5af40cbccc7d323f719ed155a74709cb2c2f8cc6a59_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81d6c089400fa8de92b53853b5ceda7e648d4eaf26a4a83fb349db4f5529b884 = $this->env->getExtension("native_profiler");
        $__internal_81d6c089400fa8de92b53853b5ceda7e648d4eaf26a4a83fb349db4f5529b884->enter($__internal_81d6c089400fa8de92b53853b5ceda7e648d4eaf26a4a83fb349db4f5529b884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 2)->display($context);
        
        $__internal_81d6c089400fa8de92b53853b5ceda7e648d4eaf26a4a83fb349db4f5529b884->leave($__internal_81d6c089400fa8de92b53853b5ceda7e648d4eaf26a4a83fb349db4f5529b884_prof);

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

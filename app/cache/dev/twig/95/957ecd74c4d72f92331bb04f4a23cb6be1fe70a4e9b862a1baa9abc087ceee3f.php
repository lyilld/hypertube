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
        $__internal_0e11449fedc908398bd0ba4edd5bdd855a857c52e414605fd8521a62528f5d13 = $this->env->getExtension("native_profiler");
        $__internal_0e11449fedc908398bd0ba4edd5bdd855a857c52e414605fd8521a62528f5d13->enter($__internal_0e11449fedc908398bd0ba4edd5bdd855a857c52e414605fd8521a62528f5d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:change_password.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_0e11449fedc908398bd0ba4edd5bdd855a857c52e414605fd8521a62528f5d13->leave($__internal_0e11449fedc908398bd0ba4edd5bdd855a857c52e414605fd8521a62528f5d13_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee530ef7ec68e7d2a131ca81d0f818311a6849762ced2dbfdc25cf45259f7cdc = $this->env->getExtension("native_profiler");
        $__internal_ee530ef7ec68e7d2a131ca81d0f818311a6849762ced2dbfdc25cf45259f7cdc->enter($__internal_ee530ef7ec68e7d2a131ca81d0f818311a6849762ced2dbfdc25cf45259f7cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "UserBundle:ChangePassword:change_password.html.twig", 2)->display($context);
        
        $__internal_ee530ef7ec68e7d2a131ca81d0f818311a6849762ced2dbfdc25cf45259f7cdc->leave($__internal_ee530ef7ec68e7d2a131ca81d0f818311a6849762ced2dbfdc25cf45259f7cdc_prof);

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

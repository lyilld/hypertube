<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_63a8c71b20fdd18cc52616010cf777124d9fa3c6c4ffbd7700014e75aa6ef5d6 extends Twig_Template
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
        $__internal_9f67b2a438db3ea1bfbcc1af370774a41bb581785316c5a6500d91a99cd60910 = $this->env->getExtension("native_profiler");
        $__internal_9f67b2a438db3ea1bfbcc1af370774a41bb581785316c5a6500d91a99cd60910->enter($__internal_9f67b2a438db3ea1bfbcc1af370774a41bb581785316c5a6500d91a99cd60910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9f67b2a438db3ea1bfbcc1af370774a41bb581785316c5a6500d91a99cd60910->leave($__internal_9f67b2a438db3ea1bfbcc1af370774a41bb581785316c5a6500d91a99cd60910_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_faf5c0e8fcbbdd432adfb96a56e1c91af9025a7b5960a7d05d91cf30aae0f1d6 = $this->env->getExtension("native_profiler");
        $__internal_faf5c0e8fcbbdd432adfb96a56e1c91af9025a7b5960a7d05d91cf30aae0f1d6->enter($__internal_faf5c0e8fcbbdd432adfb96a56e1c91af9025a7b5960a7d05d91cf30aae0f1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_faf5c0e8fcbbdd432adfb96a56e1c91af9025a7b5960a7d05d91cf30aae0f1d6->leave($__internal_faf5c0e8fcbbdd432adfb96a56e1c91af9025a7b5960a7d05d91cf30aae0f1d6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

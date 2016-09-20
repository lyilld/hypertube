<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_eaaae3ebeb5f8bed27b480471f945fb8d95162a63372dfb0a610e97c80b61fde extends Twig_Template
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
        $__internal_d298b62128fdbc87b2c62dda5f2c1096e8a755892a900c34188f47ba9aeaf443 = $this->env->getExtension("native_profiler");
        $__internal_d298b62128fdbc87b2c62dda5f2c1096e8a755892a900c34188f47ba9aeaf443->enter($__internal_d298b62128fdbc87b2c62dda5f2c1096e8a755892a900c34188f47ba9aeaf443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d298b62128fdbc87b2c62dda5f2c1096e8a755892a900c34188f47ba9aeaf443->leave($__internal_d298b62128fdbc87b2c62dda5f2c1096e8a755892a900c34188f47ba9aeaf443_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0d35bd4b06bd87b52a8ea732e0f44eee90e1bf3e8a5de8047297abf9f831fb07 = $this->env->getExtension("native_profiler");
        $__internal_0d35bd4b06bd87b52a8ea732e0f44eee90e1bf3e8a5de8047297abf9f831fb07->enter($__internal_0d35bd4b06bd87b52a8ea732e0f44eee90e1bf3e8a5de8047297abf9f831fb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0d35bd4b06bd87b52a8ea732e0f44eee90e1bf3e8a5de8047297abf9f831fb07->leave($__internal_0d35bd4b06bd87b52a8ea732e0f44eee90e1bf3e8a5de8047297abf9f831fb07_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

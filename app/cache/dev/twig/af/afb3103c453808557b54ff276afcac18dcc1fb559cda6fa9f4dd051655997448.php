<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_420b55509027062e1cb293e306b4183c03135d5545204d0e4e0ebfaa397a3e8f extends Twig_Template
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
        $__internal_2b449431e5d7928344428dd6342b76817c37b4853819c39a5e06d20a219cf211 = $this->env->getExtension("native_profiler");
        $__internal_2b449431e5d7928344428dd6342b76817c37b4853819c39a5e06d20a219cf211->enter($__internal_2b449431e5d7928344428dd6342b76817c37b4853819c39a5e06d20a219cf211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2b449431e5d7928344428dd6342b76817c37b4853819c39a5e06d20a219cf211->leave($__internal_2b449431e5d7928344428dd6342b76817c37b4853819c39a5e06d20a219cf211_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_595f733ff8d3f0abd66dc6bb26ab71d2335edfc0438848153e6009cc6965bf02 = $this->env->getExtension("native_profiler");
        $__internal_595f733ff8d3f0abd66dc6bb26ab71d2335edfc0438848153e6009cc6965bf02->enter($__internal_595f733ff8d3f0abd66dc6bb26ab71d2335edfc0438848153e6009cc6965bf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_595f733ff8d3f0abd66dc6bb26ab71d2335edfc0438848153e6009cc6965bf02->leave($__internal_595f733ff8d3f0abd66dc6bb26ab71d2335edfc0438848153e6009cc6965bf02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

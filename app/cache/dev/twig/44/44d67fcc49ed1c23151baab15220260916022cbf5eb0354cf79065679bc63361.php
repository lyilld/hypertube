<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ae17924c679ad441f0a03ddb21c4faa0d50657a6f78281752c200a8ae973e6b2 extends Twig_Template
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
        $__internal_77a98f38a927f867ccc15b4aa6bf09798b0c17bc09fac05a1c3247799ee9cfd8 = $this->env->getExtension("native_profiler");
        $__internal_77a98f38a927f867ccc15b4aa6bf09798b0c17bc09fac05a1c3247799ee9cfd8->enter($__internal_77a98f38a927f867ccc15b4aa6bf09798b0c17bc09fac05a1c3247799ee9cfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_77a98f38a927f867ccc15b4aa6bf09798b0c17bc09fac05a1c3247799ee9cfd8->leave($__internal_77a98f38a927f867ccc15b4aa6bf09798b0c17bc09fac05a1c3247799ee9cfd8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a3d26722da935340df8c3aad1027f65f18574eed8e99e08750028c895b8a6a0 = $this->env->getExtension("native_profiler");
        $__internal_0a3d26722da935340df8c3aad1027f65f18574eed8e99e08750028c895b8a6a0->enter($__internal_0a3d26722da935340df8c3aad1027f65f18574eed8e99e08750028c895b8a6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 2)->display($context);
        
        $__internal_0a3d26722da935340df8c3aad1027f65f18574eed8e99e08750028c895b8a6a0->leave($__internal_0a3d26722da935340df8c3aad1027f65f18574eed8e99e08750028c895b8a6a0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

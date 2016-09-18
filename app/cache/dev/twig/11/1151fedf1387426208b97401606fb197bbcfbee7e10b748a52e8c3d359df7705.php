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
        $__internal_b78faa210c9ce1c3fd3701caa312c2624acf486c83ac51caec51fd289a896701 = $this->env->getExtension("native_profiler");
        $__internal_b78faa210c9ce1c3fd3701caa312c2624acf486c83ac51caec51fd289a896701->enter($__internal_b78faa210c9ce1c3fd3701caa312c2624acf486c83ac51caec51fd289a896701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b78faa210c9ce1c3fd3701caa312c2624acf486c83ac51caec51fd289a896701->leave($__internal_b78faa210c9ce1c3fd3701caa312c2624acf486c83ac51caec51fd289a896701_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1600e178c47e84b5f2184be2d158bce9eeaba576435569fa310975598c030cee = $this->env->getExtension("native_profiler");
        $__internal_1600e178c47e84b5f2184be2d158bce9eeaba576435569fa310975598c030cee->enter($__internal_1600e178c47e84b5f2184be2d158bce9eeaba576435569fa310975598c030cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 2)->display($context);
        
        $__internal_1600e178c47e84b5f2184be2d158bce9eeaba576435569fa310975598c030cee->leave($__internal_1600e178c47e84b5f2184be2d158bce9eeaba576435569fa310975598c030cee_prof);

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

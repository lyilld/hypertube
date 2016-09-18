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
        $__internal_6db45d5320b96357c6d0582e87e33c9cf1fb28d8731b24e73203f1076a8f18cb = $this->env->getExtension("native_profiler");
        $__internal_6db45d5320b96357c6d0582e87e33c9cf1fb28d8731b24e73203f1076a8f18cb->enter($__internal_6db45d5320b96357c6d0582e87e33c9cf1fb28d8731b24e73203f1076a8f18cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6db45d5320b96357c6d0582e87e33c9cf1fb28d8731b24e73203f1076a8f18cb->leave($__internal_6db45d5320b96357c6d0582e87e33c9cf1fb28d8731b24e73203f1076a8f18cb_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_752de3fe7c1f836e1d1f683d540d11f85bdea369cf4408d1c6ee0255dc17c8c2 = $this->env->getExtension("native_profiler");
        $__internal_752de3fe7c1f836e1d1f683d540d11f85bdea369cf4408d1c6ee0255dc17c8c2->enter($__internal_752de3fe7c1f836e1d1f683d540d11f85bdea369cf4408d1c6ee0255dc17c8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_752de3fe7c1f836e1d1f683d540d11f85bdea369cf4408d1c6ee0255dc17c8c2->leave($__internal_752de3fe7c1f836e1d1f683d540d11f85bdea369cf4408d1c6ee0255dc17c8c2_prof);

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

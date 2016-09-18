<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_fbef3d7c833f267aa6de732d2584e414cff13e8b21f9652b825c40b097233bfb extends Twig_Template
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
        $__internal_91513fdfacb60186a99211034558721de99d617bc9977c619b68b8eab07f5f36 = $this->env->getExtension("native_profiler");
        $__internal_91513fdfacb60186a99211034558721de99d617bc9977c619b68b8eab07f5f36->enter($__internal_91513fdfacb60186a99211034558721de99d617bc9977c619b68b8eab07f5f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_91513fdfacb60186a99211034558721de99d617bc9977c619b68b8eab07f5f36->leave($__internal_91513fdfacb60186a99211034558721de99d617bc9977c619b68b8eab07f5f36_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1493c0b91f4dbd389d95d0436854d243b8ad3878e6bb0af2bb140fb242bcd73 = $this->env->getExtension("native_profiler");
        $__internal_c1493c0b91f4dbd389d95d0436854d243b8ad3878e6bb0af2bb140fb242bcd73->enter($__internal_c1493c0b91f4dbd389d95d0436854d243b8ad3878e6bb0af2bb140fb242bcd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c1493c0b91f4dbd389d95d0436854d243b8ad3878e6bb0af2bb140fb242bcd73->leave($__internal_c1493c0b91f4dbd389d95d0436854d243b8ad3878e6bb0af2bb140fb242bcd73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

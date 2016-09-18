<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_8e9a14b9fcc375bf3c8f98ed70d6e3fece8c6b473257b1e9643c791273e9807f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3352a5b946e6e7c53691fe8281861b5afd1ada0f58a52b8eea994e406d222a69 = $this->env->getExtension("native_profiler");
        $__internal_3352a5b946e6e7c53691fe8281861b5afd1ada0f58a52b8eea994e406d222a69->enter($__internal_3352a5b946e6e7c53691fe8281861b5afd1ada0f58a52b8eea994e406d222a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3352a5b946e6e7c53691fe8281861b5afd1ada0f58a52b8eea994e406d222a69->leave($__internal_3352a5b946e6e7c53691fe8281861b5afd1ada0f58a52b8eea994e406d222a69_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bbba92d8b2b8f285f5edbc87b552d07dd33a1c589fd47e22cd43678d349ca37f = $this->env->getExtension("native_profiler");
        $__internal_bbba92d8b2b8f285f5edbc87b552d07dd33a1c589fd47e22cd43678d349ca37f->enter($__internal_bbba92d8b2b8f285f5edbc87b552d07dd33a1c589fd47e22cd43678d349ca37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bbba92d8b2b8f285f5edbc87b552d07dd33a1c589fd47e22cd43678d349ca37f->leave($__internal_bbba92d8b2b8f285f5edbc87b552d07dd33a1c589fd47e22cd43678d349ca37f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

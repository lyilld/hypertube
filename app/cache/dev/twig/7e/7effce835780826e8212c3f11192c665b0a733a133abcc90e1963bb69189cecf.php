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
        $__internal_2655f033655b04c28d8bfea88dd25d79b8d7f6c7a22e9dd875a38321498c9b95 = $this->env->getExtension("native_profiler");
        $__internal_2655f033655b04c28d8bfea88dd25d79b8d7f6c7a22e9dd875a38321498c9b95->enter($__internal_2655f033655b04c28d8bfea88dd25d79b8d7f6c7a22e9dd875a38321498c9b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2655f033655b04c28d8bfea88dd25d79b8d7f6c7a22e9dd875a38321498c9b95->leave($__internal_2655f033655b04c28d8bfea88dd25d79b8d7f6c7a22e9dd875a38321498c9b95_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a92e97dd232b1f9a7ddf207c0692750ebb9fc24eee0364a74c769cd552844975 = $this->env->getExtension("native_profiler");
        $__internal_a92e97dd232b1f9a7ddf207c0692750ebb9fc24eee0364a74c769cd552844975->enter($__internal_a92e97dd232b1f9a7ddf207c0692750ebb9fc24eee0364a74c769cd552844975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a92e97dd232b1f9a7ddf207c0692750ebb9fc24eee0364a74c769cd552844975->leave($__internal_a92e97dd232b1f9a7ddf207c0692750ebb9fc24eee0364a74c769cd552844975_prof);

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

<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_8132426b8672e3c78175756aeb8ad4b1dbfa9c63f71375060235ddc9822cbe7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:password_already_requested.html.twig", 1);
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
        $__internal_4bca9031d5c228a274d815642b0c301427edb8c6d864c8f7f63f6de47599f8be = $this->env->getExtension("native_profiler");
        $__internal_4bca9031d5c228a274d815642b0c301427edb8c6d864c8f7f63f6de47599f8be->enter($__internal_4bca9031d5c228a274d815642b0c301427edb8c6d864c8f7f63f6de47599f8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bca9031d5c228a274d815642b0c301427edb8c6d864c8f7f63f6de47599f8be->leave($__internal_4bca9031d5c228a274d815642b0c301427edb8c6d864c8f7f63f6de47599f8be_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ae999d942410ad0a023529dd9de05e52cfe33f1f33ed087ee4f0aaa8814d9d5 = $this->env->getExtension("native_profiler");
        $__internal_9ae999d942410ad0a023529dd9de05e52cfe33f1f33ed087ee4f0aaa8814d9d5->enter($__internal_9ae999d942410ad0a023529dd9de05e52cfe33f1f33ed087ee4f0aaa8814d9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9ae999d942410ad0a023529dd9de05e52cfe33f1f33ed087ee4f0aaa8814d9d5->leave($__internal_9ae999d942410ad0a023529dd9de05e52cfe33f1f33ed087ee4f0aaa8814d9d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

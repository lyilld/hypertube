<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_1428d9b35287d6b0963dd5a36238a45c48abcffd95ecc8881b8e6cdd41004760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_6378db176e78920990024c0543c69f2c04eb5b9721430d332744a1fcd4078e7c = $this->env->getExtension("native_profiler");
        $__internal_6378db176e78920990024c0543c69f2c04eb5b9721430d332744a1fcd4078e7c->enter($__internal_6378db176e78920990024c0543c69f2c04eb5b9721430d332744a1fcd4078e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6378db176e78920990024c0543c69f2c04eb5b9721430d332744a1fcd4078e7c->leave($__internal_6378db176e78920990024c0543c69f2c04eb5b9721430d332744a1fcd4078e7c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b4c64812aad6d1b6dc7f6072fa680cf8947fc29f0bf68d0027e07d95204a8e8 = $this->env->getExtension("native_profiler");
        $__internal_6b4c64812aad6d1b6dc7f6072fa680cf8947fc29f0bf68d0027e07d95204a8e8->enter($__internal_6b4c64812aad6d1b6dc7f6072fa680cf8947fc29f0bf68d0027e07d95204a8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_6b4c64812aad6d1b6dc7f6072fa680cf8947fc29f0bf68d0027e07d95204a8e8->leave($__internal_6b4c64812aad6d1b6dc7f6072fa680cf8947fc29f0bf68d0027e07d95204a8e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */

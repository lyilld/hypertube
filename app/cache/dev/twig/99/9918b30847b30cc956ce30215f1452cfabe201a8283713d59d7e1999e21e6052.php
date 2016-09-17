<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e6240590f27ed7954542392afdf68f0379b2e9ce268a4dda2efea81b569733a7 extends Twig_Template
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
        $__internal_6983b806ee99659d3e14dfe3948a6c0fb5ae2916c738d9f9c4ee99fcd1ec954e = $this->env->getExtension("native_profiler");
        $__internal_6983b806ee99659d3e14dfe3948a6c0fb5ae2916c738d9f9c4ee99fcd1ec954e->enter($__internal_6983b806ee99659d3e14dfe3948a6c0fb5ae2916c738d9f9c4ee99fcd1ec954e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6983b806ee99659d3e14dfe3948a6c0fb5ae2916c738d9f9c4ee99fcd1ec954e->leave($__internal_6983b806ee99659d3e14dfe3948a6c0fb5ae2916c738d9f9c4ee99fcd1ec954e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fb9ed8ce3c9836f6c0d45d92e638b2f1660335593d4df1af20680458f0d81a1 = $this->env->getExtension("native_profiler");
        $__internal_3fb9ed8ce3c9836f6c0d45d92e638b2f1660335593d4df1af20680458f0d81a1->enter($__internal_3fb9ed8ce3c9836f6c0d45d92e638b2f1660335593d4df1af20680458f0d81a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_3fb9ed8ce3c9836f6c0d45d92e638b2f1660335593d4df1af20680458f0d81a1->leave($__internal_3fb9ed8ce3c9836f6c0d45d92e638b2f1660335593d4df1af20680458f0d81a1_prof);

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

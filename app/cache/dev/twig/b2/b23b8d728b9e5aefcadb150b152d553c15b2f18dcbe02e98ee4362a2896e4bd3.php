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
        $__internal_81563a2e240b94ade354a4d6ff8fb0aeb66649b6dfc12f257f78eca60eda0c90 = $this->env->getExtension("native_profiler");
        $__internal_81563a2e240b94ade354a4d6ff8fb0aeb66649b6dfc12f257f78eca60eda0c90->enter($__internal_81563a2e240b94ade354a4d6ff8fb0aeb66649b6dfc12f257f78eca60eda0c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81563a2e240b94ade354a4d6ff8fb0aeb66649b6dfc12f257f78eca60eda0c90->leave($__internal_81563a2e240b94ade354a4d6ff8fb0aeb66649b6dfc12f257f78eca60eda0c90_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4c8e68094d5ac1c56e6d314178b7bc44bf45eb98fd1b907238377f2f9a7ce39 = $this->env->getExtension("native_profiler");
        $__internal_c4c8e68094d5ac1c56e6d314178b7bc44bf45eb98fd1b907238377f2f9a7ce39->enter($__internal_c4c8e68094d5ac1c56e6d314178b7bc44bf45eb98fd1b907238377f2f9a7ce39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c4c8e68094d5ac1c56e6d314178b7bc44bf45eb98fd1b907238377f2f9a7ce39->leave($__internal_c4c8e68094d5ac1c56e6d314178b7bc44bf45eb98fd1b907238377f2f9a7ce39_prof);

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

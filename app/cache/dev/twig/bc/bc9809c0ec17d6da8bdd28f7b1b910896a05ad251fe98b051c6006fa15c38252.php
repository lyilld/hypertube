<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_770075605b7bcecc26c998653b079a51751255df7b020c2e5571d90eef5e0d9d extends Twig_Template
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
        $__internal_69b1332aafcbfa01e4b032ac187e6d234f7cd43110b0a872f58eab732c71417f = $this->env->getExtension("native_profiler");
        $__internal_69b1332aafcbfa01e4b032ac187e6d234f7cd43110b0a872f58eab732c71417f->enter($__internal_69b1332aafcbfa01e4b032ac187e6d234f7cd43110b0a872f58eab732c71417f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b1332aafcbfa01e4b032ac187e6d234f7cd43110b0a872f58eab732c71417f->leave($__internal_69b1332aafcbfa01e4b032ac187e6d234f7cd43110b0a872f58eab732c71417f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39893465cd70e1aad3c6d5bf9c0d0b82c2751d2aee5d53972f7bbc0b65c2e3d4 = $this->env->getExtension("native_profiler");
        $__internal_39893465cd70e1aad3c6d5bf9c0d0b82c2751d2aee5d53972f7bbc0b65c2e3d4->enter($__internal_39893465cd70e1aad3c6d5bf9c0d0b82c2751d2aee5d53972f7bbc0b65c2e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_39893465cd70e1aad3c6d5bf9c0d0b82c2751d2aee5d53972f7bbc0b65c2e3d4->leave($__internal_39893465cd70e1aad3c6d5bf9c0d0b82c2751d2aee5d53972f7bbc0b65c2e3d4_prof);

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

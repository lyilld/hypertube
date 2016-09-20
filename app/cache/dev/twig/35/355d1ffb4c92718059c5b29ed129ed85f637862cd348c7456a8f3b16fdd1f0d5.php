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
        $__internal_d73879666a00225f36561c09e609a0a3028b70bddda1c4e85f709f61fcf4a781 = $this->env->getExtension("native_profiler");
        $__internal_d73879666a00225f36561c09e609a0a3028b70bddda1c4e85f709f61fcf4a781->enter($__internal_d73879666a00225f36561c09e609a0a3028b70bddda1c4e85f709f61fcf4a781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d73879666a00225f36561c09e609a0a3028b70bddda1c4e85f709f61fcf4a781->leave($__internal_d73879666a00225f36561c09e609a0a3028b70bddda1c4e85f709f61fcf4a781_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b7e1760b9704bb7b40b98b8817ef1b89a552a68936b924a2fb6d778dc2d26a32 = $this->env->getExtension("native_profiler");
        $__internal_b7e1760b9704bb7b40b98b8817ef1b89a552a68936b924a2fb6d778dc2d26a32->enter($__internal_b7e1760b9704bb7b40b98b8817ef1b89a552a68936b924a2fb6d778dc2d26a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b7e1760b9704bb7b40b98b8817ef1b89a552a68936b924a2fb6d778dc2d26a32->leave($__internal_b7e1760b9704bb7b40b98b8817ef1b89a552a68936b924a2fb6d778dc2d26a32_prof);

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

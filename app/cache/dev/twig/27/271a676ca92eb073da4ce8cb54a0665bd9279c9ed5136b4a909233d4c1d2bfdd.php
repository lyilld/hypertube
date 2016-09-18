<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_29d5570b1e19eb38d01c3ef1b3011b680fb469835b7b2eb39067d9e6354d224d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80c510f28113d3b2d08bb625ac2a5742159468dfbf7f7c8bde68d3ece825d7a1 = $this->env->getExtension("native_profiler");
        $__internal_80c510f28113d3b2d08bb625ac2a5742159468dfbf7f7c8bde68d3ece825d7a1->enter($__internal_80c510f28113d3b2d08bb625ac2a5742159468dfbf7f7c8bde68d3ece825d7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_80c510f28113d3b2d08bb625ac2a5742159468dfbf7f7c8bde68d3ece825d7a1->leave($__internal_80c510f28113d3b2d08bb625ac2a5742159468dfbf7f7c8bde68d3ece825d7a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */

<?php

/* DiviAjaxLoginBundle:Login:example_fos_user_bundle.html.twig */
class __TwigTemplate_6abee7b6ecbf232164e725ed32c0614838527f562c51ea7a3ee71984a0a566cf extends Twig_Template
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
        $__internal_8a96afbfbcbdfb5d413dbac47d4ba11fb42891aa9d9366f67b449bbd1f1f40db = $this->env->getExtension("native_profiler");
        $__internal_8a96afbfbcbdfb5d413dbac47d4ba11fb42891aa9d9366f67b449bbd1f1f40db->enter($__internal_8a96afbfbcbdfb5d413dbac47d4ba11fb42891aa9d9366f67b449bbd1f1f40db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Login:example_fos_user_bundle.html.twig"));

        // line 2
        $this->loadTemplate("DiviAjaxLoginBundle:Javascript:init.html.twig", "DiviAjaxLoginBundle:Login:example_fos_user_bundle.html.twig", 2)->display(array_merge($context, array("form_selector" => "#form-login")));
        // line 3
        echo "
";
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" id=\"form-login\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>";
        
        $__internal_8a96afbfbcbdfb5d413dbac47d4ba11fb42891aa9d9366f67b449bbd1f1f40db->leave($__internal_8a96afbfbcbdfb5d413dbac47d4ba11fb42891aa9d9366f67b449bbd1f1f40db_prof);

    }

    public function getTemplateName()
    {
        return "DiviAjaxLoginBundle:Login:example_fos_user_bundle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  53 => 15,  46 => 11,  41 => 9,  37 => 8,  32 => 6,  27 => 5,  24 => 3,  22 => 2,);
    }
}
/* {# Include this line to get the javascript AJAX code #}*/
/* {% include 'DiviAjaxLoginBundle:Javascript:init.html.twig' with {'form_selector': '#form-login'} %}*/
/* */
/* {# Dot not forget to set the form's id attribute #form-login and link to the line above #}*/
/* <form action="{{ path("fos_user_security_check") }}" method="post" id="form-login">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* </form>*/

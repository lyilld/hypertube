<?php

/* UserBundle:Security:login_content.html.twig */
class __TwigTemplate_01d71473334250247a292096f1e12275ba62a39e1867d81d73d642bb183cc593 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:MyRegister"));
        echo "
";
        // line 2
        $this->loadTemplate("DiviAjaxLoginBundle:Javascript:init.html.twig", "UserBundle:Security:login_content.html.twig", 2)->display(array_merge($context, array("form_selector" => "#form-login")));
        // line 3
        echo "<div id=\"login\" class=\"main_form_register\">
\t<a><img id=\"Fb_logo\" src=\"\"></a>
\t<a><img id=\"ecole_logo\" src=\"\"></a>
\t<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"sky-form\" id=\"form-login\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
\t\t<header>Login form
\t\t<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/cross.png"), "html", null, true);
        echo "\" class=\"close_cross\" onclick=\"display_login();\">
\t\t</header>

\t\t<fieldset>
\t\t\t<section>
\t\t\t\t<label for=\"username\" class=\"input\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo "
\t\t\t\t<i class=\"fa fa-user fa-lg icon-append\"></i>
\t\t\t\t<input type=\"text\" placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
\t\t\t\t</label>
\t\t\t</section>

\t\t\t<section>
\t\t\t\t<label class=\"input\" for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "
\t\t\t\t\t<i class=\"fa fa-lock fa-lg icon-append\"></i>
\t\t    <input placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
\t\t\t\t</label>
\t\t\t</section>

\t\t\t<section>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"checkbox-inline\" value=\"on\" />
\t\t\t\t    <label class=\"checkbox\" for=\"remember_me\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("remember me"), "html", null, true);
        echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col col-8\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<section>
\t\t\t\t<a href=\"forgetpwd\"> Mot de passe oublié</a>
\t\t\t</section>

\t\t</fieldset>
\t\t<footer>
 <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t<span onclick=\"display_register();\" class=\"button button-secondary\">Register</span>
\t\t</footer>
\t</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 46,  75 => 33,  61 => 22,  52 => 16,  47 => 14,  39 => 9,  34 => 7,  30 => 6,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ render(controller("FOSUserBundle:Registration:MyRegister")) }}*/
/* {% include 'DiviAjaxLoginBundle:Javascript:init.html.twig' with {'form_selector': '#form-login'} %}*/
/* <div id="login" class="main_form_register">*/
/* 	<a><img id="Fb_logo" src=""></a>*/
/* 	<a><img id="ecole_logo" src=""></a>*/
/* 	<form action="{{ path("fos_user_security_check") }}" method="post"  class="sky-form" id="form-login">*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 		<header>Login form*/
/* 		<img src="{{ asset('/bundles/IMAGE/cross.png') }}" class="close_cross" onclick="display_login();">*/
/* 		</header>*/
/* */
/* 		<fieldset>*/
/* 			<section>*/
/* 				<label for="username" class="input">{{ 'Username'|trans }}*/
/* 				<i class="fa fa-user fa-lg icon-append"></i>*/
/* 				<input type="text" placeholder="Username" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 				<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/* 				</label>*/
/* 			</section>*/
/* */
/* 			<section>*/
/* 				<label class="input" for="password">{{ 'Password'|trans }}*/
/* 					<i class="fa fa-lock fa-lg icon-append"></i>*/
/* 		    <input placeholder="Password" type="password" id="password" name="_password" required="required" />*/
/* 					<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/* 				</label>*/
/* 			</section>*/
/* */
/* 			<section>*/
/* 				<div class="row">*/
/* 					<div class="col col-4">*/
/* 						<input type="checkbox" id="remember_me" name="checkbox-inline" value="on" />*/
/* 				    <label class="checkbox" for="remember_me">{{ 'remember me'|trans }}</label>*/
/* 					</div>*/
/* 					<div class="col col-8">*/
/* 					</div>*/
/* 				</div>*/
/* 			</section>*/
/* */
/* 			<section>*/
/* 				<a href="forgetpwd"> Mot de passe oublié</a>*/
/* 			</section>*/
/* */
/* 		</fieldset>*/
/* 		<footer>*/
/*  <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />*/
/* 			<span onclick="display_register();" class="button button-secondary">Register</span>*/
/* 		</footer>*/
/* 	</form>*/
/* </div>*/
/* */

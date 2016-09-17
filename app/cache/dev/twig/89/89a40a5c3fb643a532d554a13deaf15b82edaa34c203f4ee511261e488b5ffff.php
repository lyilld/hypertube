<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_f6d132eeff60c37182584a8833dd556dbd5ff75605c3a6601a86a7c3213401fa extends Twig_Template
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
        $__internal_8ef518e8a62f5a614a0681c7c1aef20722ae9831bdde761450b8d76f935f6d30 = $this->env->getExtension("native_profiler");
        $__internal_8ef518e8a62f5a614a0681c7c1aef20722ae9831bdde761450b8d76f935f6d30->enter($__internal_8ef518e8a62f5a614a0681c7c1aef20722ae9831bdde761450b8d76f935f6d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 1
        echo "<div id=\"container\">
</div>
";
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:MyRegister"));
        echo "

<div id=\"login\" class=\"main_form_register\">
\t<a><img id=\"Fb_logo\" src=\"\"></a>
\t<a><img id=\"ecole_logo\" src=\"\"></a>
\t<form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"sky-form\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t<header>Login form

\t\t</header>

\t\t<fieldset>
\t\t\t<section>
\t\t\t\t<label for=\"username\" class=\"input\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo "
\t\t\t\t<i class=\"fa fa-user fa-lg place_icon\"></i>
\t\t\t\t<input type=\"text\" placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
\t\t\t\t</label>
\t\t\t</section>

\t\t\t<section>
\t\t\t\t<label class=\"input\" for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "
\t\t\t\t\t<i class=\"fa fa-lock fa-lg place_icon\"></i>
\t\t    <input placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
\t\t\t\t</label>
\t\t\t</section>

\t\t\t<section>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"checkbox-inline\" value=\"on\" />
\t\t\t\t    <label class=\"checkbox\" for=\"remember_me\">";
        // line 35
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
\t\t\t<input class=\"button\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log In"), "html", null, true);
        echo "\" />
\t\t\t<span onclick=\"display_register();\" class=\"button button-secondary\">Register</span>
\t\t</footer>
\t</form>
</div>
";
        
        $__internal_8ef518e8a62f5a614a0681c7c1aef20722ae9831bdde761450b8d76f935f6d30->leave($__internal_8ef518e8a62f5a614a0681c7c1aef20722ae9831bdde761450b8d76f935f6d30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  76 => 35,  62 => 24,  53 => 18,  48 => 16,  38 => 9,  34 => 8,  26 => 3,  22 => 1,);
    }
}
/* <div id="container">*/
/* </div>*/
/* {{ render(controller("FOSUserBundle:Registration:MyRegister")) }}*/
/* */
/* <div id="login" class="main_form_register">*/
/* 	<a><img id="Fb_logo" src=""></a>*/
/* 	<a><img id="ecole_logo" src=""></a>*/
/* 	<form action="{{ path("fos_user_security_check") }}" method="post"  class="sky-form">*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 		<header>Login form*/
/* */
/* 		</header>*/
/* */
/* 		<fieldset>*/
/* 			<section>*/
/* 				<label for="username" class="input">{{ 'Username'|trans }}*/
/* 				<i class="fa fa-user fa-lg place_icon"></i>*/
/* 				<input type="text" placeholder="Username" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* 				<b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/* 				</label>*/
/* 			</section>*/
/* */
/* 			<section>*/
/* 				<label class="input" for="password">{{ 'Password'|trans }}*/
/* 					<i class="fa fa-lock fa-lg place_icon"></i>*/
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
/* 			<input class="button" type="submit" id="_submit" name="_submit" value="{{ 'Log In'|trans }}" />*/
/* 			<span onclick="display_register();" class="button button-secondary">Register</span>*/
/* 		</footer>*/
/* 	</form>*/
/* </div>*/
/* */

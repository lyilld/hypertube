<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0a9f9092aeb0410c29984b63d5c9b0be067c7234a6e9be6775324211149eb070 extends Twig_Template
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
        $__internal_01c130c79afe95c2e07415c8d43f6cd5c4b18b338c5800e435b1dc6c8559a5c7 = $this->env->getExtension("native_profiler");
        $__internal_01c130c79afe95c2e07415c8d43f6cd5c4b18b338c5800e435b1dc6c8559a5c7->enter($__internal_01c130c79afe95c2e07415c8d43f6cd5c4b18b338c5800e435b1dc6c8559a5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "<html >
\t<head>
\t\t<meta charset=\"utf-8\">
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/pagination.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/sky-forms.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/font-awesome.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/iconHT.png"), "html", null, true);
        echo "\">
    \t<title>Log-me in</title>
    </head>
    <body style=\"background-color: white;\">

\t<div id=\"oops_login\" class=\"main_form_register\">

\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/teamavengers.png"), "html", null, true);
        echo "\" style=\"position: absolute; left: 600px; width: 450px; height: 357px;\">
\t<img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/teamxmen.png"), "html", null, true);
        echo "\" style=\"position: absolute; right: 600px; width: 450px; height: 357px;\">
\t<div style=\"position: absolute; bottom: -180px; left: 0px; width: 600px; height: 70px; font-family: geo; background-color: rgba(231, 76, 60, 0.8); box-shadow: 0px 0px 10px rgba(231, 76, 60,1.0) inset, 0px 0px 10px rgba(192, 57, 43,1.0); text-align: center; font-size: 2em; padding-top: 10px;\"> Oops.. Something wrong ? </div>
\t<a><img id=\"Fb_logo\" src=\"\"></a>
\t<a><img id=\"ecole_logo\" src=\"\"></a>
\t<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"sky-form\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
\t\t<header>Login<a id=\"home\" ><span id=\"text\">Back Home </span><i class=\"fa fa-home\"> </i></a></header>
\t\t<fieldset>
\t\t\t<section>
\t\t\t\t<label for=\"username\" class=\"input\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
        echo " 
\t\t\t\t<i class=\"fa fa-user fa-lg icon-append\"></i>
\t\t\t\t<input type=\"text\" placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
\t\t\t\t</label>
\t\t\t</section>

\t\t\t<section>
\t\t\t\t<label class=\"input\" for=\"password\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "
\t\t\t\t\t<i class=\"fa fa-lock fa-lg icon-append\"></i>
\t\t    <input placeholder=\"Password\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t\t\t\t<b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
\t\t\t\t</label>
\t\t\t</section>
\t\t\t<section>
\t\t\t\t<a href=\"forgetpwd\"> Mot de passe oublié</a>
\t\t\t</section>
\t\t</fieldset>
\t\t<footer>
\t\t\t<input class=\"button\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submit"), "html", null, true);
        echo "\" />
\t\t</footer>
\t</form>
\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/DarthVader.png"), "html", null, true);
        echo "\" style=\"position: absolute; top: -300px; width: 600px; height: 357px; z-index: -1; opacity: 0.9;\">
\t<img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/bb8.png"), "html", null, true);
        echo "\" style=\"position: absolute; top: -88px; right: 0px; width: 100px; height: 100px; z-index: -1; opacity: 0.9;\">
\t<img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/r2d2.png"), "html", null, true);
        echo "\" style=\"position: absolute; top: -138px; left: 0px; width: 120px; height: 150px; z-index: -1; opacity: 0.9;\">
</body>
</html>";
        
        $__internal_01c130c79afe95c2e07415c8d43f6cd5c4b18b338c5800e435b1dc6c8559a5c7->leave($__internal_01c130c79afe95c2e07415c8d43f6cd5c4b18b338c5800e435b1dc6c8559a5c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 55,  127 => 54,  123 => 53,  117 => 50,  103 => 39,  94 => 33,  89 => 31,  82 => 27,  78 => 26,  71 => 22,  67 => 21,  57 => 14,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  36 => 8,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <html >*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/*     	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     	<link rel="stylesheet" href="{{ asset('/bundles/CSS/layout.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/pagination.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/sky-forms.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/font-awesome.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/styles.css') }}">*/
/*         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">*/
/*         <link rel="icon" type="image/png" href="{{ asset('/bundles/IMAGE/iconHT.png') }}">*/
/*     	<title>Log-me in</title>*/
/*     </head>*/
/*     <body style="background-color: white;">*/
/* */
/* 	<div id="oops_login" class="main_form_register">*/
/* */
/* 	<img src="{{ asset('/bundles/IMAGE/teamavengers.png') }}" style="position: absolute; left: 600px; width: 450px; height: 357px;">*/
/* 	<img src="{{ asset('/bundles/IMAGE/teamxmen.png') }}" style="position: absolute; right: 600px; width: 450px; height: 357px;">*/
/* 	<div style="position: absolute; bottom: -180px; left: 0px; width: 600px; height: 70px; font-family: geo; background-color: rgba(231, 76, 60, 0.8); box-shadow: 0px 0px 10px rgba(231, 76, 60,1.0) inset, 0px 0px 10px rgba(192, 57, 43,1.0); text-align: center; font-size: 2em; padding-top: 10px;"> Oops.. Something wrong ? </div>*/
/* 	<a><img id="Fb_logo" src=""></a>*/
/* 	<a><img id="ecole_logo" src=""></a>*/
/* 	<form action="{{ path("fos_user_security_check") }}" method="post"  class="sky-form">*/
/* 		<input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* 		<header>Login<a id="home" ><span id="text">Back Home </span><i class="fa fa-home"> </i></a></header>*/
/* 		<fieldset>*/
/* 			<section>*/
/* 				<label for="username" class="input">{{ 'Username'|trans }} */
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
/* 			<section>*/
/* 				<a href="forgetpwd"> Mot de passe oublié</a>*/
/* 			</section>*/
/* 		</fieldset>*/
/* 		<footer>*/
/* 			<input class="button" type="submit" id="_submit" name="_submit" value="{{ 'Submit'|trans }}" />*/
/* 		</footer>*/
/* 	</form>*/
/* 	<img src="{{ asset('/bundles/IMAGE/DarthVader.png') }}" style="position: absolute; top: -300px; width: 600px; height: 357px; z-index: -1; opacity: 0.9;">*/
/* 	<img src="{{ asset('/bundles/IMAGE/bb8.png') }}" style="position: absolute; top: -88px; right: 0px; width: 100px; height: 100px; z-index: -1; opacity: 0.9;">*/
/* 	<img src="{{ asset('/bundles/IMAGE/r2d2.png') }}" style="position: absolute; top: -138px; left: 0px; width: 120px; height: 150px; z-index: -1; opacity: 0.9;">*/
/* </body>*/
/* </html>*/

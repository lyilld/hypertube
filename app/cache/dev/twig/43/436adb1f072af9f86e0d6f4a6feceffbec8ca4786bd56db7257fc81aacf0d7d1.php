<?php

/* UserBundle:Security:login_content.html.twig */
class __TwigTemplate_e6e258621e23859f2436d566647573b4356a57983912214994b63ca4b5df53bf extends Twig_Template
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
        $__internal_8c01975cf2e379b80bea015508393c69804fcef5f144cf52841c3705ad64dcd0 = $this->env->getExtension("native_profiler");
        $__internal_8c01975cf2e379b80bea015508393c69804fcef5f144cf52841c3705ad64dcd0->enter($__internal_8c01975cf2e379b80bea015508393c69804fcef5f144cf52841c3705ad64dcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login_content.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Registration:MyRegister"));
        echo "

<div id=\"login\" class=\"main_form_register\">
\t<a><img id=\"Fb_logo\" src=\"\"></a>
\t<a><img id=\"ecole_logo\" src=\"\"></a>
\t<form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"sky-form\" id=\"form1\">
\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
\t\t\t<button type=\"button\"  class=\"button\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log In"), "html", null, true);
        echo "\"></button>
\t\t\t<span onclick=\"display_register();\" class=\"button button-secondary\">Register</span>
\t\t</footer>
\t</form>
</div>

<script>

// function Ajaxlogin()
// {
//   \$.ajax({
// \t\turl : \$('form').attr( 'action' ),
// \t\ttype : 'POST',
// \t\tdata : {
//             _username: \$('#username').val(),
//             _password: \$('#password').val(),
//             _remember_me: false,
//             _csrf_token: \$('#_csrf_token').val()
//         },
// \t\tdataType    : \"json\",
// \t})
// }
//
var test = document.getElementById('_submit');

test.addEventListener(\"click\", function(){
\tvar xhr = getXMLHttpRequest();

\txhr.onreadystatechange = function() {
\t\tif (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
\t\t\tconsole.log(xhr.responseText);
\t\t\tconsole.log(\"WESH SA MARCHE\");
\t\t}
\t};
\tconsole.log(\"ON ENTRE\");
\t// alert('KO');
\tvar path = document.getElementById('form1').action

\tvar user = document.getElementById('username').value
\tvar pass = document.getElementById('password').value

\tconsole.log(path);
\tconsole.log(user);
\tconsole.log(pass);

\txhr.open(\"POST\", path, true);
\txhr.setRequestHeader(\"Content-Type\", \"application/x-www-form-urlencoded\");
\txhr.send(\"_username=user&_password=pass&_remember_me=false\");
})
// function Ajaxlogin()
// {
//   \$.ajax({
// \t\turl :  'security_check_route',
// \t\ttype : 'POST',
// \t\tdata : \$('form').serialize(),
// \t\tdataType    : \"json\",
// \t\tsuccess     : function(data, status, object) {
// \t\t\t\t\t\t\t console.log( status );
// \t\t\t\t\t\t\t console.log( object.responseText );
// \t }
// \t})
// }
console.log('script');
function getXMLHttpRequest() {
\tvar xhr = null;

\tif (window.XMLHttpRequest || window.ActiveXObject) {
\t\tif (window.ActiveXObject) {
\t\t\ttry {
\t\t\t\txhr = new ActiveXObject(\"Msxml2.XMLHTTP\");
\t\t\t} catch(e) {
\t\t\t\txhr = new ActiveXObject(\"Microsoft.XMLHTTP\");
\t\t\t}
\t\t} else {
\t\t\txhr = new XMLHttpRequest();
\t\t}
\t} else {
\t\talert(\"Votre navigateur ne supporte pas l'objet XMLHTTPRequest...\");
\t\treturn null;
\t}

\treturn xhr;
}


// function Ajaxlogin()
// {
//   var xhr = getXMLHttpRequest();
//
//   xhr.onreadystatechange = function() {
// \t\tif (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
// \t\t\tconsole.log(xhr.responseText);
//       console.log(\"WESH SA MARCHE\");
// \t\t}
// \t};
//   console.log(\"ON ENTRE\");
//   alert('KO');
//   // xhr.open(\"POST\", \"http://localhost:8080/hypertube_2/web/app_dev.php/security_check_route\", true);
//   // xhr.setRequestHeader(\"Content-Type\", \"application/x-www-form-urlencoded\");
//   // xhr.send(\"variable1=truc&variable2=bidule\");
// }
</script>
";
        
        $__internal_8c01975cf2e379b80bea015508393c69804fcef5f144cf52841c3705ad64dcd0->leave($__internal_8c01975cf2e379b80bea015508393c69804fcef5f144cf52841c3705ad64dcd0_prof);

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
        return array (  91 => 46,  75 => 33,  61 => 22,  52 => 16,  47 => 14,  39 => 9,  34 => 7,  30 => 6,  22 => 1,);
    }
}
/* {{ render(controller("FOSUserBundle:Registration:MyRegister")) }}*/
/* */
/* <div id="login" class="main_form_register">*/
/* 	<a><img id="Fb_logo" src=""></a>*/
/* 	<a><img id="ecole_logo" src=""></a>*/
/* 	<form action="{{ path("fos_user_security_check") }}" method="post"  class="sky-form" id="form1">*/
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
/* 			<button type="button"  class="button" id="_submit" name="_submit" value="{{ 'Log In'|trans }}"></button>*/
/* 			<span onclick="display_register();" class="button button-secondary">Register</span>*/
/* 		</footer>*/
/* 	</form>*/
/* </div>*/
/* */
/* <script>*/
/* */
/* // function Ajaxlogin()*/
/* // {*/
/* //   $.ajax({*/
/* // 		url : $('form').attr( 'action' ),*/
/* // 		type : 'POST',*/
/* // 		data : {*/
/* //             _username: $('#username').val(),*/
/* //             _password: $('#password').val(),*/
/* //             _remember_me: false,*/
/* //             _csrf_token: $('#_csrf_token').val()*/
/* //         },*/
/* // 		dataType    : "json",*/
/* // 	})*/
/* // }*/
/* //*/
/* var test = document.getElementById('_submit');*/
/* */
/* test.addEventListener("click", function(){*/
/* 	var xhr = getXMLHttpRequest();*/
/* */
/* 	xhr.onreadystatechange = function() {*/
/* 		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {*/
/* 			console.log(xhr.responseText);*/
/* 			console.log("WESH SA MARCHE");*/
/* 		}*/
/* 	};*/
/* 	console.log("ON ENTRE");*/
/* 	// alert('KO');*/
/* 	var path = document.getElementById('form1').action*/
/* */
/* 	var user = document.getElementById('username').value*/
/* 	var pass = document.getElementById('password').value*/
/* */
/* 	console.log(path);*/
/* 	console.log(user);*/
/* 	console.log(pass);*/
/* */
/* 	xhr.open("POST", path, true);*/
/* 	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");*/
/* 	xhr.send("_username=user&_password=pass&_remember_me=false");*/
/* })*/
/* // function Ajaxlogin()*/
/* // {*/
/* //   $.ajax({*/
/* // 		url :  'security_check_route',*/
/* // 		type : 'POST',*/
/* // 		data : $('form').serialize(),*/
/* // 		dataType    : "json",*/
/* // 		success     : function(data, status, object) {*/
/* // 							 console.log( status );*/
/* // 							 console.log( object.responseText );*/
/* // 	 }*/
/* // 	})*/
/* // }*/
/* console.log('script');*/
/* function getXMLHttpRequest() {*/
/* 	var xhr = null;*/
/* */
/* 	if (window.XMLHttpRequest || window.ActiveXObject) {*/
/* 		if (window.ActiveXObject) {*/
/* 			try {*/
/* 				xhr = new ActiveXObject("Msxml2.XMLHTTP");*/
/* 			} catch(e) {*/
/* 				xhr = new ActiveXObject("Microsoft.XMLHTTP");*/
/* 			}*/
/* 		} else {*/
/* 			xhr = new XMLHttpRequest();*/
/* 		}*/
/* 	} else {*/
/* 		alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");*/
/* 		return null;*/
/* 	}*/
/* */
/* 	return xhr;*/
/* }*/
/* */
/* */
/* // function Ajaxlogin()*/
/* // {*/
/* //   var xhr = getXMLHttpRequest();*/
/* //*/
/* //   xhr.onreadystatechange = function() {*/
/* // 		if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {*/
/* // 			console.log(xhr.responseText);*/
/* //       console.log("WESH SA MARCHE");*/
/* // 		}*/
/* // 	};*/
/* //   console.log("ON ENTRE");*/
/* //   alert('KO');*/
/* //   // xhr.open("POST", "http://localhost:8080/hypertube_2/web/app_dev.php/security_check_route", true);*/
/* //   // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");*/
/* //   // xhr.send("variable1=truc&variable2=bidule");*/
/* // }*/
/* </script>*/
/* */

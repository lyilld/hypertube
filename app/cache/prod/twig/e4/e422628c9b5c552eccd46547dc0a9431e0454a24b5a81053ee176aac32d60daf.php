<?php

/* UserBundle:Registration:register.html.twig */
class __TwigTemplate_f2730470b402d2cde25ac8230f3ca9e92f1b5786a73009f31292712e8dca590b extends Twig_Template
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
        echo "
<head>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/layout.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/pagination.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/sky-forms.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/iconHT.png"), "html", null, true);
        echo "\">
\t<title>Log-me in</title>
\t<style>html, body{background-color: white;}</style>
</head>
";
        // line 16
        echo "
<div id=\"oops_login\" class=\"main_form_register\">
<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/teamavengers.png"), "html", null, true);
        echo "\" style=\"position: absolute; left: 600px; width: 450px; height: 357px; z-index: -1;\">
\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/teamxmen.png"), "html", null, true);
        echo "\" style=\"position: absolute; right: 600px; width: 450px; height: 357px; z-index: -1;\">
\t<div style=\"position: absolute; bottom: -420px; left: 0px; width: 600px; height: 70px; font-family: geo; background-color: rgba(231, 76, 60, 0.8); box-shadow: 0px 0px 10px rgba(231, 76, 60,1.0) inset, 0px 0px 10px rgba(192, 57, 43,1.0); text-align: center; font-size: 2em; padding-top: 10px;\"> Oops.. Something wrong ? </div>
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "sky-form")));
        echo "
";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
";
        // line 27
        echo "
";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'row');
        echo "
  <header>Registration form
  <a id=\"home\" ><span id=\"text\">Back Home </span><i class=\"fa fa-home\"> </i></a>
  </header>
  <fieldset>
    <section>
      <label class=\"input\">
        <i class=\"fa fa-user fa-lg icon-prepend\"></i>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'errors');
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget', array("attr" => array("placeholder" => "Username")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-envelope-o fa-lg icon-prepend\"></i>
        ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("placeholder" => "Email Adresse")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Needed to verify your account</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'errors');
        echo "
        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Password")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'errors');
        echo "
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "Confirm Password")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
      </label>
    </section>
  </fieldset>
  <fieldset>
    <div class=\"row\">
      <section class=\"col col-6\">
        <label class=\"input\">
          <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
          ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'errors');
        echo "
          ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstname", array()), 'widget', array("attr" => array("placeholder" => "FirstName")));
        echo "
          <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
        </label>
      </section>
      <section class=\"col col-6\">
        <label class=\"input\">
          <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
          ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'errors');
        echo "
          ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastname", array()), 'widget', array("attr" => array("placeholder" => "LastName")));
        echo "
          <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
        </label>
      </section>
      <section class=\"col col-6\">
        <label class=\"input\">
          <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
          ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'errors');
        echo "
          ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image", array()), 'widget', array("attr" => array("placeholder" => "LastName")));
        echo "
          <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
        </label>
      </section>
    </div>
    <section>
      <label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>I agree to the Terms of Service</label>
    </section>
  </fieldset>
  <footer>
     <input type=\"submit\" class=\"button\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
  </footer>
  ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
  <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/DarthVader.png"), "html", null, true);
        echo "\" style=\"position: absolute; top: -300px; width: 600px; height: 357px; z-index: -1; opacity: 0.9;\">
\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/bb8.png"), "html", null, true);
        echo "\" style=\"position: absolute; top: -88px; right: 0px; width: 100px; height: 100px; z-index: -1; opacity: 0.9;\">
\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/r2d2.png"), "html", null, true);
        echo "\" style=\"position: absolute; top: -138px; left: 0px; width: 120px; height: 150px; z-index: -1; opacity: 0.9;\">
  </div>";
    }

    public function getTemplateName()
    {
        return "UserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 106,  208 => 105,  204 => 104,  200 => 103,  195 => 101,  182 => 91,  178 => 90,  168 => 83,  164 => 82,  154 => 75,  150 => 74,  137 => 64,  133 => 63,  122 => 55,  118 => 54,  107 => 46,  103 => 45,  92 => 37,  88 => 36,  77 => 28,  74 => 27,  70 => 22,  66 => 21,  61 => 19,  57 => 18,  53 => 16,  46 => 11,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* */
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/* 	<link rel="stylesheet" href="{{ asset('/bundles/CSS/layout.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('/bundles/CSS/pagination.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('/bundles/CSS/sky-forms.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('/bundles/CSS/font-awesome.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('/bundles/CSS/styles.css') }}">*/
/*     <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">*/
/*     <link rel="icon" type="image/png" href="{{ asset('/bundles/IMAGE/iconHT.png') }}">*/
/* 	<title>Log-me in</title>*/
/* 	<style>html, body{background-color: white;}</style>*/
/* </head>*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div id="oops_login" class="main_form_register">*/
/* <img src="{{ asset('/bundles/IMAGE/teamavengers.png') }}" style="position: absolute; left: 600px; width: 450px; height: 357px; z-index: -1;">*/
/* 	<img src="{{ asset('/bundles/IMAGE/teamxmen.png') }}" style="position: absolute; right: 600px; width: 450px; height: 357px; z-index: -1;">*/
/* 	<div style="position: absolute; bottom: -420px; left: 0px; width: 600px; height: 70px; font-family: geo; background-color: rgba(231, 76, 60, 0.8); box-shadow: 0px 0px 10px rgba(231, 76, 60,1.0) inset, 0px 0px 10px rgba(192, 57, 43,1.0); text-align: center; font-size: 2em; padding-top: 10px;"> Oops.. Something wrong ? </div>*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'sky-form'}}) }}*/
/* {{ form_errors(form) }}*/
/* {# Pour changer les messages d'erreurs de username/email/password*/
/* il faut aller dans le fichier vendor/friendsofsymfony/ressources/config/validation.xml #}*/
/* {# Pour changer les messages d'erreurs de firstname/lastname/image*/
/* il faut aller dans le fichier src/UserBundle/Entiry/User.php #}*/
/* */
/* {{ form_row(form._token) }}*/
/*   <header>Registration form*/
/*   <a id="home" ><span id="text">Back Home </span><i class="fa fa-home"> </i></a>*/
/*   </header>*/
/*   <fieldset>*/
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-user fa-lg icon-prepend"></i>*/
/*         {{ form_errors(form.username) }}*/
/*         {{ form_widget(form.username, {'attr': {'placeholder': 'Username'}}) }}*/
/*         <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*       </label>*/
/*     </section>*/
/* */
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-envelope-o fa-lg icon-prepend"></i>*/
/*         {{ form_errors(form.email) }}*/
/*         {{ form_widget(form.email, {'attr': {'placeholder': 'Email Adresse'}}) }}*/
/*         <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>*/
/*       </label>*/
/*     </section>*/
/* */
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-lock fa-lg icon-prepend"></i>*/
/*         {{ form_errors(form.plainPassword.first) }}*/
/*         {{ form_widget(form.plainPassword.first, {'attr': {'placeholder': 'Password'}}) }}*/
/*         <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*       </label>*/
/*     </section>*/
/* */
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-lock fa-lg icon-prepend"></i>*/
/*         {{ form_errors(form.plainPassword.second) }}*/
/*         {{ form_widget(form.plainPassword.second, {'attr': {'placeholder': 'Confirm Password'}}) }}*/
/*         <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*       </label>*/
/*     </section>*/
/*   </fieldset>*/
/*   <fieldset>*/
/*     <div class="row">*/
/*       <section class="col col-6">*/
/*         <label class="input">*/
/*           <i class="fa fa-lock fa-lg icon-prepend"></i>*/
/*           {{ form_errors(form.firstname) }}*/
/*           {{ form_widget(form.firstname, {'attr': {'placeholder': 'FirstName'}}) }}*/
/*           <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*         </label>*/
/*       </section>*/
/*       <section class="col col-6">*/
/*         <label class="input">*/
/*           <i class="fa fa-lock fa-lg icon-prepend"></i>*/
/*           {{ form_errors(form.lastname) }}*/
/*           {{ form_widget(form.lastname, {'attr': {'placeholder': 'LastName'}}) }}*/
/*           <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*         </label>*/
/*       </section>*/
/*       <section class="col col-6">*/
/*         <label class="input">*/
/*           <i class="fa fa-lock fa-lg icon-prepend"></i>*/
/*           {{ form_errors(form.image) }}*/
/*           {{ form_widget(form.image, {'attr': {'placeholder': 'LastName'}}) }}*/
/*           <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*         </label>*/
/*       </section>*/
/*     </div>*/
/*     <section>*/
/*       <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>I agree to the Terms of Service</label>*/
/*     </section>*/
/*   </fieldset>*/
/*   <footer>*/
/*      <input type="submit" class="button" value="{{ 'Submit'|trans }}" />*/
/*   </footer>*/
/*   {{ form_end(form) }}*/
/*   <img src="{{ asset('/bundles/IMAGE/DarthVader.png') }}" style="position: absolute; top: -300px; width: 600px; height: 357px; z-index: -1; opacity: 0.9;">*/
/* 	<img src="{{ asset('/bundles/IMAGE/bb8.png') }}" style="position: absolute; top: -88px; right: 0px; width: 100px; height: 100px; z-index: -1; opacity: 0.9;">*/
/* 	<img src="{{ asset('/bundles/IMAGE/r2d2.png') }}" style="position: absolute; top: -138px; left: 0px; width: 120px; height: 150px; z-index: -1; opacity: 0.9;">*/
/*   </div>*/

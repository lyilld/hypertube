<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5b464eed5b4d2c7518869eae1e6e64670eb6c190c8396dfb6186155660148ab4 extends Twig_Template
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
        $__internal_f1c192f4ab086e9654dbeabf58b997acd858acaca389eb87304d7790d403f061 = $this->env->getExtension("native_profiler");
        $__internal_f1c192f4ab086e9654dbeabf58b997acd858acaca389eb87304d7790d403f061->enter($__internal_f1c192f4ab086e9654dbeabf58b997acd858acaca389eb87304d7790d403f061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div id=\"register\" class=\"main_form_register\">
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "sky-form")));
        echo "
";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 10
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
  <header>Registration form
  <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/cross.png"), "html", null, true);
        echo "\" class=\"close_cross\" onclick=\"display_register();\">
  </header>
  <fieldset>
    <section>
      <label class=\"input\">
        <i class=\"fa fa-user fa-lg icon-prepend\"></i>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Username")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-envelope-o fa-lg icon-prepend\"></i>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email Adresse")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Needed to verify your account</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Password")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeholder" => "Confirm Password")));
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
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
          ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("placeholder" => "FirstName")));
        echo "
          <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
        </label>
      </section>
      <section class=\"col col-6\">
        <label class=\"input\">
          <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
          ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
          ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("placeholder" => "LastName")));
        echo "
          <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
        </label>
      </section>
      <section class=\"col col-6\">
        <label class=\"input\">
          <i class=\"fa fa-lock fa-lg icon-prepend\"></i>
          ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
          ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("placeholder" => "LastName")));
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Valider", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
  </footer>
  ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
";
        
        $__internal_f1c192f4ab086e9654dbeabf58b997acd858acaca389eb87304d7790d403f061->leave($__internal_f1c192f4ab086e9654dbeabf58b997acd858acaca389eb87304d7790d403f061_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 86,  158 => 84,  145 => 74,  141 => 73,  131 => 66,  127 => 65,  117 => 58,  113 => 57,  100 => 47,  96 => 46,  85 => 38,  81 => 37,  70 => 29,  66 => 28,  55 => 20,  51 => 19,  42 => 13,  37 => 11,  34 => 10,  30 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div id="register" class="main_form_register">*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'sky-form'}}) }}*/
/* {{ form_errors(form) }}*/
/* {# Pour changer les messages d'erreurs de username/email/password*/
/* il faut aller dans le fichier vendor/friendsofsymfony/ressources/config/validation.xml #}*/
/* {# Pour changer les messages d'erreurs de firstname/lastname/image*/
/* il faut aller dans le fichier src/UserBundle/Entiry/User.php #}*/
/* */
/* {{ form_row(form._token) }}*/
/*   <header>Registration form*/
/*   <img src="{{ asset('/bundles/IMAGE/cross.png') }}" class="close_cross" onclick="display_register();">*/
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
/*      <input type="submit" class="button" value="{{ 'Valider'|trans }}" />*/
/*   </footer>*/
/*   {{ form_end(form) }}*/
/*   </div>*/
/* */

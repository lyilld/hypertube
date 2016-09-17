<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_1acf9bf0e5e7ef1c20f3e9ac478c75ff1359f8b0745595097e7f6ee0ed700101 extends Twig_Template
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
        $__internal_49a7dd7bf5a3557c378126435502a413872cb32e39c76ddfd85e50fab729935c = $this->env->getExtension("native_profiler");
        $__internal_49a7dd7bf5a3557c378126435502a413872cb32e39c76ddfd85e50fab729935c->enter($__internal_49a7dd7bf5a3557c378126435502a413872cb32e39c76ddfd85e50fab729935c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div id=\"register\" class=\"main_form_register\">
";
        // line 3
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "sky-form")));
        echo "
";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 9
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
  <header>Registration form</header>
  <fieldset>
    <section>
      <label class=\"input\">
        <i class=\"fa fa-user fa-lg place_icon\"></i>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeholder" => "Username")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-envelope-o fa-lg place_icon\"></i>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeholder" => "Email Adresse")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Needed to verify your account</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-lock fa-lg place_icon\"></i>
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeholder" => "Password")));
        echo "
        <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
      </label>
    </section>

    <section>
      <label class=\"input\">
        <i class=\"fa fa-lock fa-lg place_icon\"></i>
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
        ";
        // line 44
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
          <i class=\"fa fa-lock fa-lg place_icon\"></i>
          ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'errors');
        echo "
          ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("placeholder" => "FirstName")));
        echo "
          <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
        </label>
      </section>
      <section class=\"col col-6\">
        <label class=\"input\">
          <i class=\"fa fa-lock fa-lg place_icon\"></i>
          ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'errors');
        echo "
          ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("placeholder" => "LastName")));
        echo "
          <b class=\"tooltip tooltip-bottom-right\">Only latin characters and numbers</b>
        </label>
      </section>
      <section class=\"col col-6\">
        <label class=\"input\">
          <i class=\"fa fa-lock fa-lg place_icon\"></i>
          ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'errors');
        echo "
          ";
        // line 71
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
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Valider", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
  </footer>
";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
";
        
        $__internal_49a7dd7bf5a3557c378126435502a413872cb32e39c76ddfd85e50fab729935c->leave($__internal_49a7dd7bf5a3557c378126435502a413872cb32e39c76ddfd85e50fab729935c_prof);

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
        return array (  157 => 83,  152 => 81,  139 => 71,  135 => 70,  125 => 63,  121 => 62,  111 => 55,  107 => 54,  94 => 44,  90 => 43,  79 => 35,  75 => 34,  64 => 26,  60 => 25,  49 => 17,  45 => 16,  36 => 10,  33 => 9,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div id="register" class="main_form_register">*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'sky-form'}}) }}*/
/* {{ form_errors(form) }}*/
/* {# Pour changer les messages d'erreurs de username/email/password*/
/* il faut aller dans le fichier vendor/friendsofsymfony/ressources/config/validation.xml #}*/
/* {# Pour changer les messages d'erreurs de firstname/lastname/image*/
/* il faut aller dans le fichier src/UserBundle/Entiry/User.php #}*/
/* */
/* {{ form_row(form._token) }}*/
/*   <header>Registration form</header>*/
/*   <fieldset>*/
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-user fa-lg place_icon"></i>*/
/*         {{ form_errors(form.username) }}*/
/*         {{ form_widget(form.username, {'attr': {'placeholder': 'Username'}}) }}*/
/*         <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*       </label>*/
/*     </section>*/
/* */
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-envelope-o fa-lg place_icon"></i>*/
/*         {{ form_errors(form.email) }}*/
/*         {{ form_widget(form.email, {'attr': {'placeholder': 'Email Adresse'}}) }}*/
/*         <b class="tooltip tooltip-bottom-right">Needed to verify your account</b>*/
/*       </label>*/
/*     </section>*/
/* */
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-lock fa-lg place_icon"></i>*/
/*         {{ form_errors(form.plainPassword.first) }}*/
/*         {{ form_widget(form.plainPassword.first, {'attr': {'placeholder': 'Password'}}) }}*/
/*         <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*       </label>*/
/*     </section>*/
/* */
/*     <section>*/
/*       <label class="input">*/
/*         <i class="fa fa-lock fa-lg place_icon"></i>*/
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
/*           <i class="fa fa-lock fa-lg place_icon"></i>*/
/*           {{ form_errors(form.firstname) }}*/
/*           {{ form_widget(form.firstname, {'attr': {'placeholder': 'FirstName'}}) }}*/
/*           <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*         </label>*/
/*       </section>*/
/*       <section class="col col-6">*/
/*         <label class="input">*/
/*           <i class="fa fa-lock fa-lg place_icon"></i>*/
/*           {{ form_errors(form.lastname) }}*/
/*           {{ form_widget(form.lastname, {'attr': {'placeholder': 'LastName'}}) }}*/
/*           <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b>*/
/*         </label>*/
/*       </section>*/
/*       <section class="col col-6">*/
/*         <label class="input">*/
/*           <i class="fa fa-lock fa-lg place_icon"></i>*/
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
/* {{ form_end(form) }}*/
/*   </div>*/
/* */

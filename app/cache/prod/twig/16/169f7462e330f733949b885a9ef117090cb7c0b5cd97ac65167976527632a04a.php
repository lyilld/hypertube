<?php

/* DiviAjaxLoginBundle:Login:example.html.twig */
class __TwigTemplate_5676124bc8d7395c4bd84ffc0b626eaa0a709cecadd5dba8f21e3223ae188f24 extends Twig_Template
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
        // line 2
        $this->loadTemplate("DiviAjaxLoginBundle:Javascript:init.html.twig", "DiviAjaxLoginBundle:Login:example.html.twig", 2)->display(array_merge($context, array("form_selector" => "#form-login")));
        // line 3
        echo "
";
        // line 5
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"form-login\">
  <div>
    <label for=\"username\">Username</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
  </div>

  <div>
    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
  </div>

  <button type=\"submit\" class=\"sf-button\">
    <span class=\"border-l\">
      <span class=\"border-r\">
        <span class=\"btn-bg\">Login</span>
      </span>
    </span>
  </button>
</form>";
    }

    public function getTemplateName()
    {
        return "DiviAjaxLoginBundle:Login:example.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  24 => 5,  21 => 3,  19 => 2,);
    }
}
/* {# Include this line to get the javascript AJAX code #}*/
/* {% include 'DiviAjaxLoginBundle:Javascript:init.html.twig' with {'form_selector': '#form-login'} %}*/
/* */
/* {# Dot not forget to set the form's id attribute #form-login and link to the line above #}*/
/* <form action="{{ path("_security_check") }}" method="post" id="form-login">*/
/*   <div>*/
/*     <label for="username">Username</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/*   </div>*/
/* */
/*   <div>*/
/*     <label for="password">Password</label>*/
/*     <input type="password" id="password" name="_password" />*/
/*   </div>*/
/* */
/*   <button type="submit" class="sf-button">*/
/*     <span class="border-l">*/
/*       <span class="border-r">*/
/*         <span class="btn-bg">Login</span>*/
/*       </span>*/
/*     </span>*/
/*   </button>*/
/* </form>*/

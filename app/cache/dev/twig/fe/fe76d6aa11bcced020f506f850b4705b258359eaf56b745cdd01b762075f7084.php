<?php

/* DiviAjaxLoginBundle:Login:example.html.twig */
class __TwigTemplate_1dcc49f289465d1e5f4d18291671c1805030a19996238e927023d9b9672ab334 extends Twig_Template
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
        $__internal_1140f224b5eb4065433be4a090e66f72e9fa0bc4368f879bdac213974000b9c4 = $this->env->getExtension("native_profiler");
        $__internal_1140f224b5eb4065433be4a090e66f72e9fa0bc4368f879bdac213974000b9c4->enter($__internal_1140f224b5eb4065433be4a090e66f72e9fa0bc4368f879bdac213974000b9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Login:example.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_1140f224b5eb4065433be4a090e66f72e9fa0bc4368f879bdac213974000b9c4->leave($__internal_1140f224b5eb4065433be4a090e66f72e9fa0bc4368f879bdac213974000b9c4_prof);

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
        return array (  34 => 8,  27 => 5,  24 => 3,  22 => 2,);
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

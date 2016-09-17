<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0e0d57dcf4e812846be0a7a450b9215050d3045b8387ab14c5465cdafd5aa108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06b5520cc5c205ca35352cf4c36cc33c0fad485c3debe798201798efc55a1e71 = $this->env->getExtension("native_profiler");
        $__internal_06b5520cc5c205ca35352cf4c36cc33c0fad485c3debe798201798efc55a1e71->enter($__internal_06b5520cc5c205ca35352cf4c36cc33c0fad485c3debe798201798efc55a1e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06b5520cc5c205ca35352cf4c36cc33c0fad485c3debe798201798efc55a1e71->leave($__internal_06b5520cc5c205ca35352cf4c36cc33c0fad485c3debe798201798efc55a1e71_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a676005e5d89911134b84728ee3c443a0978c7d8eccb48148b95b66f4709583 = $this->env->getExtension("native_profiler");
        $__internal_4a676005e5d89911134b84728ee3c443a0978c7d8eccb48148b95b66f4709583->enter($__internal_4a676005e5d89911134b84728ee3c443a0978c7d8eccb48148b95b66f4709583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4a676005e5d89911134b84728ee3c443a0978c7d8eccb48148b95b66f4709583->leave($__internal_4a676005e5d89911134b84728ee3c443a0978c7d8eccb48148b95b66f4709583_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b650066171a1227396640ccb9081c6ef89331e87dae98e4c516b2b43d8d99c9 = $this->env->getExtension("native_profiler");
        $__internal_7b650066171a1227396640ccb9081c6ef89331e87dae98e4c516b2b43d8d99c9->enter($__internal_7b650066171a1227396640ccb9081c6ef89331e87dae98e4c516b2b43d8d99c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b650066171a1227396640ccb9081c6ef89331e87dae98e4c516b2b43d8d99c9->leave($__internal_7b650066171a1227396640ccb9081c6ef89331e87dae98e4c516b2b43d8d99c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca3845b381bcf6fed01abf5fbfe7a9dab33de874834824b3f23b2edb97e2cbd0 = $this->env->getExtension("native_profiler");
        $__internal_ca3845b381bcf6fed01abf5fbfe7a9dab33de874834824b3f23b2edb97e2cbd0->enter($__internal_ca3845b381bcf6fed01abf5fbfe7a9dab33de874834824b3f23b2edb97e2cbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca3845b381bcf6fed01abf5fbfe7a9dab33de874834824b3f23b2edb97e2cbd0->leave($__internal_ca3845b381bcf6fed01abf5fbfe7a9dab33de874834824b3f23b2edb97e2cbd0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_51746cf4fc006c1a609ee1725d7bc8619880d81c3c12bc3cdd7bc6d61725057c extends Twig_Template
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
        $__internal_9329f9411a5fdfeaff1a816d6fd5154020b359d46c05b39ec15f8a168fc37ae1 = $this->env->getExtension("native_profiler");
        $__internal_9329f9411a5fdfeaff1a816d6fd5154020b359d46c05b39ec15f8a168fc37ae1->enter($__internal_9329f9411a5fdfeaff1a816d6fd5154020b359d46c05b39ec15f8a168fc37ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9329f9411a5fdfeaff1a816d6fd5154020b359d46c05b39ec15f8a168fc37ae1->leave($__internal_9329f9411a5fdfeaff1a816d6fd5154020b359d46c05b39ec15f8a168fc37ae1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

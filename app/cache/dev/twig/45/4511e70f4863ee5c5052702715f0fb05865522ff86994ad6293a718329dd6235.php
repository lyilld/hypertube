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
        $__internal_041444860cce5bd1e602ab3e293ceb1b071a9b340fab191b0198b2d869884b06 = $this->env->getExtension("native_profiler");
        $__internal_041444860cce5bd1e602ab3e293ceb1b071a9b340fab191b0198b2d869884b06->enter($__internal_041444860cce5bd1e602ab3e293ceb1b071a9b340fab191b0198b2d869884b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_041444860cce5bd1e602ab3e293ceb1b071a9b340fab191b0198b2d869884b06->leave($__internal_041444860cce5bd1e602ab3e293ceb1b071a9b340fab191b0198b2d869884b06_prof);

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

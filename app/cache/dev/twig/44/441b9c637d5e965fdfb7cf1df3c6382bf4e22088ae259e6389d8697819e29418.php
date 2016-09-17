<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_caee1645ddefd09c12e64d07b061beb5dae8de7458dea190649aa0990e1761d5 extends Twig_Template
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
        $__internal_777e3807eaaab7944758fa154e815427aace0f230ad65a148c2bb5a39a2c394b = $this->env->getExtension("native_profiler");
        $__internal_777e3807eaaab7944758fa154e815427aace0f230ad65a148c2bb5a39a2c394b->enter($__internal_777e3807eaaab7944758fa154e815427aace0f230ad65a148c2bb5a39a2c394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_777e3807eaaab7944758fa154e815427aace0f230ad65a148c2bb5a39a2c394b->leave($__internal_777e3807eaaab7944758fa154e815427aace0f230ad65a148c2bb5a39a2c394b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

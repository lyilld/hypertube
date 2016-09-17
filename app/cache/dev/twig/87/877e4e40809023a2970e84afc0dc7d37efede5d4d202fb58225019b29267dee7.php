<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_32157f41b57984b1d905f185d02993ba3d5c74bf6e42d82b53b496c868f6a726 extends Twig_Template
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
        $__internal_525fd7c79ec99fac5005eddde0101e9cc39cb6d5caac9e2d2328b5ac31f5fbeb = $this->env->getExtension("native_profiler");
        $__internal_525fd7c79ec99fac5005eddde0101e9cc39cb6d5caac9e2d2328b5ac31f5fbeb->enter($__internal_525fd7c79ec99fac5005eddde0101e9cc39cb6d5caac9e2d2328b5ac31f5fbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_525fd7c79ec99fac5005eddde0101e9cc39cb6d5caac9e2d2328b5ac31f5fbeb->leave($__internal_525fd7c79ec99fac5005eddde0101e9cc39cb6d5caac9e2d2328b5ac31f5fbeb_prof);

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

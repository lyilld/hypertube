<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_02259a7d1acd3fbf01fe6b6ec4f62c06f84fd18258e26b0289a6369fa6740914 extends Twig_Template
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
        $__internal_219c294bf623e1d04212c164410d981f36515f7347bf51751b1e98a0aba5ec96 = $this->env->getExtension("native_profiler");
        $__internal_219c294bf623e1d04212c164410d981f36515f7347bf51751b1e98a0aba5ec96->enter($__internal_219c294bf623e1d04212c164410d981f36515f7347bf51751b1e98a0aba5ec96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_219c294bf623e1d04212c164410d981f36515f7347bf51751b1e98a0aba5ec96->leave($__internal_219c294bf623e1d04212c164410d981f36515f7347bf51751b1e98a0aba5ec96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

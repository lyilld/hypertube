<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8886e81372aa89170511d0f030e63b31a3ec4f243ca49a0d32b81be2184ac8e4 extends Twig_Template
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
        $__internal_297dd864cdc3c642c7a810fd12f7f97ad07bd7a8d2c5657b6de1656fd1ab5c83 = $this->env->getExtension("native_profiler");
        $__internal_297dd864cdc3c642c7a810fd12f7f97ad07bd7a8d2c5657b6de1656fd1ab5c83->enter($__internal_297dd864cdc3c642c7a810fd12f7f97ad07bd7a8d2c5657b6de1656fd1ab5c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_297dd864cdc3c642c7a810fd12f7f97ad07bd7a8d2c5657b6de1656fd1ab5c83->leave($__internal_297dd864cdc3c642c7a810fd12f7f97ad07bd7a8d2c5657b6de1656fd1ab5c83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

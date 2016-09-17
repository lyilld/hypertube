<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5773355ae40d044b5113bec26b5a2ee0de2e724e58c51f85043df751d50ab302 extends Twig_Template
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
        $__internal_0ff1c903fdb94c4dbf9b9cee07e1a49f9e2c4ca82dd60627381b85d050e51715 = $this->env->getExtension("native_profiler");
        $__internal_0ff1c903fdb94c4dbf9b9cee07e1a49f9e2c4ca82dd60627381b85d050e51715->enter($__internal_0ff1c903fdb94c4dbf9b9cee07e1a49f9e2c4ca82dd60627381b85d050e51715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0ff1c903fdb94c4dbf9b9cee07e1a49f9e2c4ca82dd60627381b85d050e51715->leave($__internal_0ff1c903fdb94c4dbf9b9cee07e1a49f9e2c4ca82dd60627381b85d050e51715_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

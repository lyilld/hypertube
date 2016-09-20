<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ae6bfab7db78960cc4b53709624e968b177c69ed8def596d46fbde23356b526f extends Twig_Template
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
        $__internal_faf65c48c339acd56f44e30aca03b2d8e3e93bcb5511163774d52102a70a0210 = $this->env->getExtension("native_profiler");
        $__internal_faf65c48c339acd56f44e30aca03b2d8e3e93bcb5511163774d52102a70a0210->enter($__internal_faf65c48c339acd56f44e30aca03b2d8e3e93bcb5511163774d52102a70a0210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_faf65c48c339acd56f44e30aca03b2d8e3e93bcb5511163774d52102a70a0210->leave($__internal_faf65c48c339acd56f44e30aca03b2d8e3e93bcb5511163774d52102a70a0210_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

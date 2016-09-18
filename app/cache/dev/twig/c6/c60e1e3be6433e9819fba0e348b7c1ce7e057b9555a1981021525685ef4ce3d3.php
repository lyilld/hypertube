<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_6829f668f14f4d4c1367dab2ba483edac580aa211c97696379deb77e749cf7ed extends Twig_Template
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
        $__internal_6ad7f1f8bc055ccc0d1145f64d6619c4dae26b39708c9bed4d32e078c93dfc5e = $this->env->getExtension("native_profiler");
        $__internal_6ad7f1f8bc055ccc0d1145f64d6619c4dae26b39708c9bed4d32e078c93dfc5e->enter($__internal_6ad7f1f8bc055ccc0d1145f64d6619c4dae26b39708c9bed4d32e078c93dfc5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6ad7f1f8bc055ccc0d1145f64d6619c4dae26b39708c9bed4d32e078c93dfc5e->leave($__internal_6ad7f1f8bc055ccc0d1145f64d6619c4dae26b39708c9bed4d32e078c93dfc5e_prof);

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

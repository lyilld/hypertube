<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2125e171550724338f35fae700d180c733567ba3e84924f6d7d15027d15d629d extends Twig_Template
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
        $__internal_2233ecb43937c614c37edd8dfa6c8c5c38e661f65bc7c78f7802eca219a482c1 = $this->env->getExtension("native_profiler");
        $__internal_2233ecb43937c614c37edd8dfa6c8c5c38e661f65bc7c78f7802eca219a482c1->enter($__internal_2233ecb43937c614c37edd8dfa6c8c5c38e661f65bc7c78f7802eca219a482c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2233ecb43937c614c37edd8dfa6c8c5c38e661f65bc7c78f7802eca219a482c1->leave($__internal_2233ecb43937c614c37edd8dfa6c8c5c38e661f65bc7c78f7802eca219a482c1_prof);

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

<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2b7f0d6cbea854ddedeaea42aa7f8b40b1958f2046c1cf908904b87494e98c9c extends Twig_Template
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
        $__internal_59b61360ebc8c79a529e97eb07baaea78981b7684b6c7ddff1f3e44bbe9483a1 = $this->env->getExtension("native_profiler");
        $__internal_59b61360ebc8c79a529e97eb07baaea78981b7684b6c7ddff1f3e44bbe9483a1->enter($__internal_59b61360ebc8c79a529e97eb07baaea78981b7684b6c7ddff1f3e44bbe9483a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_59b61360ebc8c79a529e97eb07baaea78981b7684b6c7ddff1f3e44bbe9483a1->leave($__internal_59b61360ebc8c79a529e97eb07baaea78981b7684b6c7ddff1f3e44bbe9483a1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

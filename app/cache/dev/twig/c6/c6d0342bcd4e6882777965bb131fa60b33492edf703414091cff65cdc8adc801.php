<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d3e5c3c65d88ab14e6951514adc8aa739ea8c43b427458e8e06b2d2cb1d8a5c5 extends Twig_Template
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
        $__internal_d8aa6da37c477fc3cc1a460b32a184bf58798158fd8c0b5f638c8d7ee39156e1 = $this->env->getExtension("native_profiler");
        $__internal_d8aa6da37c477fc3cc1a460b32a184bf58798158fd8c0b5f638c8d7ee39156e1->enter($__internal_d8aa6da37c477fc3cc1a460b32a184bf58798158fd8c0b5f638c8d7ee39156e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d8aa6da37c477fc3cc1a460b32a184bf58798158fd8c0b5f638c8d7ee39156e1->leave($__internal_d8aa6da37c477fc3cc1a460b32a184bf58798158fd8c0b5f638c8d7ee39156e1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

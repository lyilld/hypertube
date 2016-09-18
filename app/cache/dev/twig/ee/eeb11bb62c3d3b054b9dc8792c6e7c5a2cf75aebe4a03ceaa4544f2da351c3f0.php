<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c0c1fcdad7024afc278de1b7d713363b7751cafe7704192270e1d99a17770154 extends Twig_Template
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
        $__internal_fd718b9d0d851664ff119d38167e46f90b724bbb10afa8d3e2d79a83a38eba5d = $this->env->getExtension("native_profiler");
        $__internal_fd718b9d0d851664ff119d38167e46f90b724bbb10afa8d3e2d79a83a38eba5d->enter($__internal_fd718b9d0d851664ff119d38167e46f90b724bbb10afa8d3e2d79a83a38eba5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_fd718b9d0d851664ff119d38167e46f90b724bbb10afa8d3e2d79a83a38eba5d->leave($__internal_fd718b9d0d851664ff119d38167e46f90b724bbb10afa8d3e2d79a83a38eba5d_prof);

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

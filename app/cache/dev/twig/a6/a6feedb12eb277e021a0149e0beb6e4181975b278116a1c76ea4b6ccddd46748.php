<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c01fdd94fd7fd9c92b5dd1858167f6b6a296aaf866d9cb9b68f1d1248db97269 extends Twig_Template
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
        $__internal_c228b640b9bf7eb957ec3682c423c714d99308037fa57e6e1a539726fd92f6db = $this->env->getExtension("native_profiler");
        $__internal_c228b640b9bf7eb957ec3682c423c714d99308037fa57e6e1a539726fd92f6db->enter($__internal_c228b640b9bf7eb957ec3682c423c714d99308037fa57e6e1a539726fd92f6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c228b640b9bf7eb957ec3682c423c714d99308037fa57e6e1a539726fd92f6db->leave($__internal_c228b640b9bf7eb957ec3682c423c714d99308037fa57e6e1a539726fd92f6db_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_94b1f964854b6fb0598eabdcb3130436f4a6ffcd57d83ed295fc6a41dcbe9bdb extends Twig_Template
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
        $__internal_512a71f27bf1247b1e97f4d6f5550e46aade773d88fa061b61155e91d7b4a2de = $this->env->getExtension("native_profiler");
        $__internal_512a71f27bf1247b1e97f4d6f5550e46aade773d88fa061b61155e91d7b4a2de->enter($__internal_512a71f27bf1247b1e97f4d6f5550e46aade773d88fa061b61155e91d7b4a2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_512a71f27bf1247b1e97f4d6f5550e46aade773d88fa061b61155e91d7b4a2de->leave($__internal_512a71f27bf1247b1e97f4d6f5550e46aade773d88fa061b61155e91d7b4a2de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_75f8f927ab354fa4ea419c7c2e9a5247ce22e5a4bb8c3336f0567f596de01b3a extends Twig_Template
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
        $__internal_dfd58b9ac8b9a3e026eb067a12ad31c088b613975a2c2b6085245cb24462ab89 = $this->env->getExtension("native_profiler");
        $__internal_dfd58b9ac8b9a3e026eb067a12ad31c088b613975a2c2b6085245cb24462ab89->enter($__internal_dfd58b9ac8b9a3e026eb067a12ad31c088b613975a2c2b6085245cb24462ab89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_dfd58b9ac8b9a3e026eb067a12ad31c088b613975a2c2b6085245cb24462ab89->leave($__internal_dfd58b9ac8b9a3e026eb067a12ad31c088b613975a2c2b6085245cb24462ab89_prof);

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

<?php

/* UserBundle:Security:forgetpwd.html.twig */
class __TwigTemplate_66f10a0f9258a51278b265f42e27650996cd0b8ceba2c412f8b339b0b0fbd91a extends Twig_Template
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
        $__internal_b8514c6492bc1fb09f903a39f599b1f1d5bbf793a35a07309c2005f3c2b6e8b3 = $this->env->getExtension("native_profiler");
        $__internal_b8514c6492bc1fb09f903a39f599b1f1d5bbf793a35a07309c2005f3c2b6e8b3->enter($__internal_b8514c6492bc1fb09f903a39f599b1f1d5bbf793a35a07309c2005f3c2b6e8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:forgetpwd.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_b8514c6492bc1fb09f903a39f599b1f1d5bbf793a35a07309c2005f3c2b6e8b3->leave($__internal_b8514c6492bc1fb09f903a39f599b1f1d5bbf793a35a07309c2005f3c2b6e8b3_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:forgetpwd.html.twig";
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
/* {{ form(form) }}*/
/* */

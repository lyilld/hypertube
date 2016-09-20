<?php

/* UserBundle:Profile:EditEmail.html.twig */
class __TwigTemplate_48890628b4c7df791d17414a521d77a09a2d2c4698b903f9b7b14b898d6890c8 extends Twig_Template
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
        $__internal_fa84d10092053beddfa22d99d8668b1e00e6aa42543bfa169ce8a45246e56b98 = $this->env->getExtension("native_profiler");
        $__internal_fa84d10092053beddfa22d99d8668b1e00e6aa42543bfa169ce8a45246e56b98->enter($__internal_fa84d10092053beddfa22d99d8668b1e00e6aa42543bfa169ce8a45246e56b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:EditEmail.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Email"]) ? $context["form_Email"] : $this->getContext($context, "form_Email")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("edit_email")));
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Email"]) ? $context["form_Email"] : $this->getContext($context, "form_Email")), 'form');
        echo "
";
        
        $__internal_fa84d10092053beddfa22d99d8668b1e00e6aa42543bfa169ce8a45246e56b98->leave($__internal_fa84d10092053beddfa22d99d8668b1e00e6aa42543bfa169ce8a45246e56b98_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:EditEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form_Email, {'method': 'post', 'action': path('edit_email')}) }}*/
/* {{ form(form_Email) }}*/
/* */

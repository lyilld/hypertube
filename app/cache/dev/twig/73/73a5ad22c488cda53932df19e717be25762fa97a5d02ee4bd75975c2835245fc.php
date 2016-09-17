<?php

/* UserBundle:Profile:EditImage.html.twig */
class __TwigTemplate_0dfc8665cfbb3027d5e525c58912f09fac1dbc58cca4d7267e143e27c78cb527 extends Twig_Template
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
        $__internal_45fa7ba8c081a9d0753f93ece0e4063f9df76e60937bda33cd61eafc8dd21551 = $this->env->getExtension("native_profiler");
        $__internal_45fa7ba8c081a9d0753f93ece0e4063f9df76e60937bda33cd61eafc8dd21551->enter($__internal_45fa7ba8c081a9d0753f93ece0e4063f9df76e60937bda33cd61eafc8dd21551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:EditImage.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_45fa7ba8c081a9d0753f93ece0e4063f9df76e60937bda33cd61eafc8dd21551->leave($__internal_45fa7ba8c081a9d0753f93ece0e4063f9df76e60937bda33cd61eafc8dd21551_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:EditImage.html.twig";
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

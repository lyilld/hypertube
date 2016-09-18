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
        $__internal_7ca97fd2146c0b63d41e7fcd46753669221731e25c84fbf67f9692e940e16b94 = $this->env->getExtension("native_profiler");
        $__internal_7ca97fd2146c0b63d41e7fcd46753669221731e25c84fbf67f9692e940e16b94->enter($__internal_7ca97fd2146c0b63d41e7fcd46753669221731e25c84fbf67f9692e940e16b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:forgetpwd.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_7ca97fd2146c0b63d41e7fcd46753669221731e25c84fbf67f9692e940e16b94->leave($__internal_7ca97fd2146c0b63d41e7fcd46753669221731e25c84fbf67f9692e940e16b94_prof);

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

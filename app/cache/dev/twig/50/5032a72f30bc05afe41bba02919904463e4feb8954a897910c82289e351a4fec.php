<?php

/* UserBundle:Security:forgetpwd.html.twig */
class __TwigTemplate_fd643cf0c547f7c5238367d9fa34b2003b77f74fbe3a27371ce24bb6d58dc76d extends Twig_Template
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
        $__internal_172e8d90d89d6aad26e4900220c1cf2487de37bb611a8eb6e2e109859ebce322 = $this->env->getExtension("native_profiler");
        $__internal_172e8d90d89d6aad26e4900220c1cf2487de37bb611a8eb6e2e109859ebce322->enter($__internal_172e8d90d89d6aad26e4900220c1cf2487de37bb611a8eb6e2e109859ebce322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:forgetpwd.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_172e8d90d89d6aad26e4900220c1cf2487de37bb611a8eb6e2e109859ebce322->leave($__internal_172e8d90d89d6aad26e4900220c1cf2487de37bb611a8eb6e2e109859ebce322_prof);

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

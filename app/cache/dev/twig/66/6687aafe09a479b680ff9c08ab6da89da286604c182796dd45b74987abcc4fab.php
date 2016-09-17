<?php

/* UserBundle:Profile:EditEmail.html.twig */
class __TwigTemplate_051fd809ba1fa8edefbc6dfac155a0b8e64775b64139833a698407c658a70395 extends Twig_Template
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
        $__internal_8c5faef23d8e7d78817014a1efcb23cafa1d3276e5894380f83d05461f4951c7 = $this->env->getExtension("native_profiler");
        $__internal_8c5faef23d8e7d78817014a1efcb23cafa1d3276e5894380f83d05461f4951c7->enter($__internal_8c5faef23d8e7d78817014a1efcb23cafa1d3276e5894380f83d05461f4951c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:EditEmail.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
        
        $__internal_8c5faef23d8e7d78817014a1efcb23cafa1d3276e5894380f83d05461f4951c7->leave($__internal_8c5faef23d8e7d78817014a1efcb23cafa1d3276e5894380f83d05461f4951c7_prof);

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
        return array (  22 => 1,);
    }
}
/* {{ form(form) }}*/
/* */

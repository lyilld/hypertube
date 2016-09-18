<?php

/* UserBundle:Profile:EditImage.html.twig */
class __TwigTemplate_112fcca87584fe57558325e88c993e6263378d0cb2568ce7ca669d22df8c113c extends Twig_Template
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
        $__internal_96e6d33af70f15306085ed2518d5bbd09b2d4115bbcdad2b84905e1efb3d5169 = $this->env->getExtension("native_profiler");
        $__internal_96e6d33af70f15306085ed2518d5bbd09b2d4115bbcdad2b84905e1efb3d5169->enter($__internal_96e6d33af70f15306085ed2518d5bbd09b2d4115bbcdad2b84905e1efb3d5169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:EditImage.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Image"]) ? $context["form_Image"] : $this->getContext($context, "form_Image")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("edit_image")));
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Image"]) ? $context["form_Image"] : $this->getContext($context, "form_Image")), 'form');
        echo "
";
        
        $__internal_96e6d33af70f15306085ed2518d5bbd09b2d4115bbcdad2b84905e1efb3d5169->leave($__internal_96e6d33af70f15306085ed2518d5bbd09b2d4115bbcdad2b84905e1efb3d5169_prof);

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
        return array (  26 => 2,  22 => 1,);
    }
}
/* {{ form_start(form_Image, {'method': 'post', 'action': path('edit_image')}) }}*/
/* {{ form(form_Image) }}*/
/* */

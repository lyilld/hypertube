<?php

/* UserBundle:Profile:EditImage.html.twig */
class __TwigTemplate_1e8447feb28e87feab20b01a600cc896391563f994c4676c8250f37cbc78a76a extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Image"]) ? $context["form_Image"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("edit_image")));
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Image"]) ? $context["form_Image"] : null), 'form');
        echo "
";
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
        return array (  23 => 2,  19 => 1,);
    }
}
/* {{ form_start(form_Image, {'method': 'post', 'action': path('edit_image')}) }}*/
/* {{ form(form_Image) }}*/
/* */

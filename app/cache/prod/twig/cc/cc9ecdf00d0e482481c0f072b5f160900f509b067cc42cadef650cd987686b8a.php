<?php

/* UserBundle:Profile:EditEmail.html.twig */
class __TwigTemplate_d34d735a5f4e94806167f2884beb56beb60f2d3192d80fae289c23f152687d78 extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Email"]) ? $context["form_Email"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("edit_email")));
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_Email"]) ? $context["form_Email"] : null), 'form');
        echo "
";
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
        return array (  23 => 2,  19 => 1,);
    }
}
/* {{ form_start(form_Email, {'method': 'post', 'action': path('edit_email')}) }}*/
/* {{ form(form_Email) }}*/
/* */

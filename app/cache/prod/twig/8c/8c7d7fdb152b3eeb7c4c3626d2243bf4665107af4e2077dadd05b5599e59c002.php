<?php

/* CoreBundle:HP:search.html.twig */
class __TwigTemplate_37893eae67a17e6f40d70cdeec14e695d656af04f4aa8f04a1bfe16d616667cc extends Twig_Template
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_search"]) ? $context["form_search"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("core_search")));
        echo "
";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_search"]) ? $context["form_search"] : null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:search.html.twig";
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
/* {{ form_start(form_search, {'method': 'post', 'action': path('core_search')}) }}*/
/* {{ form(form_search) }}*/
/* */

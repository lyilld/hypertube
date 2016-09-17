<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_8fa1fc0d6c3fa1ee5c06badbbef90ea748aba088d715b753d2a34d9a4955ec5a extends Twig_Template
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
        $__internal_f8e4d6ce00e4c79ee947ced32d4750ca9ec9b1ce780b2716eb85d41b915a8f7f = $this->env->getExtension("native_profiler");
        $__internal_f8e4d6ce00e4c79ee947ced32d4750ca9ec9b1ce780b2716eb85d41b915a8f7f->enter($__internal_f8e4d6ce00e4c79ee947ced32d4750ca9ec9b1ce780b2716eb85d41b915a8f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f8e4d6ce00e4c79ee947ced32d4750ca9ec9b1ce780b2716eb85d41b915a8f7f->leave($__internal_f8e4d6ce00e4c79ee947ced32d4750ca9ec9b1ce780b2716eb85d41b915a8f7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

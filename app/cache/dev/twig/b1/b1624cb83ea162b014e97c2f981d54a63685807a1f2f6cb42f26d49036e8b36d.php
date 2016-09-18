<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_910bd929d227b1a136eef11f4534317be7dc588a3583e8ed9b5d02406d5f76c9 extends Twig_Template
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
        $__internal_83d7679e9258f7c1da75074ade8136d7a3c4b576e33ad279cdfc34d91474f0b0 = $this->env->getExtension("native_profiler");
        $__internal_83d7679e9258f7c1da75074ade8136d7a3c4b576e33ad279cdfc34d91474f0b0->enter($__internal_83d7679e9258f7c1da75074ade8136d7a3c4b576e33ad279cdfc34d91474f0b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_83d7679e9258f7c1da75074ade8136d7a3c4b576e33ad279cdfc34d91474f0b0->leave($__internal_83d7679e9258f7c1da75074ade8136d7a3c4b576e33ad279cdfc34d91474f0b0_prof);

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

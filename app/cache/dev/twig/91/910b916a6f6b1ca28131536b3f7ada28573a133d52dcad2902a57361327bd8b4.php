<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_7d037c633a9d63c89df62f2a2227067324b5d11f26c8cf15485b17128f5db19e extends Twig_Template
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
        $__internal_2e5060555932f957417945de378392a7517a039a2ad3f9d7be9078f4ec2b14f8 = $this->env->getExtension("native_profiler");
        $__internal_2e5060555932f957417945de378392a7517a039a2ad3f9d7be9078f4ec2b14f8->enter($__internal_2e5060555932f957417945de378392a7517a039a2ad3f9d7be9078f4ec2b14f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2e5060555932f957417945de378392a7517a039a2ad3f9d7be9078f4ec2b14f8->leave($__internal_2e5060555932f957417945de378392a7517a039a2ad3f9d7be9078f4ec2b14f8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

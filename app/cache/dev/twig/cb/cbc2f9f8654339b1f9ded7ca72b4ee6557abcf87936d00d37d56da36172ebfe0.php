<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_989ef80274897814962c00428c4d4895e72daaab14d2262e3bf186d6cdd7d881 extends Twig_Template
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
        $__internal_6de986eeaacea906f7f649c3730427299d4791e12a845584a4e6a20e4611c0a9 = $this->env->getExtension("native_profiler");
        $__internal_6de986eeaacea906f7f649c3730427299d4791e12a845584a4e6a20e4611c0a9->enter($__internal_6de986eeaacea906f7f649c3730427299d4791e12a845584a4e6a20e4611c0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6de986eeaacea906f7f649c3730427299d4791e12a845584a4e6a20e4611c0a9->leave($__internal_6de986eeaacea906f7f649c3730427299d4791e12a845584a4e6a20e4611c0a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

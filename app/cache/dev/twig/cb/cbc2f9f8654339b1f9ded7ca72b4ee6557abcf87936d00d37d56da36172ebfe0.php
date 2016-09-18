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
        $__internal_7a1f17f11e75f99ce11de214d8b109c153ff7aa43e4ae3239df2967a4939e2bc = $this->env->getExtension("native_profiler");
        $__internal_7a1f17f11e75f99ce11de214d8b109c153ff7aa43e4ae3239df2967a4939e2bc->enter($__internal_7a1f17f11e75f99ce11de214d8b109c153ff7aa43e4ae3239df2967a4939e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_7a1f17f11e75f99ce11de214d8b109c153ff7aa43e4ae3239df2967a4939e2bc->leave($__internal_7a1f17f11e75f99ce11de214d8b109c153ff7aa43e4ae3239df2967a4939e2bc_prof);

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

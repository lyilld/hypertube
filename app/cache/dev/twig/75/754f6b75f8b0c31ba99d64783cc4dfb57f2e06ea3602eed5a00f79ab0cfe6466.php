<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8886e81372aa89170511d0f030e63b31a3ec4f243ca49a0d32b81be2184ac8e4 extends Twig_Template
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
        $__internal_eec0e86dbe15ad69f5a06a3c65e6ba5cf29fa3ef57cd53c50a0df90f088893a0 = $this->env->getExtension("native_profiler");
        $__internal_eec0e86dbe15ad69f5a06a3c65e6ba5cf29fa3ef57cd53c50a0df90f088893a0->enter($__internal_eec0e86dbe15ad69f5a06a3c65e6ba5cf29fa3ef57cd53c50a0df90f088893a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_eec0e86dbe15ad69f5a06a3c65e6ba5cf29fa3ef57cd53c50a0df90f088893a0->leave($__internal_eec0e86dbe15ad69f5a06a3c65e6ba5cf29fa3ef57cd53c50a0df90f088893a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

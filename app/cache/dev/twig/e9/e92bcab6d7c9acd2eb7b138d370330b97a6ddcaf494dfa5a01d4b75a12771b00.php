<?php

/* CoreBundle:HP:serie.html.twig */
class __TwigTemplate_9b1f8eb1636bbb31e34559bda790c1db2f48b4dfd384a42f2b6f1f74e292c45e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CoreBundle:HP:serie.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f59838bf14fd3e055eadbe2d816afbc0c0c57300a2a40c7fe730beaadf5b7e99 = $this->env->getExtension("native_profiler");
        $__internal_f59838bf14fd3e055eadbe2d816afbc0c0c57300a2a40c7fe730beaadf5b7e99->enter($__internal_f59838bf14fd3e055eadbe2d816afbc0c0c57300a2a40c7fe730beaadf5b7e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:serie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59838bf14fd3e055eadbe2d816afbc0c0c57300a2a40c7fe730beaadf5b7e99->leave($__internal_f59838bf14fd3e055eadbe2d816afbc0c0c57300a2a40c7fe730beaadf5b7e99_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:serie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/

<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_adbcdefe29fa7cde2927bf941dd3a7dc6f94ad6793196f229029d95af46dfece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64d046d531b182d0e827b476be21a7c543fc648712c3a9f5ff6bdd0e4762c9e3 = $this->env->getExtension("native_profiler");
        $__internal_64d046d531b182d0e827b476be21a7c543fc648712c3a9f5ff6bdd0e4762c9e3->enter($__internal_64d046d531b182d0e827b476be21a7c543fc648712c3a9f5ff6bdd0e4762c9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_64d046d531b182d0e827b476be21a7c543fc648712c3a9f5ff6bdd0e4762c9e3->leave($__internal_64d046d531b182d0e827b476be21a7c543fc648712c3a9f5ff6bdd0e4762c9e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5e1e66d437af0112893113f5a9e3b3ccbce787a2330b8ca584e4910b5e80d34 = $this->env->getExtension("native_profiler");
        $__internal_b5e1e66d437af0112893113f5a9e3b3ccbce787a2330b8ca584e4910b5e80d34->enter($__internal_b5e1e66d437af0112893113f5a9e3b3ccbce787a2330b8ca584e4910b5e80d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b5e1e66d437af0112893113f5a9e3b3ccbce787a2330b8ca584e4910b5e80d34->leave($__internal_b5e1e66d437af0112893113f5a9e3b3ccbce787a2330b8ca584e4910b5e80d34_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

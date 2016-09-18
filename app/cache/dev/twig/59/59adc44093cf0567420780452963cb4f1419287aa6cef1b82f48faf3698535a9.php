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
        $__internal_b969d0df5b160fa57310e14234d1ec1b180758cf71a02986a0334f4cc2099c46 = $this->env->getExtension("native_profiler");
        $__internal_b969d0df5b160fa57310e14234d1ec1b180758cf71a02986a0334f4cc2099c46->enter($__internal_b969d0df5b160fa57310e14234d1ec1b180758cf71a02986a0334f4cc2099c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b969d0df5b160fa57310e14234d1ec1b180758cf71a02986a0334f4cc2099c46->leave($__internal_b969d0df5b160fa57310e14234d1ec1b180758cf71a02986a0334f4cc2099c46_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f6f00c2ec25e3589f53549d268fd11610c93d0f9dcfeb2e3d597c9e8fbeb5e4 = $this->env->getExtension("native_profiler");
        $__internal_6f6f00c2ec25e3589f53549d268fd11610c93d0f9dcfeb2e3d597c9e8fbeb5e4->enter($__internal_6f6f00c2ec25e3589f53549d268fd11610c93d0f9dcfeb2e3d597c9e8fbeb5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6f6f00c2ec25e3589f53549d268fd11610c93d0f9dcfeb2e3d597c9e8fbeb5e4->leave($__internal_6f6f00c2ec25e3589f53549d268fd11610c93d0f9dcfeb2e3d597c9e8fbeb5e4_prof);

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

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
        $__internal_33154b3c8d909de19772349e0668e54b87f68de32c784cff543d3838b6251365 = $this->env->getExtension("native_profiler");
        $__internal_33154b3c8d909de19772349e0668e54b87f68de32c784cff543d3838b6251365->enter($__internal_33154b3c8d909de19772349e0668e54b87f68de32c784cff543d3838b6251365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_33154b3c8d909de19772349e0668e54b87f68de32c784cff543d3838b6251365->leave($__internal_33154b3c8d909de19772349e0668e54b87f68de32c784cff543d3838b6251365_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e789d23d435be58f017d7cbea7a62a2ae7fc333116971835915f513fd583415 = $this->env->getExtension("native_profiler");
        $__internal_4e789d23d435be58f017d7cbea7a62a2ae7fc333116971835915f513fd583415->enter($__internal_4e789d23d435be58f017d7cbea7a62a2ae7fc333116971835915f513fd583415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4e789d23d435be58f017d7cbea7a62a2ae7fc333116971835915f513fd583415->leave($__internal_4e789d23d435be58f017d7cbea7a62a2ae7fc333116971835915f513fd583415_prof);

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

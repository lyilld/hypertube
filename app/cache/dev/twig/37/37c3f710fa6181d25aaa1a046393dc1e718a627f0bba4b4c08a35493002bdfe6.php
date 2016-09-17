<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d3fb6a6e740f1708362e636d95be39e12a7282730a8f1d12a9ba54143cbb9ad5 extends Twig_Template
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
        $__internal_2a894bc1dfb9ca66448f32c7570453bc31162ef016772e37227a4b14b5c2a9db = $this->env->getExtension("native_profiler");
        $__internal_2a894bc1dfb9ca66448f32c7570453bc31162ef016772e37227a4b14b5c2a9db->enter($__internal_2a894bc1dfb9ca66448f32c7570453bc31162ef016772e37227a4b14b5c2a9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2a894bc1dfb9ca66448f32c7570453bc31162ef016772e37227a4b14b5c2a9db->leave($__internal_2a894bc1dfb9ca66448f32c7570453bc31162ef016772e37227a4b14b5c2a9db_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_76ff54c79c78715175e694e80f53008c8f2e25fb53b2e68f1ae27e343a964864 = $this->env->getExtension("native_profiler");
        $__internal_76ff54c79c78715175e694e80f53008c8f2e25fb53b2e68f1ae27e343a964864->enter($__internal_76ff54c79c78715175e694e80f53008c8f2e25fb53b2e68f1ae27e343a964864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_76ff54c79c78715175e694e80f53008c8f2e25fb53b2e68f1ae27e343a964864->leave($__internal_76ff54c79c78715175e694e80f53008c8f2e25fb53b2e68f1ae27e343a964864_prof);

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

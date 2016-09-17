<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c396ce653e5d66e63b43e12352ee6b81d968fcfc717c1101ed03cf3469820b84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46ab8fed6eda6cd8cc4d559de748f01f62965c48c6fc1580636b98cec5ca25ec = $this->env->getExtension("native_profiler");
        $__internal_46ab8fed6eda6cd8cc4d559de748f01f62965c48c6fc1580636b98cec5ca25ec->enter($__internal_46ab8fed6eda6cd8cc4d559de748f01f62965c48c6fc1580636b98cec5ca25ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ab8fed6eda6cd8cc4d559de748f01f62965c48c6fc1580636b98cec5ca25ec->leave($__internal_46ab8fed6eda6cd8cc4d559de748f01f62965c48c6fc1580636b98cec5ca25ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b4cb4c78b7d1cbe91b911797b56c320e2e5431fa35789d2bebac9372f2c2ef1 = $this->env->getExtension("native_profiler");
        $__internal_0b4cb4c78b7d1cbe91b911797b56c320e2e5431fa35789d2bebac9372f2c2ef1->enter($__internal_0b4cb4c78b7d1cbe91b911797b56c320e2e5431fa35789d2bebac9372f2c2ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b4cb4c78b7d1cbe91b911797b56c320e2e5431fa35789d2bebac9372f2c2ef1->leave($__internal_0b4cb4c78b7d1cbe91b911797b56c320e2e5431fa35789d2bebac9372f2c2ef1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_86bc2c2303c295c3259ab6a732c0e8429f5d406b1fff271c7c6feef9115a2d4e = $this->env->getExtension("native_profiler");
        $__internal_86bc2c2303c295c3259ab6a732c0e8429f5d406b1fff271c7c6feef9115a2d4e->enter($__internal_86bc2c2303c295c3259ab6a732c0e8429f5d406b1fff271c7c6feef9115a2d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_86bc2c2303c295c3259ab6a732c0e8429f5d406b1fff271c7c6feef9115a2d4e->leave($__internal_86bc2c2303c295c3259ab6a732c0e8429f5d406b1fff271c7c6feef9115a2d4e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2bee10ab4e2d3bc165b059195a8d87b987b74836e6d8c0d2eb6d609569dd690e = $this->env->getExtension("native_profiler");
        $__internal_2bee10ab4e2d3bc165b059195a8d87b987b74836e6d8c0d2eb6d609569dd690e->enter($__internal_2bee10ab4e2d3bc165b059195a8d87b987b74836e6d8c0d2eb6d609569dd690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2bee10ab4e2d3bc165b059195a8d87b987b74836e6d8c0d2eb6d609569dd690e->leave($__internal_2bee10ab4e2d3bc165b059195a8d87b987b74836e6d8c0d2eb6d609569dd690e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

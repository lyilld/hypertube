<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_25a82061ad495fd59b4a6bc21706ad0faaa56535689056c716d94aa853c8d89c extends Twig_Template
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
        $__internal_091166fa1e2e50362707d8f93a31affa0fd78fb299ad8575ee800752f7c8d803 = $this->env->getExtension("native_profiler");
        $__internal_091166fa1e2e50362707d8f93a31affa0fd78fb299ad8575ee800752f7c8d803->enter($__internal_091166fa1e2e50362707d8f93a31affa0fd78fb299ad8575ee800752f7c8d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_091166fa1e2e50362707d8f93a31affa0fd78fb299ad8575ee800752f7c8d803->leave($__internal_091166fa1e2e50362707d8f93a31affa0fd78fb299ad8575ee800752f7c8d803_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e085110b7478873cfa616526267bcd586605aab24fb7deb39fda99ad6ad6beec = $this->env->getExtension("native_profiler");
        $__internal_e085110b7478873cfa616526267bcd586605aab24fb7deb39fda99ad6ad6beec->enter($__internal_e085110b7478873cfa616526267bcd586605aab24fb7deb39fda99ad6ad6beec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e085110b7478873cfa616526267bcd586605aab24fb7deb39fda99ad6ad6beec->leave($__internal_e085110b7478873cfa616526267bcd586605aab24fb7deb39fda99ad6ad6beec_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4a0d3dfc5d7a39e0748d7301e9da57164758ec3eda9cfa24ae293c219336035 = $this->env->getExtension("native_profiler");
        $__internal_a4a0d3dfc5d7a39e0748d7301e9da57164758ec3eda9cfa24ae293c219336035->enter($__internal_a4a0d3dfc5d7a39e0748d7301e9da57164758ec3eda9cfa24ae293c219336035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a4a0d3dfc5d7a39e0748d7301e9da57164758ec3eda9cfa24ae293c219336035->leave($__internal_a4a0d3dfc5d7a39e0748d7301e9da57164758ec3eda9cfa24ae293c219336035_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_72b0d99c77e4430844006844b66bb7b7e40f113f8f31b3da54f6516ac91bee0a = $this->env->getExtension("native_profiler");
        $__internal_72b0d99c77e4430844006844b66bb7b7e40f113f8f31b3da54f6516ac91bee0a->enter($__internal_72b0d99c77e4430844006844b66bb7b7e40f113f8f31b3da54f6516ac91bee0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_72b0d99c77e4430844006844b66bb7b7e40f113f8f31b3da54f6516ac91bee0a->leave($__internal_72b0d99c77e4430844006844b66bb7b7e40f113f8f31b3da54f6516ac91bee0a_prof);

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

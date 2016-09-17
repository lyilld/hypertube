<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fd5b2e660a4be6a49d06f93faecf67098990950445239be5ce4f39e38d219129 extends Twig_Template
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
        $__internal_6729079e6291fd99744454dc4e45748cdea8a7343e71b4b81df71ff3f47d9c56 = $this->env->getExtension("native_profiler");
        $__internal_6729079e6291fd99744454dc4e45748cdea8a7343e71b4b81df71ff3f47d9c56->enter($__internal_6729079e6291fd99744454dc4e45748cdea8a7343e71b4b81df71ff3f47d9c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6729079e6291fd99744454dc4e45748cdea8a7343e71b4b81df71ff3f47d9c56->leave($__internal_6729079e6291fd99744454dc4e45748cdea8a7343e71b4b81df71ff3f47d9c56_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a5da9a15b16a4b428871ecd1507ce1c8af526fcbc2bcb6d6c51771e380e3bf7e = $this->env->getExtension("native_profiler");
        $__internal_a5da9a15b16a4b428871ecd1507ce1c8af526fcbc2bcb6d6c51771e380e3bf7e->enter($__internal_a5da9a15b16a4b428871ecd1507ce1c8af526fcbc2bcb6d6c51771e380e3bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a5da9a15b16a4b428871ecd1507ce1c8af526fcbc2bcb6d6c51771e380e3bf7e->leave($__internal_a5da9a15b16a4b428871ecd1507ce1c8af526fcbc2bcb6d6c51771e380e3bf7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f0276ef4f6312f32056017b0852c83051dc30f178556cfd65c7cf4e24c7b395 = $this->env->getExtension("native_profiler");
        $__internal_5f0276ef4f6312f32056017b0852c83051dc30f178556cfd65c7cf4e24c7b395->enter($__internal_5f0276ef4f6312f32056017b0852c83051dc30f178556cfd65c7cf4e24c7b395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5f0276ef4f6312f32056017b0852c83051dc30f178556cfd65c7cf4e24c7b395->leave($__internal_5f0276ef4f6312f32056017b0852c83051dc30f178556cfd65c7cf4e24c7b395_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37185f1b84f4f967e3cf1ac8b5ac24913896be2cb8ad66fb66ca584dfebf35c4 = $this->env->getExtension("native_profiler");
        $__internal_37185f1b84f4f967e3cf1ac8b5ac24913896be2cb8ad66fb66ca584dfebf35c4->enter($__internal_37185f1b84f4f967e3cf1ac8b5ac24913896be2cb8ad66fb66ca584dfebf35c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37185f1b84f4f967e3cf1ac8b5ac24913896be2cb8ad66fb66ca584dfebf35c4->leave($__internal_37185f1b84f4f967e3cf1ac8b5ac24913896be2cb8ad66fb66ca584dfebf35c4_prof);

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

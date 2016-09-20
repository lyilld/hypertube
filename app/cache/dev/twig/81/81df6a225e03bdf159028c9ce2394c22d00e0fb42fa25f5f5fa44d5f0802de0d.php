<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6875a3fb2c6ff3805e4da56afb60361e93a39e018a9ffa168634d921f961c4ee extends Twig_Template
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
        $__internal_8be7e1875f9526bd3a046fd40a872f50554f181425b479767ac733d392e07c2d = $this->env->getExtension("native_profiler");
        $__internal_8be7e1875f9526bd3a046fd40a872f50554f181425b479767ac733d392e07c2d->enter($__internal_8be7e1875f9526bd3a046fd40a872f50554f181425b479767ac733d392e07c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be7e1875f9526bd3a046fd40a872f50554f181425b479767ac733d392e07c2d->leave($__internal_8be7e1875f9526bd3a046fd40a872f50554f181425b479767ac733d392e07c2d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c6fda78ded8bd47cbbd1c697905ba71c1e3f50966296e416a4b0c636cc5ced7 = $this->env->getExtension("native_profiler");
        $__internal_8c6fda78ded8bd47cbbd1c697905ba71c1e3f50966296e416a4b0c636cc5ced7->enter($__internal_8c6fda78ded8bd47cbbd1c697905ba71c1e3f50966296e416a4b0c636cc5ced7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c6fda78ded8bd47cbbd1c697905ba71c1e3f50966296e416a4b0c636cc5ced7->leave($__internal_8c6fda78ded8bd47cbbd1c697905ba71c1e3f50966296e416a4b0c636cc5ced7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_386fdfa024a01c186d80f75de6271dcf51af8516dad7d64bfe17d63acb072296 = $this->env->getExtension("native_profiler");
        $__internal_386fdfa024a01c186d80f75de6271dcf51af8516dad7d64bfe17d63acb072296->enter($__internal_386fdfa024a01c186d80f75de6271dcf51af8516dad7d64bfe17d63acb072296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_386fdfa024a01c186d80f75de6271dcf51af8516dad7d64bfe17d63acb072296->leave($__internal_386fdfa024a01c186d80f75de6271dcf51af8516dad7d64bfe17d63acb072296_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_540cbfbdc27ec9436304bd8939c8533164ac75073e8190348b3296ce1422b6e0 = $this->env->getExtension("native_profiler");
        $__internal_540cbfbdc27ec9436304bd8939c8533164ac75073e8190348b3296ce1422b6e0->enter($__internal_540cbfbdc27ec9436304bd8939c8533164ac75073e8190348b3296ce1422b6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_540cbfbdc27ec9436304bd8939c8533164ac75073e8190348b3296ce1422b6e0->leave($__internal_540cbfbdc27ec9436304bd8939c8533164ac75073e8190348b3296ce1422b6e0_prof);

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

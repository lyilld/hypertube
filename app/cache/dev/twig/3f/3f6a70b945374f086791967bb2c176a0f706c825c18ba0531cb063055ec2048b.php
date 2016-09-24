<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a837980fa552c9c199fce9de3e57c03fa52bb92fe479bbf04338c3f51451a18a extends Twig_Template
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
        $__internal_b7c0e47dcc24bd919027f09b7a5049c53a5bae5ce6318787befec24d9b83e4fa = $this->env->getExtension("native_profiler");
        $__internal_b7c0e47dcc24bd919027f09b7a5049c53a5bae5ce6318787befec24d9b83e4fa->enter($__internal_b7c0e47dcc24bd919027f09b7a5049c53a5bae5ce6318787befec24d9b83e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7c0e47dcc24bd919027f09b7a5049c53a5bae5ce6318787befec24d9b83e4fa->leave($__internal_b7c0e47dcc24bd919027f09b7a5049c53a5bae5ce6318787befec24d9b83e4fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d8a06a89c4e77168ff9fdeb407f4636ba62077782640dadfae423c4806583ac = $this->env->getExtension("native_profiler");
        $__internal_4d8a06a89c4e77168ff9fdeb407f4636ba62077782640dadfae423c4806583ac->enter($__internal_4d8a06a89c4e77168ff9fdeb407f4636ba62077782640dadfae423c4806583ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d8a06a89c4e77168ff9fdeb407f4636ba62077782640dadfae423c4806583ac->leave($__internal_4d8a06a89c4e77168ff9fdeb407f4636ba62077782640dadfae423c4806583ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_226772a900e21105e2af55d2cddcf619d81cdd804b1a3c669ad16f57f36d7d3b = $this->env->getExtension("native_profiler");
        $__internal_226772a900e21105e2af55d2cddcf619d81cdd804b1a3c669ad16f57f36d7d3b->enter($__internal_226772a900e21105e2af55d2cddcf619d81cdd804b1a3c669ad16f57f36d7d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_226772a900e21105e2af55d2cddcf619d81cdd804b1a3c669ad16f57f36d7d3b->leave($__internal_226772a900e21105e2af55d2cddcf619d81cdd804b1a3c669ad16f57f36d7d3b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bf3d449cab8701625a226f97707c7aea47f72c41493f628b077f75d791ce0cbf = $this->env->getExtension("native_profiler");
        $__internal_bf3d449cab8701625a226f97707c7aea47f72c41493f628b077f75d791ce0cbf->enter($__internal_bf3d449cab8701625a226f97707c7aea47f72c41493f628b077f75d791ce0cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bf3d449cab8701625a226f97707c7aea47f72c41493f628b077f75d791ce0cbf->leave($__internal_bf3d449cab8701625a226f97707c7aea47f72c41493f628b077f75d791ce0cbf_prof);

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

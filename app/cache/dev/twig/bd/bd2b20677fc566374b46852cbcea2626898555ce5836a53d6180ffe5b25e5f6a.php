<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_acce484cec980d7af828ec58a801ccd86a54cff7159af354b36c1fc85b0b4596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_30b9b8f94aa450bd6246d067dd151c77787363ddb8903eb2aa4a1eab41b12483 = $this->env->getExtension("native_profiler");
        $__internal_30b9b8f94aa450bd6246d067dd151c77787363ddb8903eb2aa4a1eab41b12483->enter($__internal_30b9b8f94aa450bd6246d067dd151c77787363ddb8903eb2aa4a1eab41b12483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30b9b8f94aa450bd6246d067dd151c77787363ddb8903eb2aa4a1eab41b12483->leave($__internal_30b9b8f94aa450bd6246d067dd151c77787363ddb8903eb2aa4a1eab41b12483_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42141758174a044ced0627124b003cd807f68733c308eccc74c454166ecc90e5 = $this->env->getExtension("native_profiler");
        $__internal_42141758174a044ced0627124b003cd807f68733c308eccc74c454166ecc90e5->enter($__internal_42141758174a044ced0627124b003cd807f68733c308eccc74c454166ecc90e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42141758174a044ced0627124b003cd807f68733c308eccc74c454166ecc90e5->leave($__internal_42141758174a044ced0627124b003cd807f68733c308eccc74c454166ecc90e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_164f8fd438b7deafe07a99f5da9c85a34bfc74f91a5af1a522484ab963db0b65 = $this->env->getExtension("native_profiler");
        $__internal_164f8fd438b7deafe07a99f5da9c85a34bfc74f91a5af1a522484ab963db0b65->enter($__internal_164f8fd438b7deafe07a99f5da9c85a34bfc74f91a5af1a522484ab963db0b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_164f8fd438b7deafe07a99f5da9c85a34bfc74f91a5af1a522484ab963db0b65->leave($__internal_164f8fd438b7deafe07a99f5da9c85a34bfc74f91a5af1a522484ab963db0b65_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5916bf925dd76f58bb5a129e379517c2249361596656949a43050cbaefe97b8 = $this->env->getExtension("native_profiler");
        $__internal_c5916bf925dd76f58bb5a129e379517c2249361596656949a43050cbaefe97b8->enter($__internal_c5916bf925dd76f58bb5a129e379517c2249361596656949a43050cbaefe97b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5916bf925dd76f58bb5a129e379517c2249361596656949a43050cbaefe97b8->leave($__internal_c5916bf925dd76f58bb5a129e379517c2249361596656949a43050cbaefe97b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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

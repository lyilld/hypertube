<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a858325b89160a6eafc971bfbae3af31bd259911839635b465e05199362550c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b87b94c9940f399da5cf492ce0f2901ee3ebdc32fb4dd2b38d5361a5ce4c8dab = $this->env->getExtension("native_profiler");
        $__internal_b87b94c9940f399da5cf492ce0f2901ee3ebdc32fb4dd2b38d5361a5ce4c8dab->enter($__internal_b87b94c9940f399da5cf492ce0f2901ee3ebdc32fb4dd2b38d5361a5ce4c8dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87b94c9940f399da5cf492ce0f2901ee3ebdc32fb4dd2b38d5361a5ce4c8dab->leave($__internal_b87b94c9940f399da5cf492ce0f2901ee3ebdc32fb4dd2b38d5361a5ce4c8dab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d2fd85eb94076cf202355be8ea3e1769ad7c099b7e56b945fe1be50199fc17af = $this->env->getExtension("native_profiler");
        $__internal_d2fd85eb94076cf202355be8ea3e1769ad7c099b7e56b945fe1be50199fc17af->enter($__internal_d2fd85eb94076cf202355be8ea3e1769ad7c099b7e56b945fe1be50199fc17af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d2fd85eb94076cf202355be8ea3e1769ad7c099b7e56b945fe1be50199fc17af->leave($__internal_d2fd85eb94076cf202355be8ea3e1769ad7c099b7e56b945fe1be50199fc17af_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a37e9add840eec41768573e10d80bc5a64274e97c2260282326e3bf9272b2f63 = $this->env->getExtension("native_profiler");
        $__internal_a37e9add840eec41768573e10d80bc5a64274e97c2260282326e3bf9272b2f63->enter($__internal_a37e9add840eec41768573e10d80bc5a64274e97c2260282326e3bf9272b2f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a37e9add840eec41768573e10d80bc5a64274e97c2260282326e3bf9272b2f63->leave($__internal_a37e9add840eec41768573e10d80bc5a64274e97c2260282326e3bf9272b2f63_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dece252aaaeee002fb6e6d38f4de4785064040e7fdd95f88842d4742636ea2c8 = $this->env->getExtension("native_profiler");
        $__internal_dece252aaaeee002fb6e6d38f4de4785064040e7fdd95f88842d4742636ea2c8->enter($__internal_dece252aaaeee002fb6e6d38f4de4785064040e7fdd95f88842d4742636ea2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dece252aaaeee002fb6e6d38f4de4785064040e7fdd95f88842d4742636ea2c8->leave($__internal_dece252aaaeee002fb6e6d38f4de4785064040e7fdd95f88842d4742636ea2c8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */

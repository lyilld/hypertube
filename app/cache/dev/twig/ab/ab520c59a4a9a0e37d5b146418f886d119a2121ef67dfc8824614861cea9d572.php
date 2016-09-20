<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d8e688ac67eb9fe21ec00cfbf282f7624f2676682a562b726371382b7799f223 extends Twig_Template
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
        $__internal_51be3dc47fdd291a876c990cfabbc4ebc97d5ad4d2cf10917a9e39847c15a00f = $this->env->getExtension("native_profiler");
        $__internal_51be3dc47fdd291a876c990cfabbc4ebc97d5ad4d2cf10917a9e39847c15a00f->enter($__internal_51be3dc47fdd291a876c990cfabbc4ebc97d5ad4d2cf10917a9e39847c15a00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51be3dc47fdd291a876c990cfabbc4ebc97d5ad4d2cf10917a9e39847c15a00f->leave($__internal_51be3dc47fdd291a876c990cfabbc4ebc97d5ad4d2cf10917a9e39847c15a00f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1f424c5dbd3c74e8b3cd9f40b1b2482484b2e5c7f05740141e296bb64ce2fc3 = $this->env->getExtension("native_profiler");
        $__internal_e1f424c5dbd3c74e8b3cd9f40b1b2482484b2e5c7f05740141e296bb64ce2fc3->enter($__internal_e1f424c5dbd3c74e8b3cd9f40b1b2482484b2e5c7f05740141e296bb64ce2fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e1f424c5dbd3c74e8b3cd9f40b1b2482484b2e5c7f05740141e296bb64ce2fc3->leave($__internal_e1f424c5dbd3c74e8b3cd9f40b1b2482484b2e5c7f05740141e296bb64ce2fc3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_352eb6752f0db9393b4b9452e2811f7a1386e9c01edffc0607c70f05b20a340f = $this->env->getExtension("native_profiler");
        $__internal_352eb6752f0db9393b4b9452e2811f7a1386e9c01edffc0607c70f05b20a340f->enter($__internal_352eb6752f0db9393b4b9452e2811f7a1386e9c01edffc0607c70f05b20a340f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_352eb6752f0db9393b4b9452e2811f7a1386e9c01edffc0607c70f05b20a340f->leave($__internal_352eb6752f0db9393b4b9452e2811f7a1386e9c01edffc0607c70f05b20a340f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd7c8d43aa89289855ec41e87a8831fc108530d85719cb2aec582de4c3efcf72 = $this->env->getExtension("native_profiler");
        $__internal_cd7c8d43aa89289855ec41e87a8831fc108530d85719cb2aec582de4c3efcf72->enter($__internal_cd7c8d43aa89289855ec41e87a8831fc108530d85719cb2aec582de4c3efcf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cd7c8d43aa89289855ec41e87a8831fc108530d85719cb2aec582de4c3efcf72->leave($__internal_cd7c8d43aa89289855ec41e87a8831fc108530d85719cb2aec582de4c3efcf72_prof);

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

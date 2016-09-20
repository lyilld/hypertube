<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_acce484cec980d7af828ec58a801ccd86a54cff7159af354b36c1fc85b0b4596 extends Twig_Template
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
        $__internal_331915076fbe727314a161ac706437f80eec8f70e700fb5641650ea64748f321 = $this->env->getExtension("native_profiler");
        $__internal_331915076fbe727314a161ac706437f80eec8f70e700fb5641650ea64748f321->enter($__internal_331915076fbe727314a161ac706437f80eec8f70e700fb5641650ea64748f321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331915076fbe727314a161ac706437f80eec8f70e700fb5641650ea64748f321->leave($__internal_331915076fbe727314a161ac706437f80eec8f70e700fb5641650ea64748f321_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c06119b6e0b8c3727df5411dbe522ce024f794b83f7c9fa550c72eccab4a9da9 = $this->env->getExtension("native_profiler");
        $__internal_c06119b6e0b8c3727df5411dbe522ce024f794b83f7c9fa550c72eccab4a9da9->enter($__internal_c06119b6e0b8c3727df5411dbe522ce024f794b83f7c9fa550c72eccab4a9da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c06119b6e0b8c3727df5411dbe522ce024f794b83f7c9fa550c72eccab4a9da9->leave($__internal_c06119b6e0b8c3727df5411dbe522ce024f794b83f7c9fa550c72eccab4a9da9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c67946f23fa0c47618e88258ea0baab5157dfca4cf0cfddabc79c9be6965618c = $this->env->getExtension("native_profiler");
        $__internal_c67946f23fa0c47618e88258ea0baab5157dfca4cf0cfddabc79c9be6965618c->enter($__internal_c67946f23fa0c47618e88258ea0baab5157dfca4cf0cfddabc79c9be6965618c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c67946f23fa0c47618e88258ea0baab5157dfca4cf0cfddabc79c9be6965618c->leave($__internal_c67946f23fa0c47618e88258ea0baab5157dfca4cf0cfddabc79c9be6965618c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_181d0caec4f8b91b7d1f30231a6053985001bce7e5dbd7beb4524e162bbb5d2e = $this->env->getExtension("native_profiler");
        $__internal_181d0caec4f8b91b7d1f30231a6053985001bce7e5dbd7beb4524e162bbb5d2e->enter($__internal_181d0caec4f8b91b7d1f30231a6053985001bce7e5dbd7beb4524e162bbb5d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_181d0caec4f8b91b7d1f30231a6053985001bce7e5dbd7beb4524e162bbb5d2e->leave($__internal_181d0caec4f8b91b7d1f30231a6053985001bce7e5dbd7beb4524e162bbb5d2e_prof);

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

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
        $__internal_b48ce448c7ab689d3c2213a230966491743f546b9458027a7766f4b765229a27 = $this->env->getExtension("native_profiler");
        $__internal_b48ce448c7ab689d3c2213a230966491743f546b9458027a7766f4b765229a27->enter($__internal_b48ce448c7ab689d3c2213a230966491743f546b9458027a7766f4b765229a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b48ce448c7ab689d3c2213a230966491743f546b9458027a7766f4b765229a27->leave($__internal_b48ce448c7ab689d3c2213a230966491743f546b9458027a7766f4b765229a27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_85b1abe6d6120e68177244a9cad0b6f65750b57f469fb97905867b7614d2ce23 = $this->env->getExtension("native_profiler");
        $__internal_85b1abe6d6120e68177244a9cad0b6f65750b57f469fb97905867b7614d2ce23->enter($__internal_85b1abe6d6120e68177244a9cad0b6f65750b57f469fb97905867b7614d2ce23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85b1abe6d6120e68177244a9cad0b6f65750b57f469fb97905867b7614d2ce23->leave($__internal_85b1abe6d6120e68177244a9cad0b6f65750b57f469fb97905867b7614d2ce23_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_906c2e328455cd497d58c55a059602f9fea476f969644cc893a15d1414dbfb89 = $this->env->getExtension("native_profiler");
        $__internal_906c2e328455cd497d58c55a059602f9fea476f969644cc893a15d1414dbfb89->enter($__internal_906c2e328455cd497d58c55a059602f9fea476f969644cc893a15d1414dbfb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_906c2e328455cd497d58c55a059602f9fea476f969644cc893a15d1414dbfb89->leave($__internal_906c2e328455cd497d58c55a059602f9fea476f969644cc893a15d1414dbfb89_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6270038784ccee0f74b3da3e3201f2dda9aa82ad0d7594f720074e1cf9d72290 = $this->env->getExtension("native_profiler");
        $__internal_6270038784ccee0f74b3da3e3201f2dda9aa82ad0d7594f720074e1cf9d72290->enter($__internal_6270038784ccee0f74b3da3e3201f2dda9aa82ad0d7594f720074e1cf9d72290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6270038784ccee0f74b3da3e3201f2dda9aa82ad0d7594f720074e1cf9d72290->leave($__internal_6270038784ccee0f74b3da3e3201f2dda9aa82ad0d7594f720074e1cf9d72290_prof);

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

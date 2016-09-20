<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_574c720abd96beef17f7e9a105a12b8ef2f86a252844cae9dcfeaa92d0a9e597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d84bc8d55cbec89abd3a147d57a7944f9ee99d5c5410521a2dac1562ddc241d3 = $this->env->getExtension("native_profiler");
        $__internal_d84bc8d55cbec89abd3a147d57a7944f9ee99d5c5410521a2dac1562ddc241d3->enter($__internal_d84bc8d55cbec89abd3a147d57a7944f9ee99d5c5410521a2dac1562ddc241d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d84bc8d55cbec89abd3a147d57a7944f9ee99d5c5410521a2dac1562ddc241d3->leave($__internal_d84bc8d55cbec89abd3a147d57a7944f9ee99d5c5410521a2dac1562ddc241d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3477d86aa9b5bd0c7ecdfd660ec06811945c7212616dda478d5d3e15e4333dd0 = $this->env->getExtension("native_profiler");
        $__internal_3477d86aa9b5bd0c7ecdfd660ec06811945c7212616dda478d5d3e15e4333dd0->enter($__internal_3477d86aa9b5bd0c7ecdfd660ec06811945c7212616dda478d5d3e15e4333dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3477d86aa9b5bd0c7ecdfd660ec06811945c7212616dda478d5d3e15e4333dd0->leave($__internal_3477d86aa9b5bd0c7ecdfd660ec06811945c7212616dda478d5d3e15e4333dd0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_81bd3a4013a8b912a4a2589af0c6d6b2571c939fefbc65376c4aa9aa5ec2db83 = $this->env->getExtension("native_profiler");
        $__internal_81bd3a4013a8b912a4a2589af0c6d6b2571c939fefbc65376c4aa9aa5ec2db83->enter($__internal_81bd3a4013a8b912a4a2589af0c6d6b2571c939fefbc65376c4aa9aa5ec2db83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_81bd3a4013a8b912a4a2589af0c6d6b2571c939fefbc65376c4aa9aa5ec2db83->leave($__internal_81bd3a4013a8b912a4a2589af0c6d6b2571c939fefbc65376c4aa9aa5ec2db83_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

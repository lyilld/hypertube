<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_19886eef0b326860b21d34bd3a139a8e6bd2fcb082df77178306ccf6563596f3 extends Twig_Template
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
        $__internal_73608997ab80b3c846e907a346703fc4bdfcb8c55d30887f396583ca704ee82a = $this->env->getExtension("native_profiler");
        $__internal_73608997ab80b3c846e907a346703fc4bdfcb8c55d30887f396583ca704ee82a->enter($__internal_73608997ab80b3c846e907a346703fc4bdfcb8c55d30887f396583ca704ee82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73608997ab80b3c846e907a346703fc4bdfcb8c55d30887f396583ca704ee82a->leave($__internal_73608997ab80b3c846e907a346703fc4bdfcb8c55d30887f396583ca704ee82a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b5c0562f67b7fbf9390ab9c3fe73477373055487878975420bd5dea266fa2aa = $this->env->getExtension("native_profiler");
        $__internal_1b5c0562f67b7fbf9390ab9c3fe73477373055487878975420bd5dea266fa2aa->enter($__internal_1b5c0562f67b7fbf9390ab9c3fe73477373055487878975420bd5dea266fa2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1b5c0562f67b7fbf9390ab9c3fe73477373055487878975420bd5dea266fa2aa->leave($__internal_1b5c0562f67b7fbf9390ab9c3fe73477373055487878975420bd5dea266fa2aa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbad9b59b2efd2ca0b5050b7bccee11cec233761eee8e63a1864462f313a96ee = $this->env->getExtension("native_profiler");
        $__internal_dbad9b59b2efd2ca0b5050b7bccee11cec233761eee8e63a1864462f313a96ee->enter($__internal_dbad9b59b2efd2ca0b5050b7bccee11cec233761eee8e63a1864462f313a96ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dbad9b59b2efd2ca0b5050b7bccee11cec233761eee8e63a1864462f313a96ee->leave($__internal_dbad9b59b2efd2ca0b5050b7bccee11cec233761eee8e63a1864462f313a96ee_prof);

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

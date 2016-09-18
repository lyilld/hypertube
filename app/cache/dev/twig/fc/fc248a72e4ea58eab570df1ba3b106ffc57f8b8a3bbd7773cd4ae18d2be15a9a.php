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
        $__internal_84a0b93891481104a40038c0de5e5d22022200b090cf54b30fb9d504bff7439e = $this->env->getExtension("native_profiler");
        $__internal_84a0b93891481104a40038c0de5e5d22022200b090cf54b30fb9d504bff7439e->enter($__internal_84a0b93891481104a40038c0de5e5d22022200b090cf54b30fb9d504bff7439e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84a0b93891481104a40038c0de5e5d22022200b090cf54b30fb9d504bff7439e->leave($__internal_84a0b93891481104a40038c0de5e5d22022200b090cf54b30fb9d504bff7439e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23b429e9541a3fec651576c82e2c6b6607b3b3e9134ee20cab22d7a3deb7d8b2 = $this->env->getExtension("native_profiler");
        $__internal_23b429e9541a3fec651576c82e2c6b6607b3b3e9134ee20cab22d7a3deb7d8b2->enter($__internal_23b429e9541a3fec651576c82e2c6b6607b3b3e9134ee20cab22d7a3deb7d8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_23b429e9541a3fec651576c82e2c6b6607b3b3e9134ee20cab22d7a3deb7d8b2->leave($__internal_23b429e9541a3fec651576c82e2c6b6607b3b3e9134ee20cab22d7a3deb7d8b2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8a8422fef29706372b81096d89b64fa9a0a8101c02c5fd84fb4343e683ee5d2 = $this->env->getExtension("native_profiler");
        $__internal_d8a8422fef29706372b81096d89b64fa9a0a8101c02c5fd84fb4343e683ee5d2->enter($__internal_d8a8422fef29706372b81096d89b64fa9a0a8101c02c5fd84fb4343e683ee5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d8a8422fef29706372b81096d89b64fa9a0a8101c02c5fd84fb4343e683ee5d2->leave($__internal_d8a8422fef29706372b81096d89b64fa9a0a8101c02c5fd84fb4343e683ee5d2_prof);

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

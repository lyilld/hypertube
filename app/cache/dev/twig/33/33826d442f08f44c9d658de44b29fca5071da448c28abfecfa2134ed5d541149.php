<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_eb496c664b991b29c36764481c85b193349402e7097bed7b4c372b65028ae558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea2517bff846598f49384c7411791ccf854dc6e066601808dd9dd5a1ba29fb74 = $this->env->getExtension("native_profiler");
        $__internal_ea2517bff846598f49384c7411791ccf854dc6e066601808dd9dd5a1ba29fb74->enter($__internal_ea2517bff846598f49384c7411791ccf854dc6e066601808dd9dd5a1ba29fb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_ea2517bff846598f49384c7411791ccf854dc6e066601808dd9dd5a1ba29fb74->leave($__internal_ea2517bff846598f49384c7411791ccf854dc6e066601808dd9dd5a1ba29fb74_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

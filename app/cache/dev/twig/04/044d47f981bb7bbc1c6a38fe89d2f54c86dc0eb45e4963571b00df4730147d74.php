<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_245bc16746342f2865ede3656a1542a1f42ac381172d2797e45a3105bbeebce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38164ae1a54fbac395485e788717035261e397ff08658df7848b21e3583b1426 = $this->env->getExtension("native_profiler");
        $__internal_38164ae1a54fbac395485e788717035261e397ff08658df7848b21e3583b1426->enter($__internal_38164ae1a54fbac395485e788717035261e397ff08658df7848b21e3583b1426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38164ae1a54fbac395485e788717035261e397ff08658df7848b21e3583b1426->leave($__internal_38164ae1a54fbac395485e788717035261e397ff08658df7848b21e3583b1426_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c45bdba291eae8e88ffabcb76de62125d57b0b913e601852230265e746fbb1b = $this->env->getExtension("native_profiler");
        $__internal_3c45bdba291eae8e88ffabcb76de62125d57b0b913e601852230265e746fbb1b->enter($__internal_3c45bdba291eae8e88ffabcb76de62125d57b0b913e601852230265e746fbb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3c45bdba291eae8e88ffabcb76de62125d57b0b913e601852230265e746fbb1b->leave($__internal_3c45bdba291eae8e88ffabcb76de62125d57b0b913e601852230265e746fbb1b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */

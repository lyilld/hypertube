<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_de6219f2a84a56584b33183cad39db5ea7455ef37c124ebff7c609add76034a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cbd0a80b9b365f6ad82c7cc840999e43591356ab6e905a97d968233d9641080 = $this->env->getExtension("native_profiler");
        $__internal_7cbd0a80b9b365f6ad82c7cc840999e43591356ab6e905a97d968233d9641080->enter($__internal_7cbd0a80b9b365f6ad82c7cc840999e43591356ab6e905a97d968233d9641080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_7cbd0a80b9b365f6ad82c7cc840999e43591356ab6e905a97d968233d9641080->leave($__internal_7cbd0a80b9b365f6ad82c7cc840999e43591356ab6e905a97d968233d9641080_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ca6f10d7208c60a2f4cc75da7e780fb0e4c899e8b94f8dc786a8541ffaa0429 = $this->env->getExtension("native_profiler");
        $__internal_2ca6f10d7208c60a2f4cc75da7e780fb0e4c899e8b94f8dc786a8541ffaa0429->enter($__internal_2ca6f10d7208c60a2f4cc75da7e780fb0e4c899e8b94f8dc786a8541ffaa0429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_2ca6f10d7208c60a2f4cc75da7e780fb0e4c899e8b94f8dc786a8541ffaa0429->leave($__internal_2ca6f10d7208c60a2f4cc75da7e780fb0e4c899e8b94f8dc786a8541ffaa0429_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */

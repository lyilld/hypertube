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
        $__internal_e98be993d8a0f43efd1e4f3883812259e4303fd01be8735009cd01c348a44d31 = $this->env->getExtension("native_profiler");
        $__internal_e98be993d8a0f43efd1e4f3883812259e4303fd01be8735009cd01c348a44d31->enter($__internal_e98be993d8a0f43efd1e4f3883812259e4303fd01be8735009cd01c348a44d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e98be993d8a0f43efd1e4f3883812259e4303fd01be8735009cd01c348a44d31->leave($__internal_e98be993d8a0f43efd1e4f3883812259e4303fd01be8735009cd01c348a44d31_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94e2fca5cb221715197cc719703bacd894231b55338a026c1247809efb5749f9 = $this->env->getExtension("native_profiler");
        $__internal_94e2fca5cb221715197cc719703bacd894231b55338a026c1247809efb5749f9->enter($__internal_94e2fca5cb221715197cc719703bacd894231b55338a026c1247809efb5749f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_94e2fca5cb221715197cc719703bacd894231b55338a026c1247809efb5749f9->leave($__internal_94e2fca5cb221715197cc719703bacd894231b55338a026c1247809efb5749f9_prof);

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

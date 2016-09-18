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
        $__internal_ab7b3298fd506f712d7088bb37a5f957c8e8d946ec8c327b0d38c3706161ce1f = $this->env->getExtension("native_profiler");
        $__internal_ab7b3298fd506f712d7088bb37a5f957c8e8d946ec8c327b0d38c3706161ce1f->enter($__internal_ab7b3298fd506f712d7088bb37a5f957c8e8d946ec8c327b0d38c3706161ce1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ab7b3298fd506f712d7088bb37a5f957c8e8d946ec8c327b0d38c3706161ce1f->leave($__internal_ab7b3298fd506f712d7088bb37a5f957c8e8d946ec8c327b0d38c3706161ce1f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0b1fd85f7d47868ee273443d6b840b334f5a65b3c7b77ba40b2ff92f0b2009b = $this->env->getExtension("native_profiler");
        $__internal_c0b1fd85f7d47868ee273443d6b840b334f5a65b3c7b77ba40b2ff92f0b2009b->enter($__internal_c0b1fd85f7d47868ee273443d6b840b334f5a65b3c7b77ba40b2ff92f0b2009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_c0b1fd85f7d47868ee273443d6b840b334f5a65b3c7b77ba40b2ff92f0b2009b->leave($__internal_c0b1fd85f7d47868ee273443d6b840b334f5a65b3c7b77ba40b2ff92f0b2009b_prof);

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

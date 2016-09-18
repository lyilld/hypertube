<?php

/* FOSUserBundle:Resetting:password_already_requested.html.twig */
class __TwigTemplate_fbef3d7c833f267aa6de732d2584e414cff13e8b21f9652b825c40b097233bfb extends Twig_Template
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
        $__internal_5a927977431fb594a2db461231d12bcb637ce99cfd7091a95a111fe151b15b4e = $this->env->getExtension("native_profiler");
        $__internal_5a927977431fb594a2db461231d12bcb637ce99cfd7091a95a111fe151b15b4e->enter($__internal_5a927977431fb594a2db461231d12bcb637ce99cfd7091a95a111fe151b15b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:password_already_requested.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_5a927977431fb594a2db461231d12bcb637ce99cfd7091a95a111fe151b15b4e->leave($__internal_5a927977431fb594a2db461231d12bcb637ce99cfd7091a95a111fe151b15b4e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9c88faacd49e55358c3fd06d19889fdfec5cd4077b8abb40837b67a79b945b1 = $this->env->getExtension("native_profiler");
        $__internal_a9c88faacd49e55358c3fd06d19889fdfec5cd4077b8abb40837b67a79b945b1->enter($__internal_a9c88faacd49e55358c3fd06d19889fdfec5cd4077b8abb40837b67a79b945b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a9c88faacd49e55358c3fd06d19889fdfec5cd4077b8abb40837b67a79b945b1->leave($__internal_a9c88faacd49e55358c3fd06d19889fdfec5cd4077b8abb40837b67a79b945b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:password_already_requested.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

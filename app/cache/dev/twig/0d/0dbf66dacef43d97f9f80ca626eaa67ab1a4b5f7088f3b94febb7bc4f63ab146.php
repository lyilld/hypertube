<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d1605ee9f6fe78231d558710ea14eded1548109a85e5409c01c581bd943e6b36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecb5356e7c1728b9b6a219c1f30c09a56e3baa78e1dc8b772897e392276f21c5 = $this->env->getExtension("native_profiler");
        $__internal_ecb5356e7c1728b9b6a219c1f30c09a56e3baa78e1dc8b772897e392276f21c5->enter($__internal_ecb5356e7c1728b9b6a219c1f30c09a56e3baa78e1dc8b772897e392276f21c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ecb5356e7c1728b9b6a219c1f30c09a56e3baa78e1dc8b772897e392276f21c5->leave($__internal_ecb5356e7c1728b9b6a219c1f30c09a56e3baa78e1dc8b772897e392276f21c5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5b0fce82e39d9b331f3ac1f3fcb14d7315235deedc41e3219ad70ad273123719 = $this->env->getExtension("native_profiler");
        $__internal_5b0fce82e39d9b331f3ac1f3fcb14d7315235deedc41e3219ad70ad273123719->enter($__internal_5b0fce82e39d9b331f3ac1f3fcb14d7315235deedc41e3219ad70ad273123719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5b0fce82e39d9b331f3ac1f3fcb14d7315235deedc41e3219ad70ad273123719->leave($__internal_5b0fce82e39d9b331f3ac1f3fcb14d7315235deedc41e3219ad70ad273123719_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a4e8f6ed1d5953f6ba16e85e91e198654184b8655daf0c15b8631b4f8d542b60 = $this->env->getExtension("native_profiler");
        $__internal_a4e8f6ed1d5953f6ba16e85e91e198654184b8655daf0c15b8631b4f8d542b60->enter($__internal_a4e8f6ed1d5953f6ba16e85e91e198654184b8655daf0c15b8631b4f8d542b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a4e8f6ed1d5953f6ba16e85e91e198654184b8655daf0c15b8631b4f8d542b60->leave($__internal_a4e8f6ed1d5953f6ba16e85e91e198654184b8655daf0c15b8631b4f8d542b60_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b2dd42c6007644a3e1075a15f9284f3dda57826a5278eac2f411fd1ed25289a8 = $this->env->getExtension("native_profiler");
        $__internal_b2dd42c6007644a3e1075a15f9284f3dda57826a5278eac2f411fd1ed25289a8->enter($__internal_b2dd42c6007644a3e1075a15f9284f3dda57826a5278eac2f411fd1ed25289a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b2dd42c6007644a3e1075a15f9284f3dda57826a5278eac2f411fd1ed25289a8->leave($__internal_b2dd42c6007644a3e1075a15f9284f3dda57826a5278eac2f411fd1ed25289a8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

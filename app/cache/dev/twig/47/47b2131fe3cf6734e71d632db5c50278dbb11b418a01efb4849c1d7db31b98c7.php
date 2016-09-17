<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_dab2e68acf06aec9ef03c58f798cd2651b4bb35f4f018397d9eb34597e4a6dab extends Twig_Template
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
        $__internal_88e745e137bbcbe18cffaf3f3570f5503056a9cdeeda429b665ae27e5c404939 = $this->env->getExtension("native_profiler");
        $__internal_88e745e137bbcbe18cffaf3f3570f5503056a9cdeeda429b665ae27e5c404939->enter($__internal_88e745e137bbcbe18cffaf3f3570f5503056a9cdeeda429b665ae27e5c404939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_88e745e137bbcbe18cffaf3f3570f5503056a9cdeeda429b665ae27e5c404939->leave($__internal_88e745e137bbcbe18cffaf3f3570f5503056a9cdeeda429b665ae27e5c404939_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c25c9d3fe346711d28b0b426b01b2e1c5c877b006c05e3e801a054b0c170f70a = $this->env->getExtension("native_profiler");
        $__internal_c25c9d3fe346711d28b0b426b01b2e1c5c877b006c05e3e801a054b0c170f70a->enter($__internal_c25c9d3fe346711d28b0b426b01b2e1c5c877b006c05e3e801a054b0c170f70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c25c9d3fe346711d28b0b426b01b2e1c5c877b006c05e3e801a054b0c170f70a->leave($__internal_c25c9d3fe346711d28b0b426b01b2e1c5c877b006c05e3e801a054b0c170f70a_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_32db10ca10fb7c3806d6e0cc6d032c9aa70ada1c92e5638565d75fc00b12fdfd = $this->env->getExtension("native_profiler");
        $__internal_32db10ca10fb7c3806d6e0cc6d032c9aa70ada1c92e5638565d75fc00b12fdfd->enter($__internal_32db10ca10fb7c3806d6e0cc6d032c9aa70ada1c92e5638565d75fc00b12fdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_32db10ca10fb7c3806d6e0cc6d032c9aa70ada1c92e5638565d75fc00b12fdfd->leave($__internal_32db10ca10fb7c3806d6e0cc6d032c9aa70ada1c92e5638565d75fc00b12fdfd_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_85814a204d9fab7952b52107886068abeeb2a7cb9bcbf55db30d9e2d2bf98ade = $this->env->getExtension("native_profiler");
        $__internal_85814a204d9fab7952b52107886068abeeb2a7cb9bcbf55db30d9e2d2bf98ade->enter($__internal_85814a204d9fab7952b52107886068abeeb2a7cb9bcbf55db30d9e2d2bf98ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_85814a204d9fab7952b52107886068abeeb2a7cb9bcbf55db30d9e2d2bf98ade->leave($__internal_85814a204d9fab7952b52107886068abeeb2a7cb9bcbf55db30d9e2d2bf98ade_prof);

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

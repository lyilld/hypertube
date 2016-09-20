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
        $__internal_56d44240496416fb8388ed31c816b8a17e88b009cf8c9ffa3859d4ad44ca6d63 = $this->env->getExtension("native_profiler");
        $__internal_56d44240496416fb8388ed31c816b8a17e88b009cf8c9ffa3859d4ad44ca6d63->enter($__internal_56d44240496416fb8388ed31c816b8a17e88b009cf8c9ffa3859d4ad44ca6d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_56d44240496416fb8388ed31c816b8a17e88b009cf8c9ffa3859d4ad44ca6d63->leave($__internal_56d44240496416fb8388ed31c816b8a17e88b009cf8c9ffa3859d4ad44ca6d63_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e54ae99296970def8f995815644f8f26cb818e1496597baddb39c0aa956e3c3f = $this->env->getExtension("native_profiler");
        $__internal_e54ae99296970def8f995815644f8f26cb818e1496597baddb39c0aa956e3c3f->enter($__internal_e54ae99296970def8f995815644f8f26cb818e1496597baddb39c0aa956e3c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e54ae99296970def8f995815644f8f26cb818e1496597baddb39c0aa956e3c3f->leave($__internal_e54ae99296970def8f995815644f8f26cb818e1496597baddb39c0aa956e3c3f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a77e4534ad6e6b3742a40c74fd152046bca49b9338e6cd580742c75d9f52efc5 = $this->env->getExtension("native_profiler");
        $__internal_a77e4534ad6e6b3742a40c74fd152046bca49b9338e6cd580742c75d9f52efc5->enter($__internal_a77e4534ad6e6b3742a40c74fd152046bca49b9338e6cd580742c75d9f52efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a77e4534ad6e6b3742a40c74fd152046bca49b9338e6cd580742c75d9f52efc5->leave($__internal_a77e4534ad6e6b3742a40c74fd152046bca49b9338e6cd580742c75d9f52efc5_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_442c4734ccbeedee7fa141fbcecaab0add5d46385728c4c4bc3d9ca509cef54c = $this->env->getExtension("native_profiler");
        $__internal_442c4734ccbeedee7fa141fbcecaab0add5d46385728c4c4bc3d9ca509cef54c->enter($__internal_442c4734ccbeedee7fa141fbcecaab0add5d46385728c4c4bc3d9ca509cef54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_442c4734ccbeedee7fa141fbcecaab0add5d46385728c4c4bc3d9ca509cef54c->leave($__internal_442c4734ccbeedee7fa141fbcecaab0add5d46385728c4c4bc3d9ca509cef54c_prof);

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

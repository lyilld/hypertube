<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_db4c0fed9be8011a80c70b0b1008051e2ab7982c949ba53d8c4d20cf0677a205 extends Twig_Template
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
        $__internal_105d45e8d34f5c85ed3c759f454c1ef62922618bab8525c400e5ae197400f6a5 = $this->env->getExtension("native_profiler");
        $__internal_105d45e8d34f5c85ed3c759f454c1ef62922618bab8525c400e5ae197400f6a5->enter($__internal_105d45e8d34f5c85ed3c759f454c1ef62922618bab8525c400e5ae197400f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_105d45e8d34f5c85ed3c759f454c1ef62922618bab8525c400e5ae197400f6a5->leave($__internal_105d45e8d34f5c85ed3c759f454c1ef62922618bab8525c400e5ae197400f6a5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c5731686fa6725c35d9abb2a4cc4ff2d9db0b444ecd8c8e2a13d964ea4c1d696 = $this->env->getExtension("native_profiler");
        $__internal_c5731686fa6725c35d9abb2a4cc4ff2d9db0b444ecd8c8e2a13d964ea4c1d696->enter($__internal_c5731686fa6725c35d9abb2a4cc4ff2d9db0b444ecd8c8e2a13d964ea4c1d696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_c5731686fa6725c35d9abb2a4cc4ff2d9db0b444ecd8c8e2a13d964ea4c1d696->leave($__internal_c5731686fa6725c35d9abb2a4cc4ff2d9db0b444ecd8c8e2a13d964ea4c1d696_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6083933b8094b64275b5a187c2386a6087248e889ac7ab8fdeac2c01eea48f84 = $this->env->getExtension("native_profiler");
        $__internal_6083933b8094b64275b5a187c2386a6087248e889ac7ab8fdeac2c01eea48f84->enter($__internal_6083933b8094b64275b5a187c2386a6087248e889ac7ab8fdeac2c01eea48f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6083933b8094b64275b5a187c2386a6087248e889ac7ab8fdeac2c01eea48f84->leave($__internal_6083933b8094b64275b5a187c2386a6087248e889ac7ab8fdeac2c01eea48f84_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_3369281e66a42be0af4cde9ab7379c4c92cc271b46f59d120d836666ee2c767f = $this->env->getExtension("native_profiler");
        $__internal_3369281e66a42be0af4cde9ab7379c4c92cc271b46f59d120d836666ee2c767f->enter($__internal_3369281e66a42be0af4cde9ab7379c4c92cc271b46f59d120d836666ee2c767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3369281e66a42be0af4cde9ab7379c4c92cc271b46f59d120d836666ee2c767f->leave($__internal_3369281e66a42be0af4cde9ab7379c4c92cc271b46f59d120d836666ee2c767f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

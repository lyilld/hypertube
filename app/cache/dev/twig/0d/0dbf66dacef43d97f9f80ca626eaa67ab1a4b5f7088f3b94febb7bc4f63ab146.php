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
        $__internal_a6d59dbfd64f147413de39db5e3da48af5d87bbf5362d85a47ca90a9bef71596 = $this->env->getExtension("native_profiler");
        $__internal_a6d59dbfd64f147413de39db5e3da48af5d87bbf5362d85a47ca90a9bef71596->enter($__internal_a6d59dbfd64f147413de39db5e3da48af5d87bbf5362d85a47ca90a9bef71596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a6d59dbfd64f147413de39db5e3da48af5d87bbf5362d85a47ca90a9bef71596->leave($__internal_a6d59dbfd64f147413de39db5e3da48af5d87bbf5362d85a47ca90a9bef71596_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e5806b7268de0397235266285eba4239214e79eaa6c46ee207055c25bd0be2f4 = $this->env->getExtension("native_profiler");
        $__internal_e5806b7268de0397235266285eba4239214e79eaa6c46ee207055c25bd0be2f4->enter($__internal_e5806b7268de0397235266285eba4239214e79eaa6c46ee207055c25bd0be2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e5806b7268de0397235266285eba4239214e79eaa6c46ee207055c25bd0be2f4->leave($__internal_e5806b7268de0397235266285eba4239214e79eaa6c46ee207055c25bd0be2f4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4dd603ef6d1ace772be1e9638a8b09b07ecc79bdeea8aa0c9aad41a99e8d8620 = $this->env->getExtension("native_profiler");
        $__internal_4dd603ef6d1ace772be1e9638a8b09b07ecc79bdeea8aa0c9aad41a99e8d8620->enter($__internal_4dd603ef6d1ace772be1e9638a8b09b07ecc79bdeea8aa0c9aad41a99e8d8620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4dd603ef6d1ace772be1e9638a8b09b07ecc79bdeea8aa0c9aad41a99e8d8620->leave($__internal_4dd603ef6d1ace772be1e9638a8b09b07ecc79bdeea8aa0c9aad41a99e8d8620_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_00e2f8f9f232726e401954331a156fa31d2489924e7dcad9bc5c8122f9808035 = $this->env->getExtension("native_profiler");
        $__internal_00e2f8f9f232726e401954331a156fa31d2489924e7dcad9bc5c8122f9808035->enter($__internal_00e2f8f9f232726e401954331a156fa31d2489924e7dcad9bc5c8122f9808035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_00e2f8f9f232726e401954331a156fa31d2489924e7dcad9bc5c8122f9808035->leave($__internal_00e2f8f9f232726e401954331a156fa31d2489924e7dcad9bc5c8122f9808035_prof);

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

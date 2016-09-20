<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5931672269af778f4f28d03f73b66241f9ada0594b765819a179b032a50c7713 extends Twig_Template
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
        $__internal_effdac4cafd25bede879cd699fc7b365443ad1b7d5a56daef634914d9ac17ea1 = $this->env->getExtension("native_profiler");
        $__internal_effdac4cafd25bede879cd699fc7b365443ad1b7d5a56daef634914d9ac17ea1->enter($__internal_effdac4cafd25bede879cd699fc7b365443ad1b7d5a56daef634914d9ac17ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_effdac4cafd25bede879cd699fc7b365443ad1b7d5a56daef634914d9ac17ea1->leave($__internal_effdac4cafd25bede879cd699fc7b365443ad1b7d5a56daef634914d9ac17ea1_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_551c4550b56b0daea892784485bafe40225f8fd0e15b98c6f677e5d4d6d01421 = $this->env->getExtension("native_profiler");
        $__internal_551c4550b56b0daea892784485bafe40225f8fd0e15b98c6f677e5d4d6d01421->enter($__internal_551c4550b56b0daea892784485bafe40225f8fd0e15b98c6f677e5d4d6d01421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_551c4550b56b0daea892784485bafe40225f8fd0e15b98c6f677e5d4d6d01421->leave($__internal_551c4550b56b0daea892784485bafe40225f8fd0e15b98c6f677e5d4d6d01421_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_5e1bcadfae12c5b3e911929231d394d826a6ca9bf052fe05c20cde74a88c3791 = $this->env->getExtension("native_profiler");
        $__internal_5e1bcadfae12c5b3e911929231d394d826a6ca9bf052fe05c20cde74a88c3791->enter($__internal_5e1bcadfae12c5b3e911929231d394d826a6ca9bf052fe05c20cde74a88c3791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5e1bcadfae12c5b3e911929231d394d826a6ca9bf052fe05c20cde74a88c3791->leave($__internal_5e1bcadfae12c5b3e911929231d394d826a6ca9bf052fe05c20cde74a88c3791_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a205aa5271a79fc5919a30ff3464f557828f092c0707f7bd91f9c2f74ab67d55 = $this->env->getExtension("native_profiler");
        $__internal_a205aa5271a79fc5919a30ff3464f557828f092c0707f7bd91f9c2f74ab67d55->enter($__internal_a205aa5271a79fc5919a30ff3464f557828f092c0707f7bd91f9c2f74ab67d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a205aa5271a79fc5919a30ff3464f557828f092c0707f7bd91f9c2f74ab67d55->leave($__internal_a205aa5271a79fc5919a30ff3464f557828f092c0707f7bd91f9c2f74ab67d55_prof);

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

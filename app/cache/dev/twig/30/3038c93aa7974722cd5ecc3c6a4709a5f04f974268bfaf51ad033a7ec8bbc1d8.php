<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_50dac4fe5c03d27fd7f5ee238f94d5c74b31205509811c768ab849514761767e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9da6bc3e541e77955f3367b95106ef9c2c5e51d5218e7346daae511aeaac35ce = $this->env->getExtension("native_profiler");
        $__internal_9da6bc3e541e77955f3367b95106ef9c2c5e51d5218e7346daae511aeaac35ce->enter($__internal_9da6bc3e541e77955f3367b95106ef9c2c5e51d5218e7346daae511aeaac35ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da6bc3e541e77955f3367b95106ef9c2c5e51d5218e7346daae511aeaac35ce->leave($__internal_9da6bc3e541e77955f3367b95106ef9c2c5e51d5218e7346daae511aeaac35ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a685b6f6062e520800f02641111141e92c12f7951fdcaf55ddb3ef6d550ce73d = $this->env->getExtension("native_profiler");
        $__internal_a685b6f6062e520800f02641111141e92c12f7951fdcaf55ddb3ef6d550ce73d->enter($__internal_a685b6f6062e520800f02641111141e92c12f7951fdcaf55ddb3ef6d550ce73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_a685b6f6062e520800f02641111141e92c12f7951fdcaf55ddb3ef6d550ce73d->leave($__internal_a685b6f6062e520800f02641111141e92c12f7951fdcaf55ddb3ef6d550ce73d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

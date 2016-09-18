<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b0ad154990d4d4a81e1b638c509c74ceb8732c9ee1c67a171d80bfed3b8663c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_d568a582bc1a632da13a7236a4be05b460e4949281e465d807e520e754f651c1 = $this->env->getExtension("native_profiler");
        $__internal_d568a582bc1a632da13a7236a4be05b460e4949281e465d807e520e754f651c1->enter($__internal_d568a582bc1a632da13a7236a4be05b460e4949281e465d807e520e754f651c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d568a582bc1a632da13a7236a4be05b460e4949281e465d807e520e754f651c1->leave($__internal_d568a582bc1a632da13a7236a4be05b460e4949281e465d807e520e754f651c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_564181c44cfb63ce18e534e2da58dc0c7f753fa40fd596c8762adb0e166ed90d = $this->env->getExtension("native_profiler");
        $__internal_564181c44cfb63ce18e534e2da58dc0c7f753fa40fd596c8762adb0e166ed90d->enter($__internal_564181c44cfb63ce18e534e2da58dc0c7f753fa40fd596c8762adb0e166ed90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_564181c44cfb63ce18e534e2da58dc0c7f753fa40fd596c8762adb0e166ed90d->leave($__internal_564181c44cfb63ce18e534e2da58dc0c7f753fa40fd596c8762adb0e166ed90d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

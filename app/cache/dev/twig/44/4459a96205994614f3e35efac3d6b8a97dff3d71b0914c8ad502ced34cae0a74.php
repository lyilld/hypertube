<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e5388068fd5ba7f51abda00a5f890116c659199f440e09cc2dd24295519ab92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_875a334f37ae4f843dd7ab759216712b621f5de4a65e0aed9df65a0ff43ff226 = $this->env->getExtension("native_profiler");
        $__internal_875a334f37ae4f843dd7ab759216712b621f5de4a65e0aed9df65a0ff43ff226->enter($__internal_875a334f37ae4f843dd7ab759216712b621f5de4a65e0aed9df65a0ff43ff226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_875a334f37ae4f843dd7ab759216712b621f5de4a65e0aed9df65a0ff43ff226->leave($__internal_875a334f37ae4f843dd7ab759216712b621f5de4a65e0aed9df65a0ff43ff226_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47896f26b5711a53e8e0664b6c4ff0d91c83873d1fb4971c4aac760a2f9e6b55 = $this->env->getExtension("native_profiler");
        $__internal_47896f26b5711a53e8e0664b6c4ff0d91c83873d1fb4971c4aac760a2f9e6b55->enter($__internal_47896f26b5711a53e8e0664b6c4ff0d91c83873d1fb4971c4aac760a2f9e6b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_47896f26b5711a53e8e0664b6c4ff0d91c83873d1fb4971c4aac760a2f9e6b55->leave($__internal_47896f26b5711a53e8e0664b6c4ff0d91c83873d1fb4971c4aac760a2f9e6b55_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

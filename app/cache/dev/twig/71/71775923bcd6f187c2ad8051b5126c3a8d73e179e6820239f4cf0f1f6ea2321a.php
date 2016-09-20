<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_1ca72d82778b93d7dfdef809df546a04c62ef293e074796a1237c886c6572419 extends Twig_Template
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
        $__internal_76e7814f58f9f66d6d95bd38955639380d3045abeb87d696b93835bb0cb7c977 = $this->env->getExtension("native_profiler");
        $__internal_76e7814f58f9f66d6d95bd38955639380d3045abeb87d696b93835bb0cb7c977->enter($__internal_76e7814f58f9f66d6d95bd38955639380d3045abeb87d696b93835bb0cb7c977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76e7814f58f9f66d6d95bd38955639380d3045abeb87d696b93835bb0cb7c977->leave($__internal_76e7814f58f9f66d6d95bd38955639380d3045abeb87d696b93835bb0cb7c977_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2b2def60627c7967d4e659f9a9dec132561f0ce2387a8801d5895563863e61a8 = $this->env->getExtension("native_profiler");
        $__internal_2b2def60627c7967d4e659f9a9dec132561f0ce2387a8801d5895563863e61a8->enter($__internal_2b2def60627c7967d4e659f9a9dec132561f0ce2387a8801d5895563863e61a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2b2def60627c7967d4e659f9a9dec132561f0ce2387a8801d5895563863e61a8->leave($__internal_2b2def60627c7967d4e659f9a9dec132561f0ce2387a8801d5895563863e61a8_prof);

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

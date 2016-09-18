<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_4c36865f0c0f1077852cd0cbbfd1fb5c5975be4af348bcdfa8051be2829a0ca1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_454d4fbf77df3eee96b61d3ae03ae32e2209fbf9950e9fadeb1afeadb1c75b85 = $this->env->getExtension("native_profiler");
        $__internal_454d4fbf77df3eee96b61d3ae03ae32e2209fbf9950e9fadeb1afeadb1c75b85->enter($__internal_454d4fbf77df3eee96b61d3ae03ae32e2209fbf9950e9fadeb1afeadb1c75b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_454d4fbf77df3eee96b61d3ae03ae32e2209fbf9950e9fadeb1afeadb1c75b85->leave($__internal_454d4fbf77df3eee96b61d3ae03ae32e2209fbf9950e9fadeb1afeadb1c75b85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_00c1b4d0a7756bdbc23b7a123ddd68d3931288a419abae57856d6e8f236021e2 = $this->env->getExtension("native_profiler");
        $__internal_00c1b4d0a7756bdbc23b7a123ddd68d3931288a419abae57856d6e8f236021e2->enter($__internal_00c1b4d0a7756bdbc23b7a123ddd68d3931288a419abae57856d6e8f236021e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_00c1b4d0a7756bdbc23b7a123ddd68d3931288a419abae57856d6e8f236021e2->leave($__internal_00c1b4d0a7756bdbc23b7a123ddd68d3931288a419abae57856d6e8f236021e2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_8ceb00601c1a64882e4757505ec1a555a1f06037c471b642d271819e60b0d0e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_f79a91e732bc42dc9aeb07ab8d3f2fc1ce16ee3243a5f0247665a0b3afb6efc5 = $this->env->getExtension("native_profiler");
        $__internal_f79a91e732bc42dc9aeb07ab8d3f2fc1ce16ee3243a5f0247665a0b3afb6efc5->enter($__internal_f79a91e732bc42dc9aeb07ab8d3f2fc1ce16ee3243a5f0247665a0b3afb6efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79a91e732bc42dc9aeb07ab8d3f2fc1ce16ee3243a5f0247665a0b3afb6efc5->leave($__internal_f79a91e732bc42dc9aeb07ab8d3f2fc1ce16ee3243a5f0247665a0b3afb6efc5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_54d8d0d32a86b78e41ecebdc6221d716985eaf300de7b07beac7f3547ffcfdda = $this->env->getExtension("native_profiler");
        $__internal_54d8d0d32a86b78e41ecebdc6221d716985eaf300de7b07beac7f3547ffcfdda->enter($__internal_54d8d0d32a86b78e41ecebdc6221d716985eaf300de7b07beac7f3547ffcfdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_54d8d0d32a86b78e41ecebdc6221d716985eaf300de7b07beac7f3547ffcfdda->leave($__internal_54d8d0d32a86b78e41ecebdc6221d716985eaf300de7b07beac7f3547ffcfdda_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */

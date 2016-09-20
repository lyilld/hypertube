<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_168709330ea7c523070c1a568a1d8818b3414aa3f9d23ae74fbd7bc41a62fecc extends Twig_Template
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
        $__internal_76cc4dee57c7a60b235832f032314fe86bb2b316944ff767565561453d92d915 = $this->env->getExtension("native_profiler");
        $__internal_76cc4dee57c7a60b235832f032314fe86bb2b316944ff767565561453d92d915->enter($__internal_76cc4dee57c7a60b235832f032314fe86bb2b316944ff767565561453d92d915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76cc4dee57c7a60b235832f032314fe86bb2b316944ff767565561453d92d915->leave($__internal_76cc4dee57c7a60b235832f032314fe86bb2b316944ff767565561453d92d915_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_464e41451bb7344c4182beece51a59efe5dd2d2d96c3183aba93b35f486a06d7 = $this->env->getExtension("native_profiler");
        $__internal_464e41451bb7344c4182beece51a59efe5dd2d2d96c3183aba93b35f486a06d7->enter($__internal_464e41451bb7344c4182beece51a59efe5dd2d2d96c3183aba93b35f486a06d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_464e41451bb7344c4182beece51a59efe5dd2d2d96c3183aba93b35f486a06d7->leave($__internal_464e41451bb7344c4182beece51a59efe5dd2d2d96c3183aba93b35f486a06d7_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     {{ include('FOSUserBundle:Security:login_content.html.twig') }}*/
/* {% endblock fos_user_content %}*/
/* */

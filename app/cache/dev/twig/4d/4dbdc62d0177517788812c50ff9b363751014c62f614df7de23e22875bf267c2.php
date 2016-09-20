<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_9d8577647940f8423a70d9bbd2690f469c5f74b6b36dec5ac9e640ee52a71d45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CoreBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_812266a1f786497462b7682b40c73a3484bb9a19c5a143bd1763ad4e67d0d9d3 = $this->env->getExtension("native_profiler");
        $__internal_812266a1f786497462b7682b40c73a3484bb9a19c5a143bd1763ad4e67d0d9d3->enter($__internal_812266a1f786497462b7682b40c73a3484bb9a19c5a143bd1763ad4e67d0d9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_812266a1f786497462b7682b40c73a3484bb9a19c5a143bd1763ad4e67d0d9d3->leave($__internal_812266a1f786497462b7682b40c73a3484bb9a19c5a143bd1763ad4e67d0d9d3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_901f3fb188a0dc3179903232d6dc080e87e5949f358da91c1c96378bbbda6b93 = $this->env->getExtension("native_profiler");
        $__internal_901f3fb188a0dc3179903232d6dc080e87e5949f358da91c1c96378bbbda6b93->enter($__internal_901f3fb188a0dc3179903232d6dc080e87e5949f358da91c1c96378bbbda6b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_901f3fb188a0dc3179903232d6dc080e87e5949f358da91c1c96378bbbda6b93->leave($__internal_901f3fb188a0dc3179903232d6dc080e87e5949f358da91c1c96378bbbda6b93_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_d840bcc9d4d7c12a96ae374dee173bb03e8b971d4c7e30363b1c9fe734987bfc = $this->env->getExtension("native_profiler");
        $__internal_d840bcc9d4d7c12a96ae374dee173bb03e8b971d4c7e30363b1c9fe734987bfc->enter($__internal_d840bcc9d4d7c12a96ae374dee173bb03e8b971d4c7e30363b1c9fe734987bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d840bcc9d4d7c12a96ae374dee173bb03e8b971d4c7e30363b1c9fe734987bfc->leave($__internal_d840bcc9d4d7c12a96ae374dee173bb03e8b971d4c7e30363b1c9fe734987bfc_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* {{ render(controller("FOSUserBundle:Security:LoginBis")) }}*/
/* {% block content %}*/
/* {% endblock %}*/
/* {% endblock %}*/
/* */

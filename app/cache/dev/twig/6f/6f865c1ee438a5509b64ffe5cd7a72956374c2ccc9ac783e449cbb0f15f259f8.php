<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_cdbbae9aa009ac43c8b4f2317fcf5a26d6561fb21a6da35324735539b619557f extends Twig_Template
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
        $__internal_b35f32355935271bd0835c97069e68628ec014784f30efe5b9bac0a2a3d5ed6e = $this->env->getExtension("native_profiler");
        $__internal_b35f32355935271bd0835c97069e68628ec014784f30efe5b9bac0a2a3d5ed6e->enter($__internal_b35f32355935271bd0835c97069e68628ec014784f30efe5b9bac0a2a3d5ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b35f32355935271bd0835c97069e68628ec014784f30efe5b9bac0a2a3d5ed6e->leave($__internal_b35f32355935271bd0835c97069e68628ec014784f30efe5b9bac0a2a3d5ed6e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b8fccad64a88888183f5462e88f1afe8c6ab67c9aeeb876d66583a9f1cfb9f1 = $this->env->getExtension("native_profiler");
        $__internal_4b8fccad64a88888183f5462e88f1afe8c6ab67c9aeeb876d66583a9f1cfb9f1->enter($__internal_4b8fccad64a88888183f5462e88f1afe8c6ab67c9aeeb876d66583a9f1cfb9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_4b8fccad64a88888183f5462e88f1afe8c6ab67c9aeeb876d66583a9f1cfb9f1->leave($__internal_4b8fccad64a88888183f5462e88f1afe8c6ab67c9aeeb876d66583a9f1cfb9f1_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_a2341f064b858a11ceacc82c8bb72d7d19c898ff6cae89e628c9c173c13b7fe0 = $this->env->getExtension("native_profiler");
        $__internal_a2341f064b858a11ceacc82c8bb72d7d19c898ff6cae89e628c9c173c13b7fe0->enter($__internal_a2341f064b858a11ceacc82c8bb72d7d19c898ff6cae89e628c9c173c13b7fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_a2341f064b858a11ceacc82c8bb72d7d19c898ff6cae89e628c9c173c13b7fe0->leave($__internal_a2341f064b858a11ceacc82c8bb72d7d19c898ff6cae89e628c9c173c13b7fe0_prof);

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

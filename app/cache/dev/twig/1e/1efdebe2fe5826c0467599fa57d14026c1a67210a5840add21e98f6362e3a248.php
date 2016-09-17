<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_d8e2ae8ddb0e8479cfd2e107450570f901dc601b57468ca728ca1354784251bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CoreBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d8d9d22834aa020c2a61ad0b0b38d72acc6b2f59f6631d3f52f67faccf5fad8 = $this->env->getExtension("native_profiler");
        $__internal_5d8d9d22834aa020c2a61ad0b0b38d72acc6b2f59f6631d3f52f67faccf5fad8->enter($__internal_5d8d9d22834aa020c2a61ad0b0b38d72acc6b2f59f6631d3f52f67faccf5fad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d8d9d22834aa020c2a61ad0b0b38d72acc6b2f59f6631d3f52f67faccf5fad8->leave($__internal_5d8d9d22834aa020c2a61ad0b0b38d72acc6b2f59f6631d3f52f67faccf5fad8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e6c56eccd10281911a7740bf83aa423a0912400139504b4a4cbc2088d000ceb = $this->env->getExtension("native_profiler");
        $__internal_2e6c56eccd10281911a7740bf83aa423a0912400139504b4a4cbc2088d000ceb->enter($__internal_2e6c56eccd10281911a7740bf83aa423a0912400139504b4a4cbc2088d000ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        
        $__internal_2e6c56eccd10281911a7740bf83aa423a0912400139504b4a4cbc2088d000ceb->leave($__internal_2e6c56eccd10281911a7740bf83aa423a0912400139504b4a4cbc2088d000ceb_prof);

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
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body%}*/
/* {{ render(controller("FOSUserBundle:Security:LoginBis")) }}*/
/* {% endblock %}*/
/* */

<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_ad83781f9d4881a3f2060a5c95cdd4df9400ff1215b6d7119703441e294e85fe extends Twig_Template
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
        $__internal_c729ec1981a0a4ce3df042cacb2cb2ea1c97aaa08062137c1717e29ee4b723bf = $this->env->getExtension("native_profiler");
        $__internal_c729ec1981a0a4ce3df042cacb2cb2ea1c97aaa08062137c1717e29ee4b723bf->enter($__internal_c729ec1981a0a4ce3df042cacb2cb2ea1c97aaa08062137c1717e29ee4b723bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c729ec1981a0a4ce3df042cacb2cb2ea1c97aaa08062137c1717e29ee4b723bf->leave($__internal_c729ec1981a0a4ce3df042cacb2cb2ea1c97aaa08062137c1717e29ee4b723bf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_81a1941b5b6cf185e0d9206d9cfca3aa1a6487e09b5606dd59305be5b1096fb9 = $this->env->getExtension("native_profiler");
        $__internal_81a1941b5b6cf185e0d9206d9cfca3aa1a6487e09b5606dd59305be5b1096fb9->enter($__internal_81a1941b5b6cf185e0d9206d9cfca3aa1a6487e09b5606dd59305be5b1096fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:LoginBis"));
        echo "
";
        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_81a1941b5b6cf185e0d9206d9cfca3aa1a6487e09b5606dd59305be5b1096fb9->leave($__internal_81a1941b5b6cf185e0d9206d9cfca3aa1a6487e09b5606dd59305be5b1096fb9_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_5760b15de94c70b72af096dfe0ae6775f4f014b70366014a83acfc2593b0c8f1 = $this->env->getExtension("native_profiler");
        $__internal_5760b15de94c70b72af096dfe0ae6775f4f014b70366014a83acfc2593b0c8f1->enter($__internal_5760b15de94c70b72af096dfe0ae6775f4f014b70366014a83acfc2593b0c8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5760b15de94c70b72af096dfe0ae6775f4f014b70366014a83acfc2593b0c8f1->leave($__internal_5760b15de94c70b72af096dfe0ae6775f4f014b70366014a83acfc2593b0c8f1_prof);

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

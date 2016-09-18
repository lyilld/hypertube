<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_73ffc5d2c35400cacb73f3d6d1b3325ad3a2e108f27b17fa230fc1ddd0e14257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_630c543f09a9b3700a8dd0337d1736eb21c7cad7a8a93cc545ae5ca80efc6def = $this->env->getExtension("native_profiler");
        $__internal_630c543f09a9b3700a8dd0337d1736eb21c7cad7a8a93cc545ae5ca80efc6def->enter($__internal_630c543f09a9b3700a8dd0337d1736eb21c7cad7a8a93cc545ae5ca80efc6def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_630c543f09a9b3700a8dd0337d1736eb21c7cad7a8a93cc545ae5ca80efc6def->leave($__internal_630c543f09a9b3700a8dd0337d1736eb21c7cad7a8a93cc545ae5ca80efc6def_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c80df9289b190977436c8bc718ee95b2f433ecb8b5b3d7bca8f5da0eb18a9bd5 = $this->env->getExtension("native_profiler");
        $__internal_c80df9289b190977436c8bc718ee95b2f433ecb8b5b3d7bca8f5da0eb18a9bd5->enter($__internal_c80df9289b190977436c8bc718ee95b2f433ecb8b5b3d7bca8f5da0eb18a9bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c80df9289b190977436c8bc718ee95b2f433ecb8b5b3d7bca8f5da0eb18a9bd5->leave($__internal_c80df9289b190977436c8bc718ee95b2f433ecb8b5b3d7bca8f5da0eb18a9bd5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5baa1f35d4ba6a0b1af179a494453a96c8381cd2d0f4a5456198375affc9507f = $this->env->getExtension("native_profiler");
        $__internal_5baa1f35d4ba6a0b1af179a494453a96c8381cd2d0f4a5456198375affc9507f->enter($__internal_5baa1f35d4ba6a0b1af179a494453a96c8381cd2d0f4a5456198375affc9507f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5baa1f35d4ba6a0b1af179a494453a96c8381cd2d0f4a5456198375affc9507f->leave($__internal_5baa1f35d4ba6a0b1af179a494453a96c8381cd2d0f4a5456198375affc9507f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b24315165f5cedf6110cdcba758956da9c4e15815908a46bbe47ebc56c17fcc = $this->env->getExtension("native_profiler");
        $__internal_4b24315165f5cedf6110cdcba758956da9c4e15815908a46bbe47ebc56c17fcc->enter($__internal_4b24315165f5cedf6110cdcba758956da9c4e15815908a46bbe47ebc56c17fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4b24315165f5cedf6110cdcba758956da9c4e15815908a46bbe47ebc56c17fcc->leave($__internal_4b24315165f5cedf6110cdcba758956da9c4e15815908a46bbe47ebc56c17fcc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

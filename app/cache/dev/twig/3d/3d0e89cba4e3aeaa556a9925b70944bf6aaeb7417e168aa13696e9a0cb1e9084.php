<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5224f3ccd1086c3325d06eba9b5e3c9199fa5ec298481fb74ece6dfbf1c3fb6f extends Twig_Template
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
        $__internal_ffa36b813183cb794abc03f5d56dc65fb431d5267cbe723560738f123e1d9ec5 = $this->env->getExtension("native_profiler");
        $__internal_ffa36b813183cb794abc03f5d56dc65fb431d5267cbe723560738f123e1d9ec5->enter($__internal_ffa36b813183cb794abc03f5d56dc65fb431d5267cbe723560738f123e1d9ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa36b813183cb794abc03f5d56dc65fb431d5267cbe723560738f123e1d9ec5->leave($__internal_ffa36b813183cb794abc03f5d56dc65fb431d5267cbe723560738f123e1d9ec5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b653cb1b240024ad290a74e12488b8fb2b9c147dd773d4bbaef8fb52080e6314 = $this->env->getExtension("native_profiler");
        $__internal_b653cb1b240024ad290a74e12488b8fb2b9c147dd773d4bbaef8fb52080e6314->enter($__internal_b653cb1b240024ad290a74e12488b8fb2b9c147dd773d4bbaef8fb52080e6314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b653cb1b240024ad290a74e12488b8fb2b9c147dd773d4bbaef8fb52080e6314->leave($__internal_b653cb1b240024ad290a74e12488b8fb2b9c147dd773d4bbaef8fb52080e6314_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f0994e977d1e4e47e99f4f20a422fbd1062e2c50f264ada88915bd4396fbda2 = $this->env->getExtension("native_profiler");
        $__internal_5f0994e977d1e4e47e99f4f20a422fbd1062e2c50f264ada88915bd4396fbda2->enter($__internal_5f0994e977d1e4e47e99f4f20a422fbd1062e2c50f264ada88915bd4396fbda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f0994e977d1e4e47e99f4f20a422fbd1062e2c50f264ada88915bd4396fbda2->leave($__internal_5f0994e977d1e4e47e99f4f20a422fbd1062e2c50f264ada88915bd4396fbda2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_94bef80a10b528f71d0ef7cb67c9a25392d63cecbb1f09b12b31003ee885d591 = $this->env->getExtension("native_profiler");
        $__internal_94bef80a10b528f71d0ef7cb67c9a25392d63cecbb1f09b12b31003ee885d591->enter($__internal_94bef80a10b528f71d0ef7cb67c9a25392d63cecbb1f09b12b31003ee885d591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_94bef80a10b528f71d0ef7cb67c9a25392d63cecbb1f09b12b31003ee885d591->leave($__internal_94bef80a10b528f71d0ef7cb67c9a25392d63cecbb1f09b12b31003ee885d591_prof);

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

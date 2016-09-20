<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_73ffc5d2c35400cacb73f3d6d1b3325ad3a2e108f27b17fa230fc1ddd0e14257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2a61cf1d140ed151a14d8fe0269052e0e04782d7c05b261e035246eb910e9438 = $this->env->getExtension("native_profiler");
        $__internal_2a61cf1d140ed151a14d8fe0269052e0e04782d7c05b261e035246eb910e9438->enter($__internal_2a61cf1d140ed151a14d8fe0269052e0e04782d7c05b261e035246eb910e9438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a61cf1d140ed151a14d8fe0269052e0e04782d7c05b261e035246eb910e9438->leave($__internal_2a61cf1d140ed151a14d8fe0269052e0e04782d7c05b261e035246eb910e9438_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_652800e92e63c97e9b39828613394a14c377cffd09cd9724b776940fe9aa36d5 = $this->env->getExtension("native_profiler");
        $__internal_652800e92e63c97e9b39828613394a14c377cffd09cd9724b776940fe9aa36d5->enter($__internal_652800e92e63c97e9b39828613394a14c377cffd09cd9724b776940fe9aa36d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_652800e92e63c97e9b39828613394a14c377cffd09cd9724b776940fe9aa36d5->leave($__internal_652800e92e63c97e9b39828613394a14c377cffd09cd9724b776940fe9aa36d5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e4dcc674b16e0cbb5613f865f04b22dc8ed625994d85ec1314eb2113ea18f6a = $this->env->getExtension("native_profiler");
        $__internal_9e4dcc674b16e0cbb5613f865f04b22dc8ed625994d85ec1314eb2113ea18f6a->enter($__internal_9e4dcc674b16e0cbb5613f865f04b22dc8ed625994d85ec1314eb2113ea18f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e4dcc674b16e0cbb5613f865f04b22dc8ed625994d85ec1314eb2113ea18f6a->leave($__internal_9e4dcc674b16e0cbb5613f865f04b22dc8ed625994d85ec1314eb2113ea18f6a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de75f91603e920ca3ac1c806ec56b66f779a2e32bb278ed2edbb93d6314a204b = $this->env->getExtension("native_profiler");
        $__internal_de75f91603e920ca3ac1c806ec56b66f779a2e32bb278ed2edbb93d6314a204b->enter($__internal_de75f91603e920ca3ac1c806ec56b66f779a2e32bb278ed2edbb93d6314a204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_de75f91603e920ca3ac1c806ec56b66f779a2e32bb278ed2edbb93d6314a204b->leave($__internal_de75f91603e920ca3ac1c806ec56b66f779a2e32bb278ed2edbb93d6314a204b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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

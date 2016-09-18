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
        $__internal_70400520e7fdf1d2336462822fc9e69a1efdcb678bfec89fc3047f11642b7a40 = $this->env->getExtension("native_profiler");
        $__internal_70400520e7fdf1d2336462822fc9e69a1efdcb678bfec89fc3047f11642b7a40->enter($__internal_70400520e7fdf1d2336462822fc9e69a1efdcb678bfec89fc3047f11642b7a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70400520e7fdf1d2336462822fc9e69a1efdcb678bfec89fc3047f11642b7a40->leave($__internal_70400520e7fdf1d2336462822fc9e69a1efdcb678bfec89fc3047f11642b7a40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e2b934e32d31993d6dcff086cf620469fb20c7cff7ebfaedf29357694d58369 = $this->env->getExtension("native_profiler");
        $__internal_6e2b934e32d31993d6dcff086cf620469fb20c7cff7ebfaedf29357694d58369->enter($__internal_6e2b934e32d31993d6dcff086cf620469fb20c7cff7ebfaedf29357694d58369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e2b934e32d31993d6dcff086cf620469fb20c7cff7ebfaedf29357694d58369->leave($__internal_6e2b934e32d31993d6dcff086cf620469fb20c7cff7ebfaedf29357694d58369_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d19ed60b708283f4d66d71fca0e40a778871680466e8d9e74b6fe54d21b4ca0 = $this->env->getExtension("native_profiler");
        $__internal_5d19ed60b708283f4d66d71fca0e40a778871680466e8d9e74b6fe54d21b4ca0->enter($__internal_5d19ed60b708283f4d66d71fca0e40a778871680466e8d9e74b6fe54d21b4ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d19ed60b708283f4d66d71fca0e40a778871680466e8d9e74b6fe54d21b4ca0->leave($__internal_5d19ed60b708283f4d66d71fca0e40a778871680466e8d9e74b6fe54d21b4ca0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_57dabaa72d2bbda83d1f67cd07517d2f7f1466504fe68be3ccc428e493dc60cd = $this->env->getExtension("native_profiler");
        $__internal_57dabaa72d2bbda83d1f67cd07517d2f7f1466504fe68be3ccc428e493dc60cd->enter($__internal_57dabaa72d2bbda83d1f67cd07517d2f7f1466504fe68be3ccc428e493dc60cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_57dabaa72d2bbda83d1f67cd07517d2f7f1466504fe68be3ccc428e493dc60cd->leave($__internal_57dabaa72d2bbda83d1f67cd07517d2f7f1466504fe68be3ccc428e493dc60cd_prof);

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

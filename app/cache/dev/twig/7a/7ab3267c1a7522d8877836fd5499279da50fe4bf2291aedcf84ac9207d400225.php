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
        $__internal_946523f52b9c6c3d86c911f861603b37acd4bbd64b469efe7b1065398e62e81a = $this->env->getExtension("native_profiler");
        $__internal_946523f52b9c6c3d86c911f861603b37acd4bbd64b469efe7b1065398e62e81a->enter($__internal_946523f52b9c6c3d86c911f861603b37acd4bbd64b469efe7b1065398e62e81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_946523f52b9c6c3d86c911f861603b37acd4bbd64b469efe7b1065398e62e81a->leave($__internal_946523f52b9c6c3d86c911f861603b37acd4bbd64b469efe7b1065398e62e81a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e42cce6917eb73be669890cc1d624420f1508b41c9c80fac96165c6897c90a38 = $this->env->getExtension("native_profiler");
        $__internal_e42cce6917eb73be669890cc1d624420f1508b41c9c80fac96165c6897c90a38->enter($__internal_e42cce6917eb73be669890cc1d624420f1508b41c9c80fac96165c6897c90a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_e42cce6917eb73be669890cc1d624420f1508b41c9c80fac96165c6897c90a38->leave($__internal_e42cce6917eb73be669890cc1d624420f1508b41c9c80fac96165c6897c90a38_prof);

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

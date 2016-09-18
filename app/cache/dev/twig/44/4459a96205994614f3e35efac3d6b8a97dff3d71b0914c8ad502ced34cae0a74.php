<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e5388068fd5ba7f51abda00a5f890116c659199f440e09cc2dd24295519ab92f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_1b6cf2034896e504f17669c2b5388a44fe608ce523f01b40da9fa86548ce19d9 = $this->env->getExtension("native_profiler");
        $__internal_1b6cf2034896e504f17669c2b5388a44fe608ce523f01b40da9fa86548ce19d9->enter($__internal_1b6cf2034896e504f17669c2b5388a44fe608ce523f01b40da9fa86548ce19d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6cf2034896e504f17669c2b5388a44fe608ce523f01b40da9fa86548ce19d9->leave($__internal_1b6cf2034896e504f17669c2b5388a44fe608ce523f01b40da9fa86548ce19d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a469d7a6c46b389994820402e86870fd5f79b4d947f99ec87e4082deda1cfed0 = $this->env->getExtension("native_profiler");
        $__internal_a469d7a6c46b389994820402e86870fd5f79b4d947f99ec87e4082deda1cfed0->enter($__internal_a469d7a6c46b389994820402e86870fd5f79b4d947f99ec87e4082deda1cfed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a469d7a6c46b389994820402e86870fd5f79b4d947f99ec87e4082deda1cfed0->leave($__internal_a469d7a6c46b389994820402e86870fd5f79b4d947f99ec87e4082deda1cfed0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

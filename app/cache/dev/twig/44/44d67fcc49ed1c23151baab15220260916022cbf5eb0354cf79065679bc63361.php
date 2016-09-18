<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_ae17924c679ad441f0a03ddb21c4faa0d50657a6f78281752c200a8ae973e6b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ff0296f62dbc06901b4dfebcd3d39cde7191acb042d39f08ec4f645860fab90 = $this->env->getExtension("native_profiler");
        $__internal_4ff0296f62dbc06901b4dfebcd3d39cde7191acb042d39f08ec4f645860fab90->enter($__internal_4ff0296f62dbc06901b4dfebcd3d39cde7191acb042d39f08ec4f645860fab90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4ff0296f62dbc06901b4dfebcd3d39cde7191acb042d39f08ec4f645860fab90->leave($__internal_4ff0296f62dbc06901b4dfebcd3d39cde7191acb042d39f08ec4f645860fab90_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acea5039ae9a42f82ee2da1c68cefdbbcc852fb940fa52a8cfa55f972d1056f5 = $this->env->getExtension("native_profiler");
        $__internal_acea5039ae9a42f82ee2da1c68cefdbbcc852fb940fa52a8cfa55f972d1056f5->enter($__internal_acea5039ae9a42f82ee2da1c68cefdbbcc852fb940fa52a8cfa55f972d1056f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 2)->display($context);
        
        $__internal_acea5039ae9a42f82ee2da1c68cefdbbcc852fb940fa52a8cfa55f972d1056f5->leave($__internal_acea5039ae9a42f82ee2da1c68cefdbbcc852fb940fa52a8cfa55f972d1056f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_13685b48ce1df0b0b28376cc8e52846fccef6bce5c65ddad1e6b7ac93c06f2ba extends Twig_Template
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
        $__internal_917d53124ff694c6cbf5b0f5996d84ea04ec4328241ca47190590bf52804e055 = $this->env->getExtension("native_profiler");
        $__internal_917d53124ff694c6cbf5b0f5996d84ea04ec4328241ca47190590bf52804e055->enter($__internal_917d53124ff694c6cbf5b0f5996d84ea04ec4328241ca47190590bf52804e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_917d53124ff694c6cbf5b0f5996d84ea04ec4328241ca47190590bf52804e055->leave($__internal_917d53124ff694c6cbf5b0f5996d84ea04ec4328241ca47190590bf52804e055_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_165760f245a915dd6eeda7d59eee4cc800cd677c9fe1425e3bcc061909ce2966 = $this->env->getExtension("native_profiler");
        $__internal_165760f245a915dd6eeda7d59eee4cc800cd677c9fe1425e3bcc061909ce2966->enter($__internal_165760f245a915dd6eeda7d59eee4cc800cd677c9fe1425e3bcc061909ce2966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 2)->display($context);
        
        $__internal_165760f245a915dd6eeda7d59eee4cc800cd677c9fe1425e3bcc061909ce2966->leave($__internal_165760f245a915dd6eeda7d59eee4cc800cd677c9fe1425e3bcc061909ce2966_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

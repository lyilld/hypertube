<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_45f254663e7d6ddb591424cd31a40db7d779dfcf8c49925f76274833ece21b75 extends Twig_Template
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
        $__internal_a393012769a8b85fd3033b845970c4777de343e386d4e87adf540faac5f50e04 = $this->env->getExtension("native_profiler");
        $__internal_a393012769a8b85fd3033b845970c4777de343e386d4e87adf540faac5f50e04->enter($__internal_a393012769a8b85fd3033b845970c4777de343e386d4e87adf540faac5f50e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_a393012769a8b85fd3033b845970c4777de343e386d4e87adf540faac5f50e04->leave($__internal_a393012769a8b85fd3033b845970c4777de343e386d4e87adf540faac5f50e04_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_76089650a791783ccd648c18872fe92ac4155130eeacd21f241fc8e863730617 = $this->env->getExtension("native_profiler");
        $__internal_76089650a791783ccd648c18872fe92ac4155130eeacd21f241fc8e863730617->enter($__internal_76089650a791783ccd648c18872fe92ac4155130eeacd21f241fc8e863730617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_76089650a791783ccd648c18872fe92ac4155130eeacd21f241fc8e863730617->leave($__internal_76089650a791783ccd648c18872fe92ac4155130eeacd21f241fc8e863730617_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

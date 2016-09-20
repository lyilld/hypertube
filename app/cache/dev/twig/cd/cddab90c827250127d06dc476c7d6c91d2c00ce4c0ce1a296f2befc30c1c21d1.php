<?php

/* DiviAjaxLoginBundle:Javascript:successaction.js.twig */
class __TwigTemplate_67ce76c6b06ff64fa7271a1c563e6c969abb2e46b304cb241c146952f331cc78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_355d406e2181cdd8b80f5bf91a4a5a23173b968f807a64a782526cc386123087 = $this->env->getExtension("native_profiler");
        $__internal_355d406e2181cdd8b80f5bf91a4a5a23173b968f807a64a782526cc386123087->enter($__internal_355d406e2181cdd8b80f5bf91a4a5a23173b968f807a64a782526cc386123087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Javascript:successaction.js.twig"));

        // line 1
        echo "alert('Welcome ' + data.username + ' !');
window.location = data.target_path;
";
        
        $__internal_355d406e2181cdd8b80f5bf91a4a5a23173b968f807a64a782526cc386123087->leave($__internal_355d406e2181cdd8b80f5bf91a4a5a23173b968f807a64a782526cc386123087_prof);

    }

    public function getTemplateName()
    {
        return "DiviAjaxLoginBundle:Javascript:successaction.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* alert('Welcome ' + data.username + ' !');*/
/* window.location = data.target_path;*/
/* */

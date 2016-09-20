<?php

/* DiviAjaxLoginBundle:Javascript:successaction.js.twig */
class __TwigTemplate_2b58529ce2048a0a144815eeec6163d998d8b641b5acfe38216ac3cf6236e635 extends Twig_Template
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
        $__internal_578ea4f02b52ea7a566d1bca69fe4e020c49885de694a70dea3ff4f5c6557ba2 = $this->env->getExtension("native_profiler");
        $__internal_578ea4f02b52ea7a566d1bca69fe4e020c49885de694a70dea3ff4f5c6557ba2->enter($__internal_578ea4f02b52ea7a566d1bca69fe4e020c49885de694a70dea3ff4f5c6557ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Javascript:successaction.js.twig"));

        // line 1
        echo "alert('Welcome ' + data.username + ' !');
window.location = data.target_path;
";
        
        $__internal_578ea4f02b52ea7a566d1bca69fe4e020c49885de694a70dea3ff4f5c6557ba2->leave($__internal_578ea4f02b52ea7a566d1bca69fe4e020c49885de694a70dea3ff4f5c6557ba2_prof);

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

<?php

/* DiviAjaxLoginBundle:Javascript:successaction.js.twig */
class __TwigTemplate_c0990b94623f129c9aceebcbbb771de6a6027462888eba2c76b34cee0884f86e extends Twig_Template
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
        // line 1
        echo "
window.location = data.target_path;
";
    }

    public function getTemplateName()
    {
        return "DiviAjaxLoginBundle:Javascript:successaction.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* window.location = data.target_path;*/
/* */

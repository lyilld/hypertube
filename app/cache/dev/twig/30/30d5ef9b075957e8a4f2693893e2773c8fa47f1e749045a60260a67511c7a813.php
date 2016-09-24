<?php

/* DiviAjaxLoginBundle:Javascript:successaction.js.twig */
class __TwigTemplate_19c0327587a73eb93072c88bab0d19b56076109dc47128d152726a7218081344 extends Twig_Template
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
        $__internal_6c5d553abadc77ec4a3174d69b42ca5bd319baf92375794971dc4bc2aaeccbfa = $this->env->getExtension("native_profiler");
        $__internal_6c5d553abadc77ec4a3174d69b42ca5bd319baf92375794971dc4bc2aaeccbfa->enter($__internal_6c5d553abadc77ec4a3174d69b42ca5bd319baf92375794971dc4bc2aaeccbfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Javascript:successaction.js.twig"));

        // line 1
        echo "alert('Welcome ' + data.username + ' !');
window.location = data.target_path;
";
        
        $__internal_6c5d553abadc77ec4a3174d69b42ca5bd319baf92375794971dc4bc2aaeccbfa->leave($__internal_6c5d553abadc77ec4a3174d69b42ca5bd319baf92375794971dc4bc2aaeccbfa_prof);

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

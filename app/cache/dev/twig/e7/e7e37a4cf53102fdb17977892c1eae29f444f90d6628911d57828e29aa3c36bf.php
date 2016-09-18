<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7707ca498ca2268e0c71dc678afed6a759555f159b3ae6724a9c7b3e4edf2ea4 extends Twig_Template
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
        $__internal_7c35847a27b5b09652ca0ac6d5ff1baae4bee8b26d1451d7362c592b6ef1ab79 = $this->env->getExtension("native_profiler");
        $__internal_7c35847a27b5b09652ca0ac6d5ff1baae4bee8b26d1451d7362c592b6ef1ab79->enter($__internal_7c35847a27b5b09652ca0ac6d5ff1baae4bee8b26d1451d7362c592b6ef1ab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7c35847a27b5b09652ca0ac6d5ff1baae4bee8b26d1451d7362c592b6ef1ab79->leave($__internal_7c35847a27b5b09652ca0ac6d5ff1baae4bee8b26d1451d7362c592b6ef1ab79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

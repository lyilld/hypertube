<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_094a9e7a9fa1eb0fab7263c9c470782cd487fd21f6ce32524f915d182df70a4f extends Twig_Template
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
        $__internal_bccfd3e08d9743efa59981984c0af26aa1de77a6ec6f3a1c21d3a246b578ec0b = $this->env->getExtension("native_profiler");
        $__internal_bccfd3e08d9743efa59981984c0af26aa1de77a6ec6f3a1c21d3a246b578ec0b->enter($__internal_bccfd3e08d9743efa59981984c0af26aa1de77a6ec6f3a1c21d3a246b578ec0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bccfd3e08d9743efa59981984c0af26aa1de77a6ec6f3a1c21d3a246b578ec0b->leave($__internal_bccfd3e08d9743efa59981984c0af26aa1de77a6ec6f3a1c21d3a246b578ec0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

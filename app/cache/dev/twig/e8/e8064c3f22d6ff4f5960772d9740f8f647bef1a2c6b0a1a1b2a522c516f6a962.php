<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_11f0261953ae7161be3eada64487ee55aa91a3ff0a5d54eb2e8fa7e764c30acd extends Twig_Template
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
        $__internal_30de52602fd28a3aa8ba837ea1aed468a9fea3aaf0dd508274262066c382ccac = $this->env->getExtension("native_profiler");
        $__internal_30de52602fd28a3aa8ba837ea1aed468a9fea3aaf0dd508274262066c382ccac->enter($__internal_30de52602fd28a3aa8ba837ea1aed468a9fea3aaf0dd508274262066c382ccac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_30de52602fd28a3aa8ba837ea1aed468a9fea3aaf0dd508274262066c382ccac->leave($__internal_30de52602fd28a3aa8ba837ea1aed468a9fea3aaf0dd508274262066c382ccac_prof);

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

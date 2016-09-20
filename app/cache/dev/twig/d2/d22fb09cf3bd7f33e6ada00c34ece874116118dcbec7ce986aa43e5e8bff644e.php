<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_abec532866ad9c53f0882a7191bc941c47c9467487e770e7638abea5f4e920b9 extends Twig_Template
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
        $__internal_4252570cbd20427baded143f201a71d6b9d6d61c552b00d12dc8b6d993487521 = $this->env->getExtension("native_profiler");
        $__internal_4252570cbd20427baded143f201a71d6b9d6d61c552b00d12dc8b6d993487521->enter($__internal_4252570cbd20427baded143f201a71d6b9d6d61c552b00d12dc8b6d993487521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4252570cbd20427baded143f201a71d6b9d6d61c552b00d12dc8b6d993487521->leave($__internal_4252570cbd20427baded143f201a71d6b9d6d61c552b00d12dc8b6d993487521_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

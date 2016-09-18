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
        $__internal_68265a04f5c5f603246a7a00a7a5974baf1741f9b06ab5a6d244e0e6671270d5 = $this->env->getExtension("native_profiler");
        $__internal_68265a04f5c5f603246a7a00a7a5974baf1741f9b06ab5a6d244e0e6671270d5->enter($__internal_68265a04f5c5f603246a7a00a7a5974baf1741f9b06ab5a6d244e0e6671270d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_68265a04f5c5f603246a7a00a7a5974baf1741f9b06ab5a6d244e0e6671270d5->leave($__internal_68265a04f5c5f603246a7a00a7a5974baf1741f9b06ab5a6d244e0e6671270d5_prof);

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

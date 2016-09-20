<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_935bd0352fccd36cb089c5d5e39199850d52391d5d658380b3981c034dd9e645 extends Twig_Template
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
        $__internal_9fcd7e644db0197fd0d2e8350f32fb75f11b0d6dfd1e117fa7fbdfbb88b2e6ae = $this->env->getExtension("native_profiler");
        $__internal_9fcd7e644db0197fd0d2e8350f32fb75f11b0d6dfd1e117fa7fbdfbb88b2e6ae->enter($__internal_9fcd7e644db0197fd0d2e8350f32fb75f11b0d6dfd1e117fa7fbdfbb88b2e6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_9fcd7e644db0197fd0d2e8350f32fb75f11b0d6dfd1e117fa7fbdfbb88b2e6ae->leave($__internal_9fcd7e644db0197fd0d2e8350f32fb75f11b0d6dfd1e117fa7fbdfbb88b2e6ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

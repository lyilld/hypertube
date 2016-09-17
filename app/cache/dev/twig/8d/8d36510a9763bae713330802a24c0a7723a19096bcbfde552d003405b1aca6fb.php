<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_267bf2a37fedd2e0305be9ca8f946e25119d52559945931e774507f06d549be2 extends Twig_Template
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
        $__internal_6d20c974516f9c783b3f94a914831bea2114f37abcfea7ae8a34c85626637e13 = $this->env->getExtension("native_profiler");
        $__internal_6d20c974516f9c783b3f94a914831bea2114f37abcfea7ae8a34c85626637e13->enter($__internal_6d20c974516f9c783b3f94a914831bea2114f37abcfea7ae8a34c85626637e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6d20c974516f9c783b3f94a914831bea2114f37abcfea7ae8a34c85626637e13->leave($__internal_6d20c974516f9c783b3f94a914831bea2114f37abcfea7ae8a34c85626637e13_prof);

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

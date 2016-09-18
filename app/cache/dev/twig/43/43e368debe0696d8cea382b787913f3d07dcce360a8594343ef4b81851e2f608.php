<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7555394333abe56621cc220f1dd6be21273285ea535be103212bb279fe387d36 extends Twig_Template
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
        $__internal_15431bb38bdf1d76b51f1056adc0923f808e683605e94bf5dbe91fc32e8e5d81 = $this->env->getExtension("native_profiler");
        $__internal_15431bb38bdf1d76b51f1056adc0923f808e683605e94bf5dbe91fc32e8e5d81->enter($__internal_15431bb38bdf1d76b51f1056adc0923f808e683605e94bf5dbe91fc32e8e5d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_15431bb38bdf1d76b51f1056adc0923f808e683605e94bf5dbe91fc32e8e5d81->leave($__internal_15431bb38bdf1d76b51f1056adc0923f808e683605e94bf5dbe91fc32e8e5d81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

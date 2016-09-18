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
        $__internal_91bb0ba74bb7ed00ca8b294673fbef7d21c13e8edbe8a9c09b7e4f8a5c2253be = $this->env->getExtension("native_profiler");
        $__internal_91bb0ba74bb7ed00ca8b294673fbef7d21c13e8edbe8a9c09b7e4f8a5c2253be->enter($__internal_91bb0ba74bb7ed00ca8b294673fbef7d21c13e8edbe8a9c09b7e4f8a5c2253be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_91bb0ba74bb7ed00ca8b294673fbef7d21c13e8edbe8a9c09b7e4f8a5c2253be->leave($__internal_91bb0ba74bb7ed00ca8b294673fbef7d21c13e8edbe8a9c09b7e4f8a5c2253be_prof);

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

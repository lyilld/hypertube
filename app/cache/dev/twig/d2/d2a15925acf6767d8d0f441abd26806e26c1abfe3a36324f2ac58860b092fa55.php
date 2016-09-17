<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_c6cae3849ec942b8940b086be862407317c13082952c71159c2ec9a14ec20194 extends Twig_Template
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
        $__internal_568be17bd4d0ea13141c931593ac6ad05dbdbf650ea7efc7c51585b0209ff973 = $this->env->getExtension("native_profiler");
        $__internal_568be17bd4d0ea13141c931593ac6ad05dbdbf650ea7efc7c51585b0209ff973->enter($__internal_568be17bd4d0ea13141c931593ac6ad05dbdbf650ea7efc7c51585b0209ff973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_568be17bd4d0ea13141c931593ac6ad05dbdbf650ea7efc7c51585b0209ff973->leave($__internal_568be17bd4d0ea13141c931593ac6ad05dbdbf650ea7efc7c51585b0209ff973_prof);

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

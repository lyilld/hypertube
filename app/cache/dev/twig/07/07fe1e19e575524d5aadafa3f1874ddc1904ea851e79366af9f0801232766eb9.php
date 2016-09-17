<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_db0c6c61d733a0d0c1f19f70a1a468aa8d51deb0b9b017c56c649ddd6cdf9043 extends Twig_Template
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
        $__internal_ecd14694ec2d0b37594cd475b7e74313bbb992d5d275ebaedced0c19e6c7e1e4 = $this->env->getExtension("native_profiler");
        $__internal_ecd14694ec2d0b37594cd475b7e74313bbb992d5d275ebaedced0c19e6c7e1e4->enter($__internal_ecd14694ec2d0b37594cd475b7e74313bbb992d5d275ebaedced0c19e6c7e1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_ecd14694ec2d0b37594cd475b7e74313bbb992d5d275ebaedced0c19e6c7e1e4->leave($__internal_ecd14694ec2d0b37594cd475b7e74313bbb992d5d275ebaedced0c19e6c7e1e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

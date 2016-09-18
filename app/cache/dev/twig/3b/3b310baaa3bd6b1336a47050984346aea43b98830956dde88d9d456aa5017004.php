<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a5cc3704bbde422454483aed20f3edd0affafd1f6bbe42a07081348bdd8a0d53 extends Twig_Template
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
        $__internal_33ae780b61cea174ef48bcc7602fb936ddf30643439412c205c5b09dd4499fed = $this->env->getExtension("native_profiler");
        $__internal_33ae780b61cea174ef48bcc7602fb936ddf30643439412c205c5b09dd4499fed->enter($__internal_33ae780b61cea174ef48bcc7602fb936ddf30643439412c205c5b09dd4499fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_33ae780b61cea174ef48bcc7602fb936ddf30643439412c205c5b09dd4499fed->leave($__internal_33ae780b61cea174ef48bcc7602fb936ddf30643439412c205c5b09dd4499fed_prof);

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

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cff64be8df45673ba8d2fa3c5ee30128f375eadcd86d5f566c6f96079ae61988 extends Twig_Template
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
        $__internal_9c4869e5729c47a4b66d541229cd93ab005b444267255ca78915751f4382daf0 = $this->env->getExtension("native_profiler");
        $__internal_9c4869e5729c47a4b66d541229cd93ab005b444267255ca78915751f4382daf0->enter($__internal_9c4869e5729c47a4b66d541229cd93ab005b444267255ca78915751f4382daf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9c4869e5729c47a4b66d541229cd93ab005b444267255ca78915751f4382daf0->leave($__internal_9c4869e5729c47a4b66d541229cd93ab005b444267255ca78915751f4382daf0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

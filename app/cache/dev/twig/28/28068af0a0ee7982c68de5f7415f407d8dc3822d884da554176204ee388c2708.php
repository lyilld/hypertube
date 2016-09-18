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
        $__internal_0c19121281c0a68d73af643ca41de2220fe6db6a2c88ebd50ff9c73479390f4b = $this->env->getExtension("native_profiler");
        $__internal_0c19121281c0a68d73af643ca41de2220fe6db6a2c88ebd50ff9c73479390f4b->enter($__internal_0c19121281c0a68d73af643ca41de2220fe6db6a2c88ebd50ff9c73479390f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0c19121281c0a68d73af643ca41de2220fe6db6a2c88ebd50ff9c73479390f4b->leave($__internal_0c19121281c0a68d73af643ca41de2220fe6db6a2c88ebd50ff9c73479390f4b_prof);

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

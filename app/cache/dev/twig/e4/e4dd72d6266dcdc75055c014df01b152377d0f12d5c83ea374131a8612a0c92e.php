<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2d8ab3cc33d4e2f51833fefdf4e53a1e494e068d1dd1e0679e965e257973178b extends Twig_Template
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
        $__internal_721c32828401711c5563f36847d3e091cb66289cfd37ec30c648acb921618f88 = $this->env->getExtension("native_profiler");
        $__internal_721c32828401711c5563f36847d3e091cb66289cfd37ec30c648acb921618f88->enter($__internal_721c32828401711c5563f36847d3e091cb66289cfd37ec30c648acb921618f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_721c32828401711c5563f36847d3e091cb66289cfd37ec30c648acb921618f88->leave($__internal_721c32828401711c5563f36847d3e091cb66289cfd37ec30c648acb921618f88_prof);

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

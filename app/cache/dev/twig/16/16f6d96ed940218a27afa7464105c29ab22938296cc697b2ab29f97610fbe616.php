<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_933d4791ad4c7073005900e701d723276da637534dd40fad2d9e4f7a14ccddb5 extends Twig_Template
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
        $__internal_2db5c7604b629c197e3c1f165a8fdc4cba4a882920c3d77ff358c17527207e1e = $this->env->getExtension("native_profiler");
        $__internal_2db5c7604b629c197e3c1f165a8fdc4cba4a882920c3d77ff358c17527207e1e->enter($__internal_2db5c7604b629c197e3c1f165a8fdc4cba4a882920c3d77ff358c17527207e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2db5c7604b629c197e3c1f165a8fdc4cba4a882920c3d77ff358c17527207e1e->leave($__internal_2db5c7604b629c197e3c1f165a8fdc4cba4a882920c3d77ff358c17527207e1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

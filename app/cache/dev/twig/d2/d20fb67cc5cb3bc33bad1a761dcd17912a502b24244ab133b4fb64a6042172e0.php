<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_0104f135bc15c33b37456994b50d393b73bfc9a404150cf1c9b2aee7220d7698 extends Twig_Template
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
        $__internal_fa8e6db10b6320db97a1bd13165778a60387a1bbf374d0b35b6e8400462b27ce = $this->env->getExtension("native_profiler");
        $__internal_fa8e6db10b6320db97a1bd13165778a60387a1bbf374d0b35b6e8400462b27ce->enter($__internal_fa8e6db10b6320db97a1bd13165778a60387a1bbf374d0b35b6e8400462b27ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_fa8e6db10b6320db97a1bd13165778a60387a1bbf374d0b35b6e8400462b27ce->leave($__internal_fa8e6db10b6320db97a1bd13165778a60387a1bbf374d0b35b6e8400462b27ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <?php $vars = $widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php*/
/*             // There should be no spaces between the colons and the widgets, that's why*/
/*             // this block is written in a single PHP tag*/
/*             echo $view['form']->widget($form['hour'], $vars);*/
/* */
/*             if ($with_minutes) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['minute'], $vars);*/
/*             }*/
/* */
/*             if ($with_seconds) {*/
/*                 echo ':';*/
/*                 echo $view['form']->widget($form['second'], $vars);*/
/*             }*/
/*         ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

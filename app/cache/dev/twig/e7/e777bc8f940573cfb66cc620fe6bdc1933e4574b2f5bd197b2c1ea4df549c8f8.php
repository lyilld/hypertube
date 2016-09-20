<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4116109545f633e758f5b0708647d6c942fb4e46a18203379d2af685af25d3f8 extends Twig_Template
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
        $__internal_2569bab51137d44cef7f7c40948c48c5204c0b9d0dfc8b60044ff616a187b1b7 = $this->env->getExtension("native_profiler");
        $__internal_2569bab51137d44cef7f7c40948c48c5204c0b9d0dfc8b60044ff616a187b1b7->enter($__internal_2569bab51137d44cef7f7c40948c48c5204c0b9d0dfc8b60044ff616a187b1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2569bab51137d44cef7f7c40948c48c5204c0b9d0dfc8b60044ff616a187b1b7->leave($__internal_2569bab51137d44cef7f7c40948c48c5204c0b9d0dfc8b60044ff616a187b1b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

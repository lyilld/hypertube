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
        $__internal_1d709ddffc72887baee36f0c75f30361a843ed3993e6c5c72cf90cae5be7a14d = $this->env->getExtension("native_profiler");
        $__internal_1d709ddffc72887baee36f0c75f30361a843ed3993e6c5c72cf90cae5be7a14d->enter($__internal_1d709ddffc72887baee36f0c75f30361a843ed3993e6c5c72cf90cae5be7a14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1d709ddffc72887baee36f0c75f30361a843ed3993e6c5c72cf90cae5be7a14d->leave($__internal_1d709ddffc72887baee36f0c75f30361a843ed3993e6c5c72cf90cae5be7a14d_prof);

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

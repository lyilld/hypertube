<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_08abedbf559a1348ec1a044a006e1f4cf62c85e649c7ab3a96951c4b5ddd1698 extends Twig_Template
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
        $__internal_318cd10a67a9bf12e0df947420037a63e9ae66f764e3bb9a2287fbe37cfb69bc = $this->env->getExtension("native_profiler");
        $__internal_318cd10a67a9bf12e0df947420037a63e9ae66f764e3bb9a2287fbe37cfb69bc->enter($__internal_318cd10a67a9bf12e0df947420037a63e9ae66f764e3bb9a2287fbe37cfb69bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_318cd10a67a9bf12e0df947420037a63e9ae66f764e3bb9a2287fbe37cfb69bc->leave($__internal_318cd10a67a9bf12e0df947420037a63e9ae66f764e3bb9a2287fbe37cfb69bc_prof);

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

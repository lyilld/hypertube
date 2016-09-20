<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d6f0d988c575d6a3119ac74e448c9cfdcc966688abe0d55cfb036e6ae01406f8 extends Twig_Template
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
        $__internal_2a5eb60dd77b11f4a9a67b1c29382010cb89ba4a12d1778e2ea255540ff32066 = $this->env->getExtension("native_profiler");
        $__internal_2a5eb60dd77b11f4a9a67b1c29382010cb89ba4a12d1778e2ea255540ff32066->enter($__internal_2a5eb60dd77b11f4a9a67b1c29382010cb89ba4a12d1778e2ea255540ff32066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2a5eb60dd77b11f4a9a67b1c29382010cb89ba4a12d1778e2ea255540ff32066->leave($__internal_2a5eb60dd77b11f4a9a67b1c29382010cb89ba4a12d1778e2ea255540ff32066_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_c0e0b75c7134f33eb3f664a04bef55920097a312b82f74b5e62ea7e43d5ca69b extends Twig_Template
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
        $__internal_9ee822a8f3bed841d7f7501d119b8a357c8269537dc95ba7b18d257f7e10c778 = $this->env->getExtension("native_profiler");
        $__internal_9ee822a8f3bed841d7f7501d119b8a357c8269537dc95ba7b18d257f7e10c778->enter($__internal_9ee822a8f3bed841d7f7501d119b8a357c8269537dc95ba7b18d257f7e10c778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9ee822a8f3bed841d7f7501d119b8a357c8269537dc95ba7b18d257f7e10c778->leave($__internal_9ee822a8f3bed841d7f7501d119b8a357c8269537dc95ba7b18d257f7e10c778_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

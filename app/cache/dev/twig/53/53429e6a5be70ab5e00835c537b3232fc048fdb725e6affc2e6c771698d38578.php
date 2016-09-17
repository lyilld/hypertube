<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cc1259f2ab9f05462c42b6c1b7053dcd7253ef3485da30aa505eaa9d96dd8aca extends Twig_Template
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
        $__internal_f0292b8170c785161ca35315701f2cd37bd614888f4cb4c88b2be8f03b0c1394 = $this->env->getExtension("native_profiler");
        $__internal_f0292b8170c785161ca35315701f2cd37bd614888f4cb4c88b2be8f03b0c1394->enter($__internal_f0292b8170c785161ca35315701f2cd37bd614888f4cb4c88b2be8f03b0c1394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f0292b8170c785161ca35315701f2cd37bd614888f4cb4c88b2be8f03b0c1394->leave($__internal_f0292b8170c785161ca35315701f2cd37bd614888f4cb4c88b2be8f03b0c1394_prof);

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

<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3167745fc68a7e1e15837239edad4c81911914fad5775baff11fbb868a55a2b8 extends Twig_Template
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
        $__internal_8066ba635da007f22bf78d68869812ba4951ea32415c290c2110397751147eba = $this->env->getExtension("native_profiler");
        $__internal_8066ba635da007f22bf78d68869812ba4951ea32415c290c2110397751147eba->enter($__internal_8066ba635da007f22bf78d68869812ba4951ea32415c290c2110397751147eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8066ba635da007f22bf78d68869812ba4951ea32415c290c2110397751147eba->leave($__internal_8066ba635da007f22bf78d68869812ba4951ea32415c290c2110397751147eba_prof);

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

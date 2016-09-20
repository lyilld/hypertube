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
        $__internal_80c9c0d0230b18dd1a5af02d50243cfc650ed2624c9eec6f13ab70cde6e1b3e3 = $this->env->getExtension("native_profiler");
        $__internal_80c9c0d0230b18dd1a5af02d50243cfc650ed2624c9eec6f13ab70cde6e1b3e3->enter($__internal_80c9c0d0230b18dd1a5af02d50243cfc650ed2624c9eec6f13ab70cde6e1b3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_80c9c0d0230b18dd1a5af02d50243cfc650ed2624c9eec6f13ab70cde6e1b3e3->leave($__internal_80c9c0d0230b18dd1a5af02d50243cfc650ed2624c9eec6f13ab70cde6e1b3e3_prof);

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

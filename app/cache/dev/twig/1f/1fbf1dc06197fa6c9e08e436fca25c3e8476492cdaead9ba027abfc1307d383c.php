<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_266b1ca30d53ec1df6f4d79721c138effed76e5c665f30726c809fda4591c101 extends Twig_Template
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
        $__internal_ede355c8cdebea2d35f18b9bbb87c089b2fb3c1694f5364a2c5d7c61011e055d = $this->env->getExtension("native_profiler");
        $__internal_ede355c8cdebea2d35f18b9bbb87c089b2fb3c1694f5364a2c5d7c61011e055d->enter($__internal_ede355c8cdebea2d35f18b9bbb87c089b2fb3c1694f5364a2c5d7c61011e055d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ede355c8cdebea2d35f18b9bbb87c089b2fb3c1694f5364a2c5d7c61011e055d->leave($__internal_ede355c8cdebea2d35f18b9bbb87c089b2fb3c1694f5364a2c5d7c61011e055d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_360bd7c43c292ae4e9a792e576785454b7a1f821ed0866e4513f56e3f49d67c2 extends Twig_Template
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
        $__internal_6f81609d5e4346ba786953d86fe027cf3643b4c3b631a8f5f33f902dcf710322 = $this->env->getExtension("native_profiler");
        $__internal_6f81609d5e4346ba786953d86fe027cf3643b4c3b631a8f5f33f902dcf710322->enter($__internal_6f81609d5e4346ba786953d86fe027cf3643b4c3b631a8f5f33f902dcf710322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6f81609d5e4346ba786953d86fe027cf3643b4c3b631a8f5f33f902dcf710322->leave($__internal_6f81609d5e4346ba786953d86fe027cf3643b4c3b631a8f5f33f902dcf710322_prof);

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

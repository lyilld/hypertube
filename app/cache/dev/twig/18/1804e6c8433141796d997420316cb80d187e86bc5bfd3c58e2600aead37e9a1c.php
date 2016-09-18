<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ae6e3357bc649e91d82540ac758378036784ddd158858ef8e459ae5dc6a99e84 extends Twig_Template
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
        $__internal_22a5bdceaf0193e9c7c5e91a1396cdb142d4036bcdca2d4ade6b76381c815bc0 = $this->env->getExtension("native_profiler");
        $__internal_22a5bdceaf0193e9c7c5e91a1396cdb142d4036bcdca2d4ade6b76381c815bc0->enter($__internal_22a5bdceaf0193e9c7c5e91a1396cdb142d4036bcdca2d4ade6b76381c815bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_22a5bdceaf0193e9c7c5e91a1396cdb142d4036bcdca2d4ade6b76381c815bc0->leave($__internal_22a5bdceaf0193e9c7c5e91a1396cdb142d4036bcdca2d4ade6b76381c815bc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

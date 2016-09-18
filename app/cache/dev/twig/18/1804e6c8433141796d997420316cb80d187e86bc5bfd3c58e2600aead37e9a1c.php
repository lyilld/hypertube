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
        $__internal_4f9d6631dec9ac58901e8f7aa704d20103c5d359b7ac795487eba1f49939ed9a = $this->env->getExtension("native_profiler");
        $__internal_4f9d6631dec9ac58901e8f7aa704d20103c5d359b7ac795487eba1f49939ed9a->enter($__internal_4f9d6631dec9ac58901e8f7aa704d20103c5d359b7ac795487eba1f49939ed9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4f9d6631dec9ac58901e8f7aa704d20103c5d359b7ac795487eba1f49939ed9a->leave($__internal_4f9d6631dec9ac58901e8f7aa704d20103c5d359b7ac795487eba1f49939ed9a_prof);

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

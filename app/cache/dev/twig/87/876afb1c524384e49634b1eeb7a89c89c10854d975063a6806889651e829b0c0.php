<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_06b21638c0bf5c246eb2e223c1eba62075a4d47a2a6259f1528a925288143a69 extends Twig_Template
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
        $__internal_ae8d262f53a5d7f9628c22e2add4dad689927a8afe0aeaed631f56d0d914a82d = $this->env->getExtension("native_profiler");
        $__internal_ae8d262f53a5d7f9628c22e2add4dad689927a8afe0aeaed631f56d0d914a82d->enter($__internal_ae8d262f53a5d7f9628c22e2add4dad689927a8afe0aeaed631f56d0d914a82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ae8d262f53a5d7f9628c22e2add4dad689927a8afe0aeaed631f56d0d914a82d->leave($__internal_ae8d262f53a5d7f9628c22e2add4dad689927a8afe0aeaed631f56d0d914a82d_prof);

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

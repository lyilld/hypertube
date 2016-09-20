<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9a83d11320d8e2aaa8f14fb9ac36dd9d154a5c23dedeb4c6365e6a3512fd1fff extends Twig_Template
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
        $__internal_074d035da3e2c05f1b91b2c6db03f1218d577c86e70c1400865efe793810aec8 = $this->env->getExtension("native_profiler");
        $__internal_074d035da3e2c05f1b91b2c6db03f1218d577c86e70c1400865efe793810aec8->enter($__internal_074d035da3e2c05f1b91b2c6db03f1218d577c86e70c1400865efe793810aec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_074d035da3e2c05f1b91b2c6db03f1218d577c86e70c1400865efe793810aec8->leave($__internal_074d035da3e2c05f1b91b2c6db03f1218d577c86e70c1400865efe793810aec8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

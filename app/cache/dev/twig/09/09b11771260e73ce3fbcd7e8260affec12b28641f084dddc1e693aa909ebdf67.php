<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_73d21850d47497b6152eea66d94a8c145a7c6c9b7493f802f55da0e51f132b0b extends Twig_Template
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
        $__internal_40a06fd27fbb6632c09f0be632449ab4889d71b73abdfda59a028a2c8ab2b13d = $this->env->getExtension("native_profiler");
        $__internal_40a06fd27fbb6632c09f0be632449ab4889d71b73abdfda59a028a2c8ab2b13d->enter($__internal_40a06fd27fbb6632c09f0be632449ab4889d71b73abdfda59a028a2c8ab2b13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_40a06fd27fbb6632c09f0be632449ab4889d71b73abdfda59a028a2c8ab2b13d->leave($__internal_40a06fd27fbb6632c09f0be632449ab4889d71b73abdfda59a028a2c8ab2b13d_prof);

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

<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f7bcc44f025532624837a7ff305c8493116928005a04508f78b5cc0df09f837b extends Twig_Template
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
        $__internal_787c4f41b57cd85c65006daa1ae1b0f6eea0ae3c5a74faba32dc0599c782ff5a = $this->env->getExtension("native_profiler");
        $__internal_787c4f41b57cd85c65006daa1ae1b0f6eea0ae3c5a74faba32dc0599c782ff5a->enter($__internal_787c4f41b57cd85c65006daa1ae1b0f6eea0ae3c5a74faba32dc0599c782ff5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_787c4f41b57cd85c65006daa1ae1b0f6eea0ae3c5a74faba32dc0599c782ff5a->leave($__internal_787c4f41b57cd85c65006daa1ae1b0f6eea0ae3c5a74faba32dc0599c782ff5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

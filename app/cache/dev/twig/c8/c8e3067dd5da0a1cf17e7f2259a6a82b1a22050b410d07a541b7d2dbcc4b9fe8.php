<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b926336c964b11a6cc06a6c23e77106a42a1c7bdb8268b0d50783264114a2727 extends Twig_Template
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
        $__internal_66fb4a1c74104788c94727fca1619a69ef7e6ceed684a207db09bfb0b747dc7b = $this->env->getExtension("native_profiler");
        $__internal_66fb4a1c74104788c94727fca1619a69ef7e6ceed684a207db09bfb0b747dc7b->enter($__internal_66fb4a1c74104788c94727fca1619a69ef7e6ceed684a207db09bfb0b747dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_66fb4a1c74104788c94727fca1619a69ef7e6ceed684a207db09bfb0b747dc7b->leave($__internal_66fb4a1c74104788c94727fca1619a69ef7e6ceed684a207db09bfb0b747dc7b_prof);

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

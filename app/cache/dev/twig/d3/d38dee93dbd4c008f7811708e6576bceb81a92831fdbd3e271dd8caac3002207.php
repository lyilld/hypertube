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
        $__internal_e2dd28e2f7abf70c52968722d996b54bd0a5263ac2b80aafebc0826fe0ed70e0 = $this->env->getExtension("native_profiler");
        $__internal_e2dd28e2f7abf70c52968722d996b54bd0a5263ac2b80aafebc0826fe0ed70e0->enter($__internal_e2dd28e2f7abf70c52968722d996b54bd0a5263ac2b80aafebc0826fe0ed70e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e2dd28e2f7abf70c52968722d996b54bd0a5263ac2b80aafebc0826fe0ed70e0->leave($__internal_e2dd28e2f7abf70c52968722d996b54bd0a5263ac2b80aafebc0826fe0ed70e0_prof);

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

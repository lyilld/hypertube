<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_2e828ceb6b88fd1ff9b9433be97d044c927c1c87510ce93f13bda50f76fcb811 extends Twig_Template
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
        $__internal_c8097e55c3eacc7398299a8652d80edd27c7d500251c62373c10c1f3f45f8077 = $this->env->getExtension("native_profiler");
        $__internal_c8097e55c3eacc7398299a8652d80edd27c7d500251c62373c10c1f3f45f8077->enter($__internal_c8097e55c3eacc7398299a8652d80edd27c7d500251c62373c10c1f3f45f8077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c8097e55c3eacc7398299a8652d80edd27c7d500251c62373c10c1f3f45f8077->leave($__internal_c8097e55c3eacc7398299a8652d80edd27c7d500251c62373c10c1f3f45f8077_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

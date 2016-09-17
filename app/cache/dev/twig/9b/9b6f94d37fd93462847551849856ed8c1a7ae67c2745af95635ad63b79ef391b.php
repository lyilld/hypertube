<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_02d9fc3355d5a1e57abf91cced277b359d55802def77ba591b9413c28a5a7dbe extends Twig_Template
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
        $__internal_20e99ac44fadc7688a6e4f9bd0cacf90e73eaf29df3f74f1c53a403ef88d8af6 = $this->env->getExtension("native_profiler");
        $__internal_20e99ac44fadc7688a6e4f9bd0cacf90e73eaf29df3f74f1c53a403ef88d8af6->enter($__internal_20e99ac44fadc7688a6e4f9bd0cacf90e73eaf29df3f74f1c53a403ef88d8af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_20e99ac44fadc7688a6e4f9bd0cacf90e73eaf29df3f74f1c53a403ef88d8af6->leave($__internal_20e99ac44fadc7688a6e4f9bd0cacf90e73eaf29df3f74f1c53a403ef88d8af6_prof);

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

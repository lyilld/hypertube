<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_7707ca498ca2268e0c71dc678afed6a759555f159b3ae6724a9c7b3e4edf2ea4 extends Twig_Template
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
        $__internal_568bcd87ff26df7a2f9f31b36e6c3bdd6a567aa67ad23672da7578dbabb40ba1 = $this->env->getExtension("native_profiler");
        $__internal_568bcd87ff26df7a2f9f31b36e6c3bdd6a567aa67ad23672da7578dbabb40ba1->enter($__internal_568bcd87ff26df7a2f9f31b36e6c3bdd6a567aa67ad23672da7578dbabb40ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_568bcd87ff26df7a2f9f31b36e6c3bdd6a567aa67ad23672da7578dbabb40ba1->leave($__internal_568bcd87ff26df7a2f9f31b36e6c3bdd6a567aa67ad23672da7578dbabb40ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

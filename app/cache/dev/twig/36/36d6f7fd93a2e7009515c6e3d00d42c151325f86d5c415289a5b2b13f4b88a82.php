<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c8df9d06f983237d180c17e2c2f62c63c47f584c89a3f6b3c60a3a69ebe1ee4f extends Twig_Template
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
        $__internal_2714d505c920cabeb4342e37d0f874c14a498c488c5f9ba12c6a9e07e13afee8 = $this->env->getExtension("native_profiler");
        $__internal_2714d505c920cabeb4342e37d0f874c14a498c488c5f9ba12c6a9e07e13afee8->enter($__internal_2714d505c920cabeb4342e37d0f874c14a498c488c5f9ba12c6a9e07e13afee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_2714d505c920cabeb4342e37d0f874c14a498c488c5f9ba12c6a9e07e13afee8->leave($__internal_2714d505c920cabeb4342e37d0f874c14a498c488c5f9ba12c6a9e07e13afee8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_31163d4a1860046ddfba0f54424a2e0564e55401d5c169f453f04304bbef8b28 extends Twig_Template
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
        $__internal_a7c4873b158eb7743ffb96e2507e8d37984264bd1ab6b9de5569669d757e0028 = $this->env->getExtension("native_profiler");
        $__internal_a7c4873b158eb7743ffb96e2507e8d37984264bd1ab6b9de5569669d757e0028->enter($__internal_a7c4873b158eb7743ffb96e2507e8d37984264bd1ab6b9de5569669d757e0028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a7c4873b158eb7743ffb96e2507e8d37984264bd1ab6b9de5569669d757e0028->leave($__internal_a7c4873b158eb7743ffb96e2507e8d37984264bd1ab6b9de5569669d757e0028_prof);

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

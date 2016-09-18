<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f1ac9f6bf6b3943aa9e7ea1d9f75e75e5f8d2d1e9c9ce3ff5121099d513eb694 extends Twig_Template
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
        $__internal_8f6f94178a69fd3c062f09274ad423f8b6b7c3b8b9db65f8f65605bf0a311b26 = $this->env->getExtension("native_profiler");
        $__internal_8f6f94178a69fd3c062f09274ad423f8b6b7c3b8b9db65f8f65605bf0a311b26->enter($__internal_8f6f94178a69fd3c062f09274ad423f8b6b7c3b8b9db65f8f65605bf0a311b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_8f6f94178a69fd3c062f09274ad423f8b6b7c3b8b9db65f8f65605bf0a311b26->leave($__internal_8f6f94178a69fd3c062f09274ad423f8b6b7c3b8b9db65f8f65605bf0a311b26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

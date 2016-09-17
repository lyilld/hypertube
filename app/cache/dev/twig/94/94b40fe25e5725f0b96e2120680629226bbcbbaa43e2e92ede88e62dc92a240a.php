<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_39144550b58948b1ecb43bd4eda9a8b58db2f3ca3f840dcb0337a52f5f551c3c extends Twig_Template
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
        $__internal_6562710621578fcda23268310bf5e440332e771c2f0a5ea3ee21fae23515c8d5 = $this->env->getExtension("native_profiler");
        $__internal_6562710621578fcda23268310bf5e440332e771c2f0a5ea3ee21fae23515c8d5->enter($__internal_6562710621578fcda23268310bf5e440332e771c2f0a5ea3ee21fae23515c8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6562710621578fcda23268310bf5e440332e771c2f0a5ea3ee21fae23515c8d5->leave($__internal_6562710621578fcda23268310bf5e440332e771c2f0a5ea3ee21fae23515c8d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

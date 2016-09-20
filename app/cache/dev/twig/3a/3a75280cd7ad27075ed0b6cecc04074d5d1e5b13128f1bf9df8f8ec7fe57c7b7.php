<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4f6c5632f6b3485e989bc0db1197e29c571f1ff5130767716bf831458fe3363a extends Twig_Template
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
        $__internal_425c643264783f9ce881e22a9bd6d8bb86a4725e4d87cd65e9663c6903584986 = $this->env->getExtension("native_profiler");
        $__internal_425c643264783f9ce881e22a9bd6d8bb86a4725e4d87cd65e9663c6903584986->enter($__internal_425c643264783f9ce881e22a9bd6d8bb86a4725e4d87cd65e9663c6903584986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_425c643264783f9ce881e22a9bd6d8bb86a4725e4d87cd65e9663c6903584986->leave($__internal_425c643264783f9ce881e22a9bd6d8bb86a4725e4d87cd65e9663c6903584986_prof);

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

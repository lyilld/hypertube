<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_8669abeb8d1c167d10d4576eaf5108837d51e4767b27e6c1b4c3e7902630c8e0 extends Twig_Template
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
        $__internal_b7384dc1126ef72e8577e8abf8c21e9fce459359e503f90b5e9f29e00b33d068 = $this->env->getExtension("native_profiler");
        $__internal_b7384dc1126ef72e8577e8abf8c21e9fce459359e503f90b5e9f29e00b33d068->enter($__internal_b7384dc1126ef72e8577e8abf8c21e9fce459359e503f90b5e9f29e00b33d068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b7384dc1126ef72e8577e8abf8c21e9fce459359e503f90b5e9f29e00b33d068->leave($__internal_b7384dc1126ef72e8577e8abf8c21e9fce459359e503f90b5e9f29e00b33d068_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

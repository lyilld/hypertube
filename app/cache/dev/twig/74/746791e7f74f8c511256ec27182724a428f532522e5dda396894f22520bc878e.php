<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f53829068392b5949501eecb803719b30bc00b5136ae2b1ddaa614c664b42584 extends Twig_Template
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
        $__internal_779e2d7e3c1137d7921b10ac1f384353f79564a336bed69ff8d8e78234a1603d = $this->env->getExtension("native_profiler");
        $__internal_779e2d7e3c1137d7921b10ac1f384353f79564a336bed69ff8d8e78234a1603d->enter($__internal_779e2d7e3c1137d7921b10ac1f384353f79564a336bed69ff8d8e78234a1603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_779e2d7e3c1137d7921b10ac1f384353f79564a336bed69ff8d8e78234a1603d->leave($__internal_779e2d7e3c1137d7921b10ac1f384353f79564a336bed69ff8d8e78234a1603d_prof);

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

<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_00ac54c40bde74937a44c26c819612defd516d36dd7c61b2d112f91a7ecfc33b extends Twig_Template
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
        $__internal_d74cf871f1e6bc3270139bfcf013294c692508952e2f33da06a90f326fdb58ab = $this->env->getExtension("native_profiler");
        $__internal_d74cf871f1e6bc3270139bfcf013294c692508952e2f33da06a90f326fdb58ab->enter($__internal_d74cf871f1e6bc3270139bfcf013294c692508952e2f33da06a90f326fdb58ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d74cf871f1e6bc3270139bfcf013294c692508952e2f33da06a90f326fdb58ab->leave($__internal_d74cf871f1e6bc3270139bfcf013294c692508952e2f33da06a90f326fdb58ab_prof);

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

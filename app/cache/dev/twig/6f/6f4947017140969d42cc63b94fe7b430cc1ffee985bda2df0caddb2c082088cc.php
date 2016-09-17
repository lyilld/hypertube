<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_85696c63233ce88cbc00bb2821e345829dda18f13310097bdb2e8e14c2f8319c extends Twig_Template
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
        $__internal_2e35f411d4a6785fa6258e90484326b7dda41fd3f09dead47afa9caaf2407f4f = $this->env->getExtension("native_profiler");
        $__internal_2e35f411d4a6785fa6258e90484326b7dda41fd3f09dead47afa9caaf2407f4f->enter($__internal_2e35f411d4a6785fa6258e90484326b7dda41fd3f09dead47afa9caaf2407f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2e35f411d4a6785fa6258e90484326b7dda41fd3f09dead47afa9caaf2407f4f->leave($__internal_2e35f411d4a6785fa6258e90484326b7dda41fd3f09dead47afa9caaf2407f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

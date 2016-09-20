<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ca6e56bc952355ba271cb800bc96beb117e020b73df8f175f5a6c99768d4a96c extends Twig_Template
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
        $__internal_1781aae2544e4e471f940b25691612a3b7aacc9a60f1aa96c763d4718b96631f = $this->env->getExtension("native_profiler");
        $__internal_1781aae2544e4e471f940b25691612a3b7aacc9a60f1aa96c763d4718b96631f->enter($__internal_1781aae2544e4e471f940b25691612a3b7aacc9a60f1aa96c763d4718b96631f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1781aae2544e4e471f940b25691612a3b7aacc9a60f1aa96c763d4718b96631f->leave($__internal_1781aae2544e4e471f940b25691612a3b7aacc9a60f1aa96c763d4718b96631f_prof);

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

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
        $__internal_dc797c0ba3e228f7b33232dbfa8230ac44574a80a61f6e7878be2de129d0ffae = $this->env->getExtension("native_profiler");
        $__internal_dc797c0ba3e228f7b33232dbfa8230ac44574a80a61f6e7878be2de129d0ffae->enter($__internal_dc797c0ba3e228f7b33232dbfa8230ac44574a80a61f6e7878be2de129d0ffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dc797c0ba3e228f7b33232dbfa8230ac44574a80a61f6e7878be2de129d0ffae->leave($__internal_dc797c0ba3e228f7b33232dbfa8230ac44574a80a61f6e7878be2de129d0ffae_prof);

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

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
        $__internal_cce7e1f930a2a8406e5519e7454338ae0399ca8c0deb1f1ca099dfe87a80757e = $this->env->getExtension("native_profiler");
        $__internal_cce7e1f930a2a8406e5519e7454338ae0399ca8c0deb1f1ca099dfe87a80757e->enter($__internal_cce7e1f930a2a8406e5519e7454338ae0399ca8c0deb1f1ca099dfe87a80757e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cce7e1f930a2a8406e5519e7454338ae0399ca8c0deb1f1ca099dfe87a80757e->leave($__internal_cce7e1f930a2a8406e5519e7454338ae0399ca8c0deb1f1ca099dfe87a80757e_prof);

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

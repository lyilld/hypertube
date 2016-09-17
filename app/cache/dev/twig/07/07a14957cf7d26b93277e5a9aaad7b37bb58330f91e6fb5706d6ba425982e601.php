<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8fd6e5a19ccb758a1f2ce22215ea7d997b3fe0798e3d7ec33716ff21343fb489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b329cb8661f433b258fd43abffc5fed910e4ffd5f80fa484b7a42ca44ba6a10a = $this->env->getExtension("native_profiler");
        $__internal_b329cb8661f433b258fd43abffc5fed910e4ffd5f80fa484b7a42ca44ba6a10a->enter($__internal_b329cb8661f433b258fd43abffc5fed910e4ffd5f80fa484b7a42ca44ba6a10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_b329cb8661f433b258fd43abffc5fed910e4ffd5f80fa484b7a42ca44ba6a10a->leave($__internal_b329cb8661f433b258fd43abffc5fed910e4ffd5f80fa484b7a42ca44ba6a10a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c90eb9aef39f3423ba5739bb4fbcd8e0638bd8e17f8511fb8b2d29707353fff = $this->env->getExtension("native_profiler");
        $__internal_6c90eb9aef39f3423ba5739bb4fbcd8e0638bd8e17f8511fb8b2d29707353fff->enter($__internal_6c90eb9aef39f3423ba5739bb4fbcd8e0638bd8e17f8511fb8b2d29707353fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        
        $__internal_6c90eb9aef39f3423ba5739bb4fbcd8e0638bd8e17f8511fb8b2d29707353fff->leave($__internal_6c90eb9aef39f3423ba5739bb4fbcd8e0638bd8e17f8511fb8b2d29707353fff_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

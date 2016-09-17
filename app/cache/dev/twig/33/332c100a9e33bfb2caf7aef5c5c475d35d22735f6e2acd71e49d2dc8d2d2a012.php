<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b96dce9dc21d3c8b639220d66e603826828fe10b3fb35664a31c1b010e94b778 extends Twig_Template
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
        $__internal_32b435d432860f08cf797117c512225c40274a88202f5863e58e6cdd75ca1f1e = $this->env->getExtension("native_profiler");
        $__internal_32b435d432860f08cf797117c512225c40274a88202f5863e58e6cdd75ca1f1e->enter($__internal_32b435d432860f08cf797117c512225c40274a88202f5863e58e6cdd75ca1f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_32b435d432860f08cf797117c512225c40274a88202f5863e58e6cdd75ca1f1e->leave($__internal_32b435d432860f08cf797117c512225c40274a88202f5863e58e6cdd75ca1f1e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_191b8da1b88c6d2a1f85c4af2f965c4175cca7fa749f1e3c4a85ad703f4aa712 = $this->env->getExtension("native_profiler");
        $__internal_191b8da1b88c6d2a1f85c4af2f965c4175cca7fa749f1e3c4a85ad703f4aa712->enter($__internal_191b8da1b88c6d2a1f85c4af2f965c4175cca7fa749f1e3c4a85ad703f4aa712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_191b8da1b88c6d2a1f85c4af2f965c4175cca7fa749f1e3c4a85ad703f4aa712->leave($__internal_191b8da1b88c6d2a1f85c4af2f965c4175cca7fa749f1e3c4a85ad703f4aa712_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

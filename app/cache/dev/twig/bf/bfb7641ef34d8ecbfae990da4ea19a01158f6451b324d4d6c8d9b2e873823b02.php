<?php

/* UserBundle:Profile:show.html.twig */
class __TwigTemplate_eaaae3ebeb5f8bed27b480471f945fb8d95162a63372dfb0a610e97c80b61fde extends Twig_Template
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
        $__internal_22662e1f501a34a888f6d7e38c44f1bdc28c453784c83333e50a8a0b2df64938 = $this->env->getExtension("native_profiler");
        $__internal_22662e1f501a34a888f6d7e38c44f1bdc28c453784c83333e50a8a0b2df64938->enter($__internal_22662e1f501a34a888f6d7e38c44f1bdc28c453784c83333e50a8a0b2df64938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_22662e1f501a34a888f6d7e38c44f1bdc28c453784c83333e50a8a0b2df64938->leave($__internal_22662e1f501a34a888f6d7e38c44f1bdc28c453784c83333e50a8a0b2df64938_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2e238d606bd9d3351a29e2b577b2ff61ea45acb97e2874e7ccf537dccefb4e5 = $this->env->getExtension("native_profiler");
        $__internal_a2e238d606bd9d3351a29e2b577b2ff61ea45acb97e2874e7ccf537dccefb4e5->enter($__internal_a2e238d606bd9d3351a29e2b577b2ff61ea45acb97e2874e7ccf537dccefb4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "UserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a2e238d606bd9d3351a29e2b577b2ff61ea45acb97e2874e7ccf537dccefb4e5->leave($__internal_a2e238d606bd9d3351a29e2b577b2ff61ea45acb97e2874e7ccf537dccefb4e5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show.html.twig";
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

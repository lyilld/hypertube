<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_443b44dfd3f4cc93e174dfaf1de1ca67506467c9c4ec0b5a47a1ba9e57b4e139 extends Twig_Template
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
        $__internal_9d9098405cb58c29c3df4e0a0400a40867509f427365719ab13f309449fe7e4a = $this->env->getExtension("native_profiler");
        $__internal_9d9098405cb58c29c3df4e0a0400a40867509f427365719ab13f309449fe7e4a->enter($__internal_9d9098405cb58c29c3df4e0a0400a40867509f427365719ab13f309449fe7e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9d9098405cb58c29c3df4e0a0400a40867509f427365719ab13f309449fe7e4a->leave($__internal_9d9098405cb58c29c3df4e0a0400a40867509f427365719ab13f309449fe7e4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

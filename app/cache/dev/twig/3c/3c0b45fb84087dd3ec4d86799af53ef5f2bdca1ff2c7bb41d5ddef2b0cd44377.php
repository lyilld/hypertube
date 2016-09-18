<?php

/* UserBundle:Profile:show_content.html.twig */
class __TwigTemplate_7a20de53dacbca42e229fa8dfe29c07b7ae92e4ca184f342c14899b6fdf441a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a1546d5a378d0d8b459aad65c9938418aed940ab0d63d54774385398edc1f39 = $this->env->getExtension("native_profiler");
        $__internal_9a1546d5a378d0d8b459aad65c9938418aed940ab0d63d54774385398edc1f39->enter($__internal_9a1546d5a378d0d8b459aad65c9938418aed940ab0d63d54774385398edc1f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:EditImage"));
        echo "
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Profile:EditEmail"));
        echo "
";
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:ChangePassword:ChangePassword"));
        echo "
";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9a1546d5a378d0d8b459aad65c9938418aed940ab0d63d54774385398edc1f39->leave($__internal_9a1546d5a378d0d8b459aad65c9938418aed940ab0d63d54774385398edc1f39_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_47bb08fe9a891046aa4b07628427d87772fe125763118915513c7776595ccd40 = $this->env->getExtension("native_profiler");
        $__internal_47bb08fe9a891046aa4b07628427d87772fe125763118915513c7776595ccd40->enter($__internal_47bb08fe9a891046aa4b07628427d87772fe125763118915513c7776595ccd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "Bienvenue sur votre profile ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </br>
<img class='img_profile' src=\"../../../";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\"> </br>
<a href=\"Edit\"> Edite ton profile</a> </br>
Vous êtes inscrit depuis le : </br>
nombre de film visonnés: </br>
nombre d'heure de visionage: </br>
Votre liste de film en favoris: </br>
Historique des dernier film regardé: </br>

";
        
        $__internal_47bb08fe9a891046aa4b07628427d87772fe125763118915513c7776595ccd40->leave($__internal_47bb08fe9a891046aa4b07628427d87772fe125763118915513c7776595ccd40_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  47 => 5,  35 => 4,  31 => 3,  27 => 2,  23 => 1,);
    }
}
/* {{ render(controller("FOSUserBundle:Profile:EditImage")) }}*/
/* {{ render(controller("FOSUserBundle:Profile:EditEmail")) }}*/
/* {{ render(controller("FOSUserBundle:ChangePassword:ChangePassword")) }}*/
/* {% block body %}*/
/* Bienvenue sur votre profile {{ user.username }} </br>*/
/* <img class='img_profile' src="../../../{{ user.image }}"> </br>*/
/* <a href="Edit"> Edite ton profile</a> </br>*/
/* Vous êtes inscrit depuis le : </br>*/
/* nombre de film visonnés: </br>*/
/* nombre d'heure de visionage: </br>*/
/* Votre liste de film en favoris: </br>*/
/* Historique des dernier film regardé: </br>*/
/* */
/* {% endblock %}*/
/* */

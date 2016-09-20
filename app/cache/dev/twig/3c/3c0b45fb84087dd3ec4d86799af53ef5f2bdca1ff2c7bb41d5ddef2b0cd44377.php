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
        $__internal_45f48cce74753a3c4577ea74bf59a551df9bf97258f89c459352c3bde572be51 = $this->env->getExtension("native_profiler");
        $__internal_45f48cce74753a3c4577ea74bf59a551df9bf97258f89c459352c3bde572be51->enter($__internal_45f48cce74753a3c4577ea74bf59a551df9bf97258f89c459352c3bde572be51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_45f48cce74753a3c4577ea74bf59a551df9bf97258f89c459352c3bde572be51->leave($__internal_45f48cce74753a3c4577ea74bf59a551df9bf97258f89c459352c3bde572be51_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_69c2de83c5cb9b9153d66ff4916e1b7845e7c3600ae07fb3e2b85e1e864885a8 = $this->env->getExtension("native_profiler");
        $__internal_69c2de83c5cb9b9153d66ff4916e1b7845e7c3600ae07fb3e2b85e1e864885a8->enter($__internal_69c2de83c5cb9b9153d66ff4916e1b7845e7c3600ae07fb3e2b85e1e864885a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_69c2de83c5cb9b9153d66ff4916e1b7845e7c3600ae07fb3e2b85e1e864885a8->leave($__internal_69c2de83c5cb9b9153d66ff4916e1b7845e7c3600ae07fb3e2b85e1e864885a8_prof);

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

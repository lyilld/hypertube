<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_6a7a46fa965cfced7bc00ba2e5ad2c6bd4be5d69a22958b90fda00758eefe76c extends Twig_Template
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
        $__internal_1ce6c501c06f8c5c65974fbd3f097d4fd49ffec4f03f50e27228461081413b33 = $this->env->getExtension("native_profiler");
        $__internal_1ce6c501c06f8c5c65974fbd3f097d4fd49ffec4f03f50e27228461081413b33->enter($__internal_1ce6c501c06f8c5c65974fbd3f097d4fd49ffec4f03f50e27228461081413b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1ce6c501c06f8c5c65974fbd3f097d4fd49ffec4f03f50e27228461081413b33->leave($__internal_1ce6c501c06f8c5c65974fbd3f097d4fd49ffec4f03f50e27228461081413b33_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a276bb29870676ea2c6b6af8275f07e1ded11392a3eaa4adcad55dd858d38d57 = $this->env->getExtension("native_profiler");
        $__internal_a276bb29870676ea2c6b6af8275f07e1ded11392a3eaa4adcad55dd858d38d57->enter($__internal_a276bb29870676ea2c6b6af8275f07e1ded11392a3eaa4adcad55dd858d38d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "Bienvenue sur votre profile ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " </br>
<img class='img_profile' src=\"../../../";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\"> </br>
<a href=\"EditImage\"> Edite ton image</a> </br>
<a href=\"edit\"> change ton password</a> </br>
<a href=\"EditEmail\"> change ton email</a> </br>
Vous êtes inscrit depuis le : </br>
nombre de film visonnés: </br>
nombre d'heure de visionage: </br>
Votre liste de film en favoris: </br>
Historique des dernier film regardé: </br>

";
        
        $__internal_a276bb29870676ea2c6b6af8275f07e1ded11392a3eaa4adcad55dd858d38d57->leave($__internal_a276bb29870676ea2c6b6af8275f07e1ded11392a3eaa4adcad55dd858d38d57_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/* Bienvenue sur votre profile {{ user.username }} </br>*/
/* <img class='img_profile' src="../../../{{ user.image }}"> </br>*/
/* <a href="EditImage"> Edite ton image</a> </br>*/
/* <a href="edit"> change ton password</a> </br>*/
/* <a href="EditEmail"> change ton email</a> </br>*/
/* Vous êtes inscrit depuis le : </br>*/
/* nombre de film visonnés: </br>*/
/* nombre d'heure de visionage: </br>*/
/* Votre liste de film en favoris: </br>*/
/* Historique des dernier film regardé: </br>*/
/* */
/* {% endblock %}*/
/* */

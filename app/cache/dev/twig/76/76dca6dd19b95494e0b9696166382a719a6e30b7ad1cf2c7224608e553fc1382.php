<?php

/* CoreBundle:HP:movie.html.twig */
class __TwigTemplate_cae55719bf7a369d2925fe15b58dee81b84aa8192cb82b0714990a20dbfff74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "CoreBundle:HP:movie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57cc1c2b1d7ff0fc77c832aa75349a6115ceda057b32f318218d5f58880dd5bf = $this->env->getExtension("native_profiler");
        $__internal_57cc1c2b1d7ff0fc77c832aa75349a6115ceda057b32f318218d5f58880dd5bf->enter($__internal_57cc1c2b1d7ff0fc77c832aa75349a6115ceda057b32f318218d5f58880dd5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:movie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57cc1c2b1d7ff0fc77c832aa75349a6115ceda057b32f318218d5f58880dd5bf->leave($__internal_57cc1c2b1d7ff0fc77c832aa75349a6115ceda057b32f318218d5f58880dd5bf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_afa43a988a065f61d4f29721a8e662a498541dae0a736ed3758468293dbed5ea = $this->env->getExtension("native_profiler");
        $__internal_afa43a988a065f61d4f29721a8e662a498541dae0a736ed3758468293dbed5ea->enter($__internal_afa43a988a065f61d4f29721a8e662a498541dae0a736ed3758468293dbed5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div id=\"search_space\">
\t<form>
\t\t<select class=\"select\">
\t\t\t<option value=\"0\">Filter</option>
\t\t\t<option value=\"1\">Years</option>
\t\t\t<option value=\"2\">Alphabetic</option>
\t\t</select>
\t\t<select class=\"select\">
\t\t\t<option value=\"0\">Genre</option>
\t\t\t<option value=\"1\">Action</option>
\t\t\t<option value=\"2\">Adventure</option>
\t\t\t<option value=\"3\">Comedie</option>
\t\t\t<option value=\"4\">Sci-Fi</option>
\t\t</select>
\t\t<select class=\"select\">
\t\t\t<option value=\"0\">Years</option>
\t\t\t<option value=\"1\">2016</option>
\t\t\t<option value=\"2\">2015</option>
\t\t\t<option value=\"3\">2014</option>
\t\t\t<option value=\"4\">2013</option>
\t\t</select>
\t\t<select class=\"select\">
\t\t\t<option value=\"0\">Rated</option>
\t\t\t<option value=\"1\">*</option>
\t\t\t<option value=\"2\">**</option>
\t\t\t<option value=\"3\">***</option>
\t\t\t<option value=\"4\">****</option>
\t\t\t<option value=\"5\">*****</option>
\t\t</select>
        <input class=\"select_search\" type=\"text\" placeholder=\"search a movie\">
\t\t<button type=\"submit\" id=\"submit_filter\">Search by filter</button>
\t</form>
</div>


<div class=\"pagination-container wow zoomIn mar-b-1x\" data-wow-duration=\"0.5s\">
\t<ul class=\"pagination\">
\t\t<li class=\"pagination-item--wide first\"> <a class=\"pagination-link--wide first\" href=\"#\">Previous</a> </li>
\t\t<li class=\"pagination-item first-number is-active\"> <a class=\"pagination-link\" href=\"#\">1</a> </li>
\t\t<li class=\"pagination-item\"> <a class=\"pagination-link\" href=\"#\">2</a> </li>
\t\t<li class=\"pagination-item \"> <a class=\"pagination-link\" href=\"#\">3</a> </li>
\t\t<li class=\"pagination-item\"> <a class=\"pagination-link\" href=\"#\">4</a> </li>
\t\t<li class=\"pagination-item\"> <a class=\"pagination-link\" href=\"#\">5</a> </li>
\t\t<li class=\"pagination-item--wide last\"> <a class=\"pagination-link--wide last\" href=\"#\">Next</a> </li>
\t</ul>
</div>


<div id=\"content_page\">
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 54
            echo "\t<div class=\"film_container\" id=\"film\">
\t    <h3 id=\"film_name\" class=\"title\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Title", array()), "html", null, true);
            echo "</h3>
\t    <div class=\"plot\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Plot", array()), "html", null, true);
            echo "</div>
\t    <div class=\"actors\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Actors", array()), "html", null, true);
            echo "</div>
\t    <div class=\"rea\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Director", array()), "html", null, true);
            echo "</div>
\t    <div class=\"poster\"><img id=\"real_poster\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Poster", array()), "html", null, true);
            echo "\"/></div>
\t    <div class=\"time\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Runtime", array()), "html", null, true);
            echo "</div>
\t    <div class=\"genre\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Genre", array()), "html", null, true);
            echo "</div>
\t    <div class=\"year\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Year", array()), "html", null, true);
            echo "</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "</div>


<div class=\"pagination-container wow zoomIn mar-b-1x\" data-wow-duration=\"0.5s\">
\t<ul class=\"pagination\">
\t\t<li class=\"pagination-item--wide first\"> <a class=\"pagination-link--wide first\" href=\"#\">Previous</a> </li>
\t\t<li class=\"pagination-item first-number is-active\"> <a class=\"pagination-link\" href=\"#\">1</a> </li>
\t\t<li class=\"pagination-item\"> <a class=\"pagination-link\" href=\"#\">2</a> </li>
\t\t<li class=\"pagination-item \"> <a class=\"pagination-link\" href=\"#\">3</a> </li>
\t\t<li class=\"pagination-item\"> <a class=\"pagination-link\" href=\"#\">4</a> </li>
\t\t<li class=\"pagination-item\"> <a class=\"pagination-link\" href=\"#\">5</a> </li>
\t\t<li class=\"pagination-item--wide last\"> <a class=\"pagination-link--wide last\" href=\"#\">Next</a> </li>
\t</ul>
</div>

";
        
        $__internal_afa43a988a065f61d4f29721a8e662a498541dae0a736ed3758468293dbed5ea->leave($__internal_afa43a988a065f61d4f29721a8e662a498541dae0a736ed3758468293dbed5ea_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 65,  127 => 62,  123 => 61,  119 => 60,  115 => 59,  111 => 58,  107 => 57,  103 => 56,  99 => 55,  96 => 54,  92 => 53,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/* <div id="search_space">*/
/* 	<form>*/
/* 		<select class="select">*/
/* 			<option value="0">Filter</option>*/
/* 			<option value="1">Years</option>*/
/* 			<option value="2">Alphabetic</option>*/
/* 		</select>*/
/* 		<select class="select">*/
/* 			<option value="0">Genre</option>*/
/* 			<option value="1">Action</option>*/
/* 			<option value="2">Adventure</option>*/
/* 			<option value="3">Comedie</option>*/
/* 			<option value="4">Sci-Fi</option>*/
/* 		</select>*/
/* 		<select class="select">*/
/* 			<option value="0">Years</option>*/
/* 			<option value="1">2016</option>*/
/* 			<option value="2">2015</option>*/
/* 			<option value="3">2014</option>*/
/* 			<option value="4">2013</option>*/
/* 		</select>*/
/* 		<select class="select">*/
/* 			<option value="0">Rated</option>*/
/* 			<option value="1">*</option>*/
/* 			<option value="2">**</option>*/
/* 			<option value="3">***</option>*/
/* 			<option value="4">****</option>*/
/* 			<option value="5">*****</option>*/
/* 		</select>*/
/*         <input class="select_search" type="text" placeholder="search a movie">*/
/* 		<button type="submit" id="submit_filter">Search by filter</button>*/
/* 	</form>*/
/* </div>*/
/* */
/* */
/* <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">*/
/* 	<ul class="pagination">*/
/* 		<li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="#">Previous</a> </li>*/
/* 		<li class="pagination-item first-number is-active"> <a class="pagination-link" href="#">1</a> </li>*/
/* 		<li class="pagination-item"> <a class="pagination-link" href="#">2</a> </li>*/
/* 		<li class="pagination-item "> <a class="pagination-link" href="#">3</a> </li>*/
/* 		<li class="pagination-item"> <a class="pagination-link" href="#">4</a> </li>*/
/* 		<li class="pagination-item"> <a class="pagination-link" href="#">5</a> </li>*/
/* 		<li class="pagination-item--wide last"> <a class="pagination-link--wide last" href="#">Next</a> </li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* */
/* <div id="content_page">*/
/* {% for elem in data %}*/
/* 	<div class="film_container" id="film">*/
/* 	    <h3 id="film_name" class="title">{{ elem.Title }}</h3>*/
/* 	    <div class="plot">{{ elem.Plot }}</div>*/
/* 	    <div class="actors">{{ elem.Actors }}</div>*/
/* 	    <div class="rea">{{ elem.Director }}</div>*/
/* 	    <div class="poster"><img id="real_poster" src="{{ elem.Poster }}"/></div>*/
/* 	    <div class="time">{{ elem.Runtime }}</div>*/
/* 	    <div class="genre">{{ elem.Genre }}</div>*/
/* 	    <div class="year">{{ elem.Year }}</div>*/
/* 	</div>*/
/* {% endfor %}*/
/* </div>*/
/* */
/* */
/* <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">*/
/* 	<ul class="pagination">*/
/* 		<li class="pagination-item--wide first"> <a class="pagination-link--wide first" href="#">Previous</a> </li>*/
/* 		<li class="pagination-item first-number is-active"> <a class="pagination-link" href="#">1</a> </li>*/
/* 		<li class="pagination-item"> <a class="pagination-link" href="#">2</a> </li>*/
/* 		<li class="pagination-item "> <a class="pagination-link" href="#">3</a> </li>*/
/* 		<li class="pagination-item"> <a class="pagination-link" href="#">4</a> </li>*/
/* 		<li class="pagination-item"> <a class="pagination-link" href="#">5</a> </li>*/
/* 		<li class="pagination-item--wide last"> <a class="pagination-link--wide last" href="#">Next</a> </li>*/
/* 	</ul>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */

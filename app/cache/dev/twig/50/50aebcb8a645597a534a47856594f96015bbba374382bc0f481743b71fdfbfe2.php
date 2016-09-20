<?php

/* CoreBundle:HP:movie.html.twig */
class __TwigTemplate_877efc3e24718509c262d7ab29e9d2d07e79bccca928232b27608402605c1c53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:HP:movie.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53e0656bb7e808ddc0f1f27a4e0cb79c104aaec52ffd23edb96ef22145cb04c6 = $this->env->getExtension("native_profiler");
        $__internal_53e0656bb7e808ddc0f1f27a4e0cb79c104aaec52ffd23edb96ef22145cb04c6->enter($__internal_53e0656bb7e808ddc0f1f27a4e0cb79c104aaec52ffd23edb96ef22145cb04c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:movie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53e0656bb7e808ddc0f1f27a4e0cb79c104aaec52ffd23edb96ef22145cb04c6->leave($__internal_53e0656bb7e808ddc0f1f27a4e0cb79c104aaec52ffd23edb96ef22145cb04c6_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_64de6f41f429c4a6919a2996c6480d6e74191b2f12e53a25103c7f3dd9396384 = $this->env->getExtension("native_profiler");
        $__internal_64de6f41f429c4a6919a2996c6480d6e74191b2f12e53a25103c7f3dd9396384->enter($__internal_64de6f41f429c4a6919a2996c6480d6e74191b2f12e53a25103c7f3dd9396384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<div id=\"search_space\">
\t<form method=\"POST\" action=\"\">
\t\t<select class=\"select\" name=\"filter\">
\t\t\t<option value=\"0\">Filter</option>
\t\t\t<option value=\"year\">Years</option>
\t\t\t<option value=\"title\">Alphabetic</option>
\t\t</select>
\t\t<select class=\"select\" name=\"genre\">
\t\t\t<option value=\"0\">Genre</option>
\t\t\t<option value=\"Action\">Action</option>
\t\t\t<option value=\"Adventure\">Adventure</option>
\t\t\t<option value=\"Comedie\">Comedie</option>
\t\t\t<option value=\"Sci-Fi\">Sci-Fi</option>
\t\t</select>
\t\t<select class=\"select\" name=\"Years\">
\t\t\t<option value=\"0\">Years</option>
\t\t\t<option value=\"2016\">2016</option>
\t\t\t<option value=\"2015\">2015</option>
\t\t\t<option value=\"2014\">2014</option>
\t\t\t<option value=\"2013\">2013</option>
\t\t</select>
\t\t<select class=\"select\" name=\"rated\">
\t\t\t<option value=\"0\">Rated</option>
\t\t\t<option value=\"3\">***</option>
\t\t\t<option value=\"4\">****</option>
\t\t\t<option value=\"5\">*****</option>
\t\t</select>
        <input class=\"select_search\" type=\"text\" placeholder=\"search a movie\">
\t\t<input type=\"submit\" id=\"submit_filter\" value=\"Search by filter\" />
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 52
            echo "\t<div class=\"film_container\" id=\"film\">
\t    <h3 id=\"film_name\" class=\"title\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Title", array()), "html", null, true);
            echo "</h3>
\t    <div class=\"plot\">";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Plot", array()), "html", null, true);
            echo "</div>
\t    <div class=\"actors\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Actors", array()), "html", null, true);
            echo "</div>
\t    <div class=\"rea\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Director", array()), "html", null, true);
            echo "</div>
\t    <div class=\"poster\"><img id=\"real_poster\" src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Poster", array()), "html", null, true);
            echo "\"/></div>
\t    <div class=\"time\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Runtime", array()), "html", null, true);
            echo "</div>
\t    <div class=\"genre\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Genre", array()), "html", null, true);
            echo "</div>
\t    <div class=\"year\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Year", array()), "html", null, true);
            echo "</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
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
        
        $__internal_64de6f41f429c4a6919a2996c6480d6e74191b2f12e53a25103c7f3dd9396384->leave($__internal_64de6f41f429c4a6919a2996c6480d6e74191b2f12e53a25103c7f3dd9396384_prof);

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
        return array (  134 => 63,  125 => 60,  121 => 59,  117 => 58,  113 => 57,  109 => 56,  105 => 55,  101 => 54,  97 => 53,  94 => 52,  90 => 51,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* <div id="search_space">*/
/* 	<form method="POST" action="">*/
/* 		<select class="select" name="filter">*/
/* 			<option value="0">Filter</option>*/
/* 			<option value="year">Years</option>*/
/* 			<option value="title">Alphabetic</option>*/
/* 		</select>*/
/* 		<select class="select" name="genre">*/
/* 			<option value="0">Genre</option>*/
/* 			<option value="Action">Action</option>*/
/* 			<option value="Adventure">Adventure</option>*/
/* 			<option value="Comedie">Comedie</option>*/
/* 			<option value="Sci-Fi">Sci-Fi</option>*/
/* 		</select>*/
/* 		<select class="select" name="Years">*/
/* 			<option value="0">Years</option>*/
/* 			<option value="2016">2016</option>*/
/* 			<option value="2015">2015</option>*/
/* 			<option value="2014">2014</option>*/
/* 			<option value="2013">2013</option>*/
/* 		</select>*/
/* 		<select class="select" name="rated">*/
/* 			<option value="0">Rated</option>*/
/* 			<option value="3">***</option>*/
/* 			<option value="4">****</option>*/
/* 			<option value="5">*****</option>*/
/* 		</select>*/
/*         <input class="select_search" type="text" placeholder="search a movie">*/
/* 		<input type="submit" id="submit_filter" value="Search by filter" />*/
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

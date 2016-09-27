<?php

/* CoreBundle:HP:movie.html.twig */
class __TwigTemplate_b93012ed3657207b95beff7985bccefb0da398a702d3874e5292ac54a83dc8f1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<script>
\t\tvar nbPages = ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo " / 8;
\t\tconst path = \"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("core_movie");
        echo "\";
\t\t";
        // line 7
        echo "//\t\tconsole.log(\"test path -> \" + test);
\t</script>

\t<div id=\"search_space\">
\t\t<form method=\"POST\" action=\"\">
\t\t\t<select class=\"select\" name=\"filter\" id=\"filter\">
\t\t\t\t<option value=\"0\">Filter</option>
\t\t\t\t<option value=\"year\">Years</option>
\t\t\t\t<option value=\"title\">Alphabetic</option>
\t\t\t</select>
\t\t\t<select class=\"select\" name=\"genre\" id=\"genre\">
\t\t\t\t<option value=\"0\">Genre</option>
\t\t\t\t<option value=\"Action\">Action</option>
\t\t\t\t<option value=\"Adventure\">Adventure</option>
\t\t\t\t<option value=\"Comedy\">Comedy</option>
\t\t\t\t<option value=\"Sci-Fi\">Sci-Fi</option>
\t\t\t\t<option value=\"Animation\">Animation</option>
\t\t\t</select>
\t\t\t<select class=\"select\" name=\"years\" id=\"years\">
\t\t\t\t<option value=\"0\">Years</option>
\t\t\t\t<option value=\"2016\">2016</option>
\t\t\t\t<option value=\"2015\">2015</option>
\t\t\t\t<option value=\"2014\">2014</option>
\t\t\t\t<option value=\"2013\">2013</option>
\t\t\t\t<option value=\"2013\">2012</option>
\t\t\t\t<option value=\"2013\">2011</option>
\t\t\t\t<option value=\"2013\">2010</option>
\t\t\t</select>
\t\t\t<select class=\"select\" name=\"rated\" id=\"rated\">
\t\t\t\t<option value=\"0\">Rated</option>
\t\t\t\t<option value=\"3\">***</option>
\t\t\t\t<option value=\"4\">****</option>
\t\t\t\t<option value=\"5\">*****</option>
\t\t\t</select>
\t\t\t<input class=\"select_search\" type=\"text\" placeholder=\"search a movie\" name=\"search\" id=\"search\">
\t\t\t<button onclick=\"pagAjax(1, callback(), 1)\" type=\"button\" id=\"submit_filter\">Search</button>
\t\t</form>
\t</div>

<div id=\"destroy\">
\t<div class=\"pagination-container wow zoomIn mar-b-1x\" data-wow-duration=\"0.5s\">
\t\t<ul class=\"pagination\">
\t\t\t<li class=\"pagination-item--wide first\"><button value=\"1\"  class=\"previousButton pagination-link--wide first\" onclick=\"Button(1)\" style=\"visibility: hidden;\">Previous</button></li>
\t\t\t<li class=\"pagination-item first-number is-active\"><button onclick=\"case_click(this);\" type=\"button\" value=\"1\" class=\"case1 pagination-link\">1</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"2\"  class=\"case2 pagination-link\">2</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"3\"  class=\"case3 pagination-link\">3</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"4\"  class=\"case4 pagination-link\">4</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"5\"  class=\"case5 pagination-link\">5</button></li>
\t\t\t<li class=\"pagination-item--wide last\"><button value=\"1\" class=\"nextButton pagination-link--wide last\" onclick=\"Button(2)\"> Next </button> </li>
\t\t</ul>
\t</div>

\t<div id=\"test\">
\t\t<div id=\"content_page\" class=\"content_page\">
\t\t\t";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
            // line 62
            echo "\t\t\t\t<div class=\"film_container\" id=\"film\">
\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("core_stream", array("id" => $this->getAttribute($context["elem"], "idmdb", array()))), "html", null, true);
            echo "\"id=\"play_button\" class=\"fa fa-youtube-play\" aria-hidden=\"true\"></a>
\t\t\t\t\t<h3 id=\"film_name\" class=\"title\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Title", array()), "html", null, true);
            echo "</h3>
\t\t\t\t\t<div class=\"plot\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Plot", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"actors\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Actors", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"rea\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Director", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"poster\">
\t\t\t\t\t\t<img id=\"real_poster\" src=\"../../../";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Poster", array()), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t<div id=\"content_rate\" style=\"position: absolute; font-size: 1.8em; left: 10px; color: rgba(230, 220, 80,1.0); text-shadow: 0px 0px 8px rgba(230, 220, 80,1.0); top: 0;\">
\t\t\t\t\t\t\t";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, (($this->getAttribute($context["elem"], "Rating", array()) / 2) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 72
                echo "\t\t\t\t\t\t\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t\t";
            $context["boucle"] = ($this->getAttribute($context["elem"], "Rating", array()) % 2);
            // line 75
            echo "\t\t\t\t\t\t\t";
            if (((isset($context["boucle"]) ? $context["boucle"] : null) != 0)) {
                // line 76
                echo "\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["boucle"]) ? $context["boucle"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t<i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "\t\t\t\t\t\t\t";
            }
            // line 80
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"content_format\" style=\"position: absolute; font-size: 1.2em; border-radius: 50px; padding: 2px 8px 2px 8px; background-color: rgba(39, 174, 96,1.0); color: rgba(236, 240, 241,1.0); box-shadow: 0px 0px 10px rgba(46, 204, 113,1.0); bottom: 10px; right: 10px;\">";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Streamquality", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"time\">";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Runtime", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"genre\">";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Genre", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"year\">";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "Year", array()), "html", null, true);
            echo "</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "\t\t</div>
\t</div>

<div id=\"notFound\" style=\"display: none\">
\t<img src=\"https://upload.wikimedia.org/wikipedia/commons/f/f9/White-%26-Brown-Eggs.jpg\" style=\"width: 100px; height: 100px\">
</div>
\t<div class=\"pagination-container wow zoomIn mar-b-1x\" data-wow-duration=\"0.5s\">
\t\t<ul class=\"pagination\">
\t\t\t<li class=\"pagination-item--wide first\"><button value=\"1\"  class=\"previousButton pagination-link--wide first\" onclick=\"Button(this.value, 1)\" style=\"visibility: hidden;\">Previous</button></li>
\t\t\t<li class=\"pagination-item first-number is-active\"><button onclick=\"case_click(this);\" type=\"button\" value=\"1\" class=\"case1 pagination-link\">1</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"2\"  class=\"case2 pagination-link\">2</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"3\"  class=\"case3 pagination-link\">3</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"4\"  class=\"case4 pagination-link\">4</button></li>
\t\t\t<li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"5\"  class=\"case5 pagination-link\">5</button></li>
\t\t\t<li class=\"pagination-item--wide last\"><button value=\"1\" class=\"nextButton pagination-link--wide last\" onclick=\"Button(this.value, 2)\"> Next </button> </li>
\t\t</ul>
\t</div>
</div>

";
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
        return array (  188 => 88,  179 => 85,  175 => 84,  171 => 83,  166 => 81,  163 => 80,  160 => 79,  153 => 77,  148 => 76,  145 => 75,  142 => 74,  135 => 72,  131 => 71,  126 => 69,  121 => 67,  117 => 66,  113 => 65,  109 => 64,  105 => 63,  102 => 62,  98 => 61,  42 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* {% block content %}*/
/* 	<script>*/
/* 		var nbPages = {{ count }} / 8;*/
/* 		const path = "{{ path('core_movie') }}";*/
/* 		{#const test2 = "{{ path('core_stream') }}";#}*/
/* //		console.log("test path -> " + test);*/
/* 	</script>*/
/* */
/* 	<div id="search_space">*/
/* 		<form method="POST" action="">*/
/* 			<select class="select" name="filter" id="filter">*/
/* 				<option value="0">Filter</option>*/
/* 				<option value="year">Years</option>*/
/* 				<option value="title">Alphabetic</option>*/
/* 			</select>*/
/* 			<select class="select" name="genre" id="genre">*/
/* 				<option value="0">Genre</option>*/
/* 				<option value="Action">Action</option>*/
/* 				<option value="Adventure">Adventure</option>*/
/* 				<option value="Comedy">Comedy</option>*/
/* 				<option value="Sci-Fi">Sci-Fi</option>*/
/* 				<option value="Animation">Animation</option>*/
/* 			</select>*/
/* 			<select class="select" name="years" id="years">*/
/* 				<option value="0">Years</option>*/
/* 				<option value="2016">2016</option>*/
/* 				<option value="2015">2015</option>*/
/* 				<option value="2014">2014</option>*/
/* 				<option value="2013">2013</option>*/
/* 				<option value="2013">2012</option>*/
/* 				<option value="2013">2011</option>*/
/* 				<option value="2013">2010</option>*/
/* 			</select>*/
/* 			<select class="select" name="rated" id="rated">*/
/* 				<option value="0">Rated</option>*/
/* 				<option value="3">***</option>*/
/* 				<option value="4">****</option>*/
/* 				<option value="5">*****</option>*/
/* 			</select>*/
/* 			<input class="select_search" type="text" placeholder="search a movie" name="search" id="search">*/
/* 			<button onclick="pagAjax(1, callback(), 1)" type="button" id="submit_filter">Search</button>*/
/* 		</form>*/
/* 	</div>*/
/* */
/* <div id="destroy">*/
/* 	<div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">*/
/* 		<ul class="pagination">*/
/* 			<li class="pagination-item--wide first"><button value="1"  class="previousButton pagination-link--wide first" onclick="Button(1)" style="visibility: hidden;">Previous</button></li>*/
/* 			<li class="pagination-item first-number is-active"><button onclick="case_click(this);" type="button" value="1" class="case1 pagination-link">1</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="2"  class="case2 pagination-link">2</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="3"  class="case3 pagination-link">3</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="4"  class="case4 pagination-link">4</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="5"  class="case5 pagination-link">5</button></li>*/
/* 			<li class="pagination-item--wide last"><button value="1" class="nextButton pagination-link--wide last" onclick="Button(2)"> Next </button> </li>*/
/* 		</ul>*/
/* 	</div>*/
/* */
/* 	<div id="test">*/
/* 		<div id="content_page" class="content_page">*/
/* 			{% for elem in data %}*/
/* 				<div class="film_container" id="film">*/
/* 					<a href="{{ path('core_stream', {'id': elem.idmdb }) }}"id="play_button" class="fa fa-youtube-play" aria-hidden="true"></a>*/
/* 					<h3 id="film_name" class="title">{{ elem.Title }}</h3>*/
/* 					<div class="plot">{{ elem.Plot }}</div>*/
/* 					<div class="actors">{{ elem.Actors }}</div>*/
/* 					<div class="rea">{{ elem.Director }}</div>*/
/* 					<div class="poster">*/
/* 						<img id="real_poster" src="../../../{{ elem.Poster }}"/>*/
/* 						<div id="content_rate" style="position: absolute; font-size: 1.8em; left: 10px; color: rgba(230, 220, 80,1.0); text-shadow: 0px 0px 8px rgba(230, 220, 80,1.0); top: 0;">*/
/* 							{% for i in 0..(elem.Rating / 2) -1 %}*/
/* 								<i class="fa fa-star" aria-hidden="true"></i>*/
/* 							{% endfor %}*/
/* 							{% set boucle = (elem.Rating % 2) %}*/
/* 							{% if boucle != 0 %}*/
/* 								{% for i in 0..(boucle - 1) %}*/
/* 									<i class="fa fa-star-half" aria-hidden="true"></i>*/
/* 								{% endfor %}*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						<div id="content_format" style="position: absolute; font-size: 1.2em; border-radius: 50px; padding: 2px 8px 2px 8px; background-color: rgba(39, 174, 96,1.0); color: rgba(236, 240, 241,1.0); box-shadow: 0px 0px 10px rgba(46, 204, 113,1.0); bottom: 10px; right: 10px;">{{ elem.Streamquality }}</div>*/
/* 					</div>*/
/* 					<div class="time">{{ elem.Runtime }}</div>*/
/* 					<div class="genre">{{ elem.Genre }}</div>*/
/* 					<div class="year">{{ elem.Year }}</div>*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <div id="notFound" style="display: none">*/
/* 	<img src="https://upload.wikimedia.org/wikipedia/commons/f/f9/White-%26-Brown-Eggs.jpg" style="width: 100px; height: 100px">*/
/* </div>*/
/* 	<div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">*/
/* 		<ul class="pagination">*/
/* 			<li class="pagination-item--wide first"><button value="1"  class="previousButton pagination-link--wide first" onclick="Button(this.value, 1)" style="visibility: hidden;">Previous</button></li>*/
/* 			<li class="pagination-item first-number is-active"><button onclick="case_click(this);" type="button" value="1" class="case1 pagination-link">1</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="2"  class="case2 pagination-link">2</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="3"  class="case3 pagination-link">3</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="4"  class="case4 pagination-link">4</button></li>*/
/* 			<li class="pagination-item"><button onclick="case_click(this);" type="button" value="5"  class="case5 pagination-link">5</button></li>*/
/* 			<li class="pagination-item--wide last"><button value="1" class="nextButton pagination-link--wide last" onclick="Button(this.value, 2)"> Next </button> </li>*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/

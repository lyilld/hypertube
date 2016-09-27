<?php

/* CoreBundle:HP:serie.html.twig */
class __TwigTemplate_964116799d9a0b5234347fdb4844fc0d030ae6343529bda0a5389ab5b45203e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:HP:serie.html.twig", 1);
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
        echo "
    <script>
        const nbPages = ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo " / 8;
        const path = \"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("core_movie");
        echo "\";
    </script>

    <div id=\"search_space\">
        <form method=\"POST\" action=\"\">
            <select class=\"select\" name=\"filter\" id=\"filter\">
                <option value=\"0\">Filter</option>
                <option value=\"year\">Years</option>
                <option value=\"title\">Alphabetic</option>
            </select>
            <select class=\"select\" name=\"genre\" id=\"genre\">
                <option value=\"0\">Genre</option>
                <option value=\"Action\">Action</option>
                <option value=\"Adventure\">Adventure</option>
                <option value=\"Comedy\">Comedy</option>
                <option value=\"Sci-Fi\">Sci-Fi</option>
                <option value=\"Animation\">Animation</option>
            </select>
            <select class=\"select\" name=\"years\" id=\"years\">
                <option value=\"0\">Years</option>
                <option value=\"2016\">2016</option>
                <option value=\"2015\">2015</option>
                <option value=\"2014\">2014</option>
                <option value=\"2013\">2013</option>
                <option value=\"2013\">2012</option>
                <option value=\"2013\">2011</option>
                <option value=\"2013\">2010</option>
            </select>
            <select class=\"select\" name=\"rated\" id=\"rated\">
                <option value=\"0\">Rated</option>
                <option value=\"3\">***</option>
                <option value=\"4\">****</option>
                <option value=\"5\">*****</option>
            </select>
            <input class=\"select_search\" type=\"text\" placeholder=\"search a movie\" name=\"search\" id=\"search\">
            <button onclick=\"pagAjax(1);\" type=\"button\" id=\"submit_filter\"/>Search</button>
        </form>
    </div>


    <div class=\"pagination-container wow zoomIn mar-b-1x\" data-wow-duration=\"0.5s\">
        <ul class=\"pagination\">
            <li class=\"pagination-item--wide first\"><button value=\"1\"  class=\"previousButton pagination-link--wide first\" onclick=\"Button(this.value, 1)\" style=\"visibility: hidden;\">Previous</button></li>
            <li class=\"pagination-item first-number is-active\"><button onclick=\"case_click(this);\" type=\"button\" value=\"1\" class=\"case1 pagination-link\">1</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"2\"  class=\"case2 pagination-link\">2</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"3\"  class=\"case3 pagination-link\">3</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"4\"  class=\"case4 pagination-link\">4</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"5\"  class=\"case5 pagination-link\">5</button></li>
            <li class=\"pagination-item--wide last\"><button value=\"1\" class=\"nextButton pagination-link--wide last\" onclick=\"Button(this.value, 2)\"> Next </button> </li>
        </ul>
    </div>

    ";
        // line 59
        echo "        ";
        // line 60
        echo "            ";
        // line 61
        echo "                ";
        // line 62
        echo "                    ";
        // line 63
        echo "                    ";
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        // line 66
        echo "                    ";
        // line 67
        echo "                    ";
        // line 68
        echo "                        ";
        // line 69
        echo "                        ";
        // line 70
        echo "                            ";
        // line 71
        echo "                                ";
        // line 72
        echo "                            ";
        // line 73
        echo "                            ";
        // line 74
        echo "                            ";
        // line 75
        echo "                                ";
        // line 76
        echo "                                    ";
        // line 77
        echo "                                ";
        // line 78
        echo "                            ";
        // line 79
        echo "                        ";
        // line 80
        echo "                        ";
        // line 81
        echo "                    ";
        // line 82
        echo "                    ";
        // line 83
        echo "                    ";
        // line 84
        echo "                    ";
        // line 85
        echo "                ";
        // line 86
        echo "            ";
        // line 87
        echo "        ";
        // line 88
        echo "    ";
        // line 89
        echo "
    <div class=\"pagination-container wow zoomIn mar-b-1x\" data-wow-duration=\"0.5s\">
        <ul class=\"pagination\">
            <li class=\"pagination-item--wide first\"><button value=\"1\"  class=\"previousButton pagination-link--wide first\" onclick=\"Button(this.value, 1)\" style=\"visibility: hidden;\">Previous</button></li>
            <li class=\"pagination-item first-number is-active\"><button onclick=\"case_click(this);\" type=\"button\" value=\"1\" class=\"case1 pagination-link\">1</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"2\"  class=\"case2 pagination-link\">2</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"3\"  class=\"case3 pagination-link\">3</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"4\"  class=\"case4 pagination-link\">4</button></li>
            <li class=\"pagination-item\"><button onclick=\"case_click(this);\" type=\"button\" value=\"5\"  class=\"case5 pagination-link\">5</button></li>
            <li class=\"pagination-item--wide last\"><button value=\"1\" class=\"nextButton pagination-link--wide last\" onclick=\"Button(this.value, 2)\"> Next </button> </li>
        </ul>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:serie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 89,  152 => 88,  150 => 87,  148 => 86,  146 => 85,  144 => 84,  142 => 83,  140 => 82,  138 => 81,  136 => 80,  134 => 79,  132 => 78,  130 => 77,  128 => 76,  126 => 75,  124 => 74,  122 => 73,  120 => 72,  118 => 71,  116 => 70,  114 => 69,  112 => 68,  110 => 67,  108 => 66,  106 => 65,  104 => 64,  102 => 63,  100 => 62,  98 => 61,  96 => 60,  94 => 59,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* {% block content %}*/
/* */
/*     <script>*/
/*         const nbPages = {{ count }} / 8;*/
/*         const path = "{{ path('core_movie') }}";*/
/*     </script>*/
/* */
/*     <div id="search_space">*/
/*         <form method="POST" action="">*/
/*             <select class="select" name="filter" id="filter">*/
/*                 <option value="0">Filter</option>*/
/*                 <option value="year">Years</option>*/
/*                 <option value="title">Alphabetic</option>*/
/*             </select>*/
/*             <select class="select" name="genre" id="genre">*/
/*                 <option value="0">Genre</option>*/
/*                 <option value="Action">Action</option>*/
/*                 <option value="Adventure">Adventure</option>*/
/*                 <option value="Comedy">Comedy</option>*/
/*                 <option value="Sci-Fi">Sci-Fi</option>*/
/*                 <option value="Animation">Animation</option>*/
/*             </select>*/
/*             <select class="select" name="years" id="years">*/
/*                 <option value="0">Years</option>*/
/*                 <option value="2016">2016</option>*/
/*                 <option value="2015">2015</option>*/
/*                 <option value="2014">2014</option>*/
/*                 <option value="2013">2013</option>*/
/*                 <option value="2013">2012</option>*/
/*                 <option value="2013">2011</option>*/
/*                 <option value="2013">2010</option>*/
/*             </select>*/
/*             <select class="select" name="rated" id="rated">*/
/*                 <option value="0">Rated</option>*/
/*                 <option value="3">***</option>*/
/*                 <option value="4">****</option>*/
/*                 <option value="5">*****</option>*/
/*             </select>*/
/*             <input class="select_search" type="text" placeholder="search a movie" name="search" id="search">*/
/*             <button onclick="pagAjax(1);" type="button" id="submit_filter"/>Search</button>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">*/
/*         <ul class="pagination">*/
/*             <li class="pagination-item--wide first"><button value="1"  class="previousButton pagination-link--wide first" onclick="Button(this.value, 1)" style="visibility: hidden;">Previous</button></li>*/
/*             <li class="pagination-item first-number is-active"><button onclick="case_click(this);" type="button" value="1" class="case1 pagination-link">1</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="2"  class="case2 pagination-link">2</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="3"  class="case3 pagination-link">3</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="4"  class="case4 pagination-link">4</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="5"  class="case5 pagination-link">5</button></li>*/
/*             <li class="pagination-item--wide last"><button value="1" class="nextButton pagination-link--wide last" onclick="Button(this.value, 2)"> Next </button> </li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     {#<div id="test">#}*/
/*         {#<div id="content_page" class="content_page">#}*/
/*             {#{% for elem in data %}#}*/
/*                 {#<div class="film_container" id="film">#}*/
/*                     {#<i id="play_button" class="fa fa-youtube-play" aria-hidden="true"></i>#}*/
/*                     {#<h3 id="film_name" class="title">{{ elem.Title }}</h3>#}*/
/*                     {#<div class="plot">{{ elem.Plot }}</div>#}*/
/*                     {#<div class="actors">{{ elem.Actors }}</div>#}*/
/*                     {#<div class="rea">{{ elem.Director }}</div>#}*/
/*                     {#<div class="poster">#}*/
/*                         {#<img id="real_poster" src="../../../{{ elem.Poster }}"/>#}*/
/*                         {#<div id="content_rate" style="position: absolute; font-size: 1.8em; left: 10px; color: rgba(230, 220, 80,1.0); text-shadow: 0px 0px 8px rgba(230, 220, 80,1.0); top: 0;">#}*/
/*                             {#{% for i in 0..(elem.Rating / 2) -1 %}#}*/
/*                                 {#<i class="fa fa-star" aria-hidden="true"></i>#}*/
/*                             {#{% endfor %}#}*/
/*                             {#{% set boucle = (elem.Rating % 2) %}#}*/
/*                             {#{% if boucle != 0 %}#}*/
/*                                 {#{% for i in 0..(boucle - 1) %}#}*/
/*                                     {#<i class="fa fa-star-half" aria-hidden="true"></i>#}*/
/*                                 {#{% endfor %}#}*/
/*                             {#{% endif %}#}*/
/*                         {#</div>#}*/
/*                         {#<div id="content_format" style="position: absolute; font-size: 1.2em; border-radius: 50px; padding: 2px 8px 2px 8px; background-color: rgba(39, 174, 96,1.0); color: rgba(236, 240, 241,1.0); box-shadow: 0px 0px 10px rgba(46, 204, 113,1.0); bottom: 10px; right: 10px;">{{ elem.Streamquality }}</div>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="time">{{ elem.Runtime }}</div>#}*/
/*                     {#<div class="genre">{{ elem.Genre }}</div>#}*/
/*                     {#<div class="year">{{ elem.Year }}</div>#}*/
/*                 {#</div>#}*/
/*             {#{% endfor %}#}*/
/*         {#</div>#}*/
/*     {#</div>#}*/
/* */
/*     <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">*/
/*         <ul class="pagination">*/
/*             <li class="pagination-item--wide first"><button value="1"  class="previousButton pagination-link--wide first" onclick="Button(this.value, 1)" style="visibility: hidden;">Previous</button></li>*/
/*             <li class="pagination-item first-number is-active"><button onclick="case_click(this);" type="button" value="1" class="case1 pagination-link">1</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="2"  class="case2 pagination-link">2</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="3"  class="case3 pagination-link">3</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="4"  class="case4 pagination-link">4</button></li>*/
/*             <li class="pagination-item"><button onclick="case_click(this);" type="button" value="5"  class="case5 pagination-link">5</button></li>*/
/*             <li class="pagination-item--wide last"><button value="1" class="nextButton pagination-link--wide last" onclick="Button(this.value, 2)"> Next </button> </li>*/
/*         </ul>*/
/*     </div>*/
/*     */
/* {% endblock %}*/

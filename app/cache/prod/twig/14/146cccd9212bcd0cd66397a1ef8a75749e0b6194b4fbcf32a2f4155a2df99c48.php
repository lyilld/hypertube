<?php

/* CoreBundle:HP:stream.html.twig */
class __TwigTemplate_0452eceb1facbbaf6323807285a653cd7ec87ebf7aa4c6cb0fa6014516e3aeca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:HP:stream.html.twig", 1);
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
<div id=\"content_page\">
\t";
        // line 5
        if (array_key_exists("data_film", $context)) {
            // line 6
            echo "\t<div class=\"movie_infos\">
\t\t<div id=\"m_title\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "title", array()), "html", null, true);
            echo "<span id=\"pegi\">-13</span></div>
\t\t<div id=\"m_director\"><span style=\"font-size: 0.8em;\">Director : </span><span style=\"font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "director", array()), "html", null, true);
            echo "</span></div>
\t\t<div id=\"m_actor\"><span style=\"font-size: 0.9em;\">Actors : </span><span style=\"font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "actors", array()), "html", null, true);
            echo "</span></div>

\t\t<div id=\"m_time\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "runtime", array()), "html", null, true);
            echo "</div>
\t\t<div id=\"m_year\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "year", array()), "html", null, true);
            echo "/</div>
\t\t<img src=\"../../../";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "poster", array()), "html", null, true);
            echo "\" class=\"m_poster\">
\t\t<div id=\"m_rate\">
\t\t\t<div id=\"note\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "rating", array()), "html", null, true);
            echo "</div>
\t\t\t<div id=\"note_text\">IMDb</div>
\t\t</div>
\t\t<div id=\"rated_stars\">
\t\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t\t<i class=\"fa fa-star\" aria-hidden=\"true\"></i>
\t\t\t<i class=\"fa fa-star-half-o\" aria-hidden=\"true\"></i>
\t\t\t<i class=\"fa fa-star-o\" aria-hidden=\"true\"></i>
\t\t</div>
\t\t<div id=\"more_info\" onclick=\"display_all_infos();\"><i id=\"plus\" class=\"fa fa-plus\" style=\"font-size: 1.4em; top: 5px; position: relative; color: rgba(236, 240, 241,1.0);\" aria-hidden=\"true\"></i> <span id=\"get_more_info\"> Get more infos</span></div>
\t</div>
\t<div id=\"infos_completes\">
\t\t<div id=\"m_plot\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">PLOT</span>
\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "plot", array()), "html", null, true);
            echo "
\t\t</div>
\t\t<div id=\"m_genre\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">GENRE </span>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "genre", array()), "html", null, true);
            echo "</div>
\t\t<div id=\"m_genre\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">RELEASED </span>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "released", array()), "html", null, true);
            echo "</div>
\t\t<div id=\"m_writer\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">WRITER </span>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "writer", array()), "html", null, true);
            echo "</div>
\t\t<div id=\"m_writer\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">ORIGINAL LANGUAGE </span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "language", array()), "html", null, true);
            echo "</div>
\t\t<div id=\"m_onlineto\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">TORRENT Online since </span>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data_film"]) ? $context["data_film"] : null), "datetime", array()), "html", null, true);
            echo "</div>
\t</div>
\t<div id=\"player_content\">
\t\t";
            // line 40
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/azinevideojs/css/video-js.css"), "html", null, true);
            echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/azinevideojs/js/video.min.js"), "html", null, true);
            echo "\"></script>";
            // line 43
            echo "<video id=\"my_video_1\" class=\"video-js vjs-default-skin\" width=\"900px\" height=\"480px\"
\t\t\t   controls preload=\"none\" poster='http://video-js.zencoder.com/oceans-clip.jpg'
\t\t\t   data-setup='{ \"aspectRatio\":\"16:9\", \"playbackRates\": [1, 1.5, 2] }'>
\t\t\t<source src=\"http://vjs.zencdn.net/v/oceans.webm\" type='video/webm' />
\t\t</video>
\t</div>
\t";
        }
        // line 50
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:stream.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 50,  118 => 43,  115 => 41,  110 => 40,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  83 => 29,  66 => 15,  61 => 13,  57 => 12,  53 => 11,  48 => 9,  44 => 8,  40 => 7,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* <div id="content_page">*/
/* 	{% if data_film is defined %}*/
/* 	<div class="movie_infos">*/
/* 		<div id="m_title">{{ data_film.title }}<span id="pegi">-13</span></div>*/
/* 		<div id="m_director"><span style="font-size: 0.8em;">Director : </span><span style="font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);">{{ data_film.director }}</span></div>*/
/* 		<div id="m_actor"><span style="font-size: 0.9em;">Actors : </span><span style="font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);">{{ data_film.actors }}</span></div>*/
/* */
/* 		<div id="m_time">{{ data_film.runtime }}</div>*/
/* 		<div id="m_year">{{ data_film.year }}/</div>*/
/* 		<img src="../../../{{ data_film.poster }}" class="m_poster">*/
/* 		<div id="m_rate">*/
/* 			<div id="note">{{ data_film.rating }}</div>*/
/* 			<div id="note_text">IMDb</div>*/
/* 		</div>*/
/* 		<div id="rated_stars">*/
/* 			<i class="fa fa-star" aria-hidden="true"></i>*/
/* 			<i class="fa fa-star" aria-hidden="true"></i>*/
/* 			<i class="fa fa-star" aria-hidden="true"></i>*/
/* 			<i class="fa fa-star-half-o" aria-hidden="true"></i>*/
/* 			<i class="fa fa-star-o" aria-hidden="true"></i>*/
/* 		</div>*/
/* 		<div id="more_info" onclick="display_all_infos();"><i id="plus" class="fa fa-plus" style="font-size: 1.4em; top: 5px; position: relative; color: rgba(236, 240, 241,1.0);" aria-hidden="true"></i> <span id="get_more_info"> Get more infos</span></div>*/
/* 	</div>*/
/* 	<div id="infos_completes">*/
/* 		<div id="m_plot"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">PLOT</span>*/
/* 			{{ data_film.plot }}*/
/* 		</div>*/
/* 		<div id="m_genre"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">GENRE </span>{{ data_film.genre }}</div>*/
/* 		<div id="m_genre"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">RELEASED </span>{{ data_film.released }}</div>*/
/* 		<div id="m_writer"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">WRITER </span>{{ data_film.writer }}</div>*/
/* 		<div id="m_writer"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">ORIGINAL LANGUAGE </span>{{ data_film.language }}</div>*/
/* 		<div id="m_onlineto"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">TORRENT Online since </span>{{ data_film.datetime }}</div>*/
/* 	</div>*/
/* 	<div id="player_content">*/
/* 		{#Deplacer le link et le script au bonne endroit#}*/
/* 		{#----------#}*/
/* 		<link rel="stylesheet" type="text/css" href="{{ asset('bundles/azinevideojs/css/video-js.css') }}" />*/
/* 		<script type="text/javascript" src="{{ asset('bundles/azinevideojs/js/video.min.js') }}"></script>*/
/* 		{#----------#}*/
/* 		<video id="my_video_1" class="video-js vjs-default-skin" width="900px" height="480px"*/
/* 			   controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg'*/
/* 			   data-setup='{ "aspectRatio":"16:9", "playbackRates": [1, 1.5, 2] }'>*/
/* 			<source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />*/
/* 		</video>*/
/* 	</div>*/
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/

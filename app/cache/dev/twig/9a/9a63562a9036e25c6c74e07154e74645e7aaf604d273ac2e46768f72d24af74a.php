<?php

/* CoreBundle:HP:stream.html.twig */
class __TwigTemplate_734e7c697517d594c2d199039d04a12083c2f1b4ad9caba49a0c33ee883ea420 extends Twig_Template
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
        $__internal_331b2f29e3e9f277cd3bfda87df45ff28d24098cc506f6dcff8b2495b00317f4 = $this->env->getExtension("native_profiler");
        $__internal_331b2f29e3e9f277cd3bfda87df45ff28d24098cc506f6dcff8b2495b00317f4->enter($__internal_331b2f29e3e9f277cd3bfda87df45ff28d24098cc506f6dcff8b2495b00317f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:stream.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_331b2f29e3e9f277cd3bfda87df45ff28d24098cc506f6dcff8b2495b00317f4->leave($__internal_331b2f29e3e9f277cd3bfda87df45ff28d24098cc506f6dcff8b2495b00317f4_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d1b88e79d344d274a3828d82e652d07b31b832095e76cd3a06ddd55771b6f714 = $this->env->getExtension("native_profiler");
        $__internal_d1b88e79d344d274a3828d82e652d07b31b832095e76cd3a06ddd55771b6f714->enter($__internal_d1b88e79d344d274a3828d82e652d07b31b832095e76cd3a06ddd55771b6f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
<div id=\"content_page\">
\t<div class=\"movie_infos\">
\t\t<div id=\"m_title\">Ninja Turtle<span id=\"pegi\">-13</span></div>
\t\t<div id=\"m_director\"><span style=\"font-size: 0.8em;\">Director : </span><span style=\"font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);\">Jannis Niewöhner, Maria Ehrich</span></div>
\t\t<div id=\"m_actor\"><span style=\"font-size: 0.9em;\">Actors : </span><span style=\"font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);\">Jannis Niewöhner, Maria Ehrich, Laura Berlin</span></div>

\t\t<div id=\"m_time\">146 min</div>
\t\t<div id=\"m_year\">2016 /</div>
\t\t<img src=\"http://images.fan-de-cinema.com/affiches/large/65/67886.jpg\" class=\"m_poster\">
\t\t<div id=\"m_rate\">
\t\t\t<div id=\"note\">5.6</div>
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
\t\tJojo Braconnier ne peut plus supporter sa femme alcoolique, mauvaise et littéralement invivable. Il découvre à la télévision un reportage sur Maître Jacquard, un avocat brillant qui vient d'obtenir son vingt-cinquième acquittement.
\t\tJojo le rencontre et lui avoue le meurtre de sa femme, un crime qu'il n'a pas commis. De façon très adroite, il obtient des explications de l'avocat sur la façon dont il aurait dû agir pour obtenir les circonstances atténuantes, voire même l'acquittement. De retour chez lui, Jojo suit à la lettre les \\\"recommandations\\\" de Maître Jacquard et tue son épouse.
\t\t</div>
\t\t<div id=\"m_genre\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">GENRE </span>Action, Adventure, Crime
\t\t</div>
\t\t<div id=\"m_genre\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">RELEASED </span>05 Aug 2016
\t\t</div>
\t\t<div id=\"m_writer\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">WRITER </span>Andrew Jay Cohen, Brendan O'Brien Andrew Jay Cohen, Brendan O'Brien
\t\t</div>
\t\t<div id=\"m_writer\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">ORIGINAL LANGUAGE </span> English, Japanese, Spanish
\t\t</div>
\t\t<div id=\"m_onlineto\"><span style=\"font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);\">TORRENT Online since </span> 2016/09/17 19:32:11
\t\t</div>
\t</div>
\t<div id=\"player_content\">
\t\t";
        // line 45
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/azinevideojs/css/video-js.css"), "html", null, true);
        echo "\" />
\t\t<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/azinevideojs/js/video.min.js"), "html", null, true);
        echo "\"></script>";
        // line 48
        echo "<video id=\"my_video_1\" class=\"video-js vjs-default-skin\" width=\"800px\" height=\"400px\"
\t\t\t   controls preload=\"none\" poster='http://video-js.zencoder.com/oceans-clip.jpg'
\t\t\t   data-setup='{ \"aspectRatio\":\"16:9\", \"playbackRates\": [1, 1.5, 2] }'>
\t\t\t<source src=\"http://vjs.zencdn.net/v/oceans.webm\" type='video/webm' />
\t\t</video>
\t</div>
</div>

";
        
        $__internal_d1b88e79d344d274a3828d82e652d07b31b832095e76cd3a06ddd55771b6f714->leave($__internal_d1b88e79d344d274a3828d82e652d07b31b832095e76cd3a06ddd55771b6f714_prof);

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
        return array (  90 => 48,  87 => 46,  82 => 45,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* <div id="content_page">*/
/* 	<div class="movie_infos">*/
/* 		<div id="m_title">Ninja Turtle<span id="pegi">-13</span></div>*/
/* 		<div id="m_director"><span style="font-size: 0.8em;">Director : </span><span style="font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);">Jannis Niewöhner, Maria Ehrich</span></div>*/
/* 		<div id="m_actor"><span style="font-size: 0.9em;">Actors : </span><span style="font-style: bold; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.7);">Jannis Niewöhner, Maria Ehrich, Laura Berlin</span></div>*/
/* */
/* 		<div id="m_time">146 min</div>*/
/* 		<div id="m_year">2016 /</div>*/
/* 		<img src="http://images.fan-de-cinema.com/affiches/large/65/67886.jpg" class="m_poster">*/
/* 		<div id="m_rate">*/
/* 			<div id="note">5.6</div>*/
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
/* 		Jojo Braconnier ne peut plus supporter sa femme alcoolique, mauvaise et littéralement invivable. Il découvre à la télévision un reportage sur Maître Jacquard, un avocat brillant qui vient d'obtenir son vingt-cinquième acquittement.*/
/* 		Jojo le rencontre et lui avoue le meurtre de sa femme, un crime qu'il n'a pas commis. De façon très adroite, il obtient des explications de l'avocat sur la façon dont il aurait dû agir pour obtenir les circonstances atténuantes, voire même l'acquittement. De retour chez lui, Jojo suit à la lettre les \"recommandations\" de Maître Jacquard et tue son épouse.*/
/* 		</div>*/
/* 		<div id="m_genre"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">GENRE </span>Action, Adventure, Crime*/
/* 		</div>*/
/* 		<div id="m_genre"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">RELEASED </span>05 Aug 2016*/
/* 		</div>*/
/* 		<div id="m_writer"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">WRITER </span>Andrew Jay Cohen, Brendan O'Brien Andrew Jay Cohen, Brendan O'Brien*/
/* 		</div>*/
/* 		<div id="m_writer"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">ORIGINAL LANGUAGE </span> English, Japanese, Spanish*/
/* 		</div>*/
/* 		<div id="m_onlineto"><span style="font-size: 1.2em; color: rgba(46, 204, 113,1.0); text-shadow: 1px 1px 1px rgba(29, 104, 46, 0.9);">TORRENT Online since </span> 2016/09/17 19:32:11*/
/* 		</div>*/
/* 	</div>*/
/* 	<div id="player_content">*/
/* 		{#Deplacer le link et le script au bonne endroit#}*/
/* 		{#----------#}*/
/* 		<link rel="stylesheet" type="text/css" href="{{ asset('bundles/azinevideojs/css/video-js.css') }}" />*/
/* 		<script type="text/javascript" src="{{ asset('bundles/azinevideojs/js/video.min.js') }}"></script>*/
/* 		{#----------#}*/
/* 		<video id="my_video_1" class="video-js vjs-default-skin" width="800px" height="400px"*/
/* 			   controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg'*/
/* 			   data-setup='{ "aspectRatio":"16:9", "playbackRates": [1, 1.5, 2] }'>*/
/* 			<source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm' />*/
/* 		</video>*/
/* 	</div>*/
/* </div>*/
/* */
/* {% endblock %}*/

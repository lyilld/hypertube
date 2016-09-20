<?php

/* CoreBundle:HP:index.html.twig */
class __TwigTemplate_17e7cf08f06129aeaf6ebcb27e0229fb1c5281854aff3031325612d143c877c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:HP:index.html.twig", 1);
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
        $__internal_5e7910c695c19b9d8b95cf54177cff090977a6d7c900913de9fff9db81078996 = $this->env->getExtension("native_profiler");
        $__internal_5e7910c695c19b9d8b95cf54177cff090977a6d7c900913de9fff9db81078996->enter($__internal_5e7910c695c19b9d8b95cf54177cff090977a6d7c900913de9fff9db81078996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:HP:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7910c695c19b9d8b95cf54177cff090977a6d7c900913de9fff9db81078996->leave($__internal_5e7910c695c19b9d8b95cf54177cff090977a6d7c900913de9fff9db81078996_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_48c869e08d7ceab352ddb0151c7947ece4584da6641c49565d309ff98529aa24 = $this->env->getExtension("native_profiler");
        $__internal_48c869e08d7ceab352ddb0151c7947ece4584da6641c49565d309ff98529aa24->enter($__internal_48c869e08d7ceab352ddb0151c7947ece4584da6641c49565d309ff98529aa24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div id=\"container\">
\t<span id=\"sl_play\" class=\"sl_command\">&nbsp;</span>
\t<span id=\"sl_pause\" class=\"sl_command\">&nbsp;</span>
\t<span id=\"sl_i1\" class=\"sl_command sl_i\">&nbsp;</span>
\t<span id=\"sl_i2\" class=\"sl_command sl_i\">&nbsp;</span>
\t<span id=\"sl_i3\" class=\"sl_command sl_i\">&nbsp;</span>
\t<span id=\"sl_i4\" class=\"sl_command sl_i\">&nbsp;</span>
\t<section id=\"slideshow\">
\t
\t\t<a class=\"commands prev commands1\" href=\"#sl_i4\" >&lt;</a>
\t\t<a class=\"commands next commands1\" href=\"#sl_i2\" >&gt;</a>
\t\t<a class=\"commands prev commands2\" href=\"#sl_i1\" >&lt;</a>
\t\t<a class=\"commands next commands2\" href=\"#sl_i3\" >&gt;</a>
\t\t<a class=\"commands prev commands3\" href=\"#sl_i2\" >&lt;</a>
\t\t<a class=\"commands next commands3\" href=\"#sl_i4\" >&gt;</a>
\t\t<a class=\"commands prev commands4\" href=\"#sl_i3\" >&lt;</a>
\t\t<a class=\"commands next commands4\" href=\"#sl_i1\" >&gt;</a>
\t\t
\t\t<a class=\"play_commands pause\" href=\"#sl_pause\" title=\"Maintain paused\">Pause</a>
\t\t<a class=\"play_commands play\" href=\"#sl_play\" title=\"Play the animation\">Play</a>
\t\t
\t\t<div class=\"container\">
\t\t\t<div class=\"c_slider\"></div>
\t\t\t<div class=\"slider\">
\t\t\t\t<figure>
\t\t\t\t\t<img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/affiche_1.jpg"), "html", null, true);
        echo "\"  width=\"850\" height=\"420\" />
\t\t\t\t\t
\t\t\t\t</figure><!--
\t\t\t\t--><figure>
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/affiche_2.jpg"), "html", null, true);
        echo "\"  width=\"850\" height=\"420\" />
\t\t\t\t\t
\t\t\t\t</figure><!--
\t\t\t\t--><figure>
\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/affiche_3.jpg"), "html", null, true);
        echo "\"  width=\"850\" height=\"420\" />
\t\t\t\t\t
\t\t\t\t</figure><!--
\t\t\t\t--><figure>
\t\t\t\t\t<img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/affiche_4.jpg"), "html", null, true);
        echo "\"  width=\"850\" height=\"420\" />
\t\t\t\t\t
\t\t\t\t</figure>
\t\t\t</div>
\t\t</div>\t\t
\t\t<span id=\"timeline\"></span>
\t\t<ul class=\"dots_commands\"><!--
\t\t\t--><li><a title=\"Show slide 1\" href=\"#sl_i1\">Slide 1</a></li><!--
\t\t\t--><li><a title=\"Show slide 2\" href=\"#sl_i2\">Slide 2</a></li><!--
\t\t\t--><li><a title=\"Show slide 3\" href=\"#sl_i3\">Slide 3</a></li><!--
\t\t\t--><li><a title=\"Show slide 4\" href=\"#sl_i4\">Slide 4</a></li>
\t\t</ul>
\t</section>
<img id=\"image_slider\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/black-wallpaper-10.jpg"), "html", null, true);
        echo "\">
</div>
<div id=\"content_page\">
\t\t\t<div id=\"last_stream\" class=\"div_stream\">
\t\t\t\t<div class=\"home_div_title\"><span class=\"home_div_title_bold\">LAST </span>streaming add</div>
\t\t\t\t<div class=\"categorie_film\">
\t\t\t\t\t<div class=\"categorie_header\">Movies</div>
\t\t\t\t\t<div class=\"suggest_film\">
\t\t\t\t\t3 filles en cavale [VF]
\t\t\t\t\t<!-- <img src=\"http://play.m0k.org/images/william/brice/BRI-Poster.jpg\" style=\"width: 50px; height: 80px; position: relative;\"> -->
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"suggest_film\">3 Soeurs unies par le mariage [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">L'incroyable histoire de la télé-réalité - Les années Loft Story [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Le garde-champêtre mène l'enquête [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Au bas de l'échelle (TV) [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Quarry S1 E1 [VOSTFR]</div>
\t\t\t\t\t<div class=\"suggest_film\">Le garde-champêtre mène l'enquête [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Au bas de l'échelle (TV) [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Quarry S1 E1 [VOSTFR]</div>
\t\t\t\t\t<div class=\"suggest_film\">3 Soeurs unies par le mariage [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">superman</div>
\t\t\t\t\t<div class=\"suggest_film\">L'incroyable histoire de la télé-réalité - Les années Loft Story [VF]</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_serie\">
\t\t\t\t\t<div class=\"categorie_header\">Series</div>
\t\t\t\t\t<div class=\"suggest_film\">Au bas de l'échelle (TV) [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Quarry S1 E1 [VOSTFR]</div>
\t\t\t\t\t<div class=\"suggest_film\">Le garde-champêtre mène l'enquête [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Au bas de l'échelle (TV) [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Quarry S1 E1 [VOSTFR]</div>
\t\t\t\t\t<div class=\"suggest_film\">3 Soeurs unies par le mariage [VF]</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_anim\">
\t\t\t\t\t<div class=\"categorie_header\">Shonen</div>
\t\t\t\t\t<div class=\"suggest_film\">Le garde-champêtre mène l'enquête [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Au bas de l'échelle (TV) [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Quarry S1 E1 [VOSTFR]</div>
\t\t\t\t\t<div class=\"suggest_film\">Le garde-champêtre mène l'enquête [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Au bas de l'échelle (TV) [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Quarry S1 E1 [VOSTFR]</div>
\t\t\t\t\t<div class=\"suggest_film\">3 Soeurs unies par le mariage [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">superman</div>
\t\t\t\t\t<div class=\"suggest_film\">L'incroyable histoire de la télé-réalité - Les années Loft Story [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Le garde-champêtre mène l'enquête [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Au bas de l'échelle (TV) [VF]</div>
\t\t\t\t\t<div class=\"suggest_film\">Quarry S1 E1 [VOSTFR]</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"best_week\" class=\"div_stream\">
\t\t\t\t<div class=\"home_div_title\"><span class=\"home_div_title_bold\">BEST</span> streaming of the week</div>
\t\t\t\t<div class=\"categorie_film\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Movies</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_serie\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Series</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_anim\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Shonen</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div id=\"best_week\" class=\"div_stream\">
\t\t\t\t<div class=\"home_div_title\"><span class=\"home_div_title_bold\">MOST</span> popular stream</div>
\t\t\t\t<div class=\"categorie_film\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Movies</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_serie\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Series</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_anim\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Shonen</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">Au bas de l'échelle (TV) [VF]</span><span class=\"suggest_film_view\">9495</span></div>
\t\t\t\t</div>
\t\t\t</div>

</div>
";
        
        $__internal_48c869e08d7ceab352ddb0151c7947ece4584da6641c49565d309ff98529aa24->leave($__internal_48c869e08d7ceab352ddb0151c7947ece4584da6641c49565d309ff98529aa24_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:HP:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 53,  88 => 40,  81 => 36,  74 => 32,  67 => 28,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CoreBundle::layout.html.twig" %}*/
/* {% block content %}*/
/* <div id="container">*/
/* 	<span id="sl_play" class="sl_command">&nbsp;</span>*/
/* 	<span id="sl_pause" class="sl_command">&nbsp;</span>*/
/* 	<span id="sl_i1" class="sl_command sl_i">&nbsp;</span>*/
/* 	<span id="sl_i2" class="sl_command sl_i">&nbsp;</span>*/
/* 	<span id="sl_i3" class="sl_command sl_i">&nbsp;</span>*/
/* 	<span id="sl_i4" class="sl_command sl_i">&nbsp;</span>*/
/* 	<section id="slideshow">*/
/* 	*/
/* 		<a class="commands prev commands1" href="#sl_i4" >&lt;</a>*/
/* 		<a class="commands next commands1" href="#sl_i2" >&gt;</a>*/
/* 		<a class="commands prev commands2" href="#sl_i1" >&lt;</a>*/
/* 		<a class="commands next commands2" href="#sl_i3" >&gt;</a>*/
/* 		<a class="commands prev commands3" href="#sl_i2" >&lt;</a>*/
/* 		<a class="commands next commands3" href="#sl_i4" >&gt;</a>*/
/* 		<a class="commands prev commands4" href="#sl_i3" >&lt;</a>*/
/* 		<a class="commands next commands4" href="#sl_i1" >&gt;</a>*/
/* 		*/
/* 		<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>*/
/* 		<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>*/
/* 		*/
/* 		<div class="container">*/
/* 			<div class="c_slider"></div>*/
/* 			<div class="slider">*/
/* 				<figure>*/
/* 					<img src="{{ asset('/bundles/IMAGE/affiche_1.jpg') }}"  width="850" height="420" />*/
/* 					*/
/* 				</figure><!--*/
/* 				--><figure>*/
/* 					<img src="{{ asset('/bundles/IMAGE/affiche_2.jpg') }}"  width="850" height="420" />*/
/* 					*/
/* 				</figure><!--*/
/* 				--><figure>*/
/* 					<img src="{{ asset('/bundles/IMAGE/affiche_3.jpg') }}"  width="850" height="420" />*/
/* 					*/
/* 				</figure><!--*/
/* 				--><figure>*/
/* 					<img src="{{ asset('/bundles/IMAGE/affiche_4.jpg') }}"  width="850" height="420" />*/
/* 					*/
/* 				</figure>*/
/* 			</div>*/
/* 		</div>		*/
/* 		<span id="timeline"></span>*/
/* 		<ul class="dots_commands"><!--*/
/* 			--><li><a title="Show slide 1" href="#sl_i1">Slide 1</a></li><!--*/
/* 			--><li><a title="Show slide 2" href="#sl_i2">Slide 2</a></li><!--*/
/* 			--><li><a title="Show slide 3" href="#sl_i3">Slide 3</a></li><!--*/
/* 			--><li><a title="Show slide 4" href="#sl_i4">Slide 4</a></li>*/
/* 		</ul>*/
/* 	</section>*/
/* <img id="image_slider" src="{{ asset('/bundles/IMAGE/black-wallpaper-10.jpg') }}">*/
/* </div>*/
/* <div id="content_page">*/
/* 			<div id="last_stream" class="div_stream">*/
/* 				<div class="home_div_title"><span class="home_div_title_bold">LAST </span>streaming add</div>*/
/* 				<div class="categorie_film">*/
/* 					<div class="categorie_header">Movies</div>*/
/* 					<div class="suggest_film">*/
/* 					3 filles en cavale [VF]*/
/* 					<!-- <img src="http://play.m0k.org/images/william/brice/BRI-Poster.jpg" style="width: 50px; height: 80px; position: relative;"> -->*/
/* 					</div>*/
/* 					<div class="suggest_film">3 Soeurs unies par le mariage [VF]</div>*/
/* 					<div class="suggest_film">L'incroyable histoire de la télé-réalité - Les années Loft Story [VF]</div>*/
/* 					<div class="suggest_film">Le garde-champêtre mène l'enquête [VF]</div>*/
/* 					<div class="suggest_film">Au bas de l'échelle (TV) [VF]</div>*/
/* 					<div class="suggest_film">Quarry S1 E1 [VOSTFR]</div>*/
/* 					<div class="suggest_film">Le garde-champêtre mène l'enquête [VF]</div>*/
/* 					<div class="suggest_film">Au bas de l'échelle (TV) [VF]</div>*/
/* 					<div class="suggest_film">Quarry S1 E1 [VOSTFR]</div>*/
/* 					<div class="suggest_film">3 Soeurs unies par le mariage [VF]</div>*/
/* 					<div class="suggest_film">superman</div>*/
/* 					<div class="suggest_film">L'incroyable histoire de la télé-réalité - Les années Loft Story [VF]</div>*/
/* 				</div>*/
/* 				<div class="categorie_serie">*/
/* 					<div class="categorie_header">Series</div>*/
/* 					<div class="suggest_film">Au bas de l'échelle (TV) [VF]</div>*/
/* 					<div class="suggest_film">Quarry S1 E1 [VOSTFR]</div>*/
/* 					<div class="suggest_film">Le garde-champêtre mène l'enquête [VF]</div>*/
/* 					<div class="suggest_film">Au bas de l'échelle (TV) [VF]</div>*/
/* 					<div class="suggest_film">Quarry S1 E1 [VOSTFR]</div>*/
/* 					<div class="suggest_film">3 Soeurs unies par le mariage [VF]</div>*/
/* 				</div>*/
/* 				<div class="categorie_anim">*/
/* 					<div class="categorie_header">Shonen</div>*/
/* 					<div class="suggest_film">Le garde-champêtre mène l'enquête [VF]</div>*/
/* 					<div class="suggest_film">Au bas de l'échelle (TV) [VF]</div>*/
/* 					<div class="suggest_film">Quarry S1 E1 [VOSTFR]</div>*/
/* 					<div class="suggest_film">Le garde-champêtre mène l'enquête [VF]</div>*/
/* 					<div class="suggest_film">Au bas de l'échelle (TV) [VF]</div>*/
/* 					<div class="suggest_film">Quarry S1 E1 [VOSTFR]</div>*/
/* 					<div class="suggest_film">3 Soeurs unies par le mariage [VF]</div>*/
/* 					<div class="suggest_film">superman</div>*/
/* 					<div class="suggest_film">L'incroyable histoire de la télé-réalité - Les années Loft Story [VF]</div>*/
/* 					<div class="suggest_film">Le garde-champêtre mène l'enquête [VF]</div>*/
/* 					<div class="suggest_film">Au bas de l'échelle (TV) [VF]</div>*/
/* 					<div class="suggest_film">Quarry S1 E1 [VOSTFR]</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="best_week" class="div_stream">*/
/* 				<div class="home_div_title"><span class="home_div_title_bold">BEST</span> streaming of the week</div>*/
/* 				<div class="categorie_film">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Movies</span><span class="categorie_header_view_view">views</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 				</div>*/
/* 				<div class="categorie_serie">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Series</span><span class="categorie_header_view_view">views</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 				</div>*/
/* 				<div class="categorie_anim">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Shonen</span><span class="categorie_header_view_view">views</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div id="best_week" class="div_stream">*/
/* 				<div class="home_div_title"><span class="home_div_title_bold">MOST</span> popular stream</div>*/
/* 				<div class="categorie_film">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Movies</span><span class="categorie_header_view_view">views</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 				</div>*/
/* 				<div class="categorie_serie">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Series</span><span class="categorie_header_view_view">views</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 				</div>*/
/* 				<div class="categorie_anim">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Shonen</span><span class="categorie_header_view_view">views</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */

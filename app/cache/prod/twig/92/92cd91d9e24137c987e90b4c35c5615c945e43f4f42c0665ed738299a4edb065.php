<?php

/* CoreBundle:HP:index.html.twig */
class __TwigTemplate_b6bb94d895ec523c19c003c5b2bee32a889a2b58a022965e5966fd3007a84922 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
\t\t\t\t\t";
        // line 60
        if (array_key_exists("latestFilm", $context)) {
            // line 61
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latestFilm"]) ? $context["latestFilm"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 62
                echo "\t\t\t\t\t\t\t<div class=\"suggest_film\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "title", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t\t\t\t\t";
        }
        // line 65
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_serie\">
\t\t\t\t\t<div class=\"categorie_header\">Series</div>
\t\t\t\t\t<div class=\"categorie_serie\">
\t\t\t\t\t\t";
        // line 69
        if (array_key_exists("latestSerie", $context)) {
            // line 70
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["latestSerie"]) ? $context["latestSerie"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 71
                echo "\t\t\t\t\t\t\t\t<div class=\"suggest_film\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "title", array(), "array"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t\t\t\t\t";
        }
        // line 74
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 79
        echo "\t\t\t\t";
        // line 80
        echo "\t\t\t\t";
        // line 81
        echo "\t\t\t\t\t";
        // line 82
        echo "\t\t\t\t\t";
        // line 83
        echo "\t\t\t\t\t";
        // line 84
        echo "\t\t\t\t\t";
        // line 85
        echo "\t\t\t\t\t";
        // line 86
        echo "\t\t\t\t";
        // line 87
        echo "\t\t\t\t";
        // line 88
        echo "\t\t\t\t\t";
        // line 89
        echo "\t\t\t\t\t";
        // line 90
        echo "\t\t\t\t";
        // line 91
        echo "\t\t\t";
        // line 92
        echo "
\t\t\t<div id=\"best_week\" class=\"div_stream\">
\t\t\t\t<div class=\"home_div_title\"><span class=\"home_div_title_bold\">MOST</span> popular stream</div>
\t\t\t\t<div class=\"categorie_film\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Movies</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t";
        // line 97
        if (array_key_exists("mostViewFilm", $context)) {
            // line 98
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mostViewFilm"]) ? $context["mostViewFilm"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 99
                echo "\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "title", array(), "array"), "html", null, true);
                echo "</span><span class=\"suggest_film_view\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "view", array(), "array"), "html", null, true);
                echo "</span></div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t\t\t\t\t";
        }
        // line 102
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"categorie_serie\">
\t\t\t\t\t<div class=\"categorie_header_view\"><span class=\"categorie_header_view_name\">Series</span><span class=\"categorie_header_view_view\">views</span></div>
\t\t\t\t\t";
        // line 105
        if (array_key_exists("mostViewSerie", $context)) {
            // line 106
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mostViewSerie"]) ? $context["mostViewSerie"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 107
                echo "\t\t\t\t\t\t\t<div class=\"suggest_film2\"><span class=\"suggest_film_name\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "title", array(), "array"), "html", null, true);
                echo "</span><span class=\"suggest_film_view\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "view", array(), "array"), "html", null, true);
                echo "</span></div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t";
        }
        // line 110
        echo "\t\t\t\t</div>
\t\t\t</div>

</div>
";
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
        return array (  235 => 110,  232 => 109,  221 => 107,  216 => 106,  214 => 105,  209 => 102,  206 => 101,  195 => 99,  190 => 98,  188 => 97,  181 => 92,  179 => 91,  177 => 90,  175 => 89,  173 => 88,  171 => 87,  169 => 86,  167 => 85,  165 => 84,  163 => 83,  161 => 82,  159 => 81,  157 => 80,  155 => 79,  149 => 74,  146 => 73,  137 => 71,  132 => 70,  130 => 69,  124 => 65,  121 => 64,  112 => 62,  107 => 61,  105 => 60,  95 => 53,  79 => 40,  72 => 36,  65 => 32,  58 => 28,  31 => 3,  28 => 2,  11 => 1,);
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
/* 					{% if latestFilm is defined %}*/
/* 						{% for elem in latestFilm  %}*/
/* 							<div class="suggest_film">{{ elem['title'] }}</div>*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div class="categorie_serie">*/
/* 					<div class="categorie_header">Series</div>*/
/* 					<div class="categorie_serie">*/
/* 						{% if latestSerie is defined %}*/
/* 							{% for elem in latestSerie  %}*/
/* 								<div class="suggest_film">{{ elem['title'] }}</div>*/
/* 							{% endfor %}*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			{#<div id="best_week" class="div_stream">#}*/
/* 				{#<div class="home_div_title"><span class="home_div_title_bold">BEST</span> streaming of the week</div>#}*/
/* 				{#<div class="categorie_film">#}*/
/* 					{#<div class="categorie_header_view"><span class="categorie_header_view_name">Movies</span><span class="categorie_header_view_view">views</span></div>#}*/
/* 					{#<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>#}*/
/* 					{#<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>#}*/
/* 					{#<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>#}*/
/* 					{#<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>#}*/
/* 				{#</div>#}*/
/* 				{#<div class="categorie_serie">#}*/
/* 					{#<div class="categorie_header_view"><span class="categorie_header_view_name">Series</span><span class="categorie_header_view_view">views</span></div>#}*/
/* 					{#<div class="suggest_film2"><span class="suggest_film_name">Au bas de l'échelle (TV) [VF]</span><span class="suggest_film_view">9495</span></div>#}*/
/* 				{#</div>#}*/
/* 			{#</div>#}*/
/* */
/* 			<div id="best_week" class="div_stream">*/
/* 				<div class="home_div_title"><span class="home_div_title_bold">MOST</span> popular stream</div>*/
/* 				<div class="categorie_film">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Movies</span><span class="categorie_header_view_view">views</span></div>*/
/* 					{% if mostViewFilm is defined %}*/
/* 						{% for elem in mostViewFilm %}*/
/* 					<div class="suggest_film2"><span class="suggest_film_name">{{ elem['title'] }}</span><span class="suggest_film_view">{{ elem['view'] }}</span></div>*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 				<div class="categorie_serie">*/
/* 					<div class="categorie_header_view"><span class="categorie_header_view_name">Series</span><span class="categorie_header_view_view">views</span></div>*/
/* 					{% if mostViewSerie is defined %}*/
/* 						{% for elem in mostViewSerie %}*/
/* 							<div class="suggest_film2"><span class="suggest_film_name">{{ elem['title'] }}</span><span class="suggest_film_view">{{ elem['view'] }}</span></div>*/
/* 						{% endfor %}*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */

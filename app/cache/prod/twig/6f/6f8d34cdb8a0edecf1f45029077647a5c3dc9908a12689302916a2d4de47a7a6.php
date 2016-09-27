<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b344da730c34f4e7c69d8940710e53b78772287c3f82ac541270612309ae3096 extends Twig_Template
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
        // line 1
        echo "<html>
\t<head>
\t\t<meta charset=\"utf-8\">
    \t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    \t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/layout.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/pagination.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/sky-forms.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/font-awesome.css"), "html", null, true);
        echo "\">
        <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
    \t<script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/utils.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/autocomplete.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/OMDB.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/jquery.particleground.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/HTLogo.png"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/base/jquery-ui.css\">
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.1.0.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js\"></script>
    \t<title>HYPERTube</title>
    </head>
    <body>
    \t<div id=\"header\">
    \t\t<div id=\"search_bar_bundle\">
                <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("core_homepage");
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/HyperTube_logo.png"), "html", null, true);
        echo "\"></a>
                <form>
                    <button id=\"search_icon\" type=\"submit\"><img  style=\"position: absolute; top: 5%; width: 80%; height: 80%; left: 5%;\"src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/search_loupe.png"), "html", null, true);
        echo "\"></button>
                    <input type=\"text\" id=\"search_bar\" placeholder=\"search a movie / series / manga\"  />
                </form>
    \t\t</div>
    \t\t<div id=\"menu_bar\">
    \t\t\t<div id=\"menu_container\">
    \t\t\t\t<div id=\"selector\"></div>
    \t\t\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("core_homepage");
        echo "\"><img id=\"home_icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/burger_icon.png"), "html", null, true);
        echo "\"></a>
\t    \t\t\t<a id=\"menu_1\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("core_homepage");
        echo "\"><span class=\"menu_span_active\">HOME</span></a>
\t    \t\t\t<a id=\"menu_2\" href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("core_movie");
        echo "\"><span class=\"menu_span_txt\" >MOVIES</span></a>
\t    \t\t\t<a id=\"menu_3\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("core_serie");
        echo "\"><span class=\"menu_span_txt\">SERIE</span></a>
                    ";
        // line 40
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 41
            echo "\t    \t\t\t<a><img class='icon_menu' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/Disconnect.png"), "html", null, true);
            echo "\"></a>
                    ";
        } else {
            // line 43
            echo "                    <a><img class='icon_menu' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/Connect.png"), "html", null, true);
            echo "\"></a>
                    ";
        }
        // line 45
        echo "                    <img id=\"babar\" onclick=\"display_profil_menu();\" class=\"icon_menu\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/ProPlus.png"), "html", null, true);
        echo "\">
\t    \t\t\t<div id=\"profil_menu\">
\t    \t\t\t\t<div id=\"green_bar_div\" style=\"position: absolute; height: 6px; top: 0px; width: 100%; background-color: rgba(46, 204, 113,1.0);\"></div>
                        <div id=\"green_bar_div\" style=\"position: absolute; right: 0px; height: 50px; width:50px; background-color: rgba(46, 204, 113,1.0); top: -50px; \"></div>
\t\t\t\t\t\t";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 50
            echo "\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><span>My Profil</span></a>
                        </div>
\t\t\t\t\t\t";
        }
        // line 54
        echo "\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <span>Friends</span>
                        </div>
\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <span >Other Profil</span>
                        </div>
\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <span>Settings</span>
                        </div>

                        <div id=\"div_profil_menu\">
                            <div style=\"text-shadow: 1px 2px #95a5a6; color: #2ecc71; font-family: geo;\">&diams;
                            <div style=\"box-shadow: 0px 2px 2px 0px #95a5a6; border: 2px solid #2ecc71; width: 70px; position: relative; top: -20px; left: 10px;\"></div>
                            <div style=\"box-shadow: 0px 2px 2px 0px #95a5a6; border: 2px solid #2ecc71; width: 70px; position: relative; top: -24px; left: 120px;\"></div>
                            </div>

                        </div>

\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <span style=\"font-style: italic;\">Switch Account</span>
                        </div>
\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <span style=\"color: rgba(30, 30, 30, 1);\">or</span>
                        </div>
\t\t\t\t\t\t";
        // line 78
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 79
            echo "\t\t    \t\t\t<div id=\"div_profil_menu\">
                            <span onclick=\"display_login();\" style=\"font-style: italic;\">Log-In</span>
                        </div>
\t\t\t\t\t\t";
        } else {
            // line 83
            echo "\t\t\t\t\t\t\t<div id=\"div_profil_menu\">
\t\t\t\t\t\t\t\t\t\t<a style=\"font-style: italic;\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutUrl(), "html", null, true);
            echo "\">Logout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 87
        echo "\t    \t\t\t</div>
\t    \t\t</div>
    \t\t</div>
    \t</div>
\t\t";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "         <div id=\"footer\" style=\"position: relative; width: 100%; height: 100px; background-color: rgb(30,30,30); margin-top: 50px;\"></div>
        <div id=\"background\"></div>
        <script type='text/javascript' src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/pagination.js"), "html", null, true);
        echo "\"></script>

    </body>
<html>
<script>

    // Si tu veux pimper le truc voici le lien du tuto =>
    // https://openclassrooms.com/courses/decouvrez-la-puissance-de-jquery-ui/l-autocompletion-1
    // Documentation officiel => http://api.jqueryui.com/autocomplete/
    // Tu peux ajouter des images ou autre truc !

    var liste = new Array();
    ";
        // line 107
        if (array_key_exists("data_search", $context)) {
            // line 108
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_search"]) ? $context["data_search"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["elem"]) {
                // line 109
                echo "        liste.push(\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["elem"], "title", array()), "html", null, true);
                echo "\");
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "    ";
        }
        // line 112
        echo "    
    \$('#search_bar').autocomplete({
        source : liste,
        minLength : 3

   });

</script>";
    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        // line 92
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 92,  246 => 91,  235 => 112,  232 => 111,  223 => 109,  218 => 108,  216 => 107,  201 => 95,  197 => 93,  195 => 91,  189 => 87,  183 => 84,  180 => 83,  174 => 79,  172 => 78,  146 => 54,  140 => 51,  137 => 50,  135 => 49,  127 => 45,  121 => 43,  115 => 41,  113 => 40,  109 => 39,  105 => 38,  101 => 37,  95 => 36,  85 => 29,  78 => 27,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  43 => 10,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  20 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/*     	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     	<link rel="stylesheet" href="{{ asset('/bundles/CSS/layout.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/pagination.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/sky-forms.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/styles.css') }}">*/
/*         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/font-awesome.css') }}">*/
/*         <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>*/
/*         <link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>*/
/*     	<script type="text/javascript" src="{{ asset('/bundles/JS/utils.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('/bundles/JS/autocomplete.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('/bundles/JS/OMDB.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('/bundles/JS/jquery.particleground.js') }}"></script>*/
/*         <link rel="icon" type="image/png" href="{{ asset('/bundles/IMAGE/HTLogo.png') }}">*/
/*         <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/base/jquery-ui.css">*/
/*         <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>*/
/*         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>*/
/*     	<title>HYPERTube</title>*/
/*     </head>*/
/*     <body>*/
/*     	<div id="header">*/
/*     		<div id="search_bar_bundle">*/
/*                 <a href="{{ path('core_homepage') }}"><img id="logo" src="{{ asset('/bundles/IMAGE/HyperTube_logo.png') }}"></a>*/
/*                 <form>*/
/*                     <button id="search_icon" type="submit"><img  style="position: absolute; top: 5%; width: 80%; height: 80%; left: 5%;"src="{{ asset('/bundles/IMAGE/search_loupe.png') }}"></button>*/
/*                     <input type="text" id="search_bar" placeholder="search a movie / series / manga"  />*/
/*                 </form>*/
/*     		</div>*/
/*     		<div id="menu_bar">*/
/*     			<div id="menu_container">*/
/*     				<div id="selector"></div>*/
/*     				<a href="{{ path('core_homepage') }}"><img id="home_icon" src="{{ asset('/bundles/IMAGE/burger_icon.png') }}"></a>*/
/* 	    			<a id="menu_1" href="{{ path('core_homepage') }}"><span class="menu_span_active">HOME</span></a>*/
/* 	    			<a id="menu_2" href="{{ path('core_movie') }}"><span class="menu_span_txt" >MOVIES</span></a>*/
/* 	    			<a id="menu_3" href="{{ path('core_serie') }}"><span class="menu_span_txt">SERIE</span></a>*/
/*                     {% if is_granted('IS_AUTHENTICATED_FULLY') == false %}*/
/* 	    			<a><img class='icon_menu' src="{{ asset('/bundles/IMAGE/Disconnect.png') }}"></a>*/
/*                     {% else %}*/
/*                     <a><img class='icon_menu' src="{{ asset('/bundles/IMAGE/Connect.png') }}"></a>*/
/*                     {% endif %}*/
/*                     <img id="babar" onclick="display_profil_menu();" class="icon_menu" src="{{ asset('/bundles/IMAGE/ProPlus.png') }}">*/
/* 	    			<div id="profil_menu">*/
/* 	    				<div id="green_bar_div" style="position: absolute; height: 6px; top: 0px; width: 100%; background-color: rgba(46, 204, 113,1.0);"></div>*/
/*                         <div id="green_bar_div" style="position: absolute; right: 0px; height: 50px; width:50px; background-color: rgba(46, 204, 113,1.0); top: -50px; "></div>*/
/* 						{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 	    				<div id="div_profil_menu">*/
/*                             <a href="{{ path('fos_user_profile_show') }}"><span>My Profil</span></a>*/
/*                         </div>*/
/* 						{% endif %}*/
/* 	    				<div id="div_profil_menu">*/
/*                             <span>Friends</span>*/
/*                         </div>*/
/* 	    				<div id="div_profil_menu">*/
/*                             <span >Other Profil</span>*/
/*                         </div>*/
/* 	    				<div id="div_profil_menu">*/
/*                             <span>Settings</span>*/
/*                         </div>*/
/* */
/*                         <div id="div_profil_menu">*/
/*                             <div style="text-shadow: 1px 2px #95a5a6; color: #2ecc71; font-family: geo;">&diams;*/
/*                             <div style="box-shadow: 0px 2px 2px 0px #95a5a6; border: 2px solid #2ecc71; width: 70px; position: relative; top: -20px; left: 10px;"></div>*/
/*                             <div style="box-shadow: 0px 2px 2px 0px #95a5a6; border: 2px solid #2ecc71; width: 70px; position: relative; top: -24px; left: 120px;"></div>*/
/*                             </div>*/
/* */
/*                         </div>*/
/* */
/* 	    				<div id="div_profil_menu">*/
/*                             <span style="font-style: italic;">Switch Account</span>*/
/*                         </div>*/
/* 	    				<div id="div_profil_menu">*/
/*                             <span style="color: rgba(30, 30, 30, 1);">or</span>*/
/*                         </div>*/
/* 						{% if is_granted('IS_AUTHENTICATED_FULLY') == false %}*/
/* 		    			<div id="div_profil_menu">*/
/*                             <span onclick="display_login();" style="font-style: italic;">Log-In</span>*/
/*                         </div>*/
/* 						{% else %}*/
/* 							<div id="div_profil_menu">*/
/* 										<a style="font-style: italic;" href="{{ logout_url() }}">Logout</a>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 	    			</div>*/
/* 	    		</div>*/
/*     		</div>*/
/*     	</div>*/
/* 		{% block body %}*/
/* 		{% endblock %}*/
/*          <div id="footer" style="position: relative; width: 100%; height: 100px; background-color: rgb(30,30,30); margin-top: 50px;"></div>*/
/*         <div id="background"></div>*/
/*         <script type='text/javascript' src="{{ asset('/bundles/JS/pagination.js') }}"></script>*/
/* */
/*     </body>*/
/* <html>*/
/* <script>*/
/* */
/*     // Si tu veux pimper le truc voici le lien du tuto =>*/
/*     // https://openclassrooms.com/courses/decouvrez-la-puissance-de-jquery-ui/l-autocompletion-1*/
/*     // Documentation officiel => http://api.jqueryui.com/autocomplete/*/
/*     // Tu peux ajouter des images ou autre truc !*/
/* */
/*     var liste = new Array();*/
/*     {% if data_search is defined %}*/
/*     {% for elem in data_search %}*/
/*         liste.push("{{ elem.title }}");*/
/*     {% endfor %}*/
/*     {% endif %}*/
/*     */
/*     $('#search_bar').autocomplete({*/
/*         source : liste,*/
/*         minLength : 3*/
/* */
/*    });*/
/* */
/* </script>*/

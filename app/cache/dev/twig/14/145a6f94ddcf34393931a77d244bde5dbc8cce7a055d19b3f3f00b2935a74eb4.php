<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_9a78c3889caa37b9e807b2876717ae66c4446c796b6ccbb01653096285ad02e0 extends Twig_Template
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
        $__internal_5ce77276c4d2a8b27dfea2f1d416dbeabbeb0a91be4d5bb3a24cc43df70f24b4 = $this->env->getExtension("native_profiler");
        $__internal_5ce77276c4d2a8b27dfea2f1d416dbeabbeb0a91be4d5bb3a24cc43df70f24b4->enter($__internal_5ce77276c4d2a8b27dfea2f1d416dbeabbeb0a91be4d5bb3a24cc43df70f24b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/sky-forms.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/CSS/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"http://www.w3schools.com/lib/w3.css\">
        <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
    \t<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/utils.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/OMDB.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/jquery.particleground.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/favicon.png"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.1.0.js\"></script>
    \t<title>HYPERTube</title>
    </head>
    <body>
    \t<div id=\"header\">
    \t\t<div id=\"search_bar_bundle\">
    \t\t\t<a><img id=\"logo\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/HyperTube_logo.png"), "html", null, true);
        echo "\"></a>
                <img id=\"search_icon\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/search_loupe.png"), "html", null, true);
        echo "\">
                <input type=\"text\" id=\"search_bar\" placeholder=\"search a movie / series / manga\">
    \t\t</div>
    \t\t<div id=\"menu_bar\">
    \t\t\t<div id=\"menu_container\">
    \t\t\t\t<div id=\"selector\"></div>
    \t\t\t\t<a><img id=\"home_icon\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/burger_icon.png"), "html", null, true);
        echo "\"></a>
\t    \t\t\t<a id=\"menu_1\" href=\"\"><span id=\"menu_span_active\">HOME</span></a>
\t    \t\t\t<a id=\"menu_2\" href=\"\"><span id=\"menu_span_txt\" >MOVIES</span></a>
\t    \t\t\t<a id=\"menu_3\" href=\"\"><span id=\"menu_span_txt\">SERIES</span></a>
\t    \t\t\t<a id=\"menu_4\" href=\"\"><span id=\"menu_span_txt\">SHONEN</span></a>
\t    \t\t\t<a><img class='icon_menu' src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/Connect.png"), "html", null, true);
        echo "\"></a>
                    <img id=\"babar\" onclick=\"display_profil_menu();\" class=\"icon_menu\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/ProParam.png"), "html", null, true);
        echo "\">

\t    \t\t\t<div id=\"profil_menu\">
\t    \t\t\t\t<div id=\"green_bar_div\" style=\"position: absolute; height: 6px; top: 0px; width: 100%; background-color: rgba(46, 204, 113,1.0);\"></div>
                        <div id=\"green_bar_div\" style=\"position: absolute; right: 0px; height: 50px; width:50px; background-color: rgba(46, 204, 113,1.0); top: -50px; \"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 39
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <a href=\"http://localhost:8080/hypertube/web/app_dev.php/profile\"><span>My Profil</span></a>
                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 44
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
\t\t\t\t\t\t\t\t\t";
        // line 68
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 69
            echo "    \t\t\t\t    \t\t\t<div id=\"div_profil_menu\">
                            \t<span onclick=\"display_login();\" style=\"font-style: italic;\">Log-In</span>
                        </div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"div_profil_menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"font-style: italic;\" href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutUrl(), "html", null, true);
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t    \t\t\t</div>
\t    \t\t</div>
    \t\t</div>
    \t</div>
\t\t\t\t\t";
        // line 81
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "        <div id=\"background\"></div>
    </body>
<html>
";
        
        $__internal_5ce77276c4d2a8b27dfea2f1d416dbeabbeb0a91be4d5bb3a24cc43df70f24b4->leave($__internal_5ce77276c4d2a8b27dfea2f1d416dbeabbeb0a91be4d5bb3a24cc43df70f24b4_prof);

    }

    // line 81
    public function block_body($context, array $blocks = array())
    {
        $__internal_464de8f2ce385ab756eba3f49020d854eba3611fd8225ee36a856338ec1cefd7 = $this->env->getExtension("native_profiler");
        $__internal_464de8f2ce385ab756eba3f49020d854eba3611fd8225ee36a856338ec1cefd7->enter($__internal_464de8f2ce385ab756eba3f49020d854eba3611fd8225ee36a856338ec1cefd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 82
        echo "\t\t\t\t\t";
        
        $__internal_464de8f2ce385ab756eba3f49020d854eba3611fd8225ee36a856338ec1cefd7->leave($__internal_464de8f2ce385ab756eba3f49020d854eba3611fd8225ee36a856338ec1cefd7_prof);

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
        return array (  174 => 82,  168 => 81,  158 => 83,  156 => 81,  150 => 77,  144 => 74,  141 => 73,  135 => 69,  133 => 68,  107 => 44,  101 => 40,  99 => 39,  91 => 34,  87 => 33,  79 => 28,  70 => 22,  66 => 21,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/*     	<meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     	<link rel="stylesheet" href="{{ asset('/bundles/CSS/layout.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/sky-forms.css') }}">*/
/*         <link rel="stylesheet" href="{{ asset('/bundles/CSS/styles.css') }}">*/
/*         <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">*/
/*         <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>*/
/*         <link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>*/
/*     	<script type="text/javascript" src="{{ asset('/bundles/JS/utils.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('/bundles/JS/OMDB.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('/bundles/JS/jquery.particleground.js') }}"></script>*/
/*         <link rel="icon" type="image/png" href="{{ asset('/bundles/IMAGE/favicon.png') }}">*/
/*         <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>*/
/*     	<title>HYPERTube</title>*/
/*     </head>*/
/*     <body>*/
/*     	<div id="header">*/
/*     		<div id="search_bar_bundle">*/
/*     			<a><img id="logo" src="{{ asset('/bundles/IMAGE/HyperTube_logo.png') }}"></a>*/
/*                 <img id="search_icon" src="{{ asset('/bundles/IMAGE/search_loupe.png') }}">*/
/*                 <input type="text" id="search_bar" placeholder="search a movie / series / manga">*/
/*     		</div>*/
/*     		<div id="menu_bar">*/
/*     			<div id="menu_container">*/
/*     				<div id="selector"></div>*/
/*     				<a><img id="home_icon" src="{{ asset('/bundles/IMAGE/burger_icon.png') }}"></a>*/
/* 	    			<a id="menu_1" href=""><span id="menu_span_active">HOME</span></a>*/
/* 	    			<a id="menu_2" href=""><span id="menu_span_txt" >MOVIES</span></a>*/
/* 	    			<a id="menu_3" href=""><span id="menu_span_txt">SERIES</span></a>*/
/* 	    			<a id="menu_4" href=""><span id="menu_span_txt">SHONEN</span></a>*/
/* 	    			<a><img class='icon_menu' src="{{ asset('/bundles/IMAGE/Connect.png') }}"></a>*/
/*                     <img id="babar" onclick="display_profil_menu();" class="icon_menu" src="{{ asset('/bundles/IMAGE/ProParam.png') }}">*/
/* */
/* 	    			<div id="profil_menu">*/
/* 	    				<div id="green_bar_div" style="position: absolute; height: 6px; top: 0px; width: 100%; background-color: rgba(46, 204, 113,1.0);"></div>*/
/*                         <div id="green_bar_div" style="position: absolute; right: 0px; height: 50px; width:50px; background-color: rgba(46, 204, 113,1.0); top: -50px; "></div>*/
/* 													{% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* 	    				<div id="div_profil_menu">*/
/*                             <a href="http://localhost:8080/hypertube/web/app_dev.php/profile"><span>My Profil</span></a>*/
/*                         </div>*/
/* 												{% endif %}*/
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
/* 									{% if is_granted('IS_AUTHENTICATED_FULLY') == false %}*/
/*     				    			<div id="div_profil_menu">*/
/*                             	<span onclick="display_login();" style="font-style: italic;">Log-In</span>*/
/*                         </div>*/
/* 									{% else %}*/
/* 										<div id="div_profil_menu">*/
/* 													<a style="font-style: italic;" href="{{ logout_url() }}">Logout</a>*/
/* 										</div>*/
/* 									{% endif %}*/
/* 	    			</div>*/
/* 	    		</div>*/
/*     		</div>*/
/*     	</div>*/
/* 					{% block body %}*/
/* 					{% endblock %}*/
/*         <div id="background"></div>*/
/*     </body>*/
/* <html>*/
/* */

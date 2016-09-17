<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_74ec09c4a5a92833b58bd623dacee3f61da42e0f6d8e398141209390fa5710a4 extends Twig_Template
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
        $__internal_2918eb61d86c89f9d03f6d5746e9f48bf2702168609eafe272acdb6df2d5060d = $this->env->getExtension("native_profiler");
        $__internal_2918eb61d86c89f9d03f6d5746e9f48bf2702168609eafe272acdb6df2d5060d->enter($__internal_2918eb61d86c89f9d03f6d5746e9f48bf2702168609eafe272acdb6df2d5060d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
    \t<script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/utils.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/OMDB.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/jquery.particleground.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/iconHT.png"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.1.0.js\"></script>
    \t<title>HYPERTube</title>
    </head>
    <body>
    \t<div id=\"header\">
    \t\t<div id=\"search_bar_bundle\">
    \t\t\t<a><img id=\"logo\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/HyperTube_logo.png"), "html", null, true);
        echo "\"></a>
                <img id=\"search_icon\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/search_loupe.png"), "html", null, true);
        echo "\">
                <input type=\"text\" id=\"search_bar\" placeholder=\"search a movie / series / manga\">
    \t\t</div>
    \t\t<div id=\"menu_bar\">
    \t\t\t<div id=\"menu_container\">
    \t\t\t\t<div id=\"selector\"></div>
    \t\t\t\t<a><img id=\"home_icon\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/burger_icon.png"), "html", null, true);
        echo "\"></a>
\t    \t\t\t<a id=\"menu_1\" href=\"http://localhost:8080/GIT/web/app_dev.php/\"><span id=\"menu_span_active\">HOME</span></a>
\t    \t\t\t<a id=\"menu_2\" href=\"http://localhost:8080/GIT/web/app_dev.php/movie\"><span id=\"menu_span_txt\" >MOVIES</span></a>
\t    \t\t\t<a id=\"menu_3\" href=\"\"><span id=\"menu_span_txt\">SERIES</span></a>
\t    \t\t\t<a id=\"menu_4\" href=\"\"><span id=\"menu_span_txt\">SHONEN</span></a>
\t    \t\t\t<a><img class='icon_menu' src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/Connect.png"), "html", null, true);
        echo "\"></a>
                    <img id=\"babar\" onclick=\"display_profil_menu();\" class=\"icon_menu\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/ProParam.png"), "html", null, true);
        echo "\">

\t    \t\t\t<div id=\"profil_menu\">
\t    \t\t\t\t<div id=\"green_bar_div\" style=\"position: absolute; height: 6px; top: 0px; width: 100%; background-color: rgba(46, 204, 113,1.0);\"></div>
                        <div id=\"green_bar_div\" style=\"position: absolute; right: 0px; height: 50px; width:50px; background-color: rgba(46, 204, 113,1.0); top: -50px; \"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 40
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 41
            echo "\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <a href=\"http://localhost:8080/hypertube/web/app_dev.php/profile\"><span>My Profil</span></a>
                        </div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 45
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
        // line 69
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 70
            echo "    \t\t\t\t    \t\t\t<div id=\"div_profil_menu\">
                            \t<span onclick=\"display_login();\" style=\"font-style: italic;\">Log-In</span>
                        </div>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\t\t\t\t\t<div id=\"div_profil_menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a style=\"font-style: italic;\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutUrl(), "html", null, true);
            echo "\">Logout</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 78
        echo "\t    \t\t\t</div>
\t    \t\t</div>
    \t\t</div>
    \t</div>
\t\t";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "         <div id=\"footer\" style=\"position: relative; width: 100%; height: 100px; background-color: rgb(30,30,30); margin-top: 50px;\"></div>
        <div id=\"background\"></div>
    </body>
<html>
";
        
        $__internal_2918eb61d86c89f9d03f6d5746e9f48bf2702168609eafe272acdb6df2d5060d->leave($__internal_2918eb61d86c89f9d03f6d5746e9f48bf2702168609eafe272acdb6df2d5060d_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_a183aa24b6b2528bb7584ea4a21b178c3931e03660137fc51ee1adc188e1a844 = $this->env->getExtension("native_profiler");
        $__internal_a183aa24b6b2528bb7584ea4a21b178c3931e03660137fc51ee1adc188e1a844->enter($__internal_a183aa24b6b2528bb7584ea4a21b178c3931e03660137fc51ee1adc188e1a844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "\t\t";
        
        $__internal_a183aa24b6b2528bb7584ea4a21b178c3931e03660137fc51ee1adc188e1a844->leave($__internal_a183aa24b6b2528bb7584ea4a21b178c3931e03660137fc51ee1adc188e1a844_prof);

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
        return array (  179 => 83,  173 => 82,  162 => 84,  160 => 82,  154 => 78,  148 => 75,  145 => 74,  139 => 70,  137 => 69,  111 => 45,  105 => 41,  103 => 40,  95 => 35,  91 => 34,  83 => 29,  74 => 23,  70 => 22,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
/*         <link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>*/
/*         <link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>*/
/*     	<script type="text/javascript" src="{{ asset('/bundles/JS/utils.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('/bundles/JS/OMDB.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('/bundles/JS/jquery.particleground.js') }}"></script>*/
/*         <link rel="icon" type="image/png" href="{{ asset('/bundles/IMAGE/iconHT.png') }}">*/
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
/* 	    			<a id="menu_1" href="http://localhost:8080/GIT/web/app_dev.php/"><span id="menu_span_active">HOME</span></a>*/
/* 	    			<a id="menu_2" href="http://localhost:8080/GIT/web/app_dev.php/movie"><span id="menu_span_txt" >MOVIES</span></a>*/
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
/* 		{% block body %}*/
/* 		{% endblock %}*/
/*          <div id="footer" style="position: relative; width: 100%; height: 100px; background-color: rgb(30,30,30); margin-top: 50px;"></div>*/
/*         <div id="background"></div>*/
/*     </body>*/
/* <html>*/
/* */

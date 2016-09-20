<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_52e936d6eb7404929df9fd2c4da43e6f216a6f145dfa2af1ad33c2a0880cab16 extends Twig_Template
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
        $__internal_e77e9229044ac3ec3962f6ca792b2e960873a954f3e742821d81e217a28c1dbc = $this->env->getExtension("native_profiler");
        $__internal_e77e9229044ac3ec3962f6ca792b2e960873a954f3e742821d81e217a28c1dbc->enter($__internal_e77e9229044ac3ec3962f6ca792b2e960873a954f3e742821d81e217a28c1dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/OMDB.js"), "html", null, true);
        echo "\"></script>
        <script type='text/javascript' src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/JS/jquery.particleground.js"), "html", null, true);
        echo "\"></script>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/HTLogo.png"), "html", null, true);
        echo "\">
        <script type=\"text/javascript\" src=\"//code.jquery.com/jquery-2.1.0.js\"></script>
    \t<title>HYPERTube</title>
    </head>
    <body>
    \t<div id=\"header\">
        <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/dab.gif"), "html", null, true);
        echo "\" style=\"position: absolute; top: 10px; right: 10px; width: 100px; height: 100px; opacity: 0.8;\">
    \t\t<div id=\"search_bar_bundle\">
    \t\t\t<a><img id=\"logo\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/HyperTube_logo.png"), "html", null, true);
        echo "\"></a>
                <img id=\"search_icon\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/search_loupe.png"), "html", null, true);
        echo "\">
                <input type=\"text\" id=\"search_bar\" placeholder=\"search a movie / series / manga\">
    \t\t</div>
    \t\t<div id=\"menu_bar\">
    \t\t\t<div id=\"menu_container\">
    \t\t\t\t<div id=\"selector\"></div>
    \t\t\t\t<a><img id=\"home_icon\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/burger_icon.png"), "html", null, true);
        echo "\"></a>
\t    \t\t\t<a id=\"menu_1\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("core_homepage");
        echo "\"><span class=\"menu_span_active\">HOME</span></a>
\t    \t\t\t<a id=\"menu_2\" href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("core_movie");
        echo "\"><span class=\"menu_span_txt\" >MOVIES</span></a>
\t    \t\t\t<a id=\"menu_3\" href=\"\"><span class=\"menu_span_txt\">SERIES</span></a>
\t    \t\t\t<a id=\"menu_4\" href=\"\"><span class=\"menu_span_txt\">SHONEN</span></a>
                    ";
        // line 36
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 37
            echo "\t    \t\t\t<a><img class='icon_menu' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/Disconnect.png"), "html", null, true);
            echo "\"></a>
                    ";
        } else {
            // line 39
            echo "                    <a><img class='icon_menu' src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/Connect.png"), "html", null, true);
            echo "\"></a>
                    ";
        }
        // line 41
        echo "                    <img id=\"babar\" onclick=\"display_profil_menu();\" class=\"icon_menu\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/IMAGE/ProPlus.png"), "html", null, true);
        echo "\">
\t    \t\t\t<div id=\"profil_menu\">
\t    \t\t\t\t<div id=\"green_bar_div\" style=\"position: absolute; height: 6px; top: 0px; width: 100%; background-color: rgba(46, 204, 113,1.0);\"></div>
                        <div id=\"green_bar_div\" style=\"position: absolute; right: 0px; height: 50px; width:50px; background-color: rgba(46, 204, 113,1.0); top: -50px; \"></div>
\t\t\t\t\t\t";
        // line 45
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 46
            echo "\t    \t\t\t\t<div id=\"div_profil_menu\">
                            <a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\"><span>My Profil</span></a>
                        </div>
\t\t\t\t\t\t";
        }
        // line 50
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
        // line 74
        if (($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY") == false)) {
            // line 75
            echo "\t\t    \t\t\t<div id=\"div_profil_menu\">
                            <span onclick=\"display_login();\" style=\"font-style: italic;\">Log-In</span>
                        </div>
\t\t\t\t\t\t";
        } else {
            // line 79
            echo "\t\t\t\t\t\t\t<div id=\"div_profil_menu\">
\t\t\t\t\t\t\t\t\t\t<a style=\"font-style: italic;\" href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('logout_url')->getLogoutUrl(), "html", null, true);
            echo "\">Logout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 83
        echo "\t    \t\t\t</div>
\t    \t\t</div>
    \t\t</div>
    \t</div>
\t\t";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "         <div id=\"footer\" style=\"position: relative; width: 100%; height: 100px; background-color: rgb(30,30,30); margin-top: 50px;\"></div>
        <div id=\"background\"></div>
    </body>
<html>
";
        
        $__internal_e77e9229044ac3ec3962f6ca792b2e960873a954f3e742821d81e217a28c1dbc->leave($__internal_e77e9229044ac3ec3962f6ca792b2e960873a954f3e742821d81e217a28c1dbc_prof);

    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3fe9e2ef2439e547c3297dda34e2e4d2e9e48aff036994cab6d613915a5e4ff = $this->env->getExtension("native_profiler");
        $__internal_c3fe9e2ef2439e547c3297dda34e2e4d2e9e48aff036994cab6d613915a5e4ff->enter($__internal_c3fe9e2ef2439e547c3297dda34e2e4d2e9e48aff036994cab6d613915a5e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 88
        echo "\t\t";
        
        $__internal_c3fe9e2ef2439e547c3297dda34e2e4d2e9e48aff036994cab6d613915a5e4ff->leave($__internal_c3fe9e2ef2439e547c3297dda34e2e4d2e9e48aff036994cab6d613915a5e4ff_prof);

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
        return array (  206 => 88,  200 => 87,  189 => 89,  187 => 87,  181 => 83,  175 => 80,  172 => 79,  166 => 75,  164 => 74,  138 => 50,  132 => 47,  129 => 46,  127 => 45,  119 => 41,  113 => 39,  107 => 37,  105 => 36,  99 => 33,  95 => 32,  91 => 31,  82 => 25,  78 => 24,  73 => 22,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  46 => 10,  41 => 8,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
/*         <script type="text/javascript" src="{{ asset('/bundles/JS/OMDB.js') }}"></script>*/
/*         <script type='text/javascript' src="{{ asset('/bundles/JS/jquery.particleground.js') }}"></script>*/
/*         <link rel="icon" type="image/png" href="{{ asset('/bundles/IMAGE/HTLogo.png') }}">*/
/*         <script type="text/javascript" src="//code.jquery.com/jquery-2.1.0.js"></script>*/
/*     	<title>HYPERTube</title>*/
/*     </head>*/
/*     <body>*/
/*     	<div id="header">*/
/*         <img src="{{ asset('/bundles/IMAGE/dab.gif') }}" style="position: absolute; top: 10px; right: 10px; width: 100px; height: 100px; opacity: 0.8;">*/
/*     		<div id="search_bar_bundle">*/
/*     			<a><img id="logo" src="{{ asset('/bundles/IMAGE/HyperTube_logo.png') }}"></a>*/
/*                 <img id="search_icon" src="{{ asset('/bundles/IMAGE/search_loupe.png') }}">*/
/*                 <input type="text" id="search_bar" placeholder="search a movie / series / manga">*/
/*     		</div>*/
/*     		<div id="menu_bar">*/
/*     			<div id="menu_container">*/
/*     				<div id="selector"></div>*/
/*     				<a><img id="home_icon" src="{{ asset('/bundles/IMAGE/burger_icon.png') }}"></a>*/
/* 	    			<a id="menu_1" href="{{ path('core_homepage') }}"><span class="menu_span_active">HOME</span></a>*/
/* 	    			<a id="menu_2" href="{{ path('core_movie') }}"><span class="menu_span_txt" >MOVIES</span></a>*/
/* 	    			<a id="menu_3" href=""><span class="menu_span_txt">SERIES</span></a>*/
/* 	    			<a id="menu_4" href=""><span class="menu_span_txt">SHONEN</span></a>*/
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
/*     </body>*/
/* <html>*/
/* */

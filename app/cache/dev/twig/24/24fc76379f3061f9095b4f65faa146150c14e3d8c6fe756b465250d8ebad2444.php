<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_2fef915f666f3acf366f562c62791596d39fe4739c6789c90d615655e0d1becb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92c9d621a9b945f65e2a54c5b92f5af6b41c352304de295f5be57256f209f910 = $this->env->getExtension("native_profiler");
        $__internal_92c9d621a9b945f65e2a54c5b92f5af6b41c352304de295f5be57256f209f910->enter($__internal_92c9d621a9b945f65e2a54c5b92f5af6b41c352304de295f5be57256f209f910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_92c9d621a9b945f65e2a54c5b92f5af6b41c352304de295f5be57256f209f910->leave($__internal_92c9d621a9b945f65e2a54c5b92f5af6b41c352304de295f5be57256f209f910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */

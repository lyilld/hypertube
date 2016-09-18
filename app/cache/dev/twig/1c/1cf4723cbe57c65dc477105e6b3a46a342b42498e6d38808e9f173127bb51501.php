<?php

/* WebProfilerBundle:Profiler:bag.html.twig */
class __TwigTemplate_e67f955006f01859d045fde1346a482bbbe3b53a91d54d94157df4dba331e152 extends Twig_Template
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
        $__internal_aa32c164f01ae07f678ba42a0c2597c19fd647b7edd7ec8e68185322e30ab8db = $this->env->getExtension("native_profiler");
        $__internal_aa32c164f01ae07f678ba42a0c2597c19fd647b7edd7ec8e68185322e30ab8db->enter($__internal_aa32c164f01ae07f678ba42a0c2597c19fd647b7edd7ec8e68185322e30ab8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:bag.html.twig"));

        // line 1
        echo "<table class=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
        echo "\">
    <thead>
        <tr>
            <th scope=\"col\" class=\"key\">";
        // line 4
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 0, array(), "array")) : ("Key")), "html", null, true);
        echo "</th>
            <th scope=\"col\">";
        // line 5
        echo twig_escape_filter($this->env, ((array_key_exists("labels", $context)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 1, array(), "array")) : ("Value")), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "keys", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["bag"]) ? $context["bag"] : $this->getContext($context, "bag")), "get", array(0 => $context["key"]), "method")), "html", null, true);
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "            <tr>
                <td colspan=\"2\">(no data)</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>
";
        
        $__internal_aa32c164f01ae07f678ba42a0c2597c19fd647b7edd7ec8e68185322e30ab8db->leave($__internal_aa32c164f01ae07f678ba42a0c2597c19fd647b7edd7ec8e68185322e30ab8db_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:bag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  60 => 15,  52 => 12,  48 => 11,  45 => 10,  40 => 9,  33 => 5,  29 => 4,  22 => 1,);
    }
}
/* <table class="{{ class|default('') }}">*/
/*     <thead>*/
/*         <tr>*/
/*             <th scope="col" class="key">{{ labels is defined ? labels[0] : 'Key' }}</th>*/
/*             <th scope="col">{{ labels is defined ? labels[1] : 'Value' }}</th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         {% for key in bag.keys|sort %}*/
/*             <tr>*/
/*                 <th>{{ key }}</th>*/
/*                 <td>{{ profiler_dump(bag.get(key)) }}</td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td colspan="2">(no data)</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* </table>*/
/* */

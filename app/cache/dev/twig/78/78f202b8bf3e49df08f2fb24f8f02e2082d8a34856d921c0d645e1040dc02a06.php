<?php

/* DiviAjaxLoginBundle:Javascript:init.html.twig */
class __TwigTemplate_344cede73d97680d358339f7ae037c9d66250153dc3d8615528a2c74232dd7b8 extends Twig_Template
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
        $__internal_e27bd10762741188cdc0c79538cea452c378ac82696bd245df6018663c476627 = $this->env->getExtension("native_profiler");
        $__internal_e27bd10762741188cdc0c79538cea452c378ac82696bd245df6018663c476627->enter($__internal_e27bd10762741188cdc0c79538cea452c378ac82696bd245df6018663c476627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Javascript:init.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    // Check if jQuery is loaded
    if (typeof jQuery != 'function') {
        document.write('<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"><\\/script>');
    }
</script>
<script type=\"text/javascript\">
    \$(function ()
    {
        \$('";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["form_selector"]) ? $context["form_selector"] : $this->getContext($context, "form_selector")), "html", null, true);
        echo "').submit(function (e) {
            e.preventDefault();

            var \$this = \$(e.currentTarget),
                inputs = {};

            // Send all form's inputs
            \$.each(\$this.find('input'), function (i, item) {
                var \$item = \$(item);
                inputs[\$item.attr('name')] = \$item.val();
            });

            // Send form into ajax
            \$.ajax({
                url: \$this.attr('action'),
                type: 'POST',
                dataType: 'json',
                data: inputs,
                success: function (data) {
                    if (data.has_error) {
                        // Insert your error process
                        ";
        // line 31
        $this->loadTemplate("DiviAjaxLoginBundle:Javascript:erroraction.js.twig", "DiviAjaxLoginBundle:Javascript:init.html.twig", 31)->display(array_merge($context, array("form_selector" => (isset($context["form_selector"]) ? $context["form_selector"] : $this->getContext($context, "form_selector")))));
        // line 32
        echo "                    }
                    else {
                        // Insert your success process
                        ";
        // line 35
        $this->loadTemplate("DiviAjaxLoginBundle:Javascript:successaction.js.twig", "DiviAjaxLoginBundle:Javascript:init.html.twig", 35)->display(array_merge($context, array("form_selector" => (isset($context["form_selector"]) ? $context["form_selector"] : $this->getContext($context, "form_selector")))));
        // line 36
        echo "                    }
                }
            });
        });
    });
</script>
";
        
        $__internal_e27bd10762741188cdc0c79538cea452c378ac82696bd245df6018663c476627->leave($__internal_e27bd10762741188cdc0c79538cea452c378ac82696bd245df6018663c476627_prof);

    }

    public function getTemplateName()
    {
        return "DiviAjaxLoginBundle:Javascript:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 36,  64 => 35,  59 => 32,  57 => 31,  33 => 10,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     // Check if jQuery is loaded*/
/*     if (typeof jQuery != 'function') {*/
/*         document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><\/script>');*/
/*     }*/
/* </script>*/
/* <script type="text/javascript">*/
/*     $(function ()*/
/*     {*/
/*         $('{{ form_selector }}').submit(function (e) {*/
/*             e.preventDefault();*/
/* */
/*             var $this = $(e.currentTarget),*/
/*                 inputs = {};*/
/* */
/*             // Send all form's inputs*/
/*             $.each($this.find('input'), function (i, item) {*/
/*                 var $item = $(item);*/
/*                 inputs[$item.attr('name')] = $item.val();*/
/*             });*/
/* */
/*             // Send form into ajax*/
/*             $.ajax({*/
/*                 url: $this.attr('action'),*/
/*                 type: 'POST',*/
/*                 dataType: 'json',*/
/*                 data: inputs,*/
/*                 success: function (data) {*/
/*                     if (data.has_error) {*/
/*                         // Insert your error process*/
/*                         {% include 'DiviAjaxLoginBundle:Javascript:erroraction.js.twig' with {'form_selector': form_selector} %}*/
/*                     }*/
/*                     else {*/
/*                         // Insert your success process*/
/*                         {% include 'DiviAjaxLoginBundle:Javascript:successaction.js.twig' with {'form_selector': form_selector} %}*/
/*                     }*/
/*                 }*/
/*             });*/
/*         });*/
/*     });*/
/* </script>*/
/* */

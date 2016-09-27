<?php

/* DiviAjaxLoginBundle:Javascript:init.html.twig */
class __TwigTemplate_35ba76911d8ed6a22e73178743a0d4712b44480aa0b7cb7e1769c44665d16c04 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["form_selector"]) ? $context["form_selector"] : null), "html", null, true);
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
        $this->loadTemplate("UserBundle:Javascript:erroraction.js.twig", "DiviAjaxLoginBundle:Javascript:init.html.twig", 31)->display(array_merge($context, array("form_selector" => (isset($context["form_selector"]) ? $context["form_selector"] : null))));
        // line 32
        echo "                    }
                    else {
                        // Insert your success process
                        ";
        // line 35
        $this->loadTemplate("UserBundle:Javascript:successaction.js.twig", "DiviAjaxLoginBundle:Javascript:init.html.twig", 35)->display(array_merge($context, array("form_selector" => (isset($context["form_selector"]) ? $context["form_selector"] : null))));
        // line 36
        echo "                    }
                }
            });
        });
    });
</script>
";
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
        return array (  63 => 36,  61 => 35,  56 => 32,  54 => 31,  30 => 10,  19 => 1,);
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
/*                         {% include 'UserBundle:Javascript:erroraction.js.twig' with {'form_selector': form_selector} %}*/
/*                     }*/
/*                     else {*/
/*                         // Insert your success process*/
/*                         {% include 'UserBundle:Javascript:successaction.js.twig' with {'form_selector': form_selector} %}*/
/*                     }*/
/*                 }*/
/*             });*/
/*         });*/
/*     });*/
/* </script>*/
/* */

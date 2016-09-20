<?php

/* DiviAjaxLoginBundle:Javascript:init.html.twig */
class __TwigTemplate_461e39c499cabc72aa94e442cd822bab5882e171fb8c454ee911e58515c36d41 extends Twig_Template
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
        $__internal_d55dc8041bc4afbf0dd8e3cc1add8d100f38f62df113573185634ac65ae5ca67 = $this->env->getExtension("native_profiler");
        $__internal_d55dc8041bc4afbf0dd8e3cc1add8d100f38f62df113573185634ac65ae5ca67->enter($__internal_d55dc8041bc4afbf0dd8e3cc1add8d100f38f62df113573185634ac65ae5ca67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Javascript:init.html.twig"));

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
        $this->loadTemplate("UserBundle:Javascript:erroraction.js.twig", "DiviAjaxLoginBundle:Javascript:init.html.twig", 31)->display(array_merge($context, array("form_selector" => (isset($context["form_selector"]) ? $context["form_selector"] : $this->getContext($context, "form_selector")))));
        // line 32
        echo "                    }
                    else {
                        // Insert your success process
                        ";
        // line 35
        $this->loadTemplate("UserBundle:Javascript:successaction.js.twig", "DiviAjaxLoginBundle:Javascript:init.html.twig", 35)->display(array_merge($context, array("form_selector" => (isset($context["form_selector"]) ? $context["form_selector"] : $this->getContext($context, "form_selector")))));
        // line 36
        echo "                    }
                }
            });
        });
    });
</script>
";
        
        $__internal_d55dc8041bc4afbf0dd8e3cc1add8d100f38f62df113573185634ac65ae5ca67->leave($__internal_d55dc8041bc4afbf0dd8e3cc1add8d100f38f62df113573185634ac65ae5ca67_prof);

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

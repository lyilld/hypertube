<?php

/* DiviAjaxLoginBundle:Javascript:init.html.twig */
class __TwigTemplate_1ea02b1d91ee37b22a6d7ada94c03907112ac3d70c27c4028e68e547c038d94e extends Twig_Template
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
        $__internal_97fc82af28b115ee702d81db70be533ce1a5e958bffd56fbbc7a0cf0453fbffb = $this->env->getExtension("native_profiler");
        $__internal_97fc82af28b115ee702d81db70be533ce1a5e958bffd56fbbc7a0cf0453fbffb->enter($__internal_97fc82af28b115ee702d81db70be533ce1a5e958bffd56fbbc7a0cf0453fbffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DiviAjaxLoginBundle:Javascript:init.html.twig"));

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
        
        $__internal_97fc82af28b115ee702d81db70be533ce1a5e958bffd56fbbc7a0cf0453fbffb->leave($__internal_97fc82af28b115ee702d81db70be533ce1a5e958bffd56fbbc7a0cf0453fbffb_prof);

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

<?php

/* core/themes/classy/templates/content-edit/file-widget-multiple.html.twig */
class __TwigTemplate_f668bd4e57767abb12f143aed4b4b30e3100330168434323786eac345d8290a5 extends Twig_Template
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
        $__internal_f2c08f57061548bc12378c51a55dcdbaccc028c157a90d176f70e440442cdf4c = $this->env->getExtension("native_profiler");
        $__internal_f2c08f57061548bc12378c51a55dcdbaccc028c157a90d176f70e440442cdf4c->enter($__internal_f2c08f57061548bc12378c51a55dcdbaccc028c157a90d176f70e440442cdf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/file-widget-multiple.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true));
        echo "
";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true));
        echo "
";
        
        $__internal_f2c08f57061548bc12378c51a55dcdbaccc028c157a90d176f70e440442cdf4c->leave($__internal_f2c08f57061548bc12378c51a55dcdbaccc028c157a90d176f70e440442cdf4c_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/file-widget-multiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a multi file form widget.
 *
 * Available variables:
 * - table: Table of previously uploaded files.
 * - element: The form element for uploading another file.
 *
 * @see template_preprocess_file_widget_multiple()
 */
#}
{{ table }}
{{ element }}
";
    }
}

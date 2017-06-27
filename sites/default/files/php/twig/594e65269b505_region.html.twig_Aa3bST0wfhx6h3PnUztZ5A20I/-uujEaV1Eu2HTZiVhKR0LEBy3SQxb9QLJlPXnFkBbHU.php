<?php

/* core/themes/classy/templates/layout/region.html.twig */
class __TwigTemplate_0b06ed9684d14eb34c3ffe9e25f020c04875677030be0c1b1e856b82544e8852 extends Twig_Template
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
        $__internal_745dfa6ab35f2bca20018b0d30e3f2381a7c73875d53b30e4893ed3c30e3449c = $this->env->getExtension("native_profiler");
        $__internal_745dfa6ab35f2bca20018b0d30e3f2381a7c73875d53b30e4893ed3c30e3449c->enter($__internal_745dfa6ab35f2bca20018b0d30e3f2381a7c73875d53b30e4893ed3c30e3449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/layout/region.html.twig"));

        $tags = array("set" => 16, "if" => 21);
        $filters = array("clean_class" => 18);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 16
        $context["classes"] = array(0 => "region", 1 => ("region-" . \Drupal\Component\Utility\Html::getClass(        // line 18
(isset($context["region"]) ? $context["region"] : null))));
        // line 21
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 22
            echo "  <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  </div>
";
        }
        
        $__internal_745dfa6ab35f2bca20018b0d30e3f2381a7c73875d53b30e4893ed3c30e3449c->leave($__internal_745dfa6ab35f2bca20018b0d30e3f2381a7c73875d53b30e4893ed3c30e3449c_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  51 => 22,  49 => 21,  47 => 18,  46 => 16,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a region.
 *
 * Available variables:
 * - content: The content for this region, typically blocks.
 * - attributes: HTML attributes for the region <div>.
 * - region: The name of the region variable as defined in the theme's
 *   .info.yml file.
 *
 * @see template_preprocess_region()
 */
#}
{%
  set classes = [
    'region',
    'region-' ~ region|clean_class,
  ]
%}
{% if content %}
  <div{{ attributes.addClass(classes) }}>
    {{ content }}
  </div>
{% endif %}
";
    }
}

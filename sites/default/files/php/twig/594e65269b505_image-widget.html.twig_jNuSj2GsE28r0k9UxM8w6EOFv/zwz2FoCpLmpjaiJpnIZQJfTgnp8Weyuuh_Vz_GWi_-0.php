<?php

/* @classy/content-edit/image-widget.html.twig */
class __TwigTemplate_7de8a44ee52afe361b22379bd813ca906f7329604aa3e5cc66196fb880fdac39 extends Twig_Template
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
        $__internal_994f6e8cb557993ad3d07a49bd46b3fefe056ed9281cc378a3dbfa3c8b6a0944 = $this->env->getExtension("native_profiler");
        $__internal_994f6e8cb557993ad3d07a49bd46b3fefe056ed9281cc378a3dbfa3c8b6a0944->enter($__internal_994f6e8cb557993ad3d07a49bd46b3fefe056ed9281cc378a3dbfa3c8b6a0944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@classy/content-edit/image-widget.html.twig"));

        $tags = array("if" => 14);
        $filters = array("without" => 21);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('without'),
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
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 14
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "preview", array())) {
            // line 15
            echo "    <div class=\"image-preview\">
      ";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "preview", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 19
        echo "  <div class=\"image-widget-data\">
    ";
        // line 21
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["data"]) ? $context["data"] : null), "preview"), "html", null, true));
        echo "
  </div>
</div>
";
        
        $__internal_994f6e8cb557993ad3d07a49bd46b3fefe056ed9281cc378a3dbfa3c8b6a0944->leave($__internal_994f6e8cb557993ad3d07a49bd46b3fefe056ed9281cc378a3dbfa3c8b6a0944_prof);

    }

    public function getTemplateName()
    {
        return "@classy/content-edit/image-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  62 => 19,  56 => 16,  53 => 15,  51 => 14,  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for an image field widget.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - data: Render elements of the image widget.
 *
 * @see template_preprocess_image_widget()
 */
#}
<div{{ attributes }}>
  {% if data.preview %}
    <div class=\"image-preview\">
      {{ data.preview }}
    </div>
  {% endif %}
  <div class=\"image-widget-data\">
    {# Render widget data without the image preview that was output already. #}
    {{ data|without('preview') }}
  </div>
</div>
";
    }
}

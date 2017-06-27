<?php

/* modules/contrib/imagefield_slideshow/templates/imagefield-slideshow.html.twig */
class __TwigTemplate_1178fd10277f0acc144fee3d2d63ec40298c0e6801e9b47cfd2c2c38448d9f2c extends Twig_Template
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
        $__internal_de12370bf00d551d7cd6844ff30d93f9f27177b491af5d739b1927044e20cc30 = $this->env->getExtension("native_profiler");
        $__internal_de12370bf00d551d7cd6844ff30d93f9f27177b491af5d739b1927044e20cc30->enter($__internal_de12370bf00d551d7cd6844ff30d93f9f27177b491af5d739b1927044e20cc30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/imagefield_slideshow/templates/imagefield-slideshow.html.twig"));

        $tags = array("for" => 18, "if" => 22);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 16
        echo "<div class=\"imagefield_slideshow-wrapper\">
  <div class=\"imagefield_slideshow\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url"]) ? $context["url"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 19
            echo "      <img src=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true));
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </div>
  ";
        // line 22
        if ((isset($context["prev_next"]) ? $context["prev_next"] : null)) {
            // line 23
            echo "    <div class=\"imagefield_slideshow-prev\">PREV</div>
    <div class=\"imagefield_slideshow-next\">NEXT</div>
  ";
        }
        // line 26
        echo "</div>
";
        
        $__internal_de12370bf00d551d7cd6844ff30d93f9f27177b491af5d739b1927044e20cc30->leave($__internal_de12370bf00d551d7cd6844ff30d93f9f27177b491af5d739b1927044e20cc30_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/imagefield_slideshow/templates/imagefield-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  68 => 23,  66 => 22,  63 => 21,  54 => 19,  50 => 18,  46 => 16,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a formatted imagefield slideshow field.
 *
 * Available variables:
 * - image: A collection of image data.
 * - image_style: An optional image style.
 * - url: An optional URL the image can be linked to.
 *
 * @see template_preprocess_image_formatter()
 *
 * @ingroup themeable
 */
#}
<div class=\"imagefield_slideshow-wrapper\">
  <div class=\"imagefield_slideshow\">
    {% for key,value in url %}
      <img src=\"{{ value }}\" />
    {% endfor %}
  </div>
  {% if prev_next %}
    <div class=\"imagefield_slideshow-prev\">PREV</div>
    <div class=\"imagefield_slideshow-next\">NEXT</div>
  {% endif %}
</div>
";
    }
}

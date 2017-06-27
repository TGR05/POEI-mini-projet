<?php

/* core/themes/classy/templates/form/form.html.twig */
class __TwigTemplate_c9a076ca9afe1d85f27751423eab93e5d0badbc79d102daba1ca3db75d0b2f66 extends Twig_Template
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
        $__internal_de43c61550c064dec01a1f9bcd4b1f77287a8d627b72612e4b6d7659e76cbbb1 = $this->env->getExtension("native_profiler");
        $__internal_de43c61550c064dec01a1f9bcd4b1f77287a8d627b72612e4b6d7659e76cbbb1->enter($__internal_de43c61550c064dec01a1f9bcd4b1f77287a8d627b72612e4b6d7659e76cbbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/form/form.html.twig"));

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
        echo "<form";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 14
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
</form>
";
        
        $__internal_de43c61550c064dec01a1f9bcd4b1f77287a8d627b72612e4b6d7659e76cbbb1->leave($__internal_de43c61550c064dec01a1f9bcd4b1f77287a8d627b72612e4b6d7659e76cbbb1_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/form/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 14,  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a 'form' element.
 *
 * Available variables
 * - attributes: A list of HTML attributes for the wrapper element.
 * - children: The child elements of the form.
 *
 * @see template_preprocess_form()
 */
#}
<form{{ attributes }}>
  {{ children }}
</form>
";
    }
}

<?php

/* core/themes/classy/templates/field/field--text-long.html.twig */
class __TwigTemplate_6ffd8d74a076a7f95e078f7d0dab246c8e36b802ab30f17dd97b0bc89cd52a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field--text.html.twig", "core/themes/classy/templates/field/field--text-long.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field--text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_737f1c5389b259fa1afb1949b53168ee460313898b35edea9718627b334d4750 = $this->env->getExtension("native_profiler");
        $__internal_737f1c5389b259fa1afb1949b53168ee460313898b35edea9718627b334d4750->enter($__internal_737f1c5389b259fa1afb1949b53168ee460313898b35edea9718627b334d4750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/field--text-long.html.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737f1c5389b259fa1afb1949b53168ee460313898b35edea9718627b334d4750->leave($__internal_737f1c5389b259fa1afb1949b53168ee460313898b35edea9718627b334d4750_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--text-long.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"field--text.html.twig\" %}
";
    }
}

<?php

/* core/themes/classy/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_6228fb10f4a1d7efb52def57ca4416a65c06832a4b7931ab2c1cbffbbc6243cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "core/themes/classy/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fab86d7d363e3f24020a2342a401c9b2330668288a0d93ff6ec18796b2242b4a = $this->env->getExtension("native_profiler");
        $__internal_fab86d7d363e3f24020a2342a401c9b2330668288a0d93ff6ec18796b2242b4a->enter($__internal_fab86d7d363e3f24020a2342a401c9b2330668288a0d93ff6ec18796b2242b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        
        $__internal_fab86d7d363e3f24020a2342a401c9b2330668288a0d93ff6ec18796b2242b4a->leave($__internal_fab86d7d363e3f24020a2342a401c9b2330668288a0d93ff6ec18796b2242b4a_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_1f5083d2b66ce58f377022cf9127568af5f6112a7a7dfcae944d012917ebfd4c = $this->env->getExtension("native_profiler");
        $__internal_1f5083d2b66ce58f377022cf9127568af5f6112a7a7dfcae944d012917ebfd4c->enter($__internal_1f5083d2b66ce58f377022cf9127568af5f6112a7a7dfcae944d012917ebfd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_1f5083d2b66ce58f377022cf9127568af5f6112a7a7dfcae944d012917ebfd4c->leave($__internal_1f5083d2b66ce58f377022cf9127568af5f6112a7a7dfcae944d012917ebfd4c_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for tabs.
 */
#}
{% block content %}
  {% if content %}
    <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
      {{ content }}
    </nav>
  {% endif %}
{% endblock %}
";
    }
}

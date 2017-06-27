<?php

/* core/themes/seven/templates/block--local-actions-block.html.twig */
class __TwigTemplate_10557748bd1f8f6b2d42af1c354e9ccc1a3164920379e34260dc4a9e8dab0ef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@block/block.html.twig", "core/themes/seven/templates/block--local-actions-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@block/block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9bf17773506ff646df11b898fd5781a45408f9b004d41f52ba340854498f74a = $this->env->getExtension("native_profiler");
        $__internal_d9bf17773506ff646df11b898fd5781a45408f9b004d41f52ba340854498f74a->enter($__internal_d9bf17773506ff646df11b898fd5781a45408f9b004d41f52ba340854498f74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/block--local-actions-block.html.twig"));

        $tags = array("if" => 9);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        
        $__internal_d9bf17773506ff646df11b898fd5781a45408f9b004d41f52ba340854498f74a->leave($__internal_d9bf17773506ff646df11b898fd5781a45408f9b004d41f52ba340854498f74a_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_abe91a2120056efb8e7ebc7c5ab3360a69f716e9921e2f5c2ae3eff2379121db = $this->env->getExtension("native_profiler");
        $__internal_abe91a2120056efb8e7ebc7c5ab3360a69f716e9921e2f5c2ae3eff2379121db->enter($__internal_abe91a2120056efb8e7ebc7c5ab3360a69f716e9921e2f5c2ae3eff2379121db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    <ul class=\"action-links\">
      ";
            // line 11
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </ul>
  ";
        }
        
        $__internal_abe91a2120056efb8e7ebc7c5ab3360a69f716e9921e2f5c2ae3eff2379121db->leave($__internal_abe91a2120056efb8e7ebc7c5ab3360a69f716e9921e2f5c2ae3eff2379121db_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/block--local-actions-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  67 => 10,  64 => 9,  58 => 8,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@block/block.html.twig\" %}
{#
/**
 * @file
 * Theme override for local actions (primary admin actions.)
 */
#}
{% block content %}
  {% if content %}
    <ul class=\"action-links\">
      {{ content }}
    </ul>
  {% endif %}
{% endblock %}
";
    }
}

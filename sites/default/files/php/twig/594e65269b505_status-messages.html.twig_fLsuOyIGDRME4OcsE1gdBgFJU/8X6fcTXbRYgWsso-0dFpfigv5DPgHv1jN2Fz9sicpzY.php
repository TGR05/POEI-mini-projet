<?php

/* themes/custom/toto/templates/status-messages.html.twig */
class __TwigTemplate_bcd41fe3fe54f27334ac52727f0bf911bee02e657338e24a0574934d867d48ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/misc/status-messages.html.twig", "themes/custom/toto/templates/status-messages.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/misc/status-messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fbc269a5e1dbdbf363b444d928c1f79117414ad395f36b6681a961fc5fc8a1e = $this->env->getExtension("native_profiler");
        $__internal_3fbc269a5e1dbdbf363b444d928c1f79117414ad395f36b6681a961fc5fc8a1e->enter($__internal_3fbc269a5e1dbdbf363b444d928c1f79117414ad395f36b6681a961fc5fc8a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/custom/toto/templates/status-messages.html.twig"));

        $tags = array("if" => 24);
        $filters = array();
        $functions = array("attach_library" => 25);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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
        
        $__internal_3fbc269a5e1dbdbf363b444d928c1f79117414ad395f36b6681a961fc5fc8a1e->leave($__internal_3fbc269a5e1dbdbf363b444d928c1f79117414ad395f36b6681a961fc5fc8a1e_prof);

    }

    // line 23
    public function block_messages($context, array $blocks = array())
    {
        $__internal_9d756a2817c9e39e50bfe87ea7ac70f1caeeda6481e794939d3f4f51f682fb87 = $this->env->getExtension("native_profiler");
        $__internal_9d756a2817c9e39e50bfe87ea7ac70f1caeeda6481e794939d3f4f51f682fb87->enter($__internal_9d756a2817c9e39e50bfe87ea7ac70f1caeeda6481e794939d3f4f51f682fb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 24
        echo "  ";
        if ( !twig_test_empty((isset($context["message_list"]) ? $context["message_list"] : null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("bartik/messages"), "html", null, true));
            echo "
    <div class=\"messages__wrapper layout-container\">
      ";
            // line 27
            $this->displayParentBlock("messages", $context, $blocks);
            echo "
    </div>
  ";
        }
        
        $__internal_9d756a2817c9e39e50bfe87ea7ac70f1caeeda6481e794939d3f4f51f682fb87->leave($__internal_9d756a2817c9e39e50bfe87ea7ac70f1caeeda6481e794939d3f4f51f682fb87_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/toto/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  64 => 24,  58 => 23,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@classy/misc/status-messages.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 */
#}
{% block messages %}
  {% if message_list is not empty %}
    {{ attach_library('bartik/messages') }}
    <div class=\"messages__wrapper layout-container\">
      {{ parent() }}
    </div>
  {% endif %}
{% endblock messages %}
";
    }
}

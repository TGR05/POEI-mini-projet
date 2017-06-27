<?php

/* modules/contrib/paragraphs/templates/paragraph.html.twig */
class __TwigTemplate_4b3ec3bdc7058093208bb2a9759813b91a7894828911be92353599ef4618ab73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da628fc049d9e7afa85485cffb2f7b8fa8baf8c66445b0418db51e140a1df14e = $this->env->getExtension("native_profiler");
        $__internal_da628fc049d9e7afa85485cffb2f7b8fa8baf8c66445b0418db51e140a1df14e->enter($__internal_da628fc049d9e7afa85485cffb2f7b8fa8baf8c66445b0418db51e140a1df14e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/paragraphs/templates/paragraph.html.twig"));

        $tags = array("set" => 42, "block" => 48);
        $filters = array("clean_class" => 44);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block'),
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

        // line 42
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => ((        // line 45
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 48
        $this->displayBlock('paragraph', $context, $blocks);
        
        $__internal_da628fc049d9e7afa85485cffb2f7b8fa8baf8c66445b0418db51e140a1df14e->leave($__internal_da628fc049d9e7afa85485cffb2f7b8fa8baf8c66445b0418db51e140a1df14e_prof);

    }

    public function block_paragraph($context, array $blocks = array())
    {
        $__internal_3d89a8c65d2d1e7c2cc76d4532b2f15d48d397f83f89c1060427850ab8ff6d92 = $this->env->getExtension("native_profiler");
        $__internal_3d89a8c65d2d1e7c2cc76d4532b2f15d48d397f83f89c1060427850ab8ff6d92->enter($__internal_3d89a8c65d2d1e7c2cc76d4532b2f15d48d397f83f89c1060427850ab8ff6d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paragraph"));

        // line 49
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
    ";
        // line 50
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "  </div>
";
        
        $__internal_3d89a8c65d2d1e7c2cc76d4532b2f15d48d397f83f89c1060427850ab8ff6d92->leave($__internal_3d89a8c65d2d1e7c2cc76d4532b2f15d48d397f83f89c1060427850ab8ff6d92_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_a523a4491803696b05973ea82935aac89369634c84cb622efa7235d2f54c5e9f = $this->env->getExtension("native_profiler");
        $__internal_a523a4491803696b05973ea82935aac89369634c84cb622efa7235d2f54c5e9f->enter($__internal_a523a4491803696b05973ea82935aac89369634c84cb622efa7235d2f54c5e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
    ";
        
        $__internal_a523a4491803696b05973ea82935aac89369634c84cb622efa7235d2f54c5e9f->leave($__internal_a523a4491803696b05973ea82935aac89369634c84cb622efa7235d2f54c5e9f_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs/templates/paragraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 51,  79 => 50,  71 => 53,  69 => 50,  64 => 49,  52 => 48,  50 => 45,  49 => 44,  48 => 42,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      {{ content }}
    {% endblock %}
  </div>
{% endblock paragraph %}
";
    }
}

<?php

/* modules/contrib/paragraphs/templates/paragraphs-dropbutton-wrapper.html.twig */
class __TwigTemplate_ec2a4eead5ff953c3e65a2e8941e0c11b2313f0e229a198ccff64063c8451a72 extends Twig_Template
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
        $__internal_648d68959567a9a3ff479a9a5f20c77e488c63d8e64e898a00fa17f8f777829c = $this->env->getExtension("native_profiler");
        $__internal_648d68959567a9a3ff479a9a5f20c77e488c63d8e64e898a00fa17f8f777829c->enter($__internal_648d68959567a9a3ff479a9a5f20c77e488c63d8e64e898a00fa17f8f777829c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/contrib/paragraphs/templates/paragraphs-dropbutton-wrapper.html.twig"));

        $tags = array("if" => 15, "spaceless" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
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

        // line 15
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 16
            echo "  ";
            ob_start();
            // line 17
            echo "    <div class=\"paragraphs-dropbutton-wrapper\">
      ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_648d68959567a9a3ff479a9a5f20c77e488c63d8e64e898a00fa17f8f777829c->leave($__internal_648d68959567a9a3ff479a9a5f20c77e488c63d8e64e898a00fa17f8f777829c_prof);

    }

    public function getTemplateName()
    {
        return "modules/contrib/paragraphs/templates/paragraphs-dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 17,  48 => 16,  46 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a paragraphs dropbutton wrapper.
 *
 * Available variables:
 * - children: Contains the child elements of the paragraphs dropbutton menu.
 *
 * @see template_preprocess()
 * @see template_preprocess_paragraphs_dropbutton_wrapper()
 *
 * @ingroup themeable
 */
#}
{% if children %}
  {% spaceless %}
    <div class=\"paragraphs-dropbutton-wrapper\">
      {{ children }}
    </div>
  {% endspaceless %}
{% endif %}
";
    }
}

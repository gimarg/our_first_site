<?php

/* themes/our_custom_theme/templates/views/views-view-fields--our-projects--page.html.twig */
class __TwigTemplate_8e1bada8004d0dd8b8b71bbba8ad60c5bcfe00db1e84a3a89be6239c2f97ef30 extends Twig_Template
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
        $tags = array("if" => 35, "for" => 80);
        $filters = array("slice" => 80);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for'),
                array('slice'),
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

        // line 34
        echo "<div class='project'>";
        // line 35
        if ($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array())) {
            // line 36
            echo "<div class='project_teaser_body'>
  ";
            // line 37
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "separator", array()), "html", null, true));
            // line 38
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "wrapper_element", array())) {
                // line 39
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "wrapper_element", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "wrapper_attributes", array()), "html", null, true));
                echo ">";
            }
            // line 41
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label", array())) {
                // line 42
                if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label_element", array())) {
                    // line 43
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label_element", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label_attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label_suffix", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 45
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "label_suffix", array()), "html", null, true));
                }
            }
            // line 48
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "element_type", array())) {
                // line 49
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "element_type", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "element_attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "element_type", array()), "html", null, true));
                echo ">";
            } else {
                // line 51
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "content", array()), "html", null, true));
            }
            // line 53
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "wrapper_element", array())) {
                // line 54
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "title", array()), "wrapper_element", array()), "html", null, true));
                echo ">";
            }
            // line 56
            echo "
  ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "separator", array()), "html", null, true));
            // line 58
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "wrapper_element", array())) {
                // line 59
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "wrapper_element", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "wrapper_attributes", array()), "html", null, true));
                echo ">";
            }
            // line 61
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label", array())) {
                // line 62
                if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label_element", array())) {
                    // line 63
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label_element", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label_attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label_suffix", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 65
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "label_suffix", array()), "html", null, true));
                }
            }
            // line 68
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "element_type", array())) {
                // line 69
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "element_type", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "element_attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "element_type", array()), "html", null, true));
                echo ">";
            } else {
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()), "html", null, true));
            }
            // line 73
            if ($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "wrapper_element", array())) {
                // line 74
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "wrapper_element", array()), "html", null, true));
                echo ">";
            }
            // line 76
            echo "  </div>";
        }
        // line 78
        echo "
<div class='project_links'>
";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["fields"]) ? $context["fields"] : null), 2, null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 81
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "separator", array()), "html", null, true));
            // line 82
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 83
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_attributes", array()), "html", null, true));
                echo ">";
            }
            // line 85
            if ($this->getAttribute($context["field"], "label", array())) {
                // line 86
                if ($this->getAttribute($context["field"], "label_element", array())) {
                    // line 87
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_attributes", array()), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true));
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 89
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true));
                }
            }
            // line 92
            if ($this->getAttribute($context["field"], "element_type", array())) {
                // line 93
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo ">";
            } else {
                // line 95
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
            }
            // line 97
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 98
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo ">";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/our_custom_theme/templates/views/views-view-fields--our-projects--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 101,  215 => 98,  213 => 97,  210 => 95,  200 => 93,  198 => 92,  193 => 89,  182 => 87,  180 => 86,  178 => 85,  172 => 83,  170 => 82,  168 => 81,  164 => 80,  160 => 78,  157 => 76,  152 => 74,  150 => 73,  147 => 71,  137 => 69,  135 => 68,  130 => 65,  119 => 63,  117 => 62,  115 => 61,  109 => 59,  107 => 58,  105 => 57,  102 => 56,  97 => 54,  95 => 53,  92 => 51,  82 => 49,  80 => 48,  75 => 45,  64 => 43,  62 => 42,  60 => 41,  54 => 39,  52 => 38,  50 => 37,  47 => 36,  45 => 35,  43 => 34,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default view template to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 *
 * @ingroup themeable
 */
#}
<div class='project'>
{%- if fields.title -%}
  <div class='project_teaser_body'>
  {{ fields.title.separator }}
  {%- if fields.title.wrapper_element -%}
      <{{ fields.title.wrapper_element }}{{ fields.title.wrapper_attributes }}>
  {%- endif %}
  {%- if fields.title.label -%}
      {%- if fields.title.label_element -%}
      <{{ fields.title.label_element }}{{ fields.title.label_attributes }}>{{ fields.title.label }}{{ fields.title.label_suffix }}</{{ fields.title.label_element }}>
      {%- else -%}
      {{ fields.title.label }}{{ fields.title.label_suffix }}
      {%- endif %}
  {%- endif %}
  {%- if fields.title.element_type -%}
      <{{ fields.title.element_type }}{{ fields.title.element_attributes }}>{{ fields.title.content }}</{{ fields.title.element_type }}>
  {%- else -%}
      {{ fields.title.content }}
  {%- endif %}
  {%- if fields.title.wrapper_element -%}
      </{{ fields.title.wrapper_element }}>
  {%- endif %}

  {{ fields.field_image.separator }}
  {%- if fields.field_image.wrapper_element -%}
      <{{ fields.field_image.wrapper_element }}{{ fields.field_image.wrapper_attributes }}>
  {%- endif %}
  {%- if fields.field_image.label -%}
      {%- if fields.field_image.label_element -%}
      <{{ fields.field_image.label_element }}{{ fields.field_image.label_attributes }}>{{ fields.field_image.label }}{{ fields.field_image.label_suffix }}</{{ fields.field_image.label_element }}>
      {%- else -%}
      {{ fields.field_image.label }}{{ fields.field_image.label_suffix }}
      {%- endif %}
  {%- endif %}
  {%- if fields.field_image.element_type -%}
      <{{ fields.field_image.element_type }}{{ fields.field_image.element_attributes }}>{{ fields.field_image.content }}</{{ fields.field_image.element_type }}>
  {%- else -%}
      {{ fields.field_image.content }}
  {%- endif %}
  {%- if fields.field_image.wrapper_element -%}
      </{{ fields.field_image.wrapper_element }}>
  {%- endif %}
  </div>
{%- endif %}

<div class='project_links'>
{% for field in fields[2:] -%}
  {{ field.separator }}
  {%- if field.wrapper_element -%}
      <{{ field.wrapper_element }}{{ field.wrapper_attributes }}>
  {%- endif %}
  {%- if field.label -%}
      {%- if field.label_element -%}
      <{{ field.label_element }}{{ field.label_attributes }}>{{ field.label }}{{ field.label_suffix }}</{{ field.label_element }}>
      {%- else -%}
      {{ field.label }}{{ field.label_suffix }}
      {%- endif %}
  {%- endif %}
  {%- if field.element_type -%}
      <{{ field.element_type }}{{ field.element_attributes }}>{{ field.content }}</{{ field.element_type }}>
  {%- else -%}
      {{ field.content }}
  {%- endif %}
  {%- if field.wrapper_element -%}
      </{{ field.wrapper_element }}>
  {%- endif %}
{%- endfor %}
</div>
</div>
";
    }
}

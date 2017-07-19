<?php

/* themes/our_custom_theme/templates/views/views-view-fields--blog--page.html.twig */
class __TwigTemplate_4815a42f8b926feb611e0980acfbed50b7c3697730d3b264f21683d317e16ffe extends Twig_Template
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
        $tags = array("for" => 46, "if" => 48);
        $filters = array("trim" => 43, "striptags" => 43);
        $functions = array("file_url" => 43);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
                array('trim', 'striptags'),
                array('file_url')
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

        // line 35
        echo "  ";
        // line 43
        echo "<div class='blog-post' style=\"background: url('";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array(trim(strip_tags($this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "field_image", array()), "content", array()))))), "html", null, true));
        echo "') no-repeat center top; background-size: cover;\">
    <div class='layer'>
    ";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["fields"]) ? $context["fields"] : null), "type", array()), "content", array()), "html", null, true));
        echo "
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 47
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "separator", array()), "html", null, true));
            // line 48
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 49
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_attributes", array()), "html", null, true));
                echo ">";
            }
            // line 51
            if ($this->getAttribute($context["field"], "label", array())) {
                // line 52
                if ($this->getAttribute($context["field"], "label_element", array())) {
                    // line 53
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
                    // line 55
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label", array()), "html", null, true));
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "label_suffix", array()), "html", null, true));
                }
            }
            // line 58
            if ($this->getAttribute($context["field"], "element_type", array())) {
                // line 59
                echo "<";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_attributes", array()), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "element_type", array()), "html", null, true));
                echo ">";
            } else {
                // line 61
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "content", array()), "html", null, true));
            }
            // line 63
            if ($this->getAttribute($context["field"], "wrapper_element", array())) {
                // line 64
                echo "</";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["field"], "wrapper_element", array()), "html", null, true));
                echo ">";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        ";
        // line 68
        echo "      </div>
    </div>
";
        // line 73
        echo "        ";
        // line 96
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/our_custom_theme/templates/views/views-view-fields--blog--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 96,  121 => 73,  117 => 68,  115 => 67,  106 => 64,  104 => 63,  101 => 61,  91 => 59,  89 => 58,  84 => 55,  73 => 53,  71 => 52,  69 => 51,  63 => 49,  61 => 48,  59 => 47,  55 => 46,  51 => 45,  45 => 43,  43 => 35,);
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
{#{%- if blog_identifier == 1 -%}#}
  {#{%- if fields.type.content == \"Article\" -%}
  <div class=\"blog-article\">
  {%- elseif fields.type.content == Testimonial -%}
  <div class=\"blog-testimonial\">
  {%- endif %}#}
{#{%- if fields.type.content == 'Testimonial' -%}
  <div class=\"testimonial\">
{%- endif %}#}
<div class='blog-post' style=\"background: url('{{ file_url(fields.field_image.content|striptags|trim) }}') no-repeat center top; background-size: cover;\">
    <div class='layer'>
    {{ fields.type.content }}
        {% for field in fields -%}
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
        {#{{ fields.type.content }}#}
      </div>
    </div>
{#{%- if fields.type.content == 'Testimonial' -%}
</div>
{%- endif %}#}
        {#{%- else -%}
            {% for field in fields -%}
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

    {%- endfor %}#}
  {#</div>#}
{#{%- endif %}#}";
    }
}

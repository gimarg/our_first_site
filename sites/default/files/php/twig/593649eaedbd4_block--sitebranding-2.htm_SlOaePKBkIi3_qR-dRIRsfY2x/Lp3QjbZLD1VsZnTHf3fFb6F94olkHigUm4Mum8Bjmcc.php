<?php

/* themes/our_custom_theme/templates/blocks/block--sitebranding-2.html.twig */
class __TwigTemplate_5badf4c5c1403438710ec2662c6b254e595689fd7466881edc3e96e924307863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 19, "if" => 20);
        $filters = array("t" => 21);
        $functions = array("path" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array('path')
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

        // line 18
        echo "<div class=\"site-branding-top\">
  ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 30
        echo "</div>";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 21
            echo "      <a class=\"logo\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
      </a>
    ";
        }
        // line 25
        echo "    ";
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 26
            echo "      <a class=\"name\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a>
    ";
        }
        // line 28
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/our_custom_theme/templates/blocks/block--sitebranding-2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  77 => 26,  74 => 25,  66 => 22,  59 => 21,  56 => 20,  53 => 19,  49 => 30,  47 => 19,  44 => 18,);
    }

    public function getSource()
    {
        return "{#{% extends \"block.html.twig\" %}#}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup themeable
 */
#}
<div class=\"site-branding-top\">
  {% block content %}
    {% if site_logo %}
      <a class=\"logo\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
        <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
      </a>
    {% endif %}
    {% if site_name %}
      <a class=\"name\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
    {% endif %}
    {{ site_slogan }}
  {% endblock %}
</div>";
    }
}

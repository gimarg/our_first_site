<?php

/* modules/languageicons/templates/languageicons-link-content.html.twig */
class __TwigTemplate_e485865ac8231830c671bf5d18be1b3658e63e34da941b431b3df9ab75d628c5 extends Twig_Template
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
        $tags = array("if" => 1);
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

        // line 1
        if (((isset($context["placement"]) ? $context["placement"] : null) == "before")) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true));
            echo "
";
        }
        // line 4
        if (((isset($context["placement"]) ? $context["placement"] : null) == "after")) {
            // line 5
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["text"]) ? $context["text"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true));
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "
";
        }
        // line 7
        if (((isset($context["placement"]) ? $context["placement"] : null) == "replace")) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/languageicons/templates/languageicons-link-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 8,  63 => 7,  55 => 5,  53 => 4,  45 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "{% if placement == 'before' %}
    {{ icon }}{{ separator }}{{ text }}
{% endif %}
{% if placement == 'after' %}
    {{ text }}{{ separator }}{{ icon }}
{% endif %}
{% if placement == 'replace' %}
    {{ icon }}
{% endif %}
";
    }
}

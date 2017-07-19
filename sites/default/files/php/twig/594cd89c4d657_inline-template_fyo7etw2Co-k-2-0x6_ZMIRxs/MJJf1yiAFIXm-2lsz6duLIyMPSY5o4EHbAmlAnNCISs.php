<?php

/* {# inline_template_start #}{% if type=='Testimonial' %}
<div class="testimonial"> </div>
{% else %}
<div class="article"> </div>
{% endif %} */
class __TwigTemplate_b269b9486f049ad13a409dee7995a023dda9120c11beb32db533c257768e6139 extends Twig_Template
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
        if (((isset($context["type"]) ? $context["type"] : null) == "Testimonial")) {
            // line 2
            echo "<div class=\"testimonial\"> </div>
";
        } else {
            // line 4
            echo "<div class=\"article\"> </div>
";
        }
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}{% if type=='Testimonial' %}
<div class=\"testimonial\"> </div>
{% else %}
<div class=\"article\"> </div>
{% endif %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  49 => 2,  47 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}{% if type=='Testimonial' %}
<div class=\"testimonial\"> </div>
{% else %}
<div class=\"article\"> </div>
{% endif %}";
    }
}

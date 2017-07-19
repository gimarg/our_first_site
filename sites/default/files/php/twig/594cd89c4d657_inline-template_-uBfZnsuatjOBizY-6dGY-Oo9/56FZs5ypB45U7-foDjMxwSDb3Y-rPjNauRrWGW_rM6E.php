<?php

/* {# inline_template_start #}<div class="link-front fa fa-comments"></div>  
<div class="link-back">View testimonial</div>   */
class __TwigTemplate_2686325a81f6e9eb4dafc0ac22f571d289be41b1dda5e171ff4b848b28e2e2bd extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"link-front fa fa-comments\"></div>  
<div class=\"link-back\">View testimonial</div>  ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"link-front fa fa-comments\"></div>  
<div class=\"link-back\">View testimonial</div>  ";
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"link-front fa fa-comments\"></div>  
<div class=\"link-back\">View testimonial</div>  ";
    }
}

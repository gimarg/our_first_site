<?php

/* {# inline_template_start #}<div class="link-front fa fa-arrow-circle-right"></div>  
<div class="link-back">View details</div> */
class __TwigTemplate_a0941b5c1f409fdb173073d6bc68362bc697914e9e28d72f0328b886db8f0268 extends Twig_Template
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
        echo "<div class=\"link-front fa fa-arrow-circle-right\"></div>  
<div class=\"link-back\">View details</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"link-front fa fa-arrow-circle-right\"></div>  
<div class=\"link-back\">View details</div>";
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"link-front fa fa-arrow-circle-right\"></div>  
<div class=\"link-back\">View details</div>";
    }
}

<?php

/* {# inline_template_start #}<div class="link-front fa fa-link"></div>  
<div class="link-back">Visit website</div>   */
class __TwigTemplate_fe9fa3133432850dc990f91e82bd15889a9c811debadb3eb7f643f7184a416ad extends Twig_Template
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
        echo "<div class=\"link-front fa fa-link\"></div>  
<div class=\"link-back\">Visit website</div>  ";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"link-front fa fa-link\"></div>  
<div class=\"link-back\">Visit website</div>  ";
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"link-front fa fa-link\"></div>  
<div class=\"link-back\">Visit website</div>  ";
    }
}

<?php

/* {# inline_template_start #}<a>
<div class="link-front fa fa-comments"></div>  
<div class="link-back no-content">no testimonial added yet</div>  
</a> */
class __TwigTemplate_b6e121066476a7545511ca91b9e73c9b0b95c153e9eaf20fb33cf14c15bc3e24 extends Twig_Template
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
        echo "<a>
<div class=\"link-front fa fa-comments\"></div>  
<div class=\"link-back no-content\">no testimonial added yet</div>  
</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a>
<div class=\"link-front fa fa-comments\"></div>  
<div class=\"link-back no-content\">no testimonial added yet</div>  
</a>";
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<a>
<div class=\"link-front fa fa-comments\"></div>  
<div class=\"link-back no-content\">no testimonial added yet</div>  
</a>";
    }
}

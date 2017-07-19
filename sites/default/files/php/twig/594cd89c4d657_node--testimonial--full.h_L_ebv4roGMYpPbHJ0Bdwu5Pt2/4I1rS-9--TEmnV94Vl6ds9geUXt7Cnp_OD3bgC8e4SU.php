<?php

/* themes/our_custom_theme/templates/nodes/node--testimonial--full.html.twig */
class __TwigTemplate_e2cc12bec532caaccb2f4b4b32953617fb28d8fe5b0bbe1e8a289542806e6a7a extends Twig_Template
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
        $tags = array("set" => 69, "if" => 95);
        $filters = array("clean_class" => 70, "trans" => 90);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'trans'),
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

        // line 69
        $context["classes"] = array(0 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 70
(isset($context["node"]) ? $context["node"] : null), "bundle", array())), 1 => (($this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 2 => (($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 3 => (( !$this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 4 => ((        // line 74
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null))) : ("")), 5 => "clearfix", 6 => "col-sm-8");
        // line 79
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <div";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
        echo ">
    ";
        // line 81
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
        echo "
    ";
        // line 83
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_intro", array()), "html", null, true));
        echo "
      ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
        echo "
    ";
        // line 86
        echo "    ";
        // line 87
        echo "  </div>
</article>
<aside id=\"project_sidebar\" class=\"col-sm-4\">
  <div class=\"return\"><a href=\"../blog\" class=\"icon-undo\">";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("View all testimonials")));
        echo "</a></div>
  <ul class=\"project-links\">
    <li>
      ";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_website", array()), "html", null, true));
        echo "
    </li>
    ";
        // line 95
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_project_details", array()), 0, array()), "#url", array(), "array")) {
            // line 96
            echo "      <li>
      <a href=\"";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_project_details", array()), 0, array()), "#url", array(), "array"), "html", null, true));
            echo "\">View Project</a>
        ";
            // line 99
            echo "      </li>
    ";
        }
        // line 101
        echo "  </ul>
  ";
        // line 106
        echo "  <div class=\"share\">
  ";
        // line 107
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Share this testimonial")));
        echo "
  <div class=\"addthis_inline_share_toolbox\"></div>
  </div>
  ";
        // line 111
        echo "</aside>
";
    }

    public function getTemplateName()
    {
        return "themes/our_custom_theme/templates/nodes/node--testimonial--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 111,  109 => 107,  106 => 106,  103 => 101,  99 => 99,  95 => 97,  92 => 96,  90 => 95,  85 => 93,  79 => 90,  74 => 87,  72 => 86,  68 => 84,  63 => 83,  59 => 81,  55 => 80,  50 => 79,  48 => 74,  47 => 73,  46 => 72,  45 => 71,  44 => 70,  43 => 69,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    node.bundle|clean_class,
    node.isPromoted() ? 'is-promoted',
    node.isSticky() ? 'is-sticky',
    not node.isPublished() ? 'is-unpublished',
    view_mode ? view_mode|clean_class,
    'clearfix',
    'col-sm-8'
  ]
%}
<article{{ attributes.addClass(classes) }}>
  <div{{ content_attributes.addClass('content') }}>
    {{ content.field_image }}
    {#{{ content.field_client }}#}
      {{ content.field_intro }}
      {{ content.body }}
    {#{{ content.field_tags }}#}
    {#{{ content.comment }}#}
  </div>
</article>
<aside id=\"project_sidebar\" class=\"col-sm-4\">
  <div class=\"return\"><a href=\"../blog\" class=\"icon-undo\">{{ 'View all testimonials'|trans }}</a></div>
  <ul class=\"project-links\">
    <li>
      {{ content.field_website }}
    </li>
    {% if content.field_project_details.0['#url'] %}
      <li>
      <a href=\"{{ content.field_project_details.0['#url'] }}\">View Project</a>
        {#{{ content.field_project_details }}#}
      </li>
    {% endif %}
  </ul>
  {#<div class=\"contact\">
    <a href=\"/contact\">{{ 'Create your own custom project'|trans }}</a>
    {{ 'Contact us'|trans }}
  </div>#}
  <div class=\"share\">
  {{ 'Share this testimonial'|trans }}
  <div class=\"addthis_inline_share_toolbox\"></div>
  </div>
  {#{{ drupal_block('rotestetogiatro_2') }}#}
</aside>
";
    }
}

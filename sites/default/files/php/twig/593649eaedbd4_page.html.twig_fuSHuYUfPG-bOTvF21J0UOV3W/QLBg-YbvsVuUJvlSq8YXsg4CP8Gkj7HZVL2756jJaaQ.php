<?php

/* themes/our_custom_theme/templates/basic/page.html.twig */
class __TwigTemplate_6fe495eef44e4c75bcd70ad6833d194d3767d783bda87cdb511798359795f3fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'highlighted' => array($this, 'block_highlighted'),
            'sidebar_left' => array($this, 'block_sidebar_left'),
            'content' => array($this, 'block_content'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 61, "block" => 62);
        $filters = array("t" => 105);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('t'),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 61
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()))) {
            // line 62
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 131
        echo "
";
        // line 133
        $this->displayBlock('main', $context, $blocks);
        // line 218
        echo "
";
        // line 220
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 62
    public function block_navbar($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        // line 64
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 66
(isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")));
        // line 69
        echo "    ";
        // line 70
        echo "    <header";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "addClass", array(0 => (isset($context["navbar_classes"]) ? $context["navbar_classes"] : null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 74
        echo "
      <div class=\"admin-bar\">
      ";
        // line 76
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 77
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 79
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "admin_bar", array()), "html", null, true));
        echo "
      ";
        // line 80
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 81
            echo "        </div>
      ";
        }
        // line 83
        echo "      </div>
      
      <div class=\"pre-header\">
      ";
        // line 86
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 87
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 89
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header", array()), "html", null, true));
        echo "
      ";
        // line 90
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 91
            echo "        </div>
      ";
        }
        // line 93
        echo "      </div>
      <div class=\"navbar-header\">
      ";
        // line 95
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 96
            echo "        <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
      ";
        }
        // line 98
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
        echo "
      ";
        // line 99
        if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
            // line 100
            echo "        </div>
      ";
        }
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 104
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 105
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 111
        echo "      </div>

      ";
        // line 114
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 115
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        ";
            // line 116
            if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
                // line 117
                echo "          <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
                echo "\">
        ";
            }
            // line 119
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
        ";
            // line 120
            if ( !$this->getAttribute((isset($context["navbar_attributes"]) ? $context["navbar_attributes"] : null), "hasClass", array(0 => (isset($context["container"]) ? $context["container"] : null)), "method")) {
                // line 121
                echo "          </div>
        ";
            }
            // line 123
            echo "        </div>
      ";
        }
        // line 125
        echo "      ";
        // line 128
        echo "    </header>
  ";
    }

    // line 133
    public function block_main($context, array $blocks = array())
    {
        // line 134
        echo "  <div role=\"main\" class=\"main-container container-fluid js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 138
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 139
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 144
            echo "      ";
        }
        // line 145
        echo "

      ";
        // line 148
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 149
            echo "        ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 152
            echo "      ";
        }
        // line 153
        echo "
      
       ";
        // line 156
        echo "      ";
        // line 163
        echo "
      ";
        // line 165
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array())) {
            // line 166
            echo "          ";
            $this->displayBlock('sidebar_left', $context, $blocks);
            // line 171
            echo "        ";
        }
        // line 172
        echo "

      <section class=\"main-content col-sm-12\" >
        <div class=\"";
        // line 175
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\">

          ";
        // line 178
        echo "          ";
        // line 179
        $context["content_classes"] = array(0 => (($this->getAttribute(        // line 180
(isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) ? ("col-sm-8") : ("")), 1 => ((twig_test_empty($this->getAttribute(        // line 181
(isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()))) ? ("col-sm-12") : ("")));
        // line 184
        echo "
          ";
        // line 186
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 193
        echo "          ";
        // line 194
        echo "
          ";
        // line 196
        echo "          ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array())) {
            // line 197
            echo "            ";
            $this->displayBlock('sidebar_right', $context, $blocks);
            // line 202
            echo "          ";
        }
        // line 203
        echo "        </div>
      </section>

      ";
        // line 207
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_footer", array())) {
            // line 208
            echo "          <div class=\"pre-footer col-sm-12\">
            <div class=\"";
            // line 209
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo "\">
              ";
            // line 210
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_footer", array()), "html", null, true));
            echo "
            </div>
          </div>
      ";
        }
        // line 214
        echo "
    </div>
  </div>
";
    }

    // line 139
    public function block_header($context, array $blocks = array())
    {
        // line 140
        echo "          <div class=\"col-sm-12 ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\" role=\"heading\">
            ";
        // line 141
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 149
    public function block_highlighted($context, array $blocks = array())
    {
        // line 150
        echo "          <div class=\"highlighted ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
        ";
    }

    // line 166
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 167
        echo "            <aside id=\"sidebar_left\" class=\"col-sm-1\" role=\"complementary\">
              ";
        // line 168
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_left", array()), "html", null, true));
        echo "
            </aside>
          ";
    }

    // line 186
    public function block_content($context, array $blocks = array())
    {
        // line 187
        echo "              <div ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">
                ";
        // line 189
        echo "                  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
                ";
        // line 191
        echo "              </div>
            ";
    }

    // line 197
    public function block_sidebar_right($context, array $blocks = array())
    {
        // line 198
        echo "              <aside id=\"sidebar_right\" class=\"col-sm-4\" role=\"complementary\">
                ";
        // line 199
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_right", array()), "html", null, true));
        echo "
              </aside>
            ";
    }

    // line 220
    public function block_footer($context, array $blocks = array())
    {
        // line 221
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"";
        // line 222
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " footer-region\">
        <div class=\"footer_1 col-sm-3\"> ";
        // line 223
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_col1", array()), "html", null, true));
        echo " </div>
        <div class=\"footer_2 col-sm-3\"> ";
        // line 224
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_col2", array()), "html", null, true));
        echo " </div>
        <div class=\"footer_3 col-sm-3\"> ";
        // line 225
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_col3", array()), "html", null, true));
        echo " </div>
        <div class=\"footer_4 col-sm-3\"> ";
        // line 226
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_col4", array()), "html", null, true));
        echo " </div>
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/our_custom_theme/templates/basic/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 226,  416 => 225,  412 => 224,  408 => 223,  404 => 222,  401 => 221,  398 => 220,  391 => 199,  388 => 198,  385 => 197,  380 => 191,  375 => 189,  370 => 187,  367 => 186,  360 => 168,  357 => 167,  354 => 166,  345 => 150,  342 => 149,  335 => 141,  330 => 140,  327 => 139,  320 => 214,  313 => 210,  309 => 209,  306 => 208,  303 => 207,  298 => 203,  295 => 202,  292 => 197,  289 => 196,  286 => 194,  284 => 193,  281 => 186,  278 => 184,  276 => 181,  275 => 180,  274 => 179,  272 => 178,  267 => 175,  262 => 172,  259 => 171,  256 => 166,  253 => 165,  250 => 163,  248 => 156,  244 => 153,  241 => 152,  238 => 149,  235 => 148,  231 => 145,  228 => 144,  225 => 139,  222 => 138,  217 => 134,  214 => 133,  209 => 128,  207 => 125,  203 => 123,  199 => 121,  197 => 120,  192 => 119,  186 => 117,  184 => 116,  181 => 115,  178 => 114,  174 => 111,  165 => 105,  162 => 104,  159 => 103,  157 => 102,  153 => 100,  151 => 99,  146 => 98,  140 => 96,  138 => 95,  134 => 93,  130 => 91,  128 => 90,  123 => 89,  117 => 87,  115 => 86,  110 => 83,  106 => 81,  104 => 80,  99 => 79,  93 => 77,  91 => 76,  87 => 74,  82 => 70,  80 => 69,  78 => 66,  77 => 64,  75 => 63,  72 => 62,  67 => 220,  64 => 218,  62 => 133,  59 => 131,  55 => 62,  53 => 61,  51 => 59,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
      ]
    %}
    {# theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container, #}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {#{% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}#}

      <div class=\"admin-bar\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
        {{ page.admin_bar }}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
      </div>
      
      <div class=\"pre-header\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
        {{ page.pre_header }}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
      </div>
      <div class=\"navbar-header\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
        {{ page.navigation }}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>

      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
        {% if not navbar_attributes.hasClass(container) %}
          <div class=\"{{ container }}\">
        {% endif %}
          {{ page.navigation_collapsible }}
        {% if not navbar_attributes.hasClass(container) %}
          </div>
        {% endif %}
        </div>
      {% endif %}
      {#{% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}#}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container container-fluid js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12 {{ container }}\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}


      {# Highlighted #}
      {% if page.highlighted %}
        {% block highlighted %}
          <div class=\"highlighted {{ container }}\">{{ page.highlighted }}</div>
        {% endblock %}
      {% endif %}

      
       {#Main Content #}
      {#{%
        set main_content_classes = [
          page.sidebar_left ? 'col-sm-11',
          page.sidebar_left is empty ? 'col-sm-12',
          'main-content'
        ]
      %}#}

      {# Left Sidebar #}
        {% if page.sidebar_left %}
          {% block sidebar_left %}
            <aside id=\"sidebar_left\" class=\"col-sm-1\" role=\"complementary\">
              {{ page.sidebar_left }}
            </aside>
          {% endblock %}
        {% endif %}


      <section class=\"main-content col-sm-12\" >
        <div class=\"{{ container }}\">

          {# Content #}
          {%
            set content_classes = [
              page.sidebar_right ? 'col-sm-8',
              page.sidebar_right is empty ? 'col-sm-12'
            ]
          %}

          {#{% if content %}#}
            {% block content %}
              <div {{ content_attributes.addClass(content_classes) }}>
                {#<div class=\"{{ container }}\">#}
                  {{ page.content }}
                {#</div>#}
              </div>
            {% endblock %}
          {#{% endif %}#}

          {# Right Sidebar #}
          {% if page.sidebar_right %}
            {% block sidebar_right %}
              <aside id=\"sidebar_right\" class=\"col-sm-4\" role=\"complementary\">
                {{ page.sidebar_right }}
              </aside>
            {% endblock %}
          {% endif %}
        </div>
      </section>

      {# Pre Footer #}
      {% if page.pre_footer %}
          <div class=\"pre-footer col-sm-12\">
            <div class=\"{{ container }}\">
              {{ page.pre_footer }}
            </div>
          </div>
      {% endif %}

    </div>
  </div>
{% endblock %}

{#{% if page.footer %}#}
  {% block footer %}
    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"{{ container }} footer-region\">
        <div class=\"footer_1 col-sm-3\"> {{ page.footer_col1 }} </div>
        <div class=\"footer_2 col-sm-3\"> {{ page.footer_col2 }} </div>
        <div class=\"footer_3 col-sm-3\"> {{ page.footer_col3 }} </div>
        <div class=\"footer_4 col-sm-3\"> {{ page.footer_col4 }} </div>
      </div>
    </footer>
  {% endblock %}
{#{% endif %}#}
";
    }
}

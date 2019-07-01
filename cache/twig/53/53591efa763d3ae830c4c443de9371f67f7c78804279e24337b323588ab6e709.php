<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_9a33498c50cb375701357976d7ee84fa636335058897384f9da9961a7acfaaca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["multi_course_hub"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("multi_course_hub.enabled");
        // line 2
        $context["arrayofpath"] = twig_split_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "path", []), "/");
        // line 3
        $context["firstfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 1, [], "array");
        // line 4
        $context["secondfolderofpath"] = $this->getAttribute(($context["arrayofpath"] ?? null), 2, [], "array");
        // line 5
        echo "
";
        // line 7
        if ((($context["multi_course_hub"] ?? null) || ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "template", []) == "course"))) {
            // line 8
            echo "  ";
            if (($context["firstfolderofpath"] ?? null)) {
                // line 9
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ("/" . ($context["firstfolderofpath"] ?? null))], "method"), "title", []);
                // line 10
                echo "  ";
            } else {
                // line 11
                echo "    ";
                $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
                // line 12
                echo "  ";
            }
            // line 13
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (("/" . ($context["firstfolderofpath"] ?? null)) . "/footer")], "method"), "content", []);
            // line 14
            echo "  ";
            if ((($context["footer_content"] ?? null) == ($context["empty"] ?? null))) {
                // line 15
                echo "    ";
                $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
                // line 16
                echo "  ";
            }
        } elseif (($this->getAttribute($this->getAttribute(        // line 17
($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "template", []) == "course")) {
            // line 18
            echo "  ";
            $context["site_title"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "header", []), "course_site_title", []);
            // line 19
            echo "  ";
            if (twig_test_empty(($context["site_title"] ?? null))) {
                // line 20
                echo "    ";
                $context["site_title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => ((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null))], "method"), "title", []);
                // line 21
                echo "  ";
            }
            // line 22
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => (((("/" . ($context["firstfolderofpath"] ?? null)) . "/") . ($context["secondfolderofpath"] ?? null)) . "/footer")], "method"), "content", []);
            // line 23
            echo "  ";
            if ((($context["footer_content"] ?? null) == ($context["empty"] ?? null))) {
                // line 24
                echo "    ";
                $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
                // line 25
                echo "  ";
            }
        } else {
            // line 27
            echo "  ";
            $context["site_title"] = twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
            // line 28
            echo "  ";
            $context["footer_content"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
        }
        // line 30
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 32
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 34
        $this->displayBlock('head', $context, $blocks);
        // line 76
        echo "    </head>

    <body class=\"";
        // line 78
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">

        ";
        // line 81
        echo "        ";
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 82
            echo "
          ";
            // line 83
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
                // line 84
                echo "              ";
                $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 84)->display($context);
                // line 85
                echo "          ";
            }
            // line 86
            echo "
          ";
            // line 87
            $this->displayBlock('header_navigation', $context, $blocks);
            // line 90
            echo "        ";
        }
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('content', $context, $blocks);
        // line 93
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 94
        echo "
        ";
        // line 95
        if (( !($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) &&  !$this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            // line 96
            echo "          <div class=\"footer\">
              <div class=\"container\">
                ";
            // line 98
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/footer"], "method"), "header", []), "footer_scroll", [])) {
                // line 99
                echo "                  ";
                // line 100
                echo "                  <div class=\"up-arrow\">
                    <a href=\"#\" id=\"top\" title=\"Top of Page\">
                      <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
                    </a>
                  </div>
                ";
            }
            // line 106
            echo "                ";
            // line 107
            echo "                <div class=\"text-muted\">
                  ";
            // line 108
            if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true) && ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "git_sync_repo_link_display", []) == "footer")) || ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("display_of_git_sync_repo_link") == "footer") &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "git_sync_repo_link_display", [], "any", true, true)) &&  !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hide_git_sync_repo_link", [])))) {
                // line 109
                echo "                    <p>";
                $this->loadTemplate("partials/git_sync_repo_link.html.twig", "partials/base.html.twig", 109)->display($context);
                echo "</p>
                  ";
            }
            // line 111
            echo "                  ";
            if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("git_sync_edit_theme_link_location") == "footer")) {
                // line 112
                echo "                    <p>";
                $this->loadTemplate("partials/git_sync_theme_link.html.twig", "partials/base.html.twig", 112)->display($context);
                echo "</p>
                  ";
            }
            // line 114
            echo "                  ";
            if (($context["footer_content"] ?? null)) {
                // line 115
                echo "                    ";
                echo ($context["footer_content"] ?? null);
                echo "
                  ";
            }
            // line 117
            echo "                  </div>
              </div>
          </div>
        ";
        }
        // line 121
        echo "
        ";
        // line 122
        $this->displayBlock('bottom', $context, $blocks);
        // line 125
        echo "
        ";
        // line 127
        echo "        ";
        $this->loadTemplate("partials/scripts.html.twig", "partials/base.html.twig", 127)->display($context);
        // line 128
        echo "
    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 34
    public function block_head($context, array $blocks = [])
    {
        // line 35
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        ";
        // line 39
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "
        <title>";
        // line 41
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo ($context["site_title"] ?? null);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 42
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />

        ";
        // line 44
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "
        ";
        // line 70
        $this->displayBlock('assets', $context, $blocks);
        // line 74
        echo "
        ";
    }

    // line 44
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 45
        echo "            ";
        // line 46
        echo "            ";
        if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("theme_stylesheet") != "default")) {
            // line 47
            echo "              ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => (("theme://css/bootswatch/" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("theme_stylesheet")) . "/bootstrap.min.css"), 1 => 100], "method");
            // line 48
            echo "            ";
        } else {
            // line 49
            echo "              ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap/bootstrap.min.css"], "method");
            // line 50
            echo "            ";
        }
        // line 51
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 52
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/theme.css"], "method");
        // line 53
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/theme.css"], "method");
        // line 54
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 55
        echo "        ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        // line 58
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 59
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr-custom.js", 1 => 100], "method");
        // line 60
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 61
        echo "            ";
        // line 62
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/my.js", 1 => 99], "method");
        // line 63
        echo "
            ";
        // line 64
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 65
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 66
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 67
            echo "            ";
        }
        // line 68
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 70
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 71
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 72
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 78
    public function block_body_classes($context, array $blocks = [])
    {
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        if ((($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "chromeless"], "method") || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "param", [0 => "embedded"], "method")) || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("chromeless.enabled"))) {
            echo " chromeless";
        }
    }

    // line 87
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 88
        echo "              ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 88)->display($context);
        // line 89
        echo "          ";
    }

    // line 92
    public function block_content($context, array $blocks = [])
    {
    }

    // line 93
    public function block_pagination($context, array $blocks = [])
    {
    }

    // line 122
    public function block_bottom($context, array $blocks = [])
    {
        // line 123
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  407 => 123,  404 => 122,  399 => 93,  394 => 92,  390 => 89,  387 => 88,  384 => 87,  375 => 78,  368 => 72,  363 => 71,  360 => 70,  351 => 68,  348 => 67,  345 => 66,  342 => 65,  340 => 64,  337 => 63,  334 => 62,  332 => 61,  329 => 60,  326 => 59,  323 => 58,  320 => 57,  316 => 55,  313 => 54,  310 => 53,  307 => 52,  304 => 51,  301 => 50,  298 => 49,  295 => 48,  292 => 47,  289 => 46,  287 => 45,  284 => 44,  279 => 74,  277 => 70,  274 => 69,  272 => 57,  269 => 56,  267 => 44,  262 => 42,  254 => 41,  251 => 40,  249 => 39,  243 => 35,  240 => 34,  232 => 128,  229 => 127,  226 => 125,  224 => 122,  221 => 121,  215 => 117,  209 => 115,  206 => 114,  200 => 112,  197 => 111,  191 => 109,  189 => 108,  186 => 107,  184 => 106,  176 => 100,  174 => 99,  172 => 98,  168 => 96,  166 => 95,  163 => 94,  160 => 93,  158 => 92,  155 => 91,  152 => 90,  150 => 87,  147 => 86,  144 => 85,  141 => 84,  139 => 83,  136 => 82,  133 => 81,  128 => 78,  124 => 76,  122 => 34,  117 => 32,  113 => 30,  109 => 28,  106 => 27,  102 => 25,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  50 => 7,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set multi_course_hub = theme_var('multi_course_hub.enabled') %}
{% set arrayofpath = uri.path|split('/') %}
{% set firstfolderofpath = arrayofpath[1] %}
{% set secondfolderofpath = arrayofpath[2] %}

{# MultiCourse hub compatibility - hibbittsdesign.org #}
{% if multi_course_hub or page.find('/' ~ firstfolderofpath).template == 'course' %}
  {% if firstfolderofpath %}
    {% set site_title = page.find('/' ~ firstfolderofpath ).title %}
  {% else %}
    {% set site_title = site.title|e('html') %}
  {% endif %}
  {% set footer_content = page.find('/' ~ firstfolderofpath ~ '/footer').content %}
  {% if footer_content == empty %}
    {% set footer_content = page.find('/footer').content %}
  {% endif %}
{% elseif page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).template == 'course' %}
  {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).header.course_site_title %}
  {% if site_title is empty %}
    {% set site_title = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath).title %}
  {% endif %}
  {% set footer_content = page.find('/' ~ firstfolderofpath ~ '/' ~ secondfolderofpath ~ '/footer').content %}
  {% if footer_content == empty %}
    {% set footer_content = page.find('/footer').content %}
  {% endif %}
{% else %}
  {% set site_title = site.title|e('html') %}
  {% set footer_content = page.find('/footer').content %}
{% endif %}

<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        {% include 'partials/metadata.html.twig' %}

        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site_title }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />

        {% block stylesheets %}
            {# load theme.css and custom.css files - hibbittsdesign.org #}
            {% if theme_var('theme_stylesheet') != 'default' %}
              {% do assets.addCss(\"theme://css/bootswatch/#{ theme_var('theme_stylesheet') }/bootstrap.min.css\", 100) %}
            {% else %}
              {% do assets.addCss('theme://css/bootstrap/bootstrap.min.css') %}
            {% endif %}
            {% do assets.add('theme://css/font-awesome.min.css') %}
            {% do assets.add('theme://css-compiled/theme.css') %}
            {% do assets.addCss('theme://css/theme.css') %}
            {% do assets.addCss('theme://css/custom.css') %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery', 101) %}
            {% do assets.add('theme://js/modernizr-custom.js', 100) %}
            {% do assets.add('theme://js/site.js', {group:'bottom'}) %}
            {# load custom js - hibbittsdesign.org #}
            {% do assets.addJs('theme://js/my.js', 99) %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
            {% endif %}
        {% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

        {% endblock head %}
    </head>

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% if (grav.uri.param('chromeless') or grav.uri.param('embedded')) or (theme_var('chromeless.enabled')) %} chromeless{% endif %}{% endblock %}\">

        {# check content display flag - hibbittsdesign.org #}
        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}

          {% if config.plugins.langswitcher.enabled %}
              {% include 'partials/langswitcher.html.twig' %}
          {% endif %}

          {% block header_navigation %}
              {% include 'partials/navigation.html.twig' %}
          {% endblock %}
        {% endif %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        {% if not (grav.uri.param('chromeless') or grav.uri.param('embedded')) and not(theme_var('chromeless.enabled')) %}
          <div class=\"footer\">
              <div class=\"container\">
                {% if page.find('/footer').header.footer_scroll %}
                  {# added top of page navigation element - hibbittsdesign.org #}
                  <div class=\"up-arrow\">
                    <a href=\"#\" id=\"top\" title=\"Top of Page\">
                      <i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i>
                    </a>
                  </div>
                {% endif %}
                {# use footer folder page for content - hibbittsdesign.org #}
                <div class=\"text-muted\">
                  {% if (page.header.git_sync_repo_link_display is defined and page.header.git_sync_repo_link_display == 'footer' ) or (( theme_var('display_of_git_sync_repo_link') == 'footer' and page.header.git_sync_repo_link_display is not defined ) and not (page.header.hide_git_sync_repo_link)) %}
                    <p>{% include 'partials/git_sync_repo_link.html.twig' %}</p>
                  {% endif %}
                  {% if theme_var('git_sync_edit_theme_link_location') == 'footer' %}
                    <p>{% include 'partials/git_sync_theme_link.html.twig' %}</p>
                  {% endif %}
                  {% if footer_content %}
                    {{ footer_content|raw }}
                  {% endif %}
                  </div>
              </div>
          </div>
        {% endif %}

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}

        {# added global scripts - hibbittsdesign.org #}
        {% include 'partials/scripts.html.twig' %}

    </body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/bootstrap4-open-matter/templates/partials/base.html.twig");
    }
}

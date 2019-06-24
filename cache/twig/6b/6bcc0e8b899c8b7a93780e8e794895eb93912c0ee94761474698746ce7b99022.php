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
class __TwigTemplate_d1a1b844773f79f830b548bd11f2ceac9bf95f76a18b7a6caf16f02a1436d12c extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'social' => [$this, 'block_social'],
            'header_extra' => [$this, 'block_header_extra'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'showcase' => [$this, 'block_showcase'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 47
        echo "</head>
<body id=\"top\" class=\"";
        // line 48
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 50
        $this->displayBlock('header', $context, $blocks);
        // line 68
        echo "
        ";
        // line 69
        $this->displayBlock('showcase', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 84
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 84)->display($context);
        // line 85
        echo "        </div>
    </div>
    ";
        // line 87
        $this->displayBlock('bottom', $context, $blocks);
        // line 100
        echo "</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
    ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('assets', $context, $blocks);
        // line 45
        echo "
";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/template.css", 1 => 101], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slidebars.min.css"], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/slideme.css"], "method");
        // line 19
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 20
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie9.css"], "method");
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/pure-0.5.0/grids-min.css"], "method");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "    ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/deliver.js"], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/slidebars.min.js"], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.slideme2.js"], "method");
        // line 35
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sticky_menu", []), "enabled", [])) {
            // line 36
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-scrolltofixed-min.js"], "method");
            // line 37
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/fixed-header.js"], "method");
            // line 38
            echo "        ";
        }
        // line 39
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 41
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 42
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 43
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 50
    public function block_header($context, array $blocks = [])
    {
        // line 51
        echo "        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"";
        // line 53
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</a></h3>
                    ";
        // line 54
        $this->displayBlock('social', $context, $blocks);
        // line 57
        echo "                </div>
                <div id=\"navbar\">
                    ";
        // line 59
        $this->displayBlock('header_extra', $context, $blocks);
        // line 60
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 63
        echo "                    ";
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 63)->display($context);
        // line 64
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 54
    public function block_social($context, array $blocks = [])
    {
        // line 55
        echo "                        ";
        $this->loadTemplate("partials/social.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "                    ";
    }

    // line 59
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 60
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 61
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 61)->display($context);
        // line 62
        echo "                    ";
    }

    // line 69
    public function block_showcase($context, array $blocks = [])
    {
    }

    // line 71
    public function block_body($context, array $blocks = [])
    {
        // line 72
        echo "        <section id=\"body\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
            ";
        // line 73
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "
            ";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "        </section>
        ";
    }

    // line 73
    public function block_content($context, array $blocks = [])
    {
    }

    // line 75
    public function block_footer($context, array $blocks = [])
    {
        // line 76
        echo "            ";
        $this->loadTemplate("modular/footer.html.twig", "partials/base.html.twig", 76)->display($context);
        // line 77
        echo "            ";
    }

    // line 87
    public function block_bottom($context, array $blocks = [])
    {
        // line 88
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
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
        return array (  342 => 88,  339 => 87,  335 => 77,  332 => 76,  329 => 75,  324 => 73,  319 => 78,  317 => 75,  314 => 74,  312 => 73,  307 => 72,  304 => 71,  299 => 69,  295 => 62,  292 => 61,  289 => 60,  284 => 59,  280 => 56,  277 => 55,  274 => 54,  267 => 64,  264 => 63,  261 => 60,  259 => 59,  255 => 57,  253 => 54,  247 => 53,  243 => 51,  240 => 50,  233 => 43,  228 => 42,  225 => 41,  216 => 39,  213 => 38,  210 => 37,  207 => 36,  204 => 35,  201 => 34,  198 => 33,  195 => 32,  192 => 31,  189 => 30,  186 => 29,  182 => 27,  179 => 26,  176 => 25,  173 => 24,  170 => 23,  167 => 22,  164 => 21,  161 => 20,  158 => 19,  155 => 18,  152 => 17,  149 => 16,  146 => 15,  143 => 14,  140 => 13,  137 => 12,  132 => 45,  130 => 41,  127 => 40,  125 => 29,  122 => 28,  120 => 12,  115 => 10,  112 => 9,  110 => 8,  102 => 7,  99 => 6,  96 => 5,  89 => 100,  87 => 87,  83 => 85,  81 => 84,  75 => 80,  73 => 71,  70 => 70,  68 => 69,  65 => 68,  63 => 50,  58 => 48,  55 => 47,  53 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/nucleus.css',102) %}
        {% do assets.addCss('theme://css-compiled/template.css',101) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/slidebars.min.css') %}
        {% do assets.addCss('theme://css/slideme.css') %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addCss('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.add('jquery', 101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/deliver.js') %}
        {% do assets.addJs('theme://js/slidebars.min.js') %}
        {% do assets.addJs('theme://js/jquery.slideme2.js') %}
        {% if theme_config.sticky_menu.enabled %}
            {% do assets.addJs('theme://js/jquery-scrolltofixed-min.js') %}
            {% do assets.addJs('theme://js/fixed-header.js') %}
        {% endif %}
    {% endblock %}

    {% block assets deferred %}
        {{ assets.css()|raw }}
        {{ assets.js()|raw }}
    {% endblock %}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
                <div class=\"logo\">
                    <h3><a href=\"{{ base_url_absolute }}\">{{ config.site.title }}</a></h3>
                    {% block social %}
                        {% include 'partials/social.html.twig' %}
                    {% endblock %}
                </div>
                <div id=\"navbar\">
                    {% block header_extra %}{% endblock %}
                    {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
                    {% include 'partials/search.html.twig' %}
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        {% endblock %}

        {% block showcase %}{% endblock %}

        {% block body %}
        <section id=\"body\" class=\"{{ class }}\">
            {% block content %}{% endblock %}

            {% block footer %}
            {% include 'modular/footer.html.twig' %}
            {% endblock %}
        </section>
        {% endblock %}

    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
    {{ assets.js('bottom')|raw }}
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
    });
    </script>
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/deliver/templates/partials/base.html.twig");
    }
}

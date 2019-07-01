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
class __TwigTemplate_d59625872e297bc69c8652503f5541388c39b7608927dbcae59fea2bb1acc759 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "    </head>

    <body class=\"";
        // line 37
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        ";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 39
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 39)->display($context);
            // line 40
            echo "        ";
        }
        // line 41
        echo "
        ";
        // line 42
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 48
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap 4 Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>

        ";
        // line 55
        $this->displayBlock('bottom', $context, $blocks);
        // line 58
        echo "    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <meta charset=\"utf-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
            ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "
            <title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
            <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />

            ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
            ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('assets', $context, $blocks);
        // line 33
        echo "
        ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 14
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css", 1 => 99], "method");
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/theme.css", 1 => 98], "method");
        // line 16
        echo "            ";
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
        // line 19
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 20
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr-custom.js", 1 => 100], "method");
        // line 21
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 22
        echo "
                ";
        // line 23
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 24
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 25
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 26
            echo "                ";
        }
        // line 27
        echo "            ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 29
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 30
        echo "                ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
                ";
        // line 31
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 37
    public function block_body_classes($context, array $blocks = [])
    {
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
    }

    // line 42
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 43
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "        ";
    }

    // line 46
    public function block_content($context, array $blocks = [])
    {
    }

    // line 47
    public function block_pagination($context, array $blocks = [])
    {
    }

    // line 55
    public function block_bottom($context, array $blocks = [])
    {
        // line 56
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
        return array (  231 => 56,  228 => 55,  223 => 47,  218 => 46,  214 => 44,  211 => 43,  208 => 42,  202 => 37,  195 => 31,  190 => 30,  187 => 29,  178 => 27,  175 => 26,  172 => 25,  169 => 24,  167 => 23,  164 => 22,  161 => 21,  158 => 20,  155 => 19,  152 => 18,  148 => 16,  145 => 15,  142 => 14,  139 => 13,  134 => 33,  132 => 29,  129 => 28,  127 => 18,  124 => 17,  122 => 13,  117 => 11,  109 => 10,  106 => 9,  104 => 8,  99 => 5,  96 => 4,  89 => 58,  87 => 55,  78 => 48,  75 => 47,  73 => 46,  70 => 45,  68 => 42,  65 => 41,  62 => 40,  59 => 39,  57 => 38,  53 => 37,  49 => 35,  47 => 4,  42 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\" />
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
            {% include 'partials/metadata.html.twig' %}

            <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
            <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />

            {% block stylesheets %}
                {% do assets.add('theme://css/font-awesome.min.css', 99) %}
                {% do assets.add('theme://css-compiled/theme.css', 98) %}
            {% endblock %}

            {% block javascripts %}
                {% do assets.add('jquery', 101) %}
                {% do assets.add('theme://js/modernizr-custom.js', 100) %}
                {% do assets.add('theme://js/site.js', {group:'bottom'}) %}

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

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\">
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}

        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap 4 Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>

        {% block bottom %}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/bootstrap4/templates/partials/base.html.twig");
    }
}

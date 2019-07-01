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
class __TwigTemplate_e944818ce709a20320688cbbf692056301ddead657ab739c562fd264012eb2a7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ("en"));
        echo "\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "    </head>

    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "
        <div class=\"site-wrapper\">

            ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "
            <footer class=\"site-footer clearfix\">
                <section class=\"copyright\"><a href=\"";
        // line 48
        echo ($context["base_url"] ?? null);
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a> &copy; 2016</section>
                <section class=\"poweredby\">Proudly published with <a href=\"https://getgrav.org\">Grav</a></section>
                <section class=\"poweredby\"><a href=\"https://github.com/koca/grav-theme-masonry\">Theme</a> Ported by <a href=\"http://mesutkoca.com\">Mesut Koca</a></section>
            </footer>
        </div>

        ";
        // line 55
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 72
        echo "
    </body>
    ";
        // line 74
        $this->displayBlock('bottom', $context, $blocks);
        // line 75
        echo "</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"HandheldFriendly\" content=\"True\" />
        ";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "description", []);
            echo "\">
        ";
        } else {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["site"] ?? null), "description", []);
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 15
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
        ";
        }
        // line 17
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\">

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 21
            echo "        <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        <title>";
        // line 24
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>

        ";
        // line 27
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400\" />

        ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "
        ";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 30
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/screen.css", 1 => 101], "method");
        // line 31
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
    }

    // line 37
    public function block_body($context, array $blocks = [])
    {
        // line 38
        echo "    <body class=\"home-template nav-closed\">
    ";
    }

    // line 45
    public function block_content($context, array $blocks = [])
    {
    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        // line 56
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 57
        echo "
            ";
        // line 59
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/index.js"], "method");
        // line 60
        echo "
            ";
        // line 62
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/prism.js"], "method");
        // line 63
        echo "
            ";
        // line 65
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 66
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"], "method");
            // line 67
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 68
            echo "            ";
        }
        // line 69
        echo "
            ";
        // line 70
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
    }

    // line 74
    public function block_bottom($context, array $blocks = [])
    {
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
        return array (  261 => 74,  255 => 70,  252 => 69,  249 => 68,  246 => 67,  243 => 66,  240 => 65,  237 => 63,  234 => 62,  231 => 60,  228 => 59,  225 => 57,  222 => 56,  219 => 55,  214 => 45,  209 => 38,  206 => 37,  199 => 31,  196 => 30,  193 => 29,  188 => 33,  186 => 29,  182 => 27,  173 => 24,  170 => 23,  137 => 21,  133 => 20,  128 => 18,  125 => 17,  119 => 15,  116 => 14,  110 => 12,  104 => 10,  102 => 9,  96 => 5,  93 => 4,  88 => 75,  86 => 74,  82 => 72,  79 => 55,  68 => 48,  64 => 46,  62 => 45,  57 => 42,  55 => 41,  52 => 40,  50 => 37,  46 => 35,  44 => 4,  39 => 2,  36 => 1,);
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
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
    <head>
        {% block head %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"HandheldFriendly\" content=\"True\" />
        {% if header.description %}
        <meta name=\"description\" content=\"{{ header.description }}\">
        {% else %}
        <meta name=\"description\" content=\"{{ site.description }}\">
        {% endif %}
        {% if header.robots %}
        <meta name=\"robots\" content=\"{{ header.robots }}\">
        {% endif %}

        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">

        {% for meta in page.metadata %}
        <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
        {% endfor %}

        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

        {# Fonts #}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//fonts.googleapis.com/css?family=Merriweather:300,700,700italic,300italic|Open+Sans:700,400\" />

        {% block stylesheets %}
            {% do assets.add('theme://css/screen.css',101) %}
            {{ assets.css() }}
        {% endblock %}

        {% endblock head %}
    </head>

    {% block body %}
    <body class=\"home-template nav-closed\">
    {% endblock %}

        {% include 'partials/navigation.html.twig' %}

        <div class=\"site-wrapper\">

            {% block content %}{% endblock %}

            <footer class=\"site-footer clearfix\">
                <section class=\"copyright\"><a href=\"{{base_url}}\">{{site.title}}</a> &copy; 2016</section>
                <section class=\"poweredby\">Proudly published with <a href=\"https://getgrav.org\">Grav</a></section>
                <section class=\"poweredby\"><a href=\"https://github.com/koca/grav-theme-masonry\">Theme</a> Ported by <a href=\"http://mesutkoca.com\">Mesut Koca</a></section>
            </footer>
        </div>

        {# Footer JS #}
        {% block javascripts %}
            {% do assets.add('jquery', 101) %}

            {# Main JS #}
            {% do assets.add('theme://js/index.js') %}

            {# Highlighting #}
            {% do assets.add('theme://js/prism.js') %}

            {# ... #}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
            {% endif %}

            {{ assets.js() }}
        {% endblock %}

    </body>
    {% block bottom %}{% endblock %}
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/masonry/templates/partials/base.html.twig");
    }
}

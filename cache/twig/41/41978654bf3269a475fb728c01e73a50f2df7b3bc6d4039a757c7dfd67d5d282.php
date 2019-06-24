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
class __TwigTemplate_01b7b62acdb72a58514d61a6aef41962372ca03e60224524213aaa4b2f97d145 extends \Twig\Template
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
            'header_navigation' => [$this, 'block_header_navigation'],
            'banner' => [$this, 'block_banner'],
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
        echo "<!DOCTYPE HTML>
<!--
\tLanded by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang=\"";
        // line 8
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "</head>
<body class=\"";
        // line 44
        echo twig_join_filter([0 => "is-preload", 1 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", [])], " ");
        echo "\">
\t<div id=\"page-wrapper\">

    ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "
    </div>
";
        // line 98
        $this->displayBlock('bottom', $context, $blocks);
        // line 101
        echo "
</body>
</html>
";
    }

    // line 10
    public function block_head($context, array $blocks = [])
    {
        // line 11
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "descriptive_title", []), "html");
        echo "</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    ";
        // line 15
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 15)->display($context);
        // line 16
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 18
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    <!-- TODO: <noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript> -->
    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('assets', $context, $blocks);
        // line 41
        echo "
";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css", 1 => 100], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
        // line 24
        echo "    ";
    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.min.js", 1 => ["group" => "bottom"]], "method");
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.scrolly.min.js", 1 => ["group" => "bottom"]], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.dropotron.min.js", 1 => ["group" => "bottom"]], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.scrollex.min.js", 1 => ["group" => "bottom"]], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/browser.min.js", 1 => ["group" => "bottom"]], "method");
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/breakpoints.min.js", 1 => ["group" => "bottom"]], "method");
        // line 33
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/util.js", 1 => ["group" => "bottom"]], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 35
        echo "    ";
    }

    // line 37
    public function block_assets($context, array $blocks = [])
    {
        // line 38
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        // line 39
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        // line 48
        echo "        <!-- Header -->
            <header id=\"header\">
                <h1 id=\"logo\"><a href=\"";
        // line 50
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a></h1>

                ";
        // line 52
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 57
        echo "
            </header>

            ";
        // line 60
        $this->displayBlock('banner', $context, $blocks);
        // line 61
        echo "
    ";
    }

    // line 52
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 53
        echo "                    <nav id=\"nav\">
                        ";
        // line 54
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "                    </nav>
                ";
    }

    // line 60
    public function block_banner($context, array $blocks = [])
    {
    }

    // line 64
    public function block_body($context, array $blocks = [])
    {
        // line 65
        echo "\t\t<div id=\"main\" class=\"wrapper style1\">
            <div class=\"container\">
\t\t\t\t<header class=\"major\">
\t\t\t\t\t<h2>";
        // line 68
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h2>
                    ";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "teaser", [])) {
            // line 70
            echo "                        <p>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "teaser", []);
            echo "</p>
                    ";
        }
        // line 72
        echo "                </header>

            ";
        // line 74
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "            </div>
        </div>
";
    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        // line 75
        echo "            <!-- Content -->
                <section id=\"content\">
                    ";
        // line 77
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "hero.jpg", [], "array"))) {
            // line 78
            echo "                        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", [])) {
                // line 79
                echo "                            ";
                $context["hero_url"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_image", []), [], "array"), "url", []));
                // line 80
                echo "                        ";
            } else {
                // line 81
                echo "                            ";
                $context["hero_url"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "hero.jpg", [], "array"), "url", []);
                // line 82
                echo "                            ";
                // line 83
                echo "                        ";
            }
            // line 84
            echo "                        <span class=\"image fit\"><img src=\"";
            echo ($context["hero_url"] ?? null);
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "hero_alt", []);
            echo "\" /></span> ";
            // line 85
            echo "                    ";
        }
        // line 86
        echo "                    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </section>
            ";
    }

    // line 93
    public function block_footer($context, array $blocks = [])
    {
        // line 94
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 94)->display($context);
    }

    // line 98
    public function block_bottom($context, array $blocks = [])
    {
        // line 99
        echo "    ";
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
        return array (  330 => 99,  327 => 98,  322 => 94,  319 => 93,  311 => 86,  308 => 85,  302 => 84,  299 => 83,  297 => 82,  294 => 81,  291 => 80,  288 => 79,  285 => 78,  283 => 77,  279 => 75,  276 => 74,  270 => 89,  268 => 74,  264 => 72,  258 => 70,  256 => 69,  252 => 68,  247 => 65,  244 => 64,  239 => 60,  234 => 55,  232 => 54,  229 => 53,  226 => 52,  221 => 61,  219 => 60,  214 => 57,  212 => 52,  205 => 50,  201 => 48,  198 => 47,  192 => 39,  187 => 38,  184 => 37,  180 => 35,  177 => 34,  174 => 33,  171 => 32,  168 => 31,  165 => 30,  162 => 29,  159 => 28,  156 => 27,  153 => 26,  149 => 24,  146 => 23,  143 => 22,  140 => 21,  135 => 41,  133 => 37,  130 => 36,  128 => 26,  125 => 25,  123 => 21,  117 => 18,  113 => 17,  110 => 16,  108 => 15,  98 => 12,  95 => 11,  92 => 10,  85 => 101,  83 => 98,  79 => 96,  77 => 93,  74 => 92,  72 => 64,  69 => 63,  67 => 47,  61 => 44,  58 => 43,  56 => 10,  51 => 8,  43 => 2,  41 => 1,);
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
<!DOCTYPE HTML>
<!--
\tLanded by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ site.descriptive_title|e('html') }}</title>

\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\" />
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    <!-- TODO: <noscript><link rel=\"stylesheet\" href=\"assets/css/noscript.css\" /></noscript> -->
    {% block stylesheets %}
        {% do assets.addCss('theme://css/main.css', 100) %}
        {% do assets.addCss('theme://css/custom.css', 98) %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('theme://js/jquery.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/jquery.scrolly.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/jquery.dropotron.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/jquery.scrollex.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/browser.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/breakpoints.min.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/util.js', {'group': 'bottom'}) %}
        {% do assets.addJs('theme://js/main.js', {'group': 'bottom'}) %}
    {% endblock %}

    {% block assets %}
        {{ assets.css() }}
        {{ assets.js() }}
    {% endblock %}

{% endblock head %}
</head>
<body class=\"{{ ['is-preload', page.header.body_classes]|join(' ') }}\">
\t<div id=\"page-wrapper\">

    {% block header %}
        <!-- Header -->
            <header id=\"header\">
                <h1 id=\"logo\"><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title }}</a></h1>

                {% block header_navigation %}
                    <nav id=\"nav\">
                        {% include 'partials/navigation.html.twig' %}
                    </nav>
                {% endblock %}

            </header>

            {% block banner %}{% endblock banner %}

    {% endblock header %}

    {% block body %}
\t\t<div id=\"main\" class=\"wrapper style1\">
            <div class=\"container\">
\t\t\t\t<header class=\"major\">
\t\t\t\t\t<h2>{{ page.title }}</h2>
                    {% if page.header.teaser %}
                        <p>{{ page.header.teaser }}</p>
                    {% endif %}
                </header>

            {% block content %}
            <!-- Content -->
                <section id=\"content\">
                    {% if page.header.hero_image or page.media['hero.jpg'] %}
                        {% if page.header.hero_image %}
                            {% set hero_url = url(page.media[page.header.hero_image].url) %}
                        {% else %}
                            {% set hero_url = page.media['hero.jpg'].url %}
                            {# TODO: try getting alt text from an image meta file #}
                        {% endif %}
                        <span class=\"image fit\"><img src=\"{{ hero_url }}\" alt=\"{{ page.header.hero_alt }}\" /></span> {# NB: wrapping link 'a' element from source template replaced with span - just can't see why link should be here #}
                    {% endif %}
                    {{ page.content }}
                </section>
            {% endblock %}
            </div>
        </div>
{% endblock %}

{% block footer %}
    {% include 'partials/footer.html.twig' %}
{% endblock %}

    </div>
{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/landed/templates/partials/base.html.twig");
    }
}

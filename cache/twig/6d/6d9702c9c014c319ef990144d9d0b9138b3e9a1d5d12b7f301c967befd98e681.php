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
class __TwigTemplate_7757ee709838b776aac1c6dc365eba846c00379d249b5685293ae44208ec53bb extends \Twig\Template
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
        echo "

<!DOCTYPE HTML>
<!--
\tMinimaxing by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang=\"";
        // line 10
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
";
        // line 11
        $this->displayBlock('head', $context, $blocks);
        // line 51
        echo "</head>
<body id=\"top\" class=\"";
        // line 52
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

<div id=\"page-wrapper\">

";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('banner', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
</div>

";
        // line 98
        $this->displayBlock('bottom', $context, $blocks);
        // line 101
        echo "</body>
</html>
";
    }

    // line 11
    public function block_head($context, array $blocks = [])
    {
        // line 12
        echo "    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 14
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " - ";
        }
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["site"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["site"] ?? null), "title", []), "Minimaxing by HTML5 UP")) : ("Minimaxing by HTML5 UP")), "html");
        echo "</title>

\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 29)->display($context);
        // line 30
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 31
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
        <link rel=\"canonical\" href=\"";
        // line 32
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

        ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('assets', $context, $blocks);
        // line 49
        echo "
";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "            ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 20
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/ie/html5shiv.js"], "method");
            // line 21
            echo "            ";
        }
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css"], "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/site.css"], "method");
        // line 24
        echo "            ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 25
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ie9.css"], "method");
            // line 26
            echo "            ";
        }
        // line 27
        echo "        ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        // line 35
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.min.js", 1 => ["group" => "bottom"]], "method");
        // line 36
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skel.min.js", 1 => ["group" => "bottom"]], "method");
        // line 37
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skel-viewport.min.js", 1 => ["group" => "bottom"]], "method");
        // line 38
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/util.js", 1 => ["group" => "bottom"]], "method");
        // line 39
        echo "            ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 40
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/ie/respond.min.js", 1 => ["group" => "bottom"]], "method");
            // line 41
            echo "            ";
        }
        // line 42
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 43
        echo "        ";
    }

    // line 45
    public function block_assets($context, array $blocks = [])
    {
        // line 46
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 47
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
    }

    // line 56
    public function block_header($context, array $blocks = [])
    {
        // line 57
        echo "    <div id=\"header-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"12u\">

                    <header id=\"header\">
                        <h1><a href=\"";
        // line 63
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\" id=\"logo\">";
        echo (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "heading", [])) ? ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "heading", [])) : ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", [])));
        echo "</a></h1>

                        ";
        // line 65
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 70
        echo "                    </header>

                </div>
            </div>
        </div>
    </div>
";
    }

    // line 65
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 66
        echo "                        <nav id=\"nav\">
                            ";
        // line 67
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 67)->display($context);
        // line 68
        echo "                        </nav>
                        ";
    }

    // line 78
    public function block_banner($context, array $blocks = [])
    {
    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        // line 81
        echo "    <div id=\"main\">
        <div class=\"container\">
            ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "        </div>
    </div>
";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
    }

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        // line 89
        echo "    <div id=\"footer-wrapper\">
        <div class=\"container\">
            ";
        // line 91
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 91)->display($context);
        // line 92
        echo "        </div>
    </div>
";
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
        return array (  310 => 99,  307 => 98,  301 => 92,  299 => 91,  295 => 89,  292 => 88,  287 => 83,  281 => 84,  279 => 83,  275 => 81,  272 => 80,  267 => 78,  262 => 68,  260 => 67,  257 => 66,  254 => 65,  244 => 70,  242 => 65,  235 => 63,  227 => 57,  224 => 56,  218 => 47,  213 => 46,  210 => 45,  206 => 43,  203 => 42,  200 => 41,  197 => 40,  194 => 39,  191 => 38,  188 => 37,  185 => 36,  182 => 35,  179 => 34,  175 => 27,  172 => 26,  169 => 25,  166 => 24,  163 => 23,  160 => 22,  157 => 21,  154 => 20,  151 => 19,  148 => 18,  143 => 49,  141 => 45,  138 => 44,  136 => 34,  131 => 32,  127 => 31,  124 => 30,  122 => 29,  119 => 28,  117 => 18,  106 => 14,  102 => 12,  99 => 11,  93 => 101,  91 => 98,  86 => 95,  84 => 88,  81 => 87,  79 => 80,  76 => 79,  74 => 78,  71 => 77,  69 => 56,  62 => 52,  59 => 51,  57 => 11,  53 => 10,  43 => 2,  41 => 1,);
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
\tMinimaxing by HTML5 UP
\thtml5up.net | @ajlkn
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
{% block head %}
    <head>
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title|e('html') }} - {% endif %}{{ site.title|default('Minimaxing by HTML5 UP')|e('html') }}</title>

\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

        {% block stylesheets %}
            {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
                {% do assets.addJs('theme://js/ie/html5shiv.js') %}
            {% endif %}
            {% do assets.addCss('theme://css/main.css') %}
            {% do assets.addCss('theme://css/site.css') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion <= 9 %}
                {% do assets.addCss('theme://css/ie9.css') %}
            {% endif %}
        {% endblock %}

        {% include 'partials/metadata.html.twig' %}

        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

        {% block javascripts %}
            {% do assets.addJs('theme://js/jquery.min.js', {'group':'bottom'}) %}
            {% do assets.addJs('theme://js/skel.min.js', {'group':'bottom'}) %}
            {% do assets.addJs('theme://js/skel-viewport.min.js', {'group':'bottom'}) %}
            {% do assets.addJs('theme://js/util.js', {'group':'bottom'}) %}
            {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
                {% do assets.addJs('theme://js/ie/respond.min.js', {'group':'bottom'}) %}
            {% endif %}
            {% do assets.addJs('theme://js/main.js', {'group':'bottom'}) %}
        {% endblock %}

        {% block assets %}
            {{ assets.css() }}
            {{ assets.js() }}
        {% endblock %}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

<div id=\"page-wrapper\">

{% block header %}
    <div id=\"header-wrapper\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"12u\">

                    <header id=\"header\">
                        <h1><a href=\"{{ base_url == '' ? '/' : base_url }}\" id=\"logo\">{{ config.site.heading ?: config.site.title }}</a></h1>

                        {% block header_navigation %}
                        <nav id=\"nav\">
                            {% include 'partials/navigation.html.twig' %}
                        </nav>
                        {% endblock %}
                    </header>

                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block banner %}{% endblock %}

{% block body %}
    <div id=\"main\">
        <div class=\"container\">
            {% block content %}{% endblock %}
        </div>
    </div>
{% endblock %}

{% block footer %}
    <div id=\"footer-wrapper\">
        <div class=\"container\">
            {% include 'partials/footer.html.twig' %}
        </div>
    </div>
{% endblock %}

</div>

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}
</body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/minimaxing/templates/partials/base.html.twig");
    }
}

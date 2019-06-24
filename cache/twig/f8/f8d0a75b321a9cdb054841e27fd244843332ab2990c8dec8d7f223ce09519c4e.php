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
class __TwigTemplate_c392959b798f34f9f08711fb5a5e5e0ac55bf1cbd46a2ff97a6180549a037563 extends \Twig\Template
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
        $context["bsTools"] = $this->loadTemplate("macros/bootstrap_tools.html.twig", "partials/base.html.twig", 2)->unwrap();
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "</head>
<body id=\"top\" class=\"";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "sticky", [])) {
            echo " sticky";
        }
        echo "\">
";
        // line 27
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 74
        if ($this->getAttribute(($context["theme_config"] ?? null), "back_to_top_button", [])) {
            // line 75
            echo "    <a id=\"back-to-top\" href=\"#\" class=\"btn btn-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary");
            echo " btn-lg back-to-top\" role=\"button\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.RETURN_TOP_PAGE");
            echo "\" data-toggle=\"tooltip\"
       data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
";
        }
        // line 78
        $this->displayBlock('bottom', $context, $blocks);
        // line 81
        echo "</body>
</html>";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "        <meta charset=\"utf-8\"/>
        <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        ";
        $context["favicon"] = (($this->getAttribute(($context["theme_config"] ?? null), "favicon", [])) ? (twig_first($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", []))) : (["type" => "image/png", "path" => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png")]));
        // line 13
        echo "        <link rel=\"icon\" type=\"";
        echo $this->getAttribute(($context["favicon"] ?? null), "type", []);
        echo "\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["favicon"] ?? null), "path", []));
        echo "\"/>
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('assets', $context, $blocks);
        // line 24
        echo "    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    // line 18
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 20
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 21
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 22
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 27
    public function block_header($context, array $blocks = [])
    {
        // line 28
        echo "    <nav class=\"navbar navbar-expand-md ";
        echo twig_trim_filter($context["bsTools"]->getnavbarStyle($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "style", []), $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "override_page_style", [])));
        echo " ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "sticky", [])) {
            echo "fixed-top";
        }
        echo "\"
         role=\"navigation\"
         ";
        // line 30
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "background_color", [])) {
            echo "style=\"background-color:";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "background_color", []);
            echo "\"";
        }
        echo ">
        <a class=\"navbar-brand\" href=\"";
        // line 31
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
            ";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "image", [])) {
            // line 33
            echo "                ";
            $context["navbar_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "image", []));
            // line 34
            echo "                <img class=\"d-inline-block align-center\" src=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["navbar_image"] ?? null), "path", []));
            echo "\" alt=\"\"/>
            ";
        }
        // line 36
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "icon", [])) {
            // line 37
            echo "                <i class=\"fas fa-";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "icon", []);
            echo "\"></i>
            ";
        }
        // line 39
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "display_site_name", [])) {
            // line 40
            echo "                ";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
            echo "
            ";
        }
        // line 42
        echo "        </a>
        ";
        // line 43
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 44
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 44)->display($context);
            // line 45
            echo "        ";
        }
        // line 46
        echo "        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            ";
        // line 51
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 54
        echo "        </div>
    </nav>
";
    }

    // line 51
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 52
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 52)->display($context);
        // line 53
        echo "            ";
    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        // line 59
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
    }

    // line 62
    public function block_footer($context, array $blocks = [])
    {
        // line 63
        echo "    <footer class=\"footer ";
        echo $context["bsTools"]->getstyle($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "style", []));
        echo "\">
        <div class=\"container\">
            <div class=\"d-flex flex-row justify-content-center\">
                ";
        // line 66
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "legal", [])) {
            // line 67
            echo "                    <div class=\"footer-legal mr-auto\">";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "legal", []);
            echo "</div>
                ";
        }
        // line 69
        echo "                <div class=\"footer-text\">";
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "text", []);
        echo "</div>
            </div>
        </div>
    </footer>
";
    }

    // line 78
    public function block_bottom($context, array $blocks = [])
    {
        // line 79
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
        return array (  307 => 79,  304 => 78,  294 => 69,  288 => 67,  286 => 66,  279 => 63,  276 => 62,  267 => 59,  264 => 58,  260 => 53,  257 => 52,  254 => 51,  248 => 54,  246 => 51,  239 => 46,  236 => 45,  233 => 44,  231 => 43,  228 => 42,  222 => 40,  219 => 39,  213 => 37,  210 => 36,  204 => 34,  201 => 33,  199 => 32,  195 => 31,  187 => 30,  177 => 28,  174 => 27,  167 => 22,  162 => 21,  159 => 20,  149 => 18,  144 => 16,  140 => 24,  138 => 20,  135 => 19,  133 => 18,  130 => 17,  128 => 16,  123 => 14,  116 => 13,  113 => 12,  111 => 11,  101 => 8,  98 => 7,  95 => 6,  89 => 81,  87 => 78,  78 => 75,  76 => 74,  74 => 62,  71 => 61,  69 => 58,  66 => 57,  64 => 27,  57 => 26,  54 => 25,  52 => 6,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
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
{% import \"macros/bootstrap_tools.html.twig\" as bsTools %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
    {% block head %}
        <meta charset=\"utf-8\"/>
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        {% include 'partials/metadata.html.twig' %}
        {% set favicon = theme_config.favicon ? theme_config.favicon|first : { type:'image/png', path: url('theme://images/logo.png') } %}
        <link rel=\"icon\" type=\"{{ favicon.type }}\" href=\"{{ url( favicon.path ) }}\"/>
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>

        {% block stylesheets %}{% endblock %}

        {% block javascripts %}{% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}
    {% endblock head %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}{% if theme_config.navbar.sticky %} sticky{% endif %}\">
{% block header %}
    <nav class=\"navbar navbar-expand-md {{ bsTools.navbarStyle(page.header.style, theme_config.navbar.style, theme_config.navbar.override_page_style)|trim }} {% if theme_config.navbar.sticky %}fixed-top{% endif %}\"
         role=\"navigation\"
         {% if theme_config.navbar.background_color %}style=\"background-color:{{ theme_config.navbar.background_color }}\"{% endif %}>
        <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">
            {% if theme_config.navbar.image %}
                {% set navbar_image = theme_config.navbar.image|first %}
                <img class=\"d-inline-block align-center\" src=\"{{ url(navbar_image.path) }}\" alt=\"\"/>
            {% endif %}
            {% if theme_config.navbar.icon %}
                <i class=\"fas fa-{{ theme_config.navbar.icon }}\"></i>
            {% endif %}
            {% if theme_config.navbar.display_site_name %}
                {{ config.site.title }}
            {% endif %}
        </a>
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mainNavbar\" aria-controls=\"mainNavbar\" aria-expanded=\"false\"
                aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"mainNavbar\">
            {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
            {% endblock %}
        </div>
    </nav>
{% endblock %}

{% block body %}
    {% block content %}{% endblock %}
{% endblock %}

{% block footer %}
    <footer class=\"footer {{ bsTools.style(theme_config.footer.style) }}\">
        <div class=\"container\">
            <div class=\"d-flex flex-row justify-content-center\">
                {% if theme_config.footer.legal %}
                    <div class=\"footer-legal mr-auto\">{{ theme_config.footer.legal|raw }}</div>
                {% endif %}
                <div class=\"footer-text\">{{ theme_config.footer.text|raw }}</div>
            </div>
        </div>
    </footer>
{% endblock %}
{% if theme_config.back_to_top_button %}
    <a id=\"back-to-top\" href=\"#\" class=\"btn btn-{{ page.header.style|defined('primary') }} btn-lg back-to-top\" role=\"button\" title=\"{{ 'BOOTSTRAP_BLOG.RETURN_TOP_PAGE'|t }}\" data-toggle=\"tooltip\"
       data-placement=\"left\"><span class=\"fas fa-chevron-up\"></span></a>
{% endif %}
{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}
</body>
</html>", "partials/base.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/base.html.twig");
    }
}

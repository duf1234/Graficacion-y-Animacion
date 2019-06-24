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
class __TwigTemplate_e056683f78bb32ba2ce86a1742c53cb7e488bf3f769c9bfacfb2477fb02c57c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["html_lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 3
        echo "<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        echo ($context["html_lang"] ?? null);
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo ($context["html_lang"] ?? null);
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 5
        echo ($context["html_lang"] ?? null);
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 27
        echo "    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 38
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "        
        ";
        // line 50
        $this->displayBlock('bottom', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />

         ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
        <script src=\"";
        // line 21
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/modernizr.js");
        echo "\"></script>

        ";
        // line 23
        $this->displayBlock('assets', $context, $blocks);
        // line 26
        echo "        ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/default.css"], "method");
        // line 16
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/layout.css"], "method");
        // line 17
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/media-queries.css"], "method");
        // line 18
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/magnific-popup.css"], "method");
        // line 19
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 23
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 24
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 29
    public function block_header($context, array $blocks = [])
    {
        // line 30
        echo "             ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 30)->display($context);
        // line 31
        echo "        ";
    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        // line 33
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "        ";
    }

    // line 33
    public function block_content($context, array $blocks = [])
    {
    }

    // line 35
    public function block_footer($context, array $blocks = [])
    {
        // line 36
        echo "             ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 36)->display($context);
        // line 37
        echo "        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = [])
    {
        // line 39
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 40
        echo "            <script>window.jQuery || document.write('<script src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/jquery-1.10.2.min.js");
        echo "\"><\\/script>')</script>
            <script type=\"text/javascript\" src=\"";
        // line 41
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://js/jquery-migrate-1.2.1.min.js");
        echo "\"></script>
            ";
        // line 42
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.flexslider.js"], "method");
        // line 43
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/waypoints.js"], "method");
        // line 44
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.fittext.js"], "method");
        // line 45
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/magnific-popup.js"], "method");
        // line 46
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/init.js"], "method");
        // line 47
        echo "            ";
        $this->loadTemplate("partials/twFetcher.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "        ";
    }

    // line 50
    public function block_bottom($context, array $blocks = [])
    {
        // line 51
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
        // line 52
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
        return array (  241 => 52,  236 => 51,  233 => 50,  229 => 48,  226 => 47,  223 => 46,  220 => 45,  217 => 44,  214 => 43,  212 => 42,  208 => 41,  203 => 40,  200 => 39,  197 => 38,  193 => 37,  190 => 36,  187 => 35,  182 => 33,  178 => 34,  175 => 33,  172 => 32,  168 => 31,  165 => 30,  162 => 29,  154 => 24,  151 => 23,  142 => 19,  139 => 18,  136 => 17,  133 => 16,  130 => 15,  127 => 14,  123 => 26,  121 => 23,  116 => 21,  113 => 20,  111 => 14,  106 => 12,  103 => 11,  101 => 10,  93 => 9,  90 => 8,  87 => 7,  80 => 54,  78 => 50,  75 => 49,  72 => 38,  69 => 35,  66 => 32,  64 => 29,  60 => 27,  58 => 7,  53 => 5,  49 => 4,  44 => 3,  42 => 2,  39 => 1,);
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
{% set html_lang = grav.language.getActive ?: grav.config.site.default_lang %}
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ html_lang }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />

         {% block stylesheets %}
                {% do assets.addCss('theme://css/default.css') %}
                {% do assets.addCss('theme://css/layout.css') %}
                {% do assets.addCss('theme://css/media-queries.css') %}
                {% do assets.addCss('theme://css/magnific-popup.css') %}
        {% endblock %}

        <script src=\"{{ url('theme://js/modernizr.js') }}\"></script>

        {% block assets deferred %}
            {{ assets.css()|raw }}
        {% endblock %}
        {% endblock head%}
    </head>
    <body>
        {% block header %}
             {% include 'partials/header.html.twig' %}
        {% endblock %}
        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}
        {% block footer %}
             {% include 'partials/footer.html.twig' %}
        {% endblock %}
        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            <script>window.jQuery || document.write('<script src=\"{{ url('theme://js/jquery-1.10.2.min.js') }}\"><\\/script>')</script>
            <script type=\"text/javascript\" src=\"{{ url('theme://js/jquery-migrate-1.2.1.min.js') }}\"></script>
            {% do assets.addJs('theme://js/jquery.flexslider.js') %}
            {% do assets.addJs('theme://js/waypoints.js') %}
            {% do assets.addJs('theme://js/jquery.fittext.js') %}
            {% do assets.addJs('theme://js/magnific-popup.js') %}
            {% do assets.addJs('theme://js/init.js') %}
            {% include 'partials/twFetcher.html.twig' %}
        {% endblock %}
        
        {% block bottom %}
            {{ assets.js()|raw }}
            {{ assets.js('bottom')|raw }}
        {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/ceevee/templates/partials/base.html.twig");
    }
}

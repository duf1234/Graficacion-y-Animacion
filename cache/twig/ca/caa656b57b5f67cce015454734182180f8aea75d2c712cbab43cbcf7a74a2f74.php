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
class __TwigTemplate_bb04284e5f03eaceb460de32f9e91c6b629b634fb8de52904218ac01200bfb46 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
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
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\" class=\"";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "fixed", []), "navigation", [])) {
            echo " has-navbar-fixed-top ";
        }
        echo " \">
  <head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "  </head>
  <body id=\"top\" class=\"body ";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <div class=\"content-wrapper\">
      ";
        // line 33
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 33)->display($context);
        // line 34
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "    </div>

    ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 40
        echo "
    ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

    ";
        // line 52
        $this->displayBlock('bottom', $context, $blocks);
        // line 56
        echo "
  </body>
</html>";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "      <meta charset=\"utf-8\"/>
      <title>
        ";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo "
          |
        ";
        }
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      ";
        // line 14
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 14)->display($context);
        // line 15
        echo "        ";
        $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "theme", []), "favicon", []));
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets");
        echo "/";
        echo $this->getAttribute(($context["image_parts"] ?? null), "basename", []);
        echo "”/>


      <link rel=\"canonical\" href=\"";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>
    
      ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bulma.min.css", 1 => 100], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bulma-carousel.min.css", 1 => 100], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/svg.css", 1 => 98], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/portfolio.css", 1 => 98], "method");
        // line 26
        echo "      ";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        // line 38
        echo "      ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 38)->display($context);
        // line 39
        echo "    ";
    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        // line 42
        echo "    \t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bulma-carousel.js", 1 => 100], "method");
        // line 43
        echo "    \t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://use.fontawesome.com/releases/v5.0.0/js/all.js", 1 => 120], "method");
        // line 44
        echo "    \t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://use.fontawesome.com/releases/v5.0.0/js/v4-shims.js", 1 => 120], "method");
        // line 45
        echo "    \t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/smooth-scroll.js", 1 => 120], "method");
        // line 46
        echo "    \t";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/smooth-scroll-polifylls.js", 1 => 120], "method");
        // line 47
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/portfolio.js", 1 => 98], "method");
        // line 48
        echo "    ";
    }

    // line 52
    public function block_bottom($context, array $blocks = [])
    {
        // line 53
        echo "      ";
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
        return array (  204 => 53,  201 => 52,  197 => 48,  194 => 47,  191 => 46,  188 => 45,  185 => 44,  182 => 43,  179 => 42,  176 => 41,  172 => 39,  169 => 38,  166 => 37,  161 => 34,  157 => 26,  154 => 25,  151 => 24,  148 => 23,  145 => 22,  142 => 21,  134 => 27,  132 => 21,  127 => 19,  118 => 16,  115 => 15,  113 => 14,  106 => 10,  99 => 8,  95 => 6,  92 => 5,  86 => 56,  84 => 52,  79 => 50,  76 => 49,  74 => 41,  71 => 40,  69 => 37,  65 => 35,  62 => 34,  60 => 33,  55 => 31,  52 => 30,  50 => 5,  41 => 3,  38 => 2,  36 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\" class=\"{% if theme_config.fixed.navigation %} has-navbar-fixed-top {% endif %} \">
  <head>
    {% block head %}
      <meta charset=\"utf-8\"/>
      <title>
        {% if header.title %}{{ header.title|e('html') }}
          |
        {% endif %}{{ site.title|e('html') }}</title>

      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      {% include 'partials/metadata.html.twig' %}
        {% set image_parts = pathinfo(grav.theme.config.theme.favicon) %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://assets') }}/{{ image_parts.basename }}”/>


      <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
    
      {% block stylesheets %}
        {% do assets.addCss('theme://css/bulma.min.css', 100) %}
        {% do assets.addCss('theme://css/bulma-carousel.min.css', 100) %}
        {% do assets.addCss('theme://css/svg.css', 98) %}
        {% do assets.addCss('theme://css-compiled/portfolio.css', 98) %}
      {% endblock %}
      {{ assets.css() }}

    {% endblock head%}
  </head>
  <body id=\"top\" class=\"body {{ page.header.body_classes }}\">
    <div class=\"content-wrapper\">
      {% include 'partials/header.html.twig' %}
      {% block content %}{% endblock %}
    </div>

    {% block footer %}
      {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block javascripts %}
    \t{% do assets.addJs('theme://js/bulma-carousel.js', 100) %}
    \t{% do assets.addJs('https://use.fontawesome.com/releases/v5.0.0/js/all.js', 120) %}
    \t{% do assets.addJs('https://use.fontawesome.com/releases/v5.0.0/js/v4-shims.js', 120) %}
    \t{% do assets.addJs('theme://js/smooth-scroll.js', 120) %}
    \t{% do assets.addJs('theme://js/smooth-scroll-polifylls.js', 120) %}
      {% do assets.addJs('theme://js/portfolio.js', 98) %}
    {% endblock %}

    {{ assets.js() }}

    {% block bottom %}
      {{ assets.js('bottom') }}

    {% endblock %}

  </body>
</html>", "partials/base.html.twig", "/var/www/html/grav/user/themes/bulma-portfolio/templates/partials/base.html.twig");
    }
}

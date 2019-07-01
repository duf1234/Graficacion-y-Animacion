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
class __TwigTemplate_962193b36857f3c034b927ba848b61622fb75ca94357040c12a655f44ebe8fb0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
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
        echo "\">
<head>
  
";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "</head>
<body class=\"";
        // line 38
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
  ";
        // line 39
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 39)->display($context);
        // line 40
        echo "
    <div class=\"content container\">
      ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "    </div>
  </body>

";
        // line 47
        $this->displayBlock('bottom', $context, $blocks);
        // line 50
        echo "
</body>
</html>


";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        // line 7
        echo "  <link href=\"http://gmpg.org/xfn/11\" rel=\"profile\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">

    <meta charset=\"utf-8\" />
    <title>";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 16
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 16)->display($context);
        // line 17
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
  <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700|Abril+Fatface\">
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css", 1 => 99], "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/poole.css", 1 => 99], "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/syntax.css", 1 => 98], "method");
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/hyde.css", 1 => 97], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 96], "method");
        // line 27
        echo "        
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        // line 32
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 33
        echo "    ";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        echo "      ";
    }

    // line 47
    public function block_bottom($context, array $blocks = [])
    {
        // line 48
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
        return array (  175 => 48,  172 => 47,  168 => 43,  165 => 42,  161 => 33,  158 => 32,  155 => 31,  150 => 27,  147 => 26,  144 => 25,  141 => 24,  138 => 23,  135 => 22,  132 => 21,  124 => 34,  122 => 31,  116 => 29,  114 => 21,  109 => 19,  105 => 18,  102 => 17,  100 => 16,  89 => 12,  82 => 7,  79 => 6,  70 => 50,  68 => 47,  63 => 44,  61 => 42,  57 => 40,  55 => 39,  51 => 38,  48 => 37,  46 => 6,  40 => 3,  37 => 2,  35 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
  
{% block head %}
  <link href=\"http://gmpg.org/xfn/11\" rel=\"profile\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">

    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', 99) %}
        {% do assets.addCss('theme://css/poole.css', 99) %}
        {% do assets.addCss('theme://css/syntax.css', 98) %}
        {% do assets.addCss('theme://css/hyde.css', 97) %}
        {% do assets.addCss('theme://css/custom.css', 96) %}
        
    {% endblock %}
    {{ assets.css() }}
  <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700|Abril+Fatface\">
    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body class=\"{{ page.header.body_classes }}\">
  {% include 'partials/sidebar.html.twig' %}

    <div class=\"content container\">
      {% block content %}
      {% endblock %}
    </div>
  </body>

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>


", "partials/base.html.twig", "/var/www/html/grav/user/themes/hyde/templates/partials/base.html.twig");
    }
}

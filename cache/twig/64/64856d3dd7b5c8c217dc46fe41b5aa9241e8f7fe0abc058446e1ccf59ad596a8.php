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

/* partials/head.html.twig */
class __TwigTemplate_b38c1321fd9d5c9fc501c8d32a6f366b9de39e2e7f3d644c42259e6d637739fa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
 
";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
    }

    // line 1
    public function block_stylesheets($context, array $blocks = [])
    {
        echo " 
  ";
        // line 2
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/knacss.min.css", 1 => 100], "method");
        // line 3
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ionicons.min.css", 1 => 100], "method");
        echo " 
  ";
        // line 4
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.min.css", 1 => 10], "method");
        echo "  
  ";
        // line 5
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"], "method");
        // line 6
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.min.css"], "method");
        // line 7
        echo "
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = [])
    {
        echo " 
  ";
        // line 13
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        echo " 
  ";
        // line 14
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 15
        echo "
";
        // line 17
        echo "  
    
  ";
        // line 19
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 20
        echo "
  ";
        // line 21
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-accessible-tabs-aria.js", 1 => ["group" => "bottom"]], "method");
        // line 22
        echo "
  ";
        // line 23
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-ui.min.js", 1 => ["group" => "bottom"]], "method");
        // line 24
        echo " 
  ";
        // line 25
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.lettering.js", 1 => ["group" => "bottom"]], "method");
        // line 26
        echo "
  ";
        // line 27
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.fittext.js", 1 => ["group" => "bottom"]], "method");
        // line 28
        echo "
  ";
        // line 29
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.textillate.js", 1 => ["group" => "bottom"]], "method");
    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  114 => 28,  112 => 27,  109 => 26,  107 => 25,  104 => 24,  102 => 23,  99 => 22,  97 => 21,  94 => 20,  92 => 19,  88 => 17,  85 => 15,  83 => 14,  79 => 13,  74 => 12,  69 => 7,  66 => 6,  64 => 5,  60 => 4,  55 => 3,  53 => 2,  48 => 1,  44 => 31,  42 => 12,  37 => 10,  34 => 9,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block stylesheets %} 
  {% do assets.addCss('theme://css/knacss.min.css',100) %}
  {% do assets.addCss('theme://css/ionicons.min.css',100) %} 
  {% do assets.addCss('theme://css/main.min.css',10) %}  
  {% do assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') %}
  {% do assets.addCss('theme://css/animate.min.css') %}

{% endblock %}

{{ assets.css() }}
 
{% block javascripts %} 
  {% do assets.addJs('jquery',101) %} 
  {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}

{# group bottom #}
  
    
  {% do assets.addJs('theme://js/main.js', {group: 'bottom'}) %}

  {% do assets.addJs('theme://js/jquery-accessible-tabs-aria.js', {group: 'bottom'}) %}

  {% do assets.addJs('theme://js/jquery-ui.min.js', {group: 'bottom'}) %}
 
  {% do assets.addJs('theme://js/jquery.lettering.js', {group: 'bottom'}) %}

  {% do assets.addJs('theme://js/jquery.fittext.js', {group: 'bottom'}) %}

  {% do assets.addJs('theme://js/jquery.textillate.js', {group: 'bottom'}) %}
{% endblock %}
{{ assets.js() }}", "partials/head.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/head.html.twig");
    }
}

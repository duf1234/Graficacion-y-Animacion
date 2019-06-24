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

/* partials/header.html.twig */
class __TwigTemplate_3b2f5dfef88531700613135141c2aeeb70c6a46497ab118eb67526169b7e64d1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        // line 4
        echo "
  <header class=\"header\">
      <nav class=\"navbar  ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "fixed", []), "navigation", [])) {
            echo " is-fixed-top ";
        }
        echo "\" role='navigation' aria-label='main navigation'>   
        <div class=\"navbar-brand\">
          <a class=\"navbar-item\" href=\"";
        // line 8
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
            ";
        // line 10
        echo "            ";
        $context["image_parts"] = pathinfo($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "theme", []), "config", []), "theme", []), "logo", []));
        // line 11
        echo "            <object type='image/svg+xml' data=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets");
        echo "/";
        echo $this->getAttribute(($context["image_parts"] ?? null), "basename", []);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo " image\" width=\"180\"></object>
          </a>
          <button class=\"button navbar-burger\" data-target=\"navMenu\">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        <div class=\"navbar-menu\" id=\"navMenu\">
          <div class=\"navbar-end\">
            ";
        // line 21
        $this->loadTemplate("partials/navigation.html.twig", "partials/header.html.twig", 21)->display($context);
        // line 22
        echo "          </div>
        </div>
      </nav>

  </header>

";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  77 => 21,  59 => 11,  56 => 10,  52 => 8,  45 => 6,  41 => 4,  35 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("

{% block header %}

  <header class=\"header\">
      <nav class=\"navbar  {% if theme_config.fixed.navigation %} is-fixed-top {% endif %}\" role='navigation' aria-label='main navigation'>   
        <div class=\"navbar-brand\">
          <a class=\"navbar-item\" href=\"{{ base_url == '' ? '/' : base_url }}\">
            {# changing a logo using mediapicker #}
            {% set image_parts = pathinfo(grav.theme.config.theme.logo) %}
            <object type='image/svg+xml' data=\"{{ url('theme://assets') }}/{{ image_parts.basename }}\" alt=\"{{ site.title }} image\" width=\"180\"></object>
          </a>
          <button class=\"button navbar-burger\" data-target=\"navMenu\">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
        <div class=\"navbar-menu\" id=\"navMenu\">
          <div class=\"navbar-end\">
            {% include 'partials/navigation.html.twig' %}
          </div>
        </div>
      </nav>

  </header>

{% endblock %}", "partials/header.html.twig", "/var/www/html/grav/user/themes/bulma-portfolio/templates/partials/header.html.twig");
    }
}

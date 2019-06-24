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

/* error.html.twig */
class __TwigTemplate_f362a56c499b75c4edbc1a7c52550901efca9a85580a0df8f4b474f86b9a6c56 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body_content' => [$this, 'block_body_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("default.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_content($context, array $blocks = [])
    {
        // line 4
        echo "  <div id=\"";
        echo $this->getAttribute(($context["page"] ?? null), "slug", []);
        echo "\" class=\"content\">
    <div class=\"zerogrid\">
      <div class=\"col-full\">
        <div class=\"wrap-col\">
          <h3>Error ";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h3>
          <div class=\"text1\">";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  50 => 8,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default.html.twig' %}

{% block body_content %}
  <div id=\"{{ page.slug }}\" class=\"content\">
    <div class=\"zerogrid\">
      <div class=\"col-full\">
        <div class=\"wrap-col\">
          <h3>Error {{ page.header.http_response_code }}</h3>
          <div class=\"text1\">{{ page.content }}</div>
        </div>
      </div>
    </div>
  </div>
{% endblock %}", "error.html.twig", "/var/www/html/grav/user/themes/zsimplex/templates/error.html.twig");
    }
}

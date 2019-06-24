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

/* partials/portfolio.html.twig */
class __TwigTemplate_7f4f28e5fa095661dd9bdce910d36467dd57991169b1e1e5f98f95c92dbf38c5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "          <section class=\"pt-page pt-page-4\" data-id=\"portfolio\">
            <div class=\"section-title-block\">
";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "portfolio", []), "customtitle", [])) {
            // line 4
            echo "              <h2 class=\"section-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "portfolio", []), "customtitle", []);
            echo "</h2>
";
        } else {
            // line 6
            echo "              <h2 class=\"section-title\">Portfolio</h2>
";
        }
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "portfolio", []), "subtitle", [])) {
            // line 9
            echo "              <h5 class=\"section-description\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "portfolio", []), "subtitle", []);
            echo "</h5>
";
        }
        // line 11
        echo "            </div>
            <div class=\"portfolio-content\">
";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "portfolio", []), "tags", [])) > 0)) {
            // line 14
            echo "              <ul id=\"portfolio_filters\" class=\"portfolio-filters\">
                <li class=\"active\">
                  <a class=\"filter btn btn-sm btn-link active\" data-group=\"all\">ALL</a>
                </li>
";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "portfolio", []), "tags", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 19
                echo "                <li>
                  <a class=\"filter btn btn-sm btn-link uppercase\" data-group=\"";
                // line 20
                echo $this->getAttribute($context["tag"], "name", []);
                echo "\">";
                echo $this->getAttribute($context["tag"], "name", []);
                echo "</a>
                </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "              </ul>
";
        }
        // line 25
        echo "              <div id=\"portfolio_grid\" class=\"portfolio-grid portfolio-masonry masonry-grid-4\">
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/portfolio"], "method"), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                <figure class=\"item col-xs-12 col-sm-6 col-md-4 col-lg-4\" data-groups='[\"all\",";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["item"], "header", []), "projectags", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                echo " \"";
                echo $this->getAttribute($context["tag"], "name", []);
                echo "\", ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\"\"]'>
                  <a class=\"ajax-page-load\" href=\"";
            // line 28
            echo $this->getAttribute($context["item"], "url", []);
            echo "\">
";
            // line 29
            $context["thumb"] = twig_last($this->env, $this->getAttribute($this->getAttribute($context["item"], "header", []), "project_thumbnail", []));
            // line 30
            echo "                    <img class=\"portfolio-img\" src=\"";
            echo $this->getAttribute(($context["thumb"] ?? null), "path", []);
            echo "\" ";
            if ($this->getAttribute($this->getAttribute($context["item"], "header", []), "project_thumbnail_alt", [])) {
                echo " alt=\"";
                echo $this->getAttribute($this->getAttribute($context["item"], "header", []), "project_thumbnail_alt", []);
                echo "\" ";
            }
            echo ">
                    <div>
                      <h5 class=\"name uppercase\">";
            // line 32
            echo $this->getAttribute($this->getAttribute($context["item"], "header", []), "hover_title", []);
            echo "</h5>
                      <small class=\"uppercase\">";
            // line 33
            echo $this->getAttribute($this->getAttribute($context["item"], "header", []), "hover_des", []);
            echo "</small>
                      <i class=\"fa ";
            // line 34
            echo $this->getAttribute($this->getAttribute($context["item"], "header", []), "hover_ico", []);
            echo "\"></i>
                    </div>
                  </a>
                </figure>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "              </div>
            </div>
          </section>
";
    }

    public function getTemplateName()
    {
        return "partials/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 39,  135 => 34,  131 => 33,  127 => 32,  115 => 30,  113 => 29,  109 => 28,  95 => 27,  91 => 26,  88 => 25,  84 => 23,  73 => 20,  70 => 19,  66 => 18,  60 => 14,  58 => 13,  54 => 11,  48 => 9,  46 => 8,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("          <section class=\"pt-page pt-page-4\" data-id=\"portfolio\">
            <div class=\"section-title-block\">
{% if header.resume.portfolio.customtitle %}
              <h2 class=\"section-title\">{{header.resume.portfolio.customtitle}}</h2>
{% else %}
              <h2 class=\"section-title\">Portfolio</h2>
{% endif %}
{% if header.resume.portfolio.subtitle %}
              <h5 class=\"section-description\">{{header.resume.portfolio.subtitle}}</h5>
{% endif %}
            </div>
            <div class=\"portfolio-content\">
{% if header.resume.portfolio.tags | length > 0 %}
              <ul id=\"portfolio_filters\" class=\"portfolio-filters\">
                <li class=\"active\">
                  <a class=\"filter btn btn-sm btn-link active\" data-group=\"all\">ALL</a>
                </li>
{% for tag in header.resume.portfolio.tags %}
                <li>
                  <a class=\"filter btn btn-sm btn-link uppercase\" data-group=\"{{tag.name}}\">{{tag.name}}</a>
                </li>
{% endfor %}
              </ul>
{% endif %}
              <div id=\"portfolio_grid\" class=\"portfolio-grid portfolio-masonry masonry-grid-4\">
{% for item in page.find('/portfolio').children %}
                <figure class=\"item col-xs-12 col-sm-6 col-md-4 col-lg-4\" data-groups='[\"all\",{% for tag in item.header.projectags %} \"{{tag.name}}\", {% endfor %}\"\"]'>
                  <a class=\"ajax-page-load\" href=\"{{item.url}}\">
{% set thumb = item.header.project_thumbnail|last %}
                    <img class=\"portfolio-img\" src=\"{{ thumb.path }}\" {% if item.header.project_thumbnail_alt %} alt=\"{{item.header.project_thumbnail_alt}}\" {% endif %}>
                    <div>
                      <h5 class=\"name uppercase\">{{item.header.hover_title}}</h5>
                      <small class=\"uppercase\">{{item.header.hover_des}}</small>
                      <i class=\"fa {{item.header.hover_ico}}\"></i>
                    </div>
                  </a>
                </figure>
{% endfor %}
              </div>
            </div>
          </section>
", "partials/portfolio.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/portfolio.html.twig");
    }
}

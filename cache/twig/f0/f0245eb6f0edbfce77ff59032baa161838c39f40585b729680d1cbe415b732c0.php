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

/* default.html.twig */
class __TwigTemplate_63564cb5019e4776960cf5761550c778892b1d38fd6f0f87c8d74d308e09563f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        // line 5
        echo "
<header class=\"main-header ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cover", [])) {
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "cover", []), [], "array"), "url", []);
            echo ") ";
        } else {
            echo " no-cover ";
        }
        echo "\">
    <nav class=\"main-nav overlay clearfix\">
        ";
        // line 8
        if ($this->getAttribute(($context["site"] ?? null), "logo", [])) {
            // line 9
            echo "            <a class=\"blog-logo\" href=\"";
            echo ($context["base_url"] ?? null);
            echo "\"><img src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["site"] ?? null), "logo", []);
            echo "\" alt=\"";
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
            echo "\" width=\"100%\" height=\"100%\" /></a>
        ";
        }
        // line 11
        echo "
        <a class=\"menu-button icon-menu\" href=\"#\">
            <label for=\"show-menu\" class=\"word\">";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_MASONRY.MENU_TITLE");
        echo "</label>
        </a>
    </nav>
    <div class=\"vertical\">
        <div class=\"main-header-content inner\">
            <h1 class=\"page-title\">";
        // line 18
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</h1>
            <h2 class=\"page-description\">";
        // line 19
        echo $this->getAttribute(($context["site"] ?? null), "description", []);
        echo "</h2>
        </div>
    </div>
    <a class=\"scroll-down icon-arrow-left\" href=\"#content\" data-offset=\"-45\"><span class=\"hidden\">Scroll Down</span></a>
</header>

<main id=\"content\" class=\"content\" role=\"main\">
    <div class=\"wrapper\">
        <section class=\"masonry\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            echo " ";
            $this->loadTemplate("partials/article.html.twig", "default.html.twig", 28)->display($context);
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </section>
    </div>
    ";
        // line 31
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 32
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "default.html.twig", 32)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 33
            echo "    ";
        }
        // line 34
        echo "</main>

";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 34,  142 => 33,  139 => 32,  137 => 31,  133 => 29,  101 => 28,  89 => 19,  85 => 18,  77 => 13,  73 => 11,  61 => 9,  59 => 8,  48 => 6,  45 => 5,  42 => 4,  37 => 1,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}
{% set collection = page.collection() %}

{% block content %}

<header class=\"main-header {% if page.header.cover %}\" style=\"background-image: url({{ page.media[page.header.cover].url }}) {% else %} no-cover {% endif %}\">
    <nav class=\"main-nav overlay clearfix\">
        {% if site.logo %}
            <a class=\"blog-logo\" href=\"{{base_url}}\"><img src=\"{{ theme_url }}/images/{{site.logo}}\" alt=\"{{ site.title}}\" width=\"100%\" height=\"100%\" /></a>
        {% endif %}

        <a class=\"menu-button icon-menu\" href=\"#\">
            <label for=\"show-menu\" class=\"word\">{{ 'THEME_MASONRY.MENU_TITLE'|t }}</label>
        </a>
    </nav>
    <div class=\"vertical\">
        <div class=\"main-header-content inner\">
            <h1 class=\"page-title\">{{ site.title }}</h1>
            <h2 class=\"page-description\">{{ site.description}}</h2>
        </div>
    </div>
    <a class=\"scroll-down icon-arrow-left\" href=\"#content\" data-offset=\"-45\"><span class=\"hidden\">Scroll Down</span></a>
</header>

<main id=\"content\" class=\"content\" role=\"main\">
    <div class=\"wrapper\">
        <section class=\"masonry\">
            {% for post in collection %} {% include 'partials/article.html.twig' %} {% endfor %}
        </section>
    </div>
    {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
    {% endif %}
</main>

{% endblock %}
", "default.html.twig", "/var/www/html/grav/user/themes/masonry/templates/default.html.twig");
    }
}

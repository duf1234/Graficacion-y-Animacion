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

/* blog.html.twig */
class __TwigTemplate_75b0ee8c35f4431e7b37aedb87d3dfd9840b2495725952727fda8f68014bef73 extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "980278981")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
{% set blog_image = page.media.images|first %}

{% if blog_image %}
<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
\t{% else %}
\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t{{ page.content }}
\t</div>

\t{% if config.plugins.breadcrumbs.enabled %}
\t{% include 'partials/breadcrumbs.html.twig' %}
\t{% endif %}

\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t{% for child in collection %}
\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
\t\t\t{% endfor %}

\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t{% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
\t\t\t{% endif %}
\t\t</div>
\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t</div>
\t</div>
\t{% endblock %}

\t{% endembed %}
", "blog.html.twig", "/var/www/html/grav/user/themes/deliver/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_75b0ee8c35f4431e7b37aedb87d3dfd9840b2495725952727fda8f68014bef73___980278981 extends \Twig\Template
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
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", []);
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", []));
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        // line 16
        $context["blog_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        // line 17
        echo "
";
        // line 18
        if (($context["blog_image"] ?? null)) {
            // line 19
            echo "<div class=\"flush-top blog-header blog-header-image\" style=\"background: ";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "bg_color", []);
            echo " url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", []);
            echo ") no-repeat right;\">
\t";
        } else {
            // line 21
            echo "\t<div class=\"blog-header\">
\t\t";
        }
        // line 23
        echo "\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t</div>

\t";
        // line 26
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 27
            echo "\t";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 27)->display($context);
            // line 28
            echo "\t";
        }
        // line 29
        echo "
\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t";
        // line 32
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 33
            echo "\t\t\t";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 33)->display(twig_array_merge($context, ["page" => $context["child"], "truncate" => true]));
            // line 34
            echo "\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
\t\t\t";
        // line 36
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 37
            echo "\t\t\t";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 37)->display(twig_array_merge($context, ["pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 38
            echo "\t\t\t";
        }
        // line 39
        echo "\t\t</div>
\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t";
        // line 41
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 41)->display($context);
        // line 42
        echo "\t\t</div>
\t</div>
\t";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 42,  236 => 41,  232 => 39,  229 => 38,  226 => 37,  224 => 36,  221 => 35,  207 => 34,  204 => 33,  187 => 32,  182 => 29,  179 => 28,  176 => 27,  174 => 26,  167 => 23,  163 => 21,  155 => 19,  153 => 18,  150 => 17,  148 => 16,  145 => 15,  140 => 1,  137 => 12,  135 => 11,  132 => 8,  130 => 7,  128 => 5,  126 => 4,  124 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set base_url = page.url %}
{% set feed_url = base_url %}

{% if base_url == '/' %}
{% set base_url = '' %}
{% endif %}

{% if base_url == base_url_relative %}
{% set feed_url = base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
{% set blog_image = page.media.images|first %}

{% if blog_image %}
<div class=\"flush-top blog-header blog-header-image\" style=\"background: {{ page.header.bg_color }} url({{ blog_image.url }}) no-repeat right;\">
\t{% else %}
\t<div class=\"blog-header\">
\t\t{% endif %}
\t\t{{ page.content }}
\t</div>

\t{% if config.plugins.breadcrumbs.enabled %}
\t{% include 'partials/breadcrumbs.html.twig' %}
\t{% endif %}

\t<div class=\"content-wrapper blog-content-list g-grid pure-g-r\">
\t\t<div id=\"listing\" class=\"g-block pure-u-2-3\">
\t\t\t{% for child in collection %}
\t\t\t{% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
\t\t\t{% endfor %}

\t\t\t{% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t{% include 'partials/pagination.html.twig' with {'pagination':collection.params.pagination} %}
\t\t\t{% endif %}
\t\t</div>
\t\t<div id=\"sidebar\" class=\"g-block size-1-3 pure-u-1-3\">
\t\t\t{% include 'partials/sidebar.html.twig' %}
\t\t</div>
\t</div>
\t{% endblock %}

\t{% endembed %}
", "blog.html.twig", "/var/www/html/grav/user/themes/deliver/templates/blog.html.twig");
    }
}

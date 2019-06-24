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

/* partials/sidebar.html.twig */
class __TwigTemplate_95d9a0dc3b9eb0bc74930148b0aac48220847a387b4f29199e4f2a4d06f592db extends \Twig\Template
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
        $context["feed_url"] = (((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/") || ($this->getAttribute(($context["blog"] ?? null), "url", []) == ($context["base_url_relative"] ?? null)))) ? (((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["blog"] ?? null), "slug", []))) : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute(($context["blog"] ?? null), "url", []) == "/")) ? ("") : ($this->getAttribute(($context["blog"] ?? null), "url", [])));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 5
            echo "    <div class=\"sidebar-content\">
        <h5>SimpleSearch</h5>
        ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 12
            echo "    <h5>Related Posts</h5>
    ";
            // line 13
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 13)->display($context);
        }
        // line 15
        echo "
";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 17
            echo "    <div class=\"sidebar-content\">
        <h5>Random Article</h5>
        <a class=\"btn\" href=\"";
            // line 19
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
";
        }
        // line 22
        echo "
<div class=\"sidebar-content\">
    <h5>Some Text Widget</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>

";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 29
            echo "    <div class=\"sidebar-content\">
        <h5>Popular Tags</h5>
        ";
            // line 31
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 31)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null), "taxonomy" => "tag"]));
            // line 32
            echo "    </div>
";
        }
        // line 34
        echo "
";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 36
            echo "    <div class=\"sidebar-content\">
        <h5>Archives</h5>
        ";
            // line 38
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 38)->display(twig_array_merge($context, ["base_url" => ($context["new_base_url"] ?? null)]));
            // line 39
            echo "    </div>
";
        }
        // line 41
        echo "
";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 43
            echo "    <div class=\"sidebar-content\">
        <h5>Syndicate</h5>
        <div class=\"btn-group\">
            <a class=\"btn btn-warning\" href=\"";
            // line 46
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"btn btn-warning\" href=\"";
            // line 47
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 47,  120 => 46,  115 => 43,  113 => 42,  110 => 41,  106 => 39,  104 => 38,  100 => 36,  98 => 35,  95 => 34,  91 => 32,  89 => 31,  85 => 29,  83 => 28,  75 => 22,  69 => 19,  65 => 17,  63 => 16,  60 => 15,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  45 => 8,  43 => 7,  39 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative ~ '/' ~ blog.slug) : blog.url %}
{% set new_base_url = blog.url == '/' ? '' : blog.url %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"sidebar-content\">
        <h5>SimpleSearch</h5>
        {% include 'partials/simplesearch_searchbox.html.twig' %}
    </div>
{% endif %}

{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    <h5>Related Posts</h5>
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}

{% if config.plugins.random.enabled %}
    <div class=\"sidebar-content\">
        <h5>Random Article</h5>
        <a class=\"btn\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
{% endif %}

<div class=\"sidebar-content\">
    <h5>Some Text Widget</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>

{% if config.plugins.taxonomylist.enabled %}
    <div class=\"sidebar-content\">
        <h5>Popular Tags</h5>
        {% include 'partials/taxonomylist.html.twig' with {'base_url': new_base_url, 'taxonomy': 'tag'} %}
    </div>
{% endif %}

{% if config.plugins.archives.enabled %}
    <div class=\"sidebar-content\">
        <h5>Archives</h5>
        {% include 'partials/archives.html.twig' with {'base_url': new_base_url} %}
    </div>
{% endif %}

{% if config.plugins.feed.enabled %}
    <div class=\"sidebar-content\">
        <h5>Syndicate</h5>
        <div class=\"btn-group\">
            <a class=\"btn btn-warning\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"btn btn-warning\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "/var/www/html/grav/user/themes/bootstrap4/templates/partials/sidebar.html.twig");
    }
}

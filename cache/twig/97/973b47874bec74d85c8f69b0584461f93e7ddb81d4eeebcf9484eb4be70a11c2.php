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
class __TwigTemplate_b2b9bb1d57ecd64342832c3083ad6b84b119f0f0ac5345985627e88fb97e4d3f extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 2
            echo "<div class=\"sidebar-content\">
    <h4>SimpleSearch</h4>
    ";
            // line 4
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 4)->display($context);
            // line 5
            echo "</div>
";
        }
        // line 7
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 8
            echo "<div class=\"sidebar-content\">
    <h4>Related Posts</h4>
    ";
            // line 10
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 10)->display($context);
            // line 11
            echo "</div>
";
        }
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 14
            echo "<div class=\"sidebar-content\">
\t<h4>Random Article</h4>
\t<a class=\"button\" href=\"";
            // line 16
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
";
        }
        // line 19
        echo "<div class=\"sidebar-content\">
\t<h4>Some Text Widget</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
";
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 24
            echo "<div class=\"sidebar-content\">
    <h4>Popular Tags</h4>
    ";
            // line 26
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 26)->display(twig_array_merge($context, ["taxonomy" => "tag"]));
            // line 27
            echo "</div>
";
        }
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 30
            echo "<div class=\"sidebar-content\">
    <h4>Archives</h4>
\t";
            // line 32
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 32)->display($context);
            // line 33
            echo "</div>
";
        }
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 36
            echo "<div class=\"sidebar-content syndicate\">
    <h4>Syndicate</h4>
    <a class=\"button\" href=\"";
            // line 38
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 39
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
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
        return array (  106 => 39,  102 => 38,  98 => 36,  96 => 35,  92 => 33,  90 => 32,  86 => 30,  84 => 29,  80 => 27,  78 => 26,  74 => 24,  72 => 23,  66 => 19,  60 => 16,  56 => 14,  54 => 13,  50 => 11,  48 => 10,  44 => 8,  42 => 7,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if config.plugins.simplesearch.enabled %}
<div class=\"sidebar-content\">
    <h4>SimpleSearch</h4>
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</div>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<div class=\"sidebar-content\">
    <h4>Related Posts</h4>
    {% include 'partials/relatedpages.html.twig' %}
</div>
{% endif %}
{% if config.plugins.random.enabled %}
<div class=\"sidebar-content\">
\t<h4>Random Article</h4>
\t<a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
</div>
{% endif %}
<div class=\"sidebar-content\">
\t<h4>Some Text Widget</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
{% if config.plugins.taxonomylist.enabled %}
<div class=\"sidebar-content\">
    <h4>Popular Tags</h4>
    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
</div>
{% endif %}
{% if config.plugins.archives.enabled %}
<div class=\"sidebar-content\">
    <h4>Archives</h4>
\t{% include 'partials/archives.html.twig' %}
</div>
{% endif %}
{% if config.plugins.feed.enabled %}
<div class=\"sidebar-content syndicate\">
    <h4>Syndicate</h4>
    <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
{% endif %}", "partials/sidebar.html.twig", "/var/www/html/grav/user/themes/deliver/templates/partials/sidebar.html.twig");
    }
}

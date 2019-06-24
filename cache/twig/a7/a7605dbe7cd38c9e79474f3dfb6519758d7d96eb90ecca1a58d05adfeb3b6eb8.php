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

/* partials/partial_item.html.twig */
class __TwigTemplate_d5fc67548462d6b0694ae4e379f3cbd81859cdbcfebc4b728f12bf79dc047df7 extends \Twig\Template
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
        $context["header_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_width", []), 1024);
        // line 2
        $context["header_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_height", []), 600);
        echo "  ";
        // line 3
        $context["header_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_file", []);
        // line 4
        if (($context["header_image_file"] ?? null)) {
            // line 5
            echo "    ";
            $context["header_image_media"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["header_image_file"] ?? null), [], "array");
        } else {
            // line 7
            echo "    ";
            $context["header_image_media"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        }
        // line 9
        echo "
<div class=\"item-heading\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<time data-toggle=\"tooltip\" title=\"";
        // line 13
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "long", []));
        echo "\" class=\"text-secondary\"
\t\t\t\tdatetime=\"";
        // line 14
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "c");
        echo "\">
\t\t\t\t<small><i class=\"far fa-clock\"></i>&nbsp;";
        // line 15
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "dateformat", []), "short", []));
        echo "</small>
\t\t\t</time>
\t\t</div>
\t\t";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "readingtime", []), "enabled", [])) {
            // line 19
            echo "\t\t\t<div class=\"col text-right readingtime\">
\t\t\t\t<small data-toggle=\"tooltip\" title=\"";
            // line 20
            echo "Reading time";
            echo "\" class=\"text-secondary\"><i class=\"fas fa-book-reader\"></i> ";
            echo call_user_func_array($this->env->getFilter('readingtime')->getCallable(), [$this->getAttribute(($context["page"] ?? null), "content", [])]);
            echo "</small>
\t\t\t</div>
\t\t";
        }
        // line 23
        echo "\t</div>
\t<h2 class=\"item-title\">
\t\t";
        // line 25
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", [])) {
            // line 26
            echo "\t\t\t<a class=\"btn btn-outline-secondary\" href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "link", []);
            echo "\" target=\"_blank\"><i class=\"fas fa-link fa-md\"></i></a>
\t\t";
        }
        // line 28
        echo "\t\t";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
\t</h2>
\t<div class=\"item-categories\">
\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "category", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "\t\t\t<a data-toggle=\"tooltip\" title=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.TAXONOMY.SEE_OTHER_PAGES_OF", twig_capitalize_string_filter($this->env, $context["category"]));
            echo "\"
\t\t\tclass=\"badge badge-pill badge-";
            // line 33
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "secondary");
            echo " text-uppercase font-weight-normal\"
\t\t\thref=\"";
            // line 34
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", []), "/");
            echo "/category";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            echo $context["category"];
            echo "\">";
            echo $context["category"];
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
</div>
";
        // line 38
        if ((($context["header_image_media"] ?? null) && $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "item", []), "featured_image", []))) {
            // line 39
            echo "\t<div class=\"featured-image text-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "header_image_align", []), "center");
            echo "\">
\t\t";
            // line 40
            echo $this->getAttribute($this->getAttribute(($context["header_image_media"] ?? null), "cropResize", [0 => ($context["header_image_width"] ?? null), 1 => ($context["header_image_height"] ?? null)], "method"), "html", []);
            echo "
\t</div>
";
        }
        // line 43
        echo "<div class=\"item-content text-justify\">
    ";
        // line 44
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
</div>
<div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item toolbar buttons\">
    ";
        // line 47
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 48
            echo "      <div class=\"item-tags d-inline-block\">
        <i class=\"fas fa-tags text-";
            // line 49
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary");
            echo "\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.TAXONOMY.TAGS");
            echo ":
          ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 51
                echo "            <a class=\"btn btn-sm ";
                echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), 1 => true, 2 => false, 3 => "dark"], "method");
                echo "\"
               href=\"";
                // line 52
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter($this->getAttribute(($context["parent"] ?? null), "url", []), "/");
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">";
                echo $context["tag"];
                echo "</a>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      </div>
    ";
        }
        // line 56
        echo "\t<div class=\"btn-group\">
\t\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 58
            echo "\t\t\t<a href=\"";
            echo (((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute($context["button"], "url", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "http") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) ? ($this->getAttribute($context["button"], "url", [])) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", []))));
            echo "\"
\t\t\tclass=\"btn ";
            // line 59
            echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), 1 => true, 2 => false, 3 => "dark"], "method");
            echo " ";
            echo $this->getAttribute($context["button"], "class", []);
            echo "\">
\t\t\t\t";
            // line 60
            if ($this->getAttribute($context["button"], "icon", [])) {
                // line 61
                echo "\t\t\t\t<i class=\"fas fa-";
                echo $this->getAttribute($context["button"], "icon", []);
                echo "\"></i>
\t\t\t\t";
            }
            // line 63
            echo "\t\t\t\t";
            echo $this->getAttribute($context["button"], "text", []);
            echo "
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t</div>
</div>

";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "item", []), "show_prev_next", [])) {
            // line 70
            echo "\t<div class=\"d-flex flex-row py-3 mt-3\">
\t\t";
            // line 71
            if ( !$this->getAttribute(($context["page"] ?? null), "isLast", [])) {
                // line 72
                echo "\t\t\t<a class=\"btn ";
                echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), 1 => true, 2 => false, 3 => "primary"], "method");
                echo "\" href=\"";
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", []), "url", []);
                echo "\"><i
\t\t\t\tclass=\"fas fa-chevron-left\"></i> ";
                // line 73
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.ITEM.PREVIOUS");
                echo "</a>
\t\t";
            }
            // line 75
            echo "\t\t";
            if ( !$this->getAttribute(($context["page"] ?? null), "isFirst", [])) {
                // line 76
                echo "\t\t\t<a class=\"ml-auto btn ";
                echo $this->getAttribute(($context["bsTools"] ?? null), "buttonStyle", [0 => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), 1 => true, 2 => false, 3 => "primary"], "method");
                echo "\"
\t\t\thref=\"";
                // line 77
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", []), "url", []);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "BOOTSTRAP_BLOG.ITEM.NEXT");
                echo " <i class=\"fas fa-chevron-right\"></i></a>
\t\t";
            }
            // line 79
            echo "\t</div>
";
        }
        // line 81
        echo "
";
        // line 82
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "item", []), "related_pages", [])) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 83
            echo "    <div class=\"item-bottom-relatedpages row\">
        ";
            // line 84
            $this->loadTemplate("partials/item_relatedpages.html.twig", "partials/partial_item.html.twig", 84)->display($context);
            // line 85
            echo "    </div>
";
        }
        // line 87
        echo "
";
        // line 88
        $context["comments"] = array_merge($this->getAttribute(($context["theme_config"] ?? null), "comments", []), (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "comments", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", [], "any", false, true), "comments", []), [])) : ([])));
        // line 89
        if ($this->getAttribute(($context["comments"] ?? null), "enabled", [])) {
            // line 90
            echo "\t<div class=\"comments\">
\t\t";
            // line 91
            $this->loadTemplate("partials/comments.html.twig", "partials/partial_item.html.twig", 91)->display(twig_array_merge($context, ["page" => ($context["page"] ?? null), "config" => ($context["comments"] ?? null)]));
            // line 92
            echo "\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/partial_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 92,  291 => 91,  288 => 90,  286 => 89,  284 => 88,  281 => 87,  277 => 85,  275 => 84,  272 => 83,  270 => 82,  267 => 81,  263 => 79,  256 => 77,  251 => 76,  248 => 75,  243 => 73,  236 => 72,  234 => 71,  231 => 70,  229 => 69,  224 => 66,  214 => 63,  208 => 61,  206 => 60,  200 => 59,  195 => 58,  191 => 57,  188 => 56,  184 => 54,  171 => 52,  166 => 51,  162 => 50,  156 => 49,  153 => 48,  151 => 47,  145 => 44,  142 => 43,  136 => 40,  131 => 39,  129 => 38,  125 => 36,  112 => 34,  108 => 33,  103 => 32,  99 => 31,  92 => 28,  86 => 26,  84 => 25,  80 => 23,  72 => 20,  69 => 19,  67 => 18,  61 => 15,  57 => 14,  53 => 13,  47 => 9,  43 => 7,  39 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set header_image_width  = page.header.image_width|defined(1024) %}
{% set header_image_height = page.header.image_height|defined(600) %}  {# Default aspect ratio 2:1 #}
{% set header_image_file = page.header.image_file %}
{% if header_image_file %}
    {% set header_image_media = page.media.images[header_image_file] %}
{% else %}
    {% set header_image_media = page.media.images|first %}
{% endif %}

<div class=\"item-heading\">
\t<div class=\"row\">
\t\t<div class=\"col\">
\t\t\t<time data-toggle=\"tooltip\" title=\"{{ page.date|date(config.system.pages.dateformat.long) }}\" class=\"text-secondary\"
\t\t\t\tdatetime=\"{{ page.date|date(\"c\") }}\">
\t\t\t\t<small><i class=\"far fa-clock\"></i>&nbsp;{{ page.date|date(config.system.pages.dateformat.short) }}</small>
\t\t\t</time>
\t\t</div>
\t\t{% if config.plugins.readingtime.enabled %}
\t\t\t<div class=\"col text-right readingtime\">
\t\t\t\t<small data-toggle=\"tooltip\" title=\"{{ 'Reading time' }}\" class=\"text-secondary\"><i class=\"fas fa-book-reader\"></i> {{ page.content|readingtime }}</small>
\t\t\t</div>
\t\t{% endif %}
\t</div>
\t<h2 class=\"item-title\">
\t\t{% if page.header.link %}
\t\t\t<a class=\"btn btn-outline-secondary\" href=\"{{ page.header.link }}\" target=\"_blank\"><i class=\"fas fa-link fa-md\"></i></a>
\t\t{% endif %}
\t\t{{ page.title }}
\t</h2>
\t<div class=\"item-categories\">
\t\t{% for category in page.taxonomy.category %}
\t\t\t<a data-toggle=\"tooltip\" title=\"{{ 'BOOTSTRAP_BLOG.TAXONOMY.SEE_OTHER_PAGES_OF'|t(category|capitalize) }}\"
\t\t\tclass=\"badge badge-pill badge-{{ page.header.style|defined('secondary') }} text-uppercase font-weight-normal\"
\t\t\thref=\"{{ parent.url|rtrim('/') }}/category{{ config.system.param_sep }}{{ category }}\">{{ category }}</a>
\t\t{% endfor %}
\t</div>
</div>
{% if header_image_media and theme_config.item.featured_image %}
\t<div class=\"featured-image text-{{ page.header.header_image_align|defined('center') }}\">
\t\t{{ header_image_media.cropResize(header_image_width, header_image_height).html }}
\t</div>
{% endif %}
<div class=\"item-content text-justify\">
    {{ page.content }}
</div>
<div class=\"btn-toolbar justify-content-between\" role=\"toolbar\" aria-label=\"Item toolbar buttons\">
    {% if page.taxonomy.tag %}
      <div class=\"item-tags d-inline-block\">
        <i class=\"fas fa-tags text-{{ page.header.style|defined('primary') }}\"></i> {{ 'BOOTSTRAP_BLOG.TAXONOMY.TAGS'|t }}:
          {% for tag in page.taxonomy.tag %}
            <a class=\"btn btn-sm {{ bsTools.buttonStyle(page.header.style, true, false, 'dark') }}\"
               href=\"{{ parent.url|rtrim('/') }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag }}</a>
          {% endfor %}
      </div>
    {% endif %}
\t<div class=\"btn-group\">
\t\t{% for button in page.header.buttons %}
\t\t\t<a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\"
\t\t\tclass=\"btn {{ bsTools.buttonStyle(page.header.style, true, false, 'dark') }} {{ button.class }}\">
\t\t\t\t{% if button.icon %}
\t\t\t\t<i class=\"fas fa-{{ button.icon }}\"></i>
\t\t\t\t{% endif %}
\t\t\t\t{{ button.text }}
\t\t\t</a>
\t\t{% endfor %}
\t</div>
</div>

{% if theme_config.item.show_prev_next %}
\t<div class=\"d-flex flex-row py-3 mt-3\">
\t\t{% if not page.isLast %}
\t\t\t<a class=\"btn {{ bsTools.buttonStyle(page.header.style, true, false, 'primary') }}\" href=\"{{ page.prevSibling.url }}\"><i
\t\t\t\tclass=\"fas fa-chevron-left\"></i> {{ 'BOOTSTRAP_BLOG.ITEM.PREVIOUS'|t }}</a>
\t\t{% endif %}
\t\t{% if not page.isFirst %}
\t\t\t<a class=\"ml-auto btn {{ bsTools.buttonStyle(page.header.style, true, false, 'primary') }}\"
\t\t\thref=\"{{ page.nextSibling.url }}\">{{ 'BOOTSTRAP_BLOG.ITEM.NEXT'|t }} <i class=\"fas fa-chevron-right\"></i></a>
\t\t{% endif %}
\t</div>
{% endif %}

{% if config.plugins.relatedpages.enabled and theme_config.item.related_pages and related_pages|length > 0 %}
    <div class=\"item-bottom-relatedpages row\">
        {% include 'partials/item_relatedpages.html.twig' %}
    </div>
{% endif %}

{% set comments = array_merge(theme_config.comments, page.header.comments|default({})) %}
{% if comments.enabled %}
\t<div class=\"comments\">
\t\t{% include 'partials/comments.html.twig' with {'page':page, 'config': comments} %}
\t</div>
{% endif %}
", "partials/partial_item.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/partial_item.html.twig");
    }
}

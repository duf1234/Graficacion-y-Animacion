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
class __TwigTemplate_47a4712b97b41a0e54535af2892e176c34894c7f1fe9f9eddf4d5cff76b05e11 extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1232900599")->display($context);
        // line 37
        echo "

";
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
        return array (  32 => 37,  30 => 1,);
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

{% block content %}
        {% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

        {% if blog_image %}
                <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
        {% else %}
                <div class=\"blog-header\">
        {% endif %}
                {{ page.content }}
                </div>

        {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        <div class=\"content-wrapper blog-content-list grid pure-g\">
                <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
                        {% for child in collection %}
                                {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
                        {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
        </div>
        <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                {% include 'partials/sidebar.html.twig' with {'blog':page} %}
        </div>
        </div>
{% endblock %}

{% endembed %}


", "blog.html.twig", "/var/www/html/grav/user/themes/bulma-portfolio/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_47a4712b97b41a0e54535af2892e176c34894c7f1fe9f9eddf4d5cff76b05e11___1232900599 extends \Twig\Template
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
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", [], "method");
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "        ";
        $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "grayscale", [], "method"), "contrast", [0 => 20], "method"), "brightness", [0 =>  -100], "method"), "colorize", [0 =>  -35, 1 => 81, 2 => 122], "method");
        // line 7
        echo "
        ";
        // line 8
        if (($context["blog_image"] ?? null)) {
            // line 9
            echo "                <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url(";
            echo $this->getAttribute(($context["blog_image"] ?? null), "url", []);
            echo ");\">
        ";
        } else {
            // line 11
            echo "                <div class=\"blog-header\">
        ";
        }
        // line 13
        echo "                ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                </div>

        ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 17
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 17)->display($context);
            // line 18
            echo "        ";
        }
        // line 19
        echo "
        <div class=\"content-wrapper blog-content-list grid pure-g\">
                <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
                        ";
        // line 22
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
            // line 23
            echo "                                ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 23)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true]));
            // line 24
            echo "                        ";
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
        // line 25
        echo "
                ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 27
            echo "                        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 27)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 28
            echo "                ";
        }
        // line 29
        echo "        </div>
        <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                ";
        // line 31
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 31)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 32
        echo "        </div>
        </div>
";
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
        return array (  225 => 32,  223 => 31,  219 => 29,  216 => 28,  213 => 27,  211 => 26,  208 => 25,  194 => 24,  191 => 23,  174 => 22,  169 => 19,  166 => 18,  163 => 17,  161 => 16,  154 => 13,  150 => 11,  144 => 9,  142 => 8,  139 => 7,  136 => 6,  133 => 5,  128 => 1,  126 => 3,  120 => 1,  32 => 37,  30 => 1,);
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

{% block content %}
        {% set blog_image = page.media.images|first.grayscale().contrast(20).brightness(-100).colorize(-35,81,122) %}

        {% if blog_image %}
                <div class=\"flush-top blog-header blog-header-image\" style=\"background-image: url({{ blog_image.url }});\">
        {% else %}
                <div class=\"blog-header\">
        {% endif %}
                {{ page.content }}
                </div>

        {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
        {% endif %}

        <div class=\"content-wrapper blog-content-list grid pure-g\">
                <div id=\"listing\" class=\"block pure-u-2-3 h-feed\">
                        {% for child in collection %}
                                {% include 'partials/blog_item.html.twig' with {'blog':page, 'page':child, 'truncate':true} %}
                        {% endfor %}

                {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                {% endif %}
        </div>
        <div id=\"sidebar\" class=\"block size-1-3 pure-u-1-3\">
                {% include 'partials/sidebar.html.twig' with {'blog':page} %}
        </div>
        </div>
{% endblock %}

{% endembed %}


", "blog.html.twig", "/var/www/html/grav/user/themes/bulma-portfolio/templates/blog.html.twig");
    }
}

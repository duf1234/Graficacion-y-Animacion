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
class __TwigTemplate_bd800eddcd9f2e0fc4f0313814078317240f52f8b94d0b0052a393017f673d76 extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1649783413")->display($context);
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

    {% block content %}

        {% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
            {% set sidebar = true %}
        {% else %}
            {% set sidebar = false %}
        {% endif %}

        {% include 'partials/showcase.html.twig' with { 'content':page.content } %}

        <div class=\"container{% if theme_config.fluid_container %}-fluid{% endif %}\">
            {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"row items\">
                        {% for child in collection %}
                            {% include 'partials/layouts/' ~ page.header.layout|defined('boxed') ~ '.html.twig' with {'parent': page, 'page': child } %}
                        {% endfor %}
                    </div>
                    {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                    {% endif %}
                </div>
                {% if sidebar %}
                    <div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
                        <div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
                            {% include 'partials/sidebar.html.twig' with { 'blog':page } %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "blog.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_bd800eddcd9f2e0fc4f0313814078317240f52f8b94d0b0052a393017f673d76___1649783413 extends \Twig\Template
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
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
        ";
        // line 7
        if (( !($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "enabled", []) === false) &&  !($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sidebar", []), "enabled", []) === false))) {
            // line 8
            echo "            ";
            $context["sidebar"] = true;
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            ";
            $context["sidebar"] = false;
            // line 11
            echo "        ";
        }
        // line 12
        echo "
        ";
        // line 13
        $this->loadTemplate("partials/showcase.html.twig", "blog.html.twig", 13)->display(twig_array_merge($context, ["content" => $this->getAttribute(($context["page"] ?? null), "content", [])]));
        // line 14
        echo "
        <div class=\"container";
        // line 15
        if ($this->getAttribute(($context["theme_config"] ?? null), "fluid_container", [])) {
            echo "-fluid";
        }
        echo "\">
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 17
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 17)->display($context);
            // line 18
            echo "            ";
        }
        // line 19
        echo "            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"row items\">
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
            echo "                            ";
            $this->loadTemplate((("partials/layouts/" . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "layout", []), "boxed")) . ".html.twig"), "blog.html.twig", 23)->display(twig_array_merge($context, ["parent" => ($context["page"] ?? null), "page" => $context["child"]]));
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
        echo "                    </div>
                    ";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 27
            echo "                        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 27)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 28
            echo "                    ";
        }
        // line 29
        echo "                </div>
                ";
        // line 30
        if (($context["sidebar"] ?? null)) {
            // line 31
            echo "                    <div id=\"sidebar\" class=\"col-12 col-md-4 ";
            if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "align", []) == "left")) {
                echo "order-md-first";
            }
            echo "\">
                        <div class=\"sidebar-content ";
            // line 32
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "border", [])) {
                echo "border-";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []), "border", []);
            }
            echo "\">
                            ";
            // line 33
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 33)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
            // line 34
            echo "                        </div>
                    </div>
                ";
        }
        // line 37
        echo "            </div>
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
        return array (  244 => 37,  239 => 34,  237 => 33,  230 => 32,  223 => 31,  221 => 30,  218 => 29,  215 => 28,  212 => 27,  210 => 26,  207 => 25,  193 => 24,  190 => 23,  173 => 22,  168 => 19,  165 => 18,  162 => 17,  160 => 16,  154 => 15,  151 => 14,  149 => 13,  146 => 12,  143 => 11,  140 => 10,  137 => 9,  134 => 8,  132 => 7,  129 => 6,  126 => 5,  121 => 1,  119 => 3,  30 => 1,);
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

        {% if theme_config.sidebar.enabled is not sameas(false) and page.header.sidebar.enabled is not sameas(false) %}
            {% set sidebar = true %}
        {% else %}
            {% set sidebar = false %}
        {% endif %}

        {% include 'partials/showcase.html.twig' with { 'content':page.content } %}

        <div class=\"container{% if theme_config.fluid_container %}-fluid{% endif %}\">
            {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}
            <div class=\"row\">
                <div class=\"col\">
                    <div class=\"row items\">
                        {% for child in collection %}
                            {% include 'partials/layouts/' ~ page.header.layout|defined('boxed') ~ '.html.twig' with {'parent': page, 'page': child } %}
                        {% endfor %}
                    </div>
                    {% if config.plugins.pagination.enabled and collection.params.pagination %}
                        {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
                    {% endif %}
                </div>
                {% if sidebar %}
                    <div id=\"sidebar\" class=\"col-12 col-md-4 {% if theme_config.sidebar.align == 'left' %}order-md-first{% endif %}\">
                        <div class=\"sidebar-content {% if theme_config.sidebar.border %}border-{{ theme_config.sidebar.border }}{% endif %}\">
                            {% include 'partials/sidebar.html.twig' with { 'blog':page } %}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
    {% endblock %}

{% endembed %}
", "blog.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/blog.html.twig");
    }
}

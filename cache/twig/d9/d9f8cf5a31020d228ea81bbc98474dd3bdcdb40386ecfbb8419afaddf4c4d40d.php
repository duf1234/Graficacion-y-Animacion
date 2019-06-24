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
class __TwigTemplate_74e5e17783ef19b5437ae9f89ccf48f2e720c2d3cef9fe938fd8204d2bece567 extends \Twig\Template
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
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "2078975525")->display($context);
        // line 44
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
        return array (  32 => 44,  30 => 1,);
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
        {% include 'partials/hero.html.twig' %}

        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">

                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% for child in collection %}
                            {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
                        {% endfor %}

                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        {% include 'partials/sidebar.html.twig' with {'blog': page} %}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block pagination %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            <div class=\"container pagination-container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
                    </div>
                </div>
            </div>
        {% endif %}
    {% endblock %}

{% endembed %}


", "blog.html.twig", "/var/www/html/grav/user/themes/bootstrap4/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_74e5e17783ef19b5437ae9f89ccf48f2e720c2d3cef9fe938fd8204d2bece567___2078975525 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
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
        $this->loadTemplate("partials/hero.html.twig", "blog.html.twig", 6)->display($context);
        // line 7
        echo "
        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">

                        ";
        // line 13
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 14
            echo "                            ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "blog.html.twig", 14)->display($context);
            // line 15
            echo "                        ";
        }
        // line 16
        echo "
                        ";
        // line 17
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
            // line 18
            echo "                            ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 18)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null), "page" => $context["child"], "truncate" => true]));
            // line 19
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
        // line 20
        echo "
                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        ";
        // line 24
        $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 24)->display(twig_array_merge($context, ["blog" => ($context["page"] ?? null)]));
        // line 25
        echo "                    </div>
                </div>
            </div>
        </div>
    ";
    }

    // line 31
    public function block_pagination($context, array $blocks = [])
    {
        // line 32
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 33
            echo "            <div class=\"container pagination-container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        ";
            // line 36
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 36)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 37
            echo "                    </div>
                </div>
            </div>
        ";
        }
        // line 41
        echo "    ";
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
        return array (  235 => 41,  229 => 37,  227 => 36,  222 => 33,  219 => 32,  216 => 31,  208 => 25,  206 => 24,  200 => 20,  186 => 19,  183 => 18,  166 => 17,  163 => 16,  160 => 15,  157 => 14,  155 => 13,  147 => 7,  144 => 6,  141 => 5,  136 => 1,  134 => 3,  128 => 1,  32 => 44,  30 => 1,);
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
        {% include 'partials/hero.html.twig' %}

        <div class=\"main-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-8 blog-main\">

                        {% if config.plugins.breadcrumbs.enabled %}
                            {% include 'partials/breadcrumbs.html.twig' %}
                        {% endif %}

                        {% for child in collection %}
                            {% include 'partials/blog_item.html.twig' with {'blog': page, 'page': child, 'truncate': true} %}
                        {% endfor %}

                    </div>

                    <div class=\"col-sm-3 offset-sm-1 blog-sidebar\">
                        {% include 'partials/sidebar.html.twig' with {'blog': page} %}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}

    {% block pagination %}
        {% if config.plugins.pagination.enabled and collection.params.pagination %}
            <div class=\"container pagination-container\">
                <div class=\"row\">
                    <div class=\"col-sm-8\">
                        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination': collection.params.pagination} %}
                    </div>
                </div>
            </div>
        {% endif %}
    {% endblock %}

{% endembed %}


", "blog.html.twig", "/var/www/html/grav/user/themes/bootstrap4/templates/blog.html.twig");
    }
}

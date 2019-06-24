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

/* partials/breadcrumbs.html.twig */
class __TwigTemplate_084fee6b10e91889affe9489371100549448ff404797f35c4890230178d34705 extends \Twig\Template
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
        $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", [], "method");
        // line 2
        $context["breadcrumbs_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []);
        // line 3
        $context["divider"] = $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_divider_classes", []);
        // line 4
        echo "
";
        // line 5
        if (((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1) || $this->getAttribute(($context["breadcrumbs_config"] ?? null), "show_all", []))) {
            // line 6
            echo "<nav aria-label=\"breadcrumb\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
    <ol class=\"breadcrumb\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 9
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    // line 10
                    echo "            <li class=\"breadcrumb-item\">
            ";
                    // line 11
                    if ($this->getAttribute($context["loop"], "first", [])) {
                        // line 12
                        echo "                ";
                        if ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", [])) {
                            // line 13
                            echo "                <i class=\"text-secondary ";
                            echo $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", []);
                            echo "\"></i>
                ";
                        }
                        // line 15
                        echo "            ";
                    }
                    // line 16
                    echo "            ";
                    if ($this->getAttribute($context["crumb"], "routable", [])) {
                        // line 17
                        echo "                <a href=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span></a>
            ";
                    } else {
                        // line 19
                        echo "                <span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
            ";
                    }
                    // line 21
                    echo "            </li>
            ";
                    // line 23
                    echo "        ";
                } else {
                    // line 24
                    echo "            <li class=\"breadcrumb-item active\">
            ";
                    // line 25
                    if ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "link_trailing", [])) {
                        // line 26
                        echo "                <a href=\"";
                        echo $this->getAttribute($context["crumb"], "url", []);
                        echo "\" itemprop=\"url\" aria-current=\"page\"><span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span></a>
            ";
                    } else {
                        // line 28
                        echo "                <span itemprop=\"title\">";
                        echo $this->getAttribute($context["crumb"], "menu", []);
                        echo "</span>
            ";
                    }
                    // line 30
                    echo "            </li>
        ";
                }
                // line 32
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    </ol>
</nav>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 33,  128 => 32,  124 => 30,  118 => 28,  110 => 26,  108 => 25,  105 => 24,  102 => 23,  99 => 21,  93 => 19,  85 => 17,  82 => 16,  79 => 15,  73 => 13,  70 => 12,  68 => 11,  65 => 10,  62 => 9,  45 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set crumbs = breadcrumbs.get() %}
{% set breadcrumbs_config = config.plugins.breadcrumbs %}
{% set divider = breadcrumbs_config.icon_divider_classes %}

{% if crumbs|length > 1 or breadcrumbs_config.show_all %}
<nav aria-label=\"breadcrumb\" itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\">
    <ol class=\"breadcrumb\">
    {% for crumb in crumbs %}
        {% if not loop.last %}
            <li class=\"breadcrumb-item\">
            {% if loop.first %}
                {% if breadcrumbs_config.icon_home %}
                <i class=\"text-secondary {{ breadcrumbs_config.icon_home }}\"></i>
                {% endif %}
            {% endif %}
            {% if crumb.routable %}
                <a href=\"{{ crumb.url }}\" itemprop=\"url\"><span itemprop=\"title\">{{ crumb.menu }}</span></a>
            {% else  %}
                <span itemprop=\"title\">{{ crumb.menu }}</span>
            {% endif %}
            </li>
            {# <i class=\"{{ divider }}\"></i> #}
        {% else %}
            <li class=\"breadcrumb-item active\">
            {% if breadcrumbs_config.link_trailing %}
                <a href=\"{{ crumb.url }}\" itemprop=\"url\" aria-current=\"page\"><span itemprop=\"title\">{{ crumb.menu }}</span></a>
            {% else %}
                <span itemprop=\"title\">{{ crumb.menu }}</span>
            {% endif %}
            </li>
        {% endif %}
    {% endfor %}
    </ol>
</nav>
{% endif %}
", "partials/breadcrumbs.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/breadcrumbs.html.twig");
    }
}

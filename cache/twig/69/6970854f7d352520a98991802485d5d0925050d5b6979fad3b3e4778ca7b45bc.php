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

/* partials/navigation.html.twig */
class __TwigTemplate_252cc3cfcd3bf757ef6e429f8b715c11af464679ed681293bf47c5ebedc48a32 extends \Twig\Template
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
        // line 22
        echo "
<ul>
    ";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 25
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 27
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 28
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("selected") : (""));
                // line 29
                echo "            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a href=\"";
                // line 30
                echo $this->getAttribute($context["page"], "url", []);
                echo "\" class=\"";
                echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "menu_classes", []);
                echo "\">
                    ";
                // line 31
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        }
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 37
            echo "        <li>
            <a href=\"";
            // line 38
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\" class=\"";
            echo $this->getAttribute($context["mitem"], "classes", []);
            echo "\">
                ";
            // line 39
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</ul>

";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("selected") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "            <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_classes", []);
                    echo "\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <ul>
                    ";
                    // line 10
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 14
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 15
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "menu_classes", []);
                    echo "\">
                    ";
                    // line 16
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 20,  162 => 16,  156 => 15,  151 => 14,  144 => 10,  138 => 7,  132 => 6,  127 => 5,  124 => 4,  121 => 3,  116 => 2,  104 => 1,  98 => 43,  88 => 39,  82 => 38,  79 => 37,  74 => 36,  71 => 35,  61 => 31,  55 => 30,  50 => 29,  47 => 28,  42 => 27,  36 => 25,  34 => 24,  30 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"has-children {{ current_page }}\">
                <a href=\"{{ p.url }}\" class=\"{{ p.header.menu_classes }}\">
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\" class=\"{{ p.header.menu_classes }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul>
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ page.url }}\" class=\"{{ page.header.menu_classes }}\">
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li>
            <a href=\"{{ mitem.url }}\" class=\"{{ mitem.classes }}\">
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
</ul>

", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/landed/templates/partials/navigation.html.twig");
    }
}

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
class __TwigTemplate_be29531a2fedb27ce3143cb1811fb659952a341d71e4669b1a6446e5b840f819 extends \Twig\Template
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
        // line 20
        echo "
    ";
        // line 21
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 22
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 24
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("selected") : (""));
                // line 26
                echo "            <a class=\"sidebar-nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\" href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                    ";
                // line 27
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                </a>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 33
            echo "            <a class=\"sidebar-nav-item\" href=\"";
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                ";
            // line 34
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
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
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 5
                    echo "                <a class=\"has-children sidebar-nav-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 6
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 7
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <a>
                    ";
                    // line 10
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </a>
        ";
                } else {
                    // line 13
                    echo "                <a class=\"sidebar-nav-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\" href=\"";
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 14
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </a>
        ";
                }
                // line 18
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
        return array (  156 => 18,  149 => 14,  142 => 13,  136 => 10,  129 => 7,  123 => 6,  116 => 5,  113 => 4,  110 => 3,  105 => 2,  93 => 1,  88 => 37,  79 => 34,  74 => 33,  69 => 32,  66 => 31,  56 => 27,  49 => 26,  46 => 25,  41 => 24,  35 => 22,  33 => 21,  30 => 20,);
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
        {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
                <a class=\"has-children sidebar-nav-item {{current_page }}\" href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
                <a>
                    {{ _self.loop(p) }}
                </a>
        {% else %}
                <a class=\"sidebar-nav-item {{ current_page }}\" href=\"{{ p.url }}\">
                    {{ p.menu }}
                </a>
            </a>
        {% endif %}
    {% endfor %}
{% endmacro %}

    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
            <a class=\"sidebar-nav-item {{current_page}}\" href=\"{{ page.url }}\">
                    {{ page.menu }}
                </a>

        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
            <a class=\"sidebar-nav-item\" href=\"{{ mitem.url }}\">
                {{ mitem.text }}
            </a>
    {% endfor %}

", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/hyde/templates/partials/navigation.html.twig");
    }
}

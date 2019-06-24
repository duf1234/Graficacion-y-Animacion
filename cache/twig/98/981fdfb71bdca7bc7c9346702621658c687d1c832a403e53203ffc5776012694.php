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
class __TwigTemplate_715ada929d6d7a7acc394b5e01f78366e2c3d17a86a4946f6eddb1f4535bd857 extends \Twig\Template
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
        // line 19
        echo "
<ul class=\"navigation\">
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "            ";
                if ($this->getAttribute($context["page"], "visible", [])) {
                    // line 26
                    echo "                ";
                    $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                    // line 27
                    echo "                <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                    <a href=\"";
                    // line 28
                    echo $this->getAttribute($context["page"], "url", []);
                    echo "\">
                        ";
                    // line 29
                    if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 30
                    echo "                        ";
                    echo $this->getAttribute($context["page"], "menu", []);
                    echo "
                    </a>
                </li>
            ";
                }
                // line 34
                echo "        ";
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
            echo "\">
                ";
            // line 39
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 40
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</ul>           ";
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                if ($this->getAttribute($context["p"], "visible", [])) {
                    // line 4
                    echo "            ";
                    $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 5
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 7
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 8
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                ";
                    // line 10
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", []), "count", []) > 0)) {
                        // line 11
                        echo "                    <ul>
                        ";
                        // line 12
                        echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                        echo "
                    </ul>
                ";
                    }
                    // line 15
                    echo "            </li>
        ";
                }
                // line 17
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
        return array (  177 => 17,  173 => 15,  167 => 12,  164 => 11,  162 => 10,  156 => 8,  150 => 7,  146 => 6,  141 => 5,  138 => 4,  135 => 3,  130 => 2,  118 => 1,  114 => 44,  103 => 40,  97 => 39,  93 => 38,  90 => 37,  85 => 36,  82 => 35,  76 => 34,  68 => 30,  62 => 29,  58 => 28,  53 => 27,  50 => 26,  47 => 25,  42 => 24,  36 => 22,  34 => 21,  30 => 19,);
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
    {% for p in page.children %}
        {% if p.visible %}
            {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
                {% if p.children.count > 0 %}
                    <ul>
                        {{ _self.loop(p) }}
                    </ul>
                {% endif %}
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul class=\"navigation\">
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children %}
            {% if page.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                <li class=\"{{ current_page }}\">
                    <a href=\"{{ page.url }}\">
                        {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                        {{ page.menu }}
                    </a>
                </li>
            {% endif %}
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li>
            <a href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
</ul>           ", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/deliver/templates/partials/navigation.html.twig");
    }
}

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
class __TwigTemplate_ca3e89ea3e48bdc13c323869711df8cfd474e619f6275e1d953b4d72068696fd extends \Twig\Template
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
        // line 17
        echo "
<ul class=\"nav-items\">
    ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 20
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 23
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 24
                echo "            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a href=\"";
                // line 25
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                    ";
                // line 26
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 27
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                </a>
            </li>
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
            echo "        <li>
            <a href=\"";
            // line 34
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                ";
            // line 35
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 36
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
        // line 40
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 41
            echo "        <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 41)->display($context);
            echo "</li>
    ";
        }
        // line 43
        echo "</ul>";
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
                echo "        <li class=\" ";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 5
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
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 10
                    echo "                <ul class=\"nav-submenu\">
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
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
        return array (  173 => 14,  167 => 11,  164 => 10,  162 => 9,  156 => 7,  150 => 6,  146 => 5,  141 => 4,  138 => 3,  133 => 2,  121 => 1,  117 => 43,  111 => 41,  108 => 40,  97 => 36,  91 => 35,  87 => 34,  84 => 33,  79 => 32,  76 => 31,  65 => 27,  59 => 26,  55 => 25,  50 => 24,  47 => 23,  42 => 22,  36 => 20,  34 => 19,  30 => 17,);
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
        <li class=\" {{ current_page }}\">
            <a href=\"{{ p.url }}\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                {{ p.menu }}
            </a>
            {% if p.children.visible.count > 0 %}
                <ul class=\"nav-submenu\">
                    {{ _self.loop(p) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<ul class=\"nav-items\">
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
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
    {% if config.plugins.login.enabled and grav.user.username %}
        <li><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
    {% endif %}
</ul>", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/navigation.html.twig");
    }
}

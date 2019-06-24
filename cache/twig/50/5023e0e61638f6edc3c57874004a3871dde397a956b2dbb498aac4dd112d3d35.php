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
class __TwigTemplate_9ac0a83c64fe707a530437f64c4e8e592c7add84d4b07eb28ac1202ae8a6d8ca extends \Twig\Template
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
        // line 52
        echo "
<div class=\"navbar-nav ml-auto\">
    ";
        // line 54
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "dropdown", []) == true)) {
            // line 55
            echo "        ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
    ";
        } else {
            // line 57
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 58
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 59
                echo "            <div class=\"nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a class=\"nav-link\" href=\"";
                // line 60
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                    ";
                // line 61
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fas fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 62
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                </a>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "    ";
        }
        // line 67
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 68
            echo "        <div class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 69
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                ";
            // line 70
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fas fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 71
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
            </a>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 76
            echo "        ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 76)->display($context);
            // line 77
            echo "    ";
        }
        // line 78
        echo "</div>
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
                    echo "            ";
                    $context["dropdown_separator"] = $this->getAttribute($this->getAttribute($context["p"], "header", []), "split_menu", []);
                    // line 6
                    echo "            ";
                    if (($context["dropdown_separator"] ?? null)) {
                        // line 7
                        echo "                <li class=\"nav-item dropdown dropdown-split-menu ";
                        echo ($context["current_page"] ?? null);
                        echo "\">
                    <div class=\"btn-group\">
                        <a class=\"nav-link\" href=\"";
                        // line 9
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\">
                            ";
                        // line 10
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            echo "<i class=\"fas fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                            echo "\"></i>";
                        }
                        // line 11
                        echo "                            ";
                        echo $this->getAttribute($context["p"], "menu", []);
                        echo "
                        </a>
                        <a href=\"#\" id=\"dropdown-";
                        // line 13
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\" class=\"nav-link dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"></a>
                        <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-";
                        // line 15
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\">
                            ";
                        // line 16
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 17
                            echo "                                <a class=\"dropdown-item\" href=\"";
                            echo $this->getAttribute($context["c"], "url", []);
                            echo "\">
                                    ";
                            // line 18
                            if ($this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", [])) {
                                echo "<i class=\"fas fa-";
                                echo $this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", []);
                                echo "\"></i>";
                            }
                            // line 19
                            echo "                                    ";
                            echo $this->getAttribute($context["c"], "menu", []);
                            echo "
                                </a>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 22
                        echo "                        </div>
                    </div>
                </li>
            ";
                    } else {
                        // line 26
                        echo "                <li class=\"nav-item dropdown ";
                        echo ($context["current_page"] ?? null);
                        echo "\">
                    <a id=\"dropdown-";
                        // line 27
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\" class=\"nav-link dropdown-toggle\" href=\"";
                        echo $this->getAttribute($context["p"], "url", []);
                        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                        ";
                        // line 29
                        if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                            echo "<i class=\"fas fa-";
                            echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                            echo "\"></i>";
                        }
                        // line 30
                        echo "                        ";
                        echo $this->getAttribute($context["p"], "menu", []);
                        echo "
                    </a>
                    <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-";
                        // line 32
                        echo $this->getAttribute($context["p"], "id", []);
                        echo "\">
                        ";
                        // line 33
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                            // line 34
                            echo "                            <a class=\"dropdown-item\" href=\"";
                            echo $this->getAttribute($context["c"], "url", []);
                            echo "\">
                                ";
                            // line 35
                            if ($this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", [])) {
                                echo "<i class=\"fas fa-";
                                echo $this->getAttribute($this->getAttribute($context["c"], "header", []), "icon", []);
                                echo "\"></i>";
                            }
                            // line 36
                            echo "                                ";
                            echo $this->getAttribute($context["c"], "menu", []);
                            echo "
                            </a>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 39
                        echo "                    </div>
                </li>
            ";
                    }
                    // line 42
                    echo "        ";
                } else {
                    // line 43
                    echo "            <li class=\"nav-item ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a class=\"nav-link\" href=\"";
                    // line 44
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
                    ";
                    // line 45
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                        echo "<i class=\"fas fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                        echo "\"></i>";
                    }
                    // line 46
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 50
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
        return array (  297 => 50,  289 => 46,  283 => 45,  279 => 44,  274 => 43,  271 => 42,  266 => 39,  256 => 36,  250 => 35,  245 => 34,  241 => 33,  237 => 32,  231 => 30,  225 => 29,  218 => 27,  213 => 26,  207 => 22,  197 => 19,  191 => 18,  186 => 17,  182 => 16,  178 => 15,  173 => 13,  167 => 11,  161 => 10,  157 => 9,  151 => 7,  148 => 6,  145 => 5,  142 => 4,  139 => 3,  134 => 2,  122 => 1,  117 => 78,  114 => 77,  111 => 76,  108 => 75,  97 => 71,  91 => 70,  87 => 69,  84 => 68,  79 => 67,  76 => 66,  65 => 62,  59 => 61,  55 => 60,  50 => 59,  47 => 58,  42 => 57,  36 => 55,  34 => 54,  30 => 52,);
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
            {% set dropdown_separator = p.header.split_menu %}
            {% if dropdown_separator %}
                <li class=\"nav-item dropdown dropdown-split-menu {{ current_page }}\">
                    <div class=\"btn-group\">
                        <a class=\"nav-link\" href=\"{{ p.url }}\">
                            {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                            {{ p.menu }}
                        </a>
                        <a href=\"#\" id=\"dropdown-{{ p.id }}\" class=\"nav-link dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                            aria-expanded=\"false\"></a>
                        <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-{{ p.id }}\">
                            {% for c in p.children.visible %}
                                <a class=\"dropdown-item\" href=\"{{ c.url }}\">
                                    {% if c.header.icon %}<i class=\"fas fa-{{ c.header.icon }}\"></i>{% endif %}
                                    {{ c.menu }}
                                </a>
                            {% endfor %}
                        </div>
                    </div>
                </li>
            {% else %}
                <li class=\"nav-item dropdown {{ current_page }}\">
                    <a id=\"dropdown-{{ p.id }}\" class=\"nav-link dropdown-toggle\" href=\"{{ p.url }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                    aria-expanded=\"false\">
                        {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                        {{ p.menu }}
                    </a>
                    <div class=\"dropdown-menu\" arial-labelledby=\"dropdown-{{ p.id }}\">
                        {% for c in p.children.visible %}
                            <a class=\"dropdown-item\" href=\"{{ c.url }}\">
                                {% if c.header.icon %}<i class=\"fas fa-{{ c.header.icon }}\"></i>{% endif %}
                                {{ c.menu }}
                            </a>
                        {% endfor %}
                    </div>
                </li>
            {% endif %}
        {% else %}
            <li class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fas fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<div class=\"navbar-nav ml-auto\">
    {% if theme_config.navbar.dropdown == true %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
            <div class=\"nav-item {{ current_page }}\">
                <a class=\"nav-link\" href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fas fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </div>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <div class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fas fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </div>
    {% endfor %}
    {% if config.plugins.login.enabled and grav.user.username %}
        {% include 'partials/login-status.html.twig' %}
    {% endif %}
</div>
", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/navigation.html.twig");
    }
}

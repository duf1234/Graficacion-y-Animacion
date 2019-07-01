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
class __TwigTemplate_efa29ac357791318acdcc5df43eae3e722700f43f01760bf7dc28909f690863c extends \Twig\Template
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
        $context["navbar_style"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("navbar_style");
        // line 2
        $context["navbar_bgcolor"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc("navbar_bgcolor");
        // line 3
        echo "
<nav class=\"navbar navbar-expand-md ";
        // line 4
        echo ($context["navbar_style"] ?? null);
        echo "\" style=\"background-color:";
        echo ($context["navbar_bgcolor"] ?? null);
        echo ";\" role=\"navigation\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 6
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"navbar-collapse collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 15
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "bootstrap4", []), "dropdown", []), "enabled", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []), "count", []) > 0))) {
                // line 16
                echo "                        <li class=\"nav-item dropdown ";
                echo ($context["current_page"] ?? null);
                echo "\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
                // line 17
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                            <div class=\"dropdown-menu\">
                                ";
                // line 19
                $context["current_parent"] = (($this->getAttribute($context["page"], "active", [])) ? ("active") : (""));
                // line 20
                echo "                                <a href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\" class=\"dropdown-item ";
                echo ($context["current_parent"] ?? null);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                                <div class=\"dropdown-divider\"></div>
                                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 23
                    echo "                                    ";
                    $context["current_child"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                    // line 24
                    echo "                                    <a href=\"";
                    echo $this->getAttribute($context["child"], "url", []);
                    echo "\" class=\"dropdown-item ";
                    echo ($context["current_child"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["child"], "menu", []);
                    echo "</a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                            </div>
                        </li>
                    ";
            } else {
                // line 29
                echo "                        <li class=\"nav-item ";
                echo ($context["current_page"] ?? null);
                echo "\"><a class=\"nav-link\" href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 34
            echo "                    <li class=\"nav-item\">
                        ";
            // line 35
            $context["icon"] = (($this->getAttribute($context["mitem"], "icon", [])) ? ((("<i class=\"fa fa-fw fa-" . $this->getAttribute($context["mitem"], "icon", [])) . "\"></i> ")) : (""));
            // line 36
            echo "                        <a class=\"nav-link\" href=\"";
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">";
            echo ($context["icon"] ?? null);
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 41
            echo "                    <li class=\"nav-item\"><span class=\"nav-link\"><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 41)->display($context);
            echo "</span></li>
                ";
        }
        // line 43
        echo "            </ul>
        </div>
    </div>
</nav>
";
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
        return array (  165 => 43,  159 => 41,  157 => 40,  154 => 39,  141 => 36,  139 => 35,  136 => 34,  132 => 33,  129 => 32,  123 => 31,  113 => 29,  108 => 26,  95 => 24,  92 => 23,  88 => 22,  78 => 20,  76 => 19,  71 => 17,  66 => 16,  63 => 15,  60 => 14,  56 => 13,  44 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set navbar_style = theme_var('navbar_style') %}
{% set navbar_bgcolor = theme_var('navbar_bgcolor') %}

<nav class=\"navbar navbar-expand-md {{ navbar_style }}\" style=\"background-color:{{ navbar_bgcolor }};\" role=\"navigation\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title|e('html') }}</a>
        <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"navbar-collapse collapse justify-content-end\">
            <ul class=\"navbar-nav\">
                {% for page in pages.children.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    {% if config.themes.bootstrap4.dropdown.enabled and page.children.visible.count > 0 %}
                        <li class=\"nav-item dropdown {{ current_page }}\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ page.menu }}</a>
                            <div class=\"dropdown-menu\">
                                {% set current_parent = page.active ? 'active' : '' %}
                                <a href=\"{{ page.url }}\" class=\"dropdown-item {{ current_parent }}\">{{ page.menu }}</a>
                                <div class=\"dropdown-divider\"></div>
                                {% for child in page.children.visible %}
                                    {% set current_child = (child.active or child.activeChild) ? 'active' : '' %}
                                    <a href=\"{{ child.url }}\" class=\"dropdown-item {{ current_child }}\">{{ child.menu }}</a>
                                {% endfor %}
                            </div>
                        </li>
                    {% else %}
                        <li class=\"nav-item {{ current_page }}\"><a class=\"nav-link\" href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                    {% endif %}
                {% endfor %}

                {% for mitem in site.menu %}
                    <li class=\"nav-item\">
                        {% set icon = mitem.icon ? '<i class=\"fa fa-fw fa-' ~ mitem.icon ~ '\"></i> ' : '' %}
                        <a class=\"nav-link\" href=\"{{ mitem.url }}\">{{ icon|raw }}{{ mitem.text }}</a>
                    </li>
                {% endfor %}

                {% if config.plugins.login.enabled and grav.user.username %}
                    <li class=\"nav-item\"><span class=\"nav-link\"><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</span></li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/bootstrap4/templates/partials/navigation.html.twig");
    }
}

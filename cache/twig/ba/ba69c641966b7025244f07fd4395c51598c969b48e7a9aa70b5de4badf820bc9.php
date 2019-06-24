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
class __TwigTemplate_3efa74f568e6653ca1cece41e12a9d1f4b8d754a059cb31288192dd7539694ec extends \Twig\Template
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
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1)) {
            // line 4
            echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            ";
            // line 6
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
                // line 7
                echo "                ";
                $context["active"] = (($this->getAttribute($context["loop"], "last", [])) ? ("active") : (""));
                // line 8
                echo "                <li class=\"breadcrumb-item ";
                echo ($context["active"] ?? null);
                echo "\">";
                // line 9
                if (( !$this->getAttribute($context["loop"], "last", []) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "link_trailing", []))) {
                    // line 10
                    echo "<a href=\"";
                    echo $this->getAttribute($context["crumb"], "url", []);
                    echo "\">";
                    echo $this->getAttribute($context["crumb"], "menu", []);
                    echo "</a>";
                } else {
                    // line 12
                    echo $this->getAttribute($context["crumb"], "menu", []);
                }
                // line 14
                echo "</li>
            ";
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
            // line 16
            echo "        </ol>
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
        return array (  92 => 16,  77 => 14,  74 => 12,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
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

{% if crumbs|length > 1 %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            {% for crumb in crumbs %}
                {% set active = loop.last ? 'active' : '' %}
                <li class=\"breadcrumb-item {{ active }}\">
                    {%- if not loop.last or config.plugins.breadcrumbs.link_trailing -%}
                        <a href=\"{{ crumb.url }}\">{{ crumb.menu }}</a>
                    {%- else -%}
                        {{ crumb.menu }}
                    {%- endif -%}
                </li>
            {% endfor %}
        </ol>
    </nav>
{% endif %}
", "partials/breadcrumbs.html.twig", "/var/www/html/grav/user/themes/bootstrap4/templates/partials/breadcrumbs.html.twig");
    }
}

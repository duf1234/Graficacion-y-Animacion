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

/* partials/archives.html.twig */
class __TwigTemplate_9a2116e4ecc39e2f7730f6ed2a1b8bd998d2f107508cc28185ec45b48008966e extends \Twig\Template
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
        echo "<ul class=\"list-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["archives_data"] ?? null));
        foreach ($context['_seq'] as $context["month"] => $context["items"]) {
            // line 3
            echo "        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <a href=\"";
            // line 4
            echo ($context["base_url"] ?? null);
            echo "/";
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "taxonomy_names", []), "month", []);
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_date_format_filter($this->env, $context["month"], "M_Y")), "url");
            echo "\">
                <span class=\"archive_date\">";
            // line 5
            echo $context["month"];
            echo "</span>
            </a>
            ";
            // line 7
            if (($context["archives_show_count"] ?? null)) {
                // line 8
                echo "                <span class=\"badge badge-primary badge-pill\">";
                echo twig_length_filter($this->env, $context["items"]);
                echo "</span>
            ";
            }
            // line 10
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['month'], $context['items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  61 => 10,  55 => 8,  53 => 7,  48 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"list-group\">
    {% for month,items in archives_data %}
        <li class=\"list-group-item d-flex justify-content-between align-items-center\">
            <a href=\"{{ base_url }}/{{ config.plugins.archives.taxonomy_names.month }}{{ config.system.param_sep }}{{ month|date('M_Y')|lower|e('url') }}\">
                <span class=\"archive_date\">{{ month }}</span>
            </a>
            {% if archives_show_count %}
                <span class=\"badge badge-primary badge-pill\">{{ items|length }}</span>
            {% endif %}
        </li>
    {% endfor %}
</ul>
", "partials/archives.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/archives.html.twig");
    }
}

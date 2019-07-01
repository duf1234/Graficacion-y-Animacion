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

/* partials/sections/links.html.twig */
class __TwigTemplate_9302f40857d0c2da2131805de5444b6982e2cc0e63bbcfaf76c42edc48d03236 extends \Twig\Template
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
        $context["columns"] = ((($context["columns"] ?? null)) ? (($context["columns"] ?? null)) : (2));
        // line 2
        $context["per_column"] = ((($context["per_column"] ?? null)) ? (($context["per_column"] ?? null)) : (5));
        // line 3
        $context["column_units"] = ((($context["column_units"] ?? null)) ? (($context["column_units"] ?? null)) : ((int) floor((12 / ($context["columns"] ?? null)))));
        // line 4
        $context["links"] = ((($context["links"] ?? null)) ? (($context["links"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "links", [])));
        // line 5
        $context["heading"] = ((($context["heading"] ?? null)) ? (($context["heading"] ?? null)) : ((($this->getAttribute(($context["links"] ?? null), "heading", [])) ? ($this->getAttribute(($context["links"] ?? null), "heading", [])) : ("How about some links?"))));
        // line 6
        $context["row_layout"] = (($context["columns"] ?? null) > 1);
        // line 7
        echo "<section>
\t<h2>";
        // line 8
        echo ($context["heading"] ?? null);
        echo "</h2>
\t";
        // line 9
        if (($context["row_layout"] ?? null)) {
            // line 10
            echo "\t\t<div>
\t\t\t<div class=\"row\">
\t";
        }
        // line 13
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["links"] ?? null), "list", []), 0, (($context["per_column"] ?? null) * ($context["columns"] ?? null))));
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
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 14
            echo "\t\t";
            if (((($this->getAttribute($context["loop"], "index", []) - 1) % ($context["per_column"] ?? null)) == 0)) {
                // line 15
                echo "\t\t\t";
                if (($context["row_layout"] ?? null)) {
                    // line 16
                    echo "\t\t\t\t<div class=\"";
                    echo ($context["column_units"] ?? null);
                    echo "u 12u(mobile)\">
\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t<ul class=\"link-list\">
\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["link"], "target", []);
            echo "\">";
            echo $this->getAttribute($context["link"], "text", []);
            echo "</a></li>
\t\t";
            // line 21
            if (($this->getAttribute($context["loop"], "last", []) || ( !$this->getAttribute($context["loop"], "first", []) && (($this->getAttribute($context["loop"], "index", []) % ($context["per_column"] ?? null)) == 0)))) {
                // line 22
                echo "\t\t\t\t\t</ul>
\t\t\t";
                // line 23
                if (($context["row_layout"] ?? null)) {
                    // line 24
                    echo "\t\t\t\t</div>
\t\t\t";
                }
                // line 26
                echo "\t\t";
            }
            // line 27
            echo "\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t";
        if (($context["row_layout"] ?? null)) {
            // line 29
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 32
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "partials/sections/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  128 => 29,  125 => 28,  111 => 27,  108 => 26,  104 => 24,  102 => 23,  99 => 22,  97 => 21,  90 => 20,  86 => 18,  80 => 16,  77 => 15,  74 => 14,  56 => 13,  51 => 10,  49 => 9,  45 => 8,  42 => 7,  40 => 6,  38 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set columns = columns ?: 2 %}
{% set per_column = per_column ?: 5 %}
{% set column_units = column_units ?: (12 // columns) %}
{% set links = links ?: page.header.links %}
{% set heading = heading ?: (links.heading ?: 'How about some links?') %}
{% set row_layout = (columns > 1) %}
<section>
\t<h2>{{ heading }}</h2>
\t{% if row_layout %}
\t\t<div>
\t\t\t<div class=\"row\">
\t{% endif %}
\t{% for link in links.list|slice(0, (per_column * columns)) %}
\t\t{% if (loop.index - 1) % per_column == 0 %}
\t\t\t{% if row_layout %}
\t\t\t\t<div class=\"{{ column_units }}u 12u(mobile)\">
\t\t\t{% endif %}
\t\t\t\t\t<ul class=\"link-list\">
\t\t{% endif %}
\t\t\t\t\t\t<li><a href=\"{{ link.target }}\">{{ link.text }}</a></li>
\t\t{% if loop.last or (not(loop.first) and (loop.index % per_column) == 0) %}
\t\t\t\t\t</ul>
\t\t\t{% if row_layout %}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t{% endif %}
\t{% endfor %}
\t{% if row_layout %}
\t\t\t</div>
\t\t</div>
\t{% endif %}
</section>
", "partials/sections/links.html.twig", "/var/www/html/grav/user/themes/minimaxing/templates/partials/sections/links.html.twig");
    }
}

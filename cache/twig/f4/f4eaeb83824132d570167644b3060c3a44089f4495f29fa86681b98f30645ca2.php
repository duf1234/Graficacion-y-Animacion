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

/* partials/taxonomylist.html.twig */
class __TwigTemplate_c51db6572a87ffcafeff14238499b5f8d5fa98bf9c8d4ac5331ba4b26f90d4fe extends \Twig\Template
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
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method");
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "    <span class=\"tags\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "            <a class=\"badge badge-secondary\" href=\"";
                echo ($context["base_url"] ?? null);
                echo "/tag:";
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </span>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  44 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set taxlist = taxonomylist.get() %}

{% if taxlist %}
    <span class=\"tags\">
        {% for tax, value in taxlist[taxonomy] %}
            <a class=\"badge badge-secondary\" href=\"{{ base_url }}/tag:{{ tax }}\">{{ tax }}</a>
        {% endfor %}
    </span>
{% endif %}
", "partials/taxonomylist.html.twig", "/var/www/html/grav/user/themes/bootstrap4/templates/partials/taxonomylist.html.twig");
    }
}

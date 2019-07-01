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
class __TwigTemplate_5994f07104e9355075244d3a2e91ac1e6c048c13f18a3e2c78d12ec9f606883f extends \Twig\Template
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
        $context["taxlist"] = (((isset($context["children_only"]) || array_key_exists("children_only", $context))) ? ($this->getAttribute(($context["taxonomylist"] ?? null), "getChildPagesTags", [], "method")) : ($this->getAttribute(($context["taxonomylist"] ?? null), "get", [], "method")));
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<span class=\"tags\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "        ";
                $context["active"] = ((($this->getAttribute(($context["uri"] ?? null), "param", [0 => ($context["taxonomy"] ?? null)], "method") == $context["tax"])) ? ("active") : (""));
                // line 7
                echo "        <a class=\"";
                echo ($context["active"] ?? null);
                echo "\" href=\"";
                echo ($context["base_url"] ?? null);
                echo "/";
                echo ($context["taxonomy"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tax"];
                echo "\">";
                echo $context["tax"];
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "</span>
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
        return array (  64 => 9,  47 => 7,  44 => 6,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set taxlist = children_only is defined ? taxonomylist.getChildPagesTags() : taxonomylist.get() %}

{% if taxlist %}
<span class=\"tags\">
    {% for tax,value in taxlist[taxonomy] %}
        {% set active = uri.param(taxonomy) == tax? 'active' : '' %}
        <a class=\"{{ active }}\" href=\"{{ base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax }}\">{{ tax }}</a>
    {% endfor %}
</span>
{% endif %}
", "partials/taxonomylist.html.twig", "/var/www/html/grav/user/plugins/taxonomylist/templates/partials/taxonomylist.html.twig");
    }
}

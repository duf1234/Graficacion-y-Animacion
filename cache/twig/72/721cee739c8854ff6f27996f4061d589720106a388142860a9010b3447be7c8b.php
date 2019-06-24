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
class __TwigTemplate_37dac9298ec3c657819d933fab192cbfc3b9b6ce9b14b9db5c7271e42608b1d4 extends \Twig\Template
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
            echo "
<ul class=\"archives\">
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), [], "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 7
                echo "    <li>
        <a href=\"";
                // line 8
                echo ($context["base_url"] ?? null);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo twig_escape_filter($this->env, $context["tax"], "url");
                echo "\">";
                echo $context["tax"];
                echo " </a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "</ul>
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
        return array (  62 => 11,  48 => 8,  45 => 7,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
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

<ul class=\"archives\">
    {% for tax,value in taxlist[taxonomy] %}
    <li>
        <a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax }} </a>
    </li>
    {% endfor %}
</ul>
{% endif %}
", "partials/taxonomylist.html.twig", "/var/www/html/grav/user/themes/deliver/templates/partials/taxonomylist.html.twig");
    }
}

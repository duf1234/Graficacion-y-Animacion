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

/* partials/metadata.html.twig */
class __TwigTemplate_85eedb8308efcd3e0626d962d20e242d962a4e9ea7f79143f7d92c235def7393 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            echo "<meta 
";
            // line 3
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\" ";
            }
            // line 4
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", []);
                echo "\" ";
            }
            // line 5
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", []);
                echo "\" ";
            }
            // line 6
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\" ";
            }
            // line 7
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 7,  55 => 6,  49 => 5,  43 => 4,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for meta in page.metadata %}
<meta 
{% if meta.name %}name=\"{{ meta.name }}\" {% endif %}
{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}
{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}
{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}
{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
{% endfor %}", "partials/metadata.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/metadata.html.twig");
    }
}

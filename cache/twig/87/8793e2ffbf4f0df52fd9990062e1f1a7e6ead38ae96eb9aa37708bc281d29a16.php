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

/* partials/components/social_linkgroup.html.twig */
class __TwigTemplate_1f7e96e86c5458f5096472a9e45e9d0ccf9bd233e2210dfcc2dab0bbf6108b5b extends \Twig\Template
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
        $context["links"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/components/links/_social"], "method"), "header", []), "links", []);
        // line 2
        echo "<ul class=\"icons\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 4
            echo "\t\t<li><a href=\"";
            echo $this->getAttribute($context["link"], "target", []);
            echo "\"";
            if ($this->getAttribute($context["link"], "icon", [])) {
                echo " class=\"icon alt fa-";
                echo $this->getAttribute($context["link"], "icon", []);
                echo "\"";
            }
            echo "><span class=\"label\">";
            echo $this->getAttribute($context["link"], "text", []);
            echo "</span></a></li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "partials/components/social_linkgroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set links =  page.find('/components/links/_social').header.links %}
<ul class=\"icons\">
\t{% for link in links %}
\t\t<li><a href=\"{{ link.target }}\"{% if link.icon %} class=\"icon alt fa-{{ link.icon }}\"{% endif %}><span class=\"label\">{{ link.text }}</span></a></li>
\t{% endfor %}
</ul>
", "partials/components/social_linkgroup.html.twig", "/var/www/html/grav/user/themes/landed/templates/partials/components/social_linkgroup.html.twig");
    }
}

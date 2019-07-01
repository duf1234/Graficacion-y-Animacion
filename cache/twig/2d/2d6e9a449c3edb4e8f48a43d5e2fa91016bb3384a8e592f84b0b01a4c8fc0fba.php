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

/* partials/footer.html.twig */
class __TwigTemplate_4fdde36d0bd9b6f3af6552ae12a7cfe1e4699472913c42ec230a1b39c487fe91 extends \Twig\Template
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
        echo "<div class=\"row\">
\t<div class=\"8u 12u(mobile)\">
\t\t";
        // line 4
        echo "\t\t";
        $context["unrelated"] = [0 => ["text" => "Sed neque nisi consequat", "target" => "#"], 1 => ["text" => "Dapibus sed mattis blandit", "target" => "#"], 2 => ["text" => "Quis accumsan lorem", "target" => "#"], 3 => ["text" => "Suspendisse varius ipsum", "target" => "#"], 4 => ["text" => "Eget et amet consequat", "target" => "#"], 5 => ["text" => "Quis accumsan lorem", "target" => "#"], 6 => ["text" => "Sed neque nisi consequat", "target" => "#"], 7 => ["text" => "Eget et amet consequat", "target" => "#"], 8 => ["text" => "Dapibus sed mattis blandit", "target" => "#"], 9 => ["text" => "Vitae magna sed dolore", "target" => "#"], 10 => ["text" => "Sed neque nisi consequat", "target" => "#"], 11 => ["text" => "Dapibus sed mattis blandit", "target" => "#"], 12 => ["text" => "Quis accumsan lorem", "target" => "#"], 13 => ["text" => "Suspendisse varius ipsum", "target" => "#"], 14 => ["text" => "Eget et amet consequat", "target" => "#"], 15 => ["text" => "Quis accumsan lorem", "target" => "#"], 16 => ["text" => "Sed neque nisi consequat", "target" => "#"], 17 => ["text" => "Eget et amet consequat", "target" => "#"], 18 => ["text" => "Dapibus sed mattis blandit", "target" => "#"], 19 => ["text" => "Vitae magna sed dolore", "target" => "#"]];
        // line 26
        echo "\t\t";
        $this->loadTemplate("partials/sections/links.html.twig", "partials/footer.html.twig", 26)->display(twig_array_merge($context, ["links" => ["heading" => "How about a truckload of links?", "list" => ($context["unrelated"] ?? null)], "columns" => 4, "per_column" => 5]));
        // line 27
        echo "\t</div>
\t<div class=\"4u 12u(mobile)\">
\t\t";
        // line 29
        $this->loadTemplate("partials/sections/teaser.html.twig", "partials/footer.html.twig", 29)->display($context);
        // line 30
        echo "\t</div>
</div>

<div class=\"row\">
\t<div class=\"12u\">
\t\t<div id=\"copyright\">
\t\t\t&copy; Untitled. All rights reserved. | Design: <a href=\"http://html5up.net\">HTML5 UP</a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 30,  44 => 29,  40 => 27,  37 => 26,  34 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<div class=\"8u 12u(mobile)\">
\t\t{# NOTE: developers could set and pull these values from site.yaml frontmatter if storing in template bothers you #}
\t\t{% set unrelated = [
\t\t\t{text: 'Sed neque nisi consequat', target: '#'},
\t\t\t{text: 'Dapibus sed mattis blandit', target: '#'},
\t\t\t{text: 'Quis accumsan lorem', target: '#'},
\t\t\t{text: 'Suspendisse varius ipsum', target: '#'},
\t\t\t{text: 'Eget et amet consequat', target: '#'},
\t\t\t{text: 'Quis accumsan lorem', target: '#'},
\t\t\t{text: 'Sed neque nisi consequat', target: '#'},
\t\t\t{text: 'Eget et amet consequat', target: '#'},
\t\t\t{text: 'Dapibus sed mattis blandit', target: '#'},
\t\t\t{text: 'Vitae magna sed dolore', target: '#'},
\t\t\t{text: 'Sed neque nisi consequat', target: '#'},
\t\t\t{text: 'Dapibus sed mattis blandit', target: '#'},
\t\t\t{text: 'Quis accumsan lorem', target: '#'},
\t\t\t{text: 'Suspendisse varius ipsum', target: '#'},
\t\t\t{text: 'Eget et amet consequat', target: '#'},
\t\t\t{text: 'Quis accumsan lorem', target: '#'},
\t\t\t{text: 'Sed neque nisi consequat', target: '#'},
\t\t\t{text: 'Eget et amet consequat', target: '#'},
\t\t\t{text: 'Dapibus sed mattis blandit', target: '#'},
\t\t\t{text: 'Vitae magna sed dolore', target: '#'},
\t\t\t] %}
\t\t{% include 'partials/sections/links.html.twig' with {links: { heading: 'How about a truckload of links?', list: unrelated }, columns: 4, per_column: 5} %}
\t</div>
\t<div class=\"4u 12u(mobile)\">
\t\t{% include 'partials/sections/teaser.html.twig' %}
\t</div>
</div>

<div class=\"row\">
\t<div class=\"12u\">
\t\t<div id=\"copyright\">
\t\t\t&copy; Untitled. All rights reserved. | Design: <a href=\"http://html5up.net\">HTML5 UP</a>
\t\t</div>
\t</div>
</div>
", "partials/footer.html.twig", "/var/www/html/grav/user/themes/minimaxing/templates/partials/footer.html.twig");
    }
}

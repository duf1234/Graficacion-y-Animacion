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
class __TwigTemplate_0e933c563ed7a838d581e7115b1db0ecbce4142238f563f08739935ed1839ca6 extends \Twig\Template
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
        echo "<!-- Footer -->
\t<footer id=\"footer\">
\t\t";
        // line 3
        $this->loadTemplate("partials/components/social_linkgroup.html.twig", "partials/footer.html.twig", 3)->display($context);
        // line 4
        echo "\t\t<ul class=\"copyright\">
\t\t\t<li>© ";
        // line 5
        echo twig_date_format_filter($this->env, "now", "Y");
        echo ", ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "author", []), "name", []);
        echo ". ";
        echo (($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", [], "any", false, true), "rights", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", [], "any", false, true), "rights", []), "All rights reserved.")) : ("All rights reserved."));
        echo "</li>
\t\t\t<li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
\t\t</ul>
\t</footer>
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
        return array (  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
\t<footer id=\"footer\">
\t\t{% include 'partials/components/social_linkgroup.html.twig' %}
\t\t<ul class=\"copyright\">
\t\t\t<li>© {{ 'now'|date('Y') }}, {{ config.site.author.name }}. {{ site.metadata.rights|default('All rights reserved.') }}</li>
\t\t\t<li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
\t\t</ul>
\t</footer>
", "partials/footer.html.twig", "/var/www/html/grav/user/themes/landed/templates/partials/footer.html.twig");
    }
}

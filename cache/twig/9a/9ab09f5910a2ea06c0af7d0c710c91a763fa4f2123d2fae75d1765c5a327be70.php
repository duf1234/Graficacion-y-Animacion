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
class __TwigTemplate_70ada98fcf59d89e314461e232fcf78e3db470374684381a0e525e84fb46d729 extends \Twig\Template
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
        echo "<ul class=\"post-header__breadcrumb\">
    <li><a href=\"";
        // line 2
        echo ($context["base_url"] ?? null);
        echo "\" title=\"blog homepage\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_MASONRY.HOME");
        echo "</a></li>
    <li>-</li>
    <li>";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</li>
</ul>
";
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
        return array (  40 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"post-header__breadcrumb\">
    <li><a href=\"{{base_url}}\" title=\"blog homepage\">{{ 'THEME_MASONRY.HOME'|t }}</a></li>
    <li>-</li>
    <li>{{page.title}}</li>
</ul>
", "partials/breadcrumbs.html.twig", "/var/www/html/grav/user/themes/masonry/templates/partials/breadcrumbs.html.twig");
    }
}

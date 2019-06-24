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

/* partials/ajax-page.html.twig */
class __TwigTemplate_65688f848184b148d98aac6bdd23ff03e6af0a89a42e42f7c35b8790bcb5b447 extends \Twig\Template
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
        echo "    <div id=\"page-ajax-loaded\" class=\"page-ajax-loaded animated fadeInLeft\" style=\"display: none;\"></div>
";
    }

    public function getTemplateName()
    {
        return "partials/ajax-page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("    <div id=\"page-ajax-loaded\" class=\"page-ajax-loaded animated fadeInLeft\" style=\"display: none;\"></div>
", "partials/ajax-page.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/ajax-page.html.twig");
    }
}

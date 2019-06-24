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

/* partials/preloader.html.twig */
class __TwigTemplate_bd82262b8c732ca238966540beccff45ebe0f0bda25253b89033b44c055199ab extends \Twig\Template
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
        echo "  <div class=\"preloader\">
    <div class=\"google-loader centered\"></div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "partials/preloader.html.twig";
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
        return new Source("  <div class=\"preloader\">
    <div class=\"google-loader centered\"></div>
  </div>
", "partials/preloader.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/preloader.html.twig");
    }
}

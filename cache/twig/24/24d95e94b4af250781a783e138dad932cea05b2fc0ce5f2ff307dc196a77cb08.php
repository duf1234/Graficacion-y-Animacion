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

/* partials/sidebar.html.twig */
class __TwigTemplate_5f747cf3788503101b40cd06b8441d142ffd94a4c0581e3bd99b80acd45c67be extends \Twig\Template
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
        echo "<div class=\"sidebar\">
  <div class=\"container sidebar-sticky\">
    <div class=\"sidebar-about\">
      <h1>
        <a href=\"";
        // line 5
        echo ($context["base_url"] ?? null);
        echo "\">
          ";
        // line 6
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "
        </a>
      </h1>
      <p class=\"lead\">";
        // line 9
        echo $this->getAttribute(($context["theme_config"] ?? null), "tagline", []);
        echo "</p>
    </div>

    <nav class=\"sidebar-nav\">
      ";
        // line 13
        $this->loadTemplate("partials/navigation.html.twig", "partials/sidebar.html.twig", 13)->display($context);
        // line 14
        echo "    </nav>

    <p>&copy; ";
        // line 16
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y");
        echo ". All rights reserved.</p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 16,  55 => 14,  53 => 13,  46 => 9,  40 => 6,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar\">
  <div class=\"container sidebar-sticky\">
    <div class=\"sidebar-about\">
      <h1>
        <a href=\"{{ base_url }}\">
          {{ site.title }}
        </a>
      </h1>
      <p class=\"lead\">{{ theme_config.tagline }}</p>
    </div>

    <nav class=\"sidebar-nav\">
      {% include 'partials/navigation.html.twig'%}
    </nav>

    <p>&copy; {{ page.date|date('Y') }}. All rights reserved.</p>
  </div>
</div>
", "partials/sidebar.html.twig", "/var/www/html/grav/user/themes/hyde/templates/partials/sidebar.html.twig");
    }
}

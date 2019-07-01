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

/* partials/header.html.twig */
class __TwigTemplate_2361d55d70cb749688c5c8813e336b74a0d83bb17a093c5857c0b4c1a1d558a7 extends \Twig\Template
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
        echo "<header class=\"main-header post-head ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", []), [], "array"), "url", []);
            echo ")";
        } else {
            echo "no-cover";
        }
        echo "\">
    <nav class=\"main-nav ";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image", [])) {
            echo "overlay";
        }
        echo " clearfix\">
        ";
        // line 3
        if ($this->getAttribute(($context["site"] ?? null), "logo", [])) {
            // line 4
            echo "            <a class=\"blog-logo\" href=\"";
            echo ($context["base_url"] ?? null);
            echo "\"><img src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["site"] ?? null), "logo", []);
            echo "\" alt=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "title", []);
            echo "\" /></a>
        ";
        }
        // line 6
        echo "        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_MASONRY.MENU_TITLE");
        echo "</span></a>
    </nav>
</header>
";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  49 => 4,  47 => 3,  41 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"main-header post-head {% if page.header.image %}\" style=\"background-image: url({{ page.media[page.header.image].url }}){% else %}no-cover{% endif %}\">
    <nav class=\"main-nav {% if page.header.image %}overlay{% endif %} clearfix\">
        {% if site.logo %}
            <a class=\"blog-logo\" href=\"{{base_url}}\"><img src=\"{{ theme_url }}/images/{{site.logo}}\" alt=\"{{ site.author.title}}\" /></a>
        {% endif %}
        <a class=\"menu-button icon-menu\" href=\"#\"><span class=\"word\">{{ 'THEME_MASONRY.MENU_TITLE'|t }}</span></a>
    </nav>
</header>
", "partials/header.html.twig", "/var/www/html/grav/user/themes/masonry/templates/partials/header.html.twig");
    }
}

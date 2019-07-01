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

/* partials/navigation.html.twig */
class __TwigTemplate_da564aec2b39ccdaf9b56d75af50333c3c26e373bd6f8f71c2fd49435d8e7fad extends \Twig\Template
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
        echo "<input type=\"checkbox\" id=\"show-menu\" class=\"show-menu\" />
<div class=\"nav\">
    <h3 class=\"nav-title\">";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_MASONRY.MENU_TITLE");
        echo "</h3>
    <a href=\"#\" class=\"nav-close\">
        <span class=\"hidden\">Close</span>
    </a>
    <ul>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "        ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 10
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("nav-current") : (""));
                // line 11
                echo "        <li class=\"nav-";
                echo $this->getAttribute($context["page"], "slug", []);
                echo " ";
                echo ($context["current_page"] ?? null);
                echo "\" role=\"presentation\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
        ";
            }
            // line 13
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
    <a class=\"subscribe-button icon-feed\" href=\"";
        // line 15
        echo ($context["base_url"] ?? null);
        echo "/blog.rss\">";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_MASONRY.BLOG.SUBSCRIBE");
        echo "</a>
</div>
<span class=\"nav-cover\"></span>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  70 => 14,  64 => 13,  52 => 11,  49 => 10,  46 => 9,  42 => 8,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<input type=\"checkbox\" id=\"show-menu\" class=\"show-menu\" />
<div class=\"nav\">
    <h3 class=\"nav-title\">{{ 'THEME_MASONRY.MENU_TITLE'|t }}</h3>
    <a href=\"#\" class=\"nav-close\">
        <span class=\"hidden\">Close</span>
    </a>
    <ul>
        {% for page in pages.children %}
        {% if page.visible %}
        {% set current_page = (page.active or page.activeChild) ? 'nav-current' : '' %}
        <li class=\"nav-{{page.slug}} {{ current_page }}\" role=\"presentation\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
        {% endif %}
        {% endfor %}
    </ul>
    <a class=\"subscribe-button icon-feed\" href=\"{{ base_url }}/blog.rss\">{{ 'THEME_MASONRY.BLOG.SUBSCRIBE'|t }}</a>
</div>
<span class=\"nav-cover\"></span>
", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/masonry/templates/partials/navigation.html.twig");
    }
}

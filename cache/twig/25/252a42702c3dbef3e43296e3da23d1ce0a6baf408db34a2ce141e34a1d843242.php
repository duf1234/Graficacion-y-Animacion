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
class __TwigTemplate_078c13e1d75fa55301436a6ca60f71e02bffbb5a3444703c3f878c3acbe9a137 extends \Twig\Template
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
        echo "
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("is-active") : (""));
            // line 6
            echo "
      <a class=\"navbar-item ";
            // line 7
            echo ($context["current_page"] ?? null);
            echo "\" href=\"";
            echo $this->getAttribute($context["page"], "url", []);
            echo "\">
        ";
            // line 8
            if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                // line 9
                echo "          <i class=\"fa fa-";
                echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                echo "\"></i>
        ";
            }
            // line 11
            echo "        ";
            echo $this->getAttribute($context["page"], "menu", []);
            echo "
      </a>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 17
            echo "
      <a class=\"navbar-item ";
            // line 18
            echo ($context["current_page"] ?? null);
            echo "\" href=\"";
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
        ";
            // line 19
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                // line 20
                echo "          <i data-feather=\"";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>
        ";
            }
            // line 22
            echo "        ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
      </a>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  92 => 22,  86 => 20,  84 => 19,  78 => 18,  75 => 17,  71 => 16,  68 => 15,  57 => 11,  51 => 9,  49 => 8,  43 => 7,  40 => 6,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
  {% for page in pages.children.visible %}
    {% set current_page = (page.active or page.activeChild)
      ? 'is-active'
      : '' %}

      <a class=\"navbar-item {{ current_page }}\" href=\"{{ page.url }}\">
        {% if page.header.icon %}
          <i class=\"fa fa-{{ page.header.icon }}\"></i>
        {% endif %}
        {{ page.menu }}
      </a>

  {% endfor %}

  {% for mitem in site.menu %}

      <a class=\"navbar-item {{ current_page }}\" href=\"{{ mitem.url }}\">
        {% if mitem.icon %}
          <i data-feather=\"{{ mitem.icon }}\"></i>
        {% endif %}
        {{ mitem.text }}
      </a>

  {% endfor %}
", "partials/navigation.html.twig", "/var/www/html/grav/user/themes/bulma-portfolio/templates/partials/navigation.html.twig");
    }
}

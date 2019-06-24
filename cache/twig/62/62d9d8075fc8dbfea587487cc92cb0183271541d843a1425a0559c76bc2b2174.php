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

/* partials/company-social.html.twig */
class __TwigTemplate_f14e441fb1897138fdff9ecd6f88a8759d4e37e3d38a8b596baf4f53ccd0b2dd extends \Twig\Template
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
        $context["social"] = $this->getAttribute(($context["theme_config"] ?? null), "social", []);
        // line 2
        echo "
<div class=\"company-social mbs\">  
  <p class=\"h3-like mbs prs\">  
  ";
        // line 5
        if ($this->getAttribute(($context["social"] ?? null), "title", [])) {
            // line 6
            echo "  
  ";
            // line 7
            echo $this->getAttribute(($context["social"] ?? null), "title", []);
            echo "
  
  ";
        } else {
            // line 10
            echo "  
  Social Links
  
  ";
        }
        // line 13
        echo "  
  </p> 
  ";
        // line 15
        if ($this->getAttribute(($context["social"] ?? null), "content", [])) {
            // line 16
            echo "  
  <p class=\"w90\">";
            // line 17
            echo $this->getAttribute(($context["social"] ?? null), "content", []);
            echo "</p>
  ";
        }
        // line 19
        echo "  
  ";
        // line 20
        if ($this->getAttribute(($context["social"] ?? null), "links", [])) {
            // line 21
            echo "  <ul class=\"social-link\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["social"] ?? null), "links", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                echo " ";
                if ($this->getAttribute($context["item"], "url", [])) {
                    // line 23
                    echo "    <li class=\"mbs\">
     ";
                    // line 24
                    if (($this->getAttribute($context["item"], "name", []) == "envelope")) {
                        // line 25
                        echo "     <a href=\"mailto:";
                        echo $this->getAttribute($context["item"], "url", []);
                        echo "\">
     ";
                    } else {
                        // line 27
                        echo "     <a href=\"";
                        echo $this->getAttribute($context["item"], "url", []);
                        echo "\">
     ";
                    }
                    // line 29
                    echo "      
        <i class=\"fa fa-";
                    // line 30
                    echo $this->getAttribute($context["item"], "name", []);
                    echo " fa-fw\"  title=\"";
                    echo $this->getAttribute($context["item"], "name", []);
                    echo "\"></i>
      </a>
    </li>
    ";
                }
                // line 33
                echo " 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </ul>
  ";
        }
        // line 37
        echo "  
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/company-social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  118 => 35,  111 => 33,  102 => 30,  99 => 29,  93 => 27,  87 => 25,  85 => 24,  82 => 23,  76 => 22,  73 => 21,  71 => 20,  68 => 19,  63 => 17,  60 => 16,  58 => 15,  54 => 13,  48 => 10,  42 => 7,  39 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set social = theme_config.social %}

<div class=\"company-social mbs\">  
  <p class=\"h3-like mbs prs\">  
  {% if social.title %}
  
  {{social.title}}
  
  {% else %}
  
  Social Links
  
  {% endif %}  
  </p> 
  {% if social.content %}
  
  <p class=\"w90\">{{social.content}}</p>
  {% endif %}
  
  {% if social.links %}
  <ul class=\"social-link\">
    {% for item in social.links %} {% if item.url %}
    <li class=\"mbs\">
     {% if item.name == 'envelope' %}
     <a href=\"mailto:{{item.url}}\">
     {% else %}
     <a href=\"{{item.url}}\">
     {% endif %}
      
        <i class=\"fa fa-{{item.name}} fa-fw\"  title=\"{{item.name}}\"></i>
      </a>
    </li>
    {% endif %} 
    {% endfor %}
  </ul>
  {% endif %}
  
</div>
", "partials/company-social.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/company-social.html.twig");
    }
}

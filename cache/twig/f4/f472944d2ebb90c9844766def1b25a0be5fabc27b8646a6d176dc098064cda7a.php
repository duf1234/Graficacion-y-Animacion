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

/* partials/company-infos.html.twig */
class __TwigTemplate_b3336e9ab5013d3400794bdac14ed0583324abec4a34fb7fae10bfa888a4ad0d extends \Twig\Template
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
        $context["infos"] = $this->getAttribute(($context["theme_config"] ?? null), "infos", []);
        // line 2
        echo "
<div class=\"company-infos mbm\">  
  <p class=\"h3-like mbs prs\">  
  ";
        // line 5
        if ($this->getAttribute(($context["infos"] ?? null), "title", [])) {
            // line 6
            echo "  
  ";
            // line 7
            echo $this->getAttribute(($context["infos"] ?? null), "title", []);
            echo "
  
  ";
        } else {
            // line 10
            echo "  
  Informations
  
  ";
        }
        // line 13
        echo "  
  </p> 
  ";
        // line 15
        if ($this->getAttribute(($context["infos"] ?? null), "content", [])) {
            // line 16
            echo "  
  <p class=\"w90\">";
            // line 17
            echo $this->getAttribute(($context["infos"] ?? null), "content", []);
            echo "</p>
  ";
        }
        // line 19
        echo "  
  ";
        // line 20
        if ($this->getAttribute(($context["infos"] ?? null), "page_dest", [])) {
            // line 21
            echo "  <ul class=\"social-link\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["infos"] ?? null), "page_dest", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 23
                echo "     
    <li>
      <a href=\"";
                // line 25
                echo ($context["base_url"] ?? null);
                echo $this->getAttribute($context["item"], "url", []);
                echo "\">
      ";
                // line 26
                if ($this->getAttribute($context["item"], "name", [])) {
                    // line 27
                    echo "         
        ";
                    // line 28
                    echo $this->getAttribute($context["item"], "name", []);
                    echo "
          
      ";
                } else {
                    // line 31
                    echo "         
        ";
                    // line 32
                    $context["title"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => $this->getAttribute($context["item"], "url", [])], "method"), "title", [], "method");
                    // line 33
                    echo "        ";
                    echo ($context["title"] ?? null);
                    echo "
          
      ";
                }
                // line 36
                echo "      </a>
    </li>
     
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "  </ul>
  ";
        }
        // line 42
        echo "  
</div>
";
    }

    public function getTemplateName()
    {
        return "partials/company-infos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 42,  121 => 40,  112 => 36,  105 => 33,  103 => 32,  100 => 31,  94 => 28,  91 => 27,  89 => 26,  84 => 25,  80 => 23,  76 => 22,  73 => 21,  71 => 20,  68 => 19,  63 => 17,  60 => 16,  58 => 15,  54 => 13,  48 => 10,  42 => 7,  39 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set infos = theme_config.infos %}

<div class=\"company-infos mbm\">  
  <p class=\"h3-like mbs prs\">  
  {% if infos.title %}
  
  {{infos.title}}
  
  {% else %}
  
  Informations
  
  {% endif %}  
  </p> 
  {% if infos.content %}
  
  <p class=\"w90\">{{infos.content}}</p>
  {% endif %}
  
  {% if infos.page_dest %}
  <ul class=\"social-link\">
    {% for item in infos.page_dest %}
     
    <li>
      <a href=\"{{base_url}}{{item.url}}\">
      {% if item.name %}
         
        {{item.name}}
          
      {% else %}
         
        {% set title = page.find(item.url).title() %}
        {{ title }}
          
      {% endif %}
      </a>
    </li>
     
    {% endfor %}
  </ul>
  {% endif %}
  
</div>
", "partials/company-infos.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/company-infos.html.twig");
    }
}

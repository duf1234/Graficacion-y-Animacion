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

/* partials/company-openday.html.twig */
class __TwigTemplate_f1ab5ffde38ca93d92bab04f5c85289a35ae2b59f344a090719ed49de0863852 extends \Twig\Template
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
        $context["open"] = $this->getAttribute(($context["theme_config"] ?? null), "openday", []);
        // line 2
        echo "
<div class=\"company-openday mbm\">
  <p class=\"h3-like mbs prs\">
  ";
        // line 5
        if ($this->getAttribute(($context["open"] ?? null), "title", [])) {
            // line 6
            echo "  
  ";
            // line 7
            echo $this->getAttribute(($context["open"] ?? null), "title", []);
            echo "
  
  ";
        } else {
            // line 10
            echo "  
  Working hours
  
  ";
        }
        // line 13
        echo "</p>
  ";
        // line 14
        if ($this->getAttribute(($context["open"] ?? null), "some_text", [])) {
            // line 15
            echo "  
  <div class=\"resume w90\">";
            // line 16
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["open"] ?? null), "some_text", []));
            echo "</div>
  
  ";
        }
        // line 19
        echo "  
  ";
        // line 20
        if ($this->getAttribute(($context["open"] ?? null), "resume", [])) {
            // line 21
            echo "  <table class=\"hours\">
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["open"] ?? null), "resume", []));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 23
                echo "    <tr>
      <td>";
                // line 24
                echo $context["key"];
                echo " </td>
      <td>";
                // line 25
                echo $context["value"];
                echo "</td>
    </tr>     
    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "  </table>
  ";
        }
        // line 31
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "partials/company-openday.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  97 => 29,  87 => 25,  83 => 24,  80 => 23,  76 => 22,  73 => 21,  71 => 20,  68 => 19,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  48 => 10,  42 => 7,  39 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set open = theme_config.openday %}

<div class=\"company-openday mbm\">
  <p class=\"h3-like mbs prs\">
  {% if open.title %}
  
  {{open.title}}
  
  {% else %}
  
  Working hours
  
  {% endif %}</p>
  {% if open.some_text %}
  
  <div class=\"resume w90\">{{open.some_text  | markdown}}</div>
  
  {% endif %}
  
  {% if open.resume %}
  <table class=\"hours\">
    {% for key, value in open.resume %}
    <tr>
      <td>{{key}} </td>
      <td>{{value}}</td>
    </tr>     
    
    {% endfor %}
  </table>
  {% endif %}
</div>", "partials/company-openday.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/company-openday.html.twig");
    }
}

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

/* partials/footer.html.twig */
class __TwigTemplate_4eaa053ac714fe68033fde2836a70006282c2d07ecb1eff39b1ec6b69826af41 extends \Twig\Template
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
        $context["count"] = 0;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "display", []));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 3
            if (($context["value"] == true)) {
                // line 4
                $context["count"] = (($context["count"] ?? null) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        if (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "display", []) || $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "infos", []), "display", []))) {
            // line 8
            $context["count"] = (($context["count"] ?? null) + 1);
        }
        // line 10
        echo "
 <div class=\"container\">
  <div class=\"grid-";
        // line 12
        echo ($context["count"] ?? null);
        echo "-mplus-2-tplus-1\">
  ";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "display", []), "about", [])) {
            echo "  
    ";
            // line 14
            $this->loadTemplate("partials/company-about.html.twig", "partials/footer.html.twig", 14)->display($context);
            // line 15
            echo "  ";
        }
        echo "  
  ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "display", []), "contact", [])) {
            echo "   
    ";
            // line 17
            $this->loadTemplate("partials/company-details.html.twig", "partials/footer.html.twig", 17)->display($context);
            // line 18
            echo "  ";
        }
        echo "   
  ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "display", []), "openday", [])) {
            echo " 
    ";
            // line 20
            $this->loadTemplate("partials/company-openday.html.twig", "partials/footer.html.twig", 20)->display($context);
            echo " 
  ";
        }
        // line 22
        echo "    
    <div>
    ";
        // line 24
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social", []), "display", [])) {
            // line 25
            echo "    ";
            $this->loadTemplate("partials/company-social.html.twig", "partials/footer.html.twig", 25)->display($context);
            // line 26
            echo "    ";
        }
        // line 27
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "infos", []), "display", [])) {
            echo "    
    ";
            // line 28
            $this->loadTemplate("partials/company-infos.html.twig", "partials/footer.html.twig", 28)->display($context);
            // line 29
            echo "    ";
        }
        // line 30
        echo "    </div> 
    
  </div>
  
  <div class=\"copyright small txtcenter\">
  <span>&#169; 2016 ";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "contact", []), "name", []);
        echo " | All Rights Reserved</span>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  111 => 30,  108 => 29,  106 => 28,  101 => 27,  98 => 26,  95 => 25,  93 => 24,  89 => 22,  84 => 20,  80 => 19,  75 => 18,  73 => 17,  69 => 16,  64 => 15,  62 => 14,  58 => 13,  54 => 12,  50 => 10,  47 => 8,  45 => 7,  38 => 4,  36 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set count = 0 %}
{% for key, value in theme_config.display %}
{% if value == true %}
{% set count = count + 1 %}
{% endif %}
{% endfor %}
{% if theme_config.social.display or theme_config.infos.display  %}
{% set count = count + 1 %}
{% endif %}

 <div class=\"container\">
  <div class=\"grid-{{ count  }}-mplus-2-tplus-1\">
  {% if theme_config.display.about %}  
    {% include 'partials/company-about.html.twig' %}
  {% endif %}  
  {% if theme_config.display.contact %}   
    {% include 'partials/company-details.html.twig' %}
  {% endif %}   
  {% if theme_config.display.openday %} 
    {% include 'partials/company-openday.html.twig' %} 
  {% endif %}
    
    <div>
    {% if theme_config.social.display%}
    {% include 'partials/company-social.html.twig' %}
    {% endif %}
    {% if theme_config.infos.display %}    
    {% include 'partials/company-infos.html.twig' %}
    {% endif %}
    </div> 
    
  </div>
  
  <div class=\"copyright small txtcenter\">
  <span>&#169; 2016 {{theme_config.contact.name}} | All Rights Reserved</span>
</div>
</div>

{# include 'partials/footer-script.html.twig' #}", "partials/footer.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/footer.html.twig");
    }
}

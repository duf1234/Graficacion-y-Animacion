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

/* partials/heading.html.twig */
class __TwigTemplate_14d97cb750d8242586fd854b03fdfef6d42a34edde4e6936e5c657d55b5e9a8f extends \Twig\Template
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
        $context["head"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "heading", []);
        // line 2
        echo "
";
        // line 3
        if ($this->getAttribute(($context["head"] ?? null), "display", [])) {
            // line 4
            echo "
<section id=\"heading\">
  <div class=\"heading-color ";
            // line 6
            echo ((($context["bgcol_theme"] ?? null)) ? ("") : ("heading-gray"));
            echo "\">
    <div class=\"container grid-2 pvl\">
      <div class=\"heading-content left ml0\">
        <h1 class=\"mb0\">
        ";
            // line 10
            if ($this->getAttribute(($context["head"] ?? null), "other_title", [])) {
                // line 11
                echo "        
         ";
                // line 12
                echo $this->getAttribute(($context["head"] ?? null), "other_title", []);
                echo "
         
         ";
            } else {
                // line 15
                echo "         
         ";
                // line 16
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
                echo "
         ";
            }
            // line 17
            echo "         
        </h1>        
      </div>
      ";
            // line 20
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", []) && $this->getAttribute(($context["head"] ?? null), "bread", []))) {
                // line 21
                echo "      <div class=\"breadcrumbs tiny-hidden txtright\">
        ";
                // line 22
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/heading.html.twig", 22)->display($context);
                // line 23
                echo "      </div>  
      ";
            }
            // line 25
            echo "          
      </div>    
  </div>  
</section>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/heading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  79 => 23,  77 => 22,  74 => 21,  72 => 20,  67 => 17,  62 => 16,  59 => 15,  53 => 12,  50 => 11,  48 => 10,  41 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set head = page.header.heading %}

{% if head.display %}

<section id=\"heading\">
  <div class=\"heading-color {{bgcol_theme? '':'heading-gray'}}\">
    <div class=\"container grid-2 pvl\">
      <div class=\"heading-content left ml0\">
        <h1 class=\"mb0\">
        {% if head.other_title %}
        
         {{head.other_title}}
         
         {% else %}
         
         {{page.header.title}}
         {% endif %}         
        </h1>        
      </div>
      {% if config.plugins.breadcrumbs.enabled and head.bread %}
      <div class=\"breadcrumbs tiny-hidden txtright\">
        {% include 'partials/breadcrumbs.html.twig' %}
      </div>  
      {% endif %}
          
      </div>    
  </div>  
</section>

{% endif %}
", "partials/heading.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/heading.html.twig");
    }
}

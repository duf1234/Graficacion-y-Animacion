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

/* partials/menu.html.twig */
class __TwigTemplate_2e6b89ebdf87fc69e789aa0ae75acf2f32d113e97ab1e70620a2d204c43f7eb9 extends \Twig\Template
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
        echo "<div id=\"menu-e\" class=\"menu\">

  <div class=\"container\">
   
    <button class=\"menu-toggle\">
      <i class=\"ion-android-menu\"></i>
    </button>
    
    <div class=\"menu-logo\">
      <a href=\"";
        // line 10
        echo ($context["base_url"] ?? null);
        echo "/\">
       ";
        // line 11
        if ($this->getAttribute(($context["theme_config"] ?? null), "logo", [])) {
            // line 12
            echo "        <img class=\"pts\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/";
            echo $this->getAttribute(($context["theme_config"] ?? null), "logo", []);
            echo "\" alt=\"logo\">
        ";
        } else {
            // line 14
            echo "        <span>";
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
            echo "</span>
        ";
        }
        // line 16
        echo "        </a>
    </div>
    
     <div class=\"nav\">     
      
      <nav class=\"nav-links\" role=\"navigation\">
        ";
        // line 22
        $this->loadTemplate("partials/navigation.html.twig", "partials/menu.html.twig", 22)->display($context);
        // line 23
        echo "      </nav>
      
    </div>

  <div id=\"shade\"></div>
</div>
</div> ";
    }

    public function getTemplateName()
    {
        return "partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  69 => 22,  61 => 16,  55 => 14,  47 => 12,  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"menu-e\" class=\"menu\">

  <div class=\"container\">
   
    <button class=\"menu-toggle\">
      <i class=\"ion-android-menu\"></i>
    </button>
    
    <div class=\"menu-logo\">
      <a href=\"{{base_url}}/\">
       {% if theme_config.logo %}
        <img class=\"pts\" src=\"{{ theme_url }}/images/{{theme_config.logo}}\" alt=\"logo\">
        {% else %}
        <span>{{site.title}}</span>
        {% endif %}
        </a>
    </div>
    
     <div class=\"nav\">     
      
      <nav class=\"nav-links\" role=\"navigation\">
        {% include 'partials/navigation.html.twig' %}
      </nav>
      
    </div>

  <div id=\"shade\"></div>
</div>
</div> ", "partials/menu.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/menu.html.twig");
    }
}

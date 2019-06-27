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

/* partials/base.html.twig */
class __TwigTemplate_92c9949ca840453ecf2a3ae2423d7497b2911f3ff24e29295b0647ef064d10a6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "

<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">

<head>

  ";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    
</head>

<body id=\"top\">

  <div id=\"ws\" class=\"wrap-site\">
   
  
    
  ";
        // line 30
        echo "       
    ";
        // line 31
        $this->loadTemplate("partials/menu.html.twig", "partials/base.html.twig", 31)->display($context);
        // line 32
        echo "  
  ";
        // line 34
        echo "   
  ";
        // line 36
        echo "    
    <main id=\"main\" role=\"main\">
     
      <div class=\"page-content ";
        // line 39
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
        ";
        // line 40
        if ( !$this->getAttribute(($context["page"] ?? null), "home", [], "method")) {
            // line 41
            echo "          ";
            $this->loadTemplate("partials/heading.html.twig", "partials/base.html.twig", 41)->display($context);
            // line 42
            echo "        ";
        }
        echo "         
        
        ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "        
      </div>

    </main>
    
  ";
        // line 51
        echo "    
        
  ";
        // line 54
        echo "    
    ";
        // line 55
        if (($this->getAttribute(($context["page"] ?? null), "template", []) == "error")) {
            // line 56
            echo "    
    ";
        } else {
            // line 58
            echo "    
    <footer id=\"footer\">
      ";
            // line 60
            $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 60)->display($context);
            // line 61
            echo "      ";
            $this->displayBlock('bottom', $context, $blocks);
            // line 64
            echo "    </footer>
    ";
        }
        // line 66
        echo "    
  ";
        // line 68
        echo "  </div>
  ";
        // line 69
        $this->loadTemplate("partials/theme-style.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "</body>

</html>";
    }

    // line 9
    public function block_head($context, array $blocks = [])
    {
        // line 10
        echo "  
  <meta charset=\"utf-8\" />
  <title>";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
  ";
        // line 13
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 13)->display($context);
        // line 14
        echo "  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
  <link rel=\"canonical\" href=\"";
        // line 16
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" /> 
  ";
        // line 17
        $this->loadTemplate("partials/head.html.twig", "partials/base.html.twig", 17)->display($context);
        echo " 
  
  ";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
        echo " ";
    }

    // line 61
    public function block_bottom($context, array $blocks = [])
    {
        // line 62
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 62,  181 => 61,  175 => 44,  168 => 17,  164 => 16,  160 => 15,  157 => 14,  155 => 13,  147 => 12,  143 => 10,  140 => 9,  134 => 70,  132 => 69,  129 => 68,  126 => 66,  122 => 64,  119 => 61,  117 => 60,  113 => 58,  109 => 56,  107 => 55,  104 => 54,  100 => 51,  93 => 45,  91 => 44,  85 => 42,  82 => 41,  80 => 40,  76 => 39,  71 => 36,  68 => 34,  65 => 32,  63 => 31,  60 => 30,  49 => 20,  47 => 9,  40 => 5,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}


<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">

<head>

  {% block head %}
  
  <meta charset=\"utf-8\" />
  <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
  {% include 'partials/metadata.html.twig' %}
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />
  <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" /> 
  {% include 'partials/head.html.twig' %} 
  
  {% endblock head%}
    
</head>

<body id=\"top\">

  <div id=\"ws\" class=\"wrap-site\">
   
  
    
  {# block nav #}
       
    {% include 'partials/menu.html.twig' %}
  
  {# endblock nav #}
   
  {# block main #}
    
    <main id=\"main\" role=\"main\">
     
      <div class=\"page-content {{page.header.body_classes}}\">
        {% if not page.home() %}
          {% include 'partials/heading.html.twig' %}
        {% endif %}         
        
        {% block content %} {% endblock %}
        
      </div>

    </main>
    
  {# endblock main #}
    
        
  {# block footer #}
    
    {% if page.template == 'error' %}
    
    {% else %}
    
    <footer id=\"footer\">
      {% include 'partials/footer.html.twig' %}
      {% block bottom %}
        {{ assets.js('bottom') }}
      {% endblock %}
    </footer>
    {% endif %}
    
  {# endblock footer #}
  </div>
  {% include 'partials/theme-style.html.twig' %}
</body>

</html>", "partials/base.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/base.html.twig");
    }
}

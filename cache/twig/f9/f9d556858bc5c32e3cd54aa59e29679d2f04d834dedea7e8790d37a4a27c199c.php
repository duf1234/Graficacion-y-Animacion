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

/* partials/company-details.html.twig */
class __TwigTemplate_2b674a4a66277ad6c642ff361c3e0cd529b7447c7ff786cb848923a1be4a8266 extends \Twig\Template
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
        $context["comp"] = $this->getAttribute(($context["theme_config"] ?? null), "contact", []);
        // line 2
        echo "<div class=\"company-details mbm\">
  <p class=\"h3-like mbs prs\">
  ";
        // line 4
        if ($this->getAttribute(($context["comp"] ?? null), "title_footer", [])) {
            // line 5
            echo "  ";
            echo $this->getAttribute(($context["comp"] ?? null), "title_footer", []);
            echo "
  ";
        } else {
            // line 6
            echo "  
  Contact details
  ";
        }
        // line 9
        echo "  </p>
  <div itemscope itemtype=\"http://schema.org/Organization\">
    ";
        // line 11
        if ($this->getAttribute(($context["comp"] ?? null), "name", [])) {
            // line 12
            echo "    <p class=\"name h4-like\" itemprop=\"name\">";
            echo $this->getAttribute(($context["comp"] ?? null), "name", []);
            echo "</p> ";
        }
        // line 13
        echo "
<address>
  <div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\" class=\"address\">
      ";
        // line 16
        if ($this->getAttribute(($context["comp"] ?? null), "adr", [])) {
            // line 17
            echo "      <span itemprop=\"streetAddress\">";
            echo $this->getAttribute(($context["comp"] ?? null), "adr", []);
            echo "</span> ";
        }
        echo " ";
        if ($this->getAttribute(($context["comp"] ?? null), "zip", [])) {
            // line 18
            echo "      <span class=\"inbl prs\" itemprop=\"postalCode\">";
            echo $this->getAttribute(($context["comp"] ?? null), "zip", []);
            echo "</span> ";
        }
        echo " ";
        if ($this->getAttribute(($context["comp"] ?? null), "city", [])) {
            // line 19
            echo "      <span class=\"inbl prs\" itemprop=\"addressLocality\">";
            echo $this->getAttribute(($context["comp"] ?? null), "city", []);
            echo "</span> ";
        }
        echo " ";
        if ($this->getAttribute(($context["comp"] ?? null), "state", [])) {
            // line 20
            echo "      <span class=\"inbl prs\" itemprop=\"addressRegion\">";
            echo $this->getAttribute(($context["comp"] ?? null), "state", []);
            echo "</span> ";
        }
        echo " ";
        if ($this->getAttribute(($context["comp"] ?? null), "country", [])) {
            // line 21
            echo "      <span class=\"inbl\" itemprop=\"addressCountry\">";
            echo $this->getAttribute(($context["comp"] ?? null), "country", []);
            echo "</span> ";
        }
        // line 22
        echo "
    </div>
</address>
    
    <ul class=\"datacom\">
      ";
        // line 27
        if ($this->getAttribute(($context["comp"] ?? null), "phone", [])) {
            // line 28
            echo "      <li itemprop=\"telephone\" class=\"prs\"><i class=\"fa fa-phone fa-fw\"></i>";
            echo $this->getAttribute(($context["comp"] ?? null), "phone", []);
            echo "</li> ";
        }
        echo " ";
        if ($this->getAttribute(($context["comp"] ?? null), "mob_phone", [])) {
            // line 29
            echo "      <li itemprop=\"telephone\" class=\"prs\"><i class=\"fa fa-tablet fa-fw\"></i>";
            echo $this->getAttribute(($context["comp"] ?? null), "mob_phone", []);
            echo "</li> ";
        }
        if ($this->getAttribute(($context["comp"] ?? null), "fax", [])) {
            // line 30
            echo "      <li itemprop=\"telephone\" class=\"prs\"><i class=\"fa fa-fax fa-fw\"></i>";
            echo $this->getAttribute(($context["comp"] ?? null), "fax", []);
            echo "</li> ";
        }
        echo " ";
        if ($this->getAttribute(($context["comp"] ?? null), "email", [])) {
            // line 31
            echo "      <li itemprop=\"email\"><i class=\"fa fa-envelope fa-fw\"></i>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->safeEmailFilter($this->getAttribute(($context["comp"] ?? null), "email", []));
            echo "</li> ";
        }
        // line 32
        echo "    </ul>


  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/company-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 32,  129 => 31,  122 => 30,  116 => 29,  109 => 28,  107 => 27,  100 => 22,  95 => 21,  88 => 20,  81 => 19,  74 => 18,  67 => 17,  65 => 16,  60 => 13,  55 => 12,  53 => 11,  49 => 9,  44 => 6,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set comp = theme_config.contact %}
<div class=\"company-details mbm\">
  <p class=\"h3-like mbs prs\">
  {% if comp.title_footer %}
  {{comp.title_footer}}
  {% else %}  
  Contact details
  {% endif %}
  </p>
  <div itemscope itemtype=\"http://schema.org/Organization\">
    {% if comp.name %}
    <p class=\"name h4-like\" itemprop=\"name\">{{comp.name}}</p> {% endif %}

<address>
  <div itemprop=\"address\" itemscope itemtype=\"http://schema.org/PostalAddress\" class=\"address\">
      {% if comp.adr %}
      <span itemprop=\"streetAddress\">{{comp.adr}}</span> {% endif %} {% if comp.zip %}
      <span class=\"inbl prs\" itemprop=\"postalCode\">{{comp.zip}}</span> {% endif %} {% if comp.city %}
      <span class=\"inbl prs\" itemprop=\"addressLocality\">{{comp.city}}</span> {% endif %} {% if comp.state %}
      <span class=\"inbl prs\" itemprop=\"addressRegion\">{{comp.state}}</span> {% endif %} {% if comp.country %}
      <span class=\"inbl\" itemprop=\"addressCountry\">{{comp.country}}</span> {% endif %}

    </div>
</address>
    
    <ul class=\"datacom\">
      {% if comp.phone %}
      <li itemprop=\"telephone\" class=\"prs\"><i class=\"fa fa-phone fa-fw\"></i>{{comp.phone}}</li> {% endif %} {% if comp.mob_phone %}
      <li itemprop=\"telephone\" class=\"prs\"><i class=\"fa fa-tablet fa-fw\"></i>{{comp.mob_phone}}</li> {% endif %}{% if comp.fax %}
      <li itemprop=\"telephone\" class=\"prs\"><i class=\"fa fa-fax fa-fw\"></i>{{comp.fax}}</li> {% endif %} {% if comp.email %}
      <li itemprop=\"email\"><i class=\"fa fa-envelope fa-fw\"></i>{{comp.email|safe_email}}</li> {% endif %}
    </ul>


  </div>
</div>", "partials/company-details.html.twig", "/var/www/html/grav/user/themes/gravi-k/templates/partials/company-details.html.twig");
    }
}

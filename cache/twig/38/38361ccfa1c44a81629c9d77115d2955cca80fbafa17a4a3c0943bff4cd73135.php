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

/* modular/footer.html.twig */
class __TwigTemplate_6dc725aaeffaf379a3d3f9f740776a62e1d9536ec78e0e062aef701ab638d4dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'social' => [$this, 'block_social'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"modular-row footer ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "class", []);
        echo "\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"";
        // line 5
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []);
        echo "</a></h3>
                ";
        // line 6
        $this->displayBlock('social', $context, $blocks);
        // line 9
        echo "
            </div>
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "description", [])) {
            // line 12
            echo "                <p>";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "description", []);
            echo "</p>
            ";
        }
        // line 14
        echo "        </div>
        <div class=\"footer-module\"><h4>";
        // line 15
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "contact_title", []);
        echo "</h4>
            <p>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "contact", []), "address", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                    <span>";
            echo $this->getAttribute($context["item"], "line", []);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </p>
            <p>";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "email", []);
        echo "</p>
            <p><strong>";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "contact", []), "gps", []);
        echo "</strong></p>
        </div>
        <div class=\"footer-module\"><h4>";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "links_title", []);
        echo "</h4>
         <ul class=\"quickmenu\">
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "quicklinks", []));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 27
            echo "                <li><i class=\"fa fa-chevron-right\"></i><a href=\"";
            if (twig_in_filter("base_url:", $this->getAttribute($context["module"], "url", []))) {
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["module"], "url", []), ["base_url:" => ""]);
            } else {
                echo $this->getAttribute($context["module"], "url", []);
            }
            echo "\">";
            echo $this->getAttribute($context["module"], "text", []);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
    </div>
    <div class=\"footer-module\">
        <h4>";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "newsletter_title", []);
        echo "</h4>
        <p>";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "newsletter_description", []);
        echo "</p>

        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('https://feedburner.google.com/fb/a/mailverify?uri=";
        // line 35
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "feedburner", []);
        echo "', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\" class=\"newsletter\">
        <input type=\"text\" name=\"email\" value=\"Email\" onclick=\"if(this.value=='Email')this.value='';\" onblur=\"if(this.value=='')this.value='Email';\"/>
        <input type=\"hidden\" value=\"karolorzel\" name=\"uri\"/>
        <input type=\"hidden\" name=\"loc\" value=\"en_US\"/>
        <input type=\"submit\" value=\"OK\" />
        </form>
    </div>
</div>
<hr>
<div class=\"footer-modules\">
    <div class=\"footer-copyright\">
        ";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "copyright", []);
        echo "
    </div>
    <div class=\"footer-menu\">
    <ul class=\"othermenu\">
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "othermenu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 51
            echo "       <li><a href=\"";
            echo $this->getAttribute($context["module"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["module"], "text", []);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    </ul>
    </div>
</div>
</div>";
    }

    // line 6
    public function block_social($context, array $blocks = [])
    {
        // line 7
        echo "                    ";
        $this->loadTemplate("partials/social.html.twig", "modular/footer.html.twig", 7)->display($context);
        // line 8
        echo "                ";
    }

    public function getTemplateName()
    {
        return "modular/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 8,  178 => 7,  175 => 6,  168 => 53,  157 => 51,  153 => 50,  146 => 46,  132 => 35,  127 => 33,  123 => 32,  118 => 29,  101 => 27,  97 => 26,  92 => 24,  87 => 22,  83 => 21,  80 => 20,  71 => 18,  67 => 17,  62 => 15,  59 => 14,  53 => 12,  51 => 11,  47 => 9,  45 => 6,  39 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modular-row footer {{ page.header.class}}\">
    <div class=\"footer-items\">
        <div class=\"footer-module large\">
            <div class=\"logo\">
                <h3><a href=\"{{ base_url == '' ? '/' : base_url }}\">{{ config.site.title }}</a></h3>
                {% block social %}
                    {% include 'partials/social.html.twig' %}
                {% endblock %}

            </div>
            {% if site.footer.description %}
                <p>{{ site.footer.description }}</p>
            {% endif %}
        </div>
        <div class=\"footer-module\"><h4>{{ site.footer.contact_title }}</h4>
            <p>
                {% for item in site.contact.address %}
                    <span>{{ item.line }}</span>
                {% endfor %}
            </p>
            <p>{{ site.author.email }}</p>
            <p><strong>{{ site.contact.gps }}</strong></p>
        </div>
        <div class=\"footer-module\"><h4>{{ site.footer.links_title }}</h4>
         <ul class=\"quickmenu\">
            {% for module in site.quicklinks %}
                <li><i class=\"fa fa-chevron-right\"></i><a href=\"{% if \"base_url:\" in module.url %}{{ base_url_absolute }}/{{ module.url|replace({\"base_url:\": \"\"}) }}{% else %}{{ module.url }}{% endif %}\">{{  module.text }}</a></li>
            {% endfor %}
        </ul>
    </div>
    <div class=\"footer-module\">
        <h4>{{ site.footer.newsletter_title }}</h4>
        <p>{{ site.footer.newsletter_description }}</p>

        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('https://feedburner.google.com/fb/a/mailverify?uri={{ site.footer.feedburner }}', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\" class=\"newsletter\">
        <input type=\"text\" name=\"email\" value=\"Email\" onclick=\"if(this.value=='Email')this.value='';\" onblur=\"if(this.value=='')this.value='Email';\"/>
        <input type=\"hidden\" value=\"karolorzel\" name=\"uri\"/>
        <input type=\"hidden\" name=\"loc\" value=\"en_US\"/>
        <input type=\"submit\" value=\"OK\" />
        </form>
    </div>
</div>
<hr>
<div class=\"footer-modules\">
    <div class=\"footer-copyright\">
        {{ site.author.copyright }}
    </div>
    <div class=\"footer-menu\">
    <ul class=\"othermenu\">
    {% for module in site.othermenu %}
       <li><a href=\"{{ module.url }}\">{{  module.text }}</a></li>
    {% endfor %}
    </ul>
    </div>
</div>
</div>", "modular/footer.html.twig", "/var/www/html/grav/user/themes/deliver/templates/modular/footer.html.twig");
    }
}

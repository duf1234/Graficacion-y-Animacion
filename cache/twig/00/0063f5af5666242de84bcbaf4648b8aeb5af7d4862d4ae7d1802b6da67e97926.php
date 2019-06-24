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

/* partials/contact.html.twig */
class __TwigTemplate_5cc1c902cda76500023aa66bc3942b8b186f3266c73d30791170d72919b3935d extends \Twig\Template
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
        echo "          <section class=\"pt-page pt-page-5\" data-id=\"contact\">
            <div class=\"section-title-block\">
";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "customtitle", [])) {
            // line 4
            echo "              <h2 class=\"section-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "customtitle", []);
            echo "</h2>
";
        } else {
            // line 6
            echo "              <h2 class=\"section-title\">Contact</h2>
";
        }
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "subtitle", [])) {
            // line 9
            echo "              <h5 class=\"section-description\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "subtitle", []);
            echo "</h5>
";
        }
        // line 11
        echo "            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-6 subpage-block\">
";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_title", [])) {
            // line 15
            echo "                <div class=\"block-title\">
                  <h3>";
            // line 16
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_title", []);
            echo "</h3>
                </div>
";
        }
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_subtitle", [])) {
            // line 20
            echo "                <p><strong>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_subtitle", []);
            echo "</strong></p>
";
        }
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "email", [])) {
            // line 23
            echo "                <div class=\"contact-info-block\">
                  <div class=\"ci-icon\">
                    <i class=\"fa fa-envelope-open\"></i>
                  </div>
                  <div class=\"ci-text\">
                    <h4>
                      <a class=\"uppercase\" href=\"mailto:";
            // line 29
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "email", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "email", []);
            echo "</a>
                    </h4>
                  </div>
                </div>
";
        }
        // line 34
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "phone", [])) {
            // line 35
            echo "                <div class=\"contact-info-block\">
                  <div class=\"ci-icon\">
                    <i class=\"fa fa-headset\"></i>
                  </div>
                  <div class=\"ci-text\">
                    <h4>
                      <a href=\"tel:";
            // line 41
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "phone", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "phone", []);
            echo "</a>
                    </h4>
                  </div>
                </div>
";
        }
        // line 46
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_address", [])) {
            // line 47
            echo "                <div class=\"contact-info-block\">
                  <div class=\"ci-icon\">
                    <i class=\"fa fa-map-marked-alt\"></i>
                  </div>
                  <div class=\"ci-text\">
                    <h4 class=\"uppercase\">";
            // line 52
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_address", []);
            echo "</h4>
                  </div>
                </div>
";
        }
        // line 56
        if ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_title", []) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_subtitle", [])) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "email", [])) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "phone", [])) || $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "info_address", []))) {
        } else {
            // line 58
            echo "                <div class=\"contact-info-block\">
                  <div class=\"ci-text\">
                    <h4 class=\"uppercase\">This section displays your contact info & a brief message once you update the associated fields in the admin area.</h4>
                  </div>
                </div>
";
        }
        // line 64
        echo "              </div>
              <div class=\"col-sm-6 col-md-6 subpage-block\">
";
        // line 66
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "form", []), "title", [])) {
            // line 67
            echo "                <div class=\"block-title\">
                  <h3>";
            // line 68
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "form", []), "title", []);
            echo "</h3>
                </div>
";
        }
        // line 71
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "form", []), "slug", [])) {
            // line 72
            $this->loadTemplate("forms/form.html.twig", "partials/contact.html.twig", 72)->display(twig_array_merge($context, ["form" => call_user_func_array($this->env->getFunction('forms')->getCallable(), [(("" . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "form", []), "slug", [])) . "")])]));
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 73
($context["header"] ?? null), "resume", []), "contact", []), "form", []), "html", [])) {
            // line 74
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "contact", []), "form", []), "html", []));
            echo "
";
        } else {
            // line 76
            echo "<h3>SETUP A GRAV FORM<br><strong>OR</strong><br>CUSTOM FORM HTML</h3>
<p><a href=\"https://learn.getgrav.org/forms/forms/example-form\" target=\"_blank\">GRAV FORM REFERENCE</a></p>
<p><a href=\"https://www.mautic.org/docs/en/forms/index.html\" target=\"_blank\">MAUTIC FORM REFERENCE</a></p>
";
        }
        // line 80
        echo "              </div>
            </div>
          </section>
";
    }

    public function getTemplateName()
    {
        return "partials/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 80,  171 => 76,  166 => 74,  164 => 73,  162 => 72,  160 => 71,  154 => 68,  151 => 67,  149 => 66,  145 => 64,  137 => 58,  134 => 56,  127 => 52,  120 => 47,  118 => 46,  108 => 41,  100 => 35,  98 => 34,  88 => 29,  80 => 23,  78 => 22,  72 => 20,  70 => 19,  64 => 16,  61 => 15,  59 => 14,  54 => 11,  48 => 9,  46 => 8,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("          <section class=\"pt-page pt-page-5\" data-id=\"contact\">
            <div class=\"section-title-block\">
{% if header.resume.contact.customtitle %}
              <h2 class=\"section-title\">{{header.resume.contact.customtitle}}</h2>
{% else %}
              <h2 class=\"section-title\">Contact</h2>
{% endif %}
{% if header.resume.contact.subtitle %}
              <h5 class=\"section-description\">{{header.resume.contact.subtitle}}</h5>
{% endif %}
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-6 subpage-block\">
{% if header.resume.contact.info_title %}
                <div class=\"block-title\">
                  <h3>{{header.resume.contact.info_title}}</h3>
                </div>
{% endif %}
{% if header.resume.contact.info_subtitle %}
                <p><strong>{{header.resume.contact.info_subtitle}}</strong></p>
{% endif %}
{% if header.resume.home.email %}
                <div class=\"contact-info-block\">
                  <div class=\"ci-icon\">
                    <i class=\"fa fa-envelope-open\"></i>
                  </div>
                  <div class=\"ci-text\">
                    <h4>
                      <a class=\"uppercase\" href=\"mailto:{{header.resume.home.email}}\">{{header.resume.home.email}}</a>
                    </h4>
                  </div>
                </div>
{% endif %}
{% if header.resume.home.phone %}
                <div class=\"contact-info-block\">
                  <div class=\"ci-icon\">
                    <i class=\"fa fa-headset\"></i>
                  </div>
                  <div class=\"ci-text\">
                    <h4>
                      <a href=\"tel:{{header.resume.home.phone}}\">{{header.resume.home.phone}}</a>
                    </h4>
                  </div>
                </div>
{% endif %}
{% if header.resume.contact.info_address %}
                <div class=\"contact-info-block\">
                  <div class=\"ci-icon\">
                    <i class=\"fa fa-map-marked-alt\"></i>
                  </div>
                  <div class=\"ci-text\">
                    <h4 class=\"uppercase\">{{header.resume.contact.info_address}}</h4>
                  </div>
                </div>
{% endif %}
{% if header.resume.contact.info_title or header.resume.contact.info_subtitle or header.resume.home.email or header.resume.home.phone or header.resume.contact.info_address  %}
{% else %}
                <div class=\"contact-info-block\">
                  <div class=\"ci-text\">
                    <h4 class=\"uppercase\">This section displays your contact info & a brief message once you update the associated fields in the admin area.</h4>
                  </div>
                </div>
{% endif %}
              </div>
              <div class=\"col-sm-6 col-md-6 subpage-block\">
{% if header.resume.contact.form.title %}
                <div class=\"block-title\">
                  <h3>{{header.resume.contact.form.title}}</h3>
                </div>
{% endif %}
{% if header.resume.contact.form.slug %}
{% include \"forms/form.html.twig\" with { form: forms(''~ header.resume.contact.form.slug ~'') } %}
{% elseif header.resume.contact.form.html %}
{{ header.resume.contact.form.html|markdown }}
{% else %}
<h3>SETUP A GRAV FORM<br><strong>OR</strong><br>CUSTOM FORM HTML</h3>
<p><a href=\"https://learn.getgrav.org/forms/forms/example-form\" target=\"_blank\">GRAV FORM REFERENCE</a></p>
<p><a href=\"https://www.mautic.org/docs/en/forms/index.html\" target=\"_blank\">MAUTIC FORM REFERENCE</a></p>
{% endif %}
              </div>
            </div>
          </section>
", "partials/contact.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/contact.html.twig");
    }
}

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
class __TwigTemplate_be8b8de932d6a0fccd50dd7d8655031783230ec3868e20ec803b0bb1a86e7dcc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 113
        echo "</head>
<body>
";
        // line 115
        $this->loadTemplate("partials/preloader.html.twig", "partials/base.html.twig", 115)->display($context);
        // line 116
        echo "  <div id=\"page\" class=\"page\">
  ";
        // line 117
        $this->displayBlock('header', $context, $blocks);
        // line 121
        echo "    <div id=\"main\" class=\"site-main\">
      <div class=\"pt-wrapper\">
        <div class=\"subpages\">
";
        // line 124
        $this->displayBlock('body', $context, $blocks);
        // line 131
        echo "        </div>
      </div>
    </div>
";
        // line 134
        $this->loadTemplate("partials/ajax-page.html.twig", "partials/base.html.twig", 134)->display($context);
        // line 135
        echo "  </div>
";
        // line 136
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "mautic_url", [])) {
            // line 137
            echo "<script>
  (function(w, d, t, u, n, a, m) {
    w['MauticTrackingObject'] = n;
    w[n] = w[n] || function() {
      (w[n].q = w[n].q || []).push(arguments)
      },
    a = d.createElement(t),
    m = d.getElementsByTagName(t)[0];
    a.async = 1;
    a.src = u;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '";
            // line 148
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "mautic_url", []);
            echo "/mtc.js', 'mt');
  mt('send', 'pageview');
</script>
";
            // line 151
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "mautic_focus_items", []))) {
                // line 152
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "mautic_focus_items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 153
                    echo "<script src=\"";
                    echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "mautic_url", []);
                    echo "/focus/";
                    echo $this->getAttribute($context["item"], "focus_id", []);
                    echo ".js\" async=\"async\"></script>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        // line 155
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "scripts", [])) {
            // line 156
            echo "<script>
";
            // line 157
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "scripts", []);
            echo "
</script>
";
        }
        // line 160
        echo "</body>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "<meta charset=\"utf-8\"/>
<title>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "<link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\"/>
<link rel=\"canonical\" href=\"";
        // line 12
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\"/>
";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 28
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "bgcolor", [])) {
            // line 29
            echo "<style>
  .block-title h3::after,
  .section-title,
  .site-main-menu li.active a::after,
  input[type=\"submit\"]:hover,
  input[type=\"submit\"]:focus,
  input[type=\"button\"]:focus,
  button:hover,
  button:focus,
  a.button:hover,
  a.button:focus,
  .skill-percentage,
  .dot1,
  .dot2,
  .testimonials.owl-carousel .owl-nav .owl-prev:hover,
  .testimonials.owl-carousel .owl-nav .owl-next:hover,
  .form-control + .form-control-border,
  ul.social-links li a:hover,
  .portfolio-filters li.active a,
  .portfolio-filters li.active a:hover {
    background-color: ";
            // line 49
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "bgcolor", []);
            echo "!important;
  }
  .ul.social-links li a:hover {
    color: ";
            // line 52
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "bgcolor", []);
            echo "!important;
  }
  .section-title::after {
    border-right: 10px solid";
            // line 55
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "bgcolor", []);
            echo "!important;
    filter: brightness(80%);
  }
  input[type=\"submit\"],
  input[type=\"button\"],
  button,
  a.button,
  .skill-container {
    border: 2px solid";
            // line 63
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "bgcolor", []);
            echo "!important;
  }
</style>
";
        }
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "secondarycolor", [])) {
            // line 68
            echo "<style>
  .event-date {
    background-color: ";
            // line 70
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "secondarycolor", []);
            echo "!important;
  }
  .event-date::after {
    border-right: 5px solid";
            // line 73
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "secondarycolor", []);
            echo "!important;
    filter: brightness(80%);
  }
</style>
";
        }
        // line 78
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "styles", [])) {
            // line 79
            echo "<style>
  ";
            // line 80
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "styles", []);
            echo "
</style>
";
        }
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "onesignal", [])) {
            // line 102
            echo "<link rel=\"manifest\" href=\"/manifest.json\" />
<script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async=\"\"></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: \"";
            // line 108
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "onesignal", []);
            echo "\",
    });
  });
</script>
";
        }
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 14
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.css", 1 => 97], "method");
        // line 15
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/normalize.css", 1 => 96], "method");
        // line 16
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/transition-animations.css", 1 => 95], "method");
        // line 17
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/owl.carousel.css", 1 => 94], "method");
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/magnific-popup.css", 1 => 93], "method");
        // line 19
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/animate.css", 1 => 92], "method");
        // line 20
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.css", 1 => 91], "method");
        // line 21
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/macbook-iframe.css", 1 => 91], "method");
        // line 22
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ImageComparison.css", 1 => 90], "method");
        // line 23
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/preloader.css", 1 => 89], "method");
        // line 24
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://use.fontawesome.com/releases/v5.1.1/css/all.css", 1 => 88], "method");
        // line 25
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/sweetalert2.css", 1 => 87], "method");
        // line 26
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 86], "method");
    }

    // line 83
    public function block_javascripts($context, array $blocks = [])
    {
        // line 84
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 85
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.js", 1 => 99], "method");
        // line 86
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js", 1 => ["priority" => 98, "group" => "bottom"]], "method");
        // line 87
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/page-transition.js", 1 => ["priority" => 97, "group" => "bottom"]], "method");
        // line 88
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/imagesloaded.pkgd.min.js", 1 => ["priority" => 96, "group" => "bottom"]], "method");
        // line 89
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/validator.js", 1 => ["priority" => 95, "group" => "bottom"]], "method");
        // line 90
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.shuffle.min.js", 1 => ["priority" => 94, "group" => "bottom"]], "method");
        // line 91
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/masonry.pkgd.min.js", 1 => ["priority" => 93, "group" => "bottom"]], "method");
        // line 92
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/owl.carousel.min.js", 1 => ["priority" => 92, "group" => "bottom"]], "method");
        // line 93
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.magnific-popup.min.js", 1 => ["priority" => 91, "group" => "bottom"]], "method");
        // line 94
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery.hoverdir.js", 1 => ["priority" => 90, "group" => "bottom"]], "method");
        // line 95
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/typer.js", 1 => ["priority" => 89, "group" => "bottom"]], "method");
        // line 96
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/okshadow.js", 1 => ["priority" => 88, "group" => "bottom"]], "method");
        // line 97
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/ImageComparison.js", 1 => ["priority" => 87, "group" => "bottom"]], "method");
        // line 98
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/sweetalert2.all.js", 1 => ["priority" => 86, "group" => "bottom"]], "method");
        // line 99
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["priority" => 84, "group" => "bottom"]], "method");
    }

    // line 117
    public function block_header($context, array $blocks = [])
    {
        // line 118
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 118)->display($context);
        // line 119
        $this->loadTemplate("partials/mobile-header.html.twig", "partials/base.html.twig", 119)->display($context);
    }

    // line 124
    public function block_body($context, array $blocks = [])
    {
        // line 125
        $this->loadTemplate("partials/home.html.twig", "partials/base.html.twig", 125)->display($context);
        // line 126
        $this->loadTemplate("partials/about.html.twig", "partials/base.html.twig", 126)->display($context);
        // line 127
        $this->loadTemplate("partials/resume.html.twig", "partials/base.html.twig", 127)->display($context);
        // line 128
        $this->loadTemplate("partials/portfolio.html.twig", "partials/base.html.twig", 128)->display($context);
        // line 129
        $this->loadTemplate("partials/contact.html.twig", "partials/base.html.twig", 129)->display($context);
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
        return array (  354 => 129,  352 => 128,  350 => 127,  348 => 126,  346 => 125,  343 => 124,  339 => 119,  337 => 118,  334 => 117,  330 => 99,  328 => 98,  326 => 97,  324 => 96,  322 => 95,  320 => 94,  318 => 93,  316 => 92,  314 => 91,  312 => 90,  310 => 89,  308 => 88,  306 => 87,  304 => 86,  302 => 85,  300 => 84,  297 => 83,  293 => 26,  291 => 25,  289 => 24,  287 => 23,  285 => 22,  283 => 21,  281 => 20,  279 => 19,  277 => 18,  275 => 17,  273 => 16,  271 => 15,  269 => 14,  266 => 13,  256 => 108,  248 => 102,  245 => 101,  243 => 83,  237 => 80,  234 => 79,  232 => 78,  224 => 73,  218 => 70,  214 => 68,  212 => 67,  205 => 63,  194 => 55,  188 => 52,  182 => 49,  160 => 29,  157 => 28,  155 => 13,  151 => 12,  146 => 11,  144 => 10,  138 => 7,  135 => 6,  132 => 5,  127 => 160,  121 => 157,  118 => 156,  116 => 155,  103 => 153,  99 => 152,  97 => 151,  91 => 148,  78 => 137,  75 => 136,  72 => 135,  70 => 134,  65 => 131,  63 => 124,  58 => 121,  56 => 117,  53 => 116,  51 => 115,  47 => 113,  45 => 5,  40 => 3,  37 => 2,  35 => 1,);
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
<meta charset=\"utf-8\"/>
<title>{{ site.title|e('html') }}</title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
{% include 'partials/metadata.html.twig' %}
<link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\"/>
<link rel=\"canonical\" href=\"{{ page.url(true, true) }}\"/>
{% block stylesheets %}
{% do assets.addCss('theme://css/bootstrap.css', 97) %}
{% do assets.addCss('theme://css/normalize.css', 96) %}
{% do assets.addCss('theme://css/transition-animations.css', 95) %}
{% do assets.addCss('theme://css/owl.carousel.css', 94) %}
{% do assets.addCss('theme://css/magnific-popup.css', 93) %}
{% do assets.addCss('theme://css/animate.css', 92) %}
{% do assets.addCss('theme://css/main.css', 91) %}
{% do assets.addCss('theme://css/macbook-iframe.css', 91) %}
{% do assets.addCss('theme://css/ImageComparison.css', 90) %}
{% do assets.addCss('theme://css/preloader.css', 89) %}
{% do assets.addCss('https://use.fontawesome.com/releases/v5.1.1/css/all.css', 88) %}
{% do assets.addCss('theme://css/sweetalert2.css', 87) %}
{% do assets.addCss('theme://css/custom.css', 86) %}
{% endblock %}
{{ assets.css() }}{% if header.resume.general.bgcolor %}
<style>
  .block-title h3::after,
  .section-title,
  .site-main-menu li.active a::after,
  input[type=\"submit\"]:hover,
  input[type=\"submit\"]:focus,
  input[type=\"button\"]:focus,
  button:hover,
  button:focus,
  a.button:hover,
  a.button:focus,
  .skill-percentage,
  .dot1,
  .dot2,
  .testimonials.owl-carousel .owl-nav .owl-prev:hover,
  .testimonials.owl-carousel .owl-nav .owl-next:hover,
  .form-control + .form-control-border,
  ul.social-links li a:hover,
  .portfolio-filters li.active a,
  .portfolio-filters li.active a:hover {
    background-color: {{header.resume.general.bgcolor}}!important;
  }
  .ul.social-links li a:hover {
    color: {{header.resume.general.bgcolor}}!important;
  }
  .section-title::after {
    border-right: 10px solid{{header.resume.general.bgcolor}}!important;
    filter: brightness(80%);
  }
  input[type=\"submit\"],
  input[type=\"button\"],
  button,
  a.button,
  .skill-container {
    border: 2px solid{{header.resume.general.bgcolor}}!important;
  }
</style>
{% endif %}
{% if header.resume.general.secondarycolor %}
<style>
  .event-date {
    background-color: {{header.resume.general.secondarycolor}}!important;
  }
  .event-date::after {
    border-right: 5px solid{{header.resume.general.secondarycolor}}!important;
    filter: brightness(80%);
  }
</style>
{% endif %}
{% if header.resume.general.styles %}
<style>
  {{ header.resume.general.styles }}
</style>
{% endif %}
{% block javascripts %}
{% do assets.addJs('jquery', 100) %}
{% do assets.addJs('theme://js/modernizr.custom.js', 99) %}
{% do assets.addJs('theme://js/bootstrap.min.js', {'priority': 98, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/page-transition.js', {'priority':97, 'group':'bottom'}) %}
{% do assets.addJs('theme://js/imagesloaded.pkgd.min.js', {'priority': 96, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/validator.js', {'priority': 95, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/jquery.shuffle.min.js', {'priority': 94, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/masonry.pkgd.min.js', {'priority': 93, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/owl.carousel.min.js', {'priority': 92, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/jquery.magnific-popup.min.js', {'priority':91, 'group':'bottom'}) %}
{% do assets.addJs('theme://js/jquery.hoverdir.js', {'priority': 90, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/typer.js', {'priority': 89, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/okshadow.js', {'priority': 88, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/ImageComparison.js', {'priority': 87, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/sweetalert2.all.js', {'priority': 86, 'group': 'bottom'}) %}
{% do assets.addJs('theme://js/main.js', {'priority': 84, 'group': 'bottom'}) %}
{% endblock %}
{{ assets.js() }}{% if header.resume.general.onesignal %}
<link rel=\"manifest\" href=\"/manifest.json\" />
<script src=\"https://cdn.onesignal.com/sdks/OneSignalSDK.js\" async=\"\"></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: \"{{header.resume.general.onesignal}}\",
    });
  });
</script>
{% endif %}{% endblock head %}
</head>
<body>
{% include 'partials/preloader.html.twig' %}
  <div id=\"page\" class=\"page\">
  {% block header %}
{% include 'partials/header.html.twig' %}
{% include 'partials/mobile-header.html.twig' %}
{% endblock %}
    <div id=\"main\" class=\"site-main\">
      <div class=\"pt-wrapper\">
        <div class=\"subpages\">
{% block body %}
{% include 'partials/home.html.twig' %}
{% include 'partials/about.html.twig' %}
{% include 'partials/resume.html.twig' %}
{% include 'partials/portfolio.html.twig' %}
{% include 'partials/contact.html.twig' %}
{% endblock %}
        </div>
      </div>
    </div>
{% include 'partials/ajax-page.html.twig' %}
  </div>
{{ assets.js('bottom') }}{% if header.resume.general.mautic_url %}
<script>
  (function(w, d, t, u, n, a, m) {
    w['MauticTrackingObject'] = n;
    w[n] = w[n] || function() {
      (w[n].q = w[n].q || []).push(arguments)
      },
    a = d.createElement(t),
    m = d.getElementsByTagName(t)[0];
    a.async = 1;
    a.src = u;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '{{header.resume.general.mautic_url}}/mtc.js', 'mt');
  mt('send', 'pageview');
</script>
{% if header.resume.general.mautic_focus_items | length %}
{% for item in header.resume.general.mautic_focus_items %}
<script src=\"{{header.resume.general.mautic_url}}/focus/{{item.focus_id}}.js\" async=\"async\"></script>
{% endfor %}{% endif %}{% endif %}
{% if header.resume.general.scripts %}
<script>
{{header.resume.general.scripts}}
</script>
{% endif %}
</body>
", "partials/base.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/base.html.twig");
    }
}

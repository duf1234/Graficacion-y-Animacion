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

/* partials/home.html.twig */
class __TwigTemplate_c9301e6f8736ab74556cdd3a14aab6cb222ffcb5fbd1a826e24b2c528946ecc4 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "bg_img", [])) {
            $context["bg"] = twig_last($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "bg_img", []));
            // line 2
            echo "          <section class=\"pt-page pt-page-1 section-with-bg section-paddings-0 pt-page-current\" style=\"background-image:url('";
            echo $this->getAttribute(($context["bg"] ?? null), "name", []);
            echo "')\" data-id=\"home\">
";
        } else {
            // line 4
            echo "          <section class=\"pt-page pt-page-1 section-with-bg section-paddings-0 pt-page-current\" style=\"background-image:url('";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/anon-suit.jpg");
            echo "') ;\" data-id=\"home\">
";
        }
        // line 6
        echo "            <div class=\"home-page-block-bg\">
              <div class=\"mask\"></div>
            </div>
            <div class=\"home-page-block\">
";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "github", [])) {
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "github_link", [])) {
                // line 11
                echo "              <a href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "github_link", []);
                echo "\" target=\"_blank\" class=\"github-corner\">
";
            } elseif ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 12
($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "github", [])) {
                // line 13
                echo "              <a href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "sidebar", []), "social", []), "github", []);
                echo "\" target=\"_blank\" class=\"github-corner\">
";
            } else {
                // line 15
                echo "              <a href=\"#\" class=\"github-corner\" onclick=\"javascript:event.preventDefault();alert('Link to your github!');\">
";
            }
            // line 17
            echo "                <svg width=\"80\" height=\"80\" viewbox=\"0 0 250 250\" style=\"fill:#eee; color:#353a43; position: absolute; top: 0; border: 0; right: 0;\">
                  <path d=\"M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z\"></path>
                  <path
                    d=\"M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2\"
                    fill=\"currentColor\"
                    style=\"transform-origin: 130px 106px;\"
                    class=\"octo-arm\"></path>
                  <path
                    d=\"M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z\"
                    fill=\"currentColor\"
                    class=\"octo-body\"></path>
                </svg>
";
            // line 29
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "github_text", [])) {
                // line 30
                echo "                <p>";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "general", []), "github_text", []);
                echo "</p>
";
            }
            // line 32
            echo "              </a>
";
        }
        // line 34
        echo "              <div class=\"v-align\">
";
        // line 35
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "fullname", [])) {
            // line 36
            echo "                <h2 id=\"home-header\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "fullname", []);
            echo "</h2>
";
        } else {
            // line 38
            echo "                <h2 id=\"home-header\">Update Your Info</h2>
";
        }
        // line 39
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "typedtitles", [])) {
            // line 40
            echo "                <div>
                  <div>
                    <p class=\"home-page-description\">
                      <span class=\"typer\" id=\"typer_main\" data-words=\"";
            // line 43
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "typedtitles", []);
            echo "\" data-colors=\"white\" data-delay=\"50\" data-deletedelay=\"2000\"></span>
                      <span class=\"cursor\" data-owner=\"typer_main\"></span>
                    </p>
                  </div>
                </div>
";
        } else {
            // line 49
            echo "                <div>
                  <div>
                    <h1 class=\"home-page-description\">&nbsp;</h1>
                  </div>
                </div>
";
        }
        // line 55
        echo "                <div class=\"block end\" style=\"text-align: center\">
                  <ul class=\"info-list\">
";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "email", [])) {
            // line 58
            echo "                    <li>
                      <span class=\"title\">E-MAIL</span>
                      <span class=\"value\">
                        <a href=\"mailto:";
            // line 61
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "email", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "email", []);
            echo "</a>
                      </span>
                    </li>
";
        }
        // line 64
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "phone", [])) {
            // line 65
            echo "                    <li>
                      <span class=\"title\">PHONE</span>
                      <span class=\"value\">
                        <a href=\"tel:";
            // line 68
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "phone", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "home", []), "phone", []);
            echo "</a>
                      </span>
                    </li>
";
        }
        // line 72
        echo "                  </ul>
                </div>
              </div>
            </div>
          </section>
";
    }

    public function getTemplateName()
    {
        return "partials/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 72,  163 => 68,  158 => 65,  156 => 64,  147 => 61,  142 => 58,  140 => 57,  136 => 55,  128 => 49,  119 => 43,  114 => 40,  112 => 39,  108 => 38,  102 => 36,  100 => 35,  97 => 34,  93 => 32,  87 => 30,  85 => 29,  71 => 17,  67 => 15,  61 => 13,  59 => 12,  54 => 11,  51 => 10,  45 => 6,  39 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if header.resume.home.bg_img %}{% set bg = header.resume.home.bg_img|last %}
          <section class=\"pt-page pt-page-1 section-with-bg section-paddings-0 pt-page-current\" style=\"background-image:url('{{ bg.name }}')\" data-id=\"home\">
{% else %}
          <section class=\"pt-page pt-page-1 section-with-bg section-paddings-0 pt-page-current\" style=\"background-image:url('{{url('theme://images/anon-suit.jpg') }}') ;\" data-id=\"home\">
{% endif %}
            <div class=\"home-page-block-bg\">
              <div class=\"mask\"></div>
            </div>
            <div class=\"home-page-block\">
{% if header.resume.general.github %}{% if header.resume.general.github_link %}
              <a href=\"{{header.resume.general.github_link}}\" target=\"_blank\" class=\"github-corner\">
{% elseif header.resume.sidebar.social.github %}
              <a href=\"{{header.resume.sidebar.social.github}}\" target=\"_blank\" class=\"github-corner\">
{% else %}
              <a href=\"#\" class=\"github-corner\" onclick=\"javascript:event.preventDefault();alert('Link to your github!');\">
{% endif %}
                <svg width=\"80\" height=\"80\" viewbox=\"0 0 250 250\" style=\"fill:#eee; color:#353a43; position: absolute; top: 0; border: 0; right: 0;\">
                  <path d=\"M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z\"></path>
                  <path
                    d=\"M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2\"
                    fill=\"currentColor\"
                    style=\"transform-origin: 130px 106px;\"
                    class=\"octo-arm\"></path>
                  <path
                    d=\"M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z\"
                    fill=\"currentColor\"
                    class=\"octo-body\"></path>
                </svg>
{% if header.resume.general.github_text %}
                <p>{{header.resume.general.github_text}}</p>
{% endif %}
              </a>
{% endif %}
              <div class=\"v-align\">
{% if header.resume.home.fullname %}
                <h2 id=\"home-header\">{{header.resume.home.fullname}}</h2>
{% else %}
                <h2 id=\"home-header\">Update Your Info</h2>
{% endif %}{% if header.resume.home.typedtitles %}
                <div>
                  <div>
                    <p class=\"home-page-description\">
                      <span class=\"typer\" id=\"typer_main\" data-words=\"{{ header.resume.home.typedtitles }}\" data-colors=\"white\" data-delay=\"50\" data-deletedelay=\"2000\"></span>
                      <span class=\"cursor\" data-owner=\"typer_main\"></span>
                    </p>
                  </div>
                </div>
{% else %}
                <div>
                  <div>
                    <h1 class=\"home-page-description\">&nbsp;</h1>
                  </div>
                </div>
{% endif %}
                <div class=\"block end\" style=\"text-align: center\">
                  <ul class=\"info-list\">
{% if header.resume.home.email %}
                    <li>
                      <span class=\"title\">E-MAIL</span>
                      <span class=\"value\">
                        <a href=\"mailto:{{ header.resume.home.email }}\">{{ header.resume.home.email }}</a>
                      </span>
                    </li>
{% endif %}{% if header.resume.home.phone %}
                    <li>
                      <span class=\"title\">PHONE</span>
                      <span class=\"value\">
                        <a href=\"tel:{{ header.resume.home.phone }}\">{{ header.resume.home.phone }}</a>
                      </span>
                    </li>
{% endif %}
                  </ul>
                </div>
              </div>
            </div>
          </section>
", "partials/home.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/home.html.twig");
    }
}

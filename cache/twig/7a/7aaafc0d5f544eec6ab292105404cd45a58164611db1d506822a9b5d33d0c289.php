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

/* default.html.twig */
class __TwigTemplate_38be78ab723df34ac4f2deb8218ff8e2c54d813c536c29ce571e8e2b9af6a919 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'head_meta' => [$this, 'block_head_meta'],
            'head_title' => [$this, 'block_head_title'],
            'head_css' => [$this, 'block_head_css'],
            'head_css_extra' => [$this, 'block_head_css_extra'],
            'head_js' => [$this, 'block_head_js'],
            'body' => [$this, 'block_body'],
            'body_header' => [$this, 'block_body_header'],
            'body_logo' => [$this, 'block_body_logo'],
            'body_pre_content' => [$this, 'block_body_pre_content'],
            'body_content' => [$this, 'block_body_content'],
            'body_footer' => [$this, 'block_body_footer'],
            'body_js' => [$this, 'block_body_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "  </head>

  ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "    ";
        $this->displayBlock('body_header', $context, $blocks);
        // line 110
        echo "
    ";
        // line 111
        $this->displayBlock('body_pre_content', $context, $blocks);
        // line 112
        echo "
    ";
        // line 113
        $this->displayBlock('body_content', $context, $blocks);
        // line 122
        echo "
    ";
        // line 123
        $this->displayBlock('body_footer', $context, $blocks);
        // line 158
        echo "
    ";
        // line 159
        $this->displayBlock('body_js', $context, $blocks);
        // line 179
        echo "  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "      ";
        $this->displayBlock('head_meta', $context, $blocks);
        // line 16
        echo "
      ";
        // line 17
        $this->displayBlock('head_title', $context, $blocks);
        // line 20
        echo "
      <link rel=\"canonical\" href=\"";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo ($context["theme_url"] ?? null);
        echo "/assets/images/favicon.ico\" />

      ";
        // line 24
        $this->displayBlock('head_css', $context, $blocks);
        // line 33
        echo "
      ";
        // line 34
        $this->displayBlock('head_css_extra', $context, $blocks);
        // line 35
        echo "
      ";
        // line 36
        $this->displayBlock('head_js', $context, $blocks);
        // line 44
        echo "    ";
    }

    // line 5
    public function block_head_meta($context, array $blocks = [])
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 10
            echo "          <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", [])) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
        echo "\" />
      ";
    }

    // line 17
    public function block_head_title($context, array $blocks = [])
    {
        // line 18
        echo "        <title>";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []) && (($this->getAttribute(($context["page"] ?? null), "url", []) != ($context["base_url"] ?? null)) || ("error" == $this->getAttribute(($context["page"] ?? null), "template", []))))) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
      ";
    }

    // line 24
    public function block_head_css($context, array $blocks = [])
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/bootstrap.css"], "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/style.css"], "method");
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/chocolat.css"], "method");
        // line 28
        echo "
        ";
        // line 29
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700"], "method");
        // line 30
        echo "
        ";
        // line 31
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
      ";
    }

    // line 34
    public function block_head_css_extra($context, array $blocks = [])
    {
    }

    // line 36
    public function block_head_js($context, array $blocks = [])
    {
        // line 37
        echo "        ";
        // line 38
        echo "        ";
        // line 39
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 40
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"], "method");
            // line 41
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"], "method");
            // line 42
            echo "        ";
        }
        // line 43
        echo "      ";
    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        echo "<body>";
    }

    // line 48
    public function block_body_header($context, array $blocks = [])
    {
        // line 49
        echo "      <div class=\"header\">
        <div class=\"header-top\">
          <div class=\"container\">
            <div class=\"top-nav\">
              <span class=\"menu\"> </span>
              <ul>
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 56
            echo "                  ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 57
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 58
                echo "                    <li><a class=\"scroll ";
                echo ($context["current_page"] ?? null);
                echo "\" href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\"><span data-hover=\"";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</span></a>";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    echo "<label> </label>";
                }
                echo "</li>
                  ";
            }
            // line 60
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </ul>
            </div>

            <div class=\"search-box\">
              <div id=\"sb-search\" class=\"sb-search\">
                <form>
                  <input class=\"sb-search-input\" placeholder=\"Enter your search term...\" type=\"search\" name=\"search\" id=\"search\">
                  <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                  <span class=\"sb-icon-search\"> </span>
                </form>
              </div>
            </div>

            <div class=\"clearfix\"> </div>
          </div>
        </div>

        <div class=\"header-bottom\">
          <div class=\"container\">
            <div class=\"logo\">
              ";
        // line 81
        $this->displayBlock('body_logo', $context, $blocks);
        // line 84
        echo "            </div>

            <div class=\"top-tele\">
              <div class=\"in-phone\"><i class=\"phone\"> </i>
                <div class=\"number\">
                  <p>Phone:</p>
                  <span>";
        // line 90
        echo $this->getAttribute(($context["theme_config"] ?? null), "phone_number", []);
        echo "</span>
                </div>
                <div class=\"clearfix\"> </div>
              </div>

              <div class=\"in-phone-in\"><i class=\"phone new-phone\"> </i>
                <div class=\"number\">
                  <p>Location:</p>
                  ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "location", []));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 99
            echo "                    <span>";
            echo $context["line"];
            echo "</span>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </div>
                <div class=\"clearfix\"> </div>
              </div>
            </div>
            <div class=\"clearfix\"> </div>
          </div>
        </div>
      </div>
    ";
    }

    // line 81
    public function block_body_logo($context, array $blocks = [])
    {
        // line 82
        echo "                <a href=\"";
        echo ($context["base_url"] ?? null);
        echo "\"><img src=\"";
        echo (($this->getAttribute(($context["theme_config"] ?? null), "logo_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["theme_config"] ?? null), "logo_url", []), (($context["theme_url"] ?? null) . "/assets/images/logo.png"))) : ((($context["theme_url"] ?? null) . "/assets/images/logo.png")));
        echo "\" alt=\" \" /></a>
              ";
    }

    // line 111
    public function block_body_pre_content($context, array $blocks = [])
    {
    }

    // line 113
    public function block_body_content($context, array $blocks = [])
    {
        // line 114
        echo "      <div class=\"content\">
        <div class=\"single\">
          <div class=\"container\">
            ";
        // line 117
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
          </div>
        </div>
      </div>
    ";
    }

    // line 123
    public function block_body_footer($context, array $blocks = [])
    {
        // line 124
        echo "      <div class=\"footer\">
        <div class=\"container\">
          <div class=\"footer-top\">
            ";
        // line 127
        if ($this->getAttribute(($context["theme_config"] ?? null), "newsletter", [])) {
            // line 128
            echo "              <div class=\"col-md-3 footer-in\">
                <h5>Newsletter</h5>
              </div>

              <div class=\"col-md-6 mail\">
                <input type=\"text\" value=\"ENTER EMAIL\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value ='ENTER EMAIL';}\">
              </div>

              <div class=\"col-md-3 send\">
                <input type=\"submit\" value=\"SUBSCRIBE\" >
              </div>
              <div class=\"clearfix\"> </div>
            ";
        }
        // line 141
        echo "          </div>

          <div class=\"foter-bottom\">
            ";
        // line 144
        if ($this->getAttribute(($context["theme_config"] ?? null), "social_links", [])) {
            // line 145
            echo "              <ul class=\"social-ic-icons\">
                ";
            // line 146
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "facebook", [])) {
                echo "<li class=\"facebook\"><a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "facebook", []);
                echo "\"><span> </span></a></li>";
            }
            // line 147
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "twitter", [])) {
                echo "<li class=\"twitter\"><a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "twitter", []);
                echo "\"><span> </span></a></li>";
            }
            // line 148
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "gplus", [])) {
                echo "<li class=\"gmail\"><a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "gplus", []);
                echo "\"><span> </span></a></li>";
            }
            // line 149
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "pinterest", [])) {
                echo "<li class=\"print\"><a href=\"";
                echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "social_links", []), "pinterest", []);
                echo "\"><span> </span></a></li>";
            }
            // line 150
            echo "              </ul>
            ";
        }
        // line 152
        echo "
            <p class=\"footer-grid\">Copyright &copy; ";
        // line 153
        echo twig_date_format_filter($this->env, "NOW", "Y");
        echo " @ ";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo " | Design: <a href=\"http://w3layouts.com/\">W3layouts</a> | Grav Theme: <a href=\"https://nunopress.com\">NunoPress LLC</a></p>
          </div>
        </div>
      </div>
    ";
    }

    // line 159
    public function block_body_js($context, array $blocks = [])
    {
        // line 160
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.min.js", 1 => 104], "method");
        // line 161
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.chocolat.js", 1 => 103], "method");
        // line 162
        echo "
      ";
        // line 163
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/classie.js", 1 => 102], "method");
        // line 164
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/uisearch.js", 1 => 101], "method");
        // line 165
        echo "
      ";
        // line 166
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

      <script>
        \$(\"span.menu\").click(function(){
          \$(\".top-nav ul\").slideToggle(500, function(){
          });
        });

        new UISearch( document.getElementById( 'sb-search' ) );

        \$('#example1 a').Chocolat();
      </script>
    ";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  519 => 166,  516 => 165,  513 => 164,  511 => 163,  508 => 162,  505 => 161,  502 => 160,  499 => 159,  488 => 153,  485 => 152,  481 => 150,  474 => 149,  467 => 148,  460 => 147,  454 => 146,  451 => 145,  449 => 144,  444 => 141,  429 => 128,  427 => 127,  422 => 124,  419 => 123,  410 => 117,  405 => 114,  402 => 113,  397 => 111,  388 => 82,  385 => 81,  373 => 101,  364 => 99,  360 => 98,  349 => 90,  341 => 84,  339 => 81,  317 => 61,  303 => 60,  287 => 58,  284 => 57,  281 => 56,  264 => 55,  256 => 49,  253 => 48,  247 => 47,  243 => 43,  240 => 42,  237 => 41,  234 => 40,  231 => 39,  229 => 38,  227 => 37,  224 => 36,  219 => 34,  213 => 31,  210 => 30,  208 => 29,  205 => 28,  202 => 27,  199 => 26,  196 => 25,  193 => 24,  182 => 18,  179 => 17,  173 => 14,  169 => 12,  136 => 10,  132 => 9,  127 => 6,  124 => 5,  120 => 44,  118 => 36,  115 => 35,  113 => 34,  110 => 33,  108 => 24,  103 => 22,  99 => 21,  96 => 20,  94 => 17,  91 => 16,  88 => 5,  85 => 4,  79 => 179,  77 => 159,  74 => 158,  72 => 123,  69 => 122,  67 => 113,  64 => 112,  62 => 111,  59 => 110,  56 => 48,  54 => 47,  50 => 45,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    {% block head %}
      {% block head_meta %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        {% for meta in page.metadata %}
          <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
        {% endfor %}

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"{{ site.metadata.description }}\" />
      {% endblock %}

      {% block head_title %}
        <title>{% if page.header.title and (page.url != base_url or 'error' == page.template) %}{{ page.header.title }} | {% endif %}{{ site.title }}</title>
      {% endblock %}

      <link rel=\"canonical\" href=\"{{ page.url(true) }}\" />
      <link rel=\"shortcut icon\" href=\"{{ theme_url }}/assets/images/favicon.ico\" />

      {% block head_css %}
        {% do assets.add('theme://assets/css/bootstrap.css') %}
        {% do assets.add('theme://assets/css/style.css') %}
        {% do assets.add('theme://assets/css/chocolat.css') %}

        {% do assets.addCss('http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700') %}

        {{ assets.css() }}
      {% endblock %}

      {% block head_css_extra %}{% endblock %}

      {% block head_js %}
        {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries #}
        {# WARNING: Respond.js doesn't work if you view the page via file:// #}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
          {% do assets.add('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}
          {% do assets.add('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}
        {% endif %}
      {% endblock %}
    {% endblock %}
  </head>

  {% block body %}<body>{% endblock %}
    {% block body_header %}
      <div class=\"header\">
        <div class=\"header-top\">
          <div class=\"container\">
            <div class=\"top-nav\">
              <span class=\"menu\"> </span>
              <ul>
                {% for page in pages.children %}
                  {% if page.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    <li><a class=\"scroll {{ current_page }}\" href=\"{{ page.url }}\"><span data-hover=\"{{ page.menu }}\">{{ page.menu }}</span></a>{% if not loop.last %}<label> </label>{% endif %}</li>
                  {% endif %}
                {% endfor %}
              </ul>
            </div>

            <div class=\"search-box\">
              <div id=\"sb-search\" class=\"sb-search\">
                <form>
                  <input class=\"sb-search-input\" placeholder=\"Enter your search term...\" type=\"search\" name=\"search\" id=\"search\">
                  <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                  <span class=\"sb-icon-search\"> </span>
                </form>
              </div>
            </div>

            <div class=\"clearfix\"> </div>
          </div>
        </div>

        <div class=\"header-bottom\">
          <div class=\"container\">
            <div class=\"logo\">
              {% block body_logo %}
                <a href=\"{{ base_url }}\"><img src=\"{{ theme_config.logo_url | default(theme_url ~ '/assets/images/logo.png') }}\" alt=\" \" /></a>
              {% endblock %}
            </div>

            <div class=\"top-tele\">
              <div class=\"in-phone\"><i class=\"phone\"> </i>
                <div class=\"number\">
                  <p>Phone:</p>
                  <span>{{ theme_config.phone_number }}</span>
                </div>
                <div class=\"clearfix\"> </div>
              </div>

              <div class=\"in-phone-in\"><i class=\"phone new-phone\"> </i>
                <div class=\"number\">
                  <p>Location:</p>
                  {% for line in theme_config.location %}
                    <span>{{ line }}</span>
                  {% endfor %}
                </div>
                <div class=\"clearfix\"> </div>
              </div>
            </div>
            <div class=\"clearfix\"> </div>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block body_pre_content %}{% endblock %}

    {% block body_content %}
      <div class=\"content\">
        <div class=\"single\">
          <div class=\"container\">
            {{ page.content }}
          </div>
        </div>
      </div>
    {% endblock %}

    {% block body_footer %}
      <div class=\"footer\">
        <div class=\"container\">
          <div class=\"footer-top\">
            {% if theme_config.newsletter %}
              <div class=\"col-md-3 footer-in\">
                <h5>Newsletter</h5>
              </div>

              <div class=\"col-md-6 mail\">
                <input type=\"text\" value=\"ENTER EMAIL\" onfocus=\"this.value='';\" onblur=\"if (this.value == '') {this.value ='ENTER EMAIL';}\">
              </div>

              <div class=\"col-md-3 send\">
                <input type=\"submit\" value=\"SUBSCRIBE\" >
              </div>
              <div class=\"clearfix\"> </div>
            {% endif %}
          </div>

          <div class=\"foter-bottom\">
            {% if theme_config.social_links %}
              <ul class=\"social-ic-icons\">
                {% if theme_config.social_links.facebook %}<li class=\"facebook\"><a href=\"{{ theme_config.social_links.facebook }}\"><span> </span></a></li>{% endif %}
                {% if theme_config.social_links.twitter %}<li class=\"twitter\"><a href=\"{{ theme_config.social_links.twitter }}\"><span> </span></a></li>{% endif %}
                {% if theme_config.social_links.gplus %}<li class=\"gmail\"><a href=\"{{ theme_config.social_links.gplus }}\"><span> </span></a></li>{% endif %}
                {% if theme_config.social_links.pinterest %}<li class=\"print\"><a href=\"{{ theme_config.social_links.pinterest }}\"><span> </span></a></li>{% endif %}
              </ul>
            {% endif %}

            <p class=\"footer-grid\">Copyright &copy; {{ \"NOW\" | date('Y') }} @ {{ site.title }} | Design: <a href=\"http://w3layouts.com/\">W3layouts</a> | Grav Theme: <a href=\"https://nunopress.com\">NunoPress LLC</a></p>
          </div>
        </div>
      </div>
    {% endblock %}

    {% block body_js %}
      {% do assets.add('theme://assets/js/jquery.min.js', 104) %}
      {% do assets.add('theme://assets/js/jquery.chocolat.js', 103) %}

      {% do assets.add('theme://assets/js/classie.js', 102) %}
      {% do assets.add('theme://assets/js/uisearch.js', 101) %}

      {{ assets.js() }}

      <script>
        \$(\"span.menu\").click(function(){
          \$(\".top-nav ul\").slideToggle(500, function(){
          });
        });

        new UISearch( document.getElementById( 'sb-search' ) );

        \$('#example1 a').Chocolat();
      </script>
    {% endblock %}
  </body>
</html>
", "default.html.twig", "/var/www/html/grav/user/themes/machine/templates/default.html.twig");
    }
}

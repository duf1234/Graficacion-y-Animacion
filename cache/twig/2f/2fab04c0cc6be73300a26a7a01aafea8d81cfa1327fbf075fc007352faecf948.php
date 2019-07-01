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
class __TwigTemplate_ca79682fb44e24ea44bfbe57ef8297ac62c9e3f6385a76e1d6326af784c039ab extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'head_meta' => [$this, 'block_head_meta'],
            'head_title' => [$this, 'block_head_title'],
            'head_js' => [$this, 'block_head_js'],
            'head_css' => [$this, 'block_head_css'],
            'head_css_extra' => [$this, 'block_head_css_extra'],
            'body' => [$this, 'block_body'],
            'body_header' => [$this, 'block_body_header'],
            'body_content' => [$this, 'block_body_content'],
            'body_nav' => [$this, 'block_body_nav'],
            'body_footer' => [$this, 'block_body_footer'],
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
        // line 108
        echo "  </head>

  ";
        // line 110
        $this->displayBlock('body', $context, $blocks);
        // line 111
        echo "    <div id=\"wrapper\">
      <div id=\"bg\"></div>
      <div id=\"overlay\"></div>
      <div id=\"main\">
        ";
        // line 115
        $this->displayBlock('body_header', $context, $blocks);
        // line 136
        echo "
        ";
        // line 137
        $this->displayBlock('body_footer', $context, $blocks);
        // line 142
        echo "      </div>
    </div>
  </body>
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
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/images/favicon.ico");
        echo "\" />

      <script>
        var base_url = '";
        // line 25
        echo ($context["base_url"] ?? null);
        echo "',
            theme_url = '";
        // line 26
        echo ($context["theme_url"] ?? null);
        echo "';
      </script>

      ";
        // line 29
        $this->displayBlock('head_js', $context, $blocks);
        // line 45
        echo "
      ";
        // line 46
        $this->displayBlock('head_css', $context, $blocks);
        // line 105
        echo "
      ";
        // line 106
        $this->displayBlock('head_css_extra', $context, $blocks);
        // line 107
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

    // line 29
    public function block_head_js($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 103], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "//code.jquery.com/jquery-migrate-1.2.1.min.js", 1 => 102], "method");
        // line 32
        echo "
        ";
        // line 33
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/skel.min.js", 1 => 101], "method");
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/init.js", 1 => 100], "method");
        // line 35
        echo "
        ";
        // line 37
        echo "        ";
        // line 38
        echo "        ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 39
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"], "method");
            // line 40
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"], "method");
            // line 41
            echo "        ";
        }
        // line 42
        echo "
        ";
        // line 43
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
      ";
    }

    // line 46
    public function block_head_css($context, array $blocks = [])
    {
        // line 47
        echo "        <noscript>
          <link rel=\"stylesheet\" href=\"";
        // line 48
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/skel.css");
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 49
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/style.css");
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 50
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/style-wide.css");
        echo "\" />
          <link rel=\"stylesheet\" href=\"";
        // line 51
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/style-noscript.css");
        echo "\" />
        </noscript>

        ";
        // line 54
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 55
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/ie/v9.css"], "method");
            // line 56
            echo "        ";
        }
        // line 57
        echo "
        ";
        // line 58
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 59
            echo "          ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/ie/v8.css"], "method");
            // line 60
            echo "        ";
        }
        // line 61
        echo "
        ";
        // line 62
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

        ";
        // line 64
        $context["backgrounds"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []);
        // line 65
        echo "        ";
        if (twig_length_filter($this->env, ($context["backgrounds"] ?? null))) {
            // line 66
            echo "          <style>
            #bg {
              -moz-animation: bg 60s linear infinite;
              -webkit-animation: bg 60s linear infinite;
              -o-animation: bg 60s linear infinite;
              -ms-animation: bg 60s linear infinite;
              animation: bg 60s linear infinite;
              -moz-backface-visibility: hidden;
              -webkit-backface-visibility: hidden;
              -o-backface-visibility: hidden;
              -ms-backface-visibility: hidden;
              backface-visibility: hidden;
              -moz-transform: translate3d(0,0,0);
              -webkit-transform: translate3d(0,0,0);
              -o-transform: translate3d(0,0,0);
              -ms-transform: translate3d(0,0,0);
              transform: translate3d(0,0,0);
              /* Set your background with this */
              background: #348cb2 url(\"";
            // line 84
            echo $this->getAttribute(twig_random($this->env, ($context["backgrounds"] ?? null)), "url", []);
            echo "\") bottom left;
              background-repeat: repeat-x;
              height: 100%;
              left: 0;
              opacity: 1;
              position: fixed;
              top: 0;
            }
            @-moz-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @-webkit-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @-o-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @-ms-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }

            #bg {
              background-size: 2250px auto;
              width: 6750px;
            }
          </style>
        ";
        }
        // line 104
        echo "      ";
    }

    // line 106
    public function block_head_css_extra($context, array $blocks = [])
    {
    }

    // line 110
    public function block_body($context, array $blocks = [])
    {
        echo "<body class=\"loading\">";
    }

    // line 115
    public function block_body_header($context, array $blocks = [])
    {
        // line 116
        echo "          <header id=\"header\">

            ";
        // line 118
        $this->displayBlock('body_content', $context, $blocks);
        // line 122
        echo "
            ";
        // line 123
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "links", [])) {
            // line 124
            echo "              <nav>
                <ul>
                  ";
            // line 126
            $this->displayBlock('body_nav', $context, $blocks);
            // line 131
            echo "                </ul>
              </nav>
            ";
        }
        // line 134
        echo "          </header>
        ";
    }

    // line 118
    public function block_body_content($context, array $blocks = [])
    {
        // line 119
        echo "              <h1>";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
              ";
        // line 120
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
            ";
    }

    // line 126
    public function block_body_nav($context, array $blocks = [])
    {
        // line 127
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "links", []));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 128
            echo "                      <li><a href=\"";
            echo $this->getAttribute($context["line"], "url", []);
            echo "\" class=\"icon fa-";
            echo $this->getAttribute($context["line"], "icon", []);
            echo "\"><span class=\"label\">";
            echo $this->getAttribute($context["line"], "title", []);
            echo "</span></a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                  ";
    }

    // line 137
    public function block_body_footer($context, array $blocks = [])
    {
        // line 138
        echo "          <footer id=\"footer\">
            <span class=\"copyright\">&copy; ";
        // line 139
        echo twig_date_format_filter($this->env, "NOW", "Y");
        echo " ";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo " | Design: <a href=\"http://html5up.net\">HTML5 UP</a> | Grav Theme: <a href=\"https://nunopress.com\">NunoPress</a>.</span>
          </footer>
        ";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  426 => 139,  423 => 138,  420 => 137,  416 => 130,  403 => 128,  398 => 127,  395 => 126,  389 => 120,  384 => 119,  381 => 118,  376 => 134,  371 => 131,  369 => 126,  365 => 124,  363 => 123,  360 => 122,  358 => 118,  354 => 116,  351 => 115,  345 => 110,  340 => 106,  336 => 104,  313 => 84,  293 => 66,  290 => 65,  288 => 64,  283 => 62,  280 => 61,  277 => 60,  274 => 59,  272 => 58,  269 => 57,  266 => 56,  263 => 55,  261 => 54,  255 => 51,  251 => 50,  247 => 49,  243 => 48,  240 => 47,  237 => 46,  231 => 43,  228 => 42,  225 => 41,  222 => 40,  219 => 39,  216 => 38,  214 => 37,  211 => 35,  208 => 34,  206 => 33,  203 => 32,  200 => 31,  197 => 30,  194 => 29,  183 => 18,  180 => 17,  174 => 14,  170 => 12,  137 => 10,  133 => 9,  128 => 6,  125 => 5,  121 => 107,  119 => 106,  116 => 105,  114 => 46,  111 => 45,  109 => 29,  103 => 26,  99 => 25,  93 => 22,  89 => 21,  86 => 20,  84 => 17,  81 => 16,  78 => 5,  75 => 4,  67 => 142,  65 => 137,  62 => 136,  60 => 115,  54 => 111,  52 => 110,  48 => 108,  46 => 4,  41 => 1,);
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
      <link rel=\"shortcut icon\" href=\"{{ url('theme://assets/images/favicon.ico') }}\" />

      <script>
        var base_url = '{{ base_url }}',
            theme_url = '{{ theme_url }}';
      </script>

      {% block head_js %}
        {% do assets.add('jquery', 103) %}
        {% do assets.add('//code.jquery.com/jquery-migrate-1.2.1.min.js', 102) %}

        {% do assets.add('theme://assets/js/skel.min.js', 101) %}
        {% do assets.add('theme://assets/js/init.js', 100) %}

        {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries #}
        {# WARNING: Respond.js doesn't work if you view the page via file:// #}
        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
          {% do assets.add('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}
          {% do assets.add('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}
        {% endif %}

        {{ assets.js() }}
      {% endblock %}

      {% block head_css %}
        <noscript>
          <link rel=\"stylesheet\" href=\"{{ url('theme://assets/css/skel.css') }}\" />
          <link rel=\"stylesheet\" href=\"{{ url('theme://assets/css/style.css') }}\" />
          <link rel=\"stylesheet\" href=\"{{ url('theme://assets/css/style-wide.css') }}\" />
          <link rel=\"stylesheet\" href=\"{{ url('theme://assets/css/style-noscript.css') }}\" />
        </noscript>

        {% if browser.getBrowser == 'msie' and browser.getVersion <= 9 %}
          {% do assets.add('theme://assets/css/ie/v9.css') %}
        {% endif %}

        {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
          {% do assets.add('theme://assets/css/ie/v8.css') %}
        {% endif %}

        {{ assets.css() }}

        {% set backgrounds = page.media.images %}
        {% if backgrounds | length %}
          <style>
            #bg {
              -moz-animation: bg 60s linear infinite;
              -webkit-animation: bg 60s linear infinite;
              -o-animation: bg 60s linear infinite;
              -ms-animation: bg 60s linear infinite;
              animation: bg 60s linear infinite;
              -moz-backface-visibility: hidden;
              -webkit-backface-visibility: hidden;
              -o-backface-visibility: hidden;
              -ms-backface-visibility: hidden;
              backface-visibility: hidden;
              -moz-transform: translate3d(0,0,0);
              -webkit-transform: translate3d(0,0,0);
              -o-transform: translate3d(0,0,0);
              -ms-transform: translate3d(0,0,0);
              transform: translate3d(0,0,0);
              /* Set your background with this */
              background: #348cb2 url(\"{{ random(backgrounds).url }}\") bottom left;
              background-repeat: repeat-x;
              height: 100%;
              left: 0;
              opacity: 1;
              position: fixed;
              top: 0;
            }
            @-moz-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @-webkit-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @-o-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @-ms-keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }
            @keyframes bg { 0% { -moz-transform: translate3d(0,0,0); -webkit-transform: translate3d(0,0,0); -o-transform: translate3d(0,0,0); -ms-transform: translate3d(0,0,0); transform: translate3d(0,0,0); } 100% { -moz-transform: translate3d(-2250px,0,0); -webkit-transform: translate3d(-2250px,0,0); -o-transform: translate3d(-2250px,0,0); -ms-transform: translate3d(-2250px,0,0); transform: translate3d(-2250px,0,0); } }

            #bg {
              background-size: 2250px auto;
              width: 6750px;
            }
          </style>
        {% endif %}
      {% endblock %}

      {% block head_css_extra %}{% endblock %}
    {% endblock %}
  </head>

  {% block body %}<body class=\"loading\">{% endblock %}
    <div id=\"wrapper\">
      <div id=\"bg\"></div>
      <div id=\"overlay\"></div>
      <div id=\"main\">
        {% block body_header %}
          <header id=\"header\">

            {% block body_content %}
              <h1>{{ page.title }}</h1>
              {{ page.content }}
            {% endblock %}

            {% if page.header.links %}
              <nav>
                <ul>
                  {% block body_nav %}
                    {% for line in page.header.links %}
                      <li><a href=\"{{ line.url }}\" class=\"icon fa-{{ line.icon }}\"><span class=\"label\">{{ line.title }}</span></a></li>
                    {% endfor %}
                  {% endblock %}
                </ul>
              </nav>
            {% endif %}
          </header>
        {% endblock %}

        {% block body_footer %}
          <footer id=\"footer\">
            <span class=\"copyright\">&copy; {{ \"NOW\" | date('Y') }} {{ site.title }} | Design: <a href=\"http://html5up.net\">HTML5 UP</a> | Grav Theme: <a href=\"https://nunopress.com\">NunoPress</a>.</span>
          </footer>
        {% endblock %}
      </div>
    </div>
  </body>
</html>
", "default.html.twig", "/var/www/html/grav/user/themes/aerial/templates/default.html.twig");
    }
}

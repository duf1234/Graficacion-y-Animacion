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
class __TwigTemplate_b4e2b5325d925befc767ce3abd56777d1d60216ef6a849dd176dd10d49579284 extends \Twig\Template
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
            'body_nav' => [$this, 'block_body_nav'],
            'body_title' => [$this, 'block_body_title'],
            'body_content' => [$this, 'block_body_content'],
            'body_footer' => [$this, 'block_body_footer'],
            'body_js' => [$this, 'block_body_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getLanguage", [])) : ((($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["theme_config"] ?? null), "default_lang", []), "en")) : ("en"))));
        echo "\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 64
        echo "</head>

";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('body_header', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('body_content', $context, $blocks);
        // line 121
        echo "
";
        // line 122
        $this->displayBlock('body_footer', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('body_js', $context, $blocks);
        // line 183
        echo "
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        ";
        $this->displayBlock('head_meta', $context, $blocks);
        // line 20
        echo "
        ";
        // line 21
        $this->displayBlock('head_title', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        $context["favicon_url"] = "theme://assets/images/favicon.ico";
        // line 26
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "favicon_url", [])) {
            // line 27
            echo "            ";
            $context["favicon_url"] = $this->getAttribute(($context["theme_config"] ?? null), "favicon_url", []);
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        <link rel=\"canonical\" href=\"";
        // line 30
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true], "method");
        echo "\"/>
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["favicon_url"] ?? null));
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html_attr");
        echo "\"/>

        ";
        // line 33
        $this->displayBlock('head_css', $context, $blocks);
        // line 51
        echo "        Css
        ";
        // line 52
        $this->displayBlock('head_css_extra', $context, $blocks);
        // line 53
        echo "
        ";
        // line 54
        $this->displayBlock('head_js', $context, $blocks);
        // line 63
        echo "    ";
    }

    // line 5
    public function block_head_meta($context, array $blocks = [])
    {
        // line 6
        echo "            <meta charset=\"utf-8\"/>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 10
            echo "                <meta ";
            if ($this->getAttribute($context["meta"], "name", [])) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\"
                      ";
            }
            // line 11
            if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", []);
                echo "\"
                      ";
            }
            // line 12
            if ($this->getAttribute($context["meta"], "charset", [])) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", []);
                echo "\"
                      ";
            }
            // line 13
            if ($this->getAttribute($context["meta"], "property", [])) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\"
                      ";
            }
            // line 14
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
        // line 16
        echo "
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
            <meta name=\"description\" content=\"";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "metadata", []), "description", []);
        echo "\"/>
        ";
    }

    // line 21
    public function block_head_title($context, array $blocks = [])
    {
        // line 22
        echo "            <title>";
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []) && (($this->getAttribute(($context["page"] ?? null), "url", []) != ($context["base_url"] ?? null)) || ("error" == $this->getAttribute(($context["page"] ?? null), "template", []))))) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
            echo "|";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
    }

    // line 33
    public function block_head_css($context, array $blocks = [])
    {
        // line 34
        echo "            ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "cdn", [])) {
            // line 35
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", 1 => 105], "method");
            // line 36
            echo "            ";
        } else {
            // line 37
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/font-awesome.min.css", 1 => 105], "method");
            // line 38
            echo "            ";
        }
        // line 39
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/style.css", 1 => 104], "method");
        // line 40
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/zerogrid.css", 1 => 103], "method");
        // line 41
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/camera.css", 1 => 102], "method");
        // line 42
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/responsive.css", 1 => 100], "method");
        // line 43
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/custom.css", 1 => 100], "method");
        // line 44
        echo "
            ";
        // line 45
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 46
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/ie.css"], "method");
            // line 47
            echo "            ";
        }
        // line 48
        echo "
            ";
        // line 49
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
        ";
    }

    // line 52
    public function block_head_css_extra($context, array $blocks = [])
    {
    }

    // line 54
    public function block_head_js($context, array $blocks = [])
    {
        // line 55
        echo "            ";
        // line 56
        echo "            ";
        // line 57
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 58
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"], "method");
            // line 59
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"], "method");
            // line 60
            echo "            ";
        }
        // line 61
        echo "
        ";
    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        // line 67
        echo "<body>";
    }

    // line 69
    public function block_body_header($context, array $blocks = [])
    {
        // line 70
        echo "    ";
        $context["logo_url"] = "theme://assets/images/logo.png";
        // line 71
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "logo_url", [])) {
            // line 72
            echo "        ";
            $context["logo_url"] = $this->getAttribute(($context["theme_config"] ?? null), "logo_url", []);
            // line 73
            echo "    ";
        }
        // line 74
        echo "
    <header class=\"page1\">
        <div class=\"zerogrid\">
            <div class=\"col-full\">
                <div class=\"wrap-col\">
                    <div class=\"menu_block\">

                        <nav class=\"\">
                            <ul class=\"sf-menu\">
                                ";
        // line 83
        $this->displayBlock('body_nav', $context, $blocks);
        // line 92
        echo "                            </ul>
                        </nav>

                        <div class=\"clear\"></div>
                    </div>

                    ";
        // line 98
        $this->displayBlock('body_title', $context, $blocks);
        // line 101
        echo "                </div>
            </div>

            <div class=\"clear\"></div>
        </div>
    </header>
";
    }

    // line 83
    public function block_body_nav($context, array $blocks = [])
    {
        // line 84
        echo "                                    ";
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
            // line 85
            echo "                                        ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 86
                echo "                                            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("current") : (""));
                // line 87
                echo "                                            ";
                $context["page_num"] = ($this->getAttribute($context["loop"], "index", []) + 1);
                // line 88
                echo "                                            <li class=\"men";
                echo ($context["page_num"] ?? null);
                echo " ";
                echo ($context["current_page"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a> <strong class=\"hover\"></strong></li>
                                        ";
            }
            // line 90
            echo "                                    ";
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
        // line 91
        echo "                                ";
    }

    // line 98
    public function block_body_title($context, array $blocks = [])
    {
        // line 99
        echo "                        <h1><a href=\"";
        echo ($context["base_url"] ?? null);
        echo "\"><img src=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["logo_url"] ?? null));
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html_attr");
        echo "\"/></a></h1>
                    ";
    }

    // line 109
    public function block_body_content($context, array $blocks = [])
    {
        // line 110
        echo "    <div id=\"";
        echo $this->getAttribute(($context["page"] ?? null), "slug", []);
        echo "\" class=\"content\">
        <div class=\"zerogrid\">
            <div class=\"col-full\">
                <div class=\"wrap-col\">
                    <h3>";
        // line 114
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h3>
                    <div class=\"text1\">";
        // line 115
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "</div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 122
    public function block_body_footer($context, array $blocks = [])
    {
        // line 123
        echo "    <footer>
        <div class=\"zerogrid\">
            <div class=\"col-full\">
                <div class=\"wrap-col\">
                    <div class=\"copy\">
                        &copy; ";
        // line 128
        echo twig_date_format_filter($this->env, "NOW", "Y");
        echo " <a href=\"";
        echo ($context["base_url"] ?? null);
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a>
                        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "footer", []));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 130
            echo "                            ";
            // line 131
            echo "                            ";
            $context["p"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", []), "find", [0 => $this->getAttribute($context["element"], "link", [])], "method");
            // line 132
            echo "                            ";
            if (($context["p"] ?? null)) {
                // line 133
                echo "                                &emsp;|&emsp;<a href=\"";
                echo $this->getAttribute(($context["p"] ?? null), "url", []);
                echo "\">";
                echo $this->getAttribute($context["element"], "name", []);
                echo "</a>&emsp;
                            ";
            } else {
                // line 135
                echo "                                &emsp;|&emsp;<a href=\"";
                echo $this->getAttribute($context["element"], "link", []);
                echo "\">";
                echo $this->getAttribute($context["element"], "name", []);
                echo "</a>&emsp;
                            ";
            }
            // line 137
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                        </br>
                        ";
        // line 139
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             $this->loadTemplate("partials/langswitcher.html.twig", "default.html.twig", 139);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
        // line 140
        echo "                    </div>
                </div>
            </div>
        </div>
    </footer>

";
    }

    // line 148
    public function block_body_js($context, array $blocks = [])
    {
        // line 149
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 110], "method");
        // line 150
        echo "    ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "cdn", [])) {
            // line 151
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/jquery.uitotop/1.2/js/jquery.ui.totop.min.js", 1 => 101], "method");
            // line 152
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.9/js/superfish.min.js", 1 => 102], "method");
            // line 153
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js", 1 => 109], "method");
            // line 154
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js", 1 => 103], "method");
            // line 155
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "https://cdn.jsdelivr.net/jquery.equalheights/1.5.2/jquery.equalheights.min.js", 1 => 104], "method");
            // line 156
            echo "    ";
        } else {
            // line 157
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.ui.totop.min.js", 1 => 101], "method");
            // line 158
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/superfish.min.js", 1 => 102], "method");
            // line 159
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery-migrate.min.js", 1 => 109], "method");
            // line 160
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.easing.min.js", 1 => 103], "method");
            // line 161
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.equalheights.min.js", 1 => 104], "method");
            // line 162
            echo "    ";
        }
        // line 163
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/hyphenate.js", 1 => 104], "method");
        // line 164
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/tms-0.4.1.min.js", 1 => 101], "method");
        // line 165
        echo "
    ";
        // line 166
        $context["api_key"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "google-maps", [], "array"), "google_api_key", []);
        // line 167
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "google-maps", [], "array"), "enabled", []) && ($context["api_key"] ?? null))) {
            // line 168
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://google-maps/js/google-maps.js", 1 => 105], "method");
            // line 169
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => ("https://maps.googleapis.com/maps/api/js?key=" . ($context["api_key"] ?? null)), 1 => 105], "method");
            // line 170
            echo "    ";
        }
        // line 171
        echo "
    ";
        // line 172
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    <script>
        function goToByScroll(id) {
            \$('html,body').animate({scrollTop: \$(\"#\" + id).offset().top}, 'slow');
        }

        \$(document).ready(function () {
            \$().UItoTop({easingType: 'easeOutQuart'});
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  600 => 172,  597 => 171,  594 => 170,  591 => 169,  588 => 168,  585 => 167,  583 => 166,  580 => 165,  577 => 164,  574 => 163,  571 => 162,  568 => 161,  565 => 160,  562 => 159,  559 => 158,  556 => 157,  553 => 156,  550 => 155,  547 => 154,  544 => 153,  541 => 152,  538 => 151,  535 => 150,  532 => 149,  529 => 148,  519 => 140,  509 => 139,  506 => 138,  500 => 137,  492 => 135,  484 => 133,  481 => 132,  478 => 131,  476 => 130,  472 => 129,  464 => 128,  457 => 123,  454 => 122,  444 => 115,  440 => 114,  432 => 110,  429 => 109,  418 => 99,  415 => 98,  411 => 91,  397 => 90,  385 => 88,  382 => 87,  379 => 86,  376 => 85,  358 => 84,  355 => 83,  345 => 101,  343 => 98,  335 => 92,  333 => 83,  322 => 74,  319 => 73,  316 => 72,  313 => 71,  310 => 70,  307 => 69,  303 => 67,  300 => 66,  295 => 61,  292 => 60,  289 => 59,  286 => 58,  283 => 57,  281 => 56,  279 => 55,  276 => 54,  271 => 52,  265 => 49,  262 => 48,  259 => 47,  256 => 46,  254 => 45,  251 => 44,  248 => 43,  245 => 42,  242 => 41,  239 => 40,  236 => 39,  233 => 38,  230 => 37,  227 => 36,  224 => 35,  221 => 34,  218 => 33,  207 => 22,  204 => 21,  198 => 18,  194 => 16,  182 => 14,  175 => 13,  168 => 12,  161 => 11,  153 => 10,  149 => 9,  144 => 6,  141 => 5,  137 => 63,  135 => 54,  132 => 53,  130 => 52,  127 => 51,  125 => 33,  118 => 31,  114 => 30,  111 => 29,  108 => 28,  105 => 27,  102 => 26,  100 => 25,  97 => 24,  95 => 21,  92 => 20,  89 => 5,  86 => 4,  79 => 183,  77 => 148,  74 => 147,  72 => 122,  69 => 121,  67 => 109,  64 => 108,  62 => 69,  59 => 68,  57 => 66,  53 => 64,  51 => 4,  46 => 2,  43 => 1,);
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
<html lang=\"{{ grav.language.getLanguage ?: (theme_config.default_lang|default('en')) }}\">
<head>
    {% block head %}
        {% block head_meta %}
            <meta charset=\"utf-8\"/>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>

            {% for meta in page.metadata %}
                <meta {% if meta.name %}name=\"{{ meta.name }}\"
                      {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\"
                      {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\"
                      {% endif %}{% if meta.property %}property=\"{{ meta.property }}\"
                      {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
            {% endfor %}

            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
            <meta name=\"description\" content=\"{{ site.metadata.description }}\"/>
        {% endblock %}

        {% block head_title %}
            <title>{% if page.header.title and (page.url != base_url or 'error' == page.template) %}{{ page.header.title }}|{% endif %}{{ site.title }}</title>
        {% endblock %}

        {% set favicon_url = 'theme://assets/images/favicon.ico' %}
        {% if theme_config.favicon_url %}
            {% set favicon_url = theme_config.favicon_url %}
        {% endif %}

        <link rel=\"canonical\" href=\"{{ page.url(true) }}\"/>
        <link rel=\"shortcut icon\" href=\"{{ url(favicon_url) }}\" alt=\"{{ site.title|e('html_attr') }}\"/>

        {% block head_css %}
            {% if theme_config.cdn %}
                {% do assets.add('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 105) %}
            {% else %}
                {% do assets.add('theme://assets/css/font-awesome.min.css', 105) %}
            {% endif %}
            {% do assets.add('theme://assets/css/style.css', 104) %}
            {% do assets.add('theme://assets/css/zerogrid.css', 103) %}
            {% do assets.add('theme://assets/css/camera.css', 102) %}
            {% do assets.add('theme://assets/css/responsive.css', 100) %}
            {% do assets.add('theme://assets/css/custom.css', 100) %}

            {% if browser.getBrowser == 'msie' and browser.getVersion <= 9 %}
                {% do assets.add('theme://assets/css/ie.css') %}
            {% endif %}

            {{ assets.css() }}
        {% endblock %}
        Css
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

{% block body %}
<body>{% endblock %}

{% block body_header %}
    {% set logo_url = 'theme://assets/images/logo.png' %}
    {% if theme_config.logo_url %}
        {% set logo_url = theme_config.logo_url %}
    {% endif %}

    <header class=\"page1\">
        <div class=\"zerogrid\">
            <div class=\"col-full\">
                <div class=\"wrap-col\">
                    <div class=\"menu_block\">

                        <nav class=\"\">
                            <ul class=\"sf-menu\">
                                {% block body_nav %}
                                    {% for page in pages.children %}
                                        {% if page.visible %}
                                            {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
                                            {% set page_num = loop.index + 1 %}
                                            <li class=\"men{{ page_num }} {{ current_page }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a> <strong class=\"hover\"></strong></li>
                                        {% endif %}
                                    {% endfor %}
                                {% endblock %}
                            </ul>
                        </nav>

                        <div class=\"clear\"></div>
                    </div>

                    {% block body_title %}
                        <h1><a href=\"{{ base_url }}\"><img src=\"{{ url(logo_url) }}\" alt=\"{{ site.title|e('html_attr') }}\"/></a></h1>
                    {% endblock %}
                </div>
            </div>

            <div class=\"clear\"></div>
        </div>
    </header>
{% endblock %}

{% block body_content %}
    <div id=\"{{ page.slug }}\" class=\"content\">
        <div class=\"zerogrid\">
            <div class=\"col-full\">
                <div class=\"wrap-col\">
                    <h3>{{ page.title }}</h3>
                    <div class=\"text1\">{{ page.content }}</div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block body_footer %}
    <footer>
        <div class=\"zerogrid\">
            <div class=\"col-full\">
                <div class=\"wrap-col\">
                    <div class=\"copy\">
                        &copy; {{ \"NOW\"|date('Y') }} <a href=\"{{ base_url }}\">{{ site.title }}</a>
                        {% for element in page.header.footer %}
                            {# Check for registered page #}
                            {% set p = grav.pages.find(element.link) %}
                            {% if p %}
                                &emsp;|&emsp;<a href=\"{{ p.url }}\">{{ element.name }}</a>&emsp;
                            {% else %}
                                &emsp;|&emsp;<a href=\"{{ element.link }}\">{{ element.name }}</a>&emsp;
                            {% endif %}
                        {% endfor %}
                        </br>
                        {% include 'partials/langswitcher.html.twig' ignore missing %}
                    </div>
                </div>
            </div>
        </div>
    </footer>

{% endblock %}

{% block body_js %}
    {% do assets.addJs('jquery', 110) %}
    {% if theme_config.cdn %}
        {% do assets.addJs('https://cdn.jsdelivr.net/jquery.uitotop/1.2/js/jquery.ui.totop.min.js', 101) %}
        {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.9/js/superfish.min.js', 102) %}
        {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js', 109) %}
        {% do assets.addJs('https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', 103) %}
        {% do assets.addJs('https://cdn.jsdelivr.net/jquery.equalheights/1.5.2/jquery.equalheights.min.js', 104) %}
    {% else %}
        {% do assets.addJs('theme://assets/js/jquery.ui.totop.min.js', 101) %}
        {% do assets.addJs('theme://assets/js/superfish.min.js', 102) %}
        {% do assets.addJs('theme://assets/js/jquery-migrate.min.js', 109) %}
        {% do assets.addJs('theme://assets/js/jquery.easing.min.js', 103) %}
        {% do assets.addJs('theme://assets/js/jquery.equalheights.min.js', 104) %}
    {% endif %}
    {% do assets.addJs('theme://assets/js/hyphenate.js', 104) %}
    {% do assets.addJs('theme://assets/js/tms-0.4.1.min.js', 101) %}

    {% set api_key = config.plugins['google-maps'].google_api_key %}
    {% if config.plugins['google-maps'].enabled and api_key %}
        {% do assets.addJs('plugin://google-maps/js/google-maps.js', 105) %}
        {% do assets.addJs('https://maps.googleapis.com/maps/api/js?key=' ~ api_key, 105) %}
    {% endif %}

    {{ assets.js() }}
    <script>
        function goToByScroll(id) {
            \$('html,body').animate({scrollTop: \$(\"#\" + id).offset().top}, 'slow');
        }

        \$(document).ready(function () {
            \$().UItoTop({easingType: 'easeOutQuart'});
        });
    </script>
{% endblock %}

</body>
</html>
", "default.html.twig", "/var/www/html/grav/user/themes/zsimplex/templates/default.html.twig");
    }
}

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

/* partials/about.html.twig */
class __TwigTemplate_b6f33d92059ba6299e6df394ae79670a1e7822e5411cdb6a3c3c19342a9c4ed8 extends \Twig\Template
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
        echo "          <section class=\"pt-page pt-page-2\" data-id=\"about_me\">
            <div class=\"section-title-block\">
";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "customtitle", [])) {
            // line 4
            echo "              <h2 class=\"section-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "customtitle", []);
            echo "</h2>
";
        } else {
            // line 6
            echo "              <h2 class=\"section-title\">About</h2>
";
        }
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "subtitle", [])) {
            // line 8
            echo "              <h5 class=\"section-description uppercase\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "subtitle", []);
            echo "</h5>
";
        }
        // line 10
        echo "            </div>
            <div class=\"row\">
";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "testimonials", [])) {
            // line 13
            echo "              <div class=\"col-sm-6 col-md-6 subpage-block\">
";
        } else {
            // line 15
            echo "              <div class=\"col-xs-12 subpage-block\">
";
        }
        // line 17
        echo "                <div class=\"general-info\">
";
        // line 18
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "general_header", [])) {
            // line 19
            echo "                  <h3>";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "general_header", []);
            echo "</h3>
";
        }
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "general_info", [])) {
            // line 21
            echo "                  <p>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "about", []), "general_info", []));
            echo "</p>
";
        }
        // line 23
        echo "                </div>
              </div>
";
        // line 25
        if ($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "testimonials", [])) {
            // line 26
            echo "              <div class=\"col-sm-6 col-md-6 subpage-block\">
";
            // line 27
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "testimonial", []), "customtitle", [])) {
                // line 28
                echo "                <div class=\"block-title\">
                  <h3 class=\"font-600 uppercase\">";
                // line 29
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "testimonial", []), "customtitle", []);
                echo "</h3>
                </div>
";
            } else {
                // line 32
                echo "                <div class=\"block-title\">
                  <h3 class=\"font-600 uppercase\">Testimonials</h3>
                </div>
";
            }
            // line 36
            echo "                <div class=\"testimonials owl-carousel\">
";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "testimonials", []));
            foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
                // line 38
                echo "                  <div class=\"testimonial-item\" style=\"width:100%\">
                    <div class=\"testimonial-content\">
                      <div class=\"testimonial-text\">
                        <p>\"";
                // line 41
                echo $this->getAttribute($context["testimonial"], "quote", []);
                echo "\"</p>
                      </div>
                    </div>
                    <div class=\"testimonial-credits\">
";
                // line 45
                if ($this->getAttribute($context["testimonial"], "owner_img", [])) {
                    $context["img"] = twig_last($this->env, $this->getAttribute($context["testimonial"], "owner_img", []));
                    // line 46
                    echo "                      <div class=\"testimonial-picture\">
                        <img src=\" ";
                    // line 47
                    echo $this->getAttribute(($context["img"] ?? null), "name", []);
                    echo " \" ";
                    if ($this->getAttribute($context["testimonial"], "owner_img_alt", [])) {
                        echo " alt=\"";
                        echo $this->getAttribute($context["testimonial"], "owner_img_alt", []);
                        echo "\" ";
                    }
                    echo ">
                      </div>
";
                }
                // line 50
                echo "                      <div class=\"testimonial-author-info\">
                        <p class=\"testimonial-author\">";
                // line 51
                echo $this->getAttribute($context["testimonial"], "owner", []);
                echo "</p>
                        <p class=\"testimonial-firm\">";
                // line 52
                echo $this->getAttribute($context["testimonial"], "company", []);
                echo "</p>
                      </div>
                    </div>
                  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                </div>
              </div>
";
        }
        // line 60
        echo "            </div>
";
        // line 61
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "expertise", []), "title", [])) {
            // line 62
            echo "            <div class=\"block-title\">
              <h3 class=\"font-600 uppercase\">";
            // line 63
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "expertise", []), "title", []);
            echo "</h3>
            </div>
";
        }
        // line 66
        echo "            <div class=\"row\">
";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "expertise", []), "skills", [])) {
            // line 68
            $context["s"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "expertise", []), "skills", []));
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "expertise", []), "skills", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                // line 70
                if ((($context["s"] ?? null) == 1)) {
                    // line 71
                    echo "              <div class=\"col-xs-12 subpage-block\">
";
                } elseif (((0 ==                 // line 72
($context["s"] ?? null) % 2) && (($context["s"] ?? null) != 6))) {
                    // line 73
                    echo "              <div class=\"col-sm-6 col-md-6 subpage-block\">
";
                } elseif ((0 ==                 // line 74
($context["s"] ?? null) % 3)) {
                    // line 75
                    echo "              <div class=\"col-sm-6 col-md-4 subpage-block\">
";
                } elseif ((0 ==                 // line 76
($context["s"] ?? null) % 4)) {
                    // line 77
                    echo "              <div class=\"col-sm-6 col-md-6 col-lg-3 subpage-block\">
";
                } elseif ((0 ==                 // line 78
($context["s"] ?? null) % 5)) {
                    // line 79
                    echo "              <div class=\"col-xs-12 col-md-2 subpage-block ";
                    if (($this->getAttribute($context["loop"], "first", []) || (0 == $this->getAttribute($context["loop"], "index", []) % 6))) {
                        echo "col-md-offset-1";
                    }
                    echo "\">
";
                } elseif ((0 ==                 // line 80
($context["s"] ?? null) % 7)) {
                    // line 81
                    echo "              <div class=\"col-xs-12 ";
                    if (($this->getAttribute($context["loop"], "index", []) <= 3)) {
                        echo "col-md-4";
                    } else {
                        echo "col-md-3";
                    }
                    echo " subpage-block\">
";
                } elseif ((0 ==                 // line 82
($context["s"] ?? null) % 11)) {
                    // line 83
                    echo "              <div class=\"col-xs-12 ";
                    if (($this->getAttribute($context["loop"], "index", []) <= 8)) {
                        echo "col-md-3";
                    } else {
                        echo "col-md-4";
                    }
                    echo " subpage-block\">
";
                }
                // line 85
                echo "                <div class=\"service-block\">
                  <div class=\"service-info\">
";
                // line 87
                if ($this->getAttribute($context["skill"], "icon", [])) {
                    $context["img"] = twig_last($this->env, $this->getAttribute($context["skill"], "icon", []));
                    // line 88
                    echo "                    <img src=\" ";
                    echo $this->getAttribute(($context["img"] ?? null), "name", []);
                    echo " \" ";
                    if ($this->getAttribute($context["skill"], "icon_alt", [])) {
                        echo " alt=\"";
                        echo $this->getAttribute($context["skill"], "icon_alt", []);
                        echo "\" ";
                    }
                    echo ">
";
                }
                // line 90
                echo "                    <h4>";
                echo $this->getAttribute($context["skill"], "name", []);
                echo "</h4>
                    <p>";
                // line 91
                echo $this->getAttribute($context["skill"], "description", []);
                echo "</p>
                  </div>
                </div>
              </div>
";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 97
        echo "            </div>
";
        // line 98
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "tools", []), "title", [])) {
            // line 99
            echo "            <div class=\"block-title\">
              <h3 class=\"font-600 uppercase\">";
            // line 100
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "tools", []), "title", []);
            echo "</h3>
            </div>
";
        }
        // line 103
        echo "            <div class=\"row\">
";
        // line 104
        if ($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "tool", [])) {
            $context["t"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "tool", []));
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "tool", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
                // line 105
                if ((($context["t"] ?? null) == 1)) {
                    // line 106
                    echo "              <div class=\"col-xs-12 subpage-block\">
";
                } elseif ((                // line 107
($context["t"] ?? null) == 2)) {
                    // line 108
                    echo "              <div class=\"col-md-6 subpage-block\">
";
                } elseif ((                // line 109
($context["t"] ?? null) == 3)) {
                    // line 110
                    echo "              <div class=\"col-md-4 subpage-block\">
";
                } elseif ((                // line 111
($context["t"] ?? null) == 4)) {
                    // line 112
                    echo "              <div class=\"col-md-3 subpage-block\">
";
                } elseif ((                // line 113
($context["t"] ?? null) == 5)) {
                    // line 114
                    echo "              <div class=\"col-md-2 subpage-block\">
";
                } elseif ((                // line 115
($context["t"] ?? null) == 6)) {
                    // line 116
                    echo "              <div class=\"col-md-2 subpage-block\">
";
                }
                // line 118
                echo "                <div class=\"client_block\">
";
                // line 119
                if ($this->getAttribute($context["tool"], "logo", [])) {
                    $context["img"] = twig_last($this->env, $this->getAttribute($context["tool"], "logo", []));
                    if ($this->getAttribute($context["tool"], "logo_link", [])) {
                        // line 120
                        echo "                  <a href=\"";
                        echo $this->getAttribute($context["tool"], "logo_link", []);
                        echo "\" target=\"_blank\">
";
                    }
                    // line 122
                    echo "                    <img src=\" ";
                    echo $this->getAttribute(($context["img"] ?? null), "name", []);
                    echo " \" ";
                    if ($this->getAttribute($context["tool"], "logo_alt", [])) {
                        echo " alt=\"";
                        echo $this->getAttribute($context["tool"], "logo_alt", []);
                        echo "\" ";
                    }
                    echo ">
";
                    // line 123
                    if ($this->getAttribute($context["tool"], "logo_link", [])) {
                        // line 124
                        echo "                  </a>
";
                    }
                }
                // line 126
                echo "                </div>
              </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 129
        echo "            </div>
          </section>
";
    }

    public function getTemplateName()
    {
        return "partials/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 129,  392 => 126,  387 => 124,  385 => 123,  374 => 122,  368 => 120,  364 => 119,  361 => 118,  357 => 116,  355 => 115,  352 => 114,  350 => 113,  347 => 112,  345 => 111,  342 => 110,  340 => 109,  337 => 108,  335 => 107,  332 => 106,  330 => 105,  324 => 104,  321 => 103,  315 => 100,  312 => 99,  310 => 98,  307 => 97,  287 => 91,  282 => 90,  270 => 88,  267 => 87,  263 => 85,  253 => 83,  251 => 82,  242 => 81,  240 => 80,  233 => 79,  231 => 78,  228 => 77,  226 => 76,  223 => 75,  221 => 74,  218 => 73,  216 => 72,  213 => 71,  211 => 70,  194 => 69,  192 => 68,  190 => 67,  187 => 66,  181 => 63,  178 => 62,  176 => 61,  173 => 60,  168 => 57,  157 => 52,  153 => 51,  150 => 50,  138 => 47,  135 => 46,  132 => 45,  125 => 41,  120 => 38,  116 => 37,  113 => 36,  107 => 32,  101 => 29,  98 => 28,  96 => 27,  93 => 26,  91 => 25,  87 => 23,  81 => 21,  79 => 20,  73 => 19,  71 => 18,  68 => 17,  64 => 15,  60 => 13,  58 => 12,  54 => 10,  48 => 8,  46 => 7,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("          <section class=\"pt-page pt-page-2\" data-id=\"about_me\">
            <div class=\"section-title-block\">
{% if header.resume.about.customtitle %}
              <h2 class=\"section-title\">{{header.resume.about.customtitle}}</h2>
{% else %}
              <h2 class=\"section-title\">About</h2>
{% endif %}{% if header.resume.about.subtitle %}
              <h5 class=\"section-description uppercase\">{{header.resume.about.subtitle}}</h5>
{% endif %}
            </div>
            <div class=\"row\">
{% if header.resume.testimonials %}
              <div class=\"col-sm-6 col-md-6 subpage-block\">
{% else %}
              <div class=\"col-xs-12 subpage-block\">
{% endif %}
                <div class=\"general-info\">
{% if header.resume.about.general_header %}
                  <h3>{{header.resume.about.general_header}}</h3>
{% endif %}{% if header.resume.about.general_info %}
                  <p>{{ header.resume.about.general_info|markdown }}</p>
{% endif %}
                </div>
              </div>
{% if header.resume.testimonials %}
              <div class=\"col-sm-6 col-md-6 subpage-block\">
{% if header.resume.testimonial.customtitle %}
                <div class=\"block-title\">
                  <h3 class=\"font-600 uppercase\">{{header.resume.testimonial.customtitle}}</h3>
                </div>
{% else %}
                <div class=\"block-title\">
                  <h3 class=\"font-600 uppercase\">Testimonials</h3>
                </div>
{% endif %}
                <div class=\"testimonials owl-carousel\">
{% for testimonial in header.resume.testimonials %}
                  <div class=\"testimonial-item\" style=\"width:100%\">
                    <div class=\"testimonial-content\">
                      <div class=\"testimonial-text\">
                        <p>\"{{ testimonial.quote }}\"</p>
                      </div>
                    </div>
                    <div class=\"testimonial-credits\">
{% if testimonial.owner_img %}{% set img = testimonial.owner_img|last %}
                      <div class=\"testimonial-picture\">
                        <img src=\" {{ img.name }} \" {% if testimonial.owner_img_alt %} alt=\"{{testimonial.owner_img_alt}}\" {% endif %}>
                      </div>
{% endif %}
                      <div class=\"testimonial-author-info\">
                        <p class=\"testimonial-author\">{{ testimonial.owner }}</p>
                        <p class=\"testimonial-firm\">{{ testimonial.company }}</p>
                      </div>
                    </div>
                  </div>
{% endfor %}
                </div>
              </div>
{% endif %}
            </div>
{% if header.resume.expertise.title %}
            <div class=\"block-title\">
              <h3 class=\"font-600 uppercase\">{{header.resume.expertise.title}}</h3>
            </div>
{% endif %}
            <div class=\"row\">
{% if header.resume.expertise.skills %}
{% set s = header.resume.expertise.skills | length %}
{% for skill in header.resume.expertise.skills %}
{% if s == 1 %}
              <div class=\"col-xs-12 subpage-block\">
{% elseif (s is divisible by(2)) and (s != 6) %}
              <div class=\"col-sm-6 col-md-6 subpage-block\">
{% elseif s is divisible by(3) %}
              <div class=\"col-sm-6 col-md-4 subpage-block\">
{% elseif s is divisible by(4) %}
              <div class=\"col-sm-6 col-md-6 col-lg-3 subpage-block\">
{% elseif s is divisible by(5) %}
              <div class=\"col-xs-12 col-md-2 subpage-block {% if (loop.first) or (loop.index is divisible by(6)) %}col-md-offset-1{% endif %}\">
{% elseif s is divisible by(7) %}
              <div class=\"col-xs-12 {% if loop.index <= 3 %}col-md-4{% else %}col-md-3{% endif %} subpage-block\">
{% elseif s is divisible by(11) %}
              <div class=\"col-xs-12 {% if loop.index <= 8 %}col-md-3{% else %}col-md-4{% endif %} subpage-block\">
{% endif %}
                <div class=\"service-block\">
                  <div class=\"service-info\">
{% if skill.icon %}{% set img = skill.icon|last %}
                    <img src=\" {{ img.name }} \" {% if skill.icon_alt %} alt=\"{{skill.icon_alt}}\" {% endif %}>
{% endif %}
                    <h4>{{skill.name}}</h4>
                    <p>{{skill.description}}</p>
                  </div>
                </div>
              </div>
{% endfor %}
{% endif %}
            </div>
{% if header.resume.tools.title %}
            <div class=\"block-title\">
              <h3 class=\"font-600 uppercase\">{{header.resume.tools.title}}</h3>
            </div>
{% endif %}
            <div class=\"row\">
{% if header.resume.tool %}{% set t = header.resume.tool | length %}{% for tool in header.resume.tool %}
{% if t == 1 %}
              <div class=\"col-xs-12 subpage-block\">
{% elseif t == 2 %}
              <div class=\"col-md-6 subpage-block\">
{% elseif t == 3 %}
              <div class=\"col-md-4 subpage-block\">
{% elseif t == 4 %}
              <div class=\"col-md-3 subpage-block\">
{% elseif t == 5 %}
              <div class=\"col-md-2 subpage-block\">
{% elseif t == 6 %}
              <div class=\"col-md-2 subpage-block\">
{% endif %}
                <div class=\"client_block\">
{% if tool.logo %}{% set img = tool.logo|last %}{% if tool.logo_link %}
                  <a href=\"{{tool.logo_link}}\" target=\"_blank\">
{% endif %}
                    <img src=\" {{ img.name }} \" {% if tool.logo_alt %} alt=\"{{tool.logo_alt}}\" {% endif %}>
{% if tool.logo_link %}
                  </a>
{% endif %}{% endif %}
                </div>
              </div>
{% endfor %}{% endif %}
            </div>
          </section>
", "partials/about.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/about.html.twig");
    }
}

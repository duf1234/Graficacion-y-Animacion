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

/* partials/showcase.html.twig */
class __TwigTemplate_d92fe9f703c0956a98f123957bc9078c9c8821217d9fef03ab7db64b0d6cbef6 extends \Twig\Template
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
        $context["bsTools"] = $this->loadTemplate("macros/bootstrap_tools.html.twig", "partials/showcase.html.twig", 1)->unwrap();
        // line 2
        echo "
";
        // line 3
        $context["showcase_image_width"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_width", []), 1200);
        // line 4
        $context["showcase_image_height"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_height", []), 800);
        // line 5
        $context["showcase_image_file"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_file", []);
        // line 6
        $context["showcase_image_actions"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "image_actions", []);
        // line 7
        echo "
";
        // line 8
        if (($context["showcase_image_file"] ?? null)) {
            // line 9
            echo "    ";
            $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), ($context["showcase_image_file"] ?? null), [], "array");
        } else {
            // line 11
            echo "    ";
            $context["showcase_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []));
        }
        // line 13
        echo "
";
        // line 14
        if (($context["showcase_image"] ?? null)) {
            // line 15
            echo "    ";
            if (($context["showcase_image_actions"] ?? null)) {
                // line 16
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["showcase_image_actions"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["arg"]) {
                    // line 17
                    echo "            ";
                    $context["showcase_image"] = $this->getAttribute(($context["showcase_image"] ?? null), $context["key"], _twig_default_filter(twig_split_filter($this->env, $context["arg"], ","), []));
                    // line 18
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['arg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                $context["showcase_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["showcase_image"] ?? null), "cropResize", [0 => ($context["showcase_image_width"] ?? null), 1 => ($context["showcase_image_height"] ?? null)], "method"), "contrast", [0 => 20], "method"), "brightness", [0 =>  -80], "method"), "gaussianBlur", [0 => 1.5], "method");
                // line 21
                echo "    ";
            }
            // line 22
            echo "<section class=\"modular-row showcase text-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "light");
            echo "\" style=\"background-image: url(";
            echo $this->getAttribute(($context["showcase_image"] ?? null), "url", []);
            echo ");\">
    ";
        } else {
            // line 24
            echo "    <div class=\"modular-row box-inset-shadow showcase-text ";
            echo $context["bsTools"]->getstyle($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "style", []), "primary"));
            echo "\">
        ";
        }
        // line 26
        echo "        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-";
        // line 28
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "align", []), "center");
        echo "\">
                    ";
        // line 29
        echo ($context["content"] ?? null);
        echo "
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "buttons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 31
            echo "                        <a class=\"btn btn-";
            if (($this->getAttribute($context["button"], "no_outline", []) != true)) {
                echo "outline-";
            }
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["button"], "style", []), "light");
            echo " btn-";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($context["button"], "size", []), "lg");
            echo "\" href=\"";
            echo $this->getAttribute($context["button"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["button"], "text", []);
            echo "</a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/showcase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 33,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 26,  95 => 24,  87 => 22,  84 => 21,  81 => 20,  78 => 19,  72 => 18,  69 => 17,  64 => 16,  61 => 15,  59 => 14,  56 => 13,  52 => 11,  48 => 9,  46 => 8,  43 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import \"macros/bootstrap_tools.html.twig\" as bsTools %}

{% set showcase_image_width  = page.header.image_width|defined(1200) %}
{% set showcase_image_height = page.header.image_height|defined(800) %}
{% set showcase_image_file = page.header.image_file %}
{% set showcase_image_actions = page.header.image_actions %}

{% if showcase_image_file %}
    {% set showcase_image = page.media.images[showcase_image_file] %}
{% else %}
    {% set showcase_image = page.media.images|first %}
{% endif %}

{% if showcase_image %}
    {% if showcase_image_actions %}
        {% for key, arg in showcase_image_actions %}
            {% set showcase_image = attribute( showcase_image, key, arg|split(',')|default([]) ) %}
        {% endfor %}
    {% else %}
        {% set showcase_image = showcase_image.cropResize(showcase_image_width,showcase_image_height).contrast(20).brightness(-80).gaussianBlur(1.5) %}
    {% endif %}
<section class=\"modular-row showcase text-{{ page.header.style|defined('light') }}\" style=\"background-image: url({{ showcase_image.url }});\">
    {% else %}
    <div class=\"modular-row box-inset-shadow showcase-text {{ bsTools.style(page.header.style|defined('primary')) }}\">
        {% endif %}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-{{ page.header.align|defined('center')}}\">
                    {{ content }}
                    {% for button in page.header.buttons %}
                        <a class=\"btn btn-{% if button.no_outline != true %}outline-{% endif %}{{ button.style|defined('light') }} btn-{{ button.size|defined('lg') }}\" href=\"{{ button.url }}\">{{ button.text }}</a>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</section>
", "partials/showcase.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/partials/showcase.html.twig");
    }
}

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

/* macros/bootstrap_tools.html.twig */
class __TwigTemplate_84f4420dc551d404c5c397e60abf4680587a57809be81606ebe92b326a192587 extends \Twig\Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 15
        echo "
";
        // line 30
        echo "
";
        // line 36
        echo "
";
        // line 50
        echo "
";
        // line 60
        echo "
";
    }

    // line 2
    public function getstyle($__style__ = null, $__noTextClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "style" => $__style__,
            "noTextClass" => $__noTextClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 3
            echo "    ";
            echo twig_trim_filter($this->getAttribute($this, "backgroundStyle", [0 => ($context["style"] ?? null), 1 => ($context["noTextClass"] ?? null)], "method"));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getbackgroundStyle($__style__ = null, $__noTextClass__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "style" => $__style__,
            "noTextClass" => $__noTextClass__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 7
            echo "    ";
            echo (((($context["style"] ?? null)) ? (("bg-" . ($context["style"] ?? null))) : ("")) . ((($context["noTextClass"] ?? null)) ? (($context["noTextClass"] ?? null)) : ((" " . twig_trim_filter($this->getAttribute($this, "textStyle", [0 => ($context["style"] ?? null)], "method"))))));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function gettextStyle($__style__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "style" => $__style__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 11
            ob_start(function () { return ''; });
            // line 12
            echo "    ";
            echo ("text-" . twig_trim_filter($this->getAttribute($this, "processStyle", [0 => ($context["style"] ?? null), 1 => true, 2 => ($context["default"] ?? null)], "method")));
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getnavbarStyle($__style__ = null, $__default__ = null, $__override_page_style__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "style" => $__style__,
            "default" => $__default__,
            "override_page_style" => $__override_page_style__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 17
            echo "    ";
            if ( !($context["override_page_style"] ?? null)) {
                // line 18
                echo "        ";
                $context["style"] = ($context["default"] ?? null);
                // line 19
                echo "    ";
            } else {
                // line 20
                echo "        ";
                $context["style"] = (((isset($context["style"]) || array_key_exists("style", $context))) ? (_twig_default_filter(($context["style"] ?? null), ($context["default"] ?? null))) : (($context["default"] ?? null)));
                // line 21
                echo "    ";
            }
            // line 22
            echo "    ";
            $context["output"] = "navbar-";
            // line 23
            echo "    ";
            if (!twig_in_filter(($context["style"] ?? null), [0 => "primary", 1 => "success", 2 => "danger", 3 => "secondary", 4 => "info", 5 => "dark", 6 => "faded", 7 => "blue", 8 => "indigo", 9 => "purple", 10 => "pink", 11 => "red", 12 => "green", 13 => "teal", 14 => "cyan"])) {
                // line 24
                echo "        ";
                $context["output"] = (($context["output"] ?? null) . "light");
                // line 25
                echo "    ";
            } else {
                // line 26
                echo "        ";
                $context["output"] = (($context["output"] ?? null) . "dark");
                // line 27
                echo "    ";
            }
            // line 28
            echo "    ";
            echo (((($context["output"] ?? null) . " ") . "bg-") . ($context["style"] ?? null));
            echo "
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function getbuttonStyle($__style__ = null, $__isOutline__ = null, $__darkOrLight__ = null, $__default__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "style" => $__style__,
            "isOutline" => $__isOutline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            ob_start(function () { return ''; });
            // line 33
            echo "    ";
            echo ((("btn-" . ((($context["isOutline"] ?? null)) ? ("outline-") : (""))) . twig_trim_filter($this->getAttribute($this, "processStyle", [0 => ($context["style"] ?? null), 1 => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["darkOrLight"] ?? null), true), 2 => ($context["default"] ?? null)], "method"))) . ((($context["size"] ?? null)) ? ((" btn-" . ($context["size"] ?? null))) : ("")));
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getprocessStyle($__style__ = null, $__inversed__ = null, $__default__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "style" => $__style__,
            "inversed" => $__inversed__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 38
            ob_start(function () { return ''; });
            // line 39
            echo "    ";
            $context["output"] = null;
            // line 40
            echo "    ";
            if (($context["inversed"] ?? null)) {
                // line 41
                echo "        ";
                if (twig_in_filter(($context["style"] ?? null), [0 => "primary", 1 => "success", 2 => "danger", 3 => "info", 4 => "dark", 5 => "faded", 6 => "blue", 7 => "indigo", 8 => "purple", 9 => "pink", 10 => "red", 11 => "green", 12 => "teal", 13 => "cyan"])) {
                    // line 42
                    echo "            ";
                    $context["output"] = "light";
                    // line 43
                    echo "        ";
                } else {
                    // line 44
                    echo "            ";
                    $context["output"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["default"] ?? null), "dark");
                    // line 45
                    echo "        ";
                }
                // line 46
                echo "    ";
            }
            // line 47
            echo "    ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter(($context["output"] ?? null), ($context["style"] ?? null)), ($context["default"] ?? null));
            echo "
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 51
    public function getbutton($__url__ = null, $__text__ = null, $__icon__ = null, $__style__ = null, $__outline__ = null, $__darkOrLight__ = null, $__default__ = null, $__size__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "text" => $__text__,
            "icon" => $__icon__,
            "style" => $__style__,
            "outline" => $__outline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "size" => $__size__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 52
            echo "    <a href=\"";
            echo ($context["url"] ?? null);
            echo "\" alt=\"";
            echo ($context["text"] ?? null);
            echo "\"
        class=\"btn ";
            // line 53
            echo twig_trim_filter($this->getAttribute($this, "buttonStyle", [0 => ($context["style"] ?? null), 1 => ($context["outline"] ?? null), 2 => ($context["darkOrLight"] ?? null), 3 => ($context["default"] ?? null), 4 => ($context["size"] ?? null)], "method"));
            echo " ";
            echo ($context["classes"] ?? null);
            echo "\">
        ";
            // line 54
            if (($context["icon"] ?? null)) {
                // line 55
                echo "            <i class=\"fas fa-";
                echo ($context["icon"] ?? null);
                echo "\"></i>
        ";
            }
            // line 57
            echo "        ";
            echo ($context["text"] ?? null);
            echo "
    </a>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 61
    public function getbuttons($__buttons__ = null, $__style__ = null, $__outline__ = null, $__darkOrLight__ = null, $__default__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "buttons" => $__buttons__,
            "style" => $__style__,
            "outline" => $__outline__,
            "darkOrLight" => $__darkOrLight__,
            "default" => $__default__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 62
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["buttons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 63
                echo "        ";
                echo twig_trim_filter($this->getAttribute($this, "button", [0 => $this->getAttribute($context["button"], "url", []), 1 => $this->getAttribute($context["button"], "text", []), 2 => $this->getAttribute($context["button"], "icon", []), 3 => ($context["style"] ?? null), 4 => ($context["outline"] ?? null), 5 => ($context["darkOrLight"] ?? null), 6 => ($context["default"] ?? null), 7 => $this->getAttribute($context["button"], "size", []), 8 => ($context["classes"] ?? null)], "method"));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/bootstrap_tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 63,  387 => 62,  370 => 61,  351 => 57,  345 => 55,  343 => 54,  337 => 53,  330 => 52,  310 => 51,  291 => 47,  288 => 46,  285 => 45,  282 => 44,  279 => 43,  276 => 42,  273 => 41,  270 => 40,  267 => 39,  265 => 38,  251 => 37,  232 => 33,  230 => 32,  214 => 31,  196 => 28,  193 => 27,  190 => 26,  187 => 25,  184 => 24,  181 => 23,  178 => 22,  175 => 21,  172 => 20,  169 => 19,  166 => 18,  163 => 17,  149 => 16,  130 => 12,  128 => 11,  115 => 10,  97 => 7,  84 => 6,  66 => 3,  53 => 2,  48 => 60,  45 => 50,  42 => 36,  39 => 30,  36 => 15,  33 => 9,  30 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# Alias to backgroundStyle() #}
{% macro style(style, noTextClass) %}
    {{ _self.backgroundStyle(style, noTextClass)|trim }}
{% endmacro %}

{% macro backgroundStyle(style, noTextClass) %}
    {{ (style ? 'bg-' ~ style) ~ ( noTextClass ?: ' ' ~ _self.textStyle(style)|trim ) }}
{% endmacro %}

{% macro textStyle(style, default) %}
{% spaceless %}
    {{ 'text-' ~ _self.processStyle(style, true, default)|trim }}
{% endspaceless %}
{% endmacro %}

{% macro navbarStyle(style, default, override_page_style) %}
    {% if not override_page_style %}
        {% set style = default %}
    {% else %}
        {% set style = style|default(default) %}
    {% endif %}
    {% set output = 'navbar-' %}
    {% if style not in ['primary', 'success', 'danger', 'secondary', 'info', 'dark', 'faded', 'blue', 'indigo', 'purple', 'pink', 'red', 'green', 'teal', 'cyan'] %}
        {% set output = output ~ 'light' %}
    {% else %}
        {% set output = output ~ 'dark' %}
    {% endif %}
    {{ output ~ ' ' ~ 'bg-' ~ style }}
{% endmacro %}

{% macro buttonStyle(style, isOutline, darkOrLight, default, size) %}
{% spaceless %}
    {{ 'btn-' ~ (isOutline ? 'outline-') ~ _self.processStyle(style, darkOrLight|defined(true), default)|trim ~ (size ? ' btn-' ~ size) }}
{% endspaceless %}
{% endmacro %}

{% macro processStyle(style, inversed, default) %}
{% spaceless %}
    {% set output = null %}
    {% if inversed %}
        {% if style in ['primary', 'success', 'danger', 'info', 'dark', 'faded', 'blue', 'indigo', 'purple', 'pink', 'red', 'green', 'teal', 'cyan'] %}
            {% set output = 'light' %}
        {% else %}
            {% set output = default|defined('dark') %}
        {% endif %}
    {% endif %}
    {{ output|defined(style)|defined(default) }}
{% endspaceless %}
{% endmacro %}

{% macro button(url, text, icon, style, outline, darkOrLight, default, size, classes) %}
    <a href=\"{{ url }}\" alt=\"{{ text }}\"
        class=\"btn {{ _self.buttonStyle(style, outline, darkOrLight, default, size)|trim }} {{ classes }}\">
        {% if icon %}
            <i class=\"fas fa-{{ icon }}\"></i>
        {% endif %}
        {{ text }}
    </a>
{% endmacro %}

{% macro buttons(buttons, style, outline, darkOrLight, default, classes) %}
    {% for button in buttons %}
        {{ _self.button(button.url, button.text, button.icon, style, outline, darkOrLight, default, button.size, classes)|trim }}
    {% endfor %}
{% endmacro %}
", "macros/bootstrap_tools.html.twig", "/var/www/html/grav/user/themes/bootstrap-blog/templates/macros/bootstrap_tools.html.twig");
    }
}

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

/* partials/footer.html.twig */
class __TwigTemplate_eb69ec270ab1285620cb8bf9a69ffa5b8165bff8c5f23ccea970fa3cce18b059 extends \Twig\Template
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
        echo "  <footer class=\"footer text-center\">
        <div class=\"container has-text-centered\">
         \t<ul class=\"icons\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "icon", []));
        foreach ($context['_seq'] as $context["_key"] => $context["icons"]) {
            echo "\t\t\t
              <li>
                <a href=\"";
            // line 6
            echo $this->getAttribute($context["icons"], "link", []);
            echo "\" class=\"footer-icon \">
                  <i class=\" ";
            // line 7
            echo $this->getAttribute($context["icons"], "name", []);
            echo " fa-2x \"> </i>
                </a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "          </ul>
    \t  \t<p>";
        // line 12
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "copyright", []);
        echo "</p>
        </div>
        
        <div class=\"container has-text-centered pt\">
          <p>
            This site was
              <i class=\"fa fa-code\"></i>
            by <a href=\"//johnmica.me\" target='_blank' rel='noopener noreferrer'>Jonh's Design</a> with the help of the awesome <a href=\"https://bulma.io/\" target=\"_blank\" rel='noopener noreferrer'>Bulma.io </a> and  <a href=\"https://wikiki.github.io/\" target=\"_blank\" rel='noopener noreferrer'>Bulma Components</a> .</p>
        </div>
      </footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  56 => 11,  46 => 7,  42 => 6,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("  <footer class=\"footer text-center\">
        <div class=\"container has-text-centered\">
         \t<ul class=\"icons\">
            {% for icons in theme_config.footer.icon %}\t\t\t
              <li>
                <a href=\"{{icons.link}}\" class=\"footer-icon \">
                  <i class=\" {{icons.name}} fa-2x \"> </i>
                </a>
              </li>
            {% endfor %}
          </ul>
    \t  \t<p>{{ theme_config.footer.copyright }}</p>
        </div>
        
        <div class=\"container has-text-centered pt\">
          <p>
            This site was
              <i class=\"fa fa-code\"></i>
            by <a href=\"//johnmica.me\" target='_blank' rel='noopener noreferrer'>Jonh's Design</a> with the help of the awesome <a href=\"https://bulma.io/\" target=\"_blank\" rel='noopener noreferrer'>Bulma.io </a> and  <a href=\"https://wikiki.github.io/\" target=\"_blank\" rel='noopener noreferrer'>Bulma Components</a> .</p>
        </div>
      </footer>", "partials/footer.html.twig", "/var/www/html/grav/user/themes/bulma-portfolio/templates/partials/footer.html.twig");
    }
}

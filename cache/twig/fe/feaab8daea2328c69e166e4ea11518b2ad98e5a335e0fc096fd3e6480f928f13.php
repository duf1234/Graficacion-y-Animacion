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

/* partials/sections/teaser.html.twig */
class __TwigTemplate_a7c09cb8ea202756214a91c98d6272a3bb3d5aac82640fc3ee7cea5a3d908883 extends \Twig\Template
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
        echo "<section>
\t<h2>Something of interest</h2>
\t<p>Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed.
\tSuspendisse eu varius nibh. Suspendisse vitae magna eget odio amet
\tmollis justo facilisis quis. Sed sagittis mauris amet tellus gravida
\tlorem ipsum dolor sit amet consequat blandit.</p>
\t<footer class=\"controls\">
\t\t<a href=\"#\" class=\"button\">Oh, please continue ....</a>
\t</footer>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/sections/teaser.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section>
\t<h2>Something of interest</h2>
\t<p>Duis neque nisi, dapibus sed mattis quis, rutrum accumsan sed.
\tSuspendisse eu varius nibh. Suspendisse vitae magna eget odio amet
\tmollis justo facilisis quis. Sed sagittis mauris amet tellus gravida
\tlorem ipsum dolor sit amet consequat blandit.</p>
\t<footer class=\"controls\">
\t\t<a href=\"#\" class=\"button\">Oh, please continue ....</a>
\t</footer>
</section>", "partials/sections/teaser.html.twig", "/var/www/html/grav/user/themes/minimaxing/templates/partials/sections/teaser.html.twig");
    }
}

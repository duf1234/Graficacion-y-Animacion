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

/* partials/resume.html.twig */
class __TwigTemplate_e71b4e5254847eb783c2c68b1668fb6da67508e7054c5ebff111027e9ade9d7d extends \Twig\Template
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
        echo "          <section class=\"pt-page pt-page-3\" data-id=\"resume\">
            <div class=\"section-title-block\">
";
        // line 3
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "customtitle", [])) {
            // line 4
            echo "              <h2 class=\"section-title\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "customtitle", []);
            echo "</h2>
";
        } else {
            // line 6
            echo "              <h2 class=\"section-title\">Resume</h2>
";
        }
        // line 8
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "subtitle", [])) {
            // line 9
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "downloadbtn", [])) {
                // line 10
                echo "              <h5 class=\"section-description uppercase\" style=\"max-width:50%;\">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "subtitle", []);
                echo "</h5>
";
            } else {
                // line 12
                echo "              <h5 class=\"section-description uppercase\">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "subtitle", []);
                echo "</h5>
";
            }
        }
        // line 15
        echo "            </div>
";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "downloadbtn", [])) {
            // line 17
            echo "            <div class=\"row\">
              <div class=\"col-sm-12 col-md-12\">
                <div class=\"download-cv-block\">
                  <a class=\"button uppercase\" ";
            // line 20
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "download", [])) {
                echo " href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "download", []);
                echo "\" ";
            }
            echo ">
                    ";
            // line 21
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "section", []), "downloadbtn", []);
            echo "
                  </a>
                </div>
              </div>
            </div>
";
        }
        // line 27
        echo "            <div class=\"row\">
              <div class=\"col-sm-6 col-md-8 subpage-block\" style=\"float:left;\">
";
        // line 29
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "job", [])) > 0)) {
            // line 30
            echo "                <div class=\"block-title\">
                  <h3 class=\"font-600\">EXPERIENCE</h3>
                </div>
                <div class=\"timeline\">
";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "job", []));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 35
                echo "                  <div class=\"timeline-event te-primary\">
                    <h5 class=\"event-date\">";
                // line 36
                echo $this->getAttribute($context["job"], "date", []);
                echo "</h5>
                    <h4 class=\"event-name\">";
                // line 37
                echo $this->getAttribute($context["job"], "company", []);
                echo "</h4>
                    <span class=\"event-description\">";
                // line 38
                echo $this->getAttribute($context["job"], "title", []);
                echo "</span>
                    ";
                // line 39
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["job"], "description", []));
                echo "
                  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                </div>
";
        }
        // line 44
        echo "              </div>
";
        // line 45
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "skills", [])) > 0)) {
            // line 46
            echo "              <div class=\"col-sm-6 col-md-4 subpage-block\" style=\"float:right;\">
";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "skills", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 48
                echo "                <div class=\"block-title\">
                  <h3 class=\"font-600\">";
                // line 49
                echo $this->getAttribute($context["group"], "title", []);
                echo "</h3>
                  <div class=\"skills-info\">
";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "skillslist", []));
                foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
                    // line 52
                    echo "                    <h4>";
                    echo $this->getAttribute($context["skill"], "name", []);
                    echo " ";
                    if ($this->getAttribute($context["skill"], "description", [])) {
                        echo "<em>- (";
                        echo $this->getAttribute($context["skill"], "description", []);
                        echo ")</em>";
                    }
                    echo "</h4>
                    <div class=\"skill-container\">
                      <div class=\"skill-percentage\" style=\"width:";
                    // line 54
                    echo $this->getAttribute($context["skill"], "percentage", []);
                    echo "%;\"></div>
                    </div>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                  </div>
                </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "              </div>
";
        }
        // line 62
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "schools", [])) > 0)) {
            // line 63
            echo "              <div class=\"col-sm-6 col-md-8 subpage-block\" style=\"float:left;\">
                <div class=\"block-title\">
                  <h3 class=\"font-600\">EDUCATION</h3>
                </div>
                <div class=\"timeline\">
";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["header"] ?? null), "resume", []), "schools", []));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 69
                echo "                  <div class=\"timeline-event te-primary col-xs-12\">
                    <h5 class=\"event-date\">";
                // line 70
                echo $this->getAttribute($context["school"], "date", []);
                echo "</h5>
                    <h4 class=\"event-name\">";
                // line 71
                echo $this->getAttribute($context["school"], "name", []);
                echo "</h4>
                    <span class=\"event-description\">";
                // line 72
                echo $this->getAttribute($context["school"], "degree", []);
                echo "</span>
                    ";
                // line 73
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["school"], "description", []));
                echo "
                  </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                </div>
              </div>
";
        }
        // line 79
        echo "            </div>
          </section>
";
    }

    public function getTemplateName()
    {
        return "partials/resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 79,  228 => 76,  219 => 73,  215 => 72,  211 => 71,  207 => 70,  204 => 69,  200 => 68,  193 => 63,  191 => 62,  187 => 60,  179 => 57,  170 => 54,  158 => 52,  154 => 51,  149 => 49,  146 => 48,  142 => 47,  139 => 46,  137 => 45,  134 => 44,  130 => 42,  121 => 39,  117 => 38,  113 => 37,  109 => 36,  106 => 35,  102 => 34,  96 => 30,  94 => 29,  90 => 27,  81 => 21,  73 => 20,  68 => 17,  66 => 16,  63 => 15,  56 => 12,  50 => 10,  48 => 9,  46 => 8,  42 => 6,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("          <section class=\"pt-page pt-page-3\" data-id=\"resume\">
            <div class=\"section-title-block\">
{% if header.resume.section.customtitle %}
              <h2 class=\"section-title\">{{header.resume.section.customtitle}}</h2>
{% else %}
              <h2 class=\"section-title\">Resume</h2>
{% endif %}
{% if header.resume.section.subtitle %}
{% if header.resume.section.downloadbtn %}
              <h5 class=\"section-description uppercase\" style=\"max-width:50%;\">{{header.resume.section.subtitle}}</h5>
{% else %}
              <h5 class=\"section-description uppercase\">{{header.resume.section.subtitle}}</h5>
{% endif %}
{% endif %}
            </div>
{% if header.resume.section.downloadbtn %}
            <div class=\"row\">
              <div class=\"col-sm-12 col-md-12\">
                <div class=\"download-cv-block\">
                  <a class=\"button uppercase\" {% if header.resume.section.download %} href=\"{{header.resume.section.download}}\" {% endif %}>
                    {{header.resume.section.downloadbtn}}
                  </a>
                </div>
              </div>
            </div>
{% endif %}
            <div class=\"row\">
              <div class=\"col-sm-6 col-md-8 subpage-block\" style=\"float:left;\">
{% if header.resume.job | length > 0 %}
                <div class=\"block-title\">
                  <h3 class=\"font-600\">EXPERIENCE</h3>
                </div>
                <div class=\"timeline\">
{% for job in header.resume.job %}
                  <div class=\"timeline-event te-primary\">
                    <h5 class=\"event-date\">{{job.date}}</h5>
                    <h4 class=\"event-name\">{{job.company}}</h4>
                    <span class=\"event-description\">{{job.title}}</span>
                    {{job.description|markdown}}
                  </div>
{% endfor %}
                </div>
{% endif %}
              </div>
{% if header.resume.skills | length > 0 %}
              <div class=\"col-sm-6 col-md-4 subpage-block\" style=\"float:right;\">
{% for group in header.resume.skills %}
                <div class=\"block-title\">
                  <h3 class=\"font-600\">{{group.title}}</h3>
                  <div class=\"skills-info\">
{% for skill in group.skillslist %}
                    <h4>{{skill.name}} {% if skill.description %}<em>- ({{skill.description}})</em>{% endif %}</h4>
                    <div class=\"skill-container\">
                      <div class=\"skill-percentage\" style=\"width:{{skill.percentage}}%;\"></div>
                    </div>
{% endfor %}
                  </div>
                </div>
{% endfor %}
              </div>
{% endif %}
{% if header.resume.schools | length > 0 %}
              <div class=\"col-sm-6 col-md-8 subpage-block\" style=\"float:left;\">
                <div class=\"block-title\">
                  <h3 class=\"font-600\">EDUCATION</h3>
                </div>
                <div class=\"timeline\">
{% for school in header.resume.schools %}
                  <div class=\"timeline-event te-primary col-xs-12\">
                    <h5 class=\"event-date\">{{school.date}}</h5>
                    <h4 class=\"event-name\">{{school.name}}</h4>
                    <span class=\"event-description\">{{school.degree}}</span>
                    {{school.description|markdown}}
                  </div>
{% endfor %}
                </div>
              </div>
{% endif %}
            </div>
          </section>
", "partials/resume.html.twig", "/var/www/html/grav/user/themes/brilliant-resume/templates/partials/resume.html.twig");
    }
}

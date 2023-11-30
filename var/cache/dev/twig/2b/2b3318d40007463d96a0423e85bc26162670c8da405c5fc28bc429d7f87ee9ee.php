<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/export-results.html.twig */
class __TwigTemplate_f8a92688174b6a0265dd2716db9868092ad645c20a98f7b4cc63bff30afdc685 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/export-results.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/export-results.html.twig"));

        // line 1
        echo "<div class=\"dropdown d-inline\">
\t<button type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" id=\"export-results\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exporter les résultats de recherche"), "html", null, true);
        echo "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
\t\t<i class=\"bi bi-download\"></i>
\t\t<span class=\"d-none d-lg-inline-block\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Exporter"), "html", null, true);
        echo "</span>
\t</button>
\t<ul class=\"dropdown-menu\" aria-labelledby=\"export-results\">
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "' + (location.search ? location.search + '&format=pdf' : '?format=pdf'))\">
\t\t\t\t<i class=\"bi bi-file-pdf\"></i>
\t\t\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Format PDF"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "' + (location.search ? location.search + '&format=xlsx' : '?format=xlsx'))\">
\t\t\t\t<i class=\"bi bi-file-earmark-spreadsheet\"></i>
\t\t\t\t";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Format Excel"), "html", null, true);
        echo "
\t\t\t</a>
\t\t</li>
\t</ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/export-results.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  75 => 16,  70 => 14,  63 => 10,  58 => 8,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dropdown d-inline\">
\t<button type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" id=\"export-results\" title=\"{{ \"Exporter les résultats de recherche\"|trans }}\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
\t\t<i class=\"bi bi-download\"></i>
\t\t<span class=\"d-none d-lg-inline-block\">{{ \"Exporter\"|trans }}</span>
\t</button>
\t<ul class=\"dropdown-menu\" aria-labelledby=\"export-results\">
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('{{ path }}' + (location.search ? location.search + '&format=pdf' : '?format=pdf'))\">
\t\t\t\t<i class=\"bi bi-file-pdf\"></i>
\t\t\t\t{{ \"Format PDF\"|trans }}
\t\t\t</a>
\t\t</li>
\t\t<li>
\t\t\t<a class=\"dropdown-item\" href=\"javascript:void()\" onclick=\"window.open('{{ path }}' + (location.search ? location.search + '&format=xlsx' : '?format=xlsx'))\">
\t\t\t\t<i class=\"bi bi-file-earmark-spreadsheet\"></i>
\t\t\t\t{{ \"Format Excel\"|trans }}
\t\t\t</a>
\t\t</li>
\t</ul>
</div>
", "partials/export-results.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\partials\\export-results.html.twig");
    }
}

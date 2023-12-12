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
class __TwigTemplate_0e6a9440dc3851e12b5fbedff83975782f78e1cd3c1a428e0e465a86470b93bf extends Template
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
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["path"] ?? null), "html", null, true);
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
        return array (  69 => 16,  64 => 14,  57 => 10,  52 => 8,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/export-results.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\partials\\export-results.html.twig");
    }
}

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

/* admin/countries/details.html.twig */
class __TwigTemplate_031b91aaa631d83284c12caebfd32296faacc617c00f058fff38131302111bbd extends Template
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
        echo "<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Code"), "html", null, true);
        echo "</td>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["country"] ?? null), "countrycode", [], "any", false, false, false, 4), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["country"] ?? null), "countryname", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Continent"), "html", null, true);
        echo "</td>
    <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["country"] ?? null), "continentname", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Languages"), "html", null, true);
        echo "</td>
    <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["country"] ?? null), "languages", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Flag"), "html", null, true);
        echo "</td>
    <td><img src=\"/img/flags/svg/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["country"] ?? null), "countrycode", [], "any", false, false, false, 20), "html", null, true);
        echo ".svg\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["country"] ?? null), "countrycode", [], "any", false, false, false, 20), "html", null, true);
        echo "\" style=\"max-width:20px\"></td>
  </tr>
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/countries/details.html.twig";
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
        return array (  85 => 20,  81 => 19,  75 => 16,  71 => 15,  65 => 12,  61 => 11,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/countries/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\countries\\details.html.twig");
    }
}

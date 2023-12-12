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

/* admin/geographical_systems/details.html.twig */
class __TwigTemplate_cfae0645558ae825cd8c5767de9c6e7c773c0a2ed807614127c55bcb8eb6cf40 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
        echo "</td>
    <td><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["societe"] ?? null), "image", [], "any", false, false, false, 4)), "html", null, true);
        echo "\" class=\"d-inline-block align-text-top\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["societe"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" height=\"60\" /></td>
  </tr>
  <tr>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        echo "</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["societe"] ?? null), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        echo "</td>
    <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["societe"] ?? null), "accueil", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
        echo "</td>
    <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["societe"] ?? null), "adress", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</td>
    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["societe"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
  </tr>
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/geographical_systems/details.html.twig";
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
        return array (  87 => 20,  83 => 19,  77 => 16,  73 => 15,  67 => 12,  63 => 11,  57 => 8,  53 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/geographical_systems/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\geographical_systems\\details.html.twig");
    }
}

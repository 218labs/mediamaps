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
class __TwigTemplate_6e377a88d75da3b140245734a3e9a0377e221d570670f71dcbd88f5728e54505 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/geographical_systems/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/geographical_systems/details.html.twig"));

        // line 1
        echo "<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
        echo "</td>
    <td><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 4, $this->source); })()), "image", [], "any", false, false, false, 4)), "html", null, true);
        echo "\" class=\"d-inline-block align-text-top\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" height=\"60\" /></td>
  </tr>
  <tr>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nom"), "html", null, true);
        echo "</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accueil"), "html", null, true);
        echo "</td>
    <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 12, $this->source); })()), "accueil", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adresse"), "html", null, true);
        echo "</td>
    <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 16, $this->source); })()), "adress", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</td>
    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 20, $this->source); })()), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
  </tr>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  93 => 20,  89 => 19,  83 => 16,  79 => 15,  73 => 12,  69 => 11,  63 => 8,  59 => 7,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td>{{ \"Logo\"|trans }}</td>
    <td><img src=\"{{ asset(societe.image) }}\" class=\"d-inline-block align-text-top\" alt=\"{{ societe.name }}\" height=\"60\" /></td>
  </tr>
  <tr>
    <td>{{ \"Nom\"|trans }}</td>
    <td>{{ societe.name }}</td>
  </tr>
  <tr>
    <td>{{ \"Accueil\"|trans }}</td>
    <td>{{ societe.accueil }}</td>
  </tr>
  <tr>
    <td>{{ \"Adresse\"|trans }}</td>
    <td>{{ societe.adress }}</td>
  </tr>
  <tr>
    <td>{{ \"Email\"|trans }}</td>
    <td>{{ societe.email }}</td>
  </tr>
</table>", "admin/geographical_systems/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\geographical_systems\\details.html.twig");
    }
}

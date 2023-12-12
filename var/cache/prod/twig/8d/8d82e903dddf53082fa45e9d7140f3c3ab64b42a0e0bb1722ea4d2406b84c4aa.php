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

/* admin/user/details.html.twig */
class __TwigTemplate_7049ba06536801c9added133fe973d7a3c88711e17ecb3c1a81697302ffb4359 extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Company"), "html", null, true);
        echo "</td>
    <td>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "company", [], "any", false, false, false, 4), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First name"), "html", null, true);
        echo "</td>
    <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "prenom", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last name"), "html", null, true);
        echo "</td>
    <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</td>
    <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Telephone"), "html", null, true);
        echo "</td>
    <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "telephone", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Notifications"), "html", null, true);
        echo "</td>
    <td><a class=\"js-notification\" href=\"#\">Allow desktop notifications</a></td>
  </tr>
  
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/user/details.html.twig";
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
        return array (  91 => 23,  85 => 20,  81 => 19,  75 => 16,  71 => 15,  65 => 12,  61 => 11,  55 => 8,  51 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/user/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\user\\details.html.twig");
    }
}

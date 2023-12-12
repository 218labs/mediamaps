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

/* admin/media/details.html.twig */
class __TwigTemplate_82e6ee3055facc42b534299605ccc6139cb13ed6e6188dc80c45ecd1e5e2267f extends Template
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
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media details"), "html", null, true);
        echo "</h3>
    </td>
  </tr>
  ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "logo", [], "any", false, false, false, 7)) {
            // line 8
            echo "  <tr>
    <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
            echo "</td>
    <td><img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "image", [], "any", false, false, false, 10)), "html", null, true);
            echo "\" class=\"d-inline-block align-text-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "\" height=\"60\" /></td>
  </tr>
  ";
        }
        // line 13
        echo "  <tr>
    <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name"), "html", null, true);
        echo "</td>
    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        echo "</td>
    <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "category", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
        echo "</td>
    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "country", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language"), "html", null, true);
        echo "</td>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "language", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact"), "html", null, true);
        echo "</td>
    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "contact", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email"), "html", null, true);
        echo "</td>
    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
  </tr>
   <tr>
    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("telephone"), "html", null, true);
        echo "</td>
    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "telephone", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Visitors count"), "html", null, true);
        echo "</td>
    <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "visitorsCount", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website"), "html", null, true);
        echo "</td>
    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "website", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Interests"), "html", null, true);
        echo "</h3>
    </td>
  </tr>
  ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "getInterests", [], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["mediainterest"]) {
            // line 55
            echo "  <tr>
    <td colspan=\"2\">
      ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mediainterest"], "getInterest", [], "method", false, false, false, 57), "html", null, true);
            echo "
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mediainterest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "  <tr>
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Geographical systems"), "html", null, true);
        echo "</h3>
    </td>
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "getGeographicalSystems", [], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["geographicalSystem"]) {
            // line 66
            echo "  <tr>
    <td colspan=\"2\">
      ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["geographicalSystem"], "getGeographicalSystem", [], "method", false, false, false, 68), "html", null, true);
            echo "
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geographicalSystem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
</table>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/media/details.html.twig";
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
        return array (  210 => 72,  200 => 68,  196 => 66,  192 => 65,  187 => 63,  183 => 61,  173 => 57,  169 => 55,  165 => 54,  159 => 51,  152 => 47,  148 => 46,  142 => 43,  138 => 42,  132 => 39,  128 => 38,  122 => 35,  118 => 34,  112 => 31,  108 => 30,  102 => 27,  98 => 26,  92 => 23,  88 => 22,  82 => 19,  78 => 18,  72 => 15,  68 => 14,  65 => 13,  57 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/media/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\media\\details.html.twig");
    }
}

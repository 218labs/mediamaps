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
class __TwigTemplate_fb17d8b9805fc081fec40a831c4f9b4df2ffed5bc065fb510cc0dd2770319502 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/details.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 7, $this->source); })()), "logo", [], "any", false, false, false, 7)) {
            // line 8
            echo "  <tr>
    <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
            echo "</td>
    <td><img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10)), "html", null, true);
            echo "\" class=\"d-inline-block align-text-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 10, $this->source); })()), "name", [], "any", false, false, false, 10), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        echo "</td>
    <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 19, $this->source); })()), "category", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country"), "html", null, true);
        echo "</td>
    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 23, $this->source); })()), "country", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language"), "html", null, true);
        echo "</td>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 27, $this->source); })()), "language", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact"), "html", null, true);
        echo "</td>
    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 31, $this->source); })()), "contact", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("email"), "html", null, true);
        echo "</td>
    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
  </tr>
   <tr>
    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("telephone"), "html", null, true);
        echo "</td>
    <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 39, $this->source); })()), "telephone", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Visitors count"), "html", null, true);
        echo "</td>
    <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 43, $this->source); })()), "visitorsCount", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website"), "html", null, true);
        echo "</td>
    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 47, $this->source); })()), "website", [], "any", false, false, false, 47), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 54, $this->source); })()), "getInterests", [], "method", false, false, false, 54));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new RuntimeError('Variable "media" does not exist.', 65, $this->source); })()), "getGeographicalSystems", [], "method", false, false, false, 65));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  216 => 72,  206 => 68,  202 => 66,  198 => 65,  193 => 63,  189 => 61,  179 => 57,  175 => 55,  171 => 54,  165 => 51,  158 => 47,  154 => 46,  148 => 43,  144 => 42,  138 => 39,  134 => 38,  128 => 35,  124 => 34,  118 => 31,  114 => 30,  108 => 27,  104 => 26,  98 => 23,  94 => 22,  88 => 19,  84 => 18,  78 => 15,  74 => 14,  71 => 13,  63 => 10,  59 => 9,  56 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-hover table-basic mb-0\">
  <tr>
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>{{ \"Media details\"|trans }}</h3>
    </td>
  </tr>
  {% if media.logo %}
  <tr>
    <td>{{ \"Logo\"|trans }}</td>
    <td><img src=\"{{ asset(media.image) }}\" class=\"d-inline-block align-text-top\" alt=\"{{ media.name }}\" height=\"60\" /></td>
  </tr>
  {% endif %}
  <tr>
    <td>{{ \"Name\"|trans }}</td>
    <td>{{ media.name }}</td>
  </tr>
  <tr>
    <td>{{ \"Category\"|trans }}</td>
    <td>{{ media.category }}</td>
  </tr>
  <tr>
    <td>{{ \"Country\"|trans }}</td>
    <td>{{ media.country }}</td>
  </tr>
  <tr>
    <td>{{ \"Language\"|trans }}</td>
    <td>{{ media.language }}</td>
  </tr>
  <tr>
    <td>{{ \"contact\"|trans }}</td>
    <td>{{ media.contact }}</td>
  </tr>
  <tr>
    <td>{{ \"email\"|trans }}</td>
    <td>{{ media.email }}</td>
  </tr>
   <tr>
    <td>{{ \"telephone\"|trans }}</td>
    <td>{{ media.telephone }}</td>
  </tr>
  <tr>
    <td>{{ \"Visitors count\"|trans }}</td>
    <td>{{ media.visitorsCount }}</td>
  </tr>
  <tr>
    <td>{{ \"Website\"|trans }}</td>
    <td>{{ media.website }}</td>
  </tr>
  <tr>
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>{{ \"Interests\"|trans }}</h3>
    </td>
  </tr>
  {% for mediainterest in media.getInterests() %}
  <tr>
    <td colspan=\"2\">
      {{ mediainterest.getInterest() }}
    </td>
  </tr>
  {% endfor %}
  <tr>
    <td colspan=\"2\" class=\"styled-title mb-2\">
      <h3>{{ \"Geographical systems\"|trans }}</h3>
    </td>
    {% for geographicalSystem in media.getGeographicalSystems() %}
  <tr>
    <td colspan=\"2\">
      {{ geographicalSystem.getGeographicalSystem() }}
    </td>
  </tr>
  {% endfor %}

</table>", "admin/media/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\media\\details.html.twig");
    }
}

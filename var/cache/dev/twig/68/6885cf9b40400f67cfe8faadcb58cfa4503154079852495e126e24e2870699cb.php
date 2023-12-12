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

/* admin/link/details.html.twig */
class __TwigTemplate_497cbdea1e1135287c668a00f1d292a18fb44d4a7c26f935c747fba1ac5fef6f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/link/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/link/details.html.twig"));

        // line 1
        echo "<table class=\"table table-hover table-basic mb-0\">
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 2, $this->source); })()), "media", [], "any", false, false, false, 2), "logo", [], "any", false, false, false, 2)) {
            // line 3
            echo "  <tr>
    <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
            echo "</td>
    <td><img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/logos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 5, $this->source); })()), "media", [], "any", false, false, false, 5), "logo", [], "any", false, false, false, 5))), "html", null, true);
            echo "\" class=\"d-inline-block align-text-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 5, $this->source); })()), "media", [], "any", false, false, false, 5), "logo", [], "any", false, false, false, 5), "html", null, true);
            echo "\" height=\"60\" /></td>
  </tr>
  ";
        }
        // line 8
        echo "  <tr>
    <td>";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title"), "html", null, true);
        echo "</td>
    <td><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 10, $this->source); })()), "link", [], "any", false, false, false, 10), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></td>
  </tr>
  <tr>
    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compaign"), "html", null, true);
        echo "</td>
    <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 14, $this->source); })()), "compaign", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language"), "html", null, true);
        echo "</td>
    <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 18, $this->source); })()), "language", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media"), "html", null, true);
        echo "</td>
    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 22, $this->source); })()), "media", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        echo "</td>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orientation"), "html", null, true);
        echo "</td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 30, $this->source); })()), "orientation", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Geographical scope"), "html", null, true);
        echo "</td>
    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 34, $this->source); })()), "geographicalScope", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published on"), "html", null, true);
        echo "</td>
    <td>";
        // line 38
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })()), "publishedOn", [], "any", false, false, false, 38))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 38, $this->source); })()), "publishedOn", [], "any", false, false, false, 38), "m/d/Y"), "html", null, true);
            echo " ";
        }
        echo "</td>
  </tr>
  ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 40, $this->source); })()), "fileName", [], "any", false, false, false, 40)) {
            // line 41
            echo "  <tr>
    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File"), "html", null, true);
            echo "</td>
    <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 43, $this->source); })()), "getAttachment", [], "method", false, false, false, 43), "html", null, true);
            echo "\" target=\"_blank\" />Download Attachment</td>
  </tr>
  ";
        } else {
            // line 46
            echo "  <tr>
    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File"), "html", null, true);
            echo "</td>
    <td>No Attachment</td>
  </tr>    
  ";
        }
        // line 51
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
        return "admin/link/details.html.twig";
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
        return array (  175 => 51,  168 => 47,  165 => 46,  159 => 43,  155 => 42,  152 => 41,  150 => 40,  142 => 38,  138 => 37,  132 => 34,  128 => 33,  122 => 30,  118 => 29,  112 => 26,  108 => 25,  102 => 22,  98 => 21,  92 => 18,  88 => 17,  82 => 14,  78 => 13,  70 => 10,  66 => 9,  63 => 8,  55 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-hover table-basic mb-0\">
  {% if link.media.logo %}
  <tr>
    <td>{{ \"Logo\"|trans }}</td>
    <td><img src=\"{{ asset('/uploads/logos/' ~ link.media.logo) }}\" class=\"d-inline-block align-text-top\" alt=\"{{ link.media.logo }}\" height=\"60\" /></td>
  </tr>
  {% endif %}
  <tr>
    <td>{{ \"Title\"|trans }}</td>
    <td><a href=\"{{ link.link }}\" target=\"_blank\">{{ link.title }}</a></td>
  </tr>
  <tr>
    <td>{{ \"Compaign\"|trans }}</td>
    <td>{{ link.compaign }}</td>
  </tr>
  <tr>
    <td>{{ \"Language\"|trans }}</td>
    <td>{{ link.language }}</td>
  </tr>
  <tr>
    <td>{{ \"Media\"|trans }}</td>
    <td>{{ link.media }}</td>
  </tr>
  <tr>
    <td>{{ \"Category\"|trans }}</td>
    <td>{{ link.category }}</td>
  </tr>
  <tr>
    <td>{{ \"Orientation\"|trans }}</td>
    <td>{{ link.orientation }}</td>
  </tr>
  <tr>
    <td>{{ \"Geographical scope\"|trans }}</td>
    <td>{{ link.geographicalScope }}</td>
  </tr>
  <tr>
    <td>{{ \"Published on\"|trans }}</td>
    <td>{% if link.publishedOn is not empty %}{{ link.publishedOn|date(\"m/d/Y\") }} {% endif %}</td>
  </tr>
  {% if link.fileName %}
  <tr>
    <td>{{ \"File\"|trans }}</td>
    <td><a href=\"{{ link.getAttachment() }}\" target=\"_blank\" />Download Attachment</td>
  </tr>
  {% else %}
  <tr>
    <td>{{ \"File\"|trans }}</td>
    <td>No Attachment</td>
  </tr>    
  {% endif %}

</table>", "admin/link/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\link\\details.html.twig");
    }
}

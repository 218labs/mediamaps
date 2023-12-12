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
class __TwigTemplate_4ad5aa92f652fb21a3a81e16a415f41aebafe7bcb71673fb2312c49b6fc5b196 extends Template
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
  ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "media", [], "any", false, false, false, 2), "logo", [], "any", false, false, false, 2)) {
            // line 3
            echo "  <tr>
    <td>";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo"), "html", null, true);
            echo "</td>
    <td><img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/logos/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "media", [], "any", false, false, false, 5), "logo", [], "any", false, false, false, 5))), "html", null, true);
            echo "\" class=\"d-inline-block align-text-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "media", [], "any", false, false, false, 5), "logo", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "link", [], "any", false, false, false, 10), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</a></td>
  </tr>
  <tr>
    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compaign"), "html", null, true);
        echo "</td>
    <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "compaign", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language"), "html", null, true);
        echo "</td>
    <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "language", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media"), "html", null, true);
        echo "</td>
    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "media", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        echo "</td>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "category", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orientation"), "html", null, true);
        echo "</td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "orientation", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Geographical scope"), "html", null, true);
        echo "</td>
    <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "geographicalScope", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published on"), "html", null, true);
        echo "</td>
    <td>";
        // line 38
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "publishedOn", [], "any", false, false, false, 38))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "publishedOn", [], "any", false, false, false, 38), "m/d/Y"), "html", null, true);
            echo " ";
        }
        echo "</td>
  </tr>
  ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "fileName", [], "any", false, false, false, 40)) {
            // line 41
            echo "  <tr>
    <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File"), "html", null, true);
            echo "</td>
    <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["link"] ?? null), "getAttachment", [], "method", false, false, false, 43), "html", null, true);
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
        return array (  169 => 51,  162 => 47,  159 => 46,  153 => 43,  149 => 42,  146 => 41,  144 => 40,  136 => 38,  132 => 37,  126 => 34,  122 => 33,  116 => 30,  112 => 29,  106 => 26,  102 => 25,  96 => 22,  92 => 21,  86 => 18,  82 => 17,  76 => 14,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/link/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\link\\details.html.twig");
    }
}

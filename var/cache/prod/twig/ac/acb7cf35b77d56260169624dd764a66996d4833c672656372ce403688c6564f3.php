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

/* layout/table/pagination.html.twig */
class __TwigTemplate_27dafb4a9901327a48201e59f2eb74cad0606c923793900f5172a1388cc4fcd5 extends Template
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
        echo "<div class=\"d-flex float-start float-md-end\">
  <div class=\"me-2 align-self-center\">
    ";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%total% entrées", ["%total%" => (("<span class=\"chm-table-total\">" . twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "count", [], "any", false, false, false, 3)) . "</span>")]);
        echo "
  </div>
  <div class=\"input-group w-auto m-0\">
    <button 
      type=\"button\" 
      title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Précédente"), "html", null, true);
        echo "\"  
      class=\"btn btn-outline-secondary rounded-0 shadow-none prev-page\"
      ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "page", [], "any", false, false, false, 10) == 1)) {
            echo "disabled";
        }
        // line 11
        echo "    >
      <i class=\"bi bi-arrow-left\"></i>
    </button>
    <input 
      type=\"text\" 
      max=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pages", [], "any", false, false, false, 16), "html", null, true);
        echo "\" 
      value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "page", [], "any", false, false, false, 17), "html", null, true);
        echo "\" 
      class=\"form-control page-number\"
      title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page (%page%/%pages%)", ["%page%" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "page", [], "any", false, false, false, 19), "%pages%" => twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pages", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" 
    />
    <button 
      type=\"button\" 
      class=\"btn btn-outline-secondary rounded-0 shadow-none border-start-0 next-page\"
      ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "page", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pages", [], "any", false, false, false, 24))) {
            echo "disabled";
        }
        // line 25
        echo "      title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Suivante"), "html", null, true);
        echo "\"
    >
      <i class=\"bi bi-arrow-right\"></i>
    </button>
  </div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/pagination.html.twig";
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
        return array (  86 => 25,  82 => 24,  74 => 19,  69 => 17,  65 => 16,  58 => 11,  54 => 10,  49 => 8,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/table/pagination.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\pagination.html.twig");
    }
}

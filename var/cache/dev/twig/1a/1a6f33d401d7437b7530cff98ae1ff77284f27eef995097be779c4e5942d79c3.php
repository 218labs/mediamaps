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
class __TwigTemplate_dcafd77dfe4f238ca2f56e47c247acc863cfb81049554151b2cb1205c7738951 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/pagination.html.twig"));

        // line 1
        echo "<div class=\"d-flex float-start float-md-end\">
  <div class=\"me-2 align-self-center\">
    ";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%total% entrées", ["%total%" => (("<span class=\"chm-table-total\">" . twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "count", [], "any", false, false, false, 3)) . "</span>")]);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()), "page", [], "any", false, false, false, 10) == 1)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 16, $this->source); })()), "pages", [], "any", false, false, false, 16), "html", null, true);
        echo "\" 
      value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 17, $this->source); })()), "page", [], "any", false, false, false, 17), "html", null, true);
        echo "\" 
      class=\"form-control page-number\"
      title=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Page (%page%/%pages%)", ["%page%" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "page", [], "any", false, false, false, 19), "%pages%" => twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "pages", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\" 
    />
    <button 
      type=\"button\" 
      class=\"btn btn-outline-secondary rounded-0 shadow-none border-start-0 next-page\"
      ";
        // line 24
        if ((twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "page", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "pages", [], "any", false, false, false, 24))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  92 => 25,  88 => 24,  80 => 19,  75 => 17,  71 => 16,  64 => 11,  60 => 10,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex float-start float-md-end\">
  <div class=\"me-2 align-self-center\">
    {{ \"%total% entrées\"|trans({'%total%': '<span class=\"chm-table-total\">' ~ data.count ~ '</span>'})|raw }}
  </div>
  <div class=\"input-group w-auto m-0\">
    <button 
      type=\"button\" 
      title=\"{{ \"Précédente\"|trans }}\"  
      class=\"btn btn-outline-secondary rounded-0 shadow-none prev-page\"
      {% if data.page == 1 %}disabled{% endif %}
    >
      <i class=\"bi bi-arrow-left\"></i>
    </button>
    <input 
      type=\"text\" 
      max=\"{{ data.pages }}\" 
      value=\"{{ data.page }}\" 
      class=\"form-control page-number\"
      title=\"{{ \"Page (%page%/%pages%)\"|trans({'%page%': data.page, '%pages%': data.pages}) }}\" 
    />
    <button 
      type=\"button\" 
      class=\"btn btn-outline-secondary rounded-0 shadow-none border-start-0 next-page\"
      {% if data.page == data.pages %}disabled{% endif %}
      title=\"{{ \"Suivante\"|trans }}\"
    >
      <i class=\"bi bi-arrow-right\"></i>
    </button>
  </div>
</div>", "layout/table/pagination.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\pagination.html.twig");
    }
}

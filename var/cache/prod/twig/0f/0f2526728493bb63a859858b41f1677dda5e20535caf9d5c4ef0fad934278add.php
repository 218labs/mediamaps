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

/* layout/table/bottom.html.twig */
class __TwigTemplate_5e4019ace18a207cc921e44a668e107a67eb7f2ac268eacf9637ed3a61a8bba3 extends Template
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
        echo "<div class=\"row table-bottom mt-3\">
  <div class=\"col-md-6 mb-3 mb-lg-0\">
    <div class=\"input-group m-0\">
      ";
        // line 4
        $this->loadTemplate("layout/table/bulk-actions.html.twig", "layout/table/bottom.html.twig", 4)->display($context);
        // line 5
        echo "      <select class=\"form-control perpage\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Éléments par page"), "html", null, true);
        echo "\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "perpages", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["perpage"]) {
            // line 7
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["perpage"], "html", null, true);
            echo "\" ";
            echo ((($context["perpage"] == twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "perpage", [], "any", false, false, false, 7))) ? ("selected") : (""));
            echo ">
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["perpage"], "html", null, true);
            echo "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perpage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </select>
      <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none btn-loading\">
        <span class=\"spinner-border spinner-border-sm\"></span>
      </button>
    </div>
  </div>
  <div class=\"col-md-6\">
    ";
        // line 18
        $this->loadTemplate("layout/table/pagination.html.twig", "layout/table/bottom.html.twig", 18)->display($context);
        // line 19
        echo "  </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/bottom.html.twig";
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
        return array (  80 => 19,  78 => 18,  69 => 11,  60 => 8,  53 => 7,  49 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/table/bottom.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\bottom.html.twig");
    }
}
